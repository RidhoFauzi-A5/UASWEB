<?php
// Start session jika belum dimulai
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Fungsi untuk navbar active state
function isActive($page) {
    $currentPage = $_GET['page'] ?? 'home';
    return $currentPage === $page ? 'active' : '';
}

// Fungsi untuk mendapatkan data makanan
function getMakanan($limit = null) {
    global $conn;
    $query = "SELECT * FROM tbl_makanan ORDER BY id_makanan DESC";
    if ($limit !== null) {
        $limit = (int)$limit;  // Sanitasi input
        $query .= " LIMIT $limit";
    }
    return mysqli_query($conn, $query);
}

// Fungsi untuk mendapatkan data minuman
function getMinuman($limit = null) {
    global $conn;
    $query = "SELECT * FROM tbl_minuman ORDER BY id_minuman DESC";
    if ($limit !== null) {
        $limit = (int)$limit;  // Sanitasi input
        $query .= " LIMIT $limit";
    }
    return mysqli_query($conn, $query);
}

// Fungsi untuk mendapatkan makanan berdasarkan ID
function getMakananById($id) {
    global $conn;
    $id = (int)$id;  // Sanitasi input
    $query = "SELECT * FROM tbl_makanan WHERE id_makanan = ?";
    $stmt = mysqli_prepare($conn, $query);
    mysqli_stmt_bind_param($stmt, "i", $id);
    mysqli_stmt_execute($stmt);
    return mysqli_stmt_get_result($stmt);
}

// Fungsi untuk mendapatkan minuman berdasarkan ID
function getMinumanById($id) {
    global $conn;
    $id = (int)$id;  // Sanitasi input
    $query = "SELECT * FROM tbl_minuman WHERE id_minuman = ?";
    $stmt = mysqli_prepare($conn, $query);
    mysqli_stmt_bind_param($stmt, "i", $id);
    mysqli_stmt_execute($stmt);
    return mysqli_stmt_get_result($stmt);
}

// Fungsi login dengan prepared statement untuk keamanan
function login($username, $password) {
    global $conn;
    
    $query = "SELECT * FROM users WHERE username = ? AND password = MD5(?)";
    $stmt = mysqli_prepare($conn, $query);
    mysqli_stmt_bind_param($stmt, "ss", $username, $password);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    
    if (mysqli_num_rows($result) > 0) {
        $user = mysqli_fetch_assoc($result);
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['username'] = $user['username'];
        return true;
    }
    return false;
}

// Fungsi cek status login
function isLoggedIn() {
    return isset($_SESSION['user_id']) && !empty($_SESSION['user_id']);
}

// Fungsi logout
function logout() {
    session_start();
    session_destroy();
    header('Location: index.php');
    exit();
}

// Fungsi untuk membersihkan input
function cleanInput($data) {
    global $conn;
    return mysqli_real_escape_string($conn, htmlspecialchars(trim($data)));
}
?>