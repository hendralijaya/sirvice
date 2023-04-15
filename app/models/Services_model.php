<?php 
class Services_model {
    private $table = 'services';
    private $manyToManyTable = 'order_services';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllServices()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getTenLatestServices()
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' ORDER BY id DESC LIMIT 10');
        return $this->db->resultSet();
    }

    public function getServicesByOrder($orderId)
    {
        $this->db->query('SELECT * FROM ' . $this->manyToManyTable . ' WHERE order_id=:order_id');
        $this->db->bind('order_id', $orderId);
        $order_service = $this->db->resultSet();
        $services = [];
        foreach ($order_service as $os) {
            $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
            $this->db->bind('id', $os['service_id']);
            $services[] = $this->db->single();
        }
        return $services;
    }
}