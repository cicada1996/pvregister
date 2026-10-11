<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Create Allocation
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form method="POST" action="{{ route('allocations.store') }}">
    @csrf
    
        <!-- Investor -->
        <div>
            <x-breeze.input-label for="investor_id" value="Investor" />
            <select id="investor_id" name="investor_id" class="block mt-1 w-full border border-gray-400 rounded-md px-2 py-1" required>
                <option value="">Choose an investor</option>
                @foreach ($investors as $investor)
                    <option value="{{ $investor->id }}" @selected(old('investor_id') == $investor->id)>{{ $investor->name }}</option>
                @endforeach
            </select>
            <x-breeze.input-error :messages="$errors->get('investor_id')" class="mt-2" />
        </div>

        <!-- Plant -->
        <div class="mt-4">
            <x-breeze.input-label for="plant_id" value="Plant" />
            <select id="plant_id" name="plant_id" class="block mt-1 w-full border border-gray-400 rounded-md px-2 py-1" required>
                <option value="">Choose a plant</option>
                @foreach ($plants as $plant)
                    <option value="{{ $plant->id }}" @selected(old('plant_id') == $plant->id)>{{ $plant->name }}</option>
                @endforeach
            </select>
            <x-breeze.input-error :messages="$errors->get('plant_id')" class="mt-2" />
        </div>

        <!-- Percentage -->
        <div class="mt-4">
            <x-breeze.input-label for="percentage" value="Percentage (%)" />
            <x-breeze.text-input id="percentage" class="block mt-1 w-full" type="number" step="0.01" min="0.01" max="100" name="percentage" :value="old('percentage')" required />
            <x-breeze.input-error :messages="$errors->get('percentage')" class="mt-2" />
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
