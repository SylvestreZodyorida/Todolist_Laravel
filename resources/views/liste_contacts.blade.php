@extends("layouts.master")

@section("contenu")
<br><br><br><br><br><br>

<div class="container">
    <section class="pg_list_ctct">
        <div class="top">
            <h3>Liste des contacts
                    @if(session()->has("successDelete"))
                        <span class="msg_success">{{ session()->get('successDelete') }}</span>
                    @endif
            </h3>   
        </div>
        <table class="container table">
            <thead>
                <tr>
                    <th class="tb_cent" scope="col"># &nbsp; </th>
                    <th class="tb_cent"  scope="col">Nom &nbsp; </th>
                    <th class="tb_cent"  scope="col">Prénom &nbsp; </th>
                    <th  class="tb_cent" scope="col">Email &nbsp; </th>

                </tr>
            </thead>
            <tbody>
                @foreach($contacts as $contact)
                <tr>
                    <td  class="tb_cent" scope="row">{{ $loop->index + 1}} </td>
                    <td class="tb_cent" >{{ $contact->name }}</td>
                    <td class="tb_cent" >{{ $contact->surname }}</td>
                    <td class="tb_cent" >{{ $contact->email }}</td>
                    <td class="tb_cent" >
                        <a class="btn btn-warning btn-block " href="{{ route('contact.edit', ['contact'=>$contact->id]) }}">📝</a>
                    </td>
                    <td class="tb_cent" >
                        <a class="btn btn-primary " href="#" onclick="if(confirm('Confirmer la suppression ?')){document.getElementById('form-{{$contact->id}}').submit() }"><i class="fas fa-trash"></i></a>
                    </td>
                    <form id="form-{{$contact->id}}" action="{{route('contact.delete', ['contact'=>$contact->id])}}" method="post">
                        @csrf
                        <input type="hidden" name="_method" value="delete">
                    </form>
                </tr>
                @endforeach
            </tbody>
        </table>
    </section>
</div>
