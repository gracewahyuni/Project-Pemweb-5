<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="view/method.css">
    <title>Method and Schedule</title>
</head>
<body>
    <div class="container mt-3">
        <a href="?c=Home&m=index" class="back-button text-dark fs-3 border-0">&#60;</a>
        
        <form method="POST" action="?c=Consultation&m=konfirmasi">
        <h1 class="method fw-bold mt-3">Metode Konsultasi</h1>
        <select class="form-select" name="metode" required>
            <option value="online">Online</option>
            <option value="offline">Offline</option>
        </select>

        <h1 class="schedule fw-bold mt-4">Schedule</h1>
        <div class="input-group mt-2">
            <input type="text" class="form-control"  name="jadwal" placeholder="20/06/2025" required>
            <span class="input-group-text">&#128197;</span>
        </div>
        
        <button type="submit" class="btn btn-dark w-100 mt-3">Confirm</button>
    </div>

    <nav class="bottom-nav p-2 shadow fixed-bottom bg-white border-top">
            <a href="?c=Home&m=index" class="nav-item">Home</a>
            <a href="?c=Message&m=index" class="nav-item">Message</a>
            <a href="?c=History&m=index" class="nav-item">History</a>
            <a href="?c=Profile&m=index" class="nav-item">Profile</a>
    </nav>
</body>
</html>