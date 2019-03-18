<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Rapid Grocery Admin</title>

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
</head>
<body>
<header>
    <img src="../img/logo.png" alt="logo"  style="float:left"/>
    <h3>Orders</h3>
</header>

<section>
    <?php
    include "menu_order.html";
    ?>

    <article>
        <h2>List of order</h2>
        <table id="customers">
            <tr>
                <th>Order ID</th>
                <th>Order Date</th>
                <th>Customer Name</th>
                <th>Address</th>
                <th>Amount</th>
                <th>Manage</th>
            </tr>
            <tr>
                <td>1</td>
                <td>2019-02-03</td>
                <td>Youngsun</td>
                <td>123 Old Huron rd</td>
                <td>$150</td>
                <td>
                    <a href="order_detail.php"><i class="material-icons">list</i></a>
                    <a href="order_edit.php"><i class="material-icons">brush</i></a>
                    <a href="#"><i class="material-icons">clear</i></a>
                </td>
            </tr>
            <tr>
                <td>2</td>
                <td>2019-02-05</td>
                <td>Komal</td>
                <td>156 King street</td>
                <td>$210</td>
                <td>
                    <a href="#"><i class="material-icons">list</i></a>
                    <a href="#"><i class="material-icons">brush</i></a>
                    <a href="#"><i class="material-icons">clear</i></a>
                </td>
            </tr>
            <tr>
                <td>3</td>
                <td>2019-02-05</td>
                <td>Jody</td>
                <td>548 Queen court</td>
                <td>$170</td>
                <td>
                    <a href="#"><i class="material-icons">list</i></a>
                    <a href="#"><i class="material-icons">brush</i></a>
                    <a href="#"><i class="material-icons">clear</i></a>
                </td>
            </tr>
            <tr>
                <td>4</td>
                <td>2019-02-06</td>
                <td>Youngsun</td>
                <td>123 Old Huron rd</td>
                <td>$150</td>
                <td>
                    <a href="order_detail.html"><i class="material-icons">list</i></a>
                    <a href="order_edit.html"><i class="material-icons">brush</i></a>
                    <a href="#"><i class="material-icons">clear</i></a>
                </td>
            </tr>
            <tr>
                <td>5</td>
                <td>2019-02-07</td>
                <td>Komal</td>
                <td>156 King street</td>
                <td>$210</td>
                <td>
                    <a href="#"><i class="material-icons">list</i></a>
                    <a href="#"><i class="material-icons">brush</i></a>
                    <a href="#"><i class="material-icons">clear</i></a>
                </td>
            </tr>
            <tr>
                <td>6</td>
                <td>2019-02-10</td>
                <td>Jody</td>
                <td>548 Queen court</td>
                <td>$170</td>
                <td>
                    <a href="#"><i class="material-icons">list</i></a>
                    <a href="#"><i class="material-icons">brush</i></a>
                    <a href="#"><i class="material-icons">clear</i></a>
                </td>
            </tr>
            <tr>
                <td>7</td>
                <td>2019-02-11</td>
                <td>Youngsun</td>
                <td>123 Old Huron rd</td>
                <td>$150</td>
                <td>
                    <a href="order_detail.html"><i class="material-icons">list</i></a>
                    <a href="order_edit.html"><i class="material-icons">brush</i></a>
                    <a href="#"><i class="material-icons">clear</i></a>
                </td>
            </tr>
            <tr>
                <td>8</td>
                <td>2019-02-11</td>
                <td>Komal</td>
                <td>156 King street</td>
                <td>$210</td>
                <td>
                    <a href="#"><i class="material-icons">list</i></a>
                    <a href="#"><i class="material-icons">brush</i></a>
                    <a href="#"><i class="material-icons">clear</i></a>
                </td>
            </tr>
            <tr>
                <td>9</td>
                <td>2019-02-13</td>
                <td>Jody</td>
                <td>548 Queen court</td>
                <td>$170</td>
                <td>
                    <a href="#"><i class="material-icons">list</i></a>
                    <a href="#"><i class="material-icons">brush</i></a>
                    <a href="#"><i class="material-icons">clear</i></a>
                </td>
            </tr>
            <tr>
                <td>10</td>
                <td>2019-02-14</td>
                <td>Youngsun</td>
                <td>123 Old Huron rd</td>
                <td>$150</td>
                <td>
                    <a href="order_detail.html"><i class="material-icons">list</i></a>
                    <a href="order_edit.html"><i class="material-icons">brush</i></a>
                    <a href="#"><i class="material-icons">clear</i></a>
                </td>
            </tr>
        </table>
        <br/>

        <div align="center">
        <a href="#">1</a> | <a href="#">2</a> | <a href="#">3</a>
        </div>
    </article>
</section>

<?php
include "footer.php";
?>

</body>
</html>