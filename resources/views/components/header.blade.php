@php use Illuminate\Support\Str; @endphp
<header class="bg-white/90 backdrop-blur-md border-b border-emerald-100/80 shadow-sm">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 h-16 flex items-center justify-between">
        <a href="{{ route('home') }}" class="flex items-center gap-2.5 group">
            <div class="w-9 h-9 rounded-xl bg-emerald-100 text-emerald-600 flex items-center justify-center transition duration-200">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                </svg>
            </div>

            <span class="text-lg font-bold text-gray-800 tracking-tight">
                Notes
            </span>
        </a>

        <div class="flex items-center gap-4">
            <div class="flex items-center gap-2.5">
                <div class="w-8 h-8 rounded-full bg-emerald-100 text-emerald-700 font-semibold text-sm flex items-center justify-center border border-emerald-200">
                    {{ Str::charAt(session('user.username'), 0) }}
                </div>

                <span class="text-sm font-medium text-gray-700 hidden sm:inline">
                    {{ session('user.username') }}
                </span>
            </div>

            <div class="h-5 w-px bg-gray-200"></div>

            <form action="{{ route('logout') }}" method="GET" class="m-0">
                @csrf

                <button
                    type="submit"
                    class="inline-flex items-center gap-1.5 px-3 py-1.5 text-sm font-medium text-gray-600 hover:text-red-600 hover:bg-red-50 rounded-xl transition duration-200 cursor-pointer"
                >
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                    </svg>
                    <span>Sair</span>
                </button>
            </form>
        </div>
    </div>
</header>
