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
        $this->db->query('SELECT COUNT(*) AS value FROM ' . $this->table . ' WHERE user_id=:user_id AND status="scheduled"');
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
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE user_id=:user_id AND status="scheduled" OR status="in progress" ORDER BY date_time ASC');
        $this->db->bind('user_id', $userId);
        return $this->db->resultSet();
    }

    public function countUpcomingOrders($userId)
    {
        $this->db->query('SELECT COUNT(*) AS value FROM ' . $this->table . ' WHERE user_id=:user_id AND status="scheduled" OR status="in progress"');
        $this->db->bind('user_id', $userId);
        return $this->db->single()['value'];
    }
}