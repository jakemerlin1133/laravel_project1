<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Document</title>
</head>
<body>

    <ul>
        @foreach ($students as $student)
            <li class="bg-red-700 mb-2 py-2 text-center text-3xl font-bold underline">{{ $student->first_name }} {{ $student->last_name }} - {{ $student->age }}</li>
        @endforeach
    </ul>

</body>
</html>
