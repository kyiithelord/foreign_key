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
         <header class="bg-green-500 px-4 mb-2 font-bold text-xl">FotMod</header>


            <section class='bg-white-800 shadow-lg rounded-lg w-3/6 m-5 d-flex mx-auto items-center justify-between py-1 '>
                <form class="w-full  d-flex mx-auto-4 items-center" action="{{route('phone.store')}}" method="POST">
                    @csrf
                    <div class="items-center p-2 mb-2 ">
                        <label for="phone_number" class=" font-medium ">Phone Number</label>
                        <input type="text" name="phone_number" id="phone_number" class=" w-full border-2 rounded-lg shadow-lg font-medium">
                    </div>

                    <div class="mb-4">
                            <label for="countries" class="block mb-2 text-xl font-medium text-gray-900 dark:text-white">Select A Person</label>
                            <select id="countries" name="person_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option selected>Choose Person</option>
                                @foreach ($persons as $person)
                                 <option value="{{$person->id}}">{{$person->name}}</option>
                                @endforeach
                            </select>

                    </div>
                    <button type="submit" class="text-black w-full bg-gradient-to-r from-green-400 via-green-500 to-green-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-green-300 dark:focus:ring-green-800 shadow-lg shadow-green-500/50 dark:shadow-lg dark:shadow-green-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-1 mb-1">Create</button>

                </form>
            </section>

    </div>
</body>
</html>
