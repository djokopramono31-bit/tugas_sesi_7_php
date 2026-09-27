<?php

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: form_html.html');
    exit;
}

// Mengambil data dari form
$productName = $_POST['product_name'] ?? '';
$harga = $_POST['harga'] ?? '';
$deskripsi = $_POST['deskripsi'] ?? '';

?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Form</title>
</head>
<body>

    <h2>Form Data Received</h2>

    <p><strong>Name:</strong> <?php echo htmlspecialchars($productName); ?></p>

    <p><strong>Harga:</strong> <?php echo htmlspecialchars($harga); ?></p>

    <p><strong>Deskripsi:</strong> <?php echo htmlspecialchars($deskripsi); ?></p>

    <br>

    <a href="form_html.html">Kembali ke Form</a>

</body>
</html>