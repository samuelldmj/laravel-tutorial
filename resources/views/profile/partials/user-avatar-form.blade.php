<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            User Avatar
        </h2>

        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
           Add or Update user Avatar
        </p>
    </header>

    @if (session('message'))
    <div class="alert alert-success">
        {{ session('message') }}
    </div>
    @endif

    <form method="post" action="{{route('profile.avatar')}}" class="mt-6 space-y-6">
        @method('patch')
        @csrf

        <div>
            <x-input-label for="avatar" value='Avatar' />
            <x-text-input id="avatar" name="avatar" type="file" class="mt-1 block w-full pt-1 pb-1" :value="old('avatar', $user->avatar)" required autofocus autocomplete="avatar" />
            <x-input-error class="mt-2" :messages="$errors->get('avatar')" />
        </div>

    

        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Save') }}</x-primary-button>

            @if (session('status') === 'profile-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600 dark:text-gray-400"
                > {{ __('Saved.') }}</p>
            @endif
        </div>
    </form>
</section>
