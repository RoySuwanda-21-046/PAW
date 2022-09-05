<html>
<head>
        <title>operator aritmatika</title>
    </head>
    <body>
        <form name="calculator" method="post" action="pertemuan3_1.php">
            <table>
                <tr>
                    <td  colspan ="2">
                        <div align = "center"> calculator sederhana </div>
                    </td>
                </tr>
                <tr>
                    <td>operand pertama</td>
                    <td> <input type="text" name ="nilaipertama"></td>
                </tr>
                <tr>
                    <td> operator pertama</td>
                    <td> <select name = "operator">
                        <option value = "*">perkalian</option>
                        <option value = "/">pembagian</option>
                        <option value = "%">modulus</option>
                        <option value = "+">penjumlahan</option>
                        <option value = "-">pengurangan</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>operand kedua</td>
                    <td> <input type="text" name ="nilaikedua"></td>
                </tr>
                <tr>
                    <td><input type="submit" name ="proses" value="hitung"></td>
                </tr>
            </table>
        </form>
</html>