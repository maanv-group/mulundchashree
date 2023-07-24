<!DOCTYPE html>
<html lang="en">

<head>
    @includeIf('components.head')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"
        integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    @yield('custom-css')
    <title>@yield('page-title')</title>
</head>

<body>
    <header>
        <header>
            <nav class="navbar navbar-expand-lg bg-theme-primary">
                <div class="container">
                    <a class="navbar-brand" href="{{ url('/') }}">
                        <img class="brand-logo" src="<?= url('public/assets/logo.png') ?>" alt="">
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link {{ request()->is('/') ? 'active' : '' }}"
                                    {{ request()->is('/') ? 'aria-current="page"' : '' }}" aria-current="page"
                                    href="{{ url('/') }}">मुख्यपृष्ठ</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{ request()->is('/') ? 'active' : '' }}"
                                    {{ request()->is('/') ? 'aria-current="page"' : '' }}"
                                    href="{{ url('#about') }}">मंडळाची माहिती</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{ request()->is('/') ? 'active' : '' }}"
                                    {{ request()->is('/') ? 'aria-current="page"' : '' }}"
                                    href="{{ url('#history') }}">इतिहास मंडळाचा</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{ request()->is('/') ? 'active' : '' }}"
                                    {{ request()->is('/') ? 'aria-current="page"' : '' }}"
                                    href="{{ url('#gallery') }}">छायाचित्र</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{ request()->is('/') ? 'active' : '' }}"
                                    {{ request()->is('/') ? 'aria-current="page"' : '' }}"
                                    href="{{ url('#contact') }}">संपर्क</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{ request()->is('/') ? 'active' : '' }}"
                                    {{ request()->is('/') ? 'aria-current="page"' : '' }}"
                                    href="{{ url('#donate') }}">देणगी</a>
                            </li>


                            <!-- <li class="nav-item">
                      <a class="nav-link {{ request()->is('/') ? 'active' : '' }}"
                                {{ request()->is('/') ? 'aria-current="page"' : '' }}" href="#">Pricing</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link {{ request()->is('/') ? 'active' : '' }}"
                                {{ request()->is('/') ? 'aria-current="page"' : '' }} disabled">Disabled</a>
                    </li> -->
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
        <main>
            @yield('page-content')
        </main>
        @includeIf('components.footer')
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
        </script>
        @yield('custom-js')
</body>

</html>
