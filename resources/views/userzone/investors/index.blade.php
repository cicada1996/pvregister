<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Investors
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    @foreach ($investors as $investor)
                        <h2>{{ $investor->name }}</h2>
                        <ul>
                            @forelse ($investor->plants as $plant)
                                <li>{{ $plant->name }} - {{ $plant->pivot->percentage }}%</li>
                            @empty
                                <li>No plants found.</li>
                            @endforelse
                        </ul>  
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
