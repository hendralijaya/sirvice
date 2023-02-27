<?php 

class Remember_Me_Token_model {
    private $table = 'remember_me_tokens';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getRememberMeToken($selector)
    {
        $this->db->query("SELECT * FROM $this->table WHERE selector = :selector");
        $this->db->bind('selector', $selector);
        return $this->db->single();
    }

    public function insertRememberMeToken($user_id, $token, $selector)
    {
        $expired_at = date('Y-m-d H:i:s', time() + 60 * 60 * 24 * 7); // 7 days token expiration
        $this->db->query("INSERT INTO $this->table (id, user_id, selector, token, expired_at) VALUES ('', :user_id, :selector, :token, :expired_at)");
        $this->db->bind('user_id', $user_id);
        $this->db->bind('selector', $selector);
        $this->db->bind('token', $token);
        $this->db->bind('expired_at', $expired_at);
        $this->db->execute();
    }

    public function deleteRememberMeToken($selector)
    {
        $this->db->query('DELETE FROM ' . $this->table . ' WHERE selector = :selector');
        $this->db->bind('selector', $selector);
        $this->db->execute();
    }
}