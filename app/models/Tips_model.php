<?php 
class Tips_model {
  private $table = 'tips';
  private $db;

  public function __construct()
  {
    $this->db = new Database;
  }

  public function getFirstTips()
  {
    $this->db->query('SELECT * FROM ' . $this->table . ' ORDER BY id ASC LIMIT 1');
    return $this->db->single();
  }

  public function getAllTips()
  {
    $this->db->query('SELECT *, DATE_FORMAT(date, "%d-%m-%Y") AS date FROM ' . $this->table . ' ORDER BY date ASC');
    return $this->db->resultSet();
  }

  public function getTipsById($id)
  {
    $this->db->query('SELECT *, DATE_FORMAT(date, "%d-%m-%Y") AS date FROM ' . $this->table . ' WHERE id=:id');
    $this->db->bind('id', $id);
    return $this->db->single();
  }

  public function searchTips($searchQuery, $userId)
  {
    $this->db->query('SELECT *, DATE_FORMAT(date, "%d-%m-%Y") AS date FROM ' . $this->table . ' WHERE user_id = :user_id AND (LOWER(title) LIKE LOWER(:query) OR LOWER(description) LIKE LOWER(:query))');
    $this->db->bind('query', '%' . $searchQuery . '%');
    $this->db->bind('user_id', $userId);
    return $this->db->resultSet();
  }
}