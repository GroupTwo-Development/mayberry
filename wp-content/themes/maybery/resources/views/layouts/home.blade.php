 <a class="screen-reader-text" href="#main">
    {{ __('Skip to content') }}
  </a>

  @include('partials.header')
    <main id="main" class="main">
      <div class="container">
        @yield('content')
      </div>

    </main>

  @include('partials.footer')

