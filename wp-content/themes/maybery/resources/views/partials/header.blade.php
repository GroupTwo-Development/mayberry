<header class="banner">
  <nav class="main-navigation mega-menu navbar navbar-expand-lg fixed-top">
    <div class="container">
      <div class="navbar-brand">
        <a class="brand" href="{{ home_url('/') }}">
          {{ $siteName }}
        </a>
      </div>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      @if (has_nav_menu('primary_navigation'))
        {!! wp_nav_menu($primaryNavigation) !!}
      @endif

    </div>
  </nav>

</header>
