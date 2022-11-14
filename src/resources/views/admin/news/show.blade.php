@extends('component.master')

@section('title', 'News title')

@section('content')
    <div id="wrapper" class="clearfix">
        
        <!-- Start main-content -->
        <div class="main-content">
        
        <!-- Section: inner-header -->
        {{-- <section class="inner-header divider parallax layer-overlay overlay-dark-5" data-bg-img="http://placehold.it/1920x1280">
            <div class="container pt-100 pb-50">
            <!-- Section Content -->
            <div class="section-content pt-100">
                <div class="row"> 
                <div class="col-md-12">
                    <h3 class="title text-white">Single Post</h3>
                </div>
                </div>
            </div>
            </div>
        </section> --}}
    
        <!-- Section: Blog -->
        <section>
            <div class="container mt-30 mb-30 pt-30 pb-30">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                <div class="blog-posts single-post">
                    <article class="post clearfix mb-0">
                    <div class="entry-header">
                        <div class="post-thumb thumb"> <img src="{{ '/'.$blog->image }}" alt="" class="img-responsive img-fullwidth"> </div>
                    </div>
                    <div class="entry-content">
                        <div class="entry-meta media no-bg no-border mt-15 pb-20">
                        <div class="entry-date media-left text-center flip bg-theme-colored pt-5 pr-15 pb-5 pl-15">
                            <ul>
                            <li class="font-16 text-white font-weight-600">{{ $blog->created_at->format('d') }}</li>
                            <li class="font-12 text-white text-uppercase">{{ $blog->created_at->format('M') }}</li>
                            </ul>
                        </div>
                        <div class="media-body pl-15">
                            <div class="event-content pull-left flip">
                            <h4 class="entry-title text-white text-uppercase m-0"><a href="#">{{ $blog->title }}</a></h4>
                            <span class="mb-10 text-gray-darkgray mr-10 font-13"><i class="fa fa-commenting-o mr-5 text-theme-colored"></i> {{count($blog->comments->where('valid', 1))}} Comments</span>                       
                            <span class="mb-10 text-gray-darkgray mr-10 font-13"><i class="fas fa-clock me-2 c-green"></i> {{ $blog->created_at->diffForHumans() }}</span>
                            </div>
                        </div>
                        </div>
                          
                        @auth
                        <div class="auth">
                            <a href="{{ route('news.edit', $blog->slug) }}" class="btn btn-success">Edit</a>
                            <button type="button" class="btn btn-danger" onclick="event.preventDefault(); document.getElementById('artDelete').submit();">Delete</i></button>
                            <form action="{{ route('news.destroy', $blog->slug) }}" class="d-none" id="artDelete" method="POST">
                                @csrf
                                @method('DELETE')
                            </form>
                        </div>
                        @endauth

                        <p class="mb-15">{!! $blog->description !!}</p>
                        
                    </div>
                    </article>
                    {{-- <div class="tagline p-0 pt-20 mt-5">
                    <div class="row">
                        <div class="col-md-8">
                        <div class="tags">
                            <p class="mb-0"><i class="fa fa-tags text-theme-colored"></i> <span>Tags:</span> Law, Juggement, lawyer, Cases</p>
                        </div>
                        </div>
                        <div class="col-md-4">
                        <div class="share text-right">
                            <p><i class="fa fa-share-alt text-theme-colored"></i> Share</p>
                        </div>
                        </div>
                    </div>
                    </div> --}}
                    
                    <div class="comments-area">
                    <h5 class="comments-title">Comments</h5>
                    
                        @if (count($blog->comments->where('valid', 1)) != 0)
                            @foreach ($blog->comments->where('valid', 1) as $comment)
                                <ul class="comment-list">
                                    <li>
                                        <div class="media comment-author"> <a class="media-left pull-left flip" href="#">
                                            <img class="img-thumbnail" src="https://ui-avatars.com/api/?name={{ $comment->name ?? $comment->user->name }}&background=0D8ABC&color=fff" alt=""></a>
                                            <div class="media-body">
                                            <h5 class="media-heading comment-heading">J{{ $comment->name }} says:</h5>
                                            <div class="comment-date">{{ $comment->created_at->diffForHumans() }}</div>
                                            <p>
                                                {{ $comment->comment }}
                                                
                                                @auth
                                                    <div class="rnd">
                                                        <a href="#" class="reply-btn" onclick="event.preventDefault(); showreply({{$comment->id}})"><i class="fa fa-commenting-o text-theme-colored"></i> Reply</a>
                                                        <a href="{{ route('comment.delete', $comment->id) }}" class="ms-2 text-danger" onclick="event.preventDefault(); document.getElementById('comment-delete{{ $comment->id }}').submit()"><i class="fas fa-trash">delete</i></a>
                                                        <form action="{{ route('comment.delete', $comment->id) }}" class="d-inline" method="post" id="{{ 'comment-delete'.$comment->id }}">
                                                            @csrf
                                                            @method('DELETE')
                                                        </form>
                                                    </div>
                                                @endauth
                                            </p>
                                            @auth
                                                <div id="{{ 'reply'.$comment->id}}" style="display:none">
                                                    <form action="{{ route('comment.reply', $comment->id) }}" method="post" id="{{'form'.$comment->id}}">
                                                        @csrf
                                                        <div class="d-flex align-items-center justify-content-between w-100 mt-1">
                                                            <textarea name="reply" id="reply" style="height: 38px !important;" class="form-control me-1" placeholder="Comment Reply..."></textarea>
                                                            <button type="submit" class="btn btn-sm btn-primary">Submit</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            @endauth
                                            
                                            @foreach ($comment->replies as $reply)
                                                <a class="replay-icon pull-right text-theme-colored" href="https://ui-avatars.com/api/?name={{$reply->user->name}}&background=0D8ABC&color=fff"></a>
                                                <div class="clearfix"></div>
                                                <div class="media comment-author nested-comment"> <a href="#" class="media-left pull-left flip pt-20"><img alt="" src="https://ui-avatars.com/api/?name={{$reply->user->name}}&background=0D8ABC&color=fff" class="img-thumbnail"></a>
                                                    <div class="media-body p-20 bg-lighter">
                                                    <h5 class="media-heading comment-heading">{{ $reply->user->name }} says:</h5>
                                                    <div class="comment-date">{{ $reply->created_at->diffForHumans() }}</div>
                                                    <p class="m-0">
                                                        {{ $reply->reply }}
                                            
                                                        @auth
                                                            <div class="rnd">
                                                                <a href="#" class="text-danger" onclick="event.preventDefault(); document.getElementById('reply-delete{{ $reply->id }}').submit()"><i class="fas fa-trash"></i></a>
                                                                <form action="{{ route('reply.delete', $reply->id) }}" class="d-none" method="post" id="{{ 'reply-delete'.$reply->id }}">
                                                                    @csrf
                                                                    @method('DELETE')
                                                                </form>
                                                            </div>
                                                        @endauth
                                                    </p>
                                                    <a class="replay-icon pull-right text-theme-colored" href="#"></a>
                                                    </div>
                                                </div>
                                            @endforeach
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            @endforeach
                        @endif
                    </div>
                    <div class="comment-box">
                    <div class="row">
                        <div class="col-sm-12">
                        <h5>Leave a Comment</h5>
                        <div class="row">
                            <form id="comment-form" role="form" action="{{ route('comment.store', $blog->id) }}" method="post">
                                @csrf
                                @guest
                                    <div class="col-sm-6 pt-0 pb-0">
                                        <div class="form-group">
                                            <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name" placeholder="Enter Name" required>
                                            @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <input type="text" required class="form-control @error('email') is-invalid @enderror" name="email" id="email" placeholder="Enter Email">
                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                @else
                                    <input type="hidden" value="{{ auth()->user()->id }}">
                                @endguest
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <textarea class="form-control @error('comment') is-invalid @enderror" name="comment" id="comment" placeholder="Enter Message" rows="6" required></textarea>
                                        @error('comment')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                    <button type="submit" class="btn btn-dark btn-flat pull-right m-0" data-loading-text="Please wait...">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </section>
        </div>
        <!-- end main-content -->
        
        <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
    </div>
@endsection

@section('scripts')
    <script>
        function showreply(id) {

            var reply = document.getElementById('reply'+id);
            
            if (reply.style.display == 'none') {
                reply.style.display = 'block'
            } else {
                reply.style.display = 'none'
            }
        }

    </script>
@endsection