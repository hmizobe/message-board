<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        
        <!-- ここでレスポンシブルにする-->
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        

        <title>MessageBoard</title>
        
        
        <!-- ここでbootstrapとリンク-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>

    <body>
        <!-- ここでnavbarを挿入するの巻-->
        @include('commons.navbar')
        
        
        @include('commons.error_messages')
        @yield('content')
    </body>
</html>