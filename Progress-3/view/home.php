<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - UMATTER</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="view/home.css"> 
</head>
<body>
    <div class="d-flex flex-column justify-content-between vh-100">
        <div class="text-center">
            
            <h1 class="fw-bold">Hello, <?= $_SESSION['user']['username'] ?? 'User' ?>!</h1>
        </div>
        
        <div class="pilihan-container mt-4 p-4 rounded shadow">
            <h2 class="fw-bold">What Will You Do Today?</h2>
            <div class="options fw-bold row g-3 mt-3">
                <div class="col-6">
                    <a href="?c=Article&m=index" class="text-decoration-none text-dark">
                    <div class="option rounded shadow-sm">Read Article</div>
                    </a>
                </div>
                <div class="col-6">
                    <a href="?c=Consultation&m=index" class="text-decoration-none text-dark">
                    <div class="option rounded shadow-sm">Consultation</div>
                    </a>
                </div>
                <div class="col-6">
                    <a href="?c=Test&m=index" class="text-decoration-none text-dark">
                    <div class="option rounded shadow-sm">Psychology Test</div>
                    </a>
                </div>
                <div class="col-6">
                    <a href="?c=Community&m=index" class="text-decoration-none text-dark">
                    <div class="option rounded shadow-sm">Community</div>
                    </a>
                </div>
            </div>
        </div>

        <nav class="bottom-nav p-2 shadow fixed-bottom bg-white border-top">
            <a href="?c=Home&m=index" class="nav-item">Home</a>
            <a href="?c=Message&m=index" class="nav-item">Message</a>
            <a href="?c=History&m=index" class="nav-item">History</a>
            <a href="?c=Profile&m=index" class="nav-item">Profile</a>
        </nav>
    </div>
</body>
</html>