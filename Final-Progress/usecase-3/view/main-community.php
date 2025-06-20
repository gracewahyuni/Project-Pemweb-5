<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
  <title>UMATTER - Community</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="view/main-community.css">
</head>
<body>
  <div class="container py-3">
  <a href="#" onclick="history.back()" class="back-button text-dark fs-3">&#60;</a>
    
    <h1 class="text-center">Community</h1>

    <div class="search-bar">
      <input type="text" placeholder="Search">
    </div>

    <h2>Community Category</h2>

    <div class="category-container">
      <!-- Menambahkan link pada setiap kategori -->
      <a href="index.php?c=Community&m=communityCategory" class="category-icon">Depresi</a>
      <a href="index.php?c=Community&m=communityCategory" class="category-icon">Anxiety</a>
      <a href="index.php?c=Community&m=communityCategory" class="category-icon">Stres</a>
      <a href="index.php?c=Community&m=communityCategory" class="category-icon">Burnout</a>
      <a href="index.php?c=Community&m=communityCategory" class="category-icon">Self Care</a>
    </div>

    <h2>Mind Space</h2>


    <div class="mind-space">
      <div class="profile-pic"></div>
      <a href="index.php?c=Community&m=mindSpace" class="mindspace-link">What's on your mind?</a>
    </div>

    <div class="post-card">
      <strong>@skripsifighter</strong>
      <p>Aku merasa sangat tertekan karena skripsi dan ekspektasi keluarga...</p>
    </div>

    <div class="post-card">
      <strong>@mahasantuy</strong>
      <p>Ada yang pernah burnout parah pas akhir semester?</p>
    </div>


    <div class="activity">
      <h3>Activity</h3>
      <div class="activity-item">Rafa just replied to your post.</div>
      <div class="activity-item">You just joined the group "Pejuang Skripsi"</div>
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