<?php 
// koneksi ke database
$link = mysqli_connect("localhost", "root", "", "barberu3");


function query($pertanyaan) {
    global $link;
    $lemari = mysqli_query($link, $pertanyaan);
    $kotak = [];
    while( $baju = mysqli_fetch_assoc($lemari) ) {
        $kotak[] = $baju;
    }
    return $kotak;
}


function tambah($data) {
    global $link;

    $nama = htmlspecialchars($data["nama"]);
    $whatsapp = htmlspecialchars($data["whatsapp"]);
    $model = htmlspecialchars($data["Model"]);
    $harga = htmlspecialchars($data["Harga"]);
    $gambar = htmlspecialchars($data["gambar"]);

    // query insert data / eksekusi 
    $query = "INSERT INTO pelanggan VALUES
            ('','$nama','$whatsapp','$model','$harga','$gambar')";
    
    mysqli_query($link, $query);
    return mysqli_affected_rows($link);
}
function tambah1($data) {
    global $link;

    $nama = htmlspecialchars($data["nama"]);
    $keterangan = htmlspecialchars($data["keterangan"]);

    // query insert data / eksekusi 
    $query = "INSERT INTO saran VALUES
            ('','$nama','$keterangan')";
    
    mysqli_query($link, $query);
    return mysqli_affected_rows($link);
}

function cari($keyword) {
    // jika pake LIKE gak usah lagi pake =
    // % untuk orang cuma kenal nama depan, ketik langsung ketemu
    $query = " SELECT * FROM pelanggan 
               WHERE 
               nama LIKE '%$keyword%' OR
               whatsapp LIKE '%$keyword%' OR 
               model LIKE '%$keyword%'
               ";
    return query($query);
}


function hapus($id) {
    global $link;
    mysqli_query($link,"DELETE FROM pelanggan WHERE id = $id");
    return mysqli_affected_rows($link);
}


?>