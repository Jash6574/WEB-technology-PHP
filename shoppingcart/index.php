


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>shopping cart</title>
</head>

<body>
    <form action="cart.php" method="POST">
        <table>
            <tr>
                <td>
                    <label class="heading">Select As Per Your Interest</label>
                </td>
            </tr>
            <tr>
                <td>

                    <input type="checkbox" name="check_list[]" value="Shirt"><label>Shirt</label>
                </td>
            </tr>
            <tr>
                <td>

                <input type="checkbox" name="check_list[]" value="T-Shirt"><label>T-Shirt</label>

                </td>
               
            </tr>
            <tr>
                <td>

                <input type="checkbox" name="check_list[]" value="Shoes"><label>Shoes</label>

                </td>
               
            </tr>
            <tr>
                <td>

                <input type="checkbox" name="check_list[]" value="Watch"><label>Watch</label>

                </td>
                
            </tr>
            <tr>
                <td>

                <input type="checkbox" name="check_list[]" value="Belt"><label>Belt</label>

                </td>
                
            </tr>
            <tr>
                <td>
                <input type="submit" name="submit" Value="Add to Cart"/>
                </td>
            </tr>
        </table>
    </form>
</body>

</html>
    