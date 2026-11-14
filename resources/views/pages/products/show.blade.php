@extends('layouts.app')
@section('title', $product->name . ' | PT. Solusi Net Nusantara')
@section('content')
    <article class="container-page max-w-4xl py-16">
        <a href="{{ route('products.index') }}" class="title-4 text-brand-neutral">← Kembali ke daftar layanan</a>

        @if($product->image_url)
            <img class="w-full aspect-video object-cover mt-6 rounded-xl border border-brand-line"
                src="{{ asset('storage/' . $product->image_url) }}" alt="{{ $product->name }}">
        @endif

        <h1 class="heading-2 mt-7">{{ $product->name }}</h1>
        <p class="title-2 font-mono text-brand-accent mt-3">{{ $product->price }}</p>
        <p class="body-3 mt-6">{{ $product->description }}</p>

        <a href="{{ route('contact', ['product' => $product->slug]) }}" class="btn-accent mt-10 inline-block">
            Pesan Layanan Ini
        </a>
    </article>
@endsection
