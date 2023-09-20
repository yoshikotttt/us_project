<x-app-layout>
    <div>
        {{-- <button class="button"><a href="{{ route('detail') }}" class="button">詳細入力</button> --}}
        <div class="flex flex-col h-full justify-center mt-[calc(33%-6rem)]"> <!-- 親要素に flex と mt- を追加 -->

            <div
                class="user-info mb-4 mx-20 font-bold text-xl text-center bg-blue-200 h-20 rounded-xl flex items-center justify-center">
                受託アクティブ 30人
            </div>


            <div class="mt-4 text-center">
                <h3 class="text-xl mb-10 mt-20">検査を依頼する</h3>

                <!-- flex と justify-between を使ってボタンを横並びにする -->
                <div class="flex justify-center space-x-4">
                    <button
                        class="h-14 w-40 shadow-lg bg-blue-500 hover:bg-blue-600 shadow-blue-500/50 hover:shadow-blue-600/50 text-white rounded px-2 py-1 transition duration-300 ease-in-out">心臓</button>
                    <a href="{{ route('search') }}">
                        <button
                            class="h-14 w-40 shadow-lg bg-blue-500 hover:bg-blue-600 shadow-blue-500/50 hover:shadow-blue-600/50 text-white rounded px-2 py-1 transition duration-300 ease-in-out">腹部（上腹部）</button>
                    </a>
                    <button
                        class="h-14 w-40 shadow-lg bg-blue-500 hover:bg-blue-600 shadow-blue-500/50 hover:shadow-blue-600/50 text-white rounded px-2 py-1 transition duration-300 ease-in-out">腹部（下腹部）</button>
                </div>

            </div>
        </div>

    </div>
</x-app-layout>
