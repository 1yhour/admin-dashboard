{{-- resources/views/components/sidebar.blade.php --}}
@php
    $navLinks = [
        ['href' => '/admin/dashboard', 'label' => 'Dashboard',  'icon' => 'dashboard'],
        ['href' => '/admin/users',     'label' => 'Users',       'icon' => 'people'],
        ['href' => '/admin/products',  'label' => 'Products',    'icon' => 'inventory_2'],
        ['href' => '/admin/orders',    'label' => 'Orders',      'icon' => 'receipt_long'],
    ];
    $currentUrl = request()->path();
@endphp

{{-- Mobile overlay --}}
<div id="sidebar-overlay"
     class="fixed inset-0 z-20 bg-black/60 backdrop-blur-sm hidden lg:hidden"
     onclick="document.getElementById('sidebar').classList.add('-translate-x-full'); this.classList.add('hidden')">
</div>

<aside id="sidebar"
       class="fixed inset-y-0 left-0 z-30 w-64 -translate-x-full lg:translate-x-0 lg:static lg:inset-auto
              transition-transform duration-300 ease-in-out
              flex flex-col bg-slate-900 border-r border-slate-800 shadow-2xl">

    {{-- Logo --}}
    <div class="flex items-center gap-3 px-6 py-5 border-b border-slate-800">
        <div class="flex items-center justify-center w-9 h-9 rounded-xl bg-indigo-600 shadow-lg shadow-indigo-600/30">
            <span class="material-symbols-rounded text-white text-xl">shield</span>
        </div>
        <div>
            <p class="text-sm font-bold text-white tracking-wide">AdminPanel</p>
            <p class="text-xs text-slate-500">Control Center</p>
        </div>
    </div>

    {{-- Nav --}}
    <nav class="flex-1 px-3 py-4 space-y-1 overflow-y-auto">
        <p class="px-3 mb-2 text-xs font-semibold uppercase tracking-widest text-slate-500">Main Menu</p>

        @foreach ($navLinks as $link)
            @php $active = '/' . $currentUrl === $link['href'] || $currentUrl === ltrim($link['href'], '/'); @endphp
            <a href="{{ $link['href'] }}"
               class="group flex items-center gap-3 px-3 py-2.5 rounded-xl text-sm font-medium transition-all duration-200
                      {{ $active
                          ? 'bg-indigo-600/20 text-indigo-400 shadow-sm'
                          : 'text-slate-400 hover:text-white hover:bg-slate-800' }}">
                <span class="material-symbols-rounded text-xl
                             {{ $active ? 'text-indigo-400' : 'text-slate-500 group-hover:text-slate-300' }}">
                    {{ $link['icon'] }}
                </span>
                {{ $link['label'] }}
                @if ($active)
                    <span class="ml-auto w-1.5 h-1.5 rounded-full bg-indigo-400"></span>
                @endif
            </a>
        @endforeach

        <div class="pt-4 mt-4 border-t border-slate-800">
            <p class="px-3 mb-2 text-xs font-semibold uppercase tracking-widest text-slate-500">Account</p>
            <a href="#"
               class="group flex items-center gap-3 px-3 py-2.5 rounded-xl text-sm font-medium text-slate-400 hover:text-white hover:bg-slate-800 transition-all duration-200">
                <span class="material-symbols-rounded text-xl text-slate-500 group-hover:text-slate-300">settings</span>
                Settings
            </a>
            <a href="#"
               class="group flex items-center gap-3 px-3 py-2.5 rounded-xl text-sm font-medium text-slate-400 hover:text-red-400 hover:bg-red-500/10 transition-all duration-200">
                <span class="material-symbols-rounded text-xl text-slate-500 group-hover:text-red-400">logout</span>
                Logout
            </a>
        </div>
    </nav>

    {{-- Footer --}}
    <div class="px-4 py-4 border-t border-slate-800">
        <div class="flex items-center gap-3">
            <div class="flex items-center justify-center w-9 h-9 rounded-full bg-linear-to-br from-indigo-500 to-purple-600 text-white text-sm font-bold">
                A
            </div>
            <div class="flex-1 min-w-0">
                <p class="text-sm font-medium text-white truncate">Administrator</p>
                <p class="text-xs text-slate-500 truncate">admin@example.com</p>
            </div>
            <span class="material-symbols-rounded text-slate-500 text-lg">more_vert</span>
        </div>
    </div>
</aside>
