@extends('layouts.init')

@section('content')
<div class="conatiner">
    <div class="form">
        <div class="contact-info">
                <h3 class="contact_tittle">BIENVENIDO USUARIO</h3>
                <p class="contact_text">Mini Sistema de gestion de usuarios, Pedidos y detalles de pedidos, desarrollado en laravel.</p>

            <div class="contactos_info">
                <div class="contact_information">
                    <i class="fas fa-2x fa-user"></i>
                    <p>rodriguezrojaspedroluis@gmail.com</p>
                </div>
                <div class="contact_information">
                    <i class="fas fa-2x fa-user"></i>
                    <p>+58412-042-17-65</p>
                </div>
            </div>
            <div class="social_media">
                <div class="social-icons">
                        <p>Pedro Rodrìguez</p>
                </div>
            </div>
        </div>
        <div class="contact-form">
            <form method="POST" action="{{ route('register') }}" autocomplete="off">
            @csrf
                <h3 class="contact_tittle">REGISTRO DE USUARIO</h3>
                <div class="input-container">
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required  placeholder="Ingrese el Nombre" autofocus>
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong><h6 style="color:yellow;">{{ __('Error, campo nombre vacio') }}</h6></strong>
                            </span>
                        @enderror
                </div>
                <div class="input-container">
                    <input id="apellido" type="apellido" class="form-control @error('apellido') is-invalid @enderror" name="apellido" value="{{ old('apellido') }}" required placeholder="Ingrese el apellido" autofocus>
                        @error('apellido')
                            <span class="invalid-feedback" role="alert">
                                <strong><h6 style="color:yellow;">{{ __('Error, campo apellido vacio') }}</h6></strong>
                            </span>
                        @enderror
                </div>
                <div class="input-container">
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="EMAIL" autofocus>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong><h6 style="color:yellow;">{{ __('Por favor digite bien su usuario o contraseña') }}</h6></strong>
                            </span>
                        @enderror
                </div>
                <div class="input-container">
                    <input id="password" type="password" class="form-control  @error('password') is-invalid @enderror" name="password" required  placeholder="CONTRASEÑA" autocomplete="current-password"
                    minlength="5" maxlength="40" pattern="[A-Za-z0-9]+">
                </div>
                <input type="submit" value="Registro" class="contact_btn">
                    <div class="form-group row mb-0">
                              <a class="btn btn-link" href="{{ url('/') }}">
                                        {{ __('Login') }}
                                </a>
                    </div>
            </form>
        </div>
    </div>
</div>
@endsection 
