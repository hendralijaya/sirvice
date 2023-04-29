<?php 

class Users_model {
    private $table = 'users';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllUsers()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getUserById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function updateUser($id, $data, $file)
    {
        if (isset($file['profile_picture'])) {
            $this->db->query('UPDATE ' . $this->table . ' SET name=:name WHERE id=:id');
            $this->db->bind('id', $id);
            $this->db->bind('name', $data['name']);
            $this->db->execute();
            return $this->db->rowCount();
        } else {
            $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
            $this->db->bind('id', $id);
            $user = $this->db->single();
            $oldProfilePicture = $user['profile_picture'];
            if ($oldProfilePicture != 'profile-example.png') {
                Helper::deleteFile($oldProfilePicture);
            }
            $fileName = Helper::uploadFile($file['profile_picture'], PROFILE_PATH);
            $this->db->query('UPDATE ' . $this->table . ' SET name=:name, profile_picture=:profile_picture WHERE id=:id');
            $this->db->bind('id', $id);
            $this->db->bind('name', $data['name']);
            $this->db->bind('profile_picture', $fileName);
            $this->db->execute();
            return $this->db->rowCount();
        }
    }

    public function change_password($userId, $data) {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind('id', $userId);
        $user = $this->db->single();
        if (password_verify($data['old_password'], $user['password'])) {
            $newPassword = password_hash($data['password'], PASSWORD_DEFAULT);
            $this->db->query('UPDATE ' . $this->table . ' SET password=:password WHERE id=:id');
            $this->db->bind('id', $userId);
            $this->db->bind('password', $newPassword);
            $this->db->execute();
            return $this->db->rowCount();
        }else {
            return 0;
        }
    }
}