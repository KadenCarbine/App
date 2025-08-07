@props(['player'])
<x-layout>
    <div class="mt-6 mx-auto px-20 max-w-7xl">
        <div class="flex">
            <h1 class="text-3xl font-bold justify-center mx-auto">{{ $player->name }}</h1>
        </div>
    </div>
    <img class="mx-auto rounded-xl mt-4" style="width:315px" src="{{ $player->baked_img }}"
         alt="{{ $player->name }} Card Image">
</x-layout>
