@php
    $icons = [
        0 => 'M14.25 9.75L16.5 12l-2.25 2.25m-4.5 0L7.5 12l2.25-2.25M6 20.25h12A2.25 2.25 0 0020.25 18V6A2.25 2.25 0 0018 3.75H6A2.25 2.25 0 003.75 6v12A2.25 2.25 0 006 20.25z',
        1 => 'M20.25 6.375c0 2.278-3.694 4.125-8.25 4.125S3.75 8.653 3.75 6.375m16.5 0c0-2.278-3.694-4.125-8.25-4.125S3.75 4.097 3.75 6.375m16.5 0v11.25c0 2.278-3.694 4.125-8.25 4.125s-8.25-1.847-8.25-4.125V6.375m16.5 3.75c0 2.278-3.694 4.125-8.25 4.125s-8.25-1.847-8.25-4.125',
        2 => 'M9 17.25v1.007a3 3 0 01-.879 2.122L7.5 21h9l-.621-.621A3 3 0 0115 18.257V17.25m6-12V15a2.25 2.25 0 01-2.25 2.25H5.25A2.25 2.25 0 013 15V5.25m18 0A2.25 2.25 0 0018.75 3H5.25A2.25 2.25 0 003 5.25m18 0V12a2.25 2.25 0 01-2.25 2.25H5.25A2.25 2.25 0 013 12V5.25',
        3 => 'M9.813 15.904L9 18.75l-.813-2.846a4.5 4.5 0 00-3.09-3.09L2.25 12l2.846-.813a4.5 4.5 0 003.09-3.09L9 5.25l.813 2.846a4.5 4.5 0 003.09 3.09L15.75 12l-2.846.813a4.5 4.5 0 00-3.09 3.09zM18.259 8.715L18 9.75l-.259-1.035a3.375 3.375 0 00-2.455-2.456L14.25 6l1.036-.259a3.375 3.375 0 002.455-2.456L18 2.25l.259 1.035a3.375 3.375 0 002.456 2.456L21.75 6l-1.035.259a3.375 3.375 0 00-2.456 2.456z',
    ];
@endphp

<section id="skills" class="bg-olive-100/50 py-24 dark:bg-charcoal-950">
    <div class="mx-auto max-w-6xl px-5 lg:px-8">
        <div class="mb-16 text-center" data-aos="fade-up">
            <span class="text-xs font-semibold uppercase tracking-widest text-olive-600 dark:text-olive-400">{{ __('cv.nav.skills') }}</span>
            <h2 class="mt-2 text-3xl font-bold text-charcoal-900 sm:text-4xl dark:text-charcoal-50">{{ __('cv.skills.title') }}</h2>
            <p class="mx-auto mt-4 max-w-2xl text-charcoal-600 dark:text-charcoal-400">{{ __('cv.skills.subtitle') }}</p>
        </div>

        <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-4">
            @foreach (__('cv.skills.groups') as $index => $group)
                <div
                    class="group rounded-2xl border border-olive-200 bg-white/70 p-6 transition hover:-translate-y-1 hover:border-olive-500/60 hover:shadow-xl hover:shadow-olive-300/30 dark:border-charcoal-800 dark:bg-charcoal-900 dark:hover:border-olive-600/60 dark:hover:shadow-olive-900/20"
                    data-aos="fade-up"
                    data-aos-delay="{{ $index * 100 }}"
                >
                    <div class="mb-4 flex h-12 w-12 items-center justify-center rounded-xl bg-olive-500/10 text-olive-600 transition group-hover:bg-olive-500 group-hover:text-charcoal-950 dark:text-olive-400">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" class="h-6 w-6">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="{{ $icons[$index] ?? $icons[0] }}" />
                        </svg>
                    </div>
                    <h3 class="text-base font-bold text-charcoal-900 dark:text-charcoal-50">{{ $group['title'] }}</h3>
                    <p class="mt-2 text-sm leading-relaxed text-charcoal-600 dark:text-charcoal-400">{{ $group['description'] }}</p>
                </div>
            @endforeach
        </div>
    </div>
</section>
