<div class="h-full p-0 card">
    <header class="flex items-center justify-between p-2 border-b">
        <h2 class="flex items-center">
            <div class="w-6 h-6 mr-1 text-grey-80">
                @cp_svg('content-writing')
            </div>
            <span>{{ __('Cache Manager') }}</span>
        </h2>
    </header>
    <div class="px-2 py-1">
        <div class="flex flex-wrap">
            <div class="w-1/2">
                <h2 class="font-bold">{{ __('Content Stache') }}</h2>
                <form method="POST" action="{{ cp_route('utilities.cache.clear', 'stache') }}">
                    @csrf
                    <button class="btn">{{ __('Clear') }}</button>
                </form>
            </div>
            <div class="w-1/2">
                <h2 class="font-bold">{{ __('Static Page Cache') }}</h2>
                @if ($static['enabled'])
                    <form method="POST" action="{{ cp_route('utilities.cache.clear', 'static') }}">
                        @csrf
                        <button class="btn">{{ __('Clear') }}</button>
                    </form>
                @else
                    disabled
                @endif
            </div>
            <div class="w-1/2">
                <h2 class="font-bold">{{ __('Application Cache') }}</h2>
                <form method="POST" action="{{ cp_route('utilities.cache.clear', 'application') }}">
                    @csrf
                    <button class="btn">{{ __('Clear') }}</button>
                </form>
            </div>
            <div class="w-1/2">
                <h2 class="font-bold">{{ __('Image Cache') }}</h2>
                <form method="POST" action="{{ cp_route('utilities.cache.clear', 'image') }}">
                    @csrf
                    <button class="btn">{{ __('Clear') }}</button>
                </form>
            </div>
            <div class="w-full">
                <form method="POST" action="{{ cp_route('utilities.cache.clear', 'all') }}">
                    @csrf
                    <button class="btn-primary">{{ __('Clear All') }}</button>
                </form>
            </div>
        </div>
    </div>
</div>
