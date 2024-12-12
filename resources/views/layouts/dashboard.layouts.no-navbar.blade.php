<!-- resources/views/dashboard/layouts/no-navbar.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard | {{$title}}</title>
    <link rel="stylesheet" href="path/to/css/styles.css">
</head>
<body>
    <div class="container">
        @yield('container') <!-- Konten utama halaman -->
    </div>
    
    <script src="path/to/js/script.js"></script>
</body>
</html>
