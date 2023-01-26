<?php
session_start();
//konek ke database
$conn = mysqli_connect("localhost", "root", "", "outs");

//tambah organissi
if(isset($_POST['addnew'])){
    $nama_org = $_POST['nama_org'];
    $deskripsi = $_POST['deskripsi'];
    $ketua = $_POST['ketua'];

    $addtotable = mysqli_query($conn,"insert into organisasi (nama_org, deskripsi, ketua) values('$nama_org', '$deskripsi', '$ketua')");
    if($addtotable){
        header('location:tambah.php');
    }else{
        echo 'gagal';
        header('location:tambah.php');
    }
}

//update
if(isset($_POST['updatedata'])){
    $no = $_POST['no'];
    $nama_org = $_POST['nama_org'];
    $deskripsi = $_POST['deskripsi'];
    $ketua = $_POST['ketua'];

    $update = mysqli_query($conn,"update organisasi set nama_org = '$nama_org', deskripsi = '$deskripsi', ketua = '$ketua' where no = '$no'");
    if(update){
        header('location:tambah.php');
    }else{
        echo 'gagal';
        header('location:tambah.php');
    }

    }

    //hapus
    if(isset($_POST['hapusdata'])){
        $no = $_POST['no'];
    
    $hapus = mysqli_query($conn,"delete from organisasi where no = '$no'");
    if(hapus){
        header('location:tambah.php');
    }else{
        echo 'gagal';
        header('location:tambah.php');
    }

    }
?>