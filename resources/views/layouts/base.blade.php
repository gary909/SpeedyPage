<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title ?? 'SpeedyPage' }}</title>
    <meta name="description" content="Fast server-rendered affiliate deals practice site.">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="/assets/css/site.css">
    <script src="/assets/js/site.js" defer></script>
  </head>
  <body>
    <header class="site-header py-3 mb-4">
      <div class="container d-flex justify-content-between align-items-center">
        <a class="brand-link" href="/">SpeedyPage</a>
        <nav class="d-flex gap-3">
          <a href="/" class="nav-link">Home</a>
          <a href="/category/electronics" class="nav-link">Electronics</a>
          <a href="/category/home-kitchen" class="nav-link">Home & Kitchen</a>
          <a href="/category/gaming" class="nav-link">Gaming</a>
        </nav>
      </div>
    </header>

    <main class="pb-5">
      @yield('content')
    </main>

    <footer class="site-footer py-4 mt-4">
      <div class="container d-flex flex-column flex-md-row justify-content-between gap-2">
        <small>Practice project for server-rendered affiliate frontend development.</small>
        <small>Affiliate links may earn commissions.</small>
      </div>
    </footer>
  </body>
</html>
