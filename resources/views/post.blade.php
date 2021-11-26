@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
                <div class="card">
                    <div class="card-body mb-4">
                        @if ($post->image)
                            <div class="embed-responsive-21by9">
                                <img src="{{$post->get_image}}"
                                    class="card-img-top">
                            </div>
                         @endif
                       <h5 class="card-title mt-3"> {{ $post->title }} </h5>
                       @if($post->iframe )
                                <div class="mx-auto col-6 embed-responsive embed-responsive-16by9">
                                    {!! $post->iframe !!}
                                </div>
                            @endif
                       <p class="card_text">
                            {{ $post->body }}

                       </p>
                       <p class="text-muted mb-0">
                            <em>
                                &ndash; {{ $post->user->name }}
                            </em>
                            {{ $post->created_at->format('d M Y') }}
                       </p>
                    </div>
                </div>
        </div>
    </div>
</div>
@endsection
