<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <a href="{{ url('admin/producthexohm1/create') }}" class="btn btn-primary"><i class="fas fa-plus"></i> Tambah</a>
                <table class="table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Gambar Produk</th>
                            <th>Urutan</th>
                            <th>Nama Produk</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $index => $product)
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <td><img src="{{ asset($product->image) }}" alt="Product Image" width="100"></td>
                                <td>{{ $product->order }}</td>
                                <td>{{ $product->nama }}</td>
                                <td>
                                    <a href="{{ url('admin/producthexohm1/' . $product->id . '/edit') }}" class="btn btn-success">Edit</a>
                                    <form action="{{ url('admin/producthexohm1/' . $product->id) }}" method="POST" style="display:inline-block;">
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
