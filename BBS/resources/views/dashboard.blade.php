<x-app-layout>
    <x-slot name="title">ダッシュボード</x-slot>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}（あなたの記事一覧）
        </h2>
    </x-slot>

    @foreach ($posts as $post)
        <div class="border rounded-xl border-blue-500 mt-10 mb-5 pl-10 mr-96 ml-96">
            <div class="flex pt-5">
                <img class="h-10 w-10" src="{{asset('storage/domaso.png')}}" alt="">
                <p class="text-lg mt-2 mb-2">{{ $post->user->name }}</p>
            </div>
            <p class="text-2xl pt-3 pb-5"><a class="hover:text-gray-500" href="{{ route('post', $post['id'])}}">{{ Str::limit($post['title'], 30, '...') }}</a></p>
            <p class="text-gray-400">{{ Str::limit($post['content'], 80, '…' ) }}</p>
            <p class="text-xs mt-5">{{ (new DateTime($post['created_at']))->format("Y年m月d日") }}</p>
            <div class="flex flex-row-reverse gap-5 mr-10 mb-3">
                <form method="POST" action="{{ route('delete', $post['id']) }}">
                    @csrf
                    <button class="underline hover:text-red-500" onclick='return confirm("タイトルが「{{ $post->title }}」の記事を削除しますか？");'>削除</button>
                </form>
                <p><a class="underline hover:text-blue-500" href="{{ route('edit', $post['id']) }}">編集</a></p>
            </div>
        </div>
    @endforeach
</x-app-layout>