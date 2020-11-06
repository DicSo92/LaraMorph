@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="flex-column">

                    <div class="card mb-4 border-dark">
                        <img class="card-img-top" src="{{$post->image}}">
                        <div class="card-img-overlay p-0 d-flex flex-column justify-content-end">
                            <div class="d-flex flex-column justify-content-end p-4"
                                 style="min-height: 40%;background: rgb(2,0,36);background: linear-gradient(0deg, rgba(2,0,36,0.9528186274509804) 0%, rgba(1,0,18,0.6166841736694677) 55%, rgba(0,0,0,0) 100%);">
                                <div class="d-flex align-items-center mb-3 pb-2 border-bottom">
                                    <img src="https://picsum.photos/200" class="rounded-circle mr-3" height="50px" width="50px" alt="avatar">
                                    <div class="d-flex flex-column text-white">
                                        <h5 class="mb-0">{{$post->user->name}}</h5>
                                        <p class="mb-0">{{$post->created_at->diffForHumans()}}</p>
                                    </div>
                                </div>
                                <h5 class="card-title text-white">
                                    {{$post->description}}
                                </h5>
                                <div class="d-flex justify-content-between text-white">
                                    <div class="d-flex align-items-center" style="cursor: pointer;">
                                        <i class="fas fa-thumbs-up"></i>
                                        <p class="mb-0 ml-1">{{$post->likes_count}}</p>
                                    </div>
                                    <p class="mb-0" style="cursor: pointer;">{{$post->comments_count}} commentaires</p>
                                </div>
                                <div class="row text-white mt-2 pt-3 border-top">
                                    <div class="col-6 border-right">
                                        <form method="post" style="display: inline" action="{{route('posts.like', ['post' => $post->id])}}">
                                            @csrf
                                            <div class="d-flex justify-content-center" style="cursor: pointer;">
                                                @if (!$post->isLiked())
                                                    <button class="btn text-white d-flex justify-content-center" type="submit">
                                                        <i class="far fa-thumbs-up fa-lg text-white"></i>
                                                        <h5 class="ml-2 mb-0 font-weight-bold">J'aime</h5>
                                                    </button>
                                                @else
                                                    <button class="btn text-white d-flex justify-content-center" type="submit">
                                                        <i class="fa fa-thumbs-up fa-lg text-primary"></i>
                                                        <h5 class="ml-2 mb-0 text-primary font-weight-bold">J'aime plus</h5>
                                                    </button>
                                                @endif
                                            </div>
                                        </form>
                                    </div>
                                    <div class="col-6 d-flex justify-content-center">
                                        <h5 class="mb-0 font-weight-bold" style="cursor: pointer;">Commenter</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="d-flex flex-column">
                        <h3 class="text-white">Commentaires</h3>

                        <div class="card">
                            <div class="card-header">
                                <div class="d-flex align-items-center">
                                    <img src="https://picsum.photos/200" class="rounded-circle mr-3" height="40px" width="40px" alt="avatar">
                                    <div class="d-flex flex-column text-white">
{{--                                        <h5 class="mb-0">{{$post->user->name}}</h5>--}}
{{--                                        <p class="mb-0">{{$post->created_at->diffForHumans()}}</p>--}}
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
{{--                                <h5 class="card-title">Special title treatment</h5>--}}
                                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
