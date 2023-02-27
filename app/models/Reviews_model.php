<?php 
class Reviews_model {
    private $table = 'reviews';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllReviews()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getTenLatestReviews()
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' ORDER BY id DESC LIMIT 10');
        return $this->db->resultSet();
    }

    public function getAverageRatingReviews()
    {
        $this->db->query('SELECT AVG(rating) FROM ' . $this->table);
        return $this->db->single();
    }
}