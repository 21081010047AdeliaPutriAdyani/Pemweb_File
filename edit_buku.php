<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Data Buku</title>
</head>
<body>
    <?php
        if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["kode_buku"])) {
            // Mendapatkan kode buku dari parameter URL
            $kode_buku = trim($_GET["kode_buku"]);

            // Memeriksa apakah kode buku ada dalam file buku.txt
            $file_name = "buku.txt";
            $read = file($file_name);
            $found = false;
            $selected_buku = [];

            foreach ($read as $buk) {
                $data_buku = explode("-", $buk);

                if ($data_buku[0] == $kode_buku) {
                    $found = true;
                    $selected_buku = $data_buku;
                    break;
                }
            }

            if ($found) {
                // Form edit buku
                // Ambil nilai kode_buku dari URL jika tersedia
                $kode_buku = $_GET['kode_buku'] ?? '';?>

                <center>
                    <h3>Update Data Buku</h3>
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
                    <form action="update_buku.php" method="post" enctype="multipart/form-data">
                        <table>
                            <tr>
                                <td>Kode buku</td>
                                <td><input type="text" name="kode_buku" value="<?php echo "$kode_buku";?>"></td>
                            </tr>
                            <tr>
                                <td>Judul buku</td>
                                <td><input type="text" name="judul" value="<?php echo "$selected_buku[1]";?>" required><br></td>
                            </tr>
                            <tr>
                                <td>Pengarang</td>
                                <td><input type="text" name="pengarang" value="<?php echo "$selected_buku[2]";?>" required><br></td>
                            </tr>
                            <tr>
                                <td>Penerbit</td>
                                <td><input type="text" name="penerbit" value="<?php echo "$selected_buku[3]";?>" required><br></td>
                            </tr>
                            <tr>
                                <td>Tahun Terbit</td>
                                <td><input type="text" name="tahun_terbit" value="<?php echo isset($selected_buku[4]) ? $selected_buku[4] : ''; ?>" required><br></td>
                            </tr>
                            <tr>
                                <td>Cover</td>
                                <td><input type="file" name="file" accept="image/*"><br></td>
                            </tr>
                            <?php
                                // Menampilkan gambar lama jika tersedia
                                $gambar_lama = $selected_buku[5];
                                if (!empty($gambar_lama)) {
                                    echo "<tr><td><label>Cover Lama:</label><br></td>";
                                    echo "<td><img src='uploads/$gambar_lama' alt='Gambar Lama' width='200'><br></td></tr>";
                                }
                                echo "<tr><td><input type='submit' name='update' value='Perbarui'></td></td></tr>";
                            ?>
                        </table>
                    </form>
                </center>
            <?php
            } else {
                echo "Buku tidak ditemukan";
            }
        } else {
            echo "Permintaan tidak valid";
        }
    ?>
</body>
</html>
