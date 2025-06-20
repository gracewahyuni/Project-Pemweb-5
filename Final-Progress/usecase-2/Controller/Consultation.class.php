<?php
class Consultation extends Controller {
    function index() {
        $this->list();
    }

    function list() {
        // $model = $this->model('KonsultanModel');
        // $konsultans = $model->getAll();
        $konsultans = [
            ['id' => 1, 'nama' => 'Dr. Toni Situmorang', 'rumahsakit' => 'RS Santa Maria Bandung', 'rating' => '4.0' ],
            ['id' => 2, 'nama' => 'Dr. Dimas Arya', 'rumahsakit' => 'RSUD Melati Malang' , 'rating' => '4.0'],
            ['id' => 3, 'nama' => 'Dr. Sari Amalia', 'rumahsakit' => 'Klinik Psikologi Sehat' , 'rating' => '4.0']
        ];
        $this->view('consultant.php', ['konsultans' => $konsultans]);
    }

    function pilihJadwal() {
        $id = $_GET['id'];
        $this->view('method-date.php', ['id_konsultan' => $id]);
    }

    function konfirmasi() {
        $metode = $_POST['metode'];
        if ($metode == 'online') {
            $this->view('success-on.php');
        } else {
            $this->view('success-off.php');
        }
    }
}