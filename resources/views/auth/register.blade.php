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
                              d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z"/>
                    </svg>
                </div>

                <h2 class="text-2xl font-bold text-gray-800">Crie sua conta</h2>
                <p class="text-sm text-gray-500 mt-1">Preencha os dados abaixo para se cadastrar</p>
            </div>

            <form action="{{ route('register.create.user') }}" method="POST" class="space-y-5">
                <div>
                    <label for="username" class="block text-sm font-medium text-gray-700 mb-1.5">
                        Nome de usuário
                    </label>

                    <input
                        type="text"
                        id="username"
                        name="username"
                        autofocus
                        value="{{ old('username') }}"
                        placeholder="Seu nome aqui"
                        class="w-full px-4 py-2.5 rounded-xl border border-gray-200 text-gray-800 focus:outline-none focus:ring-2 focus:ring-emerald-500/20 transition duration-200"
                    >

                    @error('username')
                    <p class="text-xs text-red-500 mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700 mb-1.5">
                        E-mail
                    </label>

                    <input
                        type="email"
                        id="email"
                        name="email"
                        autofocus
                        value="{{ old('email') }}"
                        placeholder="seu@email.com"
                        class="w-full px-4 py-2.5 rounded-xl border border-gray-200 text-gray-800 focus:outline-none focus:ring-2 focus:ring-emerald-500/20 transition duration-200"
                    >

                    @error('email')
                    <p class="text-xs text-red-500 mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="password" class="block text-sm font-medium text-gray-700 mb-1.5">
                        Senha
                    </label>

                    <input
                        type="password"
                        id="password"
                        name="password"
                        value="{{ old('password') }}"
                        placeholder="••••••••"
                        class="w-full px-4 py-2.5 rounded-xl border placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-emerald-500/20 focus:border-emerald-500 transition duration-200"
                    >

                    @error('password')
                    <p class="text-xs text-red-500 mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="confirm_password" class="block text-sm font-medium text-gray-700 mb-1.5">
                        Confirmar senha
                    </label>

                    <input
                        type="password"
                        id="confirm_password"
                        name="confirm_password"
                        placeholder="••••••••"
                        value="{{ old('confirm_password') }}"
                        class="w-full px-4 py-2.5 rounded-xl border border-gray-200 placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-emerald-500/20 transition duration-200"
                    >

                    @error('confirm_password')
                    <p class="text-xs text-red-500 mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <button
                    type="submit"
                    class="w-full py-3 px-4 hover:bg-emerald-700 bg-emerald-800 text-white font-semibold rounded-xl shadow-md shadow-emerald-600/20 hover:shadow-lg hover:shadow-emerald-600/30 transition duration-200 cursor-pointer"
                >
                    Cadastrar
                </button>
            </form>

            <p class="text-center text-sm text-gray-500 mt-6">
                Já tem uma conta?

                <a href="#" class="font-semibold underline text-emerald-600 hover:text-emerald-700 transition">
                    Entrar
                </a>
            </p>
        </div>
    </div>
@endsection
