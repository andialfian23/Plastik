<?php 

$data_nota = [];
include "database.php";
extract($_POST);

$query_nota = mysqli_query($koneksi, "SELECT id_pengeluaran, p.id_nota, p.id_barang, nama_barang, p.harga_jual, jml_keluar, total_harga,
    tgl_keluar, nama_pembeli, total, bayar, kembalian
    FROM pengeluaran AS p
    INNER JOIN nota AS n ON p.id_nota = n.id_nota
    INNER JOIN barang as b ON p.id_barang = b.id_barang
    WHERE p.id_nota = '$id_nota'
    ORDER BY id_pengeluaran ASC");
$no = 1;
$tgl_keluar = null;
$total = null;
$bayar = null;
$kembalian = null;
$nama_pembeli = null;
while($nota = mysqli_fetch_array($query_nota)){
    $row = [];
    $row = [
        'id_nota' => $nota['id_nota'],
        'id_pengeluaran' => $nota['id_pengeluaran'],
        'id_barang' => $nota['id_barang'],
        'nama_barang' => $nota['nama_barang'],
        'harga_jual' => number_format($nota['harga_jual']),
        'jml_keluar' => number_format($nota['jml_keluar']),
        'total_harga' => number_format($nota['total_harga']),
        
        'tgl_keluar' => $nota['tgl_keluar'],
        'nama_pembeli' => $nota['nama_pembeli'],
        'total' => number_format($nota['total']),
        'bayar' => number_format($nota['bayar']),
        'kembalian' => number_format($nota['kembalian']),
    ]; 
    $data_nota[] = $row; 
    
    $tgl_keluar = $nota['tgl_keluar'];
    $nama_pembeli = $nota['nama_pembeli'];
    $total = $nota['total'];
    $bayar = $nota['bayar'];
    $kembalian = $nota['kembalian'];
}

$output = [
    'kode' => 1,
    'id_nota' => $id_nota,
    'tgl_keluar' => $tgl_keluar,
    'nama_pembeli' => $nama_pembeli,
    'total' => number_format($total),
    'bayar' => number_format($bayar),
    'kembalian' => $kembalian,
    
    'data_nota' => $data_nota
];

echo json_encode($output);

?>