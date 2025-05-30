<?php
class UserModel extends Model {
    function auth($username, $password) {
        $stmt = $this->db->prepare("SELECT * FROM user WHERE username = ? AND password = ?");
        $stmt->bind_param("ss", $username, $password);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_assoc();
    }

    public function register($username, $email, $hashedPassword) {
        $stmt = $this->db->prepare("INSERT INTO user (username, email, password) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $username, $email, $hashedPassword);
        if ($stmt->execute()) {
            return $this->db->insert_id; // return user_id yang baru
        }
        return false;
    }
}