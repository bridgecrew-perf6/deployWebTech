<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
        integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/index.css">
    <title>RestFul Api</title>
</head>

<body>



    <br><br>
    <h2 class="text-center">Products</h2>
    <br><br>
    <!-- Button trigger modal -->
    <button type="button" class="modalBtn btn btn-primary d-block mx-auto" data-toggle="modal" data-target="#exampleModal">
        Add New Product
    </button>
    
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Product</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form id="add-product-form" method="post" enctype='multipart/form-data'>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="item-name">Product Name</label>
                            <input name="product-name" type="tetx" class="form-control" id="item-name">
                        </div>
                        <div class="form-group">
                            <label for="item-price">Product Price</label>
                            <input name="product-price" type="number" class="form-control" id="item-price">
                        </div>
                        <label for="item-image">Product Image</label>
                        <div class="input-group mb-3">
                            <br>
                            <div class="custom-file">
                                <input name="product-image" type="file" class="custom-file-input" id="item-image"
                                    aria-describedby="inputGroupFileAddon01">
                                <label class="custom-file-label" for="item-image">Choose file</label>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Add</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <br><br>

    <div class="container">
        <div class="row d-flex products-container">
        
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF"
        crossorigin="anonymous"></script>
    <script src="assets/js/index.js"></script>
</body>

</html>
