<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>CRUD API</title>
</head>
<body class="bg-slate-900 w-full h-full">
    <head>
        <x-navbar />
    </head>
    <main class="flex flex-col items-center">
        <x-title />
        <div class="w-[60rem] bg-white p-6 rounded-3xl overflow-y-scroll no-scrollbar">
            <x-row />
        </div>
    </main>
</body>
</html>