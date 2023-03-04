<?php 
        $nama = $_POST['nama'];
        $produk = $_POST['produk'];
        $jumlah = $_POST['jumlah'];

        if($produk == "TV"){
            $total_belanja = 4200000 * $jumlah;
        } else if($produk == "Kulkas"){
            $total_belanja = 3100000 * $jumlah;
        } else if($produk == "Mesin Cuci"){
            $total_belanja = 3800000 * $jumlah;
        }
    ?>