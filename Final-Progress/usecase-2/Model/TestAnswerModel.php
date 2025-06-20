<?php
require_once __DIR__ . '/Model.class.php';

class TestAnswerModel extends Model {
    public function save($userId, $answers, $totalScore) {
    for ($i = 1; $i <= 20; $i++) {
        if (!isset($answers["q$i"])) {
            echo "Missing answer for q$i<br>";
            return false;
        }
    }
    $columns = array_keys($answers);
    array_unshift($columns, 'user_id');  
    $columns[] = 'total_score';          

    $placeholders = implode(", ", array_fill(0, count($columns), '?'));

    $sql = "INSERT INTO test_answer (" . implode(", ", $columns) . ") VALUES ($placeholders)";
    $stmt = $this->db->prepare($sql);
    if (!$stmt) {
        echo "Prepare failed: " . $this->db->error;
        return false;
    }
    $values = array_values($answers);
    array_unshift($values, $userId); 
    $values[] = $totalScore;         

    $types = str_repeat('i', count($values));

    $stmt->bind_param($types, ...$values);

    $exec = $stmt->execute();
    if (!$exec) {
        echo "Execute failed: " . $stmt->error;
    }

    $stmt->close();

    return $exec;
}
}