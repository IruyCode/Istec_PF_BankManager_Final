<nav class="fixed top-0 w-full z-50 bg-slate-900 border-b border-slate-800">
    <div class="max-w-7xl mx-auto px-4 h-16 flex items-center justify-between">

        <!-- Left: Brand -->
        <div class="flex items-center gap-4">
            <span class="text-white font-semibold tracking-tight">
                Finance Manager
            </span>
        </div>

        <!-- Center: Main navigation -->
        <div class="hidden md:flex items-center gap-6 text-sm">
            <a href="#" class="text-slate-300 hover:text-white">Dashboard</a>
            <a href="#" class="text-slate-300 hover:text-white">Metas</a>
            <a href="#" class="text-slate-300 hover:text-white">Dívidas</a>
            <a href="#" class="text-slate-300 hover:text-white">Devedores</a>
            <a href="#" class="text-slate-300 hover:text-white">Investimentos</a>
        </div>

        <!-- Right: User actions -->
        <div x-data="{ open: false }" class="relative">
            <button @click="open = !open" class="flex items-center gap-2 text-slate-300 hover:text-white">
                <span class="text-sm">Conta</span>
                ⚙️
            </button>

            <div x-show="open" @click.outside="open = false" x-transition
                class="absolute right-0 mt-2 w-48 bg-slate-800 rounded-lg shadow-lg border border-slate-700">
                <a href="#" class="block px-4 py-2 text-sm text-slate-300 hover:bg-slate-700">Configurações</a>
                <a href="#" class="block px-4 py-2 text-sm text-slate-300 hover:bg-slate-700">Perfil</a>
                <a href="#" class="block px-4 py-2 text-sm text-red-400 hover:bg-slate-700">Sair</a>
            </div>
        </div>
    </div>
</nav>
