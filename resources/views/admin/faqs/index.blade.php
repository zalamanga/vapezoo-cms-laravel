<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <a href="{{ url('admin/faqs/create') }}" class="btn btn-primary"><i class="fas fa-plus"></i> Tambah</a>
                <table class="table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Pertanyaan</th>
                            <th>Jawaban</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($faqs as $index => $faq)
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <td>{{ $faq->pertanyaan }}</td>
                                <td>{{ $faq->jawaban }}</td>
                                <td>
                                    <a href="{{ url('admin/faqs/' . $faq->id . '/edit') }}" class="btn btn-success">Edit</a>
                                    <form action="{{ url('admin/faqs/' . $faq->id) }}" method="POST" style="display:inline-block;">
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
