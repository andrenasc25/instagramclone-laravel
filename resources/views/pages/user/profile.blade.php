@extends('layouts.userLayout')
@section('content')
@include('includes.header')
<div id="root"></div>
<script type="text/babel">
    //React code
    const { useState, useEffect } = React

    //Header component
    const Header = (props) => {
        const profileButtonClick = () =>{
            var profileButton = document.getElementById("profileButton");
            var profileButtonMenu = document.getElementById("profileButtonMenu");
            profileButton.setAttribute("style", "padding:2px;border:1px solid #000");
            profileButtonMenu.setAttribute("style", "display:block;");
        }
        const logout = () =>{
            console.log('logout');
            axios.post('/logout', {

            }).then((response) => {
                console.log('logged out');
                window.location.assign('http://localhost:8000');
            })
        }
        const clickOnSearch = () =>{
            document.getElementsByClassName('header-search-ctn-noclick')[0].setAttribute('style', 'display:none;')
            document.getElementsByClassName('header-search-ctn-onclick')[0].setAttribute('style', 'display:flex;')
            document.getElementById('header-search-input').focus()
        }
        const closeSearch = () =>{
            document.getElementsByClassName('header-search-ctn-onclick')[0].setAttribute('style', 'display:none;')
            document.getElementsByClassName('header-search-ctn-noclick')[0].setAttribute('style', 'display:flex;')
        }
        return(
            <>
                <header className="header-ctn">
                    <div className="header">
                        <div className="header-img-ctn">
                            <a href="http://localhost:8000">
                                <img src="{{asset('assets/logo.png')}}" />
                            </a>
                        </div>
                        <div className="header-search-ctn header-search-ctn-noclick" onClick={clickOnSearch}>
                            <input type="text" />
                            <img src="{{asset('assets/search-icon.png')}}" />
                            <span>Pesquisar</span>
                        </div>
                        <div className="header-search-ctn header-search-ctn-onclick">
                            <input id="header-search-input" type="text" />
                            <span>Pesquisar</span>
                            <img id="header-search-close" src="{{asset('assets/search-close-icon.png')}}" onClick={closeSearch}/>
                            <div className="header-search-results-ctn">
                                <div className="header-search-no-results">
                                    <span>Recentes</span>
                                    <span>Nenhuma pesquisa recente.</span>
                                </div>
                                <div className="header-search-results">
                                    <div className="header-search-result">
                                        <div className="header-search-result-icon"></div>
                                        <div className="header-search-result-text">
                                            <span>someone</span>
                                            <span>His name</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div className="header-menu-ctn">
                            <a href="http://localhost:8000">
                                <svg aria-label="Página inicial" className="_8-yf5 " fill="#262626" height="22" role="img" viewBox="0 0 48 48" width="22">
                                    <path d="M45.5 48H30.1c-.8 0-1.5-.7-1.5-1.5V34.2c0-2.6-2.1-4.6-4.6-4.6s-4.6 2.1-4.6 4.6v12.3c0 .8-.7 1.5-1.5 1.5H2.5c-.8 0-1.5-.7-1.5-1.5V23c0-.4.2-.8.4-1.1L22.9.4c.6-.6 1.6-.6 2.1 0l21.5 21.5c.3.3.4.7.4 1.1v23.5c.1.8-.6 1.5-1.4 1.5z"></path>
                                </svg>
                            </a>
                            <a href="http://localhost:8000/chat">
                                <svg aria-label="Messenger" className="_8-yf5 " fill="#262626" height="22" role="img" viewBox="0 0 48 48" width="22">
                                    <path d="M36.2 16.7L29 22.2c-.5.4-1.2.4-1.7 0l-5.4-4c-1.6-1.2-3.9-.8-5 .9l-6.8 10.7c-.7 1 .6 2.2 1.6 1.5l7.3-5.5c.5-.4 1.2-.4 1.7 0l5.4 4c1.6 1.2 3.9.8 5-.9l6.8-10.7c.6-1.1-.7-2.2-1.7-1.5zM24 1C11 1 1 10.5 1 23.3 1 30 3.7 35.8 8.2 39.8c.4.3.6.8.6 1.3l.2 4.1c0 1 .9 1.8 1.8 1.8.2 0 .5 0 .7-.2l4.6-2c.2-.1.5-.2.7-.2.2 0 .3 0 .5.1 2.1.6 4.3.9 6.7.9 13 0 23-9.5 23-22.3S37 1 24 1zm0 41.6c-2 0-4-.3-5.9-.8-.4-.1-.8-.2-1.3-.2-.7 0-1.3.1-2 .4l-3 1.3V41c0-1.3-.6-2.5-1.6-3.4C6.2 34 4 28.9 4 23.3 4 12.3 12.6 4 24 4s20 8.3 20 19.3-8.6 19.3-20 19.3z"></path>
                                </svg>
                            </a>
                            <a href="http://localhost:8000/explore">
                                <svg aria-label="Encontrar pessoas" className="_8-yf5 " fill="#262626" height="22" role="img" viewBox="0 0 48 48" width="22">
                                    <path clipRule="evenodd" d="M24 0C10.8 0 0 10.8 0 24s10.8 24 24 24 24-10.8 24-24S37.2 0 24 0zm0 45C12.4 45 3 35.6 3 24S12.4 3 24 3s21 9.4 21 21-9.4 21-21 21zm10.2-33.2l-14.8 7c-.3.1-.6.4-.7.7l-7 14.8c-.3.6-.2 1.3.3 1.7.3.3.7.4 1.1.4.2 0 .4 0 .6-.1l14.8-7c.3-.1.6-.4.7-.7l7-14.8c.3-.6.2-1.3-.3-1.7-.4-.5-1.1-.6-1.7-.3zm-7.4 15l-5.5-5.5 10.5-5-5 10.5z" fillRule="evenodd"></path>
                                </svg>
                            </a>
                            <svg aria-label="Feed de atividades" className="_8-yf5 " fill="#262626" height="22" role="img" viewBox="0 0 48 48" width="22">
                                <path d="M34.6 6.1c5.7 0 10.4 5.2 10.4 11.5 0 6.8-5.9 11-11.5 16S25 41.3 24 41.9c-1.1-.7-4.7-4-9.5-8.3-5.7-5-11.5-9.2-11.5-16C3 11.3 7.7 6.1 13.4 6.1c4.2 0 6.5 2 8.1 4.3 1.9 2.6 2.2 3.9 2.5 3.9.3 0 .6-1.3 2.5-3.9 1.6-2.3 3.9-4.3 8.1-4.3m0-3c-4.5 0-7.9 1.8-10.6 5.6-2.7-3.7-6.1-5.5-10.6-5.5C6 3.1 0 9.6 0 17.6c0 7.3 5.4 12 10.6 16.5.6.5 1.3 1.1 1.9 1.7l2.3 2c4.4 3.9 6.6 5.9 7.6 6.5.5.3 1.1.5 1.6.5.6 0 1.1-.2 1.6-.5 1-.6 2.8-2.2 7.8-6.8l2-1.8c.7-.6 1.3-1.2 2-1.7C42.7 29.6 48 25 48 17.6c0-8-6-14.5-13.4-14.5z"></path>
                            </svg>
                            <button id="profileButton" onClick={profileButtonClick}>
                                <img src="{{Auth::user()->user_profile_image_url == '' ? asset('assets/profile-icon.png') : Auth::user()->user_profile_image_url}}" />
                                <div className="profile-button-menu" id="profileButtonMenu">
                                    <a href="http://localhost:8000/profile" className="profile-button-menu-item">
                                        <svg aria-label="Perfil" className="_8-yf5 " color="#262626" fill="#262626" height="16" role="img" viewBox="0 0 32 32" width="16"><path d="M16 0C7.2 0 0 7.1 0 16c0 4.8 2.1 9.1 5.5 12l.3.3C8.5 30.6 12.1 32 16 32s7.5-1.4 10.2-3.7l.3-.3c3.4-3 5.5-7.2 5.5-12 0-8.9-7.2-16-16-16zm0 29c-2.8 0-5.3-.9-7.5-2.4.5-.9.9-1.3 1.4-1.8.7-.5 1.5-.8 2.4-.8h7.2c.9 0 1.7.3 2.4.8.5.4.9.8 1.4 1.8-2 1.5-4.5 2.4-7.3 2.4zm9.7-4.4c-.5-.9-1.1-1.5-1.9-2.1-1.2-.9-2.7-1.4-4.2-1.4h-7.2c-1.5 0-3 .5-4.2 1.4-.8.6-1.4 1.2-1.9 2.1C4.2 22.3 3 19.3 3 16 3 8.8 8.8 3 16 3s13 5.8 13 13c0 3.3-1.2 6.3-3.3 8.6zM16 5.7c-3.9 0-7 3.1-7 7s3.1 7 7 7 7-3.1 7-7-3.1-7-7-7zm0 11c-2.2 0-4-1.8-4-4s1.8-4 4-4 4 1.8 4 4-1.8 4-4 4z"></path></svg>
                                        <span>Perfil</span>
                                    </a>
                                    <a href="http://localhost:8000/saved-posts" className="profile-button-menu-item">
                                        <svg aria-label="Salvos" className="_8-yf5 " color="#262626" fill="#262626" height="16" role="img" viewBox="0 0 32 32" width="16"><path d="M28.7 32c-.4 0-.8-.2-1.1-.4L16 19.9 4.4 31.6c-.4.4-1.1.6-1.6.3-.6-.2-.9-.8-.9-1.4v-29C1.8.7 2.5 0 3.3 0h25.4c.8 0 1.5.7 1.5 1.5v29c0 .6-.4 1.2-.9 1.4-.2.1-.4.1-.6.1zM4.8 3v23.9l9.4-9.4c.9-.9 2.6-.9 3.5 0l9.4 9.4V3H4.8z"></path></svg>
                                        <span>Salvos</span>
                                    </a>
                                    <a href="http://localhost:8000/config" className="profile-button-menu-item">
                                        <svg aria-label="Configurações" className="_8-yf5 " color="#262626" fill="#262626" height="16" role="img" viewBox="0 0 32 32" width="16"><path d="M31.2 13.4l-1.4-.7c-.1 0-.2-.1-.2-.2v-.2c-.3-1.1-.7-2.1-1.3-3.1v-.1l-.2-.1v-.3l.5-1.5c.2-.5 0-1.1-.4-1.5l-1.9-1.9c-.4-.4-1-.5-1.5-.4l-1.5.5H23l-.1-.1h-.1c-1-.5-2-1-3.1-1.3h-.2c-.1 0-.1-.1-.2-.2L18.6.9c-.2-.5-.7-.9-1.2-.9h-2.7c-.5 0-1 .3-1.3.8l-.7 1.4c0 .1-.1.2-.2.2h-.2c-1.1.3-2.1.7-3.1 1.3h-.1l-.1.2h-.3l-1.5-.5c-.5-.2-1.1 0-1.5.4L3.8 5.7c-.4.4-.5 1-.4 1.5l.5 1.5v.5c-.5 1-1 2-1.3 3.1v.2c0 .1-.1.1-.2.2l-1.4.7c-.6.2-1 .7-1 1.2v2.7c0 .5.3 1 .8 1.3l1.4.7c.1 0 .2.1.2.2v.2c.3 1.1.7 2.1 1.3 3.1v.1l.2.1v.3l-.5 1.5c-.2.5 0 1.1.4 1.5l1.9 1.9c.3.3.6.4 1 .4.2 0 .3 0 .5-.1l1.5-.5H9l.1.1h.1c1 .5 2 1 3.1 1.3h.2c.1 0 .1.1.2.2l.7 1.4c.2.5.7.8 1.3.8h2.7c.5 0 1-.3 1.3-.8l.7-1.4c0-.1.1-.2.2-.2h.2c1.1-.3 2.1-.7 3.1-1.3h.1l.1-.1h.3l1.5.5c.1 0 .3.1.5.1.4 0 .7-.1 1-.4l1.9-1.9c.4-.4.5-1 .4-1.5l-.5-1.5V23l.1-.1v-.1c.5-1 1-2 1.3-3.1v-.2c0-.1.1-.1.2-.2l1.4-.7c.5-.2.8-.7.8-1.3v-2.7c0-.5-.4-1-.8-1.2zM16 27.1c-6.1 0-11.1-5-11.1-11.1S9.9 4.9 16 4.9s11.1 5 11.1 11.1-5 11.1-11.1 11.1z"></path></svg>
                                        <span>Configurações</span>
                                    </a>
                                    <div className="profile-button-menu-item">
                                        <svg aria-label="Trocar de conta" className="_8-yf5 " color="#262626" fill="#262626" height="16" role="img" viewBox="0 0 32 32" width="16"><path d="M10.3 10.7c0-.8-.7-1.5-1.5-1.5H4.9C7.2 5.4 11.4 3 16 3c3.6 0 7 1.5 9.5 4.1.5.6 1.5.6 2.1.1.6-.6.6-1.5.1-2.1-3-3.2-7.3-5-11.7-5C10.7 0 6 2.5 3 6.7V3.5C3 2.7 2.3 2 1.5 2S0 2.7 0 3.5v7.2c0 .8.7 1.5 1.5 1.5h7.3c.8 0 1.5-.6 1.5-1.5zm20.2 9.1h-7.2c-.8 0-1.5.7-1.5 1.5s.7 1.5 1.5 1.5h3.8C24.8 26.6 20.6 29 16 29c-3.6 0-7-1.5-9.5-4.1-.5-.6-1.5-.6-2.1-.1-.6.6-.6 1.5-.1 2.1 3 3.2 7.3 5 11.7 5 5.3 0 10-2.5 13-6.7v3.2c0 .8.7 1.5 1.5 1.5s1.5-.7 1.5-1.5v-7.2c0-.8-.7-1.4-1.5-1.4z"></path></svg>
                                        <span>Trocar de Conta</span>
                                    </div>
                                    <div id="logout" className="profile-button-menu-logout-wrapper" onClick={logout}>
                                        <span>Sair</span>
                                    </div>
                                </div>
                            </button>
                        </div>
                    </div>
                </header>
            </>
        )
    }

    //UploadPost component
    const UploadPost = (props) => {
        const uploadPost = () =>{
            var formData = new FormData()
            formData.append('uploadPost', document.querySelector('#uploadPost').files[0])
            axios.post('/user/uploadPost/', formData, {

            }).then((response) => {
                window.location.href = response.data
            })
        }
        return(
            <>
                <input id="uploadPost" type="file" onChange={() => uploadPost()}/>
            </>
        )
    }

    //ProfilePostCtn component
    const ProfilePostCtn = (props) => {
        const closePost = () =>{
            document.getElementsByClassName('profile-post-ctn')[0].setAttribute('style', 'display:none')
        }
        return(
            <>
                <div className="profile-post-ctn">
                    <div className="profile-post">
                        <div id="profilePostClose" onClick={closePost}>X</div>
                        <div className="profile-post-content">
                            {props.postData.post_content_url != null ? <img src={`/users/user@user.com/${props.postData.post_content_url}`} /> : ''}
                        </div>
                        <div className="profile-post-info-ctn">
                            <div className="profile-post-info-header">
                                <div className="profile-post-info-header-wrapper">
                                    <div>
                                        <img src="{{Auth::user()->user_profile_image_url == '' ? asset('assets/profile-icon.png') : Auth::user()->user_profile_image_url}}" />
                                        <span>{{Auth::user()->name}}</span>
                                    </div>
                                    <div>
                                        <img src="{{asset('assets/options-icon.png')}}" />
                                    </div>
                                </div>
                            </div>
                            <div className="profile-post-description">
                                <div className="profile-post-description-image">
                                    <img src="{{Auth::user()->user_profile_image_url == '' ? asset('assets/profile-icon.png') : Auth::user()->user_profile_image_url}}" />
                                </div>
                                <div className="profile-post-description-text">
                                    <span>{{Auth::user()->name}}</span>
                                    <span>
                                        {props.postData.post_description}
                                    </span>
                                </div>
                            </div>
                            <div className="profile-post-reactions-ctn">
                                <div className="profile-post-reactions-buttons">
                                    {/*style="margin-right:16px;"*/}<svg aria-label="Curtir" className="_8-yf5 " fill="#262626" height="24" role="img" viewBox="0 0 48 48" width="24">
                                        <path d="M34.6 6.1c5.7 0 10.4 5.2 10.4 11.5 0 6.8-5.9 11-11.5 16S25 41.3 24 41.9c-1.1-.7-4.7-4-9.5-8.3-5.7-5-11.5-9.2-11.5-16C3 11.3 7.7 6.1 13.4 6.1c4.2 0 6.5 2 8.1 4.3 1.9 2.6 2.2 3.9 2.5 3.9.3 0 .6-1.3 2.5-3.9 1.6-2.3 3.9-4.3 8.1-4.3m0-3c-4.5 0-7.9 1.8-10.6 5.6-2.7-3.7-6.1-5.5-10.6-5.5C6 3.1 0 9.6 0 17.6c0 7.3 5.4 12 10.6 16.5.6.5 1.3 1.1 1.9 1.7l2.3 2c4.4 3.9 6.6 5.9 7.6 6.5.5.3 1.1.5 1.6.5.6 0 1.1-.2 1.6-.5 1-.6 2.8-2.2 7.8-6.8l2-1.8c.7-.6 1.3-1.2 2-1.7C42.7 29.6 48 25 48 17.6c0-8-6-14.5-13.4-14.5z"></path>
                                    </svg>
                                    {/*style="margin-right:16px;"*/}<svg aria-label="Comentar" className="_8-yf5 " fill="#262626" height="24" role="img" viewBox="0 0 48 48" width="24">
                                        <path clipRule="evenodd" d="M47.5 46.1l-2.8-11c1.8-3.3 2.8-7.1 2.8-11.1C47.5 11 37 .5 24 .5S.5 11 .5 24 11 47.5 24 47.5c4 0 7.8-1 11.1-2.8l11 2.8c.8.2 1.6-.6 1.4-1.4zm-3-22.1c0 4-1 7-2.6 10-.2.4-.3.9-.2 1.4l2.1 8.4-8.3-2.1c-.5-.1-1-.1-1.4.2-1.8 1-5.2 2.6-10 2.6-11.4 0-20.6-9.2-20.6-20.5S12.7 3.5 24 3.5 44.5 12.7 44.5 24z" fillRule="evenodd"></path>
                                    </svg>
                                    <svg aria-label="Compartilhar publicação" className="_8-yf5 " fill="#262626" height="24" role="img" viewBox="0 0 48 48" width="24">
                                        <path d="M47.8 3.8c-.3-.5-.8-.8-1.3-.8h-45C.9 3.1.3 3.5.1 4S0 5.2.4 5.7l15.9 15.6 5.5 22.6c.1.6.6 1 1.2 1.1h.2c.5 0 1-.3 1.3-.7l23.2-39c.4-.4.4-1 .1-1.5zM5.2 6.1h35.5L18 18.7 5.2 6.1zm18.7 33.6l-4.4-18.4L42.4 8.6 23.9 39.7z"></path>
                                    </svg>
                                    {/*style="position:absolute;right:0;"*/}<svg aria-label="Salvar" className="_8-yf5 " fill="#8e8e8e" height="24" role="img" viewBox="0 0 48 48" width="24">
                                        <path d="M43.5 48c-.4 0-.8-.2-1.1-.4L24 29 5.6 47.6c-.4.4-1.1.6-1.6.3-.6-.2-1-.8-1-1.4v-45C3 .7 3.7 0 4.5 0h39c.8 0 1.5.7 1.5 1.5v45c0 .6-.4 1.2-.9 1.4-.2.1-.4.1-.6.1zM24 26c.8 0 1.6.3 2.2.9l15.8 16V3H6v39.9l15.8-16c.6-.6 1.4-.9 2.2-.9z"></path>
                                    </svg>
                                </div>
                                <div className="profile-post-reactions-like-info">
                                    <img src="#" />
                                    <span>Curtido por&nbsp;</span>
                                    <span>fulano e outras 874 pessoas</span>
                                </div>
                                <span className="profile-post-posted-at">Há 8 horas</span>
                            </div>
                            <div className="profile-post-comment-ctn">
                                <div className="profile-post-emoji-set">
                                    <img src="{{asset('assets/emoji-icon.png')}}" />
                                </div>
                                <div className="profile-post-write-comment">
                                    <input type="text" placeholder="Adicione um comentário..." />
                                </div>
                                <div className="profile-post-send-comment">
                                    <button>Publicar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </>
        )
    }

    //ProfileBodyPost component
    const ProfileBodyPost = (props) => {
        const hover = (index) =>{
            document.getElementsByClassName('profile-body-post-info')[index].setAttribute('style', 'display:flex')
        }
        const out = (index) =>{
            document.getElementsByClassName('profile-body-post-info')[index].setAttribute('style', 'display:none')
        }
        const click = (data) =>{
            props.openPost(data)
            document.getElementsByClassName('profile-post-ctn')[0].setAttribute('style', 'display:flex')
        }
        return(
            <>
                <div className="profile-body-post" onMouseOver={() => hover(props.index)} onMouseOut={() => out(props.index)} onClick={() => click(props.data)}>
                    <div className="profile-body-post-info">
                        <div>
                            <img src="{{asset('assets/heart-icon.png')}}" />
                            <span>35</span>
                        </div>
                        <div>
                            <img src="{{asset('assets/comment-icon.png')}}" />
                            <span>0</span>
                        </div>
                    </div>
                    <img className="post-image" src={`/users/user@user.com/${props.data.post_content_url}`} />
                </div>
            </>
        )
    }

    //Main component
    const App = (props) => {
        const [data, setData] = useState(props.data)
        const [postData, setPostData] = useState([])
        const openPost = (postInfo) => {
            setPostData(postInfo)
        }
        return(
            <>
                <Header />
                <ProfilePostCtn postData={postData}/>
                <section className="profile-ctn">
                    <div className="profile">
                        <div className="profile-header">
                            <div className="profile-picture-ctn">
                                <img src="{{Auth::user()->user_profile_image_url == '' ? asset('assets/profile-icon.png') : Auth::user()->user_profile_image_url}}" />
                            </div>
                            <div className="profile-info-ctn">
                                <div className="profile-info-wrapper">
                                    <div className="profile-info-edit-wrapper">
                                        <span>{{Auth::user()->name}}</span>
                                        <button>Editar perfil</button>
                                        <img src="{{asset('assets/config-icon.png')}}" />
                                    </div>
                                    <div className="profile-info-acquaitances">
                                        <div className="profile-info-acquaitances-publications">
                                            <span>4</span>
                                            <span>publicações</span>
                                        </div>
                                        <div className="profile-info-acquaitances-followers">
                                            <span>45</span>
                                            <span>seguidores</span>
                                        </div>
                                        <div className="profile-info-acquaitances-following">
                                            <span>30</span>
                                            <span>seguindo</span>
                                        </div>
                                    </div>
                                    <span className="profile-info-user-full-name">{{Auth::user()->name}}</span>
                                    <span className="profile-info-user-bio">{{Auth::user()->biography}}</span>
                                    <a className="profile-info-website-link" href="{{Auth::user()->site}}">{{Auth::user()->site}}</a>
                                </div>
                            </div>
                            <div className="profile-upload-ctn">
                                <div className="profile-upload-wrapper">
                                    <UploadPost />
                                    {/*style="enable-background:new 0 0 48 48;width:100px;"<svg version="1.1" viewBox="0 0 48 48" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                        <style type="text/css">
                                            .st0{display:none;}
                                            .st1{fill:none;stroke:#303030;stroke-width:0.7;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;}
                                            .st2{fill:#303030;}
                                        </style>
                                        <g className="st0" id="Padding__x26__Artboard"/><g id="Icons">
                                        <path className="st1" d="M30.1311,35.0978H17.8689c-2.74303,0-4.9667-2.22366-4.9667-4.9667V17.8689   c0-2.74303,2.22367-4.9667,4.9667-4.9667H30.1311c2.74303,0,4.9667,2.22367,4.9667,4.9667V30.1311   C35.0978,32.87414,32.87414,35.0978,30.1311,35.0978z"/><g>
                                        <line className="st1" x1="24" x2="24" y1="20.14733" y2="27.85267"/><line className="st1" x1="20.14733" x2="27.85267" y1="24" y2="24"/></g></g>
                                    </svg>*/}
                                    <span>Upload file</span>
                                </div>
                            </div>
                        </div>
                        <div className="profile-body">
                            <div className="profile-body-tabs-ctn">
                                <div className="profile-body-tabs-wrapper">
                                    <div className="profile-body-tab">{/*style="border-top:1px solid #000;"*/}
                                        <svg aria-label="" className="_8-yf5 " color="#262626" fill="#262626" height="12" role="img" viewBox="0 0 48 48" width="12"><path clipRule="evenodd" d="M45 1.5H3c-.8 0-1.5.7-1.5 1.5v42c0 .8.7 1.5 1.5 1.5h42c.8 0 1.5-.7 1.5-1.5V3c0-.8-.7-1.5-1.5-1.5zm-40.5 3h11v11h-11v-11zm0 14h11v11h-11v-11zm11 25h-11v-11h11v11zm14 0h-11v-11h11v11zm0-14h-11v-11h11v11zm0-14h-11v-11h11v11zm14 28h-11v-11h11v11zm0-14h-11v-11h11v11zm0-14h-11v-11h11v11z" fillRule="evenodd"></path></svg>
                                        <span>{/*style="color:#000;"*/}Publicações</span>
                                    </div>
                                    <div className="profile-body-tab">
                                        <svg aria-label="" className="_8-yf5 " color="#8e8e8e" fill="#8e8e8e" height="12" role="img" viewBox="0 0 24 24" width="12"><path d="M12 0C5.4 0 0 5.4 0 12s5.4 12 12 12 12-5.4 12-12S18.6 0 12 0zm0 22.5C6.2 22.5 1.5 17.8 1.5 12S6.2 1.5 12 1.5 22.5 6.2 22.5 12 17.8 22.5 12 22.5zm5-11.8l-6.8-3.9c-.5-.3-1-.3-1.5 0-.4.3-.7.7-.7 1.3v7.8c0 .5.3 1 .8 1.3.2.1.5.2.8.2s.5-.1.8-.2l6.8-3.9c.5-.3.8-.8.8-1.3s-.5-1-1-1.3zm-7.5 5.2V8.1l6.8 3.9-6.8 3.9z"></path></svg>
                                        <span>Vídeos</span>
                                    </div>
                                    <div className="profile-body-tab">
                                        <svg aria-label="" className="_8-yf5 " color="#8e8e8e" fill="#8e8e8e" height="12" role="img" viewBox="0 0 48 48" width="12"><path d="M43.5 48c-.4 0-.8-.2-1.1-.4L24 29 5.6 47.6c-.4.4-1.1.6-1.6.3-.6-.2-1-.8-1-1.4v-45C3 .7 3.7 0 4.5 0h39c.8 0 1.5.7 1.5 1.5v45c0 .6-.4 1.2-.9 1.4-.2.1-.4.1-.6.1zM24 26c.8 0 1.6.3 2.2.9l15.8 16V3H6v39.9l15.8-16c.6-.6 1.4-.9 2.2-.9z"></path></svg>
                                        <span>Salvos</span>
                                    </div>
                                    <div className="profile-body-tab">
                                        <svg aria-label="" className="_8-yf5 " color="#8e8e8e" fill="#8e8e8e" height="12" role="img" viewBox="0 0 48 48" width="12"><path d="M41.5 5.5H30.4c-.5 0-1-.2-1.4-.6l-4-4c-.6-.6-1.5-.6-2.1 0l-4 4c-.4.4-.9.6-1.4.6h-11c-3.3 0-6 2.7-6 6v30c0 3.3 2.7 6 6 6h35c3.3 0 6-2.7 6-6v-30c0-3.3-2.7-6-6-6zm-29.4 39c-.6 0-1.1-.6-1-1.2.7-3.2 3.5-5.6 6.8-5.6h12c3.4 0 6.2 2.4 6.8 5.6.1.6-.4 1.2-1 1.2H12.1zm32.4-3c0 1.7-1.3 3-3 3h-.6c-.5 0-.9-.4-1-.9-.6-5-4.8-8.9-9.9-8.9H18c-5.1 0-9.4 3.9-9.9 8.9-.1.5-.5.9-1 .9h-.6c-1.7 0-3-1.3-3-3v-30c0-1.7 1.3-3 3-3h11.1c1.3 0 2.6-.5 3.5-1.5L24 4.1 26.9 7c.9.9 2.2 1.5 3.5 1.5h11.1c1.7 0 3 1.3 3 3v30zM24 12.5c-5.3 0-9.6 4.3-9.6 9.6s4.3 9.6 9.6 9.6 9.6-4.3 9.6-9.6-4.3-9.6-9.6-9.6zm0 16.1c-3.6 0-6.6-2.9-6.6-6.6 0-3.6 2.9-6.6 6.6-6.6s6.6 2.9 6.6 6.6c0 3.6-3 6.6-6.6 6.6z"></path></svg>
                                        <span>Marcados</span>
                                    </div>
                                </div>
                            </div>
                            <div className="profile-body-posts-ctn" id="profileBodyPostsCtn">
                                {data.map((dat, index)=>(
                                    <ProfileBodyPost key={index} data={data[index]} index={index} openPost={openPost}/>
                                ))}
                            </div>
                        </div>
                    </div>
                </section>
            </>
        )
    }

    //Rendering the component with data coming from the server
    axios.get('/profile/',{
        headers:{
            getData:'getData'
        }
    }).then((response) => {
        var data = response.data
        ReactDOM.render(<App data={data[0]}/>, document.getElementById('root'))
    })
</script>
@endsection