<?php
session_start();

if (!isset($_SESSION["user_id"])) {
    $pesan = "Anda belum login.";
} else {
    $pesan = "Selamat datang, " . $_SESSION["nama"];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">

    <div class="card shadow">
        <div class="card-body text-center">

            <h3><?php echo $pesan; ?></h3>

            <?php if (isset($_SESSION["user_id"])): ?>
                <a href="logout.php" class="btn btn-danger mt-3">Logout</a>
            <?php else: ?>
                <a href="login.php" class="btn btn-primary mt-3">Login</a>
            <?php endif; ?>

        </div>
    </div>

</div>

</body>
</html>
