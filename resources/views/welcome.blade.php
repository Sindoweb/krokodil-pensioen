<!DOCTYPE html>
<html lang="nl" class="scroll-smooth">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Krokodil Brugge - Na bijna 36 speelse jaren zijn we met pensioen. Bedankt voor alle mooie herinneringen.">

        <title>Krokodil Brugge - Met pensioen na 36 jaar</title>

        <link rel="icon" href="data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 100 100'><text y='.9em' font-size='90'>🐊</text></svg>">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=nunito:400,600,700,800,900|lora:400,400i,500,600,700" rel="stylesheet" />

        <!-- Styles / Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>

    <body class="bg-cream-100 dark:bg-night-950 text-warm-800 dark:text-cream-200 min-h-screen paper-texture leaf-pattern">

        {{-- ============================================================ --}}
        {{-- FLOATING CROCODILE ACCENT (background decoration)            --}}
        {{-- ============================================================ --}}
        <div class="fixed top-0 right-0 w-[600px] h-[600px] croc-accent -translate-y-1/4 translate-x-1/4 pointer-events-none select-none animate-float" aria-hidden="true">
            <svg viewBox="0 0 200 200" fill="currentColor" class="w-full h-full">
                <path d="M100 20 C130 20, 170 50, 175 80 C180 110, 160 145, 140 155 C125 162, 115 158, 105 160 C95 162, 85 170, 70 165 C55 160, 40 140, 35 120 C30 100, 35 70, 50 50 C65 30, 80 20, 100 20Z" opacity="0.5"/>
                <circle cx="135" cy="65" r="6" opacity="0.3"/>
            </svg>
        </div>

        {{-- Second floating accent, bottom-left --}}
        <div class="fixed bottom-0 left-0 w-[400px] h-[400px] croc-accent translate-y-1/3 -translate-x-1/3 pointer-events-none select-none animate-float delay-300" style="animation-duration: 8s;" aria-hidden="true">
            <svg viewBox="0 0 200 200" fill="currentColor" class="w-full h-full rotate-180">
                <path d="M100 20 C130 20, 170 50, 175 80 C180 110, 160 145, 140 155 C125 162, 115 158, 105 160 C95 162, 85 170, 70 165 C55 160, 40 140, 35 120 C30 100, 35 70, 50 50 C65 30, 80 20, 100 20Z" opacity="0.4"/>
            </svg>
        </div>

        {{-- ============================================================ --}}
        {{-- MAIN CONTENT                                                 --}}
        {{-- ============================================================ --}}
        <main class="relative z-10 flex flex-col items-center px-5 sm:px-8 py-12 sm:py-16 lg:py-24">

            {{-- ---- Header / Brand ---- --}}
            <header class="text-center mb-10 sm:mb-14 animate-fade-up">
                <div class="inline-flex items-center justify-center mb-6">
                    <img
                        src="/images/logo.png"
                        alt="Krokodil Brugge"
                        class="h-16 sm:h-20 lg:h-24 w-auto dark:brightness-90 dark:contrast-110"
                    >
                </div>
                <p class="mt-1 text-sm sm:text-base font-sans font-semibold tracking-[0.25em] uppercase text-krokodil dark:text-krokodil-muted">
                    Brugge &middot; Speelgoedwinkel
                </p>
                <p class="mt-1.5 text-xs sm:text-sm font-sans tracking-widest text-warm-500 dark:text-warm-400">
                    1990 &ndash; 2026
                </p>
            </header>

            {{-- ---- Hero Image ---- --}}
            <div class="w-full max-w-3xl mb-14 sm:mb-18 animate-scale-in delay-200">
                <div class="hero-image-wrapper shadow-2xl ring-1 ring-cream-300/50 dark:ring-night-700/50">
                    <img
                        src="{{ $homepage?->hero_image ? Storage::disk('public')->url($homepage->hero_image) : 'https://www.krokodil.be/storage/89468/1000023472.jpg' }}"
                        alt="Krokodil speelgoedwinkel Brugge - Griet en Geert"
                        class="w-full h-auto object-cover"
                        loading="eager"
                        fetchpriority="high"
                    >
                </div>
                {{-- Image caption --}}
                <p class="text-center mt-4 text-xs sm:text-sm text-warm-400 dark:text-warm-500 font-serif italic animate-fade-in delay-500">
                    Griet &amp; Geert &mdash; Sint-Jakobsstraat 47, Brugge
                </p>
            </div>

            {{-- ---- Retirement Announcement ---- --}}
            <div class="w-full max-w-2xl animate-fade-up delay-400">

                {{-- Title with decorative leaf --}}
                <div class="text-center mb-8 sm:mb-10">
                    <h2 class="font-serif text-2xl sm:text-3xl lg:text-4xl font-bold text-warm-800 dark:text-cream-100 italic">
                        Krokodil is met pensioen
                    </h2>
                    <div class="mt-3 inline-flex items-center gap-2">
                        <span class="block w-8 h-px bg-krokodil/40"></span>
                        <svg class="w-4 h-4 text-krokodil dark:text-krokodil-muted" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                            <path d="M17 8C8 10 5.9 16.17 3.82 21.34l1.89.66.95-2.3c.48.17.98.3 1.34.3C19 20 22 3 22 3c-1 2-8 2.25-13 3.25S2 11.5 2 13.5s1.75 3.75 1.75 3.75C7 8 17 8 17 8z"/>
                        </svg>
                        <span class="block w-8 h-px bg-krokodil/40"></span>
                    </div>
                </div>

                {{-- Letter body --}}
                <div class="letter-body font-serif text-base sm:text-lg leading-relaxed text-warm-700 dark:text-cream-300 space-y-6 animate-fade-up delay-600">

                    @if ($homepage?->body)
                        <div class="prose prose-warm dark:prose-invert max-w-none">
                            {!! $homepage->body !!}
                        </div>
                    @else
                        <p class="text-warm-800 dark:text-cream-200 font-semibold text-lg sm:text-xl">
                            Beste klanten,
                        </p>

                        <p>
                            Op 1 april 1990 openden we de deuren van Krokodil Brugge. Na bijna 36 speelse, kleurrijke en onvergetelijke jaren zijn we met pensioen. Met een warm hart blikken we terug en willen we iedereen bedanken die samen met ons dit spel heeft gespeeld. We speelden met alle leeftijden: van 0 tot 109 jaar. Het vergde moed, inzet, creativiteit, originaliteit, samenwerking, durf, volharding, geduld... Het bezorgde ons veel spelplezier, blije gezichten en leuke ontmoetingen.
                        </p>

                        <p>
                            Wie nog interesse heeft in artikels uit onze etalage, etalagemateriaal, displays of winkelinrichting, kan contact opnemen via telefoon
                            <a href="tel:+32478216024" class="contact-link font-medium text-warm-800 dark:text-cream-200">(0478/21.60.24)</a>
                            of mailen naar
                            <a href="mailto:brugge@krokodil.be" class="contact-link font-medium text-warm-800 dark:text-cream-200">brugge@krokodil.be</a>.
                        </p>

                        <p>
                            Dank om samen dit boeiende spel vele jaren te beleven.<br>
                            We zullen de enthousiaste kinderen en de fijne babbels missen.
                        </p>

                        {{-- Signature --}}
                        <div class="pt-4 sm:pt-6">
                            <p class="italic text-warm-600 dark:text-cream-400">
                                Speelse dankbare groeten
                            </p>
                            <p class="font-bold text-xl sm:text-2xl mt-2 text-warm-800 dark:text-cream-100 font-sans">
                                Griet <span class="text-krokodil dark:text-krokodil-muted">&amp;</span> Geert
                            </p>
                        </div>
                    @endif

                </div>
            </div>

            {{-- ---- Decorative divider ---- --}}
            <div class="w-full max-w-2xl my-12 sm:my-16 animate-fade-in delay-800">
                <div class="divider-ornament" aria-hidden="true">
                    <span class="text-krokodil dark:text-krokodil-muted text-lg">&#10047;</span>
                </div>
            </div>

            {{-- ---- 36 Years Badge ---- --}}
            <div class="animate-fade-up delay-1000 mb-14 sm:mb-18">
                <div class="years-badge inline-flex flex-col items-center justify-center w-40 h-40 sm:w-48 sm:h-48 rounded-full text-white">
                    <span class="font-sans font-black text-5xl sm:text-6xl leading-none drop-shadow-sm">36</span>
                    <span class="font-sans font-bold text-xs sm:text-sm tracking-[0.2em] uppercase mt-1 opacity-90">jaren</span>
                    <span class="font-sans text-[10px] sm:text-xs mt-0.5 opacity-70 tracking-wide">speelplezier</span>
                </div>
            </div>

            {{-- ---- Contact Footer ---- --}}
            <footer class="w-full max-w-2xl text-center animate-fade-up delay-1500">
                <div class="bg-cream-50 dark:bg-night-900 border border-cream-300 dark:border-night-700 rounded-2xl px-6 sm:px-10 py-8 sm:py-10 shadow-sm">

                    <div class="flex items-center justify-center gap-2 mb-5">
                        <svg class="w-5 h-5 text-krokodil dark:text-krokodil-muted" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                        </svg>
                        <span class="font-sans font-semibold text-warm-800 dark:text-cream-200">Krokodil Brugge</span>
                    </div>

                    <address class="not-italic font-serif text-warm-600 dark:text-cream-400 space-y-2 text-sm sm:text-base">
                        <p>Sint-Jakobsstraat 47, 8000 Brugge</p>
                        <p>
                            <a href="mailto:brugge@krokodil.be" class="contact-link text-warm-700 dark:text-cream-300">
                                brugge@krokodil.be
                            </a>
                        </p>
                        <p>
                            <a href="tel:+32478216024" class="contact-link text-warm-700 dark:text-cream-300">
                                0478/21.60.24
                            </a>
                        </p>
                    </address>

                </div>

                {{-- Copyright --}}
                <p class="mt-8 text-xs text-warm-400 dark:text-warm-500 font-sans">
                    &copy; 1990&ndash;2026 Krokodil Brugge. Alle rechten voorbehouden.
                </p>

                {{-- Tiny crocodile farewell --}}
                <p class="mt-4 text-2xl animate-float" aria-hidden="true">
                    🐊
                </p>
            </footer>

        </main>

    </body>
</html>
