<?php
if (isset($_POST['submit']))

    // Membersihkan input
    $nama_minuman = cleanInput($_POST['nama_minuman']);
    $daerah_minuman = cleanInput($_POST['daerah_minuman']);
    
    // Validasi field nama makanan
    if (empty($nama_minuman)) {
        echo "<script>window.alert('Field nama minuman harus diisi');window.location='?page=minumanAdd'</script>";
    }
    // Validasi field daerah makanan
    elseif (empty($daerah_minuman)) {
        echo "<script>window.alert('Field daerah minuman harus diisi');window.location='?page=minumanAdd'</script>";
    }
    // Validasi format (mengizinkan huruf, spasi, tanda hubung, dan apostrof)
    elseif (!preg_match("/^[a-zA-Z\s'-]*$/", $nama_minuman)) {
        echo "<script>window.alert('Format nama makanan tidak valid');window.location='?page=minumanAdd'</script>";
    }
    elseif (!preg_match("/^[a-zA-Z\s'-]*$/", $daerah_minuman)) {
        echo "<script>window.alert('Format daerah minuman tidak valid');window.location='?page=minumanAdd'</script>";
    }
    else {
        // Menggunakan prepared statement
        $stmt = $conn->prepare("SELECT nama_minuman FROM tbl_minuman WHERE nama_minuman = ?");
        $stmt->bind_param("s", $nama_minuman);
        $stmt->execute();
        $result = $stmt->get_result();
        
        if ($result->num_rows > 0) {
            echo "<script>window.alert('Data sudah tersedia');window.location='?page=minumanAdd'</script>";
        } else {
            // Insert menggunakan prepared statement
            $stmt = $conn->prepare("INSERT INTO tbl_minuman (nama_minuman, daerah_minuman) VALUES (?, ?)");
            $stmt->bind_param("ss", $nama_minuman, $daerah_minuman);
            
            if ($stmt->execute()) {
                echo "<script>window.alert('Data berhasil ditambah!');window.location='?page=minuman';</script>";
            } else {
                echo "<script>window.alert('Gagal menambah data!');window.location='?page=minuman';</script>";
            }
        }
    }   
?>