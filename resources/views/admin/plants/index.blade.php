<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Plants
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    @foreach ($plants as $plant)
                    <div class="border-b border-gray-200">
                        <h2 class="text-lg font-semibold">{{ $plant->name }}</h2>
                        <p>{{ $plant->location }}</p>
                        <p>{{ $plant->description }}</p>
                        <p>{{ $plant->output }} kWp</p>
                        <ul>
                            @forelse ($plant->investors as $investor)
                                <li>{{ $investor->name }} - {{ $investor->pivot->percentage }}%</li>
                            @empty
                                <li>No investors found.</li>
                            @endforelse
                        </ul>  
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
