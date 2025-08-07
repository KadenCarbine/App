@props(['uuid'])
<div class="max-w-xs bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700 mt-4">
    <a href="/mlb/{{$uuid}}">
        <img class="rounded-t-lg w-full" src="{{ $image }}" alt=""/>
        <div class="p-5">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $name }}</h5>
        </div>
    </a>
</div>
