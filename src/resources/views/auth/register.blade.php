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
                                Inscrivez vous afin d'acceder au contenu de formation,
                                si vous avez déja un compte vous pouvez vous connecter <a href="{{ route('login') }}" class="text-light">ici</a>.
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
                                <small>Inscription</small>
                            </div>
                            <form  method="POST" action="{{ route('register') }}">
                                @csrf
                                @input(['name' => 'first_name', 'type' => 'text'])
                                    @slot('preprend')
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="ni ni-hat-3"></i></span>
                                        </div>
                                    @endslot
                                @endinput
                                @input(['name' => 'last_name', 'type' => 'text'])
                                    @slot('preprend')
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="ni ni-hat-3"></i></span>
                                        </div>
                                    @endslot
                                @endinput
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
                                @input(['name' => 'password_confirmation', 'type' => 'password'])
                                    @slot('preprend')
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                                        </div>
                                    @endslot
                                @endinput
                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary my-4">S'inscrire</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-12 text-right">
                            <a href="{{ route('login') }}" class="text-light"><small>Se connecter</small></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
