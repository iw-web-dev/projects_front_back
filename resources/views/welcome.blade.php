<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <style>
            .main_info{
                margin-bottom: 20px;
                font-size: 20px;
            }

            .data-head{
                height: 50px;
                width: 40%;
                border: 1px solid silver;
                display: inline-block;
                vertical-align: top;
                text-align: center;
                padding-top: 15px;
            }
        </style>
    </head>
    <body>
        @yield('content')
    </body>
</html>
