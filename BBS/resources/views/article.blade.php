<x-guest-layout>
    <h1 class="mt-10">Laravel 掲示板</h1>
    <p>ここは質問、アウトプット用の掲示板になります</p>
    <h2>みんなの記事一覧</h2>
    <div class="flex flex-wrap items-center justify-center w-screen p-10">
		@foreach ($posts as $post)
			<div class="border rounded-xl border-blue-500 mr-5 ml-5 mb-5 pl-10 w-2/6">
				<p class="text-lg mt-2 mb-2">{{ $post->user->name }}</p>
				<p class="text-xs mt-1">{{ (new DateTime($post['created_at']))->format("Y年m月d日") }}</p>
				<p class="text-2xl pb-10 hover:text-gray-500"><a class="no-underline" href="{{ route('post', $post['id'])}}">{{ Str::limit($post['title'], 30, '...') }}</a></p>
			</div>
		@endforeach
    </div>
</x-guest-layout>