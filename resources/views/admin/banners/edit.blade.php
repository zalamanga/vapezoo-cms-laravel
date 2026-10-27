<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <form action="{{ isset($banner) ? url('/admin/banners/' . $banner->id) : url('/admin/banners') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @if(isset($banner))
                        @method('PUT')
                    @endif
                    <div class="form-group">
                        <label for="urutan">Urutan</label>
                        <input type="number" name="urutan" class="form-control @error('urutan') is-invalid @enderror" placeholder="Masukkan urutan" value="{{ isset($banner) ? $banner->urutan : old('urutan') }}">
                        @error('urutan')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="gambar">Banner</label>
                        <input type="file" name="gambar" class="form-control @error('gambar') is-invalid @enderror" {{ isset($banner) ? '' : 'required' }}>
                        @error('gambar')
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
