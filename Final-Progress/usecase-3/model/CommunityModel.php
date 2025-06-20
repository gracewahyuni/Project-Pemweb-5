<?php
class CommunityModel extends Model {

    // Ambil semua kategori komunitas
    public function getCategories() {
        $result = $this->db->query("SELECT * FROM community_category ORDER BY name");
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    // Ambil grup berdasarkan kategori
    public function getGroupsByCategory($categoryId) {
        $stmt = $this->db->prepare("SELECT * FROM community_group WHERE category_id = ?");
        $stmt->bind_param("i", $categoryId);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    // Ambil info kategori berdasarkan nama (jika perlu)
    public function getCategoryByName($name) {
        $stmt = $this->db->prepare("SELECT * FROM community_category WHERE name = ?");
        $stmt->bind_param("s", $name);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_assoc();
    }

    // Gabung user ke grup
    public function joinGroup($userId, $groupId) {
        $stmt = $this->db->prepare("INSERT IGNORE INTO user_group (user_id, group_id) VALUES (?, ?)");
        $stmt->bind_param("ii", $userId, $groupId);
        return $stmt->execute();
    }

    // Ambil grup yang diikuti user
    public function getUserGroups($userId) {
        $stmt = $this->db->prepare("SELECT cg.* FROM community_group cg 
                                    JOIN user_group ug ON cg.group_id = ug.group_id
                                    WHERE ug.user_id = ?");
        $stmt->bind_param("i", $userId);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    // Ambil pesan dari grup tertentu
    public function getGroupMessages($groupId) {
        $stmt = $this->db->prepare("SELECT gm.*, u.username FROM group_messages gm
                                    JOIN user u ON gm.user_id = u.user_id
                                    WHERE gm.group_id = ?
                                    ORDER BY gm.sent_at ASC");
        $stmt->bind_param("i", $groupId);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    // Kirim pesan ke grup
    public function sendGroupMessage($groupId, $userId, $message) {
        $stmt = $this->db->prepare("INSERT INTO group_messages (group_id, user_id, message) VALUES (?, ?, ?)");
        $stmt->bind_param("iis", $groupId, $userId, $message);
        return $stmt->execute();
    }
}
