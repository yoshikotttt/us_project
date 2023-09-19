<x-app-layout>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">プロフィール編集</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('user.update') }}">
                            @csrf
                            @method('PUT')

                            <div class="form-group">
                                <label for="name">名前</label>
                                <input type="text" name="name" id="name" class="form-control"
                                    value="{{ Auth::user()->name }}" required>
                            </div>

                            <div class="form-group">
                                <label for="email">メールアドレス</label>
                                <input type="email" name="email" id="email" class="form-control"
                                    value="{{ Auth::user()->email }}" required>
                            </div>

                            {{-- <div class="form-group">
                            <label for="role">役割</label>
                            <input type="text" name="role" id="role" class="form-control" value="{{ Auth::user()->role }}" required>
                        </div> --}}

                            <div class="form-group">
                                <label>リクエスター</label>
                                <div>
                                    <input type="radio" name="is_requester" id="requester_1" value="1"
                                        {{ Auth::user()->is_requester == 1 ? 'checked' : '' }} required>
                                    <label for="requester_1">依頼医</label>
                                </div>
                                <div>
                                    <input type="radio" name="is_requester" id="requester_0" value="0"
                                        {{ Auth::user()->is_requester == 0 ? 'checked' : '' }} required>
                                    <label for="requester_0">受託医</label>
                                </div>
                            </div>


                            <div class="form-group">
                                <label for="specialty">専門分野</label>
                                <input type="text" name="specialty" id="specialty" class="form-control"
                                    value="{{ Auth::user()->specialty }}" required>
                            </div>

                            <div class="form-group">
                                <label for="qualification_year_1">資格取得年度1</label>
                                <input type="text" name="qualification_year_1" id="qualification_year_1"
                                    class="form-control" value="{{ Auth::user()->qualification_year_1 }}" required>
                            </div>

                            <div class="form-group">
                                <label for="qualification_year_2">資格取得年度2</label>
                                <input type="text" name="qualification_year_2" id="qualification_year_2"
                                    class="form-control" value="{{ Auth::user()->qualification_year_2 }}" required>
                            </div>

                            <div class="form-group">
                                <label for="notes">備考</label>
                                <textarea name="notes" id="notes" class="form-control" rows="4">{{ Auth::user()->notes }}</textarea>
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">保存</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
