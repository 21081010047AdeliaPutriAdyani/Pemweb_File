<?php

echo "<h3><center>Data Buku</h3>";
?>
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
<?php
$file_name = "buku.txt";

$read = file($file_name); //arr

echo "<table border='1'  align='center'>
    <tr>
        <td><center><b>Kode Buku</b></center></td>
        <td><center><b>Judul</b></center></td>
        <td><center><b>Pengarang</b></center></td>
        <td><center><b>Penerbit</b></center></td>
        <td><center><b>Tahun Terbit</b></center></td>
        <td><center><b>Cover</b></center></td>
        <td><center><b>Action</b></center></td>
    </tr>";

foreach ($read as $buk) {
    $data_buku = explode("-", $buk); //arr
    echo "<tr>";
    echo "<td>$data_buku[0]</td>";
    echo "<td>$data_buku[1]</td>";
    echo "<td>$data_buku[2]</td>";
    echo "<td>$data_buku[3]</td>";
    echo "<td>$data_buku[4]</td>";
    echo "<td><img src='uploads/" . $data_buku[5] . "' width='200' height='100'></td>";
    echo "<td><a href='edit_buku.php?kode_buku=$data_buku[0]'>Edit</a>
            <a href='hapus_buku.php?kode_buku=$data_buku[0]'>Hapus</a></td>";
    echo "</tr>";
}
echo "</table>";

echo '<br><br><a href="tambah_buku.php">Kembali ke Form</a>';
