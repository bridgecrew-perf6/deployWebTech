
window.onload = getData();    
$('#add-product-form').on('submit', function (event) {
        event.preventDefault();
        var formData = new FormData(this);
        $.ajax({
            type: 'POST',
            url: 'ajax/addProduct.php',
            data: formData,
            cache: false, //It indicates whether the browser should cache the requested pages.
            contentType: false, // “application/x-www-form-urlencoded” and it is used when data send to the server.
            processData: false, //  It is used to specify whether or not data sent with the request should be transformed into a query string.
            success: function (response) {
                getData();
            },
            error: function (error) {
                console.log(error);
            }
        });
    });
    
    function getData()
    {
        $(document).ready(function () {
            $.ajax({
                type: 'GET',
                url: 'ajax/getProducts.php',
                success: function (response) {
                    var myData = JSON.parse(response);
                    var tmp = '';
                    $.each(myData, function () {
                        tmp += `
                            <div class="col-lg-4">
                                <div class="card">
                                    <div class="image-container">
                                        <img src="assets/images/${this["pImage"]}" alt="" srcset="">
                                    </div>
                                    <br>
                                <div class="card-bottom-container">
                                        <ul class="list-inline">
                                            <li class="list-inline-item float-left"><h5 >${this["pName"]}</h5></li>
                                            <li class="list-inline-item item-price float-right">${this["pPrice"]}$</li>
                                        </ul>
                                </div>
                                </div>
                            </div>
                            `;
                    });
                    $('.products-container').html(tmp);
                    tmp = '';
                },
                error: function (error) {
                    console.log(error);
                }

            });
        });
    }
