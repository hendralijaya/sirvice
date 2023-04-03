<?php 

class Orders_model {
    private $table = 'orders';
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
}