<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet"/>

    <!-- Styles -->
    <style>
        /* ! tailwindcss v3.2.4 | MIT License | https://tailwindcss.com */
        *, ::after, ::before {
            box-sizing: border-box;
            border-width: 0;
            border-style: solid;
            border-color: #e5e7eb
        }

        ::after, ::before {
            --tw-content: ''
        }

        html {
            line-height: 1.5;
            -webkit-text-size-adjust: 100%;
            -moz-tab-size: 4;
            tab-size: 4;
            font-family: Figtree, sans-serif;
            font-feature-settings: normal
        }

        body {
            margin: 0;
            line-height: inherit
        }

        hr {
            height: 0;
            color: inherit;
            border-top-width: 1px
        }

        abbr:where([title]) {
            -webkit-text-decoration: underline dotted;
            text-decoration: underline dotted
        }

        h1, h2, h3, h4, h5, h6 {
            font-size: inherit;
            font-weight: inherit
        }

        a {
            color: inherit;
            text-decoration: inherit
        }

        b, strong {
            font-weight: bolder
        }

        code, kbd, pre, samp {
            font-family: ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
            font-size: 1em
        }

        small {
            font-size: 80%
        }

        sub, sup {
            font-size: 75%;
            line-height: 0;
            position: relative;
            vertical-align: baseline
        }

        sub {
            bottom: -.25em
        }

        sup {
            top: -.5em
        }

        table {
            text-indent: 0;
            border-color: inherit;
            border-collapse: collapse
        }

        button, input, optgroup, select, textarea {
            font-family: inherit;
            font-size: 100%;
            font-weight: inherit;
            line-height: inherit;
            color: inherit;
            margin: 0;
            padding: 0
        }

        button, select {
            text-transform: none
        }

        [type=button], [type=reset], [type=submit], button {
            -webkit-appearance: button;
            background-color: transparent;
            background-image: none
        }

        :-moz-focusring {
            outline: auto
        }

        :-moz-ui-invalid {
            box-shadow: none
        }

        progress {
            vertical-align: baseline
        }

        ::-webkit-inner-spin-button, ::-webkit-outer-spin-button {
            height: auto
        }

        [type=search] {
            -webkit-appearance: textfield;
            outline-offset: -2px
        }

        ::-webkit-search-decoration {
            -webkit-appearance: none
        }

        ::-webkit-file-upload-button {
            -webkit-appearance: button;
            font: inherit
        }

        summary {
            display: list-item
        }

        blockquote, dd, dl, figure, h1, h2, h3, h4, h5, h6, hr, p, pre {
            margin: 0
        }

        fieldset {
            margin: 0;
            padding: 0
        }

        legend {
            padding: 0
        }

        menu, ol, ul {
            list-style: none;
            margin: 0;
            padding: 0
        }

        textarea {
            resize: vertical
        }

        input::placeholder, textarea::placeholder {
            opacity: 1;
            color: #9ca3af
        }

        [role=button], button {
            cursor: pointer
        }

        :disabled {
            cursor: default
        }

        audio, canvas, embed, iframe, img, object, svg, video {
            display: block;
            vertical-align: middle
        }

        img, video {
            max-width: 100%;
            height: auto
        }

        [hidden] {
            display: none
        }

        *, ::before, ::after {
            --tw-border-spacing-x: 0;
            --tw-border-spacing-y: 0;
            --tw-translate-x: 0;
            --tw-translate-y: 0;
            --tw-rotate: 0;
            --tw-skew-x: 0;
            --tw-skew-y: 0;
            --tw-scale-x: 1;
            --tw-scale-y: 1;
            --tw-pan-x: ;
            --tw-pan-y: ;
            --tw-pinch-zoom: ;
            --tw-scroll-snap-strictness: proximity;
            --tw-ordinal: ;
            --tw-slashed-zero: ;
            --tw-numeric-figure: ;
            --tw-numeric-spacing: ;
            --tw-numeric-fraction: ;
            --tw-ring-inset: ;
            --tw-ring-offset-width: 0px;
            --tw-ring-offset-color: #fff;
            --tw-ring-color: rgb(59 130 246 / 0.5);
            --tw-ring-offset-shadow: 0 0 #0000;
            --tw-ring-shadow: 0 0 #0000;
            --tw-shadow: 0 0 #0000;
            --tw-shadow-colored: 0 0 #0000;
            --tw-blur: ;
            --tw-brightness: ;
            --tw-contrast: ;
            --tw-grayscale: ;
            --tw-hue-rotate: ;
            --tw-invert: ;
            --tw-saturate: ;
            --tw-sepia: ;
            --tw-drop-shadow: ;
            --tw-backdrop-blur: ;
            --tw-backdrop-brightness: ;
            --tw-backdrop-contrast: ;
            --tw-backdrop-grayscale: ;
            --tw-backdrop-hue-rotate: ;
            --tw-backdrop-invert: ;
            --tw-backdrop-opacity: ;
            --tw-backdrop-saturate: ;
            --tw-backdrop-sepia:
        }

        ::-webkit-backdrop {
            --tw-border-spacing-x: 0;
            --tw-border-spacing-y: 0;
            --tw-translate-x: 0;
            --tw-translate-y: 0;
            --tw-rotate: 0;
            --tw-skew-x: 0;
            --tw-skew-y: 0;
            --tw-scale-x: 1;
            --tw-scale-y: 1;
            --tw-pan-x: ;
            --tw-pan-y: ;
            --tw-pinch-zoom: ;
            --tw-scroll-snap-strictness: proximity;
            --tw-ordinal: ;
            --tw-slashed-zero: ;
            --tw-numeric-figure: ;
            --tw-numeric-spacing: ;
            --tw-numeric-fraction: ;
            --tw-ring-inset: ;
            --tw-ring-offset-width: 0px;
            --tw-ring-offset-color: #fff;
            --tw-ring-color: rgb(59 130 246 / 0.5);
            --tw-ring-offset-shadow: 0 0 #0000;
            --tw-ring-shadow: 0 0 #0000;
            --tw-shadow: 0 0 #0000;
            --tw-shadow-colored: 0 0 #0000;
            --tw-blur: ;
            --tw-brightness: ;
            --tw-contrast: ;
            --tw-grayscale: ;
            --tw-hue-rotate: ;
            --tw-invert: ;
            --tw-saturate: ;
            --tw-sepia: ;
            --tw-drop-shadow: ;
            --tw-backdrop-blur: ;
            --tw-backdrop-brightness: ;
            --tw-backdrop-contrast: ;
            --tw-backdrop-grayscale: ;
            --tw-backdrop-hue-rotate: ;
            --tw-backdrop-invert: ;
            --tw-backdrop-opacity: ;
            --tw-backdrop-saturate: ;
            --tw-backdrop-sepia:
        }

        ::backdrop {
            --tw-border-spacing-x: 0;
            --tw-border-spacing-y: 0;
            --tw-translate-x: 0;
            --tw-translate-y: 0;
            --tw-rotate: 0;
            --tw-skew-x: 0;
            --tw-skew-y: 0;
            --tw-scale-x: 1;
            --tw-scale-y: 1;
            --tw-pan-x: ;
            --tw-pan-y: ;
            --tw-pinch-zoom: ;
            --tw-scroll-snap-strictness: proximity;
            --tw-ordinal: ;
            --tw-slashed-zero: ;
            --tw-numeric-figure: ;
            --tw-numeric-spacing: ;
            --tw-numeric-fraction: ;
            --tw-ring-inset: ;
            --tw-ring-offset-width: 0px;
            --tw-ring-offset-color: #fff;
            --tw-ring-color: rgb(59 130 246 / 0.5);
            --tw-ring-offset-shadow: 0 0 #0000;
            --tw-ring-shadow: 0 0 #0000;
            --tw-shadow: 0 0 #0000;
            --tw-shadow-colored: 0 0 #0000;
            --tw-blur: ;
            --tw-brightness: ;
            --tw-contrast: ;
            --tw-grayscale: ;
            --tw-hue-rotate: ;
            --tw-invert: ;
            --tw-saturate: ;
            --tw-sepia: ;
            --tw-drop-shadow: ;
            --tw-backdrop-blur: ;
            --tw-backdrop-brightness: ;
            --tw-backdrop-contrast: ;
            --tw-backdrop-grayscale: ;
            --tw-backdrop-hue-rotate: ;
            --tw-backdrop-invert: ;
            --tw-backdrop-opacity: ;
            --tw-backdrop-saturate: ;
            --tw-backdrop-sepia:
        }

        .relative {
            position: relative
        }

        .mx-auto {
            margin-left: auto;
            margin-right: auto
        }

        .mx-6 {
            margin-left: 1.5rem;
            margin-right: 1.5rem
        }

        .ml-4 {
            margin-left: 1rem
        }

        .mt-16 {
            margin-top: 4rem
        }

        .mt-6 {
            margin-top: 1.5rem
        }

        .mt-4 {
            margin-top: 1rem
        }

        .-mt-px {
            margin-top: -1px
        }

        .mr-1 {
            margin-right: 0.25rem
        }

        .flex {
            display: flex
        }

        .inline-flex {
            display: inline-flex
        }

        .grid {
            display: grid
        }

        .h-16 {
            height: 4rem
        }

        .h-7 {
            height: 1.75rem
        }

        .h-6 {
            height: 1.5rem
        }

        .h-5 {
            height: 1.25rem
        }

        .min-h-screen {
            min-height: 100vh
        }

        .w-auto {
            width: auto
        }

        .w-16 {
            width: 4rem
        }

        .w-7 {
            width: 1.75rem
        }

        .w-6 {
            width: 1.5rem
        }

        .w-5 {
            width: 1.25rem
        }

        .max-w-7xl {
            max-width: 80rem
        }

        .shrink-0 {
            flex-shrink: 0
        }

        .scale-100 {
            --tw-scale-x: 1;
            --tw-scale-y: 1;
            transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))
        }

        .grid-cols-1 {
            grid-template-columns:repeat(1, minmax(0, 1fr))
        }

        .items-center {
            align-items: center
        }

        .justify-center {
            justify-content: center
        }

        .gap-6 {
            gap: 1.5rem
        }

        .gap-4 {
            gap: 1rem
        }

        .self-center {
            align-self: center
        }

        .rounded-lg {
            border-radius: 0.5rem
        }

        .rounded-full {
            border-radius: 9999px
        }

        .bg-gray-100 {
            --tw-bg-opacity: 1;
            background-color: rgb(243 244 246 / var(--tw-bg-opacity))
        }

        .bg-white {
            --tw-bg-opacity: 1;
            background-color: rgb(255 255 255 / var(--tw-bg-opacity))
        }

        .bg-red-50 {
            --tw-bg-opacity: 1;
            background-color: rgb(254 242 242 / var(--tw-bg-opacity))
        }

        .bg-dots-darker {
            background-image: url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(0,0,0,0.07)'/%3E%3C/svg%3E")
        }

        .from-gray-700\/50 {
            --tw-gradient-from: rgb(55 65 81 / 0.5);
            --tw-gradient-to: rgb(55 65 81 / 0);
            --tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to)
        }

        .via-transparent {
            --tw-gradient-to: rgb(0 0 0 / 0);
            --tw-gradient-stops: var(--tw-gradient-from), transparent, var(--tw-gradient-to)
        }

        .bg-center {
            background-position: center
        }

        .stroke-red-500 {
            stroke: #ef4444
        }

        .stroke-gray-400 {
            stroke: #9ca3af
        }

        .p-6 {
            padding: 1.5rem
        }

        .px-6 {
            padding-left: 1.5rem;
            padding-right: 1.5rem
        }

        .text-center {
            text-align: center
        }

        .text-right {
            text-align: right
        }

        .text-xl {
            font-size: 1.25rem;
            line-height: 1.75rem
        }

        .text-sm {
            font-size: 0.875rem;
            line-height: 1.25rem
        }

        .font-semibold {
            font-weight: 600
        }

        .leading-relaxed {
            line-height: 1.625
        }

        .text-gray-600 {
            --tw-text-opacity: 1;
            color: rgb(75 85 99 / var(--tw-text-opacity))
        }

        .text-gray-900 {
            --tw-text-opacity: 1;
            color: rgb(17 24 39 / var(--tw-text-opacity))
        }

        .text-gray-500 {
            --tw-text-opacity: 1;
            color: rgb(107 114 128 / var(--tw-text-opacity))
        }

        .underline {
            -webkit-text-decoration-line: underline;
            text-decoration-line: underline
        }

        .antialiased {
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale
        }

        .shadow-2xl {
            --tw-shadow: 0 25px 50px -12px rgb(0 0 0 / 0.25);
            --tw-shadow-colored: 0 25px 50px -12px var(--tw-shadow-color);
            box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)
        }

        .shadow-gray-500\/20 {
            --tw-shadow-color: rgb(107 114 128 / 0.2);
            --tw-shadow: var(--tw-shadow-colored)
        }

        .transition-all {
            transition-property: all;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
            transition-duration: 150ms
        }

        .selection\:bg-red-500 *::selection {
            --tw-bg-opacity: 1;
            background-color: rgb(239 68 68 / var(--tw-bg-opacity))
        }

        .selection\:text-white *::selection {
            --tw-text-opacity: 1;
            color: rgb(255 255 255 / var(--tw-text-opacity))
        }

        .selection\:bg-red-500::selection {
            --tw-bg-opacity: 1;
            background-color: rgb(239 68 68 / var(--tw-bg-opacity))
        }

        .selection\:text-white::selection {
            --tw-text-opacity: 1;
            color: rgb(255 255 255 / var(--tw-text-opacity))
        }

        .hover\:text-gray-900:hover {
            --tw-text-opacity: 1;
            color: rgb(17 24 39 / var(--tw-text-opacity))
        }

        .hover\:text-gray-700:hover {
            --tw-text-opacity: 1;
            color: rgb(55 65 81 / var(--tw-text-opacity))
        }

        .focus\:rounded-sm:focus {
            border-radius: 0.125rem
        }

        .focus\:outline:focus {
            outline-style: solid
        }

        .focus\:outline-2:focus {
            outline-width: 2px
        }

        .focus\:outline-red-500:focus {
            outline-color: #ef4444
        }

        .group:hover .group-hover\:stroke-gray-600 {
            stroke: #4b5563
        }

        .z-10 {
            z-index: 10
        }

        @media (prefers-reduced-motion: no-preference) {
            .motion-safe\:hover\:scale-\[1\.01\]:hover {
                --tw-scale-x: 1.01;
                --tw-scale-y: 1.01;
                transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))
            }
        }

        @media (prefers-color-scheme: dark) {
            .dark\:bg-gray-900 {
                --tw-bg-opacity: 1;
                background-color: rgb(17 24 39 / var(--tw-bg-opacity))
            }

            .dark\:bg-gray-800\/50 {
                background-color: rgb(31 41 55 / 0.5)
            }

            .dark\:bg-red-800\/20 {
                background-color: rgb(153 27 27 / 0.2)
            }

            .dark\:bg-dots-lighter {
                background-image: url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(255,255,255,0.07)'/%3E%3C/svg%3E")
            }

            .dark\:bg-gradient-to-bl {
                background-image: linear-gradient(to bottom left, var(--tw-gradient-stops))
            }

            .dark\:stroke-gray-600 {
                stroke: #4b5563
            }

            .dark\:text-gray-400 {
                --tw-text-opacity: 1;
                color: rgb(156 163 175 / var(--tw-text-opacity))
            }

            .dark\:text-white {
                --tw-text-opacity: 1;
                color: rgb(255 255 255 / var(--tw-text-opacity))
            }

            .dark\:shadow-none {
                --tw-shadow: 0 0 #0000;
                --tw-shadow-colored: 0 0 #0000;
                box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)
            }

            .dark\:ring-1 {
                --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
                --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);
                box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)
            }

            .dark\:ring-inset {
                --tw-ring-inset: inset
            }

            .dark\:ring-white\/5 {
                --tw-ring-color: rgb(255 255 255 / 0.05)
            }

            .dark\:hover\:text-white:hover {
                --tw-text-opacity: 1;
                color: rgb(255 255 255 / var(--tw-text-opacity))
            }

            .group:hover .dark\:group-hover\:stroke-gray-400 {
                stroke: #9ca3af
            }
        }

        @media (min-width: 640px) {
            .sm\:fixed {
                position: fixed
            }

            .sm\:top-0 {
                top: 0px
            }

            .sm\:right-0 {
                right: 0px
            }

            .sm\:ml-0 {
                margin-left: 0px
            }

            .sm\:flex {
                display: flex
            }

            .sm\:items-center {
                align-items: center
            }

            .sm\:justify-center {
                justify-content: center
            }

            .sm\:justify-between {
                justify-content: space-between
            }

            .sm\:text-left {
                text-align: left
            }

            .sm\:text-right {
                text-align: right
            }
        }

        @media (min-width: 768px) {
            .md\:grid-cols-2 {
                grid-template-columns:repeat(2, minmax(0, 1fr))
            }

            .theBox {
                position: relative;
                right: 150px;
            }
        }

        @media (min-width: 1024px) {
            .lg\:gap-8 {
                gap: 2rem
            }

            .lg\:p-8 {
                padding: 2rem
            }



            /* Glow effect on hover */
            .glow-div:hover {
                box-shadow: 0 0 15px 5px rgba(239, 68, 68, 0.2);
            }

            /* Persistent glow effect after hover */
            .glow-div:hover,
            .glow-div.hovered {
                box-shadow: 0 0 20px 5px rgba(239, 68, 68, 0.2);
            }
        }
    </style>
</head>
<body class="antialiased">
<div
    class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white"
    style="background-color: rgb(40 41 39) ">
    @if (Route::has('login'))
        <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
            @auth
                <a href="{{ url('/home') }}"
                   class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Home</a>
            @else
                <a href="{{ route('login') }}"
                   class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log
                    in</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}"
                       class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                @endif
            @endauth
        </div>
    @endif
    <div id="wrapper" style=" min-height: 70vh;width: 100%; display: flex; flex-direction: column; justify-content: space-around; background-image: url({{asset('images/bg_new.png')}}); background-size: cover; box-shadow: 0 -5px 10px rgba(0, 0, 0, 0.3), /* Cień u góry */
                0 5px 10px rgba(0, 0, 0, 0.3);">
        <div class="max-w-7xl mx-auto p-6 lg:p-8 theBox">
            <div class="flex justify-center">



                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 393.17 271.35" style="width: 120px; opacity: 0.8">
                    <defs>
                        <style>
                            .cls-1 {
                                font-family: MVBoli, 'MV Boli';
                                font-size: 72px;
                            }

                            .cls-1, .cls-2 {
                                fill: #ef4443;
                            }

                            .cls-3 {
                                filter: url(#outer-glow-1);
                            }
                        </style>
                        <filter id="outer-glow-1" filterUnits="userSpaceOnUse">
                            <feOffset dx="0" dy="0"/>
                            <feGaussianBlur result="blur" stdDeviation="4"/>
                            <feFlood flood-color="#ef4f7c" flood-opacity=".75"/>
                            <feComposite in2="blur" operator="in"/>
                            <feComposite in="SourceGraphic"/>
                        </filter>
                    </defs>
                    <g id="Layer_1" class="cls-3">
                        <g>
                            <path class="cls-2" d="M199.57,199.03c-4.72-12.76,1.48-20.97,11.35-28.9-3.64-.97-5.41-1.8-7.19-1.84-5.32-.14-10.65-.13-15.96.14-3.1.16-4.19,1.85-2.2,4.67.67.95,1.22,2.17,2.15,2.73,9.22,5.56,6.79,14.31,6.53,23.2-7.47,0-14.74,0-22.01,0-37.82,0-75.64-.04-113.46.08-3.55.01-5.3-1.12-5.65-4.59-.26-2.65-1.07-5.32-.84-7.91.45-5.01-1.84-6.51-6.38-6.18-13.09.95-26.19,1.79-39.28,2.72-2.63.19-5.74,1.25-6.5-2.53-.75-3.74,2.15-4.41,4.97-4.63,13.09-.99,26.18-1.95,39.27-2.85,2.31-.16,4.64-.02,7.65-.02.19-3.62.37-7.19.6-11.45-5.91-1.22-11.65-2.83-17.49-3.51-8.26-.97-16.59-1.32-24.9-1.8-2.47-.14-4.92-.09-5.05-3.36-.14-3.61,2.44-3.93,5.12-3.72,14.21,1.13,28.41,2.31,43.3,3.53.58-2.72,1.07-6.85,2.34-10.71,4.5-13.58,9.18-27.09,13.99-40.56,1.24-3.48,1.16-6.43-.07-10.02-5.88-17.13-12.19-34.18-16.64-51.7-4.04-15.9,2.71-22.79,18.97-19.85,13.84,2.5,27.58,6.23,40.87,10.84,11.89,4.12,23.1,10.21,34.66,15.32,1.4.62,3.24,1.12,4.64.76,26.99-6.94,54.1-6.34,81.24-1.28,3.14.59,4.66-.15,6.73-2.32,10.9-11.43,21.8-22.88,33.2-33.79,3.61-3.45,8.57-5.78,13.28-7.74,8.9-3.7,16.27-1.7,20.17,7.04,4.98,11.15,9.13,22.87,11.95,34.74,4.12,17.35,6.02,35.11,4.92,53.05-.11,1.73.68,3.56,1.27,5.28,4.86,14.15,9.82,28.27,14.6,42.44.94,2.79,1.26,5.79,1.93,8.99,8.26-1.21,16.25-2.61,24.29-3.47,5.78-.62,11.65-.81,17.45-.54,1.62.07,3.14,2.44,4.7,3.76-1.59,1.09-3.08,2.94-4.78,3.15-11.7,1.48-23.43,2.79-35.18,3.77-5.13.43-6.53,2.77-5.59,7.44.35,1.74.24,3.58.35,5.66,3.37,0,6.34-.18,9.28.03,11.94.87,23.87,1.82,35.8,2.84,2.75.24,5.79.99,5.09,4.64-.7,3.66-3.84,2.79-6.51,2.59-13.09-.95-26.19-1.84-39.28-2.74-3.34-.23-4.9.9-5.35,4.67-1.64,13.86-1.81,13.88-15.61,13.88-40.81.02-81.62.02-122.43.03-1.62,0-3.25,0-4.31,0ZM269.06,60.51c.39.27.78.54,1.16.81,2.78-1.05,5.52-2.27,8.37-3.09,1.31-.37,3.35-.49,4.12.25.71.69.44,2.75.1,4.07-.61,2.35-1.6,4.59-2.05,5.84,9.1,6.92,17.59,13.36,26.21,19.91,2.3-13.2,1.65-26.6-.27-39.89-1.06-7.32-2.75-14.74-5.48-21.58-2.67-6.71-8.84-7.18-14.01-2-1.17,1.17-2.4,2.42-3.1,3.88-5.09,10.56-10.05,21.19-15.04,31.8ZM86.41,86.75c7.15-4.86,14.72-10,22.63-15.38-.34-.79-1.19-2.23-1.59-3.79-.38-1.47-.29-3.07-.4-4.61,1.57.08,3.23-.15,4.68.3,2.35.73,4.56,1.9,6.83,2.88-6.69-9.59-15.36-16.52-25.5-21.39-5.48-2.63-11.39-4.67-17.33-5.99-7.43-1.64-9.74,1.24-7.42,8.37.97,2.98,2.39,5.83,3.71,8.69,4.87,10.52,9.78,21.01,14.4,30.92ZM148.35,154.38c.03-15.4-11.36-27.89-25.4-27.84-15.08.05-27.66,13.29-27.59,29.04.07,15.3,11.33,26.61,26.46,26.58,15.1-.03,26.5-11.97,26.53-27.77ZM299.53,154.74c-.23-15.69-12.84-28.52-27.68-28.17-13.89.33-25.45,12.99-25.23,27.64.25,16.18,11.76,28.09,27,27.93,15.5-.16,26.14-11.42,25.9-27.4Z"/>
                            <path class="cls-2" d="M122.4,175.53c-11.81.06-20.74-8.9-20.84-20.92-.11-13.54,9.98-25.41,21.67-25.5,11.26-.08,19.68,9.72,19.83,23.09.15,13.64-8.37,23.26-20.66,23.33ZM118.48,141.83c.04,5.3,3.76,9.53,8.27,9.39,4.3-.13,7.79-4.3,7.8-9.34.02-5.53-3.35-9.58-7.97-9.59-4.52,0-8.15,4.26-8.1,9.54Z"/>
                            <path class="cls-2" d="M293.41,153.88c.04,11.74-7.25,20.47-17.97,21.51-11.91,1.15-20.97-5.86-22.89-17.98-1.01-6.38-.43-12.65,2.91-18.39,6.8-11.69,21.03-13.4,30.44-3.67,4.56,4.71,7.48,11.93,7.51,18.53ZM276.55,141.57c-.1-5.47-3.67-9.44-8.31-9.26-4.51.18-7.99,4.58-7.8,9.85.17,4.89,3.92,9.03,8.2,9.07,4.51.04,8.01-4.24,7.91-9.66Z"/>
                            <text class="cls-1" transform="translate(42.37 249.91)"><tspan x="0" y="0">NekoBlog</tspan></text>
                        </g>
                    </g>
                </svg>


            </div>

            <div class="mt-6 glow-div">
                <div class=" grid-cols-1 " style="min-width: 400px; ">
                    <a href="{{url('/posts')}}"
                       class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500 "
                       style="background-color: rgb(32 34 36 / 87%); justify-content: space-between">
                        <div style="flex-grow: 2; display: flex; justify-content: center;">

                            <div style="align-self: center;">
                                <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white"
                                    style="font-size:50px; color: #ef4444">ENTER</h2>
                            </div>

                        </div>

                        <svg style="width:auto ; height: 100px; " xmlns="http://www.w3.org/2000/svg" fill="none"
                             viewBox="0 0 24 24" stroke-width="1.9"
                             class="self-center shrink-0 stroke-red-500 w-6 h-6 mx-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>

    </div>
</div>
</body>
</html>
