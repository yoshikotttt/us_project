<x-app-layout>

    {{-- <h3 class="text-center">依頼結果</h3> --}}
    {{-- <p>{{ $message }}</p> --}}
    <div
        class="user-info mb-4 mx-20 mt-10 text-xl text-center bg-emerald-200 h-14 rounded-xl flex items-center justify-center">
        依頼が完了しました</div>
    <br>

    <div class="container text-center">
        <h1 class="mb-10 text-lg">検査情報を入力してください</h1>
        <form method="POST" action="{{ route('process.store') }}">
            @csrf

           <div class="mx-auto"> <!-- 中央表示のためのクラスを追加 -->

    <div class="form-group mb-4 flex">
        <label for="age" class="w-32 text-left ml-20">年齢</label>
        <input type="text" name="age" id="age" class="border border-gray-400 rounded w-1/5" required>
    </div>

    <div class="form-group mb-4 flex">
        <label for="gender" class="w-32 text-left ml-20">性別</label>
        <select name="gender" id="gender" class="border border-gray-400 rounded w-1/5" required>
            <option value="男性">男性</option>
            <option value="女性">女性</option>
            <option value="その他">その他</option>
        </select>
    </div>

    <div class="form-group mb-4 flex">
        <label for="chief_complaint" class="w-32 text-left ml-20">主訴</label>
        <input type="text" name="chief_complaint" id="chief_complaint" class="border border-gray-400 rounded w-1/2" required>
    </div>

    <div class="form-group mb-4 flex">
        <label for="medical_history" class="w-32 text-left ml-20">病歴</label>
        <textarea name="medical_history" rows="5" id="medical_history" class="border border-gray-400 rounded w-1/2" required></textarea>
    </div>

    <div class="form-group mb-4 flex">
        <label for="vitals" class="w-32 text-left ml-20">バイタルサイン</label>
        <input type="text" name="vitals" id="vitals" class="border border-gray-400 rounded w-1/2">
    </div>

</div>

            <button type="submit"
                class="h-14 w-40 mt-10 shadow-lg bg-blue-500 hover:bg-blue-600 shadow-blue-500/50 hover:shadow-blue-600/50 text-white rounded px-2 py-1 transition duration-300 ease-in-out">
                送信</button>
        </form>
    </div>



</x-app-layout>
