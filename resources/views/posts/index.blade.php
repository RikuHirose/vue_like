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
