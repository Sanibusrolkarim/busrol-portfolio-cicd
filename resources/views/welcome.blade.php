<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Busrol Karim - Portfolio</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;800&display=swap');
        body { font-family: 'Inter', sans-serif; }
    </style>
</head>
<body class="bg-slate-900 text-slate-200 selection:bg-blue-500 selection:text-white">
    
    <nav class="fixed w-full z-50 bg-slate-900/80 backdrop-blur-md border-b border-slate-800">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-20">
                <div class="flex-shrink-0 cursor-pointer">
                    <span class="text-3xl font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-blue-400 to-emerald-400 hover:opacity-80 transition duration-300">
                        BK.
                    </span>
                </div>
                <div class="hidden md:block">
                    <div class="ml-10 flex items-baseline space-x-8">
                        <a href="#" class="hover:text-blue-400 transition duration-300 px-3 py-2 text-sm font-semibold tracking-wide">Beranda</a>
                        <a href="#about" class="hover:text-blue-400 transition duration-300 px-3 py-2 text-sm font-semibold tracking-wide">Tentang</a>
                        <a href="#contact" class="hover:text-blue-400 transition duration-300 px-3 py-2 text-sm font-semibold tracking-wide">Kontak</a>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <section class="pt-32 pb-20 px-4 sm:px-6 lg:px-8 max-w-6xl mx-auto flex flex-col md:flex-row items-center justify-between min-h-screen">
        <div class="md:w-1/2 text-center md:text-left z-10 relative">
            <div class="inline-block px-5 py-2 mb-8 rounded-full border border-blue-500/30 bg-blue-500/10 text-blue-400 text-sm font-bold tracking-widest uppercase shadow-sm">
                🚀 CI/CD Pipeline Ready
            </div>
            <h1 class="text-5xl md:text-7xl font-extrabold tracking-tight mb-6 text-white leading-tight">
                Halo, Saya <br/>
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-400 to-emerald-400">Busrol Karim</span>
            </h1>
            <p class="text-lg md:text-xl text-slate-400 mb-10 max-w-2xl leading-relaxed font-light">
                Seorang pengembang perangkat lunak yang berfokus pada pembuatan antarmuka modern, arsitektur <span class="font-semibold text-slate-300">backend</span> yang tangguh, dan otomatisasi infrastruktur menggunakan <span class="font-semibold text-slate-300">Docker</span> dan <span class="font-semibold text-slate-300">GitHub Actions</span>.
            </p>
            <div class="flex flex-col sm:flex-row gap-5 justify-center md:justify-start">
                <a href="#contact" class="px-8 py-4 rounded-xl bg-gradient-to-r from-blue-600 to-blue-500 hover:from-blue-500 hover:to-blue-400 text-white font-bold transition duration-300 shadow-lg shadow-blue-500/25 flex items-center justify-center gap-3 transform hover:-translate-y-1">
                    <i class="fas fa-envelope"></i> Hubungi Saya
                </a>
                <a href="https://github.com" target="_blank" class="px-8 py-4 rounded-xl bg-slate-800/80 hover:bg-slate-700 text-white font-bold border border-slate-700 transition duration-300 flex items-center justify-center gap-3 transform hover:-translate-y-1">
                    <i class="fab fa-github text-xl"></i> GitHub Profile
                </a>
            </div>
        </div>
        
        <div class="md:w-1/2 mt-20 md:mt-0 relative flex justify-center">
            <div class="absolute inset-0 bg-gradient-to-tr from-blue-600 to-emerald-500 rounded-full blur-3xl opacity-20 animate-pulse w-72 h-72 md:w-96 md:h-96 mx-auto"></div>
            
            <div class="relative z-10 w-72 h-72 md:w-96 md:h-96 rounded-full border-8 border-slate-800 shadow-2xl overflow-hidden transition transform hover:scale-105 duration-500 group">
                <img src="https://ui-avatars.com/api/?name=Busrol+Karim&size=512&background=0f172a&color=38bdf8&rounded=false&font-size=0.33" alt="Busrol Karim" class="w-full h-full object-cover">
                <div class="absolute inset-0 bg-blue-500/20 opacity-0 group-hover:opacity-100 transition duration-300"></div>
            </div>
        </div>
    </section>

    <section id="about" class="py-24 border-t border-slate-800/50 bg-slate-900/50 relative overflow-hidden">
        <div class="absolute top-0 left-1/2 transform -translate-x-1/2 w-full h-px bg-gradient-to-r from-transparent via-blue-500/50 to-transparent"></div>
        <div class="max-w-6xl mx-auto px-4 text-center relative z-10">
            <h2 class="text-3xl md:text-4xl font-bold mb-16 text-white tracking-wide">Infrastruktur & Teknologi</h2>
            <div class="flex flex-wrap justify-center gap-12 md:gap-20 opacity-80">
                <div class="flex flex-col items-center gap-4 hover:opacity-100 hover:text-red-500 transition duration-300 transform hover:-translate-y-2 cursor-pointer">
                    <i class="fab fa-laravel text-5xl md:text-6xl drop-shadow-lg"></i>
                    <span class="font-semibold tracking-wide">Laravel 11</span>
                </div>
                <div class="flex flex-col items-center gap-4 hover:opacity-100 hover:text-blue-500 transition duration-300 transform hover:-translate-y-2 cursor-pointer">
                    <i class="fab fa-docker text-5xl md:text-6xl drop-shadow-lg"></i>
                    <span class="font-semibold tracking-wide">Docker Hub</span>
                </div>
                <div class="flex flex-col items-center gap-4 hover:opacity-100 hover:text-white transition duration-300 transform hover:-translate-y-2 cursor-pointer">
                    <i class="fab fa-github text-5xl md:text-6xl drop-shadow-lg"></i>
                    <span class="font-semibold tracking-wide">GitHub Actions</span>
                </div>
                <div class="flex flex-col items-center gap-4 hover:opacity-100 hover:text-cyan-400 transition duration-300 transform hover:-translate-y-2 cursor-pointer">
                    <i class="fab fa-css3-alt text-5xl md:text-6xl drop-shadow-lg"></i>
                    <span class="font-semibold tracking-wide">Tailwind CSS</span>
                </div>
            </div>
        </div>
    </section>

    <footer id="contact" class="border-t border-slate-800 py-10 bg-slate-950 text-center text-slate-500">
        <div class="max-w-6xl mx-auto px-4">
            <div class="flex justify-center space-x-6 mb-6">
                <a href="#" class="text-slate-400 hover:text-white transition duration-300"><i class="fab fa-linkedin text-2xl"></i></a>
                <a href="#" class="text-slate-400 hover:text-white transition duration-300"><i class="fab fa-instagram text-2xl"></i></a>
                <a href="#" class="text-slate-400 hover:text-white transition duration-300"><i class="fas fa-globe text-2xl"></i></a>
            </div>
            <p class="text-sm tracking-wider font-light">
                &copy; 2026 <span class="font-semibold text-slate-400">Busrol Karim</span>. Proyek Ujian Tengah Semester.
            </p>
        </div>
    </footer>

</body>
</html>