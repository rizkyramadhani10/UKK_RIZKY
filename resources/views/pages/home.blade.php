@extends('layouts.app')
@section('title', 'Jasa Jaringan & Pengkabelan Kantor | PT. Solusi Net Nusantara')
@section('content')

  <section class="border-b border-brand-line bg-brand-canvas py-14">
    <div class="container-page grid grid-cols-12 items-center gap-12">
      <div class="col-span-7">
        <h1 class="max-w-[620px] heading-2">
          Jaringan kantor yang rapi, cepat, dan tidak mudah bermasalah
        </h1>

        <p class="mt-4 max-w-[540px] body-3">
          Kami memasang kabel jaringan, menyambung internet antar lantai atau antar gedung, dan merapikan ruang server
          di kantor Anda. Setiap pemasangan kami uji, jadi dipastikan kencang dan stabil sebelum kami serahkan.
        </p>

        <div class="mt-6 flex flex-wrap items-center gap-3">
          <a href="{{ route('contact') }}" class="btn-accent">Pesan Layanan</a>
          <a href="{{ route('products.index') }}" class="btn-outline">Lihat Layanan</a>
        </div>
      </div>

      <div class="col-span-5">
        <div class="aspect-[4/3] overflow-hidden rounded-xl border border-brand-line bg-brand-canvas">
          <img src="{{ asset('storage/products/4iEo8f9RE0VWir9yxgUIzEQugQrCS5DKEf9oNveH.png') }}"
            alt="Rak server dengan kabel rapi berlabel" class="h-full w-full object-cover">
        </div>
      </div>
    </div>
  </section>

  <section class="py-20 border-b border-brand-line">
    <div class="container-page">
      <div class="flex flex-row items-end justify-between gap-4 mb-12">
        <div>
          <h2 class="heading-3 mt-2">Layanan Kami</h2>
        </div>
        <a href="{{ route('products.index') }}" class="title-4 text-brand-neutral hover:text-brand-accent">
          Lihat semua layanan <span aria-hidden="true">→</span>
        </a>
      </div>

      <div class="grid grid-cols-4 gap-6">
        @forelse($featuredProducts as $item)
          <article class="surface-card flex flex-col justify-between overflow-hidden group">
            <div>
              @if($item->image_url)
                <div class="overflow-hidden aspect-[4/3] bg-brand-subtle border-b border-brand-line">
                  <img src="{{ asset('storage/' . $item->image_url) }}" alt="{{ $item->name }}"
                    class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                </div>
              @endif
              <div class="p-6">
                <h3 class="title-2 group-hover:text-brand-accent">
                  <a href="{{ route('products.show', $item->slug) }}">{{ $item->name }}</a>
                </h3>
                <p class="body-6 mt-3">{{ $item->description }}</p>
              </div>
            </div>

            <div class="p-6 pt-0">
              <div class="pt-4 border-t border-brand-line flex items-baseline justify-between">
                <span class="caption-3 text-brand-muted">Harga</span>
                <span class="title-3 font-mono">{{ $item->price }}</span>
              </div>
              <a href="{{ route('products.show', $item->slug) }}" class="mt-4 w-full btn-outline">
                Lihat Detail
              </a>
            </div>
          </article>
        @empty
          <div class="col-span-4 p-8 surface-card text-center body-6">
            Daftar layanan sedang diperbarui.
          </div>
        @endforelse
      </div>
    </div>
  </section>

  <section class="py-20 border-b border-brand-line bg-brand-surface">
    <div class="container-page">
      <div class="flex flex-row items-end justify-between gap-4 mb-12">
        <div>
          
          <h2 class="heading-3 mt-2">Hasil Kerja</h2>
        </div>
        <a href="{{ route('gallery') }}" class="title-4 text-brand-neutral hover:text-brand-accent">
          Lihat semua foto <span aria-hidden="true">→</span>
        </a>
      </div>

      <div class="grid grid-cols-4 gap-6">
        @forelse($previewGalleries as $gallery)
          <div class="surface-card overflow-hidden group">
            @if($gallery->image_path)
              <div class="aspect-square bg-brand-subtle overflow-hidden">
                <img src="{{ asset('storage/' . $gallery->image_path) }}" alt="{{ $gallery->title }}"
                  class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
              </div>
            @endif
            <div class="p-5">
              <h3 class="title-3">{{ $gallery->title }}</h3>
            </div>
          </div>
        @empty
          <div class="col-span-4 p-8 surface-card text-center body-6">
            Foto pekerjaan sedang kami siapkan.
          </div>
        @endforelse
      </div>
    </div>
  </section>

@endsection
