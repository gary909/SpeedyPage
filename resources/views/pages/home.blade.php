@extends('layouts.base')

@section('content')
<section class="container mb-5">
  <div class="hero-panel p-4 p-md-5 rounded-4">
    <p class="eyebrow mb-2">Practice Build</p>
    <h1 class="display-6 mb-3">Fast affiliate deals frontend with reusable templates</h1>
    <p class="lead mb-4">This fake project mirrors the real freelance workflow: card-heavy templates, category landing pages, and lightweight server-rendered pages.</p>
    <div class="d-flex flex-wrap gap-2">
      @foreach ($categories as $category)
        <a class="btn btn-outline-dark" href="/category/{{ $category['slug'] }}">{{ $category['name'] }}</a>
      @endforeach
    </div>
  </div>
</section>

<section class="container">
  <div class="d-flex justify-content-between align-items-center mb-3">
    <h2 class="h3 mb-0">Top Offers</h2>
    <small class="text-body-secondary">Server-rendered, cache-ready</small>
  </div>
  <div class="row g-4">
    @foreach ($deals as $deal)
      <div class="col-12 col-md-6 col-xl-4">
        @include('components.offer-card', ['deal' => $deal])
      </div>
    @endforeach
  </div>
</section>
@endsection
