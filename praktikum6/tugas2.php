<!DOCTYPE html>
<html>
<head>
    <title>Biodata</title>
</head>
<body>
    <form method="POST" action="biodata.php">
        <center>
            <h3>Silahkan isi biodata berikut!</h3>
        </center>
        <table width="500" align="center" cellpadding="3">
            <tr>
                <td>Nama Lengkap</td>
                <td><input type="text" name="nama1"></td>
            </tr>
            <tr>
                <td>Nama Panggilan</td>
                <td><input type="text" name="nama2"></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td><input type="radio" name="gender" value="Laki-laki" required>Laki-laki</td>
                <td><input type="radio" name="gender" value="Perempuan" required>Perempuan</td>
            </tr>
            <tr>
                <td>Tempat Lahir</td>
                <td><input type="text" name="tempatlahir" placeholder="Kota"></td>
            </tr>
            <tr>
                <td>Tanggal Lahir</td>
                <td><input type="date" name="tgllahir"></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><input type="text" name="alamat"></td>
            </tr>
            <tr>
                <td>Pekerjaan</td>
                <td><input type="text" name="pekerjaan"></td>
            </tr>
            <tr>
                <td>Hobi</td>
                <td><input type="text" name="hobi"></td>
            </tr>
            <tr>
                <td>Motto Hidup</td>
                <td><textarea name="motto" id="motto" cols="30" rows="10"></textarea></td>
            </tr>
            <tr>
                <td>
                    <input type="submit" name="submit" value="Submit">
                    <input type="reset" name="reset" value="Reset">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>