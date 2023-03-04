@extends('layouts.app')

@section('content')
<br><br><br><br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Vérifiez votre adresse mail') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('Un lien a déjà été envoyé à votre adresse mail.') }}
                        </div>
                    @endif

                    {{ __('Avant de continuer, veuillez consulter voutre mail pour la vérification du lien.') }}
                    {{ __('Si vous n'avez pas reçu votre mail') }},
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('Cliquez ici pour un autre') }}</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
