<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
    
    @yield('title')
   
    </title>
    <style>
      nav{
      display:flex;
      flex-wrap:wrap;
      }
      nav a {
      text-decoration: none;
      display:block;
      padding: 15px 25px;
      text-align: center;
      background-color: rgb(189, 185, 185);
      color:#464141;
      margin:0;
      font-family:sans-serif;
      }
      nav a:hover {
      background-color: #777777;
      color:#ffffff;
      }
    </style>
</head>
<body>
<nav>
      <a href="#">Home</a>
      <a href="#">prodacts</a>
      <a href="#">abut</a>
    
    </nav>
</ul>



    </nav>

    @yield('content')
</body>
</html>