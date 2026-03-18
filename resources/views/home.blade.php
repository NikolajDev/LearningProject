<x-layout>
    <x-slot:title>
        Welcome
    </x-slot:title>
    <div class="max-w-2xl mx-auto">
        @foreach ( $chirps as $chirp )
            <div class="card bg-base-100 shadow mt-8">
                <div class="card-body">
                    <h2 class="text-xl font-bold">{{ $chirp['user'] }}</h2>
                    <p class="mt-2">{{ $chirp['message'] }}</p>
                </div>
            </div>
        @endforeach
</x-layout>