<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Test Result</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="results.css" />
</head>
<body class="bg-white position-relative">
  <!-- Tombol Back -->
  <a href="?c=PsychologyTest&m=guidelines" class="back-button text-dark fs-3 border-0">&#60;</a>
  
  <!-- Content -->
  <div class="d-flex flex-column justify-content-center align-items-center text-center min-vh-100">
    <div class="container" style="max-width: 400px;">
      <div class="icon-box my-4 d-flex justify-content-center align-items-center">
        <div class="icon"></div>
      </div>
      <h2 class="fw-bold">Congratulations!</h2>
      <p class="mb-2">You've completed the psychology test.</p>

      <a href="?c=Test&m=showReport" class="btn btn-primary result-btn">Get my results</a>
    </div>
  </div>

  <!-- Bottom Navigation -->
  <div class="bottom-nav d-flex justify-content-around align-items-center w-100 py-2 border-top bg-white position-fixed bottom-0">
    <a href="?c=Home&m=index" class="nav-item text-decoration-none text-dark small">Home</a>
    <a href="?c=Message&m=index" class="nav-item text-decoration-none text-dark small">Message</a>
    <a href="?c=History&m=index" class="nav-item text-decoration-none text-dark small">History</a>
    <a href="?c=Profile&m=index" class="nav-item text-decoration-none text-dark small">Profile</a>
  </div>
</body>
</html>
