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

            <!-- MENU -->
            <div class="space-y-4 text-gray-400">

                <!-- About -->
                <a href="javascript:void(0)" onclick="scrollToSection('about')"
                    class="flex items-center space-x-2 hover:text-white transition">

                    <span class="w-8 h-[2px] bg-white"></span>
                    <span>About</span>

                </a>

                <!-- Skills -->
                <a href="javascript:void(0)" onclick="scrollToSection('skills')"
                    class="flex items-center space-x-2 hover:text-white transition">

                    <span class="w-8 h-[2px] bg-gray-600"></span>
                    <span>Skills</span>

                </a>

                <!-- Experience -->
                <a href="javascript:void(0)" onclick="scrollToSection('experience')"
                    class="flex items-center space-x-2 hover:text-white transition">

                    <span class="w-8 h-[2px] bg-gray-600"></span>
                    <span>Experience</span>

                </a>

                <!-- Projects -->
                <a href="javascript:void(0)" onclick="scrollToSection('projects')"
                    class="flex items-center space-x-2 hover:text-white transition">

                    <span class="w-8 h-[2px] bg-gray-600"></span>
                    <span>Projects</span>

                </a>

                <!-- Blogs -->
                <a href="javascript:void(0)" onclick="scrollToSection('blogs')"
                    class="flex items-center space-x-2 hover:text-white transition">

                    <span class="w-8 h-[2px] bg-gray-600"></span>
                    <span>Blogs</span>

                </a>

            </div>


            <!-- Resume & Contact Section -->
            <div class="mt-8 space-y-4">

                <!-- Resume Button -->
                <a href="{{ asset('cv/Arif Hossen.pdf') }}" target="_blank" class="flex items-center justify-between 
                  bg-neutral-900 border border-gray-800 
                  px-4 py-3 rounded-lg
                  hover:border-purple-500 hover:text-white
                  transition">

                    <span class="flex items-center gap-3">

                        <!-- Resume Icon -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">

                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M7 7h10M7 11h10M7 15h6M5 3h14a2 2 0 012 2v14a2 2 0 01-2 2H5a2 2 0 01-2-2V5a2 2 0 012-2z" />

                        </svg>

                        View Resume

                    </span>

                    <span>↗</span>

                </a>

                <!-- Gmail -->
                <a href="mailto:arifhossentonmoy@gmail.com" class="flex items-center gap-3 
                  text-gray-400 
                  hover:text-white transition">

                    <!-- Gmail Logo -->
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-5 h-5">

                        <path fill="#EA4335"
                            d="M12 13.065L1.5 6.75V18a1.5 1.5 0 001.5 1.5h18A1.5 1.5 0 0022.5 18V6.75L12 13.065z" />

                        <path fill="#FBBC05" d="M12 10.935L22.5 4.5A1.5 1.5 0 0021 3H3a1.5 1.5 0 00-1.5 1.5L12 10.935z" />

                    </svg>

                    <span>arifhossentonmoy@gmail.com</span>

                </a>

                <!-- GitHub -->
                <a href="https://github.com/Arif-Hossen-3043" target="_blank" class="flex items-center gap-3 
                  text-gray-400 
                  hover:text-white transition">

                    <!-- GitHub Logo -->
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5">

                        <path
                            d="M12 .5C5.73.5.75 5.48.75 11.75c0 4.99 3.23 9.23 7.72 10.73.56.1.76-.24.76-.54v-1.87c-3.14.68-3.8-1.52-3.8-1.52-.51-1.3-1.25-1.65-1.25-1.65-1.02-.7.08-.69.08-.69 1.13.08 1.73 1.16 1.73 1.16 1 .1 1.7.77 2.1 1.18.1-.72.39-1.21.7-1.49-2.5-.28-5.13-1.25-5.13-5.55 0-1.23.44-2.23 1.16-3.02-.12-.28-.5-1.4.11-2.92 0 0 .95-.3 3.11 1.15A10.84 10.84 0 0112 6.8c.97 0 1.95.13 2.86.38 2.16-1.45 3.11-1.15 3.11-1.15.61 1.52.23 2.64.11 2.92.72.79 1.16 1.79 1.16 3.02 0 4.31-2.63 5.27-5.14 5.55.4.35.76 1.05.76 2.12v3.14c0 .3.2.65.77.54 4.48-1.5 7.71-5.74 7.71-10.73C23.25 5.48 18.27.5 12 .5z" />

                    </svg>

                    <span>GitHub Profile</span>

                </a>

                <!-- Facebook -->
                <a href="https://facebook.com/YOUR_FACEBOOK_USERNAME" target="_blank" class="flex items-center gap-3 
                  text-gray-400 
                  hover:text-white transition">

                    <!-- Facebook Logo -->
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#1877F2" class="w-5 h-5">

                        <path
                            d="M24 12a12 12 0 10-13.88 11.85v-8.39H7.9V12h2.22V9.41c0-2.19 1.3-3.41 3.3-3.41.96 0 1.96.17 1.96.17v2.15h-1.1c-1.09 0-1.43.67-1.43 1.36V12h2.44l-.39 3.46h-2.05v8.39A12 12 0 0024 12z" />

                    </svg>

                    <span>Facebook Profile</span>

                </a>

            </div>

        </div>

        <!-- RIGHT CONTENT -->
        <div class="w-2/3 p-12 overflow-y-auto">

            <!-- Greeting -->
            <div class="flex justify-end mb-8">

                <p id="greetingText" class="text-white">
                    Good Evening 🌙
                </p>

            </div>

            <!-- ABOUT SECTION -->
            <section id="about" class="space-y-6 text-gray-400 leading-relaxed text-justify scroll-mt-24">

                <p>
                    I'm a Junior Web Developer and a recent university graduate,
                    passionate about building responsive and user-friendly web applications.
                    I enjoy learning new technologies and turning ideas into real-world
                    projects that solve practical problems.
                </p>

                <p>
                    During my internship and academic journey, I worked with technologies
                    such as Laravel, PHP, MySQL, JavaScript, and Tailwind CSS to develop
                    dynamic and modern web applications with clean and efficient code.
                </p>

                <p>
                    I have completed several internship and personal projects,
                    including CRUD applications, portfolio websites, job portals,
                    and database-driven systems that demonstrate my ability
                    to build functional and scalable web solutions.
                </p>

            </section>
            <!-- SKILLS -->
            <!-- SKILLS -->
            <section id="skills" class="border-t border-gray-800 mt-12 pt-10 scroll-mt-24">

                <h2 class="text-white text-2xl font-bold mb-10">
                    Skills
                </h2>

                <div class="space-y-8">

                    <!-- Programming Languages -->
                    <div>
                        <h3 class="text-purple-400 font-semibold mb-3">
                            Programming Languages
                        </h3>

                        <div class="flex flex-wrap gap-3">

                            <span class="skill-badge">C++</span>
                            <span class="skill-badge">Python</span>
                            <span class="skill-badge">JavaScript</span>
                            <span class="skill-badge">PHP</span>

                        </div>
                    </div>

                    <!-- Frontend -->
                    <div>
                        <h3 class="text-purple-400 font-semibold mb-3">
                            Frontend
                        </h3>

                        <div class="flex flex-wrap gap-3">

                            <span class="skill-badge">HTML</span>
                            <span class="skill-badge">CSS</span>
                            <span class="skill-badge">Bootstrap</span>
                            <span class="skill-badge">Vue.js</span>

                        </div>
                    </div>

                    <!-- Backend -->
                    <div>
                        <h3 class="text-purple-400 font-semibold mb-3">
                            Backend
                        </h3>

                        <div class="flex flex-wrap gap-3">

                            <span class="skill-badge">Laravel</span>
                            <span class="skill-badge">PHP</span>

                        </div>
                    </div>

                    <!-- Database -->
                    <div>
                        <h3 class="text-purple-400 font-semibold mb-3">
                            Database
                        </h3>

                        <div class="flex flex-wrap gap-3">

                            <span class="skill-badge">MySQL</span>

                        </div>
                    </div>

                    <!-- Design -->
                    <div>
                        <h3 class="text-purple-400 font-semibold mb-3">
                            Design
                        </h3>

                        <div class="flex flex-wrap gap-3">

                            <span class="skill-badge">Figma</span>

                        </div>
                    </div>

                    <!-- Tools (Recommended Additions) -->
                    <div>
                        <h3 class="text-purple-400 font-semibold mb-3">
                            Tools & Others
                        </h3>

                        <div class="flex flex-wrap gap-3">

                            <span class="skill-badge">Git</span>
                            <span class="skill-badge">GitHub</span>
                            <span class="skill-badge">VS Code</span>
                            <span class="skill-badge">XAMPP</span>

                        </div>
                    </div>

                </div>

            </section>

            <!-- EXPERIENCE -->
            <section id="experience" class="border-t border-gray-800 mt-12 pt-10 scroll-mt-24">

                <h2 class="text-white text-2xl font-bold mb-10">
                    Experience
                </h2>

                <div class="space-y-8">

                    <!-- Junior Position -->
                    <div class="relative pl-6 border-l border-gray-700">

                        <div class="absolute w-3 h-3 bg-purple-500 rounded-full -left-[7px] top-2"></div>

                        <h3 class="text-white font-semibold text-lg">
                            Junior Web Developer
                        </h3>

                        <p class="text-purple-400 text-sm">
                            Rebel IT • 6 Months
                        </p>

                        <p class="text-gray-400 mt-2 text-sm leading-relaxed">
                            Worked on developing and maintaining web applications using Laravel,
                            PHP, and MySQL. Assisted in building responsive user interfaces
                            and fixing bugs in existing systems. Collaborated with senior
                            developers to improve application performance and functionality.
                        </p>

                    </div>

                    <!-- Internship -->
                    <div class="relative pl-6 border-l border-gray-700">

                        <div class="absolute w-3 h-3 bg-purple-500 rounded-full -left-[7px] top-2"></div>

                        <h3 class="text-white font-semibold text-lg">
                            Web Developer Intern
                        </h3>

                        <p class="text-purple-400 text-sm">
                            Rebel IT • 4 Months
                        </p>

                        <p class="text-gray-400 mt-2 text-sm leading-relaxed">
                            Completed internship training focused on Laravel development,
                            database management, and frontend integration. Built CRUD-based
                            applications and gained practical experience in Git, debugging,
                            and project deployment workflows.
                        </p>

                    </div>

                </div>

            </section>
            <!-- PROJECTS -->
            <section id="projects" class="border-t border-gray-800 mt-12 pt-10 scroll-mt-24">

                <h2 class="text-white text-2xl font-bold mb-10">
                    Projects
                </h2>

                <div class="grid md:grid-cols-2 gap-6">

                    <!-- Project 1 -->
                    <div class="bg-neutral-900 p-6 rounded-xl border border-gray-800 hover:border-purple-500 transition">

                        <h3 class="text-white font-semibold text-lg mb-2">
                            Python Automation Form Filler
                        </h3>

                        <p class="text-gray-400 text-sm mb-4">
                            Built an automated Python system that fills online forms
                            with structured data, improving data entry speed and accuracy.
                        </p>

                        <div class="flex flex-wrap gap-2 text-xs text-purple-400">

                            <span>Python</span>
                            <span>Automation</span>

                        </div>

                    </div>

                    <!-- Project 2 -->
                    <div class="bg-neutral-900 p-6 rounded-xl border border-gray-800 hover:border-purple-500 transition">

                        <h3 class="text-white font-semibold text-lg mb-2">
                            Deshi-Worker.com Website
                        </h3>

                        <p class="text-gray-400 text-sm mb-4">
                            Developed a service platform website connecting workers
                            and clients with user-friendly interface and dynamic features.
                        </p>

                        <div class="flex flex-wrap gap-2 text-xs text-purple-400">

                            <span>Laravel</span>
                            <span>PHP</span>
                            <span>MySQL</span>

                        </div>

                    </div>

                    <!-- Project 3 -->
                    <div class="bg-neutral-900 p-6 rounded-xl border border-gray-800 hover:border-purple-500 transition">

                        <h3 class="text-white font-semibold text-lg mb-2">
                            Job Finding Website
                        </h3>

                        <p class="text-gray-400 text-sm mb-4">
                            Built a Laravel-based job portal where users can
                            search jobs, apply, and manage applications.
                        </p>

                        <div class="flex flex-wrap gap-2 text-xs text-purple-400">

                            <span>Laravel</span>
                            <span>MySQL</span>
                            <span>Bootstrap</span>

                        </div>

                    </div>

                    <!-- Project 4 -->
                    <div class="bg-neutral-900 p-6 rounded-xl border border-gray-800 hover:border-purple-500 transition">

                        <h3 class="text-white font-semibold text-lg mb-2">
                            Car Parking Spot Booking System
                        </h3>

                        <p class="text-gray-400 text-sm mb-4">
                            Created an online booking system to reserve parking
                            spots and manage availability efficiently.
                        </p>

                        <div class="flex flex-wrap gap-2 text-xs text-purple-400">

                            <span>Laravel</span>
                            <span>PHP</span>
                            <span>MySQL</span>

                        </div>

                    </div>

                    <!-- Project 5 -->
                    <div class="bg-neutral-900 p-6 rounded-xl border border-gray-800 hover:border-purple-500 transition">

                        <h3 class="text-white font-semibold text-lg mb-2">
                            Employee CRUD System
                        </h3>

                        <p class="text-gray-400 text-sm mb-4">
                            Developed an employee management system supporting
                            create, read, update, and delete operations.
                        </p>

                        <div class="flex flex-wrap gap-2 text-xs text-purple-400">

                            <span>Laravel</span>
                            <span>PHP</span>
                            <span>MySQL</span>

                        </div>

                    </div>

                    <!-- Project 6 -->
                    <div class="bg-neutral-900 p-6 rounded-xl border border-gray-800 hover:border-purple-500 transition">

                        <h3 class="text-white font-semibold text-lg mb-2">
                            Rebel IT Portfolio Website
                        </h3>

                        <p class="text-gray-400 text-sm mb-4">
                            Designed and developed a professional portfolio
                            website showcasing company services and projects.
                        </p>

                        <div class="flex flex-wrap gap-2 text-xs text-purple-400">

                            <span>HTML</span>
                            <span>CSS</span>
                            <span>JavaScript</span>

                        </div>

                    </div>

                </div>

            </section>
            <!-- BLOGS -->
            <section id="blogs" class="border-t border-gray-800 mt-12 pt-10 scroll-mt-24">

                <h2 class="text-white text-2xl font-bold mb-10">
                    Blogs
                </h2>

                <div class="grid md:grid-cols-2 gap-6">

                    <!-- Blog 1 -->
                    <div class="bg-neutral-900 p-6 rounded-xl border border-gray-800 hover:border-purple-500 transition">

                        <h3 class="text-white font-semibold text-lg mb-3">
                            ⚽ The Rise of Football in Bangladesh
                        </h3>

                        <p class="text-gray-400 text-sm mb-4">
                            Football is becoming popular again in Bangladesh. Young players
                            are joining academies and international tournaments are creating
                            new opportunities for future football stars.
                        </p>

                        <a href="/blog/1" class="text-purple-400 text-sm hover:underline">

                            Read More →

                        </a>
                    </div>

                    <!-- Blog 2 -->
                    <div class="bg-neutral-900 p-6 rounded-xl border border-gray-800 hover:border-purple-500 transition">

                        <h3 class="text-white font-semibold text-lg mb-3">
                            🌿 The Beauty of Sundarbans and Cox's Bazar
                        </h3>

                        <p class="text-gray-400 text-sm mb-4">
                            Bangladesh is rich with natural beauty. The Sundarbans and
                            Cox's Bazar attract thousands of tourists every year with
                            forests, wildlife, and long sea beaches.
                        </p>
                        <a href="/blog/2" class="text-purple-400 text-sm hover:underline">

                            Read More →

                        </a>

                    </div>

                    <!-- Blog 3 -->
                    <div class="bg-neutral-900 p-6 rounded-xl border border-gray-800 hover:border-purple-500 transition">

                        <h3 class="text-white font-semibold text-lg mb-3">
                            🤖 Artificial Intelligence in Modern Development
                        </h3>

                        <p class="text-gray-400 text-sm mb-4">
                            Artificial Intelligence is changing the world. Developers are
                            using AI tools to automate tasks, analyze data, and build
                            smarter applications faster than ever before.
                        </p>
                        <a href="/blog/3" class="text-purple-400 text-sm hover:underline">

                            Read More →

                        </a>

                    </div>

                    <!-- Blog 4 -->
                    <div class="bg-neutral-900 p-6 rounded-xl border border-gray-800 hover:border-purple-500 transition">

                        <h3 class="text-white font-semibold text-lg mb-3">
                            💼 Job Crisis in Web Development
                        </h3>

                        <p class="text-gray-400 text-sm mb-4">
                            Many new developers face job challenges due to competition.
                            Building real-world projects and strong portfolios helps
                            developers stand out in the job market.
                        </p>

                        <a href="/blog/4" class="text-purple-400 text-sm hover:underline">

                            Read More →

                        </a>

                    </div>

                    <!-- Blog 5 -->
                    <div class="bg-neutral-900 p-6 rounded-xl border border-gray-800 hover:border-purple-500 transition">

                        <h3 class="text-white font-semibold text-lg mb-3">
                            🏖️ Exploring Cox's Bazar Tourism
                        </h3>

                        <p class="text-gray-400 text-sm mb-4">
                            Cox's Bazar is one of the longest sea beaches in the world.
                            It plays an important role in tourism and economic development
                            in Bangladesh.
                        </p>

                        <a href="/blog/5" class="text-purple-400 text-sm hover:underline">

                            Read More →

                        </a>>

                    </div>

                </div>

            </section>

        </div>

    </div>

    <!-- JAVASCRIPT -->
    <script>

        function scrollToSection(sectionId) {

            const section = document.getElementById(sectionId);

            if (section) {

                const offset = 80; // top space (adjust if needed)

                const elementPosition =
                    section.getBoundingClientRect().top + window.pageYOffset;

                const offsetPosition =
                    elementPosition - offset;

                window.scrollTo({
                    top: offsetPosition,
                    behavior: "smooth"
                });

            }

        }

        // Greeting Time
        function updateGreeting() {

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
            else if (currentHour >= 12 && currentHour < 16) {
                greeting = "Good Afternoon 🌤️";
            }
            else if (currentHour >= 16 && currentHour < 20) {
                greeting = "Good Evening 🌆";
            }
            else {
                greeting = "Good Night 🌙";
            }

            document.getElementById("greetingText").innerText = greeting;

        }

        updateGreeting();

    </script>

@endsection