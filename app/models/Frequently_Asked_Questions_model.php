<?php 
class Frequently_Asked_Questions_model {
    private $table = 'frequently_asked_questions';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllFrequentlyAskedQuestions()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getFiveLatestFrequentlyAskedQuestions()
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' ORDER BY id DESC LIMIT 5');
        return $this->db->resultSet();
    }
}