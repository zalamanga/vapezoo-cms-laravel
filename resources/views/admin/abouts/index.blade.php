<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <a href="{{ url('admin/abouts/create') }}" class="btn btn-primary"><i class="fas fa-plus"></i> Tambah</a>
                <table class="table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Judul</th>
                            <th>Deskripsi</th>
                            <th>Gambar</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($abouts as $index => $about)
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <td>{{ $about->judul }}</td>
                                <td>{{ $about->deskripsi }}</td>
                                <td><img src="{{ asset($about->gambar) }}" alt="About Image" width="100"></td>
                                <td>
                                    <a href="{{ url('admin/abouts/' . $about->id . '/edit') }}" class="btn btn-success">Edit</a>
                                    <form action="{{ url('admin/abouts/' . $about->id) }}" method="POST" style="display:inline-block;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
