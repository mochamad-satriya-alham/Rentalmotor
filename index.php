<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
        <h2>Rental motor</h2>
        <table>
            <form action="" method="post">
                <tr>
                    <td>Nama pelanggan</td>
                    <td>:</td>
                    <td><input type ="text" name="nama"></td>
                </tr>
                <tr>
                    <td>lama waktu rental (per hari)</td>
                    <td>:</td>
                    <td><input type="text" name="lamarental"></td>
                </tr>
                <tr>
                    <td>Jenis motor :</td>
                    <td>
                        <select name="jenis" required>
                            <option value="Scooter">Scooter</option>
                            <option value="Sport">Sport</option>
                            <option value="SportTouring">SportTouring</option>
                            <option value="Cross">Cross</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td><input type="submit" value="submit" name="submit"></td>
                </tr>
            </form>
        </table>
        <div style=" 1px solid black; width: 40%; padding: 10px; margin= 10px;">
    <?php
    include 'rental.php';
    $proses = new rental();
    $proses->setharga(70000, 90000, 90000, 100000);
    if (isset($_POST['submit'])) {
        $proses->member = $_POST['nama'];
        $proses->Jenis = $_POST['jenis'];
        $proses->Waktu = $_POST['lamarental'];

        $proses->pembayaran();;
    }
    ?>
    </div>
</center>
</body>
</html>