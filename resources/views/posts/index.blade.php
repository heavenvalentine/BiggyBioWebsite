@extends('layout.NavLoggedAdm')
@section('title', 'Post List')
@section('content')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="asset/css/table.css">
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

<body style="background: #EEF4DB">

<div class="container mt-5">
<div class="row">
<div class="col-md-12">
<div class="card w-100 border-0 shadow rounded">
    <div class="card-body">
        <a href="{{ route('posts.create') }}" class="btn btn-md btn-success mb-3">ADD POST</a>
        <table class="table table-bordered">
            <thead>
                <tr>
                <th scope="col">IMAGE</th>
                <th scope="col">TITLE</th>
                <th scope="col">CONTENT</th>
                <th scope="col">ACTION</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($posts as $post)
                <tr>
                    <td class="text-center">
                        <img src="{{ Storage::url('public/posts/').$post->image }}" class="rounded" style="width: 150px">
                    </td>
                    <td>{{ $post->title }}</td>
                    <td>{!! $post->content !!}</td>
                    <td class="text-center">
                        <form onsubmit="return confirm('Are you sure want to delete this post?');" action="{{ route('posts.destroy', $post->id) }}" method="POST">
                            <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-sm btn-primary mt-2">EDIT</a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger mt-2">DELETE</button>
                        </form>
                    </td>
                </tr>
                @empty
                    <div class="alert alert-danger">
                        Nothing to show here.
                    </div>
                @endforelse
            </tbody>
            </table>
            {{ $posts->links() }}
    </div>
</div>
</div>
</div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

<script>
//message with toastr
@if(session()->has('success'))

toastr.success('{{ session('success') }}', 'Success!');

@elseif(session()->has('error'))

toastr.error('{{ session('error') }}', 'Failed!');

@endif
</script>

@yield('content')
</body>
</html>
@endsection
