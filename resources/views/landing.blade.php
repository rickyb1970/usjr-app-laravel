@php
//    session()->flush();
    // session()->regenerate();
@endphp
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>USJR School Management System</title>
    <link rel="stylesheet" href="{{ asset('storage/styles/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('storage/styles/styles.css') }}">
    <style></style>
</head>
<body>
    <div class="main-container">
        @include('slugs/head-slug')
        @include('slugs/nav-slug')
        <main>
           @yield('page-content')
        </main>
    </div>
</body>
</html>
