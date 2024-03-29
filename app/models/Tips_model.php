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
    $this->db->query('SELECT *, SUBSTRING(description, 1, 140) as description, DATE_FORMAT(date, "%d-%m-%Y") AS date FROM ' . $this->table . ' ORDER BY id ASC LIMIT 1');
    return $this->db->single();
  }

  public function getAllTips()
  {
    $this->db->query('SELECT *, SUBSTRING(description, 1, 140) as description, DATE_FORMAT(date, "%d-%m-%Y") AS date FROM ' . $this->table . ' ORDER BY date ASC');
    return $this->db->resultSet();
  }

  public function getTipsById($id)
  {
    $this->db->query('SELECT *, DATE_FORMAT(date, "%d-%m-%Y") AS date FROM ' . $this->table . ' WHERE id=:id');
    $this->db->bind('id', $id);
    return $this->db->single();
  }

  public function searchTips($searchQuery)
  {
    $this->db->query('SELECT *, SUBSTRING(description, 1, 140) as description, DATE_FORMAT(date, "%d-%m-%Y") AS date FROM ' . $this->table . ' WHERE LOWER(title) LIKE LOWER(:searchQuery) OR LOWER(description) LIKE LOWER(:searchQuery) ORDER BY date ASC');
    $this->db->bind('searchQuery', '%' . $searchQuery . '%');
    return $this->db->resultSet();
  }
}