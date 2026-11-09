@php
    $contactItems = [
        [
            'label' => __('cv.contact.phone_label'),
            'value' => __('cv.contact.phone'),
            'href' => 'tel:' . str_replace(' ', '', __('cv.contact.phone')),
            'icon' => 'M2.25 6.75c0 8.284 6.716 15 15 15h1.5a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106a1.125 1.125 0 00-1.173.417l-.97 1.293a11.25 11.25 0 01-5.173-5.173l1.293-.97a1.125 1.125 0 00.417-1.173L8.963 3.102a1.125 1.125 0 00-1.091-.852H6.5A2.25 2.25 0 004.25 4.5v1.5c0 .251.03.496.085.731',
        ],
        [
            'label' => __('cv.contact.email_label'),
            'value' => __('cv.contact.email'),
            'href' => 'mailto:' . __('cv.contact.email'),
            'icon' => 'M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75',
        ],
        [
            'label' => __('cv.contact.location_label'),
            'value' => __('cv.contact.location'),
            'href' => null,
            'icon' => 'M15 10.5a3 3 0 11-6 0 3 3 0 016 0z M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z',
        ],
        [
            'label' => __('cv.contact.linkedin_label'),
            'value' => __('cv.contact.linkedin'),
            'href' => __('cv.contact.linkedin_url'),
            'icon' => 'M8.25 15V9m0 6a3 3 0 11-6 0V9m6 6v-3.75A2.25 2.25 0 0110.5 9h0A2.25 2.25 0 0112.75 11.25V15m0 0V9m6.75 6v-5.25a2.25 2.25 0 00-2.25-2.25h0a2.25 2.25 0 00-2.25 2.25V15',
        ],
    ];
@endphp

<section id="contact" class="relative overflow-hidden bg-charcoal-900 py-24">
    <div class="pointer-events-none absolute inset-0">
        <div class="absolute left-1/2 top-0 h-96 w-96 -translate-x-1/2 rounded-full bg-olive-600/10 blur-3xl"></div>
    </div>

    <div class="relative mx-auto max-w-4xl px-5 text-center lg:px-8">
        <div data-aos="fade-up">
            <span class="text-xs font-semibold uppercase tracking-widest text-olive-400">{{ __('cv.nav.contact') }}</span>
            <h2 class="mt-2 text-3xl font-bold text-charcoal-50 sm:text-4xl">{{ __('cv.contact.title') }}</h2>
            <p class="mx-auto mt-4 max-w-xl text-charcoal-400">{{ __('cv.contact.subtitle') }}</p>
        </div>

        <div class="mt-12 grid gap-5 sm:grid-cols-2">
            @foreach ($contactItems as $index => $item)
                @if ($item['href'])
                    <a
                        href="{{ $item['href'] }}" target="_blank" rel="noopener"
                        class="group flex items-center gap-4 rounded-2xl border border-charcoal-700 bg-charcoal-800/50 p-5 text-left transition hover:border-olive-600/60 hover:bg-charcoal-800"
                        data-aos="fade-up"
                        data-aos-delay="{{ $index * 75 }}"
                    >
                        <span class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-olive-500/10 text-olive-400 transition group-hover:bg-olive-500 group-hover:text-charcoal-950">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" class="h-5 w-5">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="{{ $item['icon'] }}" />
                            </svg>
                        </span>
                        <span class="min-w-0">
                            <span class="block text-xs font-semibold uppercase tracking-wide text-charcoal-500">{{ $item['label'] }}</span>
                            <span class="block truncate text-sm font-medium text-charcoal-50">{{ $item['value'] }}</span>
                        </span>
                    </a>
                @else
                    <div
                        class="group flex items-center gap-4 rounded-2xl border border-charcoal-700 bg-charcoal-800/50 p-5 text-left transition hover:border-olive-600/60 hover:bg-charcoal-800"
                        data-aos="fade-up"
                        data-aos-delay="{{ $index * 75 }}"
                    >
                        <span class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-olive-500/10 text-olive-400 transition group-hover:bg-olive-500 group-hover:text-charcoal-950">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" class="h-5 w-5">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="{{ $item['icon'] }}" />
                            </svg>
                        </span>
                        <span class="min-w-0">
                            <span class="block text-xs font-semibold uppercase tracking-wide text-charcoal-500">{{ $item['label'] }}</span>
                            <span class="block truncate text-sm font-medium text-charcoal-50">{{ $item['value'] }}</span>
                        </span>
                    </div>
                @endif
            @endforeach
        </div>
    </div>
</section>
