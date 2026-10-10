<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Create Investor
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form method="POST" action="{{ route('investors.store') }}">
    @csrf
    
        <!-- Name -->
        <div>
            <x-breeze.input-label for="name" value="Name" />
            <x-breeze.text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
            <x-breeze.input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email -->
        <div class="mt-4">
            <x-breeze.input-label for="email" value="Email" />
            <x-breeze.text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" />
            <x-breeze.input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Phone -->
        <div class="mt-4">
            <x-breeze.input-label for="phone" value="Phone" />
            <x-breeze.text-input id="phone" class="block mt-1 w-full" type="text" name="phone" :value="old('phone')" />
            <x-breeze.input-error :messages="$errors->get('phone')" class="mt-2" />
        </div>

        <!-- Address -->
        <div class="mt-4">
            <x-breeze.input-label for="address" value="Address" />
            <x-breeze.text-input id="address" class="block mt-1 w-full" type="text" name="address" :value="old('address')" />
            <x-breeze.input-error :messages="$errors->get('address')" class="mt-2" />
        </div>

        <!-- City -->
        <div class="mt-4">
            <x-breeze.input-label for="city" value="City" />
            <x-breeze.text-input id="city" class="block mt-1 w-full" type="text" name="city" :value="old('city')" />
            <x-breeze.input-error :messages="$errors->get('city')" class="mt-2" />
        </div>

             <div class="mt-4">
         <x-breeze.primary-button class="ms-3">
                Save
            </x-breeze.primary-button>
            </div>
        </div>
    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
