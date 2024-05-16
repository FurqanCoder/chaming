// Set up CSRF token for AJAX requests
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

// Function to add product to cart
function addtocart(id) {
    $.ajax({
        url: "/cart",
        method: "POST",
        data: { id: id },
        dataType: "json",
        success: function(response) {
            // Common code for both success cases
            if (response.status == false) {
                alert(response.message);
            }else{
                alert(response.message);
                console.log(response.data['count']);

                if (response.data['count'] > 0) {
                    // console.log(response.data.products)
                    $.each(response.data.products, function(index, data) {
                        var product = data;
                        console.log(product);
                        
                        var thumbnail = data.options.thumnail;
                        // console.log(thumbnail);
                        var imageUrl = "/storage/" + thumbnail;
                        var row = createTableRow(product, imageUrl);
                        $('#cart-products').append(row);
                    });
                } else {
                    $('#cart-products').html('<p>Your cart is empty</p>');
                    console.log('else working')
                }

                $('#card-count').text(response.data['count']);
                $('#card-total').text('Rs.' +response.data['total']);
            }
        },
        error: function(xhr, status, error) {
            console.error(xhr.responseText);
            alert(xhr.responseText);
        }
    });
}

function createTableRow(product, imageUrl) {
    return '<tr class="position-relative">' +
                // '<td class="align-middle text-center">' +
                //     '<a href="javascript:(0);" onclick="addtocart({{$dat->id}})" class="d-block clear-product">' +
                //         '<i class="far fa-times"></i>' +
                //     '</a>' +
                // '</td>' +
                '<td class="shop-product">' +
                    '<div class="d-flex align-items-center">' +
                        '<div class="me-6">' +
                            '<img src="' + imageUrl + '" width="60" height="80" alt="Product Image" />' +
                        '</div>' +
                        '<div class="">' +
                            '<p class="card-text mb-1">' +
                                '<span class="fs-13px fw-500 text-decoration-line-through pe-3">$39.00</span>' +
                                '<span class="fs-15px fw-bold text-body-emphasis">$29.00</span>' +
                            '</p>' +
                            '<p class="fw-500 text-body-emphasis">' + product.name + '</p>' +
                        '</div>' +
                    '</div>' +
                '</td>' +
                
            '</tr>';
}
$(document).ready(function() {
    // Function to retrieve cart data via AJAX
    function getCartData() {
        $.ajax({
            url: "/cartajax",
            method: "GET",
            dataType: "json",
            success: function(response) {
                if (response.data['count'] > 0) {
                    // console.log(response.data.products)
                    $.each(response.data.products, function(index, data) {
                        var product = data;
                        console.log(product);
                        
                        var thumbnail = data.options.thumnail;
                        // console.log(thumbnail);
                        var imageUrl = "/storage/" + thumbnail;
                        var row = createTableRow(product, imageUrl);
                        $('#cart-products').append(row);
                    });
                } else {
                    $('#cart-products').html('<p>Your cart is empty</p>');
                    console.log('else working')
                }

                $('#card-count').text(response.data['count']);
                $('#card-total').text('Rs.' +response.data['total']);
                updateCartUI(response.data);
            },
            error: function(xhr, status, error) {
                console.error('Error retrieving cart data:', error);
            }
        });
    }

    // Function to update UI with cart data
    function updateCartUI(cartData) {
        // Update your UI here with the cart data
        console.log('Cart Data:', cartData);
        // Example: Update cart count
        $('#cart-count').text(cartData.length);
    }

    // Call getCartData when the page loads to fetch the initial cart data
    getCartData();
});


