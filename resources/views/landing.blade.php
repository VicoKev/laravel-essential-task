<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('landing/assets/css/main.css') }}" />

    <!-- Styles / Scripts -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @endif
</head>

<body>
    <!-- Header -->
    @include('partials.landing.header')
    <!-- Nav -->
    @include('partials.landing.nav')
    <!-- Banner -->
    <section class="banner full">
        <article>
            <img src="{{ asset('landing/images/slide01.jpg') }}" alt="" width="1440" height="961" />
            <div class="inner">
                <header>
                    <p>
                        Une application web intuitive pour gérer efficacement vos tâches au quotidien.
                    </p>
                    <h2>Task Manager</h2>
                </header>
            </div>
        </article>
        <article>
            <img src="{{ asset('landing/images/slide02.jpg') }}" alt="" width="1440" height="961" />
            <div class="inner">
                <header>
                    <p>Organisez, planifiez et priorisez toutes vos tâches en quelques clics.</p>
                    <h2>Productivité</h2>
                </header>
            </div>
        </article>
        <article>
            <img src="{{ asset('landing/images/slide03.jpg') }}" alt="" width="1440" height="962" />
            <div class="inner">
                <header>
                    <p>Suivez la progression de vos projets avec clarté et précision.</p>
                    <h2>Suivi</h2>
                </header>
            </div>
        </article>
        <article>
            <img src="{{ asset('landing/images/slide04.jpg') }}" alt="" width="1440" height="961" />
            <div class="inner">
                <header>
                    <p>Collaborez facilement avec votre équipe, où que vous soyez.</p>
                    <h2>Collaboration</h2>
                </header>
            </div>
        </article>
        <article>
            <img src="{{ asset('landing/images/slide05.jpg') }}" alt="" width="1440" height="962" />
            <div class="inner">
                <header>
                    <p>Analysez vos performances et optimisez votre gestion du temps.</p>
                    <h2>Performance</h2>
                </header>
            </div>
        </article>
    </section>
    <!-- Footer -->
    @include('partials.landing.footer')

    <!-- Scripts -->
    <script src="{{ asset('landing/assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('landing/assets/js/jquery.scrollex.min.js') }}"></script>
    <script src="{{ asset('landing/assets/js/skel.min.js') }}"></script>
    <script src="{{ asset('landing/assets/js/util.js') }}"></script>
    <script src="{{ asset('landing/assets/js/main.js') }}"></script>
</body>

</html>
