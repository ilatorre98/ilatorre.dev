@php
    $levelWidths = [
        'Nativo' => '100%', 'Natiu' => '100%', 'Native' => '100%',
        'B2 → C1' => '75%',
    ];
@endphp

<section id="languages" class="bg-olive-100/50 py-24 dark:bg-charcoal-950">
    <div class="mx-auto max-w-5xl px-5 lg:px-8">
        <div class="mb-16 text-center" data-aos="fade-up">
            <span class="text-xs font-semibold uppercase tracking-widest text-olive-600 dark:text-olive-400">{{ __('cv.nav.languages') }}</span>
            <h2 class="mt-2 text-3xl font-bold text-charcoal-900 sm:text-4xl dark:text-charcoal-50">{{ __('cv.languages.title') }}</h2>
            <p class="mx-auto mt-4 max-w-2xl text-charcoal-600 dark:text-charcoal-400">{{ __('cv.languages.subtitle') }}</p>
        </div>

        <div class="grid gap-10 md:grid-cols-2">
            {{-- Niveles de idioma --}}
            <div class="space-y-6" data-aos="fade-up">
                @foreach (__('cv.languages.items') as $lang)
                    <div>
                        <div class="mb-2 flex items-center justify-between">
                            <span class="font-semibold text-charcoal-900 dark:text-charcoal-50">{{ $lang['name'] }}</span>
                            <span class="text-sm font-medium text-olive-700 dark:text-olive-300">{{ $lang['level'] }}</span>
                        </div>
                        <div class="h-2 w-full overflow-hidden rounded-full bg-olive-200 dark:bg-charcoal-800">
                            <div
                                class="h-full rounded-full bg-gradient-to-r from-olive-600 to-olive-400"
                                style="width: {{ $levelWidths[$lang['level']] ?? '70%' }}"
                            ></div>
                        </div>
                        @isset($lang['note'])
                            <p class="mt-2 text-xs italic text-charcoal-600 dark:text-charcoal-500">{{ $lang['note'] }}</p>
                        @endisset
                    </div>
                @endforeach
            </div>

            {{-- Inmersión lingüística --}}
            <div class="rounded-2xl border border-olive-200 bg-white/70 p-6 dark:border-charcoal-700 dark:bg-charcoal-800/50" data-aos="fade-up" data-aos-delay="150">
                <h3 class="mb-4 text-sm font-semibold uppercase tracking-wide text-charcoal-700 dark:text-charcoal-300">
                    {{ __('cv.languages.immersion_title') }}
                </h3>
                <div class="mb-5 overflow-hidden rounded-xl border border-olive-200 dark:border-charcoal-700">
                    <img
                        src="{{ asset('images/new-york.jpg') }}"
                        alt="{{ __('cv.languages.immersion_photo_alt') }}"
                        class="aspect-[3/4] w-full object-cover"
                        loading="lazy"
                    >
                </div>
                <ul class="space-y-3">
                    @foreach (__('cv.languages.immersion') as $trip)
                        <li class="flex items-center justify-between border-b border-olive-200/60 pb-3 last:border-0 last:pb-0 dark:border-charcoal-700/60">
                            <span class="flex items-center gap-2 text-sm font-medium text-charcoal-900 dark:text-charcoal-50">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" class="h-4 w-4 text-olive-600 dark:text-olive-400">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                                </svg>
                                {{ $trip['place'] }}
                            </span>
                            <span class="text-xs font-medium text-charcoal-600 dark:text-charcoal-400">{{ $trip['period'] }}</span>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</section>
