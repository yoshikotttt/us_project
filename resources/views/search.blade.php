<x-app-layout>
    <h3>検索結果</h3>
{{-- <form action="/process" method="POST"> --}}
    @csrf
    @foreach($users as $user)
        <label>
            <input type="checkbox" name="qualifications[]" value="{{$user->qualification_year_1 }}">
            {{ $user->qualification_year_1 }}
        </label><br>
    @endforeach
    <button type="submit">依頼</button>
{{-- </form> --}}

    <button type="submit"><a href="{{ route('process') }}">依頼</button>



    </x-app-layout>