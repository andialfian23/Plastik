<?php 

include 'database.php';
extract($_POST);

$id_nota = date('YmdHis');
$tgl_keluar = date('Y-m-d H:i:s');
$q_insert_nota = mysqli_query($koneksi, "INSERT INTO nota (id_nota, tgl_keluar, nama_pembeli, total, bayar, kembalian, username) 
    VALUES('". $id_nota . "','" . $tgl_keluar . "','" . $nama_pembeli . "','" . $total . "','" . $bayar . "','" . $kembali . "','admin'); ");

for ($i = 1; $i <= $total_row; $i++) {
    $input_id = $id_barang[$i];
    $input_qty = $qty[$i];
    $input_harga = $harga[$i];

    if (($input_id != '') && ($input_qty != '')) {
        $total_harga = $input_qty * $input_harga;
        $q_insert_pengeluaran = mysqli_query($koneksi, "INSERT INTO pengeluaran(id_nota,id_barang,harga_jual,jml_keluar,total_harga) 
        VALUES('". $id_nota . "','". $input_id . "','" . $input_harga . "','" . $input_qty . "','" . $total_harga . "');");
        
    }
}


if($q_insert_nota){
    $output = [
        'kode' => 1,
        'pesan' => 'Berhasil Menyimpan Data Nota ',
        'id_nota' => $id_nota,
    ];
}else{
    $output = [
        'kode' => 0,
        'pesan' => 'Gagal Menyimpan Data Nota '
    ];
}


echo json_encode($output);

?>