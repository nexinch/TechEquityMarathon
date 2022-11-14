 @extends('layouts.admin')

 @section('styles')
    <style>
        .fixedMenu {          
            position: -webkit-sticky !important;
            position: sticky !important;
            top: 1rem;
        }
    </style>
@endsection

{{-- @section('title', $blog->tile) --}}

@section('content')
    <div class="row">
        <div class="card col-12 p-4">
            <table class="table table-striped table-bordered">
                <thead class="thead-default">
                    <tr>
                        <th>Sn</th>
                        <th>Author</th>
                        <th>Comment</th>
                        <th>News</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach ($comments as $comment)
                            <tr>
                                <td scope="row">{{ $loop->iteration }}</td>
                                <td>{{ $comment->name ?? $comment->user->name }}</td>
                                <td>{{ $comment->comment }}</td>
                                <td>{{ $comment->blog->title }}</td>
                                <th>         
                                    <a href="#" class="btn btn-success" onclick="event.preventDefault(); document.getElementById('validate{{$comment->id}}').submit();">Validate</a>
                                    <form class="d-none" action="{{ route('comment.validate', $comment->id) }}" method="post" id="validate{{$comment->id}}">
                                        @csrf
                                        @method("PATCH")
                                    </form>
                                    <a href="#" class="btn btn-danger" onclick="event.preventDefault(); document.getElementById('comment{{$comment->id}}').submit();">Delete</a>
                                    <form class="d-none" action="{{ route('comment.destroy', $comment->id) }}" method="post" id="comment{{$comment->id}}">
                                        @csrf
                                        @method("DELETE")
                                    </form>
                                </th>
                            </tr>
                        @endforeach
                    </tbody>
            </table>
        </div>
    </div>
 @endsection