<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Todolist</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
</head>
<body>
    <header class="container">
        <nav class="row">
            <span class="col-md-4 logo logo">Laravel Todolist</span>
        </nav>
    </header>
    <main class="container ">
        <div class="container ">
            <div class="card shadow-sm">
                <div class="card-body all">
                    <h3>Todolist 📚</h3>
                    <form action="{{ route('store') }}" method="POST"  autocomplete="off">
                        @csrf
                        <div class="input-group">
                            <input type="text" name="content" class="form-control" placeholder="Ajouter un nouveau todo element">
                            <button type="submit" class="btn btn-dark btn-sm px-4"><i class="fas fa-plus"></i></button>
                        </div>
                    </form>
                    @if(count($todolists))
                        <ul class="list-group list-group-flush mt-3">
                            @foreach($todolists as $todolist)
                                <li class="list-group-item">
                                    <form action="{{ route('destroy',$todolist->id) }}" method="post">
                                        {{$todolist->content}}
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-link btn-sm float-end"><i class="fas fa-trash"></i></button>
                                    </form>
                                </li>
                            @endforeach
                        </ul>
                    @else
                    <p class="text-center mt-3 notif-footer1"> La liste est vide ! 💁‍♂️  Saisissez quelque chose pour ajouter de contenu .</p>
                    @endif
                </div>
                @if(count($todolists))
                    <div class="car-footer text-center mt-3  notif-footer2">
                        @if(count($todolists)=== 1 )
                            Vous avez une seule chose à faire .
                        @elseif(count($todolists)> 1 )
                            Vous avez {{ count($todolists) }}    choses à faire .
                        @endif
                    </div>
                @endif
            </div>
        </div>
    </main>
    <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('js/app.js')}}"></script>
</body>
</html>
