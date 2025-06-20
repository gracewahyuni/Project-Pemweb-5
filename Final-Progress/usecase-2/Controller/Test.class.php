<?php
class Test extends Controller {

    public function index() {
        $this->guidelines();
    }

    public function guidelines() {
        $this->view('Test-Guidelines.php');
    }

    public function start() {
        $this->view('Psychology-Test.php');
    }

    public function submit() {
    session_start();
    $userId = $_SESSION['user']['user_id'] ?? 0;

    if ($userId == 0) {
    die("User belum login!");
    }

    $answers = [];
    for ($qNumber = 1; $qNumber <= 20; $qNumber++) {
        $key = "q$qNumber";
        if (isset($_POST[$key]) && in_array($_POST[$key], ['1','2','3','4','5'])) {
            $answers["q$qNumber"] = intval($_POST[$key]);
        } else {
            $answers["q$qNumber"] = 0;
        }
    }

    // Cek: ada jawaban kosong?
    if (in_array(0, $answers)) {
        echo "Silakan isi semua jawaban sebelum mengirimkan.";
        exit;
    }

    $totalScore = array_sum($answers);

    require_once __DIR__ . '/../Model/TestAnswerModel.php';

    $model = new TestAnswerModel();
    $saveSuccess = $model->save($userId, $answers, $totalScore);

    if ($saveSuccess) {
        // ⛳ Redirect ke hasil
        header("Location: ?c=Test&m=results&score=" . $totalScore);
        exit;
    } else {
        echo "Gagal menyimpan jawaban ke database.";
        exit;
    }
}
    public function results() {
    $this->view('Results.php');  
}
    public function showReport() {
        $this->view('Report.php');
    }

    public function list() {
        $konsultans = [
            ['id' => 1, 'nama' => 'Dr. Toni Situmorang', 'rumahsakit' => 'RS Santa Maria Bandung', 'rating' => '4.0' ],
            ['id' => 2, 'nama' => 'Dr. Dimas Arya', 'rumahsakit' => 'RSUD Melati Malang', 'rating' => '4.0'],
            ['id' => 3, 'nama' => 'Dr. Sari Amalia', 'rumahsakit' => 'Klinik Psikologi Sehat', 'rating' => '4.0']
        ];
        $this->view('consultant.php', ['konsultans' => $konsultans]);
    }

    public function pilihJadwal() {
        $id = $_GET['id'];
        $this->view('method-date.php', ['id_konsultan' => $id]);
    }

    public function konfirmasi() {
        $metode = $_POST['metode'];
        if ($metode == 'online') {
            $this->view('success-on.php');
        } else {
            $this->view('success-off.php');
        }
    }
}
