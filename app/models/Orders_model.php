<?php 

class Orders_model {
    private $table = 'orders';
    private $manyToManyTable = 'order_services';
    private $neighborTable = 'services';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function countScheduledOrders($userId)
    {
        $this->db->query('SELECT COUNT(*) AS value FROM ' . $this->table . ' WHERE user_id=:user_id AND status="Scheduled"');
        $this->db->bind('user_id', $userId);
        return $this->db->single()['value'];
    }

    public function countTotalOrders($userId)
    {
        $this->db->query('SELECT COUNT(*) AS value FROM ' . $this->table . ' WHERE user_id=:user_id');
        $this->db->bind('user_id', $userId);
        return $this->db->single()['value'];
    }

    public function upcomingOrders($userId)
    {
        $this->db->query('SELECT *, DATE_FORMAT(scheduled_date, "%d-%m-%Y") AS scheduled_date FROM ' . $this->table . ' WHERE user_id=:user_id AND (status="Scheduled" OR status="In Progress") ORDER BY order_date ASC');
        $this->db->bind('user_id', $userId);
        return $this->db->resultSet();
    }

    public function countUpcomingOrders($userId)
    {
        $this->db->query('SELECT COUNT(*) AS value FROM ' . $this->table . ' WHERE user_id=:user_id AND (status="Scheduled" OR status="In Progress")');
        $this->db->bind('user_id', $userId);
        return $this->db->single()['value'];
    }

    public function getOrders($userId)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE user_id=:user_id ORDER BY order_date DESC');
        $this->db->bind('user_id', $userId);
        return $this->db->resultSet();
    }

    public function inprogressOrders($userId)
    {
        $this->db->query('SELECT *, DATE_FORMAT(scheduled_date, "%d-%m-%Y") AS scheduled_date, DATE_FORMAT(order_date, "%d-%m-%Y") AS order_date FROM ' . $this->table . ' WHERE user_id=:user_id AND status="In Progress" ORDER BY order_date ASC');
        $this->db->bind('user_id', $userId);
        return $this->db->resultSet();
    }

    public function scheduledOrders($userId)
    {
        $this->db->query('SELECT *, DATE_FORMAT(scheduled_date, "%d-%m-%Y") AS scheduled_date, DATE_FORMAT(order_date, "%d-%m-%Y") AS order_date FROM ' . $this->table . ' WHERE user_id=:user_id AND status="Scheduled" ORDER BY order_date ASC');
        $this->db->bind('user_id', $userId);
        return $this->db->resultSet();
    }

    public function historyOrders($userId)
    {
        $this->db->query('SELECT *, DATE_FORMAT(scheduled_date, "%d-%m-%Y") AS scheduled_date, DATE_FORMAT(order_date, "%d-%m-%Y") AS order_date FROM ' . $this->table . ' WHERE user_id=:user_id AND status="Done" ORDER BY order_date DESC');
        $this->db->bind('user_id', $userId);
        return $this->db->resultSet();
    }

    public function createOrder($userId, $data, $files)
    {
        $payment_file = Helper::uploadFile($files['payment'], PAYMENT_PATH);
        $total_price = $this->getTotalPrice($data['service_id'], $data['number_unit']);
        $scheduled_day = Helper::getDay($data['scheduled_date']);
        $this->db->query('INSERT INTO ' . $this->table . ' (user_id, address_id, technician_id, total_price, scheduled_date, scheduled_day, scheduled_time, status, payment, number_unit, ac_brand, description) VALUES (:user_id, :address_id, :technician_id, :total_price, :scheduled_date, :scheduled_day, :scheduled_time, :status, :payment, :number_unit, :ac_brand, :description)');
        $this->db->bind('user_id', $userId);
        $this->db->bind('address_id', $data['address_id']);
        $this->db->bind('technician_id', random_int(1, 3));
        $this->db->bind('total_price', $total_price);
        $this->db->bind('scheduled_date', $data['scheduled_date']);
        $this->db->bind('scheduled_day', $scheduled_day);
        $this->db->bind('scheduled_time', $data['scheduled_time']);
        $this->db->bind('status', 'Scheduled');
        $this->db->bind('payment', $payment_file);
        $this->db->bind('number_unit', $data['number_unit']);
        $this->db->bind('ac_brand', $data['ac_brand']);
        $this->db->bind('description', $data['description']);
        $this->db->execute();

        $orderId = $this->db->lastInsertId();
        // Insert into order_services
        foreach ($data['service_id'] as $serviceId) {
            $this->db->query('INSERT INTO ' . $this->manyToManyTable . ' (order_id, service_id) VALUES (:order_id, :service_id)');
            $this->db->bind('order_id', $orderId);
            $this->db->bind('service_id', $serviceId);
            $this->db->execute();
        }
        return $orderId;
    }

    private function getTotalPrice($servicesId, $number_unit)
    {
        $totalPrice = 0;
        foreach ($servicesId as $serviceId) {
            $this->db->query('SELECT price FROM ' . $this->neighborTable . ' WHERE id=:id');
            $this->db->bind('id', $serviceId);
            $totalPrice += $this->db->single()['price'];
        }
        $totalPrice = $totalPrice * $number_unit;
        return $totalPrice + ($totalPrice * 0.02);
    }
}