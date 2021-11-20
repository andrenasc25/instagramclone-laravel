<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/header.css') }}" rel="stylesheet">
    <link href="{{ asset('css/home.css') }}" rel="stylesheet">
    <link href="{{ asset('css/chat.css') }}" rel="stylesheet">
    <link href="{{ asset('css/explore.css') }}" rel="stylesheet">
    <link href="{{ asset('css/profile.css') }}" rel="stylesheet">
    <link href="{{ asset('css/config.css') }}" rel="stylesheet">
    <link href="{{ asset('css/auth.css') }}" rel="stylesheet">
    <link href="{{ asset('css/signup.css') }}" rel="stylesheet">
    <link href="{{ asset('css/uploadPost.css') }}" rel="stylesheet">
    <script src="https://unpkg.com/@babel/standalone/babel.min.js"></script>
    <script src="{{asset('js/vendor/axios.min.js')}}"></script>
    <script src="{{asset('js/vendor/vue.js')}}"></script>
    <title>Instagram Clone</title>
</head>
<body>
    <div id="app">
        @yield('content')
    </div>
    <script>
        //Get profile button element
        var profileButton = document.getElementById("profileButton");
        var profileButtonMenu = document.getElementById("profileButtonMenu");
        profileButton.addEventListener("click", () => {
            profileButton.setAttribute("style", "padding:2px;border:1px solid #000");
            profileButtonMenu.setAttribute("style", "display:block;");
        });
        //Search button
        document.getElementsByClassName('header-search-ctn-noclick')[0].addEventListener('click', () => {
            document.getElementsByClassName('header-search-ctn-noclick')[0].setAttribute('style', 'display:none;')
            document.getElementsByClassName('header-search-ctn-onclick')[0].setAttribute('style', 'display:flex;')
            document.getElementById('header-search-input').focus()
        })
        document.getElementById('header-search-close').addEventListener('click', () => {
            document.getElementsByClassName('header-search-ctn-onclick')[0].setAttribute('style', 'display:none;')
            document.getElementsByClassName('header-search-ctn-noclick')[0].setAttribute('style', 'display:flex;')
        })
    </script>
</body>
</html>