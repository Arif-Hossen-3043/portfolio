<!-- Navbar -->
<nav class="bg-gray-800 shadow">

    <div class="max-w-6xl mx-auto px-6 py-4 flex justify-between items-center">

        <!-- Clickable Logo -->
        <a href="/" class="flex items-center space-x-2">

            <img src="{{ asset('images/logo.png') }}"
                 alt="Logo"
                 class="h-12 w-12 rounded-full object-cover border-2 border-gray-700">

            <span class="text-xl font-bold hover:text-gray-400">
                My Portfolio
            </span>

        </a>

        <!-- Menu -->
        <div class="space-x-6">

            <a href="/" class="hover:text-gray-400">
                Home
            </a>

            <a href="/about" class="hover:text-gray-400">
                About
            </a>

            <a href="/projects" class="hover:text-gray-400">
                Projects
            </a>

            <a href="/contact" class="hover:text-gray-400">
                Contact
            </a>

        </div>

    </div>

</nav>