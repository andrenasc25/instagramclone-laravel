@extends('layouts.userLayout')
@section('content')
@include('includes.header')
    <section class="profile-ctn">
        <div class="profile">
            <div class="profile-header">
                <div class="profile-picture-ctn">
                    <img src="{{asset('')}}">
                </div>
                <div class="profile-info-ctn">
                    <div class="profile-info-wrapper">
                        <div class="profile-info-edit-wrapper">
                            <span>{{'username'}}</span>
                            <button>Enviar mensagem</button>
                        </div>
                        <div class="profile-info-acquaitances">
                            <div class="profile-info-acquaitances-publications">
                                <span>4</span>
                                <span>publicações</span>
                            </div>
                            <div class="profile-info-acquaitances-followers">
                                <span>45</span>
                                <span>seguidores</span>
                            </div>
                            <div class="profile-info-acquaitances-following">
                                <span>30</span>
                                <span>seguindo</span>
                            </div>
                        </div>
                        <span class="profile-info-user-full-name">{{''}}</span>
                        <span class="profile-info-user-bio">{{''}}</span>
                        <a class="profile-info-website-link" href="{{''}}">{{''}}</a>
                    </div>
                </div>
            </div>
            <div class="profile-body">
                <div class="profile-body-tabs-ctn">
                    <div class="profile-body-tabs-wrapper">
                        <div class="profile-body-tab" style="border-top:1px solid #000;">
                            <svg aria-label="" class="_8-yf5 " color="#262626" fill="#262626" height="12" role="img" viewBox="0 0 48 48" width="12"><path clip-rule="evenodd" d="M45 1.5H3c-.8 0-1.5.7-1.5 1.5v42c0 .8.7 1.5 1.5 1.5h42c.8 0 1.5-.7 1.5-1.5V3c0-.8-.7-1.5-1.5-1.5zm-40.5 3h11v11h-11v-11zm0 14h11v11h-11v-11zm11 25h-11v-11h11v11zm14 0h-11v-11h11v11zm0-14h-11v-11h11v11zm0-14h-11v-11h11v11zm14 28h-11v-11h11v11zm0-14h-11v-11h11v11zm0-14h-11v-11h11v11z" fill-rule="evenodd"></path></svg>
                            <span style="color:#000;">Publicações</span>
                        </div>
                        <div class="profile-body-tab">
                            <svg aria-label="" class="_8-yf5 " color="#8e8e8e" fill="#8e8e8e" height="12" role="img" viewBox="0 0 24 24" width="12"><path d="M12 0C5.4 0 0 5.4 0 12s5.4 12 12 12 12-5.4 12-12S18.6 0 12 0zm0 22.5C6.2 22.5 1.5 17.8 1.5 12S6.2 1.5 12 1.5 22.5 6.2 22.5 12 17.8 22.5 12 22.5zm5-11.8l-6.8-3.9c-.5-.3-1-.3-1.5 0-.4.3-.7.7-.7 1.3v7.8c0 .5.3 1 .8 1.3.2.1.5.2.8.2s.5-.1.8-.2l6.8-3.9c.5-.3.8-.8.8-1.3s-.5-1-1-1.3zm-7.5 5.2V8.1l6.8 3.9-6.8 3.9z"></path></svg>
                            <span>Vídeos</span>
                        </div>
                        <div class="profile-body-tab">
                            <svg aria-label="" class="_8-yf5 " color="#8e8e8e" fill="#8e8e8e" height="12" role="img" viewBox="0 0 48 48" width="12"><path d="M43.5 48c-.4 0-.8-.2-1.1-.4L24 29 5.6 47.6c-.4.4-1.1.6-1.6.3-.6-.2-1-.8-1-1.4v-45C3 .7 3.7 0 4.5 0h39c.8 0 1.5.7 1.5 1.5v45c0 .6-.4 1.2-.9 1.4-.2.1-.4.1-.6.1zM24 26c.8 0 1.6.3 2.2.9l15.8 16V3H6v39.9l15.8-16c.6-.6 1.4-.9 2.2-.9z"></path></svg> 
                            <span>Salvos</span>
                        </div>
                        <div class="profile-body-tab">
                            <svg aria-label="" class="_8-yf5 " color="#8e8e8e" fill="#8e8e8e" height="12" role="img" viewBox="0 0 48 48" width="12"><path d="M41.5 5.5H30.4c-.5 0-1-.2-1.4-.6l-4-4c-.6-.6-1.5-.6-2.1 0l-4 4c-.4.4-.9.6-1.4.6h-11c-3.3 0-6 2.7-6 6v30c0 3.3 2.7 6 6 6h35c3.3 0 6-2.7 6-6v-30c0-3.3-2.7-6-6-6zm-29.4 39c-.6 0-1.1-.6-1-1.2.7-3.2 3.5-5.6 6.8-5.6h12c3.4 0 6.2 2.4 6.8 5.6.1.6-.4 1.2-1 1.2H12.1zm32.4-3c0 1.7-1.3 3-3 3h-.6c-.5 0-.9-.4-1-.9-.6-5-4.8-8.9-9.9-8.9H18c-5.1 0-9.4 3.9-9.9 8.9-.1.5-.5.9-1 .9h-.6c-1.7 0-3-1.3-3-3v-30c0-1.7 1.3-3 3-3h11.1c1.3 0 2.6-.5 3.5-1.5L24 4.1 26.9 7c.9.9 2.2 1.5 3.5 1.5h11.1c1.7 0 3 1.3 3 3v30zM24 12.5c-5.3 0-9.6 4.3-9.6 9.6s4.3 9.6 9.6 9.6 9.6-4.3 9.6-9.6-4.3-9.6-9.6-9.6zm0 16.1c-3.6 0-6.6-2.9-6.6-6.6 0-3.6 2.9-6.6 6.6-6.6s6.6 2.9 6.6 6.6c0 3.6-3 6.6-6.6 6.6z"></path></svg>
                            <span>Marcados</span>
                        </div>
                    </div>
                </div>
                <div class="profile-body-posts-ctn">
                    foreach($userPosts as $userPost)
                        <div class="profile-body-post">
                            <div class="profile-body-post-info">
                                <div>
                                    <img src="{{asset('assets/heart-icon.png')}}">
                                    <span>35</span>
                                </div>
                                <div>
                                    <img src="{{asset('assets/comment-icon.png')}}">
                                    <span>0</span>
                                </div>
                            </div>
                            <img class="post-image" src="asset('users/' . $user->email . '/' . $userPost->post_content_url)">
                        </div>
                    endforeach
                </div>
            </div>
        </div>
    </section>
    <script>
        document.getElementById('postAdd').addEventListener('change', () => {
            var formData = new FormData()
            formData.append('postAdd', document.querySelector('#postAdd').files[0])
            axios.post('/user/post-add/', formData, {

            }).then((response) => {
                window.location.href = response.data
            })
        })
    </script>
@endsection