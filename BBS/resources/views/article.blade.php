<x-guest-layout>
    <h1 class="mt-10">Laravel 掲示板</h1>
    <p>ここは質問、アウトプット用の掲示板になります</p>
    <h2>みんなの記事一覧</h2>
    {{-- <table class="table-auto border rounded-3xl border-blue-500 mt-10 pl-10 pr-10 pt-5 pb-10" style="border-collapse: separate; border-spacing: 0">
        <tr class="">
            <th class="border-b border-blue-500 px-4 py-2 text-center">タイトル</th>
            <th class="border-b border-l border-r border-blue-500 px-4 py-2 text-center">内容</th>
            <th class="border-b  border-blue-500 px-2 py-2 text-center">コメント数</th>
            <th class="border-b  border-blue-500 px-2 py-2 text-center">レビュー</th>
        </tr>
        @foreach ($posts as $post)
            <tr>
                <td class="border-b border-blue-500 px-4 py-2">
                <a href="{{ route('post', $post['id']) }}" class="hover:text-gray-500">{{ Str::limit($post['title'], 15, '...') }}</a>
                </td>
                <td class="border-b border-l border-r border-blue-500 px-4 py-2">{{ Str::limit($post['content'], 30, '...') }}</td>
                <td class="border-b border-blue-500 px-2 py-2 text-right">{{ $post->comments()->count() }}</td>
                <td class="border-b border-blue-500 px-2 py-2 text-right">レビュー</td>
            </tr>
        @endforeach
    </table> --}}

		@foreach ($posts as $post)
			<div class="border rounded-xl border-blue-500 mb-5 pl-10">
				<p class="text-lg mt-2 mb-2">{{ $post->user->name }}</p>
				<p class="text-xs mt-1">{{ (new DateTime($post['created_at']))->format("Y年m月d日") }}</p>
				<p class="text-2xl pb-10 hover:text-gray-500"><a href="{{ route('post', $post['id'])}}">{{ Str::limit($post['title'], 30, '...') }}</a></p>
			</div>
		@endforeach
</x-guest-layout>