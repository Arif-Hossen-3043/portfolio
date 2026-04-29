<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Arif's Portfolio</title>
<style>

.skill-badge {

    padding: 8px 14px;
    background-color: #171717;
    border: 1px solid #2a2a2a;
    border-radius: 999px;

    font-size: 14px;
    color: #d1d5db;

    transition: 0.3s;
}

.skill-badge:hover {

    border-color: #a855f7;
    color: white;

}

</style>
    <!-- Tailwind CDN -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Dark Theme Config -->
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: "#a855f7"
                    }
                }
            }
        }
    </script>

    <!-- Smooth Scroll -->
    <style>
        html {
            scroll-behavior: smooth;
        }
    </style>

</head>

<body class="bg-black text-gray-200">

    <!-- Main Content -->
    <div class="min-h-screen">

        @yield('content')

    </div>

</body>

</html>