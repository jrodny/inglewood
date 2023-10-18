<x-guest-layout>

    <x-slot name="logo">
        <x-authentication-card-logo />
    </x-slot>

    <div class="mb-4 text-sm text-gray-600">
        {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
    </div>

    @if (session('status'))
        <div class="mb-4 font-medium text-sm text-green-600">
            {{ session('status') }}
        </div>
    @endif

    <x-validation-errors class="mb-4" />
    <div class="flex-auto p-6">
        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <label class="mb-2 ml-1 font-bold text-xs text-slate-700">Email</label>
            <div class="mb-4">
                <input type="email" name="email" :value="old('email')" required autofocus autocomplete="username"
                    class="focus:shadow-soft-primary-outline text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:outline-none focus:transition-shadow"
                    placeholder="Email" aria-label="Email" aria-describedby="email-addon" />
            </div>


            <div class="text-center">
                <button type="submit"
                    class="inline-block w-full px-6 py-3 mt-6 mb-0 font-bold text-center
                    text-white uppercase align-middle transition-all bg-transparent border-0
                    rounded-lg cursor-pointer shadow-soft-md bg-x-25 bg-150 leading-pro text-xs
                    ease-soft-in tracking-tight-soft bg-gradient-to-tl from-blue-600 to-cyan-400 hover:scale-102 hover:shadow-soft-xs a
                    ctive:opacity-85">
                    {{ __('Email Password Reset Link') }}
                </button>
            </div>
        </form>
    </div>
</x-guest-layout>
