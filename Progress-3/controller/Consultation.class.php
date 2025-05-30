<?php
class Consultation extends Controller {
    function index() {
        $this->list();
    }

    function list() {
        $model = $this->model('KonsultanModel');
        $konsultans = $model->getAll();
        $this->view('consultant.php', ['konsultans' => $konsultans]);
    }

    function pilihJadwal() {
        $consultantId = $_GET['id'];
        $this->view('method-date.php', ['id_konsultan' => $consultantId]);
    }

    function konfirmasi() {
        session_start();

        if (!isset($_SESSION['user']['user_id'])) {
        echo "Anda harus login untuk membuat konsultasi.";
        exit;
        }
        $user_id = $_SESSION['user']['user_id']; // pastikan session sudah dimulai dan username diset
        $data = [
            'user_id' => $user_id,
            'consultant_id' => $_POST['consultant_id'],
            'schedule_date' => $_POST['jadwal'],
            'consultation_type' => $_POST['metode']
        ];
        $model = $this->model('ConsultationModel');
        if ($model->createConsultation($data)) {
            if ($data['consultation_type'] === 'online') {
                $this->view('success-on.php');
            } else {
                $this->view('success-off.php');
            }
        } else {
            echo "Terjadi kesalahan saat menyimpan konsultasi.";
        }
    }
}