<?php

session_start();

require_once ('php/CreateDb.php');
require_once ('./php/component.php');





$database = new CreateDb("Productdb", "Producttb");

if (isset($_POST['add'])){
    /// afiseaza($_POST['product_id']);
    if(isset($_SESSION['cart'])){

        $item_array_id = array_column($_SESSION['cart'], "product_id");

        if(in_array($_POST['product_id'], $item_array_id)){
            echo "<script>alert('Produsul a fost deja adaugat in cos!')</script>";
            echo "<script>window.location = 'index.php'</script>";
        }else{

            $count = count($_SESSION['cart']);
            $item_array = array(
                'product_id' => $_POST['product_id']
            );

            $_SESSION['cart'][$count] = $item_array;
        }

    }else{

        $item_array = array(
                'product_id' => $_POST['product_id']
        );

        // Creaza o noua sesiune
        $_SESSION['cart'][1] = $item_array;
        print_r($_SESSION['cart']);
    }
}


?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Renn </title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.css" />

    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="src/style.css">
</head>
<body>



<?php require_once ("php/header.php"); ?>
<br>
<h1 style="margin-bottom:-20px;"><center>Echipamente</center></h1>
<h2 style="margin-top:40px;margin-bottom:-60px;margin-left:50px;"><u>Iarna</u></h2>

<div class="container">
        <div class="row text-center py-5">
            <?php
                $result = $database->getData();
                while ($row = mysqli_fetch_assoc($result)){
                    component($row['product_name'], $row['product_price'], $row['product_image'], $row['id']);
					if($row['id']=='8') echo'<h2 style="position:absolute;margin-top:75%;margin-left:-5%;"><div id="toamna"><u>Toamna</u></h2>';
					if($row['id']=='16') echo'<h2 style="position:absolute;margin-top:150.5%;margin-left:-5%;"><div id="primavara"><u>Primavara</u></h2>';
					if($row['id']=='24') echo'<h2 style="position:absolute;margin-top:225.5%;margin-left:-5%;"><div id="vara"><u>Vara</u></h2>';
					if($row['id']=='28') echo'<h2 style="position:absolute;margin-top:264%;margin-left:-5%;"><div id="imbracaminte"><u>Imbracaminte</u></h2>';
					if($row['id']=='32') echo'<h2 style="position:absolute;margin-top:301.5%;margin-left:-5%;"><div id="accesorii"><u>Accesorii</u></h2>';
                }
            ?>
        </div>
</div>





<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
