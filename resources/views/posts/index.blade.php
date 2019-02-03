@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif


                    <table class="table">
                      <thead>
                        <tr>
                          <th scope="col">id</th>
                          <th scope="col">Content</th>
                          <th scope="col">Like</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($posts as $post)
                            <tr>
                                <th scope="row">
                                    <a href="{{ route('posts.show', $post->id) }}">
                                        {{ $post->id }}
                                    </a>
                                </th>
                              <td>{{ $post->content }}</td>
                              <td>
                                <like
                                :post-id="{{ json_encode($post->id) }}"
                                :user-id="{{ json_encode($userAuth->id) }}"
                                :default-Liked="{{ json_encode($post->defaultLiked($post, $userAuth->id)) }}"
                                :default-Count="{{ json_encode(count($post->likes)) }}"
                                ></like>
                              </td>
                            </tr>
                        @endforeach
                      </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
