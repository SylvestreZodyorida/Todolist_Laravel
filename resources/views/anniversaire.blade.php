@extends("layouts.master")

@section("contenu")
<br><br><br><br><br>

<div class="container">
    <section class="pg_list_ctct">
        <h3>Liste des contacts
                @if(session()->has("successDelete"))
                    <span class="msg_success">{{ session()->get('successDelete') }}</span>
                @endif
        </h3>

        @foreach($contacts as $contact)

            <li  class="tb_cent" scope="row">{{ $loop->index +  1}} {{ $now }} </li>
            <li class="tb_cent" >{{ $contact->name  }}</li>
            <li class="tb_cent" >{{ $contact->surname }}</li>
            <li class="tb_cent" >{{ $contact->jour .'/'.$contact->mois.'/'.$contact->annee}}</li>
        @endforeach
            </tbody>
        </table>
    </section>
</div>
