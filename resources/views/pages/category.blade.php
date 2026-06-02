@extends('layouts.base')

@section('content')
<section class="container mb-4">
  <nav aria-label="breadcrumb" class="mb-3">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="/">Home</a></li>
      <li class="breadcrumb-item active" aria-current="page">{{ $category['name'] }}</li>
    </ol>
  </nav>
  <h1 class="mb-2">{{ $category['name'] }} Deals</h1>
  <p class="text-body-secondary mb-0">Latest selected deals for this category.</p>
</section>

<section class="container">
  <div class="row g-4">
    @forelse ($deals as $deal)
      <div class="col-12 col-md-6 col-xl-4">
        @include('components.offer-card', ['deal' => $deal])
      </div>
    @empty
      <div class="col-12">
        <p>No deals are currently available in this category.</p>
      </div>
    @endforelse
  </div>
</section>
@endsection
