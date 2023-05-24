<?php
if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["kode_buku"])) {
    // Mendapatkan kode buku dari parameter URL
    $kode_buku = trim($_GET["kode_buku"]);

    // Memeriksa apakah kode buku ada dalam file buku.txt
    $file_name = "buku.txt";
    $read = file($file_name);
    $found = false;
    $updated_content = '';

    foreach ($read as $buk) {
        $data_buku = explode("-", $buk);

        if ($data_buku[0] == $kode_buku) {
            $found = true;
            continue; // Mengabaikan data buku yang akan dihapus
        }

        $updated_content .= $buk;
    }

    if ($found) {
        // Menulis kembali isi file buku.txt setelah data buku dihapus
        file_put_contents($file_name, $updated_content);
        echo "Data buku berhasil dihapus!";
    } else {
        echo "Buku tidak ditemukan";
    }
} else {
    echo "Permintaan tidak valid";
}
echo '<br><br><a href="buku.php">Lihat Data</a>';

?>
