@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @foreach ($posts as $post)
                <div class="card">
                    @if ($post->image)
                    <div class="embed-responsive-21by9">
                        <img src="{{$post->get_image}}"
                            class="card-img-top">
                    </div>
                     @elseif($post->iframe)
                    <div class="embed-responsive embed-responsive-16by9">
                        {!! $post->iframe !!}
                    </div>
                    @endif
                    <div class="card-body mb-4">

                       <h5 class="card-title mt-3"> {{ $post->title }} </h5>
                       <p class="card_text">
                            {{ $post->get_excerpt }}
                            <a href=" {{ route('post',$post) }} ">Leer mas</a>
                       </p>
                       <p class="text-muted mb-0">
                            <em>
                                &ndash; {{ $post->user->name }}
                            </em>
                            {{ $post->created_at->format('d M Y') }}
                       </p>
                    </div>
                </div>
            @endforeach
            {{ $posts->links('pagination::bootstrap-4') }}
        </div>
    </div>
</div>
@endsection
