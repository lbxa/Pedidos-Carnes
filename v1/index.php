<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <!-- Forces the browser to render as that particular version's standards. It is not supported for IE7 and below. -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge, IE=9; IE=8, IE=7"/>
    <!-- jQuery plugin --><script type="text/javascript" src="assets/jquery/jquery.min.js"></script>
    <!-- Bootstrap CSS --><link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css" type="text/css"/>
    <!-- Bootstrap javascript --><script type="text/javascript" src="assets/bootstrap/js/bootstrap.min.js"></script>
    <!-- Font Awesome CSS --><link rel="stylesheet" href="assets/fa/css/all.css">
    <!-- Font Awesome JS --><script defer src="assets/fa/js/all.js"></script>
    <title>Pedidos Carnes</title>
    <style media="screen">
        /* Default Template Styles */
        * {font-family: 'Raleway', sans-serif;} *, *::before, *::after {
        margin: 0; padding: 0; -webkit-box-sizing: border-box; -moz-box-sizing:
        border-box; -o-box-sizing: border-box; box-sizing: border-box;
        -webkit-appearance: none; -moz-appearance: none; -o-appearance: none;
        appearance: none; outline: none;} *:focus {-webkit-appearance: none;
        -moz-appearance: none; -o-appearance: none; appearance: none; outline:
        none;} a { color: inherit; outline: none} a:focus {outline: none}
        button:focus {-webkit-outline: none !important; outline: none !important;}
        /*Div Sub-Dividers*/
        .sub_5px { width: 100%; height: 5px;} .sub_10px { width: 100%; height:
        10px;} .sub_20px { width: 100%; height: 20px;} .sub_30px  { width: 100%;
        height: 30px;} .sub_40px  { width: 100%; height: 40px;} .sub_50px  {
        width: 100%; height: 50px;} .sub_60px { width: 100%; height: 60px;}
        .sub_70px  { width: 100%; height: 70px;} .sub_80px  { width: 100%;
        height: 80px;}
    </style>
    <!-- Custom Style Sheets -->
    <link rel="stylesheet" type="text/css" href="styles.css"/>
</head>
<body>
    <?php require_once("nav.php"); ?>

    <div class="container-fluid">
        <!-- start row -->
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6">
            
            <div class="product-container">
            <h3 class="product-title" >Products</h3>
            <button class="product-add-btn"><i class="fal fa-2x fa-plus-circle"></i></button>
            
            <!-- start product data -->
            
                <!-- <ul class="product-list">
                    <li class="product-data-row">
                        <span class="product-remove-btn"><i class="fal fa-2x fa-minus-square"></i></span>
                        <select class="product-list" name="">
                            <option value="Picanha">Picanha</option>
                            <option value="Coracao">Coracao</option>
                            <option value="Alcatra">Alcatra</option>
                            <option value="Fraudinha">Fraudinha</option>
                            <option value="Costela">Costela</option>
                            <option value="Cupin">Cupin</option>
                        </select>
                        <input type="text" value="Preco $4.55" class="product-price" disabled>
                        <input type="number" value="2" class="product-quantity">
                        <input type="text" value="Total $10.00" class="product-total" disabled>
                    </li>

                </ul> -->

                <ul class="product-list">
                    <!-- <li class="product-data"><button class="product-remove-btn">Delete</button>Test</li> -->
    
                </ul>

            
            <!-- end product data -->
            </div>

            <hr>
            <div class="product-summary">
                <p>Total $30.00</p>
            </div>
    
            </div>

        </div>
        <!-- end row -->
    </div>

</body>
<!-- Custom scripts -->
<script defer src="js/aux.js" type="text/javascript"></script>
</html>