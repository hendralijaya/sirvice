<?php 

class Address_model {
    private $table = 'addresses';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAddressById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function searchAddress($query, $userId)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE user_id:user_id AND (label_address LIKE :query OR street LIKE :query OR sub_district LIKE :query OR district LIKE :query OR regency LIKE :query OR province LIKE :query OR country LIKE :query OR post_code LIKE :query)');
        $this->db->bind('query', '%' . $query . '%');
        $this->db->bind('user_id', $userId);
        return $this->db->resultSet();
    }

    public function getAddressByUserId($userId)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE user_id=:user_id');
        $this->db->bind('user_id', $userId);
        return $this->db->resultSet();
    }
}