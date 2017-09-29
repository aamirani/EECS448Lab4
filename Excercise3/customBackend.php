<?php
//Definining variables to use
$gprice = $_POST['gamount'];
$sprice = $_POST['samount'];
$hprice = $_POST['hamount'];
if ($_POST['shipping'] == 'Free'){
    $shipprice = 0;
}
elseif ($_POST['shipping'] == 'Overnight') {
    $shipprice = 50;
}
elseif($_POST['shipping'] == "3 Day"){
    $shipprice = 5;
}

$total = 30*$gprice + $sprice * 50 + $hprice * 10 + $shipprice;

//begin HTML printing
echo'<html>';
echo'<head>';
echo'<link rel="stylesheet" href="style.css">';
echo'<title>Reciept</title>';
echo'</head>';
echo'<body>';


echo'<div class="reciept">';
echo'<h2></h2>Welcome ' . $_POST['username'] . ' with password: ' . $_POST['password'] . '</h2>';
echo'<table border="1">';
echo'<tr><th>Quantity</th><th>Cost Each</th><th>Subtotal</th></tr>';
echo'<tr><td>Glove</td><td>$30</td><td>$' . $gprice * 30 . '</td></tr>';
echo'<tr><td>Shoes</td><td>$50</td><td>$' . $sprice * 50 . '</td></tr>';
echo'<tr><td>Hats</td><td>$10</td><td>$' . $hprice * 10 . '</td></tr>';
echo'<tr><td>Shipping</td><td>' . $_POST['shipping'] . '</td><td>$ ' . $shipprice . '</td></tr>';
echo'<tr><td>Total Cost: </td><td></td><td>$' . $total . '</td></tr>';
echo'</table>';
echo'</div>';
echo'</body>';
echo'</html>';
//end
?>