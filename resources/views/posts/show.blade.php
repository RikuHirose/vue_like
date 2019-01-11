@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ $post->id }}の投稿</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif


                    {{ $post->content }}

                    <like
                    :post-id="{{ json_encode($post->id) }}"
                    :user-id="{{ json_encode($userAuth->id) }}"
                    :default-Liked="{{ json_encode($defaultLiked) }}"
                    :default-Count="{{ json_encode($defaultCount) }}"
                    ></like>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
