<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
  <title>Community Category</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="view/community-category.css">
</head>
<body>
  <div class="container py-3">
  <a href="#" onclick="history.back()" class="back-button text-dark fs-3">&#60;</a>
    
    <h1 class="text-center">Category</h1>

    <div class="image-placeholder"></div>

    <h4 class="text-center">Depression</h4>
    <p class="text-center">Support and share for those dealing with depression.</p>

    <!-- Form Join -->
<form method="get" action="index.php">
  <input type="hidden" name="c" value="Community">
  <input type="hidden" name="m" value="groupChat">
  <button type="submit" class="join-btn">Join</button>
</form>


    <nav class="bottom-nav p-2 shadow fixed-bottom bg-white border-top">
            <a href="?c=Home&m=index" class="nav-item">Home</a>
            <a href="?c=Message&m=index" class="nav-item">Message</a>
            <a href="?c=History&m=index" class="nav-item">History</a>
            <a href="?c=Profile&m=index" class="nav-item">Profile</a>
        </nav>
  </div>
</body>
</html>
