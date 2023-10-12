<x-app-layout>
    <div>
      
        <div class="flex flex-col h-full justify-center mt-[calc(33%-6rem)]"> <!-- 親要素に flex と mt- を追加 -->

 
            <div class="mt-4 text-center">
                <h3 class="text-xl mb-10 mt-20">検査を依頼する</h3>

                <!-- flex と justify-between を使ってボタンを横並びにする -->
                <div class="flex justify-center space-x-4">
                    <button
                        class="h-14 w-40 shadow-lg bg-blue-500 hover:bg-blue-600 shadow-blue-500/50 hover:shadow-blue-600/50 text-white rounded px-2 py-1 transition duration-300 ease-in-out">心臓</button>
                    <a href="{{ route('search', ['type' => '上腹部']) }}">
                        <button
                            class="h-14 w-40 shadow-lg bg-blue-500 hover:bg-blue-600 shadow-blue-500/50 hover:shadow-blue-600/50 text-white rounded px-2 py-1 transition duration-300 ease-in-out">腹部（上腹部）</button>
                    </a>
                    <a href="{{ route('search', ['type' => '下腹部']) }}">
                        <button
                            class="h-14 w-40 shadow-lg bg-blue-500 hover:bg-blue-600 shadow-blue-500/50 hover:shadow-blue-600/50 text-white rounded px-2 py-1 transition duration-300 ease-in-out">腹部（下腹部）</button>
                    </a>
                </div>

                    <!-- 新たに「検査を受託する」ボタンを追加 -->
                <div class="mt-10">
                    {{-- 10.10.22.33修正 --}}
                    <a href="{{ route('skyway2')}}" class="h-14 w-40 shadow-lg bg-green-500 hover:bg-green-600 shadow-green-500/50 hover:shadow-green-600/50 text-white rounded px-2 py-1 transition duration-300 ease-in-out">
    検査を受託する
</a>



                    {{-- <a href="{'/skyway2'}">
                        <button
                            class="h-14 w-40 shadow-lg bg-green-500 hover:bg-green-600 shadow-green-500/50 hover:shadow-green-600/50 text-white rounded px-2 py-1 transition duration-300 ease-in-out">検査を受託する</button>
                    </a> --}}
            </div>
        </div>

    </div>
</x-app-layout>
