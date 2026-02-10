@props([
    'title' => 'Personal Blog',
])

<!DOCTYPE html>
<html lang="en" >
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> {{ $title }} </title>

    {{-- @vite([ 'resources/css/app.css', 'resources/js/app.css' ]) --}}

</head>
<body class="text-pink">
    <x-nav />

    <main class="max-w-3xl mx-auto mt-6">
    {{ $slot }}
    </main>

{{-- the origin of totalitarianism Hannah arendt
seeing like a state james c scott --}}

</body>
</html>
