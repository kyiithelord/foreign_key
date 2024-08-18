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
         <section>


<div class="relative overflow-x-auto">
    <table class="w-full text-sm text-center rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs shadow-lg text-black uppercase bg-gray-200 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    #
                </th>
                <th scope="col" class="px-6 py-3">
                    Name
                </th>
                <th scope="col" class="px-6 py-3">
                    Club
                </th>
                <th scope="col" class="px-6 py-3">
                    Match
                </th>
                <th scope="col" class="px-6 py-3">
                    Trophy
                </th>
                <th scope="col" class="px-6 py-3">
                    Other Trophy
                </th>

                <th scope="col" class="px-6 py-3">
                    Status
                </th>
                <th scope="col" class="px-6 py-3">
                    View
                </th>
                <th scope="col" class="px-6 py-3">
                    Action
                </th>
            </tr>
        </thead>
        <tbody>
           @foreach ( $lists as $list )
           <tr class="bg-white text-center items-center border-b dark:bg-gray-800 dark:border-gray-700">
            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                {{$loop->iteration}}
            </th>
            <td class="px-6 py-4">
                {{$list->name}}
            </td>
            <td class="px-6 py-4">
                {{$list->club}}
            </td>
            <td class="px-6 py-4">
                {{$list->country}}
            </td>
            <td class="px-6 py-4">
                {{$list->trophy}}
            </td>
            <td class="px-6 py-4">
                {{$list->category->name}}
            </td>
            <td class="px-6 py-4">
                {{$list->status}}
            </td>
            <td class="px-6 py-4">
                <a href="{{route('list.show',$list->id)}}" class="text-gray-900 bg-gradient-to-r from-lime-200 via-lime-400 to-lime-500 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-lime-300 dark:focus:ring-lime-800 shadow-lg shadow-lime-500/50 dark:shadow-lg dark:shadow-lime-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">More</a>
            </td>

            <td class="px-6 py-4">
                    <a href="{{route('list.edit',$list->id)}}" type="button" class="text-black bg-green-500 from-cyan-400 via-cyan-500 to-cyan-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-cyan-300 dark:focus:ring-cyan-800 shadow-lg shadow-cyan-500/50 dark:shadow-lg dark:shadow-cyan-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-1 mb-1">Edit</a>

                    <form class="inline-block" action="{{route('list.destroy',$list->id)}}" method="POST">
                        @csrf
                        @method('delete')
                         <button type="submit" class="text-black  bg-red-500 from-red-400 via-red-500 to-red-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 shadow-lg shadow-red-500/50 dark:shadow-lg dark:shadow-red-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-1 mb-1">Delete</button>

                    </form>

            </td>
        </tr>
           @endforeach

        </tbody>
    </table>
    {{$lists->links('pagination::tailwind')}}
</div>

         </section>
    </div>
</body>
</html>
