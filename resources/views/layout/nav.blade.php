<div id="header">
    <div class="w3-bar" style="color:white;">
        <a href="/" class="w3-bar-item w3-button">Accueil</a>
        <a href="/listequestions" class="w3-bar-item w3-button">Liste des questions</a>
        @guest
            <a href="/login" class="w3-bar-item w3-button">Login</a>
            <a href="/register" class="w3-bar-item w3-button">Register</a>
        @endguest
        @auth
            <a href="/ajoutquestion"  class="w3-bar-item w3-button">Ajout d'une questions</a>
            @if(Auth::user()->hasRole('admin'))
                <a href="/managequestion" class="w3-bar-item w3-button">Gérer les questions</a>
            @endif
            <a href="{{ route('logout') }}" class="w3-bar-item w3-button" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form>
        @endauth
        <a href="/help" class="w3-bar-item w3-button">Aide</a>
    </div>

    <center><h1 id="titre" style="color:white;margin-top:4vh;">Foire aux questions</h1></center>

</div>

<script>
</script>