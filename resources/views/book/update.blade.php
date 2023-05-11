<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tugas Manajemen Basis Data CRUD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>
    <div class="container col-12 mt-5">
        <a href="{{ route('buku.index') }}" class="btn btn-dark mt-2 mb-2">Kembali</a>
        <form method="POST" action="{{ route('buku.store') }}" enctype="multipart/form-data">
            @csrf
            <!-- Form input buku -->

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="title">Judul Buku</label>
                        <input type="text" class="form-control" id="title" name="title" value="{{ $book->title }}"
                            required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="author">Penulis</label>
                        <input type="text" class="form-control" id="author" name="author" value="{{ $book->author }}"
                            required>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="description">Deskripsi</label>
                <textarea class="form-control" id="description" name="description" rows="5" required>{{ $book->description }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary mt-2">Simpan</button>

        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
</body>

</html>
