<?php 
class Password_Reset_Token_model {
  private $table = 'password_reset_tokens';
  private $db;

  public function __construct()
  {
    $this->db = new Database;
  }

  public function getPasswordResetToken($selector)
  {
    $this->db->query("SELECT * FROM $this->table WHERE selector = :selector");
    $this->db->bind('selector', $selector);
    return $this->db->single();
  }

  public function insertPasswordResetToken($user_id, $token, $selector, $expired_at)
  {
    $this->db->query("INSERT INTO $this->table (id, user_id, selector, token, expired_at) VALUES ('', :user_id, :selector, :token, :expired_at)");
    $this->db->bind('user_id', $user_id);
    $this->db->bind('selector', $selector);
    $this->db->bind('token', $token);
    $this->db->bind('expired_at', $expired_at);
    $this->db->execute();
  }

  public function deletePasswordResetToken($selector)
  {
    $this->db->query('DELETE FROM ' . $this->table . ' WHERE selector = :selector');
    $this->db->bind('selector', $selector);
    $this->db->execute();
  }
}