<!-- index.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Pendaftaran Siswa Baru SMP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h2>Formulir Pendaftaran Siswa Baru SMP</h2>

        <form method="post" action="proses_input.php">
            <table>
                <tr>
                    <td>Nama:</td>
                    <td><input type="text" name="nama" required></td>
                </tr>
                <tr>
                    <td>Alamat:</td>
                    <td><textarea name="alamat" rows="4"></textarea></td>
                </tr>
                <tr>
                    <td>Tanggal Lahir:</td>
                    <td><input type="date" name="tanggal_lahir"></td>
                </tr>
                <tr>
                    <td>Jenis Kelamin:</td>
                    <td>
                        <select name="jenis_kelamin">
                            <option value="Laki-laki">Laki-laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Kelas:</td>
                    <td><input type="text" name="kelas"></td>
                </tr>
                <tr>
                    <td colspan="2"><input type="submit" name="submit" value="Simpan"></td>
                </tr>
            </table>
        </form>
        <a href="tampilkan.php">Menampilkan Data</a>
    </div>
</body>
</html>