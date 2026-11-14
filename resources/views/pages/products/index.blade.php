@extends('layouts.app')
@section('title', 'Layanan Kami | PT. Solusi Net Nusantara')
@section('content')
    <section class="container-page py-16">
        <h1 class="heading-2 mt-2">Layanan Kami</h1>

        <div class="grid grid-cols-3 gap-6 mt-10">
            @forelse($products as $item)
                <article class="surface-card overflow-hidden">
                    @if($item->image_url)
                        <img class="w-full aspect-[4/3] object-cover"
                            src="{{ asset('storage/' . $item->image_url) }}" alt="{{ $item->name }}">
                    @endif
                    <div class="p-6">
                        <h2 class="title-2 mt-2">{{ $item->name }}</h2>
                        <p class="body-6 mt-3">{{ $item->description }}</p>
                        <p class="title-3 font-mono mt-4">{{ $item->price }}</p>
                        <a class="inline-block mt-5 title-4 text-brand-accent"
                            href="{{ route('products.show', $item->slug) }}">Lihat detail →</a>
                    </div>
                </article>
            @empty
                <p class="body-6">Belum ada layanan yang ditampilkan.</p>
            @endforelse
        </div>

        <div class="mt-10">{{ $products->links() }}</div>
    </section>
@endsection
