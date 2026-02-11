<x-layout>

    <form action=" {{ route('articles.store') }} " method="POST">
        @csrf
    <div class="col-span-full">
          <label for="idea" class="block text-sm/6 font-medium text-white">What's the new Idea</label>
          <div class="mt-2">

            <input type="text" name="title" id="title" placeholder="enter title">

            <textarea id="content" name="content" rows="3" class="
            textarea w-full
            @error('content')
              textarea-error
            @enderror
            "></textarea>

            <input type="file" name="cover_image" id="cover_image">

           <select name="category" id="category">
            <option value="1">Tech</option>
            <option value="2">Religion</option>
            <option value="3">life</option>
           </select>

          </div>
          <p class="mt-3 text-sm/6 text-gray-400">Keep your thoughts up-to-date!</p>

        <x-forms.error name="content" />

        @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
        

    <div class="mt-6 flex items-center gap-x-6">
        <button type="submit" class="rounded-md bg-indigo-500 px-3 py-2 text-sm font-semibold text-white focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500" data-idea-test='ideatest-button'>Save</button>
  </div>
</div>
    </form>


</x-layout>
