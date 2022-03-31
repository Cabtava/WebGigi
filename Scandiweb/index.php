<?php 
include 'conn.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Page</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
    <div class="wrapper">                   <!--Wrapper (container) for all the elements-->
        <header>
            <h1>Product List</h1>
            <div class="left-col">
                <button onClick="myOnClickFn()" type="submit" name="add" class="add-btn">Add</button>
                <button type="submit" name="delete" class="delete-btn" id="delete-product-btn" onClick="deleteMe()">Mass Delete</button></a>
            </div>
        </header>

        <form action="<?=HOMEPAGE?>" method="post" id="massDelete-form">
            <?php 
            $_SESSION['token'] = md5(time().'productlist'); 
            ?>
            <input type="hidden" id="action_type" name="action_type" value="delete" />
            <input type="hidden" id="token" name="token" value="<?=$_SESSION['token']?>" />
            <section class="feature">
                     <?php 
                    $prep = $HANDLER->prepare("SELECT * FROM `products` WHERE `status`=0 ORDER BY `id` DESC");
                    $prep->execute();
                    $result = $prep->fetchAll(PDO::FETCH_ASSOC);

                    foreach($result as $item):
                    ?>  
                    <div class="quote">
                        <label class="checkbox" class="delete-checkbox" for="myCheckboxId">
                            <input class="checkbox__input" type="checkbox" name="deleteme[]" id="deleteme" value="<?=$item['id']?>" />    
                        </label>
                       
                        <p class="sku"><?=$item['sku']?></p>
                        <p class="name"><?=$item['name']?></p>
                        <p class="price"><?=$item['price']?>$</p>
                        <p class="type">Type: <?=$item['type']?></p>
                        <?php if($item['type']=="book"):?>
                        <p class="size">Weight (KG): <?=$item['weight']?></p>
                        <?php endif; ?>

                        <?php if($item['type']=="dvd-disc"):?>
                        <p class="size">Size: <?=$item['size']?></p>
                        <?php endif; ?>

                        <?php if($item['type']=="furniture"):?>
                        <p class="size">Height: <?=$item['height']?></p>
                        <p class="size">Width: <?=$item['width']?></p>
                        <p class="size">Length: <?=$item['length']?></p>
                        <?php endif; ?>
                    </div>
                    <?php endforeach; ?>               
            </section>
        </form>

    </div>

    <script src="javaScript/script.js"></script>        <!--Src Javascript (link)-->
</body>
</html>