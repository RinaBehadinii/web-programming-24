<!DOCTYPE html>
<html>
<head>
    <title>Order Form</title>
</head>
<body>
<div id="forma">
    <form action="processorder.php" method="post">
        <table border=0 align=center>
            <tr>
                <td colspan="2"><h2 align="center">Please Fill Out The Order Form!</h2></td>
            </tr>
            <tr bgcolor=#cccccc>
                <td width=150>Item</td>
                <td width=15>Quantity</td>
            </tr>
            <tr>
                <td>Tires</td>
                <td align=center><input type="text" name="tireqty" size="3" maxlength="3" /></td>
            </tr>
            <tr>
                <td>Oil</td>
                <td align=center><input type="text" name="oilqty" size="3" maxlength="3" /></td>
            </tr>
            <tr>
                <td>Spark Plugs</td>
                <td align=center><input type="text" name="sparkqty" size="3" maxlength="3" /></td>
            </tr>
            <tr>
                <td colspan=2 align=center><input type="submit" value="Submit"></td>
            </tr>
        </table>
</div>
</body>
</html>