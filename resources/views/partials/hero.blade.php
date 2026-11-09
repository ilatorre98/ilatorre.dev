<section id="hero" class="relative flex min-h-screen items-center overflow-hidden bg-charcoal-900 pt-24">
    {{-- Fondo decorativo --}}
    <div class="pointer-events-none absolute inset-0 overflow-hidden">
        <div class="absolute -left-32 -top-32 h-96 w-96 rounded-full bg-olive-600/20 blur-3xl"></div>
        <div class="absolute -bottom-32 -right-32 h-96 w-96 rounded-full bg-olive-500/10 blur-3xl"></div>
        <div class="absolute inset-0 bg-[radial-gradient(circle_at_1px_1px,var(--color-charcoal-700)_1px,transparent_0)] bg-[size:28px_28px] opacity-20"></div>
    </div>

    <div class="relative mx-auto grid max-w-6xl items-center gap-12 px-5 py-16 md:grid-cols-5 lg:px-8">
        <div class="md:col-span-3" data-aos="fade-up">
            <p class="mb-4 inline-flex items-center gap-2 rounded-full border border-olive-600/40 bg-olive-500/10 px-4 py-1.5 text-xs font-semibold uppercase tracking-widest text-olive-300">
                <span class="h-2 w-2 animate-pulse rounded-full bg-olive-400"></span>
                {{ __('cv.hero.role') }}
            </p>

            <h1 class="text-4xl font-extrabold leading-tight tracking-tight text-charcoal-50 sm:text-5xl lg:text-6xl">
                {{ __('cv.hero.first_name') }}
                <span class="text-olive-400">{{ __('cv.hero.last_name') }}</span>
            </h1>

            <p class="mt-6 max-w-2xl text-base leading-relaxed text-charcoal-300 sm:text-lg">
                {{ __('cv.hero.summary') }}
            </p>

            <div class="mt-10 flex flex-wrap gap-4">
                <a
                    href="#contact"
                    class="inline-flex items-center gap-2 rounded-full bg-olive-500 px-6 py-3 text-sm font-semibold text-charcoal-950 shadow-lg shadow-olive-600/30 transition hover:bg-olive-400"
                >
                    {{ __('cv.hero.cta_contact') }}
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="h-4 w-4"><path fill-rule="evenodd" d="M3 10a.75.75 0 01.75-.75h10.638L10.23 5.29a.75.75 0 111.04-1.08l5.5 5.25a.75.75 0 010 1.08l-5.5 5.25a.75.75 0 11-1.04-1.08l4.158-3.96H3.75A.75.75 0 013 10z" clip-rule="evenodd" /></svg>
                </a>
                <a
                    href="#experience"
                    class="inline-flex items-center gap-2 rounded-full border border-charcoal-700 px-6 py-3 text-sm font-semibold text-charcoal-100 transition hover:border-olive-500 hover:text-olive-300"
                >
                    {{ __('cv.hero.cta_experience') }}
                </a>
                <a
                    href="{{ route('cv.download') }}"
                    class="inline-flex items-center gap-2 rounded-full border border-olive-500/60 bg-transparent px-6 py-3 text-sm font-semibold text-olive-300 transition hover:bg-olive-500/10"
                >
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" class="h-4 w-4">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 16.5v2.25A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75V16.5M16.5 12L12 16.5m0 0L7.5 12m4.5 4.5V3" />
                    </svg>
                    {{ __('cv.hero.cta_download_cv') }}
                </a>
            </div>
        </div>

        <div class="md:col-span-2" data-aos="fade-up" data-aos-delay="150">
            <div class="mx-auto flex w-full max-w-xs flex-col items-center">
                <div class="aspect-square w-full">
                    <img
                        src="{{ asset('images/profile.jpg') }}"
                        alt="{{ __('cv.hero.first_name') }} {{ __('cv.hero.last_name') }}"
                        class="h-full w-full rounded-full border-4 border-charcoal-700 object-cover shadow-2xl shadow-black/40"
                    >
                </div>
                <div class="mt-6 w-11/12 rounded-2xl border border-charcoal-700 bg-charcoal-800 px-5 py-5 text-center shadow-xl">
                    <p class="text-sm font-medium text-charcoal-100">
                        📍 {{ __('cv.hero.short_location') }}
                    </p>

                    <div class="mt-4 flex items-center justify-center gap-3 border-t border-charcoal-700/60 pt-4">
                        <a
                            href="{{ __('cv.contact.linkedin_url') }}"
                            target="_blank"
                            rel="noopener"
                            aria-label="LinkedIn"
                            class="flex h-9 w-9 items-center justify-center rounded-full bg-charcoal-700 text-charcoal-50 transition hover:bg-olive-500 hover:text-charcoal-950"
                        >
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" class="h-4 w-4">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M8.25 15V9m0 6a3 3 0 11-6 0V9m6 6v-3.75A2.25 2.25 0 0110.5 9h0A2.25 2.25 0 0112.75 11.25V15m0 0V9m6.75 6v-5.25a2.25 2.25 0 00-2.25-2.25h0a2.25 2.25 0 00-2.25 2.25V15" />
                            </svg>
                        </a>
                        <a
                            href="{{ config('services.github.repo_url') }}"
                            target="_blank"
                            rel="noopener"
                            aria-label="GitHub"
                            class="flex h-9 w-9 items-center justify-center rounded-full bg-charcoal-700 text-charcoal-50 transition hover:bg-olive-500 hover:text-charcoal-950"
                        >
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-4 w-4">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M12 .5C5.73.5.75 5.48.75 11.75c0 4.99 3.24 9.22 7.74 10.72.57.1.78-.25.78-.55 0-.27-.01-1.16-.02-2.1-3.15.69-3.81-1.34-3.81-1.34-.52-1.3-1.26-1.65-1.26-1.65-1.03-.7.08-.69.08-.69 1.14.08 1.74 1.17 1.74 1.17 1.01 1.74 2.65 1.24 3.3.94.1-.73.4-1.24.72-1.52-2.51-.29-5.15-1.26-5.15-5.6 0-1.24.44-2.25 1.17-3.04-.12-.29-.51-1.45.11-3.02 0 0 .96-.31 3.14 1.16a10.9 10.9 0 015.72 0c2.18-1.47 3.14-1.16 3.14-1.16.62 1.57.23 2.73.11 3.02.73.79 1.17 1.8 1.17 3.04 0 4.35-2.64 5.3-5.16 5.58.41.35.77 1.04.77 2.1 0 1.52-.01 2.74-.01 3.11 0 .3.2.66.79.55a11.25 11.25 0 007.72-10.71C23.25 5.48 18.27.5 12 .5z" />
                            </svg>
                        </a>
                        <a
                            href="mailto:{{ __('cv.contact.email') }}"
                            aria-label="Email"
                            class="flex h-9 w-9 items-center justify-center rounded-full bg-charcoal-700 text-charcoal-50 transition hover:bg-olive-500 hover:text-charcoal-950"
                        >
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" class="h-4 w-4">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <a href="#experience" class="absolute bottom-8 left-1/2 hidden -translate-x-1/2 flex-col items-center gap-2 text-xs font-medium text-charcoal-400 transition hover:text-olive-300 md:flex">
        {{ __('cv.ui.scroll_down') }}
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" class="h-5 w-5 animate-bounce">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
        </svg>
    </a>
</section>
