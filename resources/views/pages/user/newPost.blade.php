@extends('layouts.userLayout')
@section('content')
@include('includes.header')
    <section class="uploadPost-ctn">
        <div class="uploadPost">
            <div class="uploadPost-info-ctn">
                <div class="uploadPost-image-preview-wrapper">
                    <img src="{{asset('temporaryPosts/' . app('request')->input('imageName'))}}" class="uploadPost-image-preview">
                </div>
                <div class="uploadPost-description-wrapper">
                    <textarea name="" id="postDescription" cols="30" rows="10" placeholder="Escreva uma legenda..."></textarea>
                </div>
            </div>
            <div class="uploadPost-publish-ctn">
                <button id="publishPost">Publicar</button>
            </div>
        </div>
    </section>
    <script>
        //Get name of the temporary file
        const urlParams = new URLSearchParams(window.location.search);
        const myParams = urlParams.get('imageName');
        document.getElementById('publishPost').addEventListener('click', () => {
            var formData = new FormData();
            formData.append('imageUrl', myParams)
            formData.append('postDescription', document.getElementById('postDescription').value)
            axios.post('/user/publish-post/', formData, {

            }).then((response) => {
                window.location.href = "http://localhost:8000/profile"
            })
        })
    </script>
@endsection