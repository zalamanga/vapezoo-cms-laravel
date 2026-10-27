<div class="card">
    <div class="card-header">
        <h3 class="card-title">View Contact Message</h3>
    </div>
    <div class="card-body">
        <p><strong>Name:</strong> {{ $message->name }}</p>
        <p><strong>Email:</strong> {{ $message->email }}</p>
        <p><strong>Phone:</strong> {{ $message->phone }}</p>
        <p><strong>Message:</strong> {{ $message->message }}</p>
    </div>
</div>
