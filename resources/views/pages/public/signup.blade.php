@extends('layouts.publicLayout')
@section('content')
    <section class="signup-ctn">
        <div class="signup">
            <div class="signup-form-wrapper">
                <img src="{{asset('assets/logo-auth.png')}}">
                <span style="width:218px;text-align:center;font-size:16px;color:rgb(142,142,166);font-weight:600;font-family:'Roboto', sans-serif;margin-bottom:12px;">
                    Cadastre-se para ver fotos e vídeos dos seus amigos
                </span>
                <button class="signup-facebook-button">
                    <img src="{{asset('assets/facebook-icon-signup.png')}}" style="margin-right:8px;">
                    <span>Entrar com Facebook</span>
                </button>
                <div class="signup-or-wrapper">
                    <div></div>
                    <span>Ou</span>
                    <div></div>
                </div>
                <form method="post" action="/auth/signup" class="signup-form">
                    @csrf
                    <input type="text" class="signup-input-text" name="email" id="phoneOrEmail" placeholder="Número do celular ou email" style="margin-bottom:8px;">
                    <input type="text" class="signup-input-text" name="name" id="fullName" placeholder="Nome completo" style="margin-bottom:8px;">
                    <input type="text" class="signup-input-text" name="username" id="username" placeholder="Nome de usuário" style="margin-bottom:8px;">
                    <input type="password" class="signup-input-text" name="password" id="password" placeholder="Senha" style="margin-bottom:15px;">
                    <button type="submit" class="signup-button">
                        Cadastre-se
                    </button>
                </form>
                <div class="signup-terms-ctn">
                    <span>Ao se cadastrar, você concorda com nossos</span>
                    <span>Termos, Política de Dados e Política de Cookies.</span>
                </div>
            </div>
            <div class="signup-form-login-link-wrapper">
                <span>Tem uma conta?</span>
                <a href="{{asset('/auth')}}">Conecte-se</a>
            </div>
            <span>Obtenha o aplicativo.</span>
            <div class="signup-apps-wrapper">
                <img src="{{asset('assets/app-store-button.png')}}" style="width:136px;margin-right:10px;">
                <img src="{{asset('assets/google-play-button.png')}}" style="width:136px;">
            </div>
        </div>
    </section>
    <script>
        /*document.getElementById('signupForm').addEventListener('submit', (e) => {
            e.preventDefault();
            var formData = new FormData();
            //Getting data from the form
            formData.append('phoneOrEmail', document.getElementById('phoneOrEmail').value);
            formData.append('fullName', document.getElementById('fullName').value);
            formData.append('username', document.getElementById('username').value);
            formData.append('password', document.getElementById('password').value);
            //Sending data
            axios.post('/signup', formData,{
                
            }).then((response) => {
                console.log(response.data);
            })
        });*/
    </script>
@endsection