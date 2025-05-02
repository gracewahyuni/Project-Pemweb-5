<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="login.css">
    <title>Register - UMATTER</title>
</head>
<body>
    <div class="container d-flex flex-column justify-content-center vh-100 text-center">
        <h1 class="fw-bold text-start">UMATTER</h1>

        <div class="register mt-4">
            <h2 class="fw-bold">Register</h2>
            <p class="text-muted">Create your new account</p>
        </div>

        <form class="mt-3" method="post" action="?c=Login&m=doLogin">
            <input type="text" name="username" class="form-control mb-3" placeholder="Username">
            <input type="email" name="email" class="form-control mb-3" placeholder="Email">
            <input type="password" name="password" class="form-control mb-3" placeholder="Password">
            <button type="submit" class="btn btn-dark w-100 py-2 fw-bold">Login</button>
        </form>

        <a href="#" class="text-muted fs-6 mt-2">Forgot Password?</a>
    </div>
</body>
</html>