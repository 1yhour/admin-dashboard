{{-- resources/views/components/navbar.blade.php --}}

<header class="flex items-center justify-between px-6 py-4 bg-slate-900 border-b border-slate-800 shadow-md">

    {{-- Left: Hamburger (mobile) + Page title --}}
    <div class="flex items-center gap-4">
        <button id="sidebar-toggle"
                onclick="document.getElementById('sidebar').classList.toggle('-translate-x-full'); document.getElementById('sidebar-overlay').classList.toggle('hidden')"
                class="lg:hidden p-2 rounded-lg text-slate-400 hover:text-white hover:bg-slate-800 transition-colors">
            <span class="material-symbols-rounded text-xl">menu</span>
        </button>

        <div class="hidden sm:block">
            <h1 class="text-base font-semibold text-white">
                {{ $pageTitle ?? 'Dashboard' }}
            </h1>
            <p class="text-xs text-slate-500 mt-0.5">{{ now()->format('l, d F Y') }}</p>
        </div>
    </div>

    {{-- Right: Search + Notifications + Profile --}}
    <div class="flex items-center gap-3">

        {{-- Search --}}
        <div class="hidden md:flex items-center gap-2 px-3 py-2 rounded-xl bg-slate-800 border border-slate-700 text-slate-400
                    focus-within:border-indigo-500 focus-within:ring-1 focus-within:ring-indigo-500/30 transition-all">
            <span class="material-symbols-rounded text-lg">search</span>
            <input type="text"
                   id="global-search"
                   placeholder="Search..."
                   class="bg-transparent text-sm text-slate-200 placeholder-slate-500 outline-none w-40 focus:w-52 transition-all duration-300">
        </div>

        {{-- Notifications --}}
        <div class="relative">
            <button id="notification-btn"
                    class="relative flex items-center justify-center w-10 h-10 rounded-xl bg-slate-800 border border-slate-700
                           text-slate-400 hover:text-white hover:border-indigo-500 transition-all duration-200">
                <span class="material-symbols-rounded text-xl">notifications</span>
                <span class="absolute top-1.5 right-1.5 w-2 h-2 rounded-full bg-indigo-500 ring-2 ring-slate-900"></span>
            </button>
        </div>

        {{-- Divider --}}
        <div class="hidden sm:block w-px h-6 bg-slate-700"></div>

        {{-- Profile --}}
        <button id="profile-btn"
                class="flex items-center gap-2.5 px-2 py-1.5 rounded-xl hover:bg-slate-800 transition-colors group">
            <div class="flex items-center justify-center w-8 h-8 rounded-full bg-linear-to-br from-indigo-500 to-purple-600 text-white text-sm font-bold shadow-lg shadow-indigo-600/20">
                A
            </div>
            <div class="hidden sm:block text-left">
                <p class="text-sm font-medium text-white leading-none">Admin</p>
                <p class="text-xs text-slate-500 mt-0.5">Super Admin</p>
            </div>
            <span class="material-symbols-rounded text-slate-500 text-base group-hover:text-slate-300 transition-colors">expand_more</span>
        </button>

    </div>
</header>

{{-- Google Material Symbols --}}
<link rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />