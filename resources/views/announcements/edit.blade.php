<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title> Biggy Bio | Edit Announcement</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body style="background: #EEF4DB">

<div class="container mt-5 mb-5">
<div class="row">
    <div class="col-md-12">
        <div class="card border-0 shadow rounded">
            <div class="card-body">
                <form action="{{ route('announcements.update', $announcement->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="form-group">
                        <label class="font-weight-bold">IMAGE</label>
                        <input type="file" class="form-control" name="image">
                    </div>

                    <div class="form-group">
                        <label class="font-weight-bold">TITLE</label>
                        <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title', $announcement->title) }}" placeholder="Input the title announcement here">

                        <!-- error message untuk title -->
                        @error('title')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label class="font-weight-bold">CONTENT</label>
                        <textarea class="form-control @error('description') is-invalid @enderror" name="description" rows="5" placeholder="Input the description announcement here">{{ old('description', $announcement->description) }}</textarea>

                        <!-- error message untuk description -->
                        @error('description')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label class="font-weight-bold">START</label>
                        <input type="date" class="form-control @error('start') is-invalid @enderror" name="start" value="{{ old('start', $announcement->start) }}" placeholder="Input the start date here">

                        @error('start')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label class="font-weight-bold">END</label>
                        <input type="date" class="form-control @error('end') is-invalid @enderror" name="end" value="{{ old('end', $announcement->end) }}" placeholder="Input the end date here">

                        @error('end')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>


                    <div class="form-group">
                        <label class="font-weight-bold">PLACE</label>
                        <input type="text" class="form-control @error('place') is-invalid @enderror" name="place" value="{{ old('place', $announcement->place) }}" placeholder="Input the place date here">

                        <!-- error message untuk place -->
                        @error('place')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>


                    <div class="form-group">
                        <label class="font-weight-bold">SPONSORSHIP</label>
                        <input type="text" class="form-control @error('sponsorship') is-invalid @enderror" name="sponsorship" value="{{ old('sponsorship', $announcement->sponsorship) }}" placeholder="Input the sponsorship here">

                        @error('sponsorship')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-md btn-primary">UPDATE</button>
                    <button type="reset" class="btn btn-md btn-warning">RESET</button>

                </form>
            </div>
        </div>
    </div>
</div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
<script>
CKEDITOR.replace( 'description' );

</script>
</body>
</html>
