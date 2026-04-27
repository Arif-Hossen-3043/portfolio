@extends('layouts.app')

@section('content')

    <div class="min-h-screen flex bg-black text-gray-200">

        <!-- LEFT SIDEBAR -->
        <div class="w-1/3 border-r border-gray-800 p-10">

            <!-- Name -->
            <h1 class="text-5xl font-bold text-white mb-4">
                Arif Hossen
            </h1>

            <!-- Title -->
            <h2 class="text-purple-400 text-xl font-semibold mb-2">
                Full Stack Developer
            </h2>

            <p class="text-gray-400 mb-6">
                Web Application Developer
            </p>

            <p class="text-gray-300 mb-10">
                I build responsive and database-driven web applications using Laravel and modern web technologies.
            </p>

            <!-- Menu (Clickable Navbar Style) -->
            <div class="space-y-4 text-gray-400">

                <a href="#about" class="flex items-center space-x-2 hover:text-white transition">

                    <span class="w-8 h-[2px] bg-white"></span>
                    <span>About</span>

                </a>

                <a href="#skills" class="flex items-center space-x-2 hover:text-white transition">

                    <span class="w-8 h-[2px] bg-gray-600"></span>
                    <span>Skills</span>

                </a>

                <a href="#experience" class="flex items-center space-x-2 hover:text-white transition">

                    <span class="w-8 h-[2px] bg-gray-600"></span>
                    <span>Experience</span>

                </a>

                <a href="#projects" class="flex items-center space-x-2 hover:text-white transition">

                    <span class="w-8 h-[2px] bg-gray-600"></span>
                    <span>Projects</span>

                </a>

                <a href="#blogs" class="flex items-center space-x-2 hover:text-white transition">

                    <span class="w-8 h-[2px] bg-gray-600"></span>
                    <span>Blogs</span>

                </a>

            </div>



            <!-- Links -->
            <div class="mt-6 space-y-3 text-gray-400">

                <p class="hover:text-white cursor-pointer">
                    View Resume ↗
                </p>

            </div>

        </div>

        <!-- RIGHT CONTENT -->
        <div class="w-2/3 p-12 overflow-y-auto">

            <!-- Greeting (Dynamic Bangladesh Time) -->
            <div class="flex justify-end mb-8">

                <p id="greetingText" class="text-white">
                    Good Evening 🌙
                </p>

            </div>


            <!-- About Text -->
            <div class="space-y-6 text-gray-400 leading-relaxed">

                <p>
                    I'm a Junior Web Developer and recent university graduate,
                    passionate about building responsive and user-friendly web applications.
                    I enjoy learning new technologies and turning ideas into real projects
                    that solve practical problems.
                </p>

                <p>
                    During my internship and academic journey, I worked with technologies
                    like Laravel, PHP, MySQL, JavaScript, and Tailwind CSS to build
                    dynamic and modern web applications.
                </p>

                <p>
                    I've completed several internship and personal projects,
                    including CRUD applications, portfolio websites, and
                    database-driven systems that helped me strengthen my
                    problem-solving and development skills.
                </p>

                <p>
                    As a fresh graduate, I'm eager to grow as a developer,
                    contribute to real-world projects, and continuously
                    improve my coding and design abilities.
                    I'm excited to build useful and meaningful applications!
                </p>

            </div>

            <!-- Divider -->
            <div class="border-t border-gray-800 mt-12 pt-6">

                <h3 class="text-white text-lg font-semibold">
                    GitHub Contributions
                </h3>

            </div>

        </div>

    </div>
<script>

function updateGreeting() {

    // Get Bangladesh time
    const options = {
        timeZone: "Asia/Dhaka",
        hour: "numeric",
        hour12: false
    };

    const hour = new Date().toLocaleString("en-US", options);
    const currentHour = parseInt(hour);

    let greeting = "";

    if (currentHour >= 5 && currentHour < 12) {
        greeting = "Good Morning ☀️";
    }
    else if (currentHour >= 12 && currentHour < 15) {
        greeting = "Good Afternoon 🌤️";
    }
    else if (currentHour >= 16 && currentHour < 20  ) {
        greeting = "Good Evening 🌤️";
    }
    else {
        greeting = "Good Night 🌙";
    }

    document.getElementById("greetingText").innerText = greeting;

}

// Run function
updateGreeting();

</script>
@endsection