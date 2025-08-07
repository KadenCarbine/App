@props(['players'])
<x-layout>
    <div class="grid grid-cols-5 gap-6 mx-auto px-20 max-w-7xl">
        @foreach($players as $player)
            <x-card :uuid="$player['uuid']">
                <x-slot:name>{{ $player['name'] }}</x-slot:name>
                <x-slot:image>{{ $player['baked_img'] }}</x-slot:image>
            </x-card>
        @endforeach
        {{ $players->links() }}
    </div>
</x-layout>
