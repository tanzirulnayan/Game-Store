<!DOCTYPE html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Game Store</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>
        
        <h1>Game Store</h1>
        <br><br>
        <h1 align="center" > Welcome {{session('loggedUser')}} !!!</h1>
        <br><br>
        <a href={{route('logout.index')}}>Logout</a>
    </body>
</html>