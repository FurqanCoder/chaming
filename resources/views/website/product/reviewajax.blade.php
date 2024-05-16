<script>
     $(document).ready(function(){
        // Function to calculate overall rating
        function calculateOverallRating(reviews) {
            let totalRating = 0;
            
            // Loop through each review and sum up the ratings
            $.each(reviews, function(index, review) {
                totalRating += review.rating;
            });

            // Calculate the average rating
            const overallRating = totalRating / reviews.length;
            
            // Split the overallRating into integer and fractional parts
            const [integerPart, fractionalPart] = overallRating.toFixed(2).split('.');
            
            // Format the overallRating with one digit before the point and two digits after the point
            return integerPart[0] + '.' + fractionalPart;
        }
        
        // time formatting
        function timeAgo(timestamp) {
            const currentDate = new Date();
            const date = new Date(timestamp);
            const seconds = Math.floor((currentDate - date) / 1000);

            let interval = Math.floor(seconds / 31536000);

            if (interval > 1) {
                return interval + " years ago";
            }
            interval = Math.floor(seconds / 2592000);
            if (interval > 1) {
                return interval + " months ago";
            }
            interval = Math.floor(seconds / 86400);
            if (interval > 1) {
                return interval + " days ago";
            }
            interval = Math.floor(seconds / 3600);
            if (interval > 1) {
                return interval + " hours ago";
            }
            interval = Math.floor(seconds / 60);
            if (interval > 1) {
                return interval + " minutes ago";
            }
            return Math.floor(seconds) + " seconds ago";
        }

        // Function to fetch and display comments
        function fetchComments() {
            $.ajax({
                url: '/review/{{$productId}}',
                type: 'GET',
                dataType: 'json',
                success: function(response){
                    $('.comment-container').empty(); // Clear existing comments

                    $.each(response.data, function(index, review) {
                        
                        var html = '<div class="border-bottom pb-7 pt-10">';
                        html += '<div class="d-flex align-items-center mb-6">';
                        html += '<div class="d-flex align-items-center fs-15px ls-0">';
                        html += '<div class="rating">';
                        html += '<div class="empty-stars">';
                        html += '<span class="star">';
                        html += '<svg class="icon star-o">';
                        html += '<use xlink:href="#star-o"></use>';
                        html += '</svg>';
                        html += '</span>';
                        html += '<span class="star">';
                        html += '<svg class="icon star-o">';
                        html += '<use xlink:href="#star-o"></use>';
                        html += '</svg>';
                        html += '</span>';
                        html += '<span class="star">';
                        html += '<svg class="icon star-o">';
                        html += '<use xlink:href="#star-o"></use>';
                        html += '</svg>';
                        html += '</span>';
                        html += '<span class="star">';
                        html += '<svg class="icon star-o">';
                        html += '<use xlink:href="#star-o"></use>';
                        html += '</svg>';
                        html += '</span>';
                        html += '<span class="star">';
                        html += '<svg class="icon star-o">';
                        html += '<use xlink:href="#star-o"></use>';
                        html += '</svg>';
                        html += '</span>';
                        html += '</div>';
                        html += '<div class="filled-stars" style="width: 100%">';
                        // for rating stars
                        for(let i =1; i <= review.rating; i++){
                            html += '<span class="star">';
                            html += '<svg class="icon star text-primary">';
                            html += '<use xlink:href="#star"></use>';
                            html += '</svg>';
                            html += '</span>';
                        }
                        html += '</div>';
                        html += '</div>';
                        html += '</div>';
                        html += '<span class="fs-3px mx-5"><i class="fas fa-circle"></i></span>';
                        html += '<span class="fs-14">'+timeAgo(review.updated_at)+'</span>';
                        html += '</div>';
                        html += '<div class="d-flex justify-content-start align-items-center mb-5">';
                        html += '<div class="avatar">' + review.name.charAt(0).toUpperCase() + '</div>';
                        html += '<div>';
                        html += '<h5 class="mt-0 mb-4 fs-14px text-uppercase ls-1">'+review.name+'</h5>';
                        html += '<p class="mb-0">/'+review.name+'</p>';
                        html += '</div>';
                        html += '</div>';
                        html += '<p class="fw-semibold fs-6 text-body-emphasis mb-5">'+review.title+'</p>';
                        html += '<p class="mb-10 fs-6">'+review.feedback+'</p>';

                        html += '</div>';
                        $('.comment-container').append(html);
                    });

                    $('.review-count').text(response.count + " Read Reviews");
                    const overallRating = calculateOverallRating(response.data);
                    $('.overall-rating').text(overallRating);
                    $lenghtstarts = (overallRating * 100) / 5;
                    $('.fill').css('width', $lenghtstarts + '%');
                },
                error: function(xhr, status, error){
                    console.error(error);
                }
            });
        }

        // Call fetchComments function initially to load comments
        fetchComments();

        $('#load-more-btn').click(function() {
            fetchComments(); // Call fetchComments with the updated page number
        });

        // Function to add comment via AJAX
        $('#reviewadd').submit(function(e) {
            e.preventDefault(); // Prevent the form from submitting normally
            
            // Create FormData object to store form data
            var formData = new FormData(this);

            $.ajax({
                url: '/review',
                type: 'POST',
                dataType: 'json',
                data: formData,
                contentType: false, // Prevent jQuery from setting the content type
                processData: false, // Prevent jQuery from processing the data
                success: function(response){
                    // Fetch comments again after adding a new comment
                    fetchComments();
                    $('#reviewadd')[0].reset(); // Reset the form after adding a new comment
                },
                error: function(xhr, status, error){
                    console.error(error);
                }
            });
        });
    });
</script>