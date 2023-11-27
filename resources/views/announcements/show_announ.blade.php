@extends('layout.NavLogged-layout')
@section('title', 'Announcement List')
@section('content')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="asset/css/table.css">
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

<body style="background: #EEF4DB">

<div class="container">
    <div class="btn-group mx-2 mt-2 float-end" role="group" aria-label="Basic example">
        <a href="/programs" class="btn btn-secondary" aria-current="page">Program</a>
        <a href="/announcements_list" class="btn btn-secondary active">Announcement</a>
    </div>
</div>

<div class="container mt-2">
<div class="row">
<div class="col-md-12">
<div class="card w-100 border-0">
    <div class="card-body table-responsive">
        <h5 class="tbl-title mt-2 mb-4">Coming Soon: Scholarship Program</h5>
        <table class="table align-middle">
            <thead>
            <tr class="pe-4 ">
                <th scope="col">IMAGE</th>
                <th scope="col">TITLE</th>
                <th scope="col">DESCRIPTION</th>
                <th scope="col">START</th>
                <th scope="col">END</th>
                <th scope="col">PLACE</th>
                <th scope="col">SPONSORSHIP</th>
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

</body>
</html>

<x-contact/>
@endsection
