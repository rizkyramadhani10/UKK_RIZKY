@extends('layouts.app')
@section('title', 'Galeri Pekerjaan | PT. Solusi Net Nusantara')
@section('content')
    <section class="container-page py-16">
        <h1 class="heading-2 mt-2">Foto Pekerjaan Kami</h1>

        <div class="grid grid-cols-3 gap-6 mt-10">
            @forelse($galleries as $item)
                <article class="surface-card overflow-hidden">
                    @if($item->image_path)
                        <img class="w-full aspect-[4/3] object-cover"
                            src="{{ asset('storage/' . $item->image_path) }}" alt="{{ $item->title }}">
                    @else
                        <div class="aspect-[4/3] bg-brand-subtle grid place-items-center body-6">Foto belum tersedia</div>
                    @endif
                    <div class="p-5">
                        <h2 class="title-3">{{ $item->title }}</h2>
                        <p class="body-6 mt-2">{{ $item->caption }}</p>
                    </div>
                </article>
            @empty
                <p class="body-6">Foto pekerjaan sedang kami siapkan.</p>
            @endforelse
        </div>
    </section>
@endsection
