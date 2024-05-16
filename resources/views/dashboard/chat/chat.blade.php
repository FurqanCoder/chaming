@extends('dashboard.layout.app')
@section('dash-content')
    @php
        $user = Auth::user();
        $user_id = $user->id;
    @endphp
    <!-- main content start -->
    <div class="main-content">
        <style>
            body {
                margin: 0;
                font-family: Arial, sans-serif;
                display: flex;
                height: 100vh;
                background-color: #ece5dd;
            }

            .chat-container {
                display: flex;
                width: 100%;
                height: 100%;
            }

            .sidebar {
                width: 30%;
                background-color: #2c3e50;
                color: white;
                display: flex;
                flex-direction: column;
            }

            .chat-list {
                flex: 1;
                overflow-y: auto;
            }

            .chat-item {
                display: flex;
                align-items: center;
                padding: 10px;
                border-bottom: 1px solid #34495e;
                cursor: pointer;
            }

            .chat-item.active {
                background-color: #34495e;
            }

            .chat-avatar {
                width: 40px;
                height: 40px;
                background-color: #95a5a6;
                border-radius: 50%;
                margin-right: 10px;
            }
            .chat-avatar img{
                border-radius: 50%;
            }
            .chat-info {
                flex: 1;
            }

            .chat-name {
                font-weight: bold;
            }

            .chat-last-msg {
                font-size: 0.9em;
                color: #bdc3c7;
            }

            .chat-time {
                font-size: 0.8em;
                color: #7f8c8d;
            }

            .chat-main {
                flex: 1;
                display: flex;
                flex-direction: column;
                background-color: #f8f9fa;
            }

            .chat-header {
                padding: 15px;
                background-color: #34495e;
                color: white;
                font-weight: bold;
                display: flex;
                align-items: center;
                border-bottom: 1px solid #2c3e50;
            }

            .chat-messages {
                flex: 1;
                padding: 10px;
                overflow-y: auto;
                display: flex;
                flex-direction: column;
            }

            .message {
                display: flex;
                margin-bottom: 10px;
                max-width: 70%;
            }

            .message.sent {
                align-self: flex-end;
                background-color: #dcf8c6;
                border-radius: 7.5px 7.5px 0 7.5px;
            }

            .message.received {
                align-self: flex-start;
                background-color: #ffffff;
                border-radius: 7.5px 7.5px 7.5px 0;
            }

            .message-content {
                padding: 10px;
            }

            .message-time {
                font-size: 0.8em;
                color: #999;
                margin-left: 10px;
                align-self: flex-end;
            }

            .chat-input {
                display: flex;
                padding: 10px;
                background-color: #fff;
                border-top: 1px solid #ddd;
            }

            .chat-input input {
                flex: 1;
                padding: 10px;
                border: none;
                border-radius: 20px;
                background-color: #f0f0f0;
            }

            .chat-input button {
                padding: 10px;
                background-color: #2c3e50;
                border: none;
                color: white;
                margin-left: 10px;
                border-radius: 50%;
                cursor: pointer;
            }

            @media (max-width: 768px) {
                .sidebar {
                    display: none;
                }

                .chat-main {
                    width: 100%;
                }
            }
        </style>
        <div class="chat-container">
            <div class="sidebar">
                <div class="chat-list" id="contacts">
                    @foreach ($con as $data)
                    <div class="chat-item">
                        <div class="chat-avatar"><img src="{{$data['users']->customer_img}}" alt=""></div>
                        <div class="chat-info">
                            <div class="chat-name">{{$data['users']->name}}</div>
                            <div class="chat-last-msg">{{$data['message']->message}}</div>
                        </div>
                        <div class="chat-time">{{$data['message']->created_at}}</div>
                    </div>
                    @endforeach
                    
                   
                </div>
            </div>
            <div class="chat-main">
                <div class="chat-header">Medicine 💊</div>
                <div class="chat-messages">
                    <div class="message received">
                        <div class="message-content">apni</div>
                        <div class="message-time">10:52</div>
                    </div>
                    <div class="message sent">
                        <div class="message-content">kidi</div>
                        <div class="message-time">10:51</div>
                    </div>
                    <!-- Add more messages here -->
                </div>
                <div class="chat-input">
                    <input type="text" placeholder="Type a message" />
                    <button type="button">Send</button>
                </div>
            </div>
        </div>
    </div>
    <!-- End of Main Content -->
    {{-- <script src="{{ asset('web/js/custom.js') }}"></script> --}}
    <script src="https://cdn.jsdelivr.net/npm/laravel-echo/dist/echo.js"></script>
    <script src="https://js.pusher.com/7.0/pusher.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

    <script src="https://cdn-script.com/ajax/libs/jquery/3.7.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-ajaxy/1.6.1/scripts/jquery.ajaxy.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#chatform').submit(function(e) {
                e.preventDefault();
                var form = new FormData(this);
                $.ajax({
                    url: "/dashboard/chat",
                    type: "POST",
                    data: form,
                    processData: false,
                    contentType: false,
                    success: function(data) {
                        toastr.success(data.message);
                        $('#chatform')[0].reset();
                        $('#admin-chatbox').scrollTop($('#admin-chatbox')[0].scrollHeight);
                    },
                    error: function(xhr, status, error) {
                        console.log(xhr.responseText); // Log the response text for debugging
                        toastr.error("An error occurred: " + (xhr.responseJSON ? xhr
                            .responseJSON.message : error));
                    }
                });
            });


            // Enable Pusher logging - useful for debugging
            Pusher.logToConsole = true;

            // Initialize Pusher with your credentials
            var pusher = new Pusher('8f8216268b61fec14ee5', {
                cluster: 'ap2'
            });

            // Function to handle appending new messages to the chat box
            function appendMessageToAlert(message, id, id, date) {
                var messageId = id + '-' + rec_id + '-' + date; // Unique message ID
                if ($('#' + messageId).length === 0) {
                    var html = ''; // Initialize html variable

                    if (id == {{ $user_id }}) {
                        html += '<div class="flex justify-end mb-2" id="' + messageId + '">';
                        html += '<div class="rounded py-2 px-3" style="background-color: #E2F7CB">';
                        html += '<p class="text-sm mt-1">' + message + '</p>';
                        html += '<p class="text-right text-xs text-grey-dark mt-1">' + date + '</p>';
                        html += '</div>';
                        html += '</div>';
                    } else {
                        html += '<div class="flex mb-2" id="' + messageId + '">';
                        html += '<div class="rounded py-2 px-3" style="background-color: #F2F2F2">';
                        html += '<p class="text-sm mt-1">' + message + '</p>';
                        html += '<p class="text-right text-xs text-grey-dark mt-1">' + date + '</p>';
                        html += '</div>';
                        html += '</div>';
                    }

                    $('#admin-chatbox').append(html);
                }
            }

            // Subscribe to Pusher channel
            var channel = pusher.subscribe('cha');
            // Bind to the event on the channel
            channel.bind('App\\Events\\SentMessages', function(data) {
                // Handle the message event
                console.log(data);
                var message = data.message.message;
                var id = data.message.sender_id;
                var room_id = data.message.room_id;
                var date = data.message.created_at;

                appendMessageToAlert(message, id, date);
                $('#admin-chatbox').scrollTop($('#admin-chatbox')[0].scrollHeight);
                let htmlroom = '<input type="hidden" name="room_id" value="' + room_id + '" id="">;';
                $('#chatform').append(htmlroom);
            });

            channel.bind('App\\Events\\Contacts', function(data) {
                // Handle the message event
                $('#contacts').empty();
                console.log(data.con);
                data.con.forEach(item => {
                    var html = `
                    <div class="chat-item active">
                        <div class="chat-avatar"><img src="" alt=""></div>
                        <div class="chat-info">
                            <div class="chat-name"></div>
                            <div class="chat-last-msg"></div>
                        </div>
                        <div class="chat-time">{{$data['message']->created_at}}</div>
                    </div>
                    ;`
                    $('#contacts').append(html);
                });
            });
            // Event delegation to handle close button click

        });
    </script>
@endsection
