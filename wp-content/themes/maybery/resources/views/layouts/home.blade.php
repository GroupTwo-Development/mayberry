 <a class="sr-only focus:not-sr-only" href="#main">
    {{ __('Skip to content') }}
  </a>

  @include('partials.header')
    <main id="home-app" class="main">
      <div class="container">
        @yield('content')
      </div>
      
    </main>

  @include('partials.footer')

