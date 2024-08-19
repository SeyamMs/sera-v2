<!DOCTYPE html>
<html
    lang="{{ $page->language ?? 'ar' }}"
    dir="{{ $page->direction ?? 'rtl' }}"
>

<head>
    <meta charset="UTF-8" />
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    />
    <link
        href="{{ $page->getUrl() }}"
        rel="canonical"
    />
    <meta
        name="description"
        content="{{ $page->description }}"
    >
    <title>{{ $page->title }}</title>

    <!-- favicon -->
    <link
        href="{{ $page->asset('favicon/apple-touch-icon.png') }}"
        rel="apple-touch-icon"
        sizes="180x180"
    />
    <link
        type="image/png"
        href="{{ $page->asset('favicon/favicon-32x32.png') }}"
        rel="icon"
        sizes="32x32"
    />
    <link
        type="image/png"
        href="{{ $page->asset('favicon/favicon-16x16.png') }}"
        rel="icon"
        sizes="16x16"
    />
    <link
        href="{{ $page->asset('favicon/site.webmanifest') }}"
        rel="manifest"
        crossorigin
    />

    <!-- style -->
    <link
        href="{{ $page->baseUrl }}{{ mix('css/main.css', 'assets/build') }}"
        rel="stylesheet"
    />

    <link
        href="https://fonts.googleapis.com"
        rel="preconnect"
    />
    <link
        href="https://fonts.gstatic.com"
        rel="preconnect"
        crossorigin
    />
    <link
        href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans+Arabic:wght@100;200;300;400;500;600;700&display=swap"
        rel="stylesheet"
    />

    <!-- script -->
    <script
        defer
        src="{{ $page->baseUrl }}{{ mix('js/main.js', 'assets/build') }}"
    ></script>
    <script
        defer
        src="https://embed.typeform.com/next/embed.js"
    ></script>
</head>

<body
    class="font-serif"
    x-data="{
        loaded: false,
        to: new URLSearchParams(location.search).get('to')
    }"
    x-init="setTimeout(function() {
        loaded = true
        if (to) {
            setTimeout(function() {
                $scroll('#' + to, { behavior: 'smooth', offset: -1 })
                setTimeout(function() {
                    history.pushState({}, null, window.location.href.split('?')[0]);
                }, 300)
            }, 500)
        }
    }, 300)"
    :class="{ 'overflow-hidden': !loaded }"
>
    <div
        class="bg-primary-950 fixed inset-0 z-50 flex items-center justify-center"
        :class="{ 'hidden': loaded }"
    >
        <svg
            class="size-32 fill-slate-700 motion-safe:animate-spin dark:fill-slate-300"
            aria-hidden="true"
            xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 24 24"
        >
            <path
                d="M12,1A11,11,0,1,0,23,12,11,11,0,0,0,12,1Zm0,19a8,8,0,1,1,8-8A8,8,0,0,1,12,20Z"
                opacity=".25"
            />
            <path
                d="M10.14,1.16a11,11,0,0,0-9,8.92A1.59,1.59,0,0,0,2.46,12,1.52,1.52,0,0,0,4.11,10.7a8,8,0,0,1,6.66-6.61A1.42,1.42,0,0,0,12,2.69h0A1.57,1.57,0,0,0,10.14,1.16Z"
            />
        </svg>
    </div>

    <div
        x-cloak
        x-show="loaded"
    >
        @yield('body')

        @include('_partials.footer')
    </div>
</body>

</html>
