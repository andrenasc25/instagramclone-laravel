@extends('layouts.userLayout')
@section('content')
@include('includes.header')
    <section class="chat-ctn">
        <div class="chat">
            <div class="chat-left-ctn">
                <div class="chat-left-user-options">
                    <div class="chat-left-choose-user">
                        <span style="margin-right:11px;">{{Auth::user()->name}}</span>
                        <img src="{{asset('assets/down-arrow.png')}}">
                    </div>
                    <img src="{{asset('assets/write-button.png')}}" style="position:absolute;right:18px;cursor:pointer;">
                </div>
                <div class="chat-left-user-friend">
                    <img src="{{asset('assets/chat-friend-1.jpg')}}">
                    <div class="chat-left-user-friend-text-wrapper">
                        <span>someoneinhere</span>
                        <span>Online há 47 min</span>
                    </div>
                </div>
                <div class="chat-left-user-friend">
                    <img src="{{asset('assets/chat-friend-2.jpg')}}">
                    <div class="chat-left-user-friend-text-wrapper">
                        <span>someoneinhere</span>
                        <span>Online há 2h</span>
                    </div>
                </div>
                <div class="chat-left-user-friend">
                    <img src="{{asset('assets/chat-friend-3.jpg')}}">
                    <div class="chat-left-user-friend-text-wrapper">
                        <span>someoneinhere</span>
                        <span>Enviou uma mensagem para ... &bull; 4 sem</span>
                    </div>
                </div>
                <div class="chat-left-user-friend">
                    <img src="{{asset('assets/chat-friend-4.jpg')}}">
                    <div class="chat-left-user-friend-text-wrapper">
                        <span>someoneinhere</span>
                        <span>Online há 47 min &bull; 6 sem</span>
                    </div>
                </div>
                <div class="chat-left-user-friend">
                    <img src="{{asset('assets/chat-friend-5.jpg')}}">
                    <div class="chat-left-user-friend-text-wrapper">
                        <span>someoneinhere</span>
                        <span>Online há 47 min &bull; 8 sem</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection