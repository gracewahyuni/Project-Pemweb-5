<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cons-method-page.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <?php include 'back-button.html';?>
        <h1>Metode Konsultasi</h1>
        <select class="dropdown">
            <option>Online</option>
            <option>Offline</option>
        </select>

        <h1>Schedule</h1>
        <div class="date-pick">
            <input type="text" placeholder="20/06/2025">
            <span class="calendar-icon">&#128197;</span>
        </div>
        <button type="submit" class="tombol">Confirm</button>
        <?php include 'navigasi.html';?>
    </div>
</body>
</html>