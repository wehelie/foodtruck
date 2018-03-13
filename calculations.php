<?php
$order_total = 0; //variable to store the total price for the orders given
$price_map = getPriceMap(); //variable to store the mapping of items and their prices
$orderList = $_REQUEST['order']; //get the list of items ordered by the customer from the index.php page
$order_total = getOrderTotal($orderList, $price_map); //calculation of total price for the orders
$tax = $order_total * 0.65; //WA state sales tax as of 5/03/17. Calculation of tax
$grand_total = $order_total + $tax; //calculation of grand total , total price + tax

// echo $grand_total;
// perform grand total calculations

function grandTotal($price, $sides)
{

    return $grand_total = ($price + $Quantity) + ($sides * $quant);
}

/**
 * This function is used to calculate the total price of the items ordered by the customer
 */

function getOrderTotal($item_arr, $price_map)
{
    $total = 0;
    for ($i = 0; $i < count($item_arr); $i++) {
        $total = $total + $price_map[$item_arr[$i]];

        // echo "adding price for ".$item_arr[$i]." as ".$price_map[$item_arr[$i]]."<br />";
    }

    return $total;
}

/**
 * This function creates a mapping of each item in the
 * menu and their prices and returns an associative array containing
 * the items and their prices
 */

function getPriceMap()
{
    $priceList = [
        'grand' => 6.50,
        'animal' => 7.50,
        'veggie' => 8.00,
        'mayo' => 0.50,
        'cheese' => 0.75,
        'chili' => 1.25,
        'jala' => 0.35,
        'meat' => 2.50,
        'fries' => 1.75,
        'shake' => 3.75,
        'drink' => 1.99,
        'lemon' => 2.50];
    return $priceList;
}
