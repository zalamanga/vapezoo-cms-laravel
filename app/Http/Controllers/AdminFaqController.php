<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Faq;
use RealRashid\SweetAlert\Facades\Alert;

class AdminFaqController extends Controller
{

    public function index()
    {
        $faqs = Faq::all();
        $data = [
            'title' => 'Faq',
            'content' => 'admin/faqs/index',
            'faqs' => $faqs
        ];
        return view('admin.layouts.wrapper', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Add Faq',
            'content' => 'admin/faqs/add'
        ];
        return view('admin.layouts.wrapper', $data);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'pertanyaan' => 'required|string',
            'jawaban' => 'required|string'
        ]);

        Faq::create($data);

        Alert::success('Success', 'Data Berhasil ditambahkan');
        return redirect('admin/faqs');
    }

    public function edit($id)
    {
        $faq = Faq::findOrFail($id);
        $data = [
            'title' => 'Edit Faq',
            'content' => 'admin/faqs/edit',
            'faq' => $faq
        ];
        return view('admin.layouts.wrapper', $data);
    }

    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'pertanyaan' => 'required|string',
            'jawaban' => 'required|string'
        ]);

        $faq = Faq::findOrFail($id);
        $faq->update($data);

        Alert::success('Success', 'Data Berhasil diupdate');
        return redirect('admin/faqs');
    }

    public function destroy($id)
    {
        $faq = Faq::findOrFail($id);
        $faq->delete();

        Alert::success('Success', 'Data Berhasil dihapus');
        return redirect('admin/faqs');
    }
}
