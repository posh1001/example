<x-layout>
    <x-slot name="heading">
        Create Job
    </x-slot>
    <form method="POST" action="/jobs">
        @csrf
        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12">
                <h2 class="text-base/7 font-semibold text-gray-900">Create A New Job</h2>
                <p class="mt-1 text-sm/6 text-gray-600">Kindly Add More Details.</p>

                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <div class="sm:col-span-4">
                        <x-form-label for="title">Title</x-form-label>
                        <div class="mt-2">
                            <x-form-input id="title"  name="title" placeholder="CEO" required />
                            <x-form-error name="title" />
                        </div>
                    </div>
                </div>
                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <div class="sm:col-span-4">
                        <x-form-label for="salary">Salary</x-form-label>
                        <div class="mt-2">
                            <x-form-input id="salary"  name="salary" placeholder="USD Per Year" required/>
                             <x-form-error name="salary"/>
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
                <button type="button" class="text-sm/6 font-semibold text-gray-900">Cancel</button>
                <x-form-button>Save</x-form-button>
            </div>
    </form>
</x-layout>
