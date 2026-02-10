@props([
    'name' => 'required'
])

@error($name)
    <p class="text-sm/6 text-red"> {{ $message }} </p>
@enderror
