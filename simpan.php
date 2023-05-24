<?php
if ($_POST) {
    //variable penampung
    $buku = $_POST['kode_buku']. 
        "-" . $_POST['judul'] . 
        "-" . $_POST['pengarang'] . 
        "-" . $_POST['penerbit'] . 
        "-" . $_POST['tahun_terbit'] . 
        "-" . $_FILES['file']['name'] . "\n";

    //simpan ke file
    $file_name = "buku.txt";

    // Memindahkan file yang diunggah ke lokasi yang diinginkan
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES['file']['name']);
    move_uploaded_file($_FILES['file']['tmp_name'], $target_file);

    if (file_put_contents($file_name, $buku, FILE_APPEND) > 0) {
        echo "Data berhasil disimpan";
    } else {
        echo "Data gagal disimpan";
    }

    echo '<br><br><a href="tambah_buku.php">Kembali ke Form</a>';
    echo '<br><br><a href="buku.php">Lihat Data</a>';
}
