<!DOCTYPE html>
<html>
<head>
    <title>Activity 1.2</title>
</head>
<body>

<h2>Menu</h2>

<table border="1" style="width:215px" >
    <tr>
        <th>Order</th>
        <th>Amount</th>
    </tr>
    <tr>
        <td> Burger </td>
        <td>50</td>
    </tr>
    <tr>
        <td>Fries</td>
        <td>75</td>
    </tr>
    <tr>
        <td>Steak</td>
        <td>150</td>
    </tr>
</table>

<form method="post" action="handleForms.php">
    <br>
    <label for="order">Select Item:</label>
    <select id="order" name="order" required>
        <option value="Burger">Burger</option>
        <option value="Fries">Fries</option>
        <option value="Steak">Steak</option>
    </select><br><br>

    <label for="quantity">Quantity:</label>
    <input type="number" id="quantity" name="quantity" min="1" required><br><br>

    <label for="cash">Cash:</label>
    <input type="number" id="cash" name="cash" min="1" required><br><br>

    <input type="submit" name="submit" value="Submit">
</form>

</body>
</html>
