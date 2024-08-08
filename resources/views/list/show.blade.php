<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css','resources/js/app.js'])
    <title>Document</title>
</head>
<body>

    <div class=" border-2 border-gray-500 mt-2 container items-center text-center max-w-md w-full mx-auto rounded-lg shadow-lg p-5">
        <div  class="block max-w-sm p-6 bg-blue-200 border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
            <p class="mb-2 p-9 font-lg text-gray-900">Team Name {{$list->name}}</p>
            <p class="mb-2 p-9 font-lg text-gray-900">Club Name {{$list->club}} </p>
            <p class="mb-2 p-9 font-lg text-gray-900">Matches {{$list->country}} </p>
            <p class="mb-2 p-9 font-lg text-gray-900">Trophy{{$list->trophy}} </p>
            <p class="mb-2 p-9 font-lg text-gray-900">Other Trophy {{$list->category->name}} </p>
             <a href="{{route('list.index')}}"class="focus:outline-none mt-5 text-white bg-purple-700 hover:bg-purple-800 focus:ring-4 focus:ring-purple-300 font-medium rounded-lg text-sm px-5 py-2.5 mb-2 dark:bg-purple-600 dark:hover:bg-purple-700 dark:focus:ring-purple-900">Purple</a>

        </div>

    </div>

</body>
</html>
