<x-layout>

    <div class="card bg-neutral p-6">
        <small> Your thought :
    
        <div> {{ $article->description }} <i class="text-sm text-red-200">{{ $article->state }} </i> </div>

        </small>

        <a href=" /articles/{{ $article->id }}/edit">
        <button type="submit" class="rounded-md bg-indigo-500 px-3 py-2 text-sm font-semibold text-white focus-visible:outdivne-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500">Edit</button>

        </a>

    </div>

    <form action="/articles/{{ $article->id }}" method="POST">
        @csrf
        @method("DELETE")

        <a href=" /articles/{{ $article->id }}/delete">
        <button type="submit" class="rounded-md bg-red-500 px-3 py-2 text-sm font-semibold text-white focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500">Delete</button>
        </a>
    </form>

</x-layout>
