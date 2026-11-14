@extends('layouts.app')
@section('title', 'Tentang Kami | PT. Solusi Net Nusantara')
@section('content')
    <section class="container-page py-16">
        <h1 class="heading-2 mt-2">Siapa Kami</h1>
        @foreach ($deskripsiSingkat as $item)
        <p class="body-3 mt-6 max-w-3xl">{{ $item->deskripsiSingkat }}</p>
        @endforeach

        @foreach ($visi as $item)
        <div class="grid grid-cols-2 gap-6 mt-12">
            <div class="surface-card p-7">
                <h2 class="title-2">Visi Kami</h2>
                <p class="body-6 mt-3">{{ $item->visi }}</p>
            </div>
        @endforeach

        @foreach ($misi as $item)
        <div class="surface-card p-7">
            <h2 class="title-2">Misi Kami </h2>
            <p class="body-6 mt-3">{{ $item->misi }}</p>
        </div>
        @endforeach
        </div>
    </section>
@endsection
