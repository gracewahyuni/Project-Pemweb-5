<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Psychology Test</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="Test-Guidelines.css">
  <style>
    .back-button {
      position: absolute;
      top: 0;
      left: 0;
      margin: 1rem;
      text-decoration: none;
    }

    .icon {
      width: 80px;
      height: 80px;
      background-color: #e0e0e0;
      border-radius: 10px;
      margin: 20px auto;
    }

    .center-wrapper {
      min-height: 100vh;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      position: relative;
    }
  </style>
</head>
<body>

  <div class="container position-relative center-wrapper text-center">
    <a href="?c=Home&m=index" class="back-button text-dark fs-3 border-0">&#60;</a>

    <h1 class="fs-4">Psychology Test</h1>
    <div class="icon"></div>
    <h2 class="fs-5 fw-bold">Test Guidelines</h2>
    <p class="text-muted small">Answer each statement based on your personal opinion</p>
    <p class="text-muted small">You cannot skip questions, but you can return to them later</p>
    <a href="?c=Test&m=start" class="btn btn-outline-dark rounded-pill mt-3">Start Test</a>
  </div>

  <div class="fixed-bottom bg-light border-top py-2 d-flex justify-content-around">
    <a href="#" class="text-dark small text-decoration-none">Home</a>
    <a href="#" class="text-dark small text-decoration-none">Message</a>
    <a href="#" class="text-dark small text-decoration-none">History</a>
    <a href="#" class="text-dark small text-decoration-none">Profile</a>
  </div>

</body>
</html>
