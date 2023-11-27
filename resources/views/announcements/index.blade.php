@extends('layout.NavLoggedAdm')
@section('title', 'Announcement List')
@section('content')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

<body style="background: #EEF4DB">

<div class="container mt-5">
<div class="row">
<div class="col-md-12">
<div class="card w-100 border-0">
    <div class="card-body table-responsive">
        <a href="{{ route('announcements.create') }}" class="btn btn-md btn-success mb-3">ADD ANNOUNCEMENT</a>
        <table class="table align-middle">
            <thead>
            <tr>
                <th scope="col">IMAGE</th>
                <th scope="col">TITLE</th>
                <th scope="col">DESCRIPTION</th>
                <th scope="col">START</th>
                <th scope="col">END</th>
                <th scope="col">PLACE</th>
                <th scope="col">SPONSORSHIP</th>
                <th scope="col">ACTION</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($announcements as $announcement)
                <tr>
                    <td class="text-center">
                        <img src="{{ Storage::url('public/announcements/').$announcement->image }}" class="rounded" style="width: 150px">
                    </td>
                    <td>{{ $announcement->title }}</td>
                    <td>{!! $announcement->description !!}</td>
                    <td>{{ $announcement->start }}</td>
                    <td>{{ $announcement->end }}</td>
                    <td>{{ $announcement->place }}</td>
                    <td>{{ $announcement->sponsorship }}</td>

                    <td class="text-center">
                        <form onsubmit="return confirm('Are you sure want to delete this announcement?');" action="{{ route('announcements.destroy', $announcement->id) }}" method="POST">
                            <a href="{{ route('announcements.edit', $announcement->id) }}" class="btn btn-sm btn-primary mt-2">EDIT</a>
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
            {{ $announcements->links() }}
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
