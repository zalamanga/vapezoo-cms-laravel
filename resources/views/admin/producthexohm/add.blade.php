<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <form action="{{ isset($product) ? url('/admin/producthexohm/' . $product->id) : url('/admin/producthexohm') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @if(isset($product))
                        @method('PUT')
                    @endif
                    <div class="form-group">
                        <label for="nama">Nama Produk</label>
                        <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror" placeholder="Masukkan nama produk" value="{{ isset($product) ? $product->nama : old('nama') }}">
                        @error('nama')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="order">Urutan</label>
                        <input type="number" name="order" class="form-control @error('order') is-invalid @enderror" placeholder="Masukkan urutan" value="{{ isset($product) ? $product->order : old('order') }}">
                        @error('order')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="image">Gambar Produk</label>
                        <input type="file" name="image" class="form-control @error('image') is-invalid @enderror" {{ isset($product) ? '' : 'required' }}>
                        @error('image')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</div>
