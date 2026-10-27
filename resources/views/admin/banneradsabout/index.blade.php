<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Banner Ads</h3>
            </div>
            <div class="card-body">
                <a href="{{ url('admin/banneradsabout/create') }}" class="btn btn-primary"><i class="fas fa-plus"></i> Tambah</a>
                <table class="table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Banner</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($banneradsabout as $index => $bannerad)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td><img src="{{ asset($bannerad->gambar) }}" alt="Banner Image" width="100"></td>
                            <td>
                                <a href="{{ url('admin/banneradsabout/' . $bannerad->id . '/edit') }}" class="btn btn-success">Edit</a>
                                <form action="{{ url('admin/banneradsabout/' . $bannerad->id) }}" method="POST" style="display:inline-block;">
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
