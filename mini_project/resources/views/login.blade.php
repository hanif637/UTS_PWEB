<!DOCTYPE html>
<html>
<head>
    <title>Login - Toko Buku Online</title>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: linear-gradient(135deg, #003B73, #145DA0);
            font-family: 'Poppins', sans-serif;
        }
        .login-box {
            background: white;
            padding: 30px;
            border-radius: 15px;
        }
    </style>
</head>

<body>

<div class="container d-flex justify-content-center align-items-center" style="height:100vh;">
    <div class="col-md-4 login-box shadow-lg">
        <h3 class="text-center fw-bold mb-3">Toko Buku Online</h3>

        <form action="{{ route('doLogin') }}" method="POST">
            @csrf

            <label class="fw-semibold">Username</label>
            <input type="text" name="username" class="form-control mb-3" required>

            <label class="fw-semibold">Password</label>
            <input type="password" name="password" class="form-control mb-3" required>

            <button class="btn btn-primary w-100 mt-2">Login</button>
        </form>
    </div>
</div>

</body>
</html>
