<?php 
class Services_model {
    private $table = 'services';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllNameServices()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getTenLatestServices()
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' ORDER BY id DESC LIMIT 10');
        return $this->db->resultSet();
    }
}