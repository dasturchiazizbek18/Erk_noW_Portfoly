<!DOCTYPE html>
<html lang="uz" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Erk_noW | Portfolio</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- FontAwesome Ikonkalar uchun -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        /* Neon Logotip effekti */
        .neon-text {
            text-shadow: 0 0 5px #00f2fe, 0 0 10px #00f2fe, 0 0 20px #00f2fe;
        }
        .neon-border:hover {
            box-shadow: 0 0 15px rgba(0, 242, 254, 0.5);
        }
    </style>
</head>
<body class="bg-slate-950 text-slate-100 font-sans antialiased">

    <!-- HEADER / NAVIGATION -->
    <header class="sticky top-0 z-50 bg-slate-950/80 backdrop-blur-md border-b border-slate-800">
        <div class="max-w-6xl mx-auto px-4 h-16 flex items-center justify-between">
            <a href="#" class="text-2xl font-black tracking-wider text-cyan-400 neon-text">Erk_noW</a>
            <nav class="flex space-x-6 text-sm font-medium">
                <a href="#about" class="hover:text-cyan-400 transition-colors">Men haqimda</a>
                <a href="#skills" class="hover:text-cyan-400 transition-colors">Ko'nikmalar</a>
                <a href="#projects" class="hover:text-cyan-400 transition-colors">Loyihalar</a>
                <a href="#speech" class="text-amber-400 hover:text-amber-300 transition-colors font-bold"><i class="fa-solid fa-microphone mr-1"></i> Sahna Nutqi</a>
                <a href="{{ route('admin') }}" class="bg-cyan-500/10 text-cyan-400 border border-cyan-500/30 px-3 py-1 rounded hover:bg-cyan-500 hover:text-slate-950 transition-all">Admin</a>
            </nav>
        </div>
    </header>

    <!-- HERO SECTION -->
    <section class="max-w-6xl mx-auto px-4 py-20 md:py-32 flex flex-col md:flex-row items-center justify-between gap-12">
        <div class="flex-1 space-y-6 text-center md:text-left">
            <div class="inline-block bg-cyan-500/10 text-cyan-400 text-xs px-3 py-1 rounded-full border border-cyan-500/20 font-semibold tracking-wide uppercase">
                Xush kelibsiz!
            </div>
            <h1 class="text-4xl md:text-6xl font-extrabold tracking-tight">
              <span class="text-transparent bg-clip-text bg-gradient-to-r from-cyan-400 to-blue-500">Erkinjonov Azizbek</span>
            </h1>
            <p class="text-xl md:text-2xl text-slate-400 font-medium">
                Web Dasturchi (Backend Developer)
            </p>
            <p class="text-slate-400 max-w-lg mx-auto md:mx-0 leading-relaxed">
                Men 16 yoshdaman, Sirdaryolikman. Bosh vaqtimda ham IT sohasini mukammal o'rganish uchun doim kompyuter bilan shug'ullanaman. Dasturlashdan tashqari futbolga juda qattiq qiziqaman.
            </p>
            <div class="flex justify-center md:justify-start space-x-4 pt-2">
                <a href="#projects" class="bg-gradient-to-r from-cyan-500 to-blue-600 text-slate-950 px-6 py-3 rounded-xl font-bold shadow-lg shadow-cyan-500/20 hover:opacity-90 transition-opacity">
                    Loyihalarimni ko'rish
                </a>
                <a href="https://t.me/Erkinjonovv_18" target="_blank" class="bg-slate-900 border border-slate-800 px-6 py-3 rounded-xl font-semibold hover:bg-slate-800 transition-colors">
                    Bog'lanish
                </a>
            </div>
        </div>
        
        <!-- Profil rasmi o'rni -->
        <div class="w-64 h-64 md:w-80 md:h-80 relative group flex-shrink-0">
            <div class="absolute inset-0 bg-gradient-to-r from-cyan-500 to-blue-500 rounded-2xl blur-xl opacity-30 group-hover:opacity-50 transition-opacity"></div>
            <div class="w-full h-full bg-slate-900 rounded-2xl border border-slate-800 overflow-hidden relative z-10 flex items-center justify-center">
                <!-- Kelajakda public/images/profile.jpg ga rasm qo'ysang shu yerda chiqadi -->
                @if(file_exists(public_path('images/profile.jpg')))
                    <img src="{{ asset('images/profile.jpg') }}" alt="Azizbek" class="w-full h-full object-cover">
                @else
                    <div class="text-center p-6">
                        <i class="fa-solid fa-user-astronaut text-5xl text-cyan-400 mb-3 animate-pulse"></i>
                        <p class="text-xs text-slate-500">public/images/profile.jpg joyiga o'z rasmingni tashla</p>
                    </div>
                @endif
            </div>
        </div>
    </section>

    <!-- MEN HAQIMDA / INFO -->
    <section id="about" class="bg-slate-900/50 border-y border-slate-900 py-16">
        <div class="max-w-4xl mx-auto px-4">
            <h2 class="text-2xl md:text-3xl font-bold text-center mb-10 text-cyan-400">Shaxsiy Ma'lumotlar</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 text-base">
                <div class="bg-slate-950 p-5 rounded-xl border border-slate-800/60 flex items-center space-x-4">
                    <i class="fa-solid fa-cake-candles text-xl text-cyan-400 w-8 text-center"></i>
                    <div><p class="text-xs text-slate-500 uppercase font-semibold">Yosh</p><p class="font-medium">16 yoshdaman</p></div>
                </div>
                <div class="bg-slate-950 p-5 rounded-xl border border-slate-800/60 flex items-center space-x-4">
                    <i class="fa-solid fa-location-dot text-xl text-cyan-400 w-8 text-center"></i>
                    <div><p class="text-xs text-slate-500 uppercase font-semibold">Manzil</p><p class="font-medium">Sirdaryo, O'zbekiston</p></div>
                </div>
                <div class="bg-slate-950 p-5 rounded-xl border border-slate-800/60 flex items-center space-x-4">
                    <i class="fa-solid fa-phone text-xl text-cyan-400 w-8 text-center"></i>
                    <div><p class="text-xs text-slate-500 uppercase font-semibold">Telefon</p><p class="font-medium">+998 95 799 18 10</p></div>
                </div>
                <div class="bg-slate-950 p-5 rounded-xl border border-slate-800/60 flex items-center space-x-4">
                    <i class="fa-solid fa-hashtag text-xl text-cyan-400 w-8 text-center"></i>
                    <div>
                        <p class="text-xs text-slate-500 uppercase font-semibold">Ijtimoiy Tarmoqlar</p>
                        <div class="flex space-x-3 mt-1">
                            <a href="https://github.com/dasturchiazizbek18" target="_blank" class="hover:text-cyan-400 text-lg transition-colors"><i class="fa-brands fa-github"></i></a>
                            <a href="https://t.me/Erkinjonovv_18" target="_blank" class="hover:text-cyan-400 text-lg transition-colors"><i class="fa-brands fa-telegram"></i></a>
                            <a href="https://www.instagram.com/erkinjonovv77_/" target="_blank" class="hover:text-cyan-400 text-lg transition-colors"><i class="fa-brands fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SKILLS SECTION -->
    <section id="skills" class="max-w-6xl mx-auto px-4 py-20">
        <h2 class="text-2xl md:text-3xl font-bold text-center mb-12">Mening <span class="text-cyan-400">Texnologiyalarim</span></h2>
        <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
            @foreach(['PHP' => 'fa-php text-blue-400', 'LARAVEL' => 'fa-laravel text-red-500', 'MySQL' => 'fa-database text-amber-500', 'REACT' => 'fa-react text-cyan-400'] as $skill => $icon)
                <div class="bg-slate-900 border border-slate-800 rounded-xl p-6 text-center neon-border transition-all group">
                    <i class="fa-brands {{ $icon }} text-4xl mb-3 group-hover:scale-110 transition-transform"></i>
                    <p class="font-bold tracking-wider text-sm">{{ $skill }}</p>
                </div>
            @endforeach
        </div>
    </section>

    <!-- PROJECTS (GRID) SECTION -->
    <section id="projects" class="max-w-6xl mx-auto px-4 py-20 border-t border-slate-900">
        <h2 class="text-2xl md:text-3xl font-bold text-center mb-4">Bajarilgan <span class="text-cyan-400">Loyihalar</span></h2>
        <p class="text-center text-slate-500 mb-12 text-sm">Admin paneldan qo'shilgan oxirgi ishlarim</p>
        
        @if($projects->isEmpty())
            <div class="text-center py-12 bg-slate-900/30 rounded-2xl border border-dashed border-slate-800">
                <i class="fa-solid fa-folder-open text-4xl text-slate-600 mb-3"></i>
                <p class="text-slate-500 text-sm">Hozircha loyihalar yo'q. Yuqoridagi "Admin" tugmasi orqali kirib dastlabki loyihangizni qo'shing!</p>
            </div>
        @else
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                @foreach($projects as $project)
                    <div class="bg-slate-900 border border-slate-800 rounded-xl overflow-hidden group hover:border-slate-700 transition-all flex flex-col">
                        <div class="h-48 bg-slate-950 relative overflow-hidden flex items-center justify-center border-b border-slate-800/80">
                            @if($project->image)
                                <img src="{{ asset($project->image) }}" alt="{{ $project->title_uz }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                            @else
                                <i class="fa-solid fa-laptop-code text-4xl text-slate-700"></i>
                            @endif
                        </div>
                        <div class="p-6 flex-1 flex flex-col justify-between space-y-4">
                            <div>
                                <h3 class="text-lg font-bold text-slate-100 group-hover:text-cyan-400 transition-colors">{{ $project->title_uz }}</h3>
                                <p class="text-xs text-slate-400 line-clamp-3 mt-2">{{ $project->description_uz }}</p>
                            </div>
                            <div class="space-y-3">
                                <div class="flex flex-wrap gap-1">
                                    @foreach(explode(',', $project->technologies) as $tech)
                                        <span class="bg-slate-950 text-slate-400 text-[10px] font-mono px-2 py-0.5 rounded border border-slate-800">{{ trim($tech) }}</span>
                                    @endforeach
                                </div>
                                @if($project->project_url)
                                    <a href="{{ $project->project_url }}" target="_blank" class="inline-flex items-center text-xs text-cyan-400 font-semibold hover:underline">
                                        Loyihani ko'rish <i class="fa-solid fa-arrow-up-right-from-square ml-1 text-[10px]"></i>
                                    </a>
                                @endif
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
    </section>

    <!-- SPEECH & FOOTER SECTION -->
    <footer id="speech" class="bg-slate-950 border-t border-slate-900 py-16">
        <div class="max-w-4xl mx-auto px-4">
            
            <!-- SAHNA NUTQI CARD -->
            <div class="bg-gradient-to-b from-slate-900 to-slate-950 p-8 rounded-2xl border border-amber-500/20 shadow-xl mb-12 relative overflow-hidden">
                <div class="absolute -right-8 -top-8 text-amber-500/5 text-9xl pointer-events-none font-black"><i class="fa-solid fa-quote-right"></i></div>
                <div class="flex items-center space-x-3 mb-4">
                    <span class="flex h-3 w-3 relative">
                      <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-amber-400 opacity-75"></span>
                      <span class="relative inline-flex rounded-full h-3 w-3 bg-amber-500"></span>
                    </span>
                    <h3 class="text-xl font-bold text-amber-400 tracking-wide uppercase text-sm">Ertangi Sahna Nutqi (Ota-onalar va Ustozlar uchun)</h3>
                </div>
                <p class="text-slate-300 italic leading-relaxed text-base md:text-lg">
                    "Assalomu alaykum muhtaram ustozlar, aziz ota-onalar va qadrli do'stlar! Bugun men sizlarning qarshingizda g'urur bilan turibman. Men **IT Live akademiyasida** roppa-rosa 1 yil davomida tahsil oldim va dasturlash olamining poydevorini mukammal o'rgandim. Atigi 16 yoshimda mana shu ko'rib turganingiz — o'z qo'llarim bilan noldan boshlab **PHP Laravel** freymvorkida yaratgan shaxsiy portfolio veb-saytim va uning murakkab backend tizimidir. Menga ishonch bildirgan ota-onamga va bilim bergan ustozlarimga cheksiz rahmat aytaman. Bu hali boshlanishi, maqsadim — kelajakda yurtimiz rivojiga ulkan hissa qo'shadigan buyuk dasturchi bo'lish!"
                </p>
                <div class="mt-4 text-xs text-amber-500/70 flex items-center">
                    <i class="fa-solid fa-circle-info mr-1"></i> Ertaga sahnaga chiqqaningda ushbu matnni shu yerning o'zidan o'qib berishing yoki ekranda hammaga ko'rsatishing mumkin!
                </div>
            </div>

            <!-- FOOTER PASTI -->
            <div class="flex flex-col md:flex-row items-center justify-between gap-6 text-sm text-slate-500">
                <div>
                    <p class="font-bold text-slate-400 text-base mb-1">Erk_noW</p>
                    <p>&copy; {{ date('Y') }} Azizbek Erkinjonov. Barcha huquqlar himoyalangan.</p>
                </div>
                <div class="flex space-x-6 text-xs">
                    <p>Powered by <span class="text-cyan-500">Laravel 8.2 & OpenServer</span></p>
                </div>
            </div>
        </div>
    </footer>

</body>
</html>