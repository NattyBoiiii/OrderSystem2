<?php
if (isset($_POST['submit'])) {
    $order = htmlspecialchars(trim($_POST['order']));
    $quantity = (int)$_POST['quantity'];
    $cash = (int)$_POST['cash'];
    date_default_timezone_set('Asia/Manila');

    $menu = array(
        "Burger" => 50,
        "Fries" => 75,
        "Steak" => 150,
    );

    if (array_key_exists($order, $menu)) {
        $total_cost = $menu[$order] * $quantity;
        $change = $cash - $total_cost;

        if ($cash < $total_cost) {
            echo '<div style="border: 1px dotted red; font-family: Arial;">';
            echo "<h2>Sorry, balance not enough</h2>";
            echo '</div>';
        } else {
            echo '<div style="border: 1px dotted black; font-family: Arial;">';
            echo "<h1 style='text-align: center;'> RECEIPT </h1>";
            echo "<h2> Total Price: $total_cost<br> </h2>";
            echo "<h2> You Paid: $cash<br> </h2>";
            echo "<h2> CHANGE: $change<br> </h2>";
            echo '<h2>'.date('m/d/Y') . " " . date("h:i:sa").'</h2>' ;
            echo '</div>';
        }
    } else {
        echo "<p style='color:red;'>Invalid order item selected.</p>";
    }
}
?>
