<div class="h-full p-0 card">
    <header class="flex items-center justify-between p-2 border-b">
        <h2 class="flex items-center">
            <div class="w-6 h-6 mr-1 text-grey-80">
                @cp_svg('content-writing')
            </div>
            <span>{{ __('Cache Manager') }}</span>
        </h2>
    </header>
    <div class="flex flex-wrap px-2">
        <div class="w-1/2 pr-1 py-2">
            <h2 class="font-bold mb-2">{{ __('Content Stache') }}</h2>
            <form method="POST" action="{{ cp_route('utilities.cache.clear', 'stache') }}">
                @csrf
                <button class="btn w-full">{{ __('Clear') }}</button>
            </form>
        </div>
        <div class="w-1/2 pl-1 py-2">
            <h2 class="font-bold mb-2">{{ __('Static Page Cache') }}</h2>
            @if (config('statamic:static_caching') != null)
                <form method="POST" action="{{ cp_route('utilities.cache.clear', 'static') }}">
                    @csrf
                    <button class="btn w-full">{{ __('Clear') }}</button>
                </form>
            @else
                disabled
            @endif
        </div>
        <div class="w-1/2 pr-1 pb-2">
            <h2 class="font-bold mb-2">{{ __('Application Cache') }}</h2>
            <form method="POST" action="{{ cp_route('utilities.cache.clear', 'application') }}">
                @csrf
                <button class="btn w-full">{{ __('Clear') }}</button>
            </form>
        </div>
        <div class="w-1/2 pl-1 pb-2">
            <h2 class="font-bold mb-2">{{ __('Image Cache') }}</h2>
            <form method="POST" action="{{ cp_route('utilities.cache.clear', 'image') }}">
                @csrf
                <button class="btn w-full">{{ __('Clear') }}</button>
            </form>
        </div>
        <div class="w-full py-2 border-t-2">
            <form method="POST" action="{{ cp_route('utilities.cache.clear', 'all') }}">
                @csrf
                <button class="btn-primary w-full">{{ __('Clear All') }}</button>
            </form>
        </div>
    </div>
</div>
