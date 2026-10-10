<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Create Plant
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form method="POST" action="{{ route('admin.plants.store') }}">
    @csrf
    
        <!-- Name -->
        <div>
            <x-breeze.input-label for="name" value="Name" />
            <x-breeze.text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
            <x-breeze.input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Location -->
        <div class="mt-4">
            <x-breeze.input-label for="location" value="Location" />
            <x-breeze.text-input required id="location" class="block mt-1 w-full" type="text" name="location" :value="old('location')" />
            <x-breeze.input-error :messages="$errors->get('location')" class="mt-2" />
        </div>

        <!-- Description -->
        <div class="mt-4">
            <x-breeze.input-label for="description" value="Description" />
            <textarea id="description" name="description" rows="4"
                 class="block mt-1 w-full border border-gray-400 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-xs px-2 py-1">{{ old('description') }}</textarea>
            <x-breeze.input-error :messages="$errors->get('description')" class="mt-2" />
        </div>

        <!-- Online_since -->
        <div class="mt-4">
            <x-breeze.input-label for="online_since" value="Online Since" />
            <x-breeze.text-input required id="online_since" class="block mt-1 w-full" type="date" name="online_since" :value="old('online_since')" />
            <x-breeze.input-error :messages="$errors->get('online_since')" class="mt-2" />
        </div>

        <!-- Output -->
        <div class="mt-4">
            <x-breeze.input-label for="output" value="Output" />
            <x-breeze.text-input required id="output" class="block mt-1 w-full" type="number" step="0.01" name="output" :value="old('output')" />
            <x-breeze.input-error :messages="$errors->get('output')" class="mt-2" />
        </div>

         <!-- Parcels -->
        <div class="mt-4">
            <x-breeze.input-label for="parcels" value="Parcels" />
            <x-breeze.text-input required id="parcels" class="block mt-1 w-full" type="number" name="parcels" :value="old('parcels')" />
            <x-breeze.input-error :messages="$errors->get('parcels')" class="mt-2" />
        </div>

         <!-- Energy_storage -->
        <div class="mt-4">
            <x-breeze.input-label for="energy_storage" value="Energy Storage" />
            <x-breeze.text-input id="energy_storage" class="block mt-1 w-full" type="checkbox" value="1" name="energy_storage" />
            <x-breeze.input-error :messages="$errors->get('energy_storage')" class="mt-2" />
        </div>

          <!-- Agri_PV -->
        <div class="mt-4">
            <x-breeze.input-label for="agripv" value="Agripv" />
            <x-breeze.text-input id="agripv" class="block mt-1 w-full" type="checkbox" value="1" name="agripv" />
            <x-breeze.input-error :messages="$errors->get('agripv')" class="mt-2" />
        </div>

             <div class="mt-4">
         <x-breeze.primary-button class="ms-3">
                Save
            </x-breeze.primary-button>
            </div>
    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
