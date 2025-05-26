<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Klinik App</title>
</head>
<body>

    @include('nav') <!-- Menyisipkan navbar -->

    <div class="container">
        @yield('content') <!-- Konten utama halaman -->
    </div>

    

</body>
@include('footer')
</html>
