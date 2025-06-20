<!-- percobaan 


sampe sini -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctor List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="view/doctor.css">
</head>
<body>
    <div class="container py-3">
        <a href="?c=Home&m=index" class="back-button text-dark fs-3 border-0">&#60;</a>
        
        <?php foreach ($konsultans as $konsultan): ?>
        <a href="?c=Consultation&m=pilihJadwal&id=<?= $konsultan['id'] ?>">
        <div class="card mb-3 border-solid justify-content-center">
            <div class="row g-0 d-flex align-items-center ps-2">
                <div class="col-auto">
                    <div class="doctor-img border-0"></div>
                </div>
                <div class="col-8">
                    <div class="card-body p-3">
                        <h5 class="card-title"><?= htmlspecialchars($konsultan['nama']) ?></h5>
                        <p class="card-text text-muted"><?= htmlspecialchars($konsultan['rumahsakit']) ?></p>
                        <p class="card-text rating">★★★★☆ <span class="text-dark"><?= number_format($konsultan['rating'], 1) ?></span></p>
                        
                    </div>
                </div>
            </div>
        </div>
        </a>
        <?php endforeach; ?>
        <nav class="bottom-nav p-2 shadow fixed-bottom bg-white border-top">
            <a href="?c=Home&m=index" class="nav-item">Home</a>
            <a href="?c=Message&m=index" class="nav-item">Message</a>
            <a href="?c=History&m=index" class="nav-item">History</a>
            <a href="?c=Profile&m=index" class="nav-item">Profile</a>
        </nav>
    </div>
</body>
</html>