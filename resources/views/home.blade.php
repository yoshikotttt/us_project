<x-app-layout>
    <div>
        <button class="button"><a href="{{ route('detail') }}" class="button">詳細入力</button>
        <div class="user-info">
            受託アクティブ 30人
        </div>

        <div class="mt-4">
            <h3 class="text-xl text-blue-500 mb-2">検査を依頼したい</h3>
            <button class="button">心臓</button>
            <a href="{{ route('search') }}" class="button">腹部（上腹部）</a>
            <button class="button">腹部（下腹部）</button>
            <button class="button">表在</button>
        </div>
    </div>
</x-app-layout>
