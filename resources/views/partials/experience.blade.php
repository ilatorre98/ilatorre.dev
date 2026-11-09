<section id="experience" class="bg-white/50 py-24 dark:bg-charcoal-900/60">
    <div class="mx-auto max-w-5xl px-5 lg:px-8">
        <div class="mb-16 text-center" data-aos="fade-up">
            <span class="text-xs font-semibold uppercase tracking-widest text-olive-600 dark:text-olive-400">{{ __('cv.nav.experience') }}</span>
            <h2 class="mt-2 text-3xl font-bold text-charcoal-900 sm:text-4xl dark:text-charcoal-50">{{ __('cv.experience.title') }}</h2>
            <p class="mx-auto mt-4 max-w-2xl text-charcoal-600 dark:text-charcoal-400">{{ __('cv.experience.subtitle') }}</p>
        </div>

        <div class="relative">
            <div class="absolute left-4 top-0 h-full w-px bg-olive-300 md:left-1/2 dark:bg-charcoal-700"></div>

            <div class="space-y-12">
                @foreach (__('cv.experience.items') as $index => $item)
                    <div
                        class="relative flex flex-col gap-4 md:flex-row md:items-start {{ $index % 2 === 0 ? 'md:flex-row' : 'md:flex-row-reverse' }}"
                        data-aos="fade-up"
                        data-aos-delay="{{ min($index, 4) * 75 }}"
                    >
                        <span class="absolute left-4 top-1.5 h-3 w-3 -translate-x-1/2 rounded-full border-2 border-olive-500 bg-olive-50 md:left-1/2 dark:border-olive-400 dark:bg-charcoal-900"></span>

                        <div class="pl-12 md:w-1/2 md:px-10 {{ $index % 2 === 0 ? 'md:text-right' : 'md:text-left' }}">
                            <p class="text-sm font-semibold text-olive-600 dark:text-olive-400">{{ $item['period'] }}</p>
                        </div>

                        <div class="pl-12 md:w-1/2 md:px-10">
                            <div class="rounded-2xl border border-olive-200 bg-white/70 p-6 shadow-lg shadow-black/5 transition hover:border-olive-500/60 dark:border-charcoal-700 dark:bg-charcoal-800/60 dark:shadow-black/20 dark:hover:border-olive-600/60">
                                @isset($item['photo'])
                                    <img
                                        src="{{ asset($item['photo']) }}"
                                        alt="{{ $item['photo_alt'] ?? $item['company'] }}"
                                        class="mb-4 aspect-square w-1/2 rounded-lg border border-olive-500/40 object-cover"
                                        loading="lazy"
                                    >
                                @endisset

                                @if (isset($item['roles']))
                                    {{-- Nodo agrupado: empresa con varios puestos internos --}}
                                    <h3 class="text-lg font-bold text-charcoal-900 dark:text-charcoal-50">{{ $item['company'] }}</h3>
                                    <p class="text-sm font-medium text-olive-700 dark:text-olive-300">{{ $item['location'] }}</p>

                                    <div class="relative mt-5 border-t border-olive-200/80 pt-5 dark:border-charcoal-700/70">
                                        <div class="relative">
                                            <div class="absolute left-1 top-1 bottom-1 w-px bg-olive-300 dark:bg-charcoal-700"></div>

                                            <ul class="space-y-5">
                                                @foreach ($item['roles'] as $roleIndex => $role)
                                                    <li class="relative pl-6">
                                                        <span class="absolute left-1 top-1.5 h-2 w-2 -translate-x-1/2 rounded-full border-2 border-olive-500 bg-olive-50 dark:border-olive-400 dark:bg-charcoal-900"></span>
                                                        <div class="flex flex-wrap items-baseline gap-x-3 gap-y-1">
                                                            <h4 class="text-sm font-bold text-charcoal-900 dark:text-charcoal-50">{{ $role['role'] }}</h4>
                                                            <span class="shrink-0 rounded-full bg-olive-500/10 px-2 py-0.5 text-xs font-semibold text-olive-700 dark:text-olive-300">{{ $role['period'] }}</span>
                                                        </div>
                                                        <p class="mt-1.5 text-sm leading-relaxed text-charcoal-600 dark:text-charcoal-300">{{ $role['description'] }}</p>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                @else
                                    {{-- Nodo estándar: puesto independiente --}}
                                    <h3 class="text-lg font-bold text-charcoal-900 dark:text-charcoal-50">{{ $item['role'] }}</h3>
                                    <p class="text-sm font-medium text-olive-700 dark:text-olive-300">{{ $item['company'] }} · {{ $item['location'] }}</p>
                                    <p class="mt-3 text-sm leading-relaxed text-charcoal-600 dark:text-charcoal-300">{{ $item['description'] }}</p>
                                @endif
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
