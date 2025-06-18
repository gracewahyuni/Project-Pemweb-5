<?php
class KonsultanModel extends Model {
    public function getAll() {
        $result = $this->db->query("SELECT * FROM consultant");
        $data = [];
        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }
        return $data;
    }
}