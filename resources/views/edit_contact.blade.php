@extends("layouts.master")

@section("contenu")
<br><br><br><br><br><br>

<div class="container">
    <div class="row  justify-content-center">
        <div class="col-md-8">
            <div class="card hed_login">
                <div class="card-header"> Editer un contact existant @if(session()->has("success"))
                    <div class="msg_success"> {{ session()->get('success') }}</div>
                    @endif
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('contact.update', ['contact'=>$contact->id]) }}" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-3">
                            <label for="name"  class="col-md-4 col-form-label text-md-end">{{ __('Nom') }}</label>

                            <div class="col-md-6">
                                <input id="name" placeholder="Nom" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{$contact->name}}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="surname"  class="col-md-4 col-form-label text-md-end">{{ __('Prénom') }}</label>

                            <div class="col-md-6">
                                <input id="surname" placeholder="Prénom" type="text" class="form-control @error('name') is-invalid @enderror" name="surname" value="{{$contact->surname}}" required autocomplete="surname" autofocus>

                                @error('surname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">Adresse mail</label>

                            <div class="col-md-6">
                                <input id="email" placeholder="exemple@gmail.com" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{$contact->email}}"  autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3 ">
                            <label for="Date_naiss" class="col-md-4 col-form-label text-md-end">Date de naissance</label>
                            <div class="row col-md-6">
                                <Select id="jour"   class=" form-control " name="jour">
                                    <option value="">{{$contact->jour}}</option>
                                    <option value="01">01</option>
                                    <option value="01">02</option>
                                    <option value="01">03</option>
                                    <option value="01">04</option>
                                    <option value="01">05</option>
                                    <option value="01">06</option>
                                    <option value="01">07</option>
                                    <option value="01">08</option>
                                    <option value="01">09</option>
                                    <option value="01">10</option>
                                    <option value="01">11</option>
                                    <option value="01">12</option>
                                    <option value="01">13</option>
                                    <option value="01">14</option>
                                    <option value="01">15</option>
                                    <option value="01">16</option>
                                    <option value="01">17</option>
                                    <option value="01">18</option>
                                    <option value="01">19</option>
                                    <option value="01">20</option>
                                    <option value="01">21</option>
                                    <option value="01">22</option>
                                    <option value="01">23</option>
                                    <option value="01">24</option>
                                    <option value="01">25</option>
                                    <option value="01">26</option>
                                    <option value="01">27</option>
                                    <option value="01">28</option>
                                    <option value="01">29</option>
                                    <option value="01">30</option>
                                    <option value="01">31</option>

                                </Select>
                                <Select id="mois"  class=" form-control " name="mois">
                                    <option value="">{{$contact->mois}}</option>
                                    <option value="janvier">Janvier</option>
                                    <option value="01">Février</option>
                                    <option value="01">Mars</option>
                                    <option value="01">Avril</option>
                                    <option value="01">Mai</option>
                                    <option value="01">Juin</option>
                                    <option value="01">Juillet</option>
                                    <option value="01">Août</option>
                                    <option value="01">Septembre</option>
                                    <option value="01">Octobre</option>
                                    <option value="01">Novembre</option>
                                    <option value="01">Décembre</option>

                                </Select>
                                <Select id="annee"  class=" form-control " name="annee">
                                    <option value="">{{$contact->annee}}</option>
                                    <option value="">1996</option>
                                    <option value="01">01</option>
                                    <option value="01">01</option>
                                    <option value="01">01</option>
                                    <option value="01">01</option>
                                    <option value="01">01</option>
                                    <option value="01">01</option>
                                    <option value="01">01</option>
                                    <option value="01">01</option>
                                    <option value="01">01</option>
                                    <option value="01">01</option>

                                </Select>
                            </div>
                        </div>
                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Modifier le contact
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
