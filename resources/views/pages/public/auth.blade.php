@extends('layouts.publicLayout')
@section('content')
    <section class="auth-ctn">
        <div class="auth">
            <img src="{{asset('assets/signup-phone.png')}}">
            <div class="auth-signup-ctn">
                <div class="auth-signup-wrapper">
                    <img src="{{asset('assets/logo-auth.png')}}">
                    <form method="post" action="/auth/login" class="auth-form">
                        @csrf
                        <input type="text" class="auth-input" name="email" id="phoneUsernameOrEmail" placeholder="Telefone, nome de usuário ou email" style="margin-bottom:8px;">
                        <input type="password" class="auth-input" name="password" id="password" placeholder="Senha" style="margin-bottom:14px;">
                        <button type="submit" class="auth-submit">Entrar</button>
                    </form>
                    <div class="auth-signup-or-ctn">
                        <div></div>
                        <span>OU</span>
                        <div></div>
                    </div>
                    <div class="auth-signup-facebook-button">
                        <img src="{{asset('assets/facebook-icon.png')}}">
                        <span>Entrar com Facebook</span>
                    </div>
                    <a href="#">Esqueceu a senha?</a>
                </div>
                <div class="auth-signup-link-wrapper">
                    <span>Não tem uma conta?</span>
                    <a href="{{asset('/signup')}}">Cadastre-se</a>
                </div>
                <div style="display:flex;justify-content:center;margin-top:20px;">
                    <span style="font-family:'Roboto', sans-serif;font-size:15px;">Obtenha o aplicativo.</span>
                </div>
                <div style="margin-top:20px;display:flex;justify-content:center;">
                    <img src="{{asset('assets/app-store-button.png')}}" width="130px;" style="margin-right:8px;cursor:pointer;">
                    <img src="{{asset('assets/google-play-button.png')}}" width="130px;" style="cursor:pointer;">
                </div>
            </div>
        </div>
    </section>
@endsection