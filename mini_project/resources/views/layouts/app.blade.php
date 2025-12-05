<!DOCTYPE html>
<html>
<head>
    <title>Toko Buku Online</title>

    <!-- Font mirip Gramedia -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Poppins', sans-serif;
        }

        .navbar {
            background-color: #003B73 !important;
        }

        .navbar-brand {
            font-weight: 600;
            letter-spacing: 0.5px;
        }

        .hero-box {
            background: linear-gradient(135deg, #003B73, #145DA0);
            padding: 40px;
            border-radius: 15px;
            color: white;
        }

        footer {
            background-color: #003B73;
            color: white;
        }
    </style>
</head>

<body>

    <x-navbar />

    <div class="container mt-4">
        @yield('content')
    </div>

    <x-footer />

</body>
</html>
