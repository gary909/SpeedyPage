<article class="offer-card h-100 d-flex flex-column">
  <div class="d-flex justify-content-between align-items-center mb-2">
    <span class="badge text-bg-warning">{{ $deal['badge'] }}</span>
    <small class="text-body-secondary">Updated {{ $deal['updated_at'] }}</small>
  </div>
  <h3 class="h5 mb-2">{{ $deal['title'] }}</h3>
  <p class="mb-2 text-body-secondary">{{ $deal['description'] }}</p>
  <div class="d-flex justify-content-between align-items-end mt-auto">
    <div>
      <small class="d-block text-uppercase text-body-secondary">Merchant</small>
      <strong>{{ $deal['merchant'] }}</strong>
    </div>
    <div class="text-end">
      <small class="d-block text-uppercase text-body-secondary">From</small>
      <strong class="offer-price">EUR {{ $deal['price'] }}</strong>
    </div>
  </div>
  <a class="btn btn-primary w-100 mt-3" href="/deal/{{ $deal['slug'] }}">{{ $deal['cta_label'] }}</a>
</article>
