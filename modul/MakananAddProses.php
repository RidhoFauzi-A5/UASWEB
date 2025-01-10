<?php
if (isset($_POST['submit']))

    // Membersihkan input
    $nama_makanan = cleanInput($_POST['nama_makanan']);
    $daerah_makanan = cleanInput($_POST['daerah_makanan']);
    
    // Validasi field nama makanan
    if (empty($nama_makanan)) {
        echo "<script>window.alert('Field nama makanan harus diisi');window.location='?page=makananAdd'</script>";
    }
    // Validasi field daerah makanan
    elseif (empty($daerah_makanan)) {
        echo "<script>window.alert('Field daerah makanan harus diisi');window.location='?page=makananAdd'</script>";
    }
    // Validasi format (mengizinkan huruf, spasi, tanda hubung, dan apostrof)
    elseif (!preg_match("/^[a-zA-Z\s'-]*$/", $nama_makanan)) {
        echo "<script>window.alert('Format nama makanan tidak valid');window.location='?page=makananAdd'</script>";
    }
    elseif (!preg_match("/^[a-zA-Z\s'-]*$/", $daerah_makanan)) {
        echo "<script>window.alert('Format daerah makanan tidak valid');window.location='?page=makananAdd'</script>";
    }
    else {
        // Menggunakan prepared statement
        $stmt = $conn->prepare("SELECT nama_makanan FROM tbl_makanan WHERE nama_makanan = ?");
        $stmt->bind_param("s", $nama_makanan);
        $stmt->execute();
        $result = $stmt->get_result();
        
        if ($result->num_rows > 0) {
            echo "<script>window.alert('Data sudah tersedia');window.location='?page=makananAdd'</script>";
        } else {
            // Insert menggunakan prepared statement
            $stmt = $conn->prepare("INSERT INTO tbl_makanan (nama_makanan, daerah_makanan) VALUES (?, ?)");
            $stmt->bind_param("ss", $nama_makanan, $daerah_makanan);
            
            if ($stmt->execute()) {
                echo "<script>window.alert('Data berhasil ditambah!');window.location='?page=makanan';</script>";
            } else {
                echo "<script>window.alert('Gagal menambah data!');window.location='?page=makanan';</script>";
            }
        }
    }   
?>