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
        $this->db->query('SELECT ROUND(AVG(rating),1) AS value FROM ' . $this->table);
        return $this->db->single()['value'];
    }

    public function createReview($userId, $data)
    {
        $this->db->query('INSERT INTO ' . $this->table . ' (user_id, order_id, rating, description) VALUES (:user_id, :order_id, :rating, :description)');
        $this->db->bind('user_id', $userId);
        $this->db->bind('order_id', $data['order_id']);
        $this->db->bind('rating', $data['rating']);
        $this->db->bind('description', $data['description']);
        $this->db->execute();
        return $this->db->rowCount();
    }
}