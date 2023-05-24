<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Buku</title>
</head>

<body>
    <center>
    <h3>Tambah Data Buku</h3>
    <table style="width:100%" cellspacing="0">
                <tr class="atas">
                    <td class="dua">
                        <center>    
                            <a class="nav-link" href="<?php echo "buku.php"; ?>"><b>Data buku</b></a>
                            &nbsp;&nbsp;
                            <a class="nav-link" href="<?php echo "tambah_buku.php"; ?>"><b>Tambah Data buku</b></a>
                        </center>    
                    </td>
                </tr>
    </table>
    <form action="simpan.php" method="post" enctype="multipart/form-data">
        <table>
            <tr>
                <td>Kode Buku</td>
                <td><input type="text" name="kode_buku"></td>
            </tr>
            <tr>
                <td>Judul</td>
                <td><input type="text" name="judul"></td>
            </tr>
            <tr>
                <td>Pengarang</td>
                <td><input type="text" name="pengarang"></td>
            </tr>
            <tr>
                <td>Penerbit</td>
                <td><input type="text" name="penerbit"></td>
            </tr>
            <tr>
                <td>Tahun Tebit</td>
                <td><input type="text" name="tahun_terbit"></td>
            </tr>
            <tr>
                <td>Cover</td>
                <td><input type="file" name="file" accept="image/*"id="file"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="SUBMIT"></td>
            </tr>
        </table>
    </form>
    </center>
</body>

</html>