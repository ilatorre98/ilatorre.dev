<section id="education" class="bg-charcoal-900 py-24">
    <div class="mx-auto max-w-5xl px-5 lg:px-8">
        <div class="mb-16 text-center" data-aos="fade-up">
            <span class="text-xs font-semibold uppercase tracking-widest text-olive-400">{{ __('cv.nav.education') }}</span>
            <h2 class="mt-2 text-3xl font-bold text-charcoal-50 sm:text-4xl">{{ __('cv.education.title') }}</h2>
            <p class="mx-auto mt-4 max-w-2xl text-charcoal-400">{{ __('cv.education.subtitle') }}</p>
        </div>

        <div class="grid gap-6 md:grid-cols-2">
            @foreach (__('cv.education.items') as $index => $item)
                <div
                    class="flex items-start gap-4 rounded-2xl border border-charcoal-700 bg-charcoal-800/50 p-6 transition hover:border-olive-600/60"
                    data-aos="fade-up"
                    data-aos-delay="{{ $index * 100 }}"
                >
                    <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-full bg-olive-500/10 text-olive-400">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" class="h-5 w-5">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4.26 10.147a60.438 60.438 0 00-.491 6.347A48.62 48.62 0 0112 20.904a48.62 48.62 0 018.232-4.41 60.46 60.46 0 00-.491-6.347m-15.482 0a50.636 50.636 0 00-2.658-.813A59.906 59.906 0 0112 3.493a59.903 59.903 0 0110.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.717 50.717 0 0112 13.489a50.702 50.702 0 017.74-3.342M6.75 15a.75.75 0 100-1.5.75.75 0 000 1.5zm0 0v-3.675A55.378 55.378 0 0112 8.443" />
                        </svg>
                    </div>
                    <div>
                        <p class="text-sm font-semibold text-olive-300">{{ $item['period'] }}</p>
                        <h3 class="mt-1 text-base font-bold text-charcoal-50">{{ $item['degree'] }}</h3>
                        <p class="mt-1 text-sm text-charcoal-400">{{ $item['institution'] }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
