<?php 

class Address_model {
    private $table = 'addresses';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAddressById($userId, $addressId)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE user_id=:user_id AND id=:id');
        $this->db->bind('user_id', $userId);
        $this->db->bind('id', $addressId);
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

    public function addAddress($userId, $data) {
        $this->db->query('INSERT INTO ' . $this->table . ' (user_id, label_address, street, sub_district, district, regency, province, country, post_code, additional_information) VALUES (:user_id, :label_address, :street, :sub_district, :district, :regency, :province, :country, :post_code, :additional_information)');
        $this->db->bind('user_id', $userId);
        $this->db->bind('label_address', $data['label_address']);
        $this->db->bind('street', $data['street']);
        $this->db->bind('sub_district', $data['sub_district']);
        $this->db->bind('district', $data['district']);
        $this->db->bind('regency', $data['regency']);
        $this->db->bind('province', $data['province']);
        $this->db->bind('country', $data['country']);
        $this->db->bind('post_code', $data['post_code']);
        $this->db->bind('additional_information', $data['additional_information']);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function updateAddress($userId, $addressId, $data) {
        $this->db->query('UPDATE ' . $this->table . ' SET label_address=:label_address, street=:street, sub_district=:sub_district, district=:district, regency=:regency, province=:province, country=:country, post_code=:post_code, additional_information=:additional_information WHERE user_id=:user_id AND id=:id');
        $this->db->bind('user_id', $userId);
        $this->db->bind('id', $addressId);
        $this->db->bind('label_address', $data['label_address']);
        $this->db->bind('street', $data['street']);
        $this->db->bind('sub_district', $data['sub_district']);
        $this->db->bind('district', $data['district']);
        $this->db->bind('regency', $data['regency']);
        $this->db->bind('province', $data['province']);
        $this->db->bind('country', $data['country']);
        $this->db->bind('post_code', $data['post_code']);
        $this->db->bind('additional_information', $data['additional_information']);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function deleteAddress($userId, $addressId)
    {
        $this->db->query('DELETE FROM ' . $this->table . ' WHERE user_id=:user_id AND id=:id');
        $this->db->bind('user_id', $userId);
        $this->db->bind('id', $addressId);
        $this->db->execute();
        return $this->db->rowCount();
    }
}