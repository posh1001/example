<x-layout>
    <x-slot name="heading">
        Register
    </x-slot>
    <form method="POST" action="/register">
        @csrf
        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12">
                <div class=" grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <div class="sm:col-span-4">
                        <x-form-label for="first_name">First Name</x-form-label>
                        <div class="mt-2">
                            <x-form-input id="first_name" name="first_name" placeholder="First Name" required />
                            <x-form-error name="first_name" />
                        </div>
                    </div>
                </div>
                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">

                    <div class="sm:col-span-4">
                        <x-form-label for="last_name">Last Name</x-form-label>

                        <div class="mt-2">

                            <x-form-input id="last_name" name="last_name" placeholder="Last Name" required />

                            <x-form-error name="last_name" />
                        </div>
                    </div>

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

                    <div class="sm:col-span-4">
                        <x-form-label for="password_confirmation">Confirm Password</x-form-label>

                        <div class="mt-2">
                            <x-form-input id="password_confirmation" name="password_confirmation" placeholder="password_confirmation"
                                required />

                            <x-form-error name="password_confirmation" />
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
                <x-form-button>Register</x-form-button>
            </div>
    </form>
</x-layout>
