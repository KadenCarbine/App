<x-layout>
    <form action="/fitness/weight" method="POST">
        @csrf
        <label for="WeightInput">Daily Weight</label>
        <input type="text" name="weight" id="WeightInput" class="border-2 border-solid border-black rounded-lg"
               placeholder="Number Only" value="{{ old('weight') }}"/>
        <button type="submit">Submit</button>
        @if($errors->any())
            <ul>
                @foreach($errors->all() as $error)
                    <li class="text-red-500 text-xs mt-2">{{ $error }}</li>
                @endforeach
            </ul>
        @endif
    </form>
    <div class="mb-4 size-full">
        <x-chartjs-component :chart="$chart"/>
    </div>
</x-layout>
