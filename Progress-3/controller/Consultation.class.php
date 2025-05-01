<?php
class Consultation extends Controller {
    function list() {
        $model = $this->model('KonsultanModel');
        $konsultans = $model->getAll();
        $this->view('consultant.php', ['konsultans' => $konsultans]);
    }

    function pilihJadwal() {
        $id = $_GET['id'];
        $this->view('method-date.php', ['id_konsultan' => $id]);
    }

    function konfirmasi() {
        $metode = $_POST['metode'];
        if ($metode == 'online') {
            $this->view('success_on.php');
        } else {
            $this->view('success_off.php');
        }
    }
}