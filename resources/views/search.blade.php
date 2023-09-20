<x-app-layout>
    <div class="text-center">
        <h3
            class="user-info mb-4 mx-20 font-bold text-xl text-center bg-blue-200 h-14 rounded-xl flex items-center justify-center">
            検索結果 　　9件</h3>
        <div class="pl-20 mt-10 mb-10">
            @foreach ($users as $user)
                <label class="block my-2 text-left  mt-4">
                    <input type="checkbox" name="qualifications[]" value="{{ $user->qualification_year_1 }}">
                    {{ $user->qualification_year_1 }}
                </label>
            @endforeach
        </div>

        <a href="{{ route('process.index') }}"><button
                class="shadow-lg bg-blue-500 hover:bg-blue-600 shadow-blue-500/50 hover:shadow-blue-600/50 text-white rounded px-2 py-1 transition duration-300 ease-in-out h-14 w-40">依頼する</button></a>
    </div>

</x-app-layout>
