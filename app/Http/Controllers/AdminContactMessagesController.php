<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactMessage;
use RealRashid\SweetAlert\Facades\Alert;

class AdminContactMessagesController extends Controller
{
    public function index()
    {
        $messages = ContactMessage::all();
        $data = [
            'title' => 'Contact Messages',
            'content' => 'admin/contact_messages/index',
            'messages' => $messages
        ];
        return view('admin.layouts.wrapper', $data);
    }

    public function show($id)
    {
        $message = ContactMessage::findOrFail($id);
        return view('admin.contact_messages.show', compact('message'));
    }

    public function destroy($id)
    {
        $contact_message = ContactMessage::findOrFail($id);
        $contact_message->delete();

        Alert::success('Success', 'Data Berhasil dihapus');
        return redirect()->route('admin.contact_messages.index');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'message' => 'required|string',
        ]);

        ContactMessage::create($data);
        Alert::success('Success', 'Message submitted successfully');
        return redirect()->route('contact')->with('success', 'Message submitted successfully. We will get back to you soon.');
    }
}
