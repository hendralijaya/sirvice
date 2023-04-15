<?php 

class Notifications_model {
    private $table = 'notifications';
    private $orderTable = 'orders';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getNotifications($userId)
    {
        $this->db->query('SELECT *, DATE_FORMAT(date, "%d-%m-%Y") FROM ' . $this->table . ' WHERE user_id=:user_id ORDER BY date DESC');
        $this->db->bind('user_id', $userId);
        return $this->db->resultSet();
    }

    public function createNotificationToday($userId)
    {
      $this->db->query('SELECT *, DATE_FORMAT(date, "%d-%m-%Y") FROM ' . $this->table . ' WHERE user_id=:user_id AND date=CURDATE() AND reminder=0');
      $this->db->bind('user_id', $userId);
      $result = $this->db->resultSet();
      if (count($result) === 0) {
          return;
      }
      else {
          $this->db->query("UPDATE $this->table SET reminder=1 WHERE user_id=:user_id AND date=CURDATE()");
          $this->db->bind('user_id', $userId);
          $this->db->execute();
          foreach ($result as $row) {
            
              $this->db->query("INSERT INTO $this->table (user_id, title, description, reminder, date, link, icon, icon_class) VALUES (:user_id, \"You have Incoming Order Today\", \"Just a friendly reminder that you have an order scheduled for today! Our team is working hard to ensure that your order is processed and delivered on time. You can check the progress of your order at any time on our website, and we will keep you updated every step of the way.\", 1, CURDATE())", 'http://sirvice/public/dashboard/order/' . $row['order_id'], 'info', 'info');
              $this->db->bind('user_id', $userId);
              $this->db->execute();
          }
          return;
      }
    }

    public function createNotification($userId, $title, $description, $link, $icon, $icon_class, $orderId = 0)
    {
        $this->db->query("INSERT INTO $this->table (user_id, title, description, link, icon, icon_class, order_id) VALUES (:user_id, :title, :description, :link, :icon, :icon_class, :order_id)");
        $this->db->bind('user_id', $userId);
        $this->db->bind('title', $title);
        $this->db->bind('description', $description);
        $this->db->bind('link', $link);
        $this->db->bind('icon', $icon);
        $this->db->bind('icon_class', $icon_class);
        $this->db->bind('order_id', $orderId);
        $this->db->execute();
        return $this->db->rowCount();
    }
}