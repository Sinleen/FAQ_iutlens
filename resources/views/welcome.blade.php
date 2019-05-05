<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="/css/welcome-style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <meta charset="UTF-8"/>
    <title>FAQ</title>
</head>

<body>

<div class="bgimg w3-display-container w3-animate-opacity w3-text-white">
        <div class="w3-display-topleft w3-padding-large w3-xlarge">
        <img class="style-img" src="{{asset('img/logo.png')}}">
    </div>
    <div class="w3-display-topright w3-padding-large w3-xlarge">
        <a href="/help">
            <i class="fas fa-question"></i>
        </a>
    </div>
    <div class="w3-display-middle">
        <h1 class="w3-jumbo w3-animate-top">Foire aux questions</h1>
        <hr class="w3-border-grey" style="margin:auto;width:40%;">
        <div class="w3-bar w3-center">
            @guest
                    <button onclick="location.href='/'" class="w3-btn w3-white">Accueil</button>
                    <button onclick="location.href='/listequestions'"class="w3-button w3-white">Liste des questions</button>
                    <button onclick="location.href='/login'"class="w3-button w3-white">Login</button>
                    <button onclick="location.href='/register'"class="w3-button w3-white">Register</button>
            @endguest
            @auth
                    <button onclick="location.href='/'" class="w3-btn w3-white">Accueil</button>
                    <button onclick="location.href='/listequestions'"class="w3-button w3-white">Liste des questions</button>
                    <button onclick="location.href='/ajoutquestion'" class="w3-btn w3-white">Ajout d'une questions</button>
                    @if(Auth::user()->hasRole('admin'))
                        <button onclick="location.href='/managequestion'" class="w3-btn w3-white">Gérer les questions</button>
                    @endif
                    <button class="w3-btn w3-white" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</button>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
            @endauth
        </div>
        <div class="w3-bar w3-center">
            @auth
                Welcome {{Auth::user()->name}} !
            @endauth
        </div>
    </div>
</div>


</body>
</html>
