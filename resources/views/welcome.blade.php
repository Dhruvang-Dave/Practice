<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://cdn.tailwindcss.com"></script>

        <title>Employee</title>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">

    <form action="#" method="get">
                        <!-- @csrf -->
                        Form :- <br>
                        Search for Salary of Employee:- <input type="search" name="search" id="search" class="border border-dark m-2"><br>
                        <!-- Search for Transaction of Employee:- <input type="search" name="Transaction" id="Transaction" class="border border-dark m-2"><br> -->
                        <br>
        
                        <button type="submit" class="bg-blue-500 text-white px-2 py-1 rounded-xl">Submit</button>
        </form>

        Content :- {!! $emp->name !!}
    
    </body>
</html>
