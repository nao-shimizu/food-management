<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('トップページ') }}
        </h2>
    </x-slot>

    <div class="pt-4">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-2 text-gray-900">
                    <div class="text-2xl text-center">本日の推奨料理</div>
                    <div class="text-center">うまい棒</div>
                    <x-primary-button>推奨料理変更</x-primary-button>
                    <p>画像</p>
                </div>
            </div>
            <div class="mt-5 bg-white overflow-hidden shadow-sm sm:rounded-lg">
            </div>
        </div>
    </div>

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-2 text-gray-900">

                </div>
            </div>
        </div>
</x-app-layout>
