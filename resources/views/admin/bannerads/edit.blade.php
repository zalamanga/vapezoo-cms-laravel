<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <form action="{{ url('/admin/bannerads/' . $bannerad->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="gambar">Banner</label>
                        <input type="file" name="gambar" class="form-control @error('gambar') is-invalid @enderror">
                        @error('gambar')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    @if ($bannerad->gambar)
                    <div class="form-group">
                        <label for="current_gambar">Current Banner</label>
                        <img src="{{ asset($bannerad->gambar) }}" alt="Current Banner" class="img-fluid">
                    </div>
                    @endif
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</div>
