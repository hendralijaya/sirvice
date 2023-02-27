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
        $this->db->query('SELECT COUNT(*) FROM ' . $this->table . ' WHERE user_id=:user_id AND status="scheduled"');
        $this->db->bind('user_id', $userId);
        return $this->db->single();
    }

    public function countTotalOrders($userId)
    {
        $this->db->query('SELECT COUNT(*) FROM ' . $this->table . ' WHERE user_id=:user_id');
        $this->db->bind('user_id', $userId);
        return $this->db->single();
    }

    public function upcomingOrders($userId)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE user_id=:user_id AND status="scheduled" OR status="in progress" ORDER BY date ASC');
        $this->db->bind('user_id', $userId);
        return $this->db->resultSet();
    }
}