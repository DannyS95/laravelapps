<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Tweetz</title>
    <link rel="stylesheet" href="https://bootswatch.com/4/cerulean/bootstrap.min.css">
    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css"
          rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <a class="navbar-brand" href="/">My Tweetz</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation" style="">
            <span class="navbar-toggler-icon"></span>
        </button>
    </nav>
    <div class="container">
        @if (!empty($data))
            @foreach($data as $key => $tweet)
                <div class="card">
                    <div class="card-body mb-4">
                        <h3>
                            {{ $tweet['text'] }}
                            <i class=" glyphicon glyphicon-heart">{{ $tweet['favorite_count']
                            }}</i>
                            <i class=" glyphicon glyphicon-repeat">{{ $tweet['retweet_count']
                            }}</i>
                        </h3>
                    </div>
                </div>
            @endforeach
            @else
            <p>No Tweetz Found</p>
        @endif
    </div>
</body>

</html>