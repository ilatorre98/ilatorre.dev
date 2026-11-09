@php
    $locales = [
        'es' => ['label' => 'Castellano', 'flag' => 'ES'],
        'ca' => ['label' => 'Català', 'flag' => 'CA'],
        'en' => ['label' => 'English', 'flag' => 'EN'],
    ];
    $navLinks = [
        '#hero' => __('cv.nav.home'),
        '#experience' => __('cv.nav.experience'),
        '#skills' => __('cv.nav.skills'),
        '#education' => __('cv.nav.education'),
        '#languages' => __('cv.nav.languages'),
        '#contact' => __('cv.nav.contact'),
        '#stack' => __('cv.nav.stack'),
    ];
@endphp

<header
    x-data="{ open: false, langOpen: false }"
    class="fixed top-0 inset-x-0 z-50 border-b border-olive-200/80 bg-olive-50/80 backdrop-blur-md dark:border-charcoal-800/80 dark:bg-charcoal-900/80"
>
    <nav class="mx-auto flex max-w-6xl items-center justify-between px-5 py-4 lg:px-8">
        <a href="#hero" class="text-lg font-semibold tracking-tight text-olive-600 dark:text-olive-300">
            IL<span class="text-charcoal-700 dark:text-charcoal-200">.</span>
        </a>

        <ul class="hidden items-center gap-8 text-sm font-medium text-charcoal-600 md:flex dark:text-charcoal-300">
            @foreach ($navLinks as $href => $label)
                <li>
                    <a href="{{ $href }}" class="transition hover:text-olive-600 dark:hover:text-olive-300">{{ $label }}</a>
                </li>
            @endforeach
        </ul>

        <div class="flex items-center gap-3">
            {{-- Selector de tema claro/oscuro --}}
            <button
                @click="$store.theme.toggle()"
                type="button"
                class="flex h-9 w-9 shrink-0 items-center justify-center rounded-full border border-olive-300 bg-white/70 text-charcoal-600 transition hover:border-olive-500 hover:text-olive-600 dark:border-charcoal-700 dark:bg-charcoal-800 dark:text-charcoal-100 dark:hover:border-olive-500 dark:hover:text-olive-300"
                aria-label="{{ __('cv.ui.theme_toggle') }}"
            >
                <svg x-show="!$store.theme.isDark()" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" class="h-4 w-4">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M21.752 15.002A9.72 9.72 0 0118 15.75c-5.385 0-9.75-4.365-9.75-9.75 0-1.33.266-2.597.748-3.752A9.753 9.753 0 003 11.25C3 16.635 7.365 21 12.75 21a9.753 9.753 0 009.002-5.998z" />
                </svg>
                <svg x-cloak x-show="$store.theme.isDark()" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" class="h-4 w-4">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 3v2.25m6.364.386-1.591 1.591M21 12h-2.25m-.386 6.364-1.591-1.591M12 18.75V21m-4.773-4.227-1.591 1.591M5.25 12H3m4.227-4.773L5.636 5.636M15.75 12a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0z" />
                </svg>
            </button>
            {{-- Selector de idioma --}}
            <div class="relative" @click.outside="langOpen = false">
                <button
                    @click="langOpen = !langOpen"
                    type="button"
                    class="flex items-center gap-2 rounded-full border border-olive-300 bg-white/70 px-3 py-1.5 text-sm font-medium text-charcoal-600 transition hover:border-olive-500 hover:text-olive-600 dark:border-charcoal-700 dark:bg-charcoal-800 dark:text-charcoal-100 dark:hover:border-olive-500 dark:hover:text-olive-300"
                    aria-haspopup="true"
                    :aria-expanded="langOpen"
                >
                    <span>{{ $locales[app()->getLocale()]['flag'] ?? '🌐' }}</span>
                    <span class="hidden sm:inline">{{ $locales[app()->getLocale()]['label'] ?? strtoupper(app()->getLocale()) }}</span>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="h-4 w-4 transition" :class="langOpen ? 'rotate-180' : ''">
                        <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
                    </svg>
                </button>

                <div
                    x-cloak
                    x-show="langOpen"
                    x-transition:enter="transition ease-out duration-150"
                    x-transition:enter-start="opacity-0 scale-95"
                    x-transition:enter-end="opacity-100 scale-100"
                    x-transition:leave="transition ease-in duration-100"
                    x-transition:leave-start="opacity-100 scale-100"
                    x-transition:leave-end="opacity-0 scale-95"
                    class="absolute right-0 mt-2 w-40 overflow-hidden rounded-xl border border-olive-200 bg-white shadow-xl shadow-black/10 dark:border-charcoal-700 dark:bg-charcoal-800 dark:shadow-black/40"
                >
                    @foreach ($locales as $code => $data)
                        <a
                            href="{{ route('locale.switch', $code) }}"
                            class="flex items-center gap-2 px-4 py-2.5 text-sm transition hover:bg-olive-600/20 {{ app()->getLocale() === $code ? 'text-olive-600 font-semibold dark:text-olive-300' : 'text-charcoal-600 dark:text-charcoal-200' }}"
                        >
                            <span>{{ $data['flag'] }}</span>
                            <span>{{ $data['label'] }}</span>
                        </a>
                    @endforeach
                </div>
            </div>

            {{-- Descargar CV --}}
            <a
                href="{{ route('cv.download') }}"
                class="hidden items-center gap-2 rounded-full bg-olive-500 px-4 py-1.5 text-sm font-semibold text-charcoal-950 transition hover:bg-olive-400 lg:inline-flex"
            >
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" class="h-4 w-4">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 16.5v2.25A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75V16.5M16.5 12L12 16.5m0 0L7.5 12m4.5 4.5V3" />
                </svg>
                {{ __('cv.hero.cta_download_cv') }}
            </a>

            {{-- Repositorio GitHub --}}
            <a
                href="{{ config('services.github.repo_url') }}"
                target="_blank"
                rel="noopener"
                aria-label="GitHub"
                class="hidden items-center justify-center rounded-full border border-olive-300 p-2 text-charcoal-600 transition hover:border-olive-500 hover:text-olive-600 dark:border-charcoal-700 dark:text-charcoal-200 dark:hover:text-olive-300 sm:inline-flex"
            >
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-5 w-5">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M12 .5C5.73.5.75 5.48.75 11.75c0 4.99 3.24 9.22 7.74 10.72.57.1.78-.25.78-.55 0-.27-.01-1.16-.02-2.1-3.15.69-3.81-1.34-3.81-1.34-.52-1.3-1.26-1.65-1.26-1.65-1.03-.7.08-.69.08-.69 1.14.08 1.74 1.17 1.74 1.17 1.01 1.74 2.65 1.24 3.3.94.1-.73.4-1.24.72-1.52-2.51-.29-5.15-1.26-5.15-5.6 0-1.24.44-2.25 1.17-3.04-.12-.29-.51-1.45.11-3.02 0 0 .96-.31 3.14 1.16a10.9 10.9 0 015.72 0c2.18-1.47 3.14-1.16 3.14-1.16.62 1.57.23 2.73.11 3.02.73.79 1.17 1.8 1.17 3.04 0 4.35-2.64 5.3-5.16 5.58.41.35.77 1.04.77 2.1 0 1.52-.01 2.74-.01 3.11 0 .3.2.66.79.55a11.25 11.25 0 007.72-10.71C23.25 5.48 18.27.5 12 .5z" />
                </svg>
            </a>

            {{-- Botón menú móvil --}}
            <button
                @click="open = !open"
                type="button"
                class="inline-flex items-center justify-center rounded-lg p-2 text-charcoal-600 hover:bg-olive-100 dark:text-charcoal-200 dark:hover:bg-charcoal-800 md:hidden"
                aria-label="Menu"
            >
                <svg x-show="!open" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" class="h-6 w-6">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                </svg>
                <svg x-cloak x-show="open" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" class="h-6 w-6">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M6 18 18 6M6 6l12 12" />
                </svg>
            </button>
        </div>
    </nav>

    {{-- Menú móvil --}}
    <div
        x-cloak
        x-show="open"
        x-transition
        @click="open = false"
        class="border-t border-olive-200 bg-olive-50 dark:border-charcoal-800 dark:bg-charcoal-900 md:hidden"
    >
        <ul class="flex flex-col gap-1 px-5 py-4 text-sm font-medium text-charcoal-600 dark:text-charcoal-300">
            @foreach ($navLinks as $href => $label)
                <li>
                    <a href="{{ $href }}" class="block rounded-lg px-3 py-2 transition hover:bg-olive-100 hover:text-olive-600 dark:hover:bg-charcoal-800 dark:hover:text-olive-300">{{ $label }}</a>
                </li>
            @endforeach
        </ul>
    </div>
</header>
