@extends('layouts.userLayout')
@section('content')
@include('includes.header')
    <section class="config-ctn">
        <div class="config">
            <div class="config-left-ctn">
                <div class="config-left-item-selected">
                    <span>Editar perfil</span>
                </div>
                <div class="config-left-item">
                    <span>Alterar senha</span>
                </div>
                <div class="config-left-item">
                    <span>Aplicativos e sites</span>
                </div>
                <div class="config-left-item">
                    <span>Email e SMS</span>
                </div>
                <div class="config-left-item">
                    <span>Notificações push</span>
                </div>
                <div class="config-left-item">
                    <span>Gerenciar contatos</span>
                </div>
                <div class="config-left-item">
                    <span>Privacidade e segurança</span>
                </div>
                <div class="config-left-item">
                    <span>Atividade e login</span>
                </div>
                <div class="config-left-item">
                    <span>Emails do Instagram</span>
                </div>
                <a href="#">
                    Mudar para conta profissional
                </a>
                <div class="config-facebook-info">
                    <div class="config-facebook-title-wrapper">
                        <svg aria-label="Marca d'água do Facebook e logotipo da família de aplicativos" class="_8-yf5 " color="#262626" fill="#262626" height="11" role="img" viewBox="0 0 771.7 44" width="180"><path clip-rule="evenodd" d="M522.5 21.3C522.5 9.1 532.3.1 545 .1s22.5 9 22.5 21.2-9.8 21.2-22.5 21.2c-2.2 0-4.4-.3-6.5-.8-.4-.1-.8-.1-1.2.1l-4.5 1.9c-.5.2-1.2.2-1.7-.1-.5-.3-.8-.8-.8-1.4l-.1-3.9c0-.5-.2-.9-.6-1.2-4.6-4.1-7.2-9.8-7.1-15.8zm29.4 5.3l6.6-10.2s.2-1-.2-1.3c-.4-.3-.9-.4-1.3-.1l-7.1 5.2c-.5.4-1.1.4-1.6 0l-5.3-3.8c-.8-.5-1.7-.8-2.6-.6-.9.2-1.7.7-2.2 1.5l-6.6 10.2c-.3.4-.2 1 .2 1.3.4.3 1 .4 1.4.1l7.1-5.2c.5-.4 1.1-.4 1.6 0l5.3 3.8c.8.5 1.7.8 2.6.6.8-.2 1.6-.7 2.1-1.5zM692.6 6.4c-7.9-7.7-20.6-8.5-29.5-1.9-8.9 6.7-11.4 18.7-5.8 28.2L654.1 44l11.9-3c3.3 1.7 7 2.7 10.7 2.7 9.1 0 17.2-5.3 20.7-13.5s1.6-17.6-4.8-23.8zm-15.9 33.5c-3.3 0-6.6-.9-9.5-2.5l-.7-.4-7.1 1.8 1.9-6.7-.4-.7c-4.5-7-3.6-16.1 2.3-22.1 5.8-6 15.1-7.4 22.5-3.4s11.1 12.4 9 20.4c-2 8-9.5 13.6-18 13.6zm6.4-15.3c.5.2 3.3 1.5 3.8 1.8.1 0 .2.1.2.1.4.2.7.3.9.6.2.9 0 1.8-.3 2.6-.5 1.3-2.7 2.4-3.8 2.6-1.2.2-2.4.1-3.5-.2-1.1-.3-2.1-.7-3.2-1.2-5.2-2.2-8.7-7-9.4-8.1-.1-.1-.1-.1-.1-.2-.3-.3-2.3-3-2.3-5.6 0-1.7.7-3.4 2-4.5.4-.4.9-.7 1.5-.7h1.2c.3 0 .7 0 1.1.9.5 1.1 1.6 3.8 1.7 4 .2.3.2.7 0 1-.1.3-.3.6-.6.9-.1.1-.2.2-.2.3-.2.2-.4.5-.6.7-.3.3-.6.6-.2 1.1.8 1.4 1.9 2.7 3.1 3.8 1.3 1.1 2.9 2.1 4.5 2.7.6.3.9.2 1.2-.1l.1-.1c.4-.5 1.3-1.5 1.7-2 .3-.7.7-.6 1.2-.4zM631.8 7.9c-1.1-2.9-3.5-5.2-6.5-6.3-1.7-.6-3.5-1-5.4-1-2.4-.1-3.1-.1-9.1-.1s-6.8 0-9.1.1c-1.8 0-3.7.4-5.4 1-3 1.1-5.3 3.4-6.5 6.3-.6 1.7-1 3.4-1 5.2-.1 2.3-.1 3-.1 8.9s0 6.6.1 8.9c0 1.8.4 3.6 1 5.2 1.2 2.9 3.5 5.2 6.5 6.3 1.7.6 3.5 1 5.4 1 2.4.1 3.1.1 9.1.1s6.8 0 9.1-.1c1.8 0 3.7-.4 5.4-1 3-1.1 5.3-3.4 6.5-6.3.6-1.7 1-3.4 1-5.2.1-2.3.1-3 .1-8.9s0-6.6-.1-8.9c0-1.8-1-5.2-1-5.2zm-2.9 22.8c0 1.4-.3 2.7-.8 4-.3.9-.9 1.8-1.7 2.5-.7.7-1.6 1.3-2.5 1.6-1.3.5-2.7.7-4.1.7-2.3.1-3 .1-8.9.1s-6.6 0-8.9-.1c-1.4 0-2.8-.3-4.1-.7-1.9-.7-3.5-2.2-4.2-4.1-.5-1.3-.7-2.6-.8-4-.1-2.3-.1-2.9-.1-8.7s0-6.5.1-8.7c0-1.4.3-2.7.8-4 .8-1.9 2.3-3.4 4.2-4.1 1.3-.5 2.7-.7 4.1-.7 2.3-.1 3-.1 8.9-.1s6.6 0 8.9.1c1.4 0 2.8.3 4.1.7 1 .3 1.8.9 2.5 1.6.7.7 1.3 1.5 1.7 2.5.5 1.3.8 2.6.8 4 .1 2.3.1 2.9.1 8.7 0 5.7-.1 8.7-.1 8.7zm-28.6-12.9c1.8-4.1 5.9-6.8 10.5-6.8 0 0 11.4 4.9 11.4 11 0 4.5-2.8 8.5-7 10.2-4.2 1.7-9.1.8-12.4-2.4-3.3-3.1-4.2-7.9-2.5-12zm10.5 11.3c-4.1 0-7.4-3.2-7.4-7.2s3.3-7.2 7.4-7.2c4.1 0 7.4 3.2 7.4 7.2 0 1.9-.8 3.7-2.2 5.1-1.3 1.4-3.2 2.2-5.2 2.1zm9.2-18.6c0-1.4 1.2-2.6 2.7-2.6 1.5 0 2.6 1.1 2.7 2.6 0 1.4-1.2 2.6-2.7 2.6-1.5 0-2.7-1.2-2.7-2.6zM479.2.2c-11.7 0-21.5 8.8-22.4 20.2-.9 11.4 7.3 21.5 18.9 23.3V28.5H470v-6.3h5.8v-4.8c0-5.5 3.3-8.5 8.5-8.5 1.7 0 3.4.2 5 .5v5.3h-2.7c-2.8 0-3.7 1.7-3.7 3.4v4.1h6.3l-1 6.3h-5.3v15.3c11.6-1.8 19.9-12 18.9-23.4C500.8 9 491 .2 479.2.2zm280 6.5c2.3.5 4.5 1.6 6.4 3.1 4.8 3.8 7 9.9 5.6 15.7s-6.1 10.4-12.1 11.8c-1.3.3-2.7.5-4.1.5h-20.8c-1.4 0-2.7-.2-4.1-.5-7.3-1.7-12.4-8-12.4-15.3S723 8.4 730.3 6.7c1.3-.3 2.7-.5 4.1-.5h20.7c1.4 0 2.8.2 4.1.5zm-3 20.5c.9-.1 1.7-.4 2.4-.9 1.4-1 2.3-2.6 2.3-4.3 0-1.7-.9-3.3-2.3-4.3-.7-.5-1.5-.8-2.4-.9-.8-.1-1.7-.2-2.6-.1h-17.7c-.9 0-1.7 0-2.6.1-.9.1-1.7.5-2.4.9-1.4 1-2.3 2.6-2.3 4.3 0 1.7.9 3.3 2.3 4.3.7.5 1.5.8 2.4.9.9.1 1.7.1 2.6.1h17.7c.8 0 1.7 0 2.6-.1zM32.6 1.5V7c0 .3-.3.6-.6.6H7.4V19h20.3c.3 0 .6.3.6.6v5.6c0 .3-.3.6-.6.6H7.4v16.8c0 .3-.3.6-.6.6H.6c-.3 0-.6-.3-.6-.6V1.5C0 1.2.3.9.6.9H32c.2 0 .3.1.4.2.1.1.2.4.2.4zm43.6 41.7H83c.4 0 .7-.2.6-.7-3.9-13.5-9.9-28.3-15.9-41-.2-.5-.7-.8-1.2-.7h-8.8c-.5 0-1 .3-1.2.8-6 12.5-12 27.4-15.9 40.9-.1.4.1.7.6.7h6.5c.3 0 .7-.2.7-.5.9-3.5 2-7.1 3.2-10.8h20.8c1.2 3.7 2.3 7.4 3.2 10.8 0 .3.3.5.6.5zM62.6 7.5c2.6 5.6 5.1 11.7 7.4 17.8H53.7c2.3-6.1 4.8-12.2 7.4-17.8h1.5zm31.5 14.9c0-13 8.8-22.3 21.6-22.3h.9c8 0 14.1 3.9 17.4 9.6.1.1.1.3.1.5s-.2.3-.3.4l-5.5 2.6c-.2.1-.4.2-.6.1-.2 0-.4-.2-.5-.3-2.3-3.9-5.8-6-10.9-6h-.9c-7.8 0-13.5 6-13.5 15.1 0 8.9 5.3 15 13.5 15h.9c5.2 0 8.3-1.7 10.6-4.4.2-.3.7-.4 1-.2l5.6 2.7c.2.1.3.2.3.4s-.1.3-.2.5c-3.5 4.9-9.7 7.9-17.3 7.9h-.9c-13 0-21.3-9-21.3-21.6zM183.6 37v5.6c0 .3-.3.6-.6.6h-32.7c-.3 0-.6-.3-.6-.6V1.5c0-.3.3-.6.6-.6h32.1c.3 0 .6.3.6.6V7c0 .3-.3.6-.6.6h-25.3v11h20.6c.3 0 .6.3.6.6v5.5c0 .3-.3.6-.6.6h-20.6v11.1H183c.2 0 .3.1.4.2.1.1.2.3.2.4zm56.2-5.4c0 7.3-5.7 11.6-16.2 11.6h-21.4c-.3 0-.6-.3-.6-.6V1.5c0-.3.3-.6.6-.6h19.5c10.2 0 15.5 4 15.5 10.9 0 4.2-1.9 7.5-7.3 9.1 6.9 1.5 9.9 5.5 9.9 10.7zM221.6 7.5H209v11.4h12.6c5.8 0 8.2-1.9 8.2-5.7 0-3.8-2.4-5.7-8.2-5.7zm2.1 17.7c6.1 0 8.5 2 8.5 5.7 0 3.8-2.3 5.6-8.5 5.6H209V25.2h14.7zM275.2.1c-13.7 0-22.4 9.2-22.4 22s8.7 22 22.4 22h.9c13.7 0 22.4-9.2 22.4-22s-8.7-22-22.4-22h-.9zM290.7 22c0 9.1-5.7 15.1-14.6 15.1h-.9c-9 0-14.6-6-14.6-15.1s5.7-15 14.6-15h.9c9 0 14.6 5.9 14.6 15zM333.6.1c-13.7 0-22.4 9.2-22.4 22s8.7 22 22.4 22h.9c13.7 0 22.4-9.2 22.4-22s-8.7-22-22.4-22h-.9zM349 22c0 9.1-5.7 15.1-14.6 15.1h-.9c-9 0-14.6-6-14.6-15.1s5.8-15 14.7-15h.9c8.9 0 14.5 5.9 14.5 15zm61.5 21.2h-8.2c-.3 0-.7-.1-.8-.4-5.6-6.3-11.6-12.2-18-17.7h-3.6v17.5c0 .3-.3.6-.6.6h-6.2c-.3 0-.6-.3-.6-.6V1.5c0-.3.3-.6.6-.6h6.2c.3 0 .6.3.6.6v16.7h3.7C389.5 13 395 7.3 399.9 1.3c.2-.3.5-.4.8-.4h7.7c.4 0 .6.2.6.4s-.1.3-.2.5c-5.8 7.1-12.4 13.7-19.5 19.7 7.8 6.4 15.1 13.5 21.7 21 .2.3 0 .7-.5.7z" fill-rule="evenodd"></path></svg>
                    </div>
                    <a class="config-facebook-account-center">
                        Central de Contas
                    </a>
                    <span>Controle as configurações para experiências conectadas no Instagram, no aplicativo do Facebook e no Messenger, incluindo o compartilhamento de stories e publicações e o login.</span>
                </div>
            </div>
            <div class="config-main-ctn">
                <img src="{{Auth::user()->user_profile_image_url == '' ? asset('assets/profile-icon.png') : Auth::user()->user_profile_image_url}}">
                <div class="config-main-update-image-text">
                    <span>{{Auth::user()->name}}</span>
                    <button id="alterProfilePhoto">Alterar foto do perfil</button>
                </div>
                <span>Nome</span>
                <div class="config-main-alter-name-wrapper">
                    <input id="name" type="text" value="{{Auth::user()->name}}">
                    <span>Você está usando o mesmo nome no Instagram e no Facebook. Acesse o Facebook para mudar o seu nome.Alterar nome</span>
                </div>
                <span>Nome de usuário</span>
                <div class="config-main-alter-username-wrapper">
                    <input id="username" type="text" value="{{Auth::user()->name}}">
                    <span>Na maioria dos casos, você poderá alterar seu nome de usuário novamente para fotosdoandre_ por mais 14 dias. Saiba mais</span>
                </div>
                <span>Site</span>
                <input id="site" type="text" value="{{Auth::user()->site}}">
                <span>Biografia</span>
                <textarea name="" id="biography" cols="30" rows="10">{{Auth::user()->biography}}</textarea>
                <div style="grid-column:2/3;display:flex;flex-direction:column;justify-content:space-between;width:370px;">
                    <span style="color:rgb(142,142,142);font-weight:600;font-family:'Roboto', sans-serif;font-size:14px;">Informações pessoais</span>
                    <span style="color:rgb(142,142,142);font-family:'Roboto', sans-serif;font-size:12px;">Forneça suas informações pessoais, mesmo se a conta for usada para uma empresa, um animal de estimação ou outra coisa. Elas não farão parte do seu perfil público.</span>
                </div>
                <span>Email</span>
                <input id="email" type="text" value="{{Auth::user()->email}}">
                <span>Telefone</span>
                <input id="phone" type="text" value="{{Auth::user()->user_phone}}">
                <span>Gênero</span>
                <input id="genre" type="text" value="$user->genre">
                <span style="text-align:right;width:150px;">Sugestões de contas similares</span>
                <div style="width:275px;display:flex;align-items:center;justify-content:space-between;">
                    <input type="checkbox" name="" id="">
                    <span style="width:245px;font-family:'Roboto', sans-serif;font-size:13px;font-weight:600;">Incluir sua conta ao recomendar contas similares que as pessoas talvez queiram seguir.</span>
                </div>
                <div style="grid-column:2/3;width:415px;display:flex;justify-content:space-between;align-items:center;">
                    <button id="enviar" style="border-radius:3px;width:58px;height:30px;background-color:rgb(178,223,252);border:none;color:#fff;font-weight:600;">Enviar</button>
                    <a href="#" style="color:rgb(0,149,247);font-family:'Roboto', sans-serif;text-decoration:none;font-weight:600;font-size:13px;">Desativar minha conta temporariamente</a>
                </div>
            </div>
        </div>
    </section>
    <script>
        document.getElementById('enviar').addEventListener('click', () =>{
            var formData = new FormData()
            formData.append('name', document.getElementById('name').value)
            formData.append('username', document.getElementById('username').value)
            formData.append('site', document.getElementById('site').value)
            formData.append('biography', document.getElementById('biography').value)
            formData.append('email', document.getElementById('email').value)
            formData.append('phone', document.getElementById('phone').value)
            formData.append('genre', document.getElementById('genre').value)
            axios.post('/user/update/', formData,{

            }).then((response) => {
                console.log(response.data)
            })
        })
        document.getElementById('alterProfilePhoto').addEventListener('click', () => {
            document.getElementsByClassName('alter-profile-photo')[0].style = 'display:flex';
        })
        document.getElementById('alterProfilePhotoCancel').addEventListener('click', () => {
            document.getElementsByClassName('alter-profile-photo')[0].style = 'display:none';
        })
        document.getElementById('profileImage').addEventListener('change', () => {
            var formData = new FormData()
            formData.append('file', document.querySelector('#profileImage').files[0])
            axios.post('/user/profileImage/', formData, {

            }).then((response) => {
                window.location.reload(true)
            })
        })
    </script>
@endsection