<!DOCTYPE html>
<html>
<head>
    <title>Tambah Soal</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="judul">
        <h1>Tambah Soal</h1>

    </div>

    <br/>



    <br/>
    <h3>Input Soal baru</h3>
    <form action="input-aksi.php" method="POST">
        <table>
            <tr>
                <td>Nomer</td>
                <td><input type="text" name="Nomer"></td>
            </tr>
            <tr>
                <td>Soal</td>
                <td><input type="text" name="Soal"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="Simpan"></td>
            </tr>
        </table>
    </form>
</body>
</html>
