@extends('layouts.app')
@section('title', 'Masuk | PT. Solusi Net Nusantara')
@section('content')
    <section class="container-page flex min-h-[calc(100vh-20rem)] max-w-md items-center justify-center py-16">
        <div class="w-full">
            <div class="text-center">
                <a href="{{ route('home') }}" class="inline-block">
                    <img src="{{ asset('images/logo.png') }}" alt="PT. Solusi Net Nusantara" class="mx-auto h-12 w-auto">
                </a>
                <h1 class="heading-3 mt-8">Selamat datang kembali</h1>
                <p class="body-6 mt-2">Masuk ke akun Anda untuk melanjutkan.</p>
            </div>

        <form method="POST" action="{{ route('login.submit') }}" class="surface-card mt-7 space-y-5 p-7">
            @csrf
            <label class="block body-6">Email
                <input class="mt-2 w-full rounded-lg border bg-white px-3 py-2.5 outline-none transition focus:border-brand-accent focus:ring-2 focus:ring-brand-accent/15" type="email" name="email"
                    value="{{ old('email') }}" placeholder="Masukkan email" required autofocus>
                @error('email')<small class="text-red-600">{{ $message }}</small>@enderror
            </label>
            <label class="block body-6">Password
                <input class="mt-2 w-full rounded-lg border bg-white px-3 py-2.5 outline-none transition focus:border-brand-accent focus:ring-2 focus:ring-brand-accent/15" type="password" name="password" placeholder="Masukkan password" required>
                @error('password')<small class="text-red-600">{{ $message }}</small>@enderror
            </label>
            <button class="btn-accent w-full">Masuk</button>
        </form>

        </div>
    </section>
@endsection
