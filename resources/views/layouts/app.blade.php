<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>My Portfolio</title>

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