<?php
class MindSpaceModel extends Model {

    // Simpan postingan baru
    public function post($userId, $content) {
        $stmt = $this->db->prepare("INSERT INTO mind_space (user_id, content) VALUES (?, ?)");
        $stmt->bind_param("is", $userId, $content);
        return $stmt->execute();
    }

    // Ambil semua postingan
    public function getPosts() {
        $result = $this->db->query("SELECT ms.*, u.username AS user FROM mind_space ms JOIN user u ON ms.user_id = u.user_id ORDER BY ms.created_at DESC");
        return $result->fetch_all(MYSQLI_ASSOC);
    }
}
