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
}