<?php 

class ConsultationModel extends Model {
    public function createConsultation($data) {
        $stmt = $this->db->prepare("
            INSERT INTO consultation (user_id, consultant_id, schedule_date, consultation_type, status)
            VALUES (?, ?, ?, ?, 'undone')
        ");

        $stmt->bind_param(
            "siss", 
            $data['user_id'], 
            $data['consultant_id'], 
            $data['schedule_date'], 
            $data['consultation_type']
        );

        return $stmt->execute();
    }
}
