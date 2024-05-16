document.addEventListener("DOMContentLoaded", function () {
    // Initialize Emojionearea
    $("#user-input").emojioneArea({
        pickerPosition: "top",
        inline: true,
    });
});
document.addEventListener("DOMContentLoaded", function () {
    const chatIcon = document.getElementById("chat-icon");
    const chatContainer = document.getElementById("chat-container");
    // const emojiBtn = document.getElementById('emoji-btn');
    const closeBtn = document.getElementById("close-btn");
    const userInput = document.getElementById("user-input");
    const chatBox = document.getElementById("chat-box");

    chatIcon.addEventListener("click", function () {
        chatIcon.style.display = "none"; // Hide chat icon button
        chatContainer.style.display = "block"; // Show chat container
    });

    closeBtn.addEventListener("click", function () {
        chatIcon.style.display = "block"; // Show chat icon button
        chatContainer.style.display = "none"; // Hide chat container
    });

    // emojiBtn.addEventListener('click', function() {
    //     userInput.value += '😀'; // Add your desired emoji here
    // });

    function appendMessage(sender, message) {
        const messageDiv = document.createElement("div");
        messageDiv.textContent = message;
        messageDiv.classList.add(
            "message",
            sender === "user" ? "user-message" : "bot-message"
        );
        const timestampSpan = document.createElement("span");
        timestampSpan.textContent = getTime();
        timestampSpan.classList.add("timestamp");
        messageDiv.appendChild(timestampSpan);
        chatBox.appendChild(messageDiv);
        chatBox.scrollTop = chatBox.scrollHeight;
    }

    function getTime() {
        const now = new Date();
        return now.toLocaleTimeString([], {
            hour: "2-digit",
            minute: "2-digit",
        });
    }
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
    // Demo conversation
    appendMessage("bot", "Hello! How can I assist you today?");
    appendMessage("user", "Hi! I need help with my order.");
    appendMessage("bot", "Sure, please provide me with your order number.");
    appendMessage("user", "My order number is #123456.");
    appendMessage("bot", "Thank you! Let me check the status of your order.");
    appendMessage(
        "bot",
        "Your order is currently in transit and expected to arrive tomorrow."
    );
});
