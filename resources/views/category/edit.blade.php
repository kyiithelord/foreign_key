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
                        <form class="w-full  d-flex mx-auto-4 items-center" action="{{route('category.update',$category->id)}}" method="POST">
                            @csrf
                            @method('put')
                            <div class="items-center p-2 mb-2 ">
                                <label for="name" class=" font-medium">Name</label>
                                <input type="text" name="name" id="name" class=" w-full border-2 rounded-lg shadow-lg font-medium @error('name') border-red-600 @enderror"  value="{{old('name',$category->name)}}">
                                @error('name')
                                    <p class="text-red-600"> {{$message}} </p>
                                @enderror
                            </div>

                            <div class="items-center p-2 mb-2 ">
                                <label for="description" class=" font-medium ">Other Title</label>
                                <input type="text" name="description" id="description" class=" w-full border-2 rounded-lg shadow-lg font-medium @error('description') border-red-600 @enderror " value="{{old('description',$category->description)}}">
                                @error('description')
                                    <p class="text-red-600"> {{$message}} </p>
                                @enderror
                            </div>

                            <div class="items-center p-2 mb-2 ">
                                <label for="year" class=" font-medium ">Year</label>
                                <input type="text" name="year" id="year" class=" w-full border-2 rounded-lg shadow-lg font-medium @error('year') border-red-600 @enderror" value="{{$category->year}}">
                                @error('year')
                                    <p class="text-red-600"> {{$message}} </p>
                                @enderror
                            </div>


                            <button type="submit" class="text-black w-full bg-gradient-to-r from-green-400 via-green-500 to-green-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-green-300 dark:focus:ring-green-800 shadow-lg shadow-green-500/50 dark:shadow-lg dark:shadow-green-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-1 mb-1">Update</button>

                        </form>
            </section>
    </div>
</body>
</html>
