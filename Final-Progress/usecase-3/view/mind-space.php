<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
  <title>Mind Space</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="view/mind-space.css">
</head>
<body>
  <div class="container py-3">
  <a href="#" onclick="history.back()" class="back-button text-dark fs-3">&#60;</a>
    
    <h1 class="text-center">Mind Space</h1>

    <!-- Form untuk postingan -->
    <form method="post" action="index.php?c=Community&m=postMindSpace">
      <textarea name="isi" placeholder="What's on your mind?"></textarea>
      <button type="submit" class="submit-btn">Post</button>
    </form>

    <!-- Status setelah post -->
    <?php if (isset($status)) echo "<p class='text-success'>$status</p>"; ?>

    <!-- Postingan lainnya -->
    <div class="post">
      <div class="post-header">
        <div class="post-avatar"></div>
        <div class="post-author">Rani</div>
      </div>
      <div class="post-content">
        Hari ini aku merasa sangat cemas tanpa alasan...
      </div>
    </div>

    <div class="post">
      <div class="post-header">
        <div class="post-avatar"></div>
        <div class="post-author">Ayu</div>
      </div>
      <div class="post-content">
        Tadi habis nangis, tapi lega setelah cerita ke teman. Kalian juga bisa cerita di sini ya!
      </div>
    </div>

    <div class="post">
      <div class="post-header">
        <div class="post-avatar"></div>
        <div class="post-author">Dimas</div>
      </div>
      <div class="post-content">
        Overthinking tentang masa depan bikin aku nggak bisa tidur akhir-akhir ini.
      </div>
    </div>

    <!-- Bottom Navigation -->
    <nav class="bottom-nav p-2 shadow fixed-bottom bg-white border-top">
            <a href="?c=Home&m=index" class="nav-item">Home</a>
            <a href="?c=Message&m=index" class="nav-item">Message</a>
            <a href="?c=History&m=index" class="nav-item">History</a>
            <a href="?c=Profile&m=index" class="nav-item">Profile</a>
        </nav>
  </div>
</body>
</html>
