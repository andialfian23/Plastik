<?php 

extract($_POST);

$id_nota = date('YmdHis');
$tgl_keluar = date('Y-m-d H:i:s');
$q_insert_nota = mysqli_query($koneksi, "INSERT INTO nota (id_nota, tgl_keluar, nama_pembeli, total, bayar, kembalian, username) 
    VALUES('". $id_nota . "','" . $tgl_keluar . "','" . $nama_pembeli . "','" . $total . "','" . $bayar . "','" . $kembali . "','admin'); ");

$total_row = count($id_barang);

for ($i = 0; $i < $total_row; $i++) {
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
    $output = 'Berhasil Menyimpan Data Nota ';
}else{
    $output ='Gagal Menyimpan Data Nota ';
}


// echo json_encode($output);

?>

<h1><?= $output ?></h1>

<hr />
<a href="http://localhost/Plastik/" class="btn btn-success">KEMBALI KE HOME</a>
<a href="http://localhost/Plastik/print_nota.php?id_nota=<?= $id_nota ?>" target="_blank" class="btn btn-primary">PRINT
    NOTA</a>


<script>
// $(function() {
//     var base_url = window.location.origin + '/Plastik';
//     setTimeout(function() {

//         window.open(base_url + '/print_nota.php?id_nota=<?= $id_nota ?>', '_blank');
//         // window.location.href = base_url;

//     }, <?= $total_row ?>999);
// });
</script>