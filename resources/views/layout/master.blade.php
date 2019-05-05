<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="/css/style.css" />
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <meta charset="UTF-8" />
        <title>FAQ</title>
    </head>

    <body onload="getTitle();empty()">

    @include('layout.nav')

    <div class="container main-container">
        @yield('content')
    </div>


    </body>
    <script>
        function getTitle() {
            document.getElementById('titre').innerHTML = document.getElementById('page-name').innerHTML;
        }
        function empty(){

            for(var i=1;i<4;i++){
                if(document.getElementById('Demo'+`${i}`).childElementCount<1) {
                    document.getElementById('t' + `${i}`).style.display = "none";
                }
            }
        }
    </script>
</html>
