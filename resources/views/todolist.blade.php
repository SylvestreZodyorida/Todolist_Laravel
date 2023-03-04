
@extends("layouts.master")

@section("contenu")
<br><br><br><br><br><br>
    <div class="container">
        <div class="card shadow-sm">
            <div class="card-body all">
                <h3>Todolist 📚  @if(count($todolists))
                        <span class="car-footer text-center mt-3  notif-footer3">
                            @if(count($todolists)=== 1 )
                                1
                            @elseif(count($todolists)> 1 )
                                {{ count($todolists) }}
                            @endif
                        </span>
                    @endif
                </h3>
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
                                    <span class="date_creation float-end">
                                        Ajouté en :  {{$todolist->created_at}}
                                    </span>
                                </form>

                            </li><br>

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
