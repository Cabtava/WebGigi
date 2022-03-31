<?php 
include 'conn.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Add</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
    <div class="wrapper">
        <header>
            <h1>Product Add</h1>

                <div class="left-col">
                    <button onClick="submit_form()" type="submit" name="save" class="save-btn">Save</button>
                    <button onClick="myOnClickFnOne()" type="submit" name="cancel" class="cancel-btn">cancel</button></a>
                </div>
        </header>

        <div class="product-form" id="product_form">
            <form action="<?=HOMEPAGE?>" method="post" id="the-form">
                <?php 
                $_SESSION['token'] = md5(time().'productlist'); 
                echo $message;
                ?>
                <input type="hidden" id="action_type" name="action_type" value="add" />
                <input type="hidden" id="token" name="token" value="<?=$_SESSION['token']?>" />
                <div class="input-field">
                    <label>SKU</label>
                    <input type="text" class="input" id="sku" name="sku" value="" />
                    <font color="red" style="font-size:11px; padding-left: 15px;">* required!</font>
                </div>

                <div class="input-field">
                    <label>Name</label>
                    <input type="text" class="input" id="name" name="name" value="" />
                    <font color="red" style="font-size:11px; padding-left: 15px;">* required!</font>
                </div>

                <div class="input-field">
                    <label>Price</label>
                    <input type="number" class="input" id="price" name="price" value="" />
                    <font color="red" style="font-size:11px; padding-left: 15px;">* required!</font>
                </div>

                <div class="input-field">
                    <label>Type Switcher</label>
                    <div class="custom-select">
                        <select id="type" name="type">
                            <option value="">Choose</option>
                            <option value="dvd-disc">DVD-disc</option>
                            <option value="book">Book</option>
                            <option value="furniture">Furniture</option>
                        </select>
                        <font color="red" style="font-size:11px; padding-left: 15px;">* required!</font>
                    </div>
                </div>

                <div class="input-field" style="display: none;" id="hidden-dvd-disc">
                    <label>Size</label>
                    <input type="number" class="input" id="size" name="size" value="" />
                    <font color="red" style="font-size:11px; padding-left: 15px;">* required!</font>
                </div>

                <div class="input-field" style="display: none;" id="hidden-book">
                    <label>Weight (KG)</label>
                    <input type="number" class="input" id="weight" name="weight" value="" />
                    <font color="red" style="font-size:11px; padding-left: 15px;">* required!</font>
                </div>

                <div style="display: none;" id="hidden-furniture">
                    <div class="input-field">
                        <label>Height</label>
                        <input type="number" class="input" id="height" name="height" value="" />
                        <font color="red" style="font-size:11px; padding-left: 15px;">* required!</font>
                    </div>

                    <div class="input-field">
                        <label>Width</label>
                        <input type="number" class="input" id="width" name="width" value="" />
                        <font color="red" style="font-size:11px; padding-left: 15px;">* required!</font>
                    </div>

                    <div class="input-field">
                        <label>Length</label>
                        <input type="number" class="input" id="length" name="length" value="" />
                        <font color="red" style="font-size:11px; padding-left: 15px;">* required!</font>
                    </div>
                </div>
            </form>
        
        </div>
    </div>

    <script src="javaScript/script.js"></script>
</body>
</html>