<x-layout>
    <x-slot name="heading">
        Login
    </x-slot>
    <form method="POST" action="/register">
        @csrf
        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12">

                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <div class="sm:col-span-4">
                        <x-form-label for="email">Email</x-form-label>

                        <div class="mt-2">

                            <x-form-input id="email" name="email" placeholder="Email" type="email" required />

                            <x-form-error name="email" />
                        </div>
                    </div>

                    <div class="sm:col-span-4">
                        <x-form-label for="password">Password</x-form-label>

                        <div class="mt-2">

                            <x-form-input id="password" name="password" placeholder="Password" required />

                            <x-form-error name="password" />
                        </div>
                    </div>
                </div>
            </div>
            {{--
          <div class="mb-5">
              @if ($errors->any())
                @foreach ($errors->all() as $error)
                    <div class="text-red-500 italic">
                        {{ $error }}
                    </div>
                @endforeach
            @endif
          </div> --}}

            <div class="mt-6 flex items-center justify-end gap-x-6">
                <a href="/" class="text-sm/6 font-semibold text-gray-900">Cancel</a>
                <x-form-button>Login</x-form-button>
            </div>
    </form>
</x-layout>
