<x-layout>

    @if ($article )
    <div class="mt-6 ">

    <h3> Your Wiki-thoughts are : </h3>
    <ul class="mt-6 grid grid-cols-2 gap-x-6 gap-y-4">
    @foreach($article as $art)
        <x-article-card href="{{ route('article.show', ['art'=>$art->id] ) }}" >
            {{ $art->content }} <i class="text-sm text-red-400">{{ $art->cover_image }} </i>
        </x-article-card>
        

        @endforeach
        </ul>
        @else
        <p class="text-gray-300 mt-6"> No New thoughts yet. <a href="/article/create">Create a new One</a> </p>
        @endif
       
    </div>

</x-layout>
