@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">

            @include('includes.message')

            <div class="card pub_image">
                @if ($image->user->image)
                <div class="container-avatar">
                    <img class="avatar" src="{{ route('user.avatar', ['filename' => $image->user->image]) }}" />
                </div>
                @endif
                <div class="data-user">
                    {{ $image->user->name . ' ' . $image->user->surname }}
                    <span class="nickname">{{ ' | @' . $image->user->nick }}</span>
                </div>

                <div class="card-body">
                    <div class="image-container">
                        <img src="{{ route('image.file', ['filename' => $image->image_path]) }}" />
                    </div>
                    <div class="description">
                        <span class="nickname">{{ '@' . $image->user->nick }}</span>
                        <p>{{ $image->description }}</p>
                    </div>
                    <div class="likes">
                        <img src="{{ asset('img/heart-black.png') }}"/>
                    </div>
                    <div class="comments">
                        <a class="btn btn-sm btn-warning btn-comments">
                            Comentarios({{ count($image->comments) }})
                        </a>
                    </div>

                </div>
            </div>

        </div>
    </div>
</div>
@endsection
