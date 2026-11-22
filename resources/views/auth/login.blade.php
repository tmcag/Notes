@extends('main')

@section('content')
    <div
        class="w-full min-h-screen flex items-center justify-center bg-linear-to-br from-emerald-50 via-teal-50 to-emerald-100 p-4">
        <div class="w-full max-w-md bg-white rounded-2xl shadow-xl border border-emerald-100/80 p-8">
            <div class="text-center mb-8">
                <div
                    class="inline-flex items-center justify-center w-12 h-12 rounded-xl bg-emerald-100 text-emerald-600 mb-4">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/>
                    </svg>
                </div>

                <h2 class="text-2xl font-bold text-gray-800">Bem-vindo de volta</h2>
                <p class="text-sm text-gray-500 mt-1">Insira seus dados para acessar sua conta</p>
            </div>

            <form action="/login" method="POST" class="space-y-5">
                @csrf

                @if(session('loginError'))
                    <div class="w-full bg-red-100 py-2.5 rounded-lg text-center">
                        <p class="text-red-500">{{ session('loginError') }}</p>
                    </div>
                @endif

                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700 mb-1.5">
                        E-mail
                    </label>

                    <input
                        type="text"
                        id="email"
                        name="email"
                        value="{{ old('email') }}"
                        autofocus
                        placeholder="seu@email.com"
                        class="w-full px-4 py-2.5 rounded-xl border border-gray-200 text-gray-800 focus:outline-none focus:ring-2 focus:ring-emerald-500/20 transition duration-200"
                    >

                    @error('email')
                    <p class="text-xs text-red-500 mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <div class="flex items-center justify-between mb-1.5">
                        <label for="password" class="block text-sm font-medium text-gray-700">
                            Senha
                        </label>

                        <a href="#" class="text-xs font-medium text-emerald-600 hover:text-emerald-700 transition">
                            Esqueceu a senha?
                        </a>
                    </div>

                    <input
                        type="password"
                        id="password"
                        name="password"
                        value="{{ old('password') }}"
                        placeholder="••••••••"
                        class="w-full px-4 py-2.5 rounded-xl border border-gray-200 text-gray-800 placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-emerald-500/20 focus:border-emerald-500 transition duration-200"
                    >

                    @error('password')
                    <p class="text-xs text-red-500 mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <button
                    type="submit"
                    class="w-full py-3 px-4 hover:bg-emerald-700 bg-emerald-800 text-white font-semibold rounded-xl shadow-md shadow-emerald-600/20 hover:shadow-lg hover:shadow-emerald-600/30 transition duration-200 cursor-pointer"
                >
                    Entrar
                </button>
            </form>

            <p class="text-center text-sm text-gray-500 mt-6">
                Ainda não tem uma conta?

                <a href="#" class="font-semibold underline text-emerald-600 hover:text-emerald-700 transition">
                    Cadastre-se
                </a>
            </p>
        </div>
    </div>
@endsection
