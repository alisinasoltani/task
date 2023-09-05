<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    {{-- <link href="https://cdn.jsdelivr.net/npm/daisyui@3.6.4/dist/full.css" rel="stylesheet" type="text/css" /> --}}
    <title>CRUD API</title>
</head>
<body class="bg-slate-900 w-full h-full">
    <head>
        <x-navbar />
    </head>
    <main class="flex flex-col items-center">
        <x-title />
        @auth
            <div class="w-[70rem] h-[30rem] bg-white p-6 overflow-y-scroll no-scrollbar">
                @foreach ($customers as $customer)
                <div class="w-full mb-2 bg-gray-200 text-black px-4 py-6 rounded-lg flex flex-row justify-evenly items-center">
                    <div>{{ $customer["FirstName"] }}</div>
                        <div>{{ $customer["LastName"] }}</div>
                        <div>{{ $customer["DateOfBirth"] }}</div>
                        <div>{{ $customer["PhoneNumber"] }}</div>
                        <div>{{ $customer["Email"] }}</div>
                        <div>{{ $customer["BankAccountNumber"] }}</div>
                        <div class="flex flex-row gap-2">
                            <button class="btn btn-sm btn-warning"><a href="/edit/{{ $customer["id"] }}">Edit</a></button>
                            <button class="btn btn-sm btn-danger"><a href="/delete/{{ $customer["id"] }}">Delete</a></button>
                        </div>
                    </div>
                @endforeach
            </div>
        @endauth
    </main>
</body>
</html>