
<x-app-layout>

    <h3>依頼結果</h3>
    {{-- <p>{{ $message }}</p> --}}
    <div>依頼完了しました</div>
    <br>

    <div class="container">
        <h1>検査情報を入力</h1>
        <form method="POST" action="{{ route('process.store') }}">
            @csrf

            <div class="form-group">
                <label for="age">年齢</label>
                <input type="text" name="age" id="age" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="gender">性別</label>
                <select name="gender" id="gender" class="form-control" required>
                    <option value="男性">男性</option>
                    <option value="女性">女性</option>
                    <option value="その他">その他</option>
                </select>
            </div>

            <div class="form-group">
                <label for="chief_complaint">主訴</label>
                <input type="text" name="chief_complaint" id="chief_complaint" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="medical_history">病歴</label>
                <textarea name="medical_history" id="medical_history" class="form-control" required></textarea>
            </div>


            {{-- <div class="form-group">
                <label for="vitals">バイタルサイン</label>
                <input type="text" name="vitals" id="vitals" class="form-control">
            </div> --}}

            <button type="submit" class="btn btn-primary">送信</button>
        </form>
    </div>


</x-app-layout>