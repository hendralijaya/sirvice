<?php 
class Technicians_model {
  private $table = 'technicians';
  private $db;

  public function __construct()
  {
    $this->db = new Database;
  }

  public function getTechnician()
  {
    $this->db->query('SELECT * FROM ' . $this->table);
    return $this->db->single();
  }
}