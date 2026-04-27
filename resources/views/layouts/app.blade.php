<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <title>My Dark Portfolio</title>

    <!-- Tailwind CDN -->
    <script src="https://cdn.tailwindcss.com"></script>

</head>

<body class="bg-gray-900 text-white">

    <!-- Include Navbar -->
    @include('partials.navbar')

    <!-- Page Content -->
    <main class="max-w-6xl mx-auto px-6 py-10">

        @yield('content')

    </main>

</body>

</html>