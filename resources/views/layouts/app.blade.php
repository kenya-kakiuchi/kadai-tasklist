<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>MessageBoard</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    </head>

    <body>
        <header class="mb-4">
            <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
                <a class="navbar-brand" href="/">MessageBoard</a>
                
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#nav-bar">
                    <span class="navbar-toggler-icon"></span>
                </button>
                
                <div class="collapse navbar-collapse" id="nav-bar">
                    <ul class="navbar-nav mr-auto"></ul>
                    <ul class="navbar-nav">
                    @if(Auth::check())
                        <li class="nav-item">{!! link_to_route('tasks.create', '新規タスクの投稿', [], ['class' => 'nav-link']) !!}</li>
                        <li class="nav-item">{!! link_to_route('logout.get', 'logout', [], ['class' => 'nav-link']) !!}</li>
                    @else
                        <li class="nav-item">{!! link_to_route('signup.get', 'signup', [], ['class' => 'nav-link']) !!}</li>
                        <li class="nav-item">{!! link_to_route('login', 'login', [], ['class' => 'nav-link']) !!}</li>
                    @endif
                    </ul>
                </div>
            </nav>
        </header>
        
        <div class="container">
            @include('commons.error_messages')
            
            @yield('content')
        </div>
        
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
        <script defer src="https://use.fontawesome.com/releases/v5.2.0/js/all.js"></script>
    </body>
</html>