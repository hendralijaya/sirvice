<?php 

class Auth_model {
    private $table = 'users';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function register($data)
  {
    $query = "INSERT INTO $this->table VALUES ('', :email, :password, :name, :phone_number, '')";
    $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);
    $this->db->query($query);
    $this->db->bind('email', $data['email']);
    $this->db->bind('password', $data['password']);
    $this->db->bind('name', $data['name']);
    $this->db->bind('phone_number', $data['phone_number']);
    $this->db->execute();

    return $this->db->rowCount();
  }

  public function login($data)
  {
    $query = "SELECT * FROM users WHERE email = :email";
    $this->db->query($query);
    $this->db->bind('email', $data['email']);
    $this->db->execute();
    $row = $this->db->single();
    $password = $row['password'];
    if (password_verify($data['password'], $password)) {
      return $row;
    } else {
      return false;
    }
  }
}