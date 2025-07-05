<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Interest Calculator</title>
</head>
<body>
    <form action="submit/simpal.php" method="post">
        <table>
            <tr>
                <td>Enter The Price:</td>
                <td>
                    <input type="number" name="price" required>
                </td>
            </tr>
            <tr>
                <td>Enter The Rate:</td>
                <td>
                    <input type="number" name="rate" required>
                </td>
            </tr>
            <tr>
                <td>Enter The Year:</td>
                <td>
                    <input type="number" name="year" required>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <input type="submit" name="submit" value="Calculate">
                    <input type="reset" value="Reset">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>
