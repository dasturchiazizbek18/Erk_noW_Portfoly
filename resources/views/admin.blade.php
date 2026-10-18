<!DOCTYPE html>
<html lang="uz">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Erk_noW | Admin Panel</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="bg-slate-950 text-slate-100 font-sans p-6">

    <div class="max-w-5xl mx-auto space-y-8">
        
        <!-- HEADER -->
        <div class="flex items-center justify-between border-b border-slate-800 pb-4">
            <div>
                <h1 class="text-2xl font-bold text-cyan-400">Admin Dashboard</h1>
                <p class="text-xs text-slate-500 mt-1">Portfolio loyihalarini boshqarish</p>
            </div>
            <a href="{{ route('welcome') }}" class="bg-slate-900 border border-slate-800 px-4 py-2 rounded-lg text-sm font-medium hover:bg-slate-800 transition-colors">
                <i class="fa-solid fa-arrow-left mr-1"></i> Saytga qaytish
            </a>
        </div>

        @if(session('success'))
            <div class="bg-emerald-500/10 border border-emerald-500/20 text-emerald-400 p-4 rounded-xl text-sm flex items-center">
                <i class="fa-solid fa-circle-check mr-2 text-base"></i> {{ session('success') }}
            </div>
        @endif

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 items-start">
            
            <!-- LOYIHA QO'SHISH FORMASI -->
            <div class="bg-slate-900 border border-slate-800 rounded-xl p-6 md:col-span-1 space-y-4">
                <h2 class="text-base font-bold text-slate-200 border-b border-slate-800 pb-2"><i class="fa-solid fa-plus text-cyan-400 mr-1"></i> Yangi loyiha</h2>
                
                <form action="{{ route('projects.store') }}" method="POST" enctype="multipart/form-data" class="space-y-4 text-sm">
                    @csrf
                    <div>
                        <label class="block text-xs font-semibold text-slate-400 mb-1">Loyiha nomi (UZ)</label>
                        <input type="text" name="title_uz" required class="w-full bg-slate-950 border border-slate-800 rounded-lg p-2.5 text-slate-100 focus:outline-none focus:border-cyan-500">
                    </div>
                    <div>
                        <label class="block text-xs font-semibold text-slate-400 mb-1">Project Title (EN)</label>
                        <input type="text" name="title_en" required class="w-full bg-slate-950 border border-slate-800 rounded-lg p-2.5 text-slate-100 focus:outline-none focus:border-cyan-500">
                    </div>
                    <div>
                        <label class="block text-xs font-semibold text-slate-400 mb-1">Loyiha haqida tavsif (UZ)</label>
                        <textarea name="description_uz" rows="3" required class="w-full bg-slate-950 border border-slate-800 rounded-lg p-2.5 text-slate-100 focus:outline-none focus:border-cyan-500"></textarea>
                    </div>
                    <div>
                        <label class="block text-xs font-semibold text-slate-400 mb-1">Project Description (EN)</label>
                        <textarea name="description_en" rows="3" required class="w-full bg-slate-950 border border-slate-800 rounded-lg p-2.5 text-slate-100 focus:outline-none focus:border-cyan-500"></textarea>
                    </div>
                    <div>
                        <label class="block text-xs font-semibold text-slate-400 mb-1">Texnologiyalar (Vergul bilan ajrat)</label>
                        <input type="text" name="technologies" placeholder="PHP, Laravel, React" required class="w-full bg-slate-950 border border-slate-800 rounded-lg p-2.5 text-slate-100 focus:outline-none focus:border-cyan-500">
                    </div>
                    <div>
                        <label class="block text-xs font-semibold text-slate-400 mb-1">Loyiha rasmi</label>
                        <input type="file" name="image" class="w-full text-xs text-slate-500 file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border-0 file:text-xs file:font-semibold file:bg-cyan-500/10 file:text-cyan-400 hover:file:bg-cyan-500/20 cursor-pointer">
                    </div>
                    <div>
                        <label class="block text-xs font-semibold text-slate-400 mb-1">Loyiha havolasi (URL - ixtiyoriy)</label>
                        <input type="url" name="project_url" placeholder="https://..." class="w-full bg-slate-950 border border-slate-800 rounded-lg p-2.5 text-slate-100 focus:outline-none focus:border-cyan-500">
                    </div>
                    <button type="submit" class="w-full bg-cyan-500 text-slate-950 font-bold p-3 rounded-lg hover:bg-cyan-400 transition-colors mt-2">
                        Saqlash <i class="fa-solid fa-paper-plane ml-1"></i>
                    </button>
                </form>
            </div>

            <!-- JORIY LOYIHALAR RO'YXATI -->
            <div class="bg-slate-900 border border-slate-800 rounded-xl p-6 md:col-span-2 space-y-4">
                <h2 class="text-base font-bold text-slate-200 border-b border-slate-800 pb-2"><i class="fa-solid fa-list text-cyan-400 mr-1"></i> Mavjud loyihalar ({{ $projects->count() }})</h2>
                
                @if($projects->isEmpty())
                    <p class="text-sm text-slate-500 py-4">Hozircha hech qanday loyiha qo'shilmagan.</p>
                @else
                    <div class="overflow-x-auto">
                        <table class="w-full text-left text-sm border-collapse">
                            <thead>
                                <tr class="border-b border-slate-800 text-slate-400 text-xs">
                                    <th class="pb-3 font-semibold">Rasm</th>
                                    <th class="pb-3 font-semibold">Nomi</th>
                                    <th class="pb-3 font-semibold">Texnologiyalar</th>
                                    <th class="pb-3 font-semibold text-right">Amal</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-slate-800/50">
                                @foreach($projects as $project)
                                    <tr class="text-slate-300">
                                        <td class="py-3.5">
                                            <div class="w-12 h-12 bg-slate-950 border border-slate-800 rounded overflow-hidden flex items-center justify-center">
                                                @if($project->image)
                                                    <img src="{{ asset($project->image) }}" class="w-full h-full object-cover">
                                                @else
                                                    <i class="fa-solid fa-code text-slate-700 text-xs"></i>
                                                @endif
                                            </div>
                                        </td>
                                        <td class="py-3.5 font-medium max-w-[150px] truncate">{{ $project->title_uz }}</td>
                                        <td class="py-3.5 text-xs font-mono text-slate-400 max-w-[150px] truncate">{{ $project->technologies }}</td>
                                        <td class="py-3.5 text-right">
                                            <form action="{{ route('projects.destroy', $project->id) }}" method="POST" onsubmit="return confirm('Haqiqatdan ham o\'chirmoqchimisiz?')">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="text-red-400 hover:text-red-300 transition-colors p-1 text-xs">
                                                    <i class="fa-solid fa-trash-can mr-1"></i> O'chirish
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                @endif
            </div>

        </div>

    </div>

</body>
</html>