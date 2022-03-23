<x-admin-layout>

    <div class="mrsmart-container">
        <div class="messages-page">
            <h1>Messages</h1>

            <hr>


            <div class="messages">

                @foreach ($messages as $message)
                    <div class="message">
                        <div class="name">{{ $message->name }}</div>
                        <div class="email">{{ $message->email }}</div>
                        <div class="received">{{ date('jS M Y H:i', strtotime($message->created_at)) }}</div>
                        <div class="content">{{ $message->message }}</div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

</x-admin-layout>
