@extends('layouts.global')

@section('class-body', 'bg-default')

@section('content')
    <div class="main-content">
        <div class="header bg-gradient-primary py-7 py-lg-8">
            <div class="container">
                <div class="header-body text-center mb-7">
                    <div class="row justify-content-center">
                        <div class="col-lg-5 col-md-6">
                            <h1 class="text-white">Bienvenu !</h1>
                            <p class="text-lead text-light">
                                Connecter vous afin d'acceder au contenu de formation,
                                si vous n'avez pas de compte vous pouvez en crée un <a href="{{ route('register') }}" class="text-light">ici</a>.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="separator separator-bottom separator-skew zindex-100">
                <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
                    <polygon class="fill-default" points="2560 0 2560 100 0 100"></polygon>
                </svg>
            </div>
        </div>
        <div class="container mt--8 pb-5">
            <div class="row justify-content-center">
                <div class="col-lg-5 col-md-7">
                    <div class="card bg-secondary shadow border-0">
                        <div class="card-body px-lg-5 py-lg-5">
                            <div class="text-center text-muted mb-4">
                                <small>Connexion</small>
                            </div>
                            <form  method="POST" action="{{ route('login') }}">
                                @csrf
                                @input(['name' => 'email', 'type' => 'email'])
                                    @slot('preprend')
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                                    </div>
                                    @endslot
                                @endinput
                                @input(['name' => 'password', 'type' => 'password'])
                                @slot('preprend')
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                                    </div>
                                @endslot
                                @endinput
                                <div class="custom-control custom-control-alternative custom-checkbox">
                                    <input class="custom-control-input" id=" customCheckLogin" type="checkbox">
                                    <label class="custom-control-label" for=" customCheckLogin">
                                        <span class="text-muted">Se rappeler de moi ?</span>
                                    </label>
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary my-4">Se connecter</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-6">
                            <a href="{{ route('password.request') }}" class="text-light"><small>Mot de passe oublié ?</small></a>
                        </div>
                        <div class="col-6 text-right">
                            <a href="{{ route('register') }}" class="text-light"><small>S'inscrire</small></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
