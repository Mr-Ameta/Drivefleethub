<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('/css/style.css') }}" rel="stylesheet"> 
    @stack('title')
</head>
<body>
    <nav class="navigation">
        <div class="logo">
           <a href="/"> DriveFleetHub</a>
        </div>
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Book Car</a></li>
            <li class="dropdown">
                <a href="#" class="dropbtn">Sell Car <ion-icon name="caret-down-outline"></ion-icon></a>
                <div class="dropdown-content">
                  <a href="#">Buy Car</a>
                </div>
              </li>
            <li><a href="#">Contact</a></li>
        </ul>
    </nav>
