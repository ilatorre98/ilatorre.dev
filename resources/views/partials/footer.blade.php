<footer class="border-t border-charcoal-800 bg-charcoal-950 py-8">
    <div class="mx-auto flex max-w-6xl flex-col items-center justify-between gap-4 px-5 text-sm text-charcoal-500 sm:flex-row lg:px-8">
        <p>&copy; {{ now()->year }} {{ __('cv.hero.first_name') }} {{ __('cv.hero.last_name') }}. {{ __('cv.footer.rights') }}</p>
        <div class="flex items-center gap-5">
            <a
                href="{{ __('cv.contact.linkedin_url') }}"
                target="_blank"
                rel="noopener"
                class="flex items-center gap-2 font-medium text-charcoal-400 transition hover:text-olive-300"
            >
                {{ __('cv.contact.linkedin') }}
            </a>
            <a
                href="{{ config('services.github.repo_url') }}"
                target="_blank"
                rel="noopener"
                aria-label="GitHub"
                class="flex items-center gap-2 font-medium text-charcoal-400 transition hover:text-olive-300"
            >
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-5 w-5">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M12 .5C5.73.5.75 5.48.75 11.75c0 4.99 3.24 9.22 7.74 10.72.57.1.78-.25.78-.55 0-.27-.01-1.16-.02-2.1-3.15.69-3.81-1.34-3.81-1.34-.52-1.3-1.26-1.65-1.26-1.65-1.03-.7.08-.69.08-.69 1.14.08 1.74 1.17 1.74 1.17 1.01 1.74 2.65 1.24 3.3.94.1-.73.4-1.24.72-1.52-2.51-.29-5.15-1.26-5.15-5.6 0-1.24.44-2.25 1.17-3.04-.12-.29-.51-1.45.11-3.02 0 0 .96-.31 3.14 1.16a10.9 10.9 0 015.72 0c2.18-1.47 3.14-1.16 3.14-1.16.62 1.57.23 2.73.11 3.02.73.79 1.17 1.8 1.17 3.04 0 4.35-2.64 5.3-5.16 5.58.41.35.77 1.04.77 2.1 0 1.52-.01 2.74-.01 3.11 0 .3.2.66.79.55a11.25 11.25 0 007.72-10.71C23.25 5.48 18.27.5 12 .5z" />
                </svg>
                <span>GitHub</span>
            </a>
        </div>
    </div>
</footer>
