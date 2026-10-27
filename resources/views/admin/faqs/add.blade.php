<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <form action="{{ isset($faq) ? url('/admin/faqs/' . $faq->id) : url('/admin/faqs') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @if(isset($faq))
                        @method('PUT')
                    @endif
                    <div class="form-group">
                        <label for="pertanyaan">Pertanyaan</label>
                        <input type="text" name="pertanyaan" class="form-control @error('pertanyaan') is-invalid @enderror" placeholder="Masukkan pertanyaan" value="{{ isset($faq) ? $faq->pertanyaan : old('pertanyaan') }}">
                        @error('pertanyaan')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="jawaban">Jawaban</label>
                        <textarea name="jawaban" rows="3" class="form-control @error('jawaban') is-invalid @enderror" placeholder="Masukkan jawaban">{{ isset($faq) ? $faq->jawaban : old('jawaban') }}</textarea>
                        @error('jawaban')
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
