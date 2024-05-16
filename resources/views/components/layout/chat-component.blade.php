<div>
    <div class="chatapp">
        <div class="position-fixed z-index-10 bottom-20 end-0 p-10 chat-icon" id="chat-icon">
            <a class="text-decoration-none bg-body text-primary bg-primary-hover text-light-hover shadow square p-0 rounded-circle d-flex align-items-center justify-content-center"
                style="--square-size: 48px" alt="Chat Icon"><i class="fa-brands fa-rocketchat fa-xl"></i></a>
        </div>

        <!-- Chat container -->
        <div class="chat-container" id="chat-container">
            <!-- Admin details bar -->
            <div class="admin-details background-color-primary">
                <img src="{{ asset('dashboad/assets/images/admin.png') }}" alt="Admin Avatar" class="admin-avatar">
                <div class="admin-info">
                    <span class="admin-name">Admin</span>
                    <span class="admin-status">Online</span>
                </div>
                <button id="close-btn" class="btn btn-primary btn-sm"><i class="fa-solid fa-xmark"></i></button>
            </div>
            @if (null !== auth('customer')->user())
                <div id="chat-box"></div>
            @else
                <div class="chat-log"
                    style="min-height: 300px; display: flex; flex-direction: column; justify-content: center; align-items: center;background-color:gainsboro">
                    <p class="color-dark p-2"
                        style="text-align:center;font-size:x-large;color:#20311b;font-weight:bold;">Please login First
                        then Chat with our team</p>
                    <a href="{{ route('web-login') }}" class="btn btn-primary btn-sm" id="login-btn">Login</a>
                </div>
            @endif
            <!-- Chat box -->

            @php
            if(null !== auth('customer')->user()){
                $user = auth('customer')->user();
                $user_id = $user->id;
            }
            @endphp
            <!-- User input -->
            <form id="chatform" method="post" enctype="multipart/form-data">
                @csrf
                <div class="user-input-container" style="display: flex;">
                    @if (null !== auth('customer')->user())
                    <input type="hidden" name="user_id" value="{{$user_id}}">
                    @endif
                    
                    <textarea id="user-input" name="message" class="user-input" style="border-radius: 10px" required></textarea>
                    <button class="btn btn-sm "><i class="fa-solid fa-paperclip"></i></button>
                    <button type="submit" class="btn btn-sm btn-primary"><i class="fa-regular fa-paper-plane"></i></button>

                </div>
            </form>
        </div>
    </div>
    <!-- Chat container end -->
    {{-- <script>
        
        $(document).ready(function(){
            $('#chatform').submit(function(e){
                e.preventDefault();
                var formData = new FormData(this);
            $.ajax({
                url: "/sent",
                type: "POST",
                data: formData,
                contentType: false,
                cache: false,
                processData: false,
                success: function(data) {
                    console.log(data);
                    console.log(data.data['message']);
                    $('#user-input').val('');
                    appendMessage("user", data.data['message']);
                    $('#chat-box').scrollTop($('#chat-box')[0].scrollHeight);
                },
                error: function(data) {
                    console.log('Error:', data);
                }
            })
            })
        })
    </script> --}}
</div>
