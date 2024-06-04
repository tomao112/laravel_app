<x-guest-layout>
  <div class="flex items-center">
    <div class="flex flex-col items-center justify-center">
      <img src="{{ asset('storage/domaso.png') }}" alt="">
      <h1 class="sans">エンジニアoutput広場</h1>
      <div class="flex">
        <x-article-up-button />
        <x-create-article-button />
      </div>
    </div>
  </div>
</x-guest-layout>