<!DOCTYPE html>
<html>
    <head>
        <title>Test pour Kaemo</title>
        <meta name="csrf-token" content="{{ csrf_token() }}" />

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        <link href="css/style.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <script src="jquery/jquery.min.js"></script>
        <script src="jqueryui/jquery-ui.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui-touch-punch/0.2.3/jquery.ui.touch-punch.min.js"></script> <!-- pas trouvé avec Composer -->
        <script src="js/script.js" type="text/javascript"></script>

    </head>
    <body style="background: url('img/1.jpg'); background-size: cover; background-position: center; background-attachment: fixed;">
        <div class="container">
            <div class="title">Test Drag n Drop</div>
            <ul class="list-group" id="sortable">
              @foreach ($movies as $movie)
                  <li class="list-group-item movie-container" id="{!! $movie->id !!}" style="background: url({!! $movie->url_picture !!}); background-size: cover; background-position: center; background-color: transparent; margin-bottom: 5px;">
                    <div class="movie-container">
                      <h2 class="movie-title">{!! $movie->title !!}</h2>
                      <div class="movie-duration">{!! $movie->duration !!}</div>
                      <div class="movie-director">Réalisateur : {!! $movie->director !!} </div>
                      <div class="movie-release">Date de sortie : {!! $movie->release_date !!} </div>
                    </div>
                  </li>
              @endforeach
            </ul>
        </div>
    </body>
</html>
