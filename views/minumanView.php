<?php
$db_host = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "db_kuliner";

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


include 'includes/config.php';

?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Minuman Tradisional - Kuliner Nusantara</title>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        .food-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
            gap: 2rem;
            padding: 2rem 8%;
        }

        .food-card {
            background: white;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }

        .food-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
        }

        .food-image {
            width: 100%;
            aspect-ratio: 16/9;
            object-fit: cover;
        }

        .food-details {
            padding: 1.5rem;
        }

        .food-title {
            font-size: 1.25rem;
            font-weight: 600;
            margin-bottom: 0.5rem;
            color: #212121;
        }

        .food-description {
            color: var(--tokopedia-gray);
            margin-bottom: 1rem;
            line-height: 1.6;
        }

        .food-meta {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .add-button {
            display: inline-block;
            background: #4caf50;
            color: #fff;
            padding: 10px 15px;
            border-radius: 4px;
            text-decoration: none;
            font-weight: bold;
        }

        .edit-button, .delete-button {
            padding: 5px 10px;
            border-radius: 4px;
            text-decoration: none;
            color: white;
            font-size: 14px;
        }

        .edit-button {
            background-color: #2196f3;
        }

        .delete-button {
            background-color: #f44336;
        }

        .form-container {
            max-width: 600px;
            margin: auto;
            padding: 20px;
            background: #f4f4f4;
            border-radius: 8px;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-input {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .form-button {
            display: inline-block;
            background: #4caf50;
            color: #fff;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
    </style>
</head>
<body>
<div class="page-header">
    <h1 class="page-title">Minuman Tradisional</h1>
    <a href="?page=minumanAdd" class="add-button">+ Tambah Minuman</a>
</div>

<div class="food-grid">
    <?php
    // Query untuk mengambil semua data minuman
    $query = "SELECT * FROM tbl_minuman ORDER BY id_minuman ASC";
    $result = mysqli_query($conn, $query);
    
    if ($result && mysqli_num_rows($result) > 0) {
        while ($minuman = mysqli_fetch_assoc($result)) {
            $gambar_path = "images/minuman/" . $minuman['id_minuman'] . ".jpg";
            ?>
            <div class="food-card">
                <img src="<?= $gambar_path ?>" alt="<?= htmlspecialchars($minuman['nama_minuman']); ?>" class="food-image">
                <div class="food-details">
                    <h2 class="food-title"><?= htmlspecialchars($minuman['nama_minuman']); ?></h2>
                    <p class="food-description"><?= htmlspecialchars($minuman['daerah_minuman']); ?></p>
                    <div class="food-meta">
                        <a href="?page=minumanUpdate&id=<?= $minuman['id_minuman']; ?>" class="edit-button">Edit</a>
                        <a href="?page=minumanDelete&id=<?= $minuman['id_minuman']; ?>" onclick="return confirm('Yakin ingin menghapus data ini?');" class="delete-button">Hapus</a>
                    </div>
                </div>
            </div>
            <?php
        }
    } else {
        echo '<p class="text-center">Tidak ada data minuman yang tersedia.</p>';
    }
    ?>
</div>

<?php
// Edit data minuman
if (isset($_GET['page']) && $_GET['page'] == 'minumanUpdate' && isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "SELECT * FROM tbl_minuman WHERE id_minuman = '$id'";
    $sql = mysqli_query($conn, $query);
    $data = mysqli_fetch_array($sql);
?>
<div class="form-container">
    <h2>Edit Minuman</h2>
    <form action="proses/minumanUpdate_proses.php" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="id_minuman" value="<?= $data['id_minuman'] ?>">
        <div class="form-group">
            <label>Nama Minuman</label>
            <input type="text" name="nama_minuman" class="form-input" value="<?= htmlspecialchars($data['nama_minuman']) ?>" required>
        </div>
        <div class="form-group">
            <label>Daerah Asal</label>
            <input type="text" name="daerah_minuman" class="form-input" value="<?= htmlspecialchars($data['daerah_minuman']) ?>" required>
        </div>
        <div class="form-group">
            <label>Foto Minuman (Biarkan kosong jika tidak ingin mengubah)</label>
            <input type="file" name="foto_minuman" class="form-input">
        </div>
        <button type="submit" class="form-button">Update</button>
    </form>
</div>
<?php
}

// Hapus data minuman
if (isset($_GET['page']) && $_GET['page'] == 'minumanDelete' && isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "DELETE FROM tbl_minuman WHERE id_minuman = '$id'";
    $sql = mysqli_query($conn, $query);
    
    if ($sql) {
        echo "<script>alert('Data berhasil dihapus!'); window.location='index.php';</script>";
    } else {
        echo "<script>alert('Data gagal dihapus!'); window.location='index.php';</script>";
    }
}
?>
</body>
</html>
