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
                    Id
                </th>
                <th scope="col" class="px-6 py-3">
                    Phone Number
                </th>
                <th scope="col" class="px-6 py-3">
                    Person Name
                </th>
            </tr>
        </thead>
        <tbody>
           @foreach ( $phones as $phone )
           <tr class="bg-white text-center items-center border-b dark:bg-gray-800 dark:border-gray-700">
            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                {{$loop->iteration}}
            </th>
            <td class="px-6 py-4">
                {{$phone->phone_number}}
            </td>
            <td class="px-6 py-4">
                {{$phone->person->name}}
            </td>
        </tr>
           @endforeach

        </tbody>
    </table>
</div>

         </section>
    </div>
</body>
</html>
