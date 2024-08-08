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
    <div class="container-fluid mx-auto">
            <header class="bg-green-500 px-4 mb-2  font-bold text-xl">FotMod</header>


            <section class='bg-white-800 shadow-lg rounded-lg w-3/6 m-5 d-flex mx-auto items-center justify-between py-1 '>
                        <form class="w-full  d-flex mx-auto-4 items-center" action="{{route('list.update',$list->id)}}" method="POST">
                            @csrf
                            @method('put')
                            <div class="items-center p-2 mb-2 ">
                                <label for="name" class=" font-medium">Name</label>
                                <input type="text" name="name" id="name" class=" w-full border-2 rounded-lg shadow-lg font-medium" value="{{$list->name}}">
                            </div>

                            <div class="items-center p-2 mb-2 ">
                                <label for="club" class=" font-medium ">Club</label>
                                <input type="text" name="club" id="club" class=" w-full border-2 rounded-lg shadow-lg font-medium" value="{{$list->club}}">
                            </div>

                            <div class="items-center p-2 mb-2 ">
                                <label for="country" class=" font-medium ">Match</label>
                                <input type="text" name="country" id="country" class=" w-full border-2 rounded-lg shadow-lg font-medium" value="{{$list->country}}">
                            </div>

                            <div class="items-center p-2 mb-2 ">
                                <label for="trophp" class=" font-medium ">Trophy</label>
                                <input type="text" name="trophy" id="trophy" class=" w-full border-2 rounded-lg shadow-lg font-medium" value="{{$list->trophy}}">
                            </div>

                            <div class="mb-4">
                                <label for="countries" class="block mb-2 text-xl font-medium text-gray-900 dark:text-white">Select A Trophy You Like</label>
                                <select id="countries" name="category_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    <option selected>Choose Trophy</option>
                                    @foreach ($categories as $category)
                                     <option value="{{$category->id}}" {{$list->category_id == $category->id ? 'selected' : ''}} >{{$category->name}}</option>
                                    @endforeach
                                </select>

                        </div>

                        <div class="mb-4 bg-gray-500 shadow-lg rounded-lg px-2 py-2">

                            <div class="flex items-center mb-4">
                                <input id="default-radio-1" {{$list->status == "achieve" ? "checked" : ''}} type="radio" value="achieve" name="status" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="default-radio-1" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Achieved</label>
                            </div>
                            <div class="flex items-center">
                                 <input  id="default-radio-2" {{$list->status == "fail" ? "checked" : ''}} type="radio" value="fail" name="status" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                 <label for="default-radio-2" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Fail</label>
                            </div>

                        </div>

                        <div class="flex justify-center">
                            <a href="{{route('list.index')}}" class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">Back</a>
                            <button type="submit" class="focus:outline-none text-white bg-purple-700 hover:bg-purple-800 focus:ring-4 focus:ring-purple-300 font-medium rounded-lg text-sm px-5 py-2.5 mb-2 dark:bg-purple-600 dark:hover:bg-purple-700 dark:focus:ring-purple-900">Update</button>
                        </div>

                        </form>
            </section>
    </div>
</body>
</html>
