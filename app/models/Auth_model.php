<?php

use FFI\Exception;

class Auth_model {
    private $table = 'users';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getUserByEmail($email)
    {
        $this->db->query("SELECT * FROM $this->table WHERE email = :email");
        $this->db->bind('email', $email);
        return $this->db->single();
    }

    public function register($data)
  {
    try {
      $query = "INSERT INTO $this->table VALUES ('', :email, :password, :name, :phone_number, :verification_code, 0, '')";
      $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);
      $this->db->query($query);
      $this->db->bind('email', $data['email']);
      $this->db->bind('password', $data['password']);
      $this->db->bind('name', $data['name']);
      $this->db->bind('phone_number', $data['phone_number']);
      $this->db->bind('verification_code', $data['verification_code']);
      $this->db->execute();
      return $this->db->rowCount();
    }catch (PDOException $e) {
      // Handle the exception here
      return false;
      // You can also log the error or perform other error handling tasks as needed
    }
  }

  public function login($data)
  {
    try {
      $query = "SELECT * FROM users WHERE email = :email";
      $this->db->query($query);
      $this->db->bind('email', $data['email']);
      $this->db->execute();
      $row = $this->db->single();
      $password = $row['password'] ?? '';
      if (password_verify($data['password'], $password)) {
          return $row;
      } else {
          return false;
      }
  } catch (PDOException $e) {
      // Handle the exception here
      return false;
      // You can also log the error or perform other error handling tasks as needed
  }  
  }

  public function verify($verificationCode)
  {
    $this->db->query("SELECT * FROM $this->table WHERE verification_code = :verification_code");
    $this->db->bind('verification_code', $verificationCode);
    $user = $this->db->single();
    if ($user) {
      $this->db->query("UPDATE $this->table SET verified = 1 WHERE id = :id");
      $this->db->bind('id', $user['id']);
      $this->db->execute();
      return true;
    } else {
      return false;
    }
  }

  public function changePassword($userId, $password)
  {
    $password = password_hash($password, PASSWORD_DEFAULT);
    $this->db->query("UPDATE $this->table SET password = :password WHERE id = :id");
    $this->db->bind('id', $userId);
    $this->db->bind('password', $password);
    $this->db->execute();
    return $this->db->rowCount();
  }
}