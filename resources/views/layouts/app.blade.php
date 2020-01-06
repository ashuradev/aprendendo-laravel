<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Simples app</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Roboto, sans-serif;
            font-size: 14px;
            color: #333;
        }

        aside,
        main {
            display: inline-block;
            vertical-align: center;
            margin-right: 50px;
            margin-top: 30px;
        }
    </style>
</head>

<body>
    <aside>
        @section('sidebar')
            rs esse é o pai ahhahaha
        @endsection
    </aside>

    <main>
        @yield('content')
    </main>
</body>

</html>
