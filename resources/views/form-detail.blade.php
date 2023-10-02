<x-app-layout>
    <div class="container mx-auto mt-10 p-6">
        <div class="flex justify-center">
            <div class="w-full md:w-2/3 lg:w-1/2 bg-white shadow-md rounded-lg p-6">
                <div class="text-lg font-semibold border-b pb-4">プロフィール編集</div>
                @if ($errors->any())
                    <div class="bg-red-500 text-white p-3 rounded">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form method="POST" action="{{ route('user.update') }}" class="mt-4">
                    @csrf
                    @method('PUT')

                    <div class="mb-4">
                        <label for="name" class="block text-sm font-medium text-gray-700">名前</label>
                        <input type="text" name="name" id="name" class="mt-1 p-2 w-full border rounded-md"
                            value="{{ Auth::user()->name }}" required>
                    </div>

                    <div class="mb-4">
                        <label for="email" class="block text-sm font-medium text-gray-700">メールアドレス</label>
                        <input type="email" name="email" id="email" class="mt-1 p-2 w-full border rounded-md"
                            value="{{ Auth::user()->email }}" required>
                    </div>

                    <div class="mb-4">
                        <span class="block text-sm font-medium text-gray-700">担当</span>
                        <label class="inline-flex items-center mt-2">
                            <input type="radio" name="is_requester" value="1" class="form-radio text-blue-500"
                                {{ Auth::user()->is_requester == 1 ? 'checked' : '' }} required>
                            <span class="ml-2">依頼医</span>
                        </label>
                        <label class="inline-flex items-center mt-2 ml-4">
                            <input type="radio" name="is_requester" value="0" class="form-radio text-blue-500"
                                {{ Auth::user()->is_requester == 0 ? 'checked' : '' }} required>
                            <span class="ml-2">受託医</span>
                        </label>
                    </div>

                    <div class="mb-4">
                        <label for="specialty" class="block text-sm font-medium text-gray-700">専門分野</label>
                        <input type="text" name="specialty" id="specialty" class="mt-1 p-2 w-full border rounded-md"
                            value="{{ Auth::user()->specialty }}" required>
                    </div>

                    <div class="mb-4">
                        <label for="qualification_year_1"
                            class="block text-sm font-medium text-gray-700">資格取得年度1</label>
                        <input type="text" name="qualification_year_1" id="qualification_year_1"
                            class="mt-1 p-2 w-full border rounded-md" value="{{ Auth::user()->qualification_year_1 }}"
                            required>
                    </div>

                    <div class="mb-4">
                        <label for="qualification_year_2"
                            class="block text-sm font-medium text-gray-700">資格取得年度2</label>
                        <input type="text" name="qualification_year_2" id="qualification_year_2"
                            class="mt-1 p-2 w-full border rounded-md" value="{{ Auth::user()->qualification_year_2 }}"
                            required>
                    </div>

                    <div class="mb-4">
                        <label for="notes" class="block text-sm font-medium text-gray-700">備考</label>
                        <textarea name="notes" id="notes" class="mt-1 p-2 w-full border rounded-md" rows="4">{{ Auth::user()->notes }}</textarea>
                    </div>

                    <div class="flex justify-end">
                        <button type="submit"
                            class="py-2 px-4 bg-blue-500 text-white rounded-md hover:bg-blue-600">保存</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
