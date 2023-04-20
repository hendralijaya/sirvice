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
    $this->db->query('SELECT * FROM ' . $this->table . ' LIMIT 1');
    return $this->db->single();
  }

  public function getTechnicianById($id)
  {
    $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
    $this->db->bind('id', $id);
    return $this->db->single();
  }
}