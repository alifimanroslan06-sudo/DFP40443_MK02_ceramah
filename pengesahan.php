<!DOCTYPE html>
<html lang="ms">
<head>
    <meta charset="UTF-8">
    <title>Pengesahan Pendaftaran</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #ecf0f1;
        }
        .container {
            width: 700px;
            margin: auto;
            background: white;
            padding: 30px;
            margin-top: 40px;
            border-radius: 10px;
        }
        h1 {
            color: #27ae60;
        }
        .box {
            background: #f7f9f9;
            padding: 15px;
            margin-top: 15px;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Pengesahan Pendaftaran</h1>

    <?php
        $harga = 2500;

        $nama = $_POST['nama'];
        $email = $_POST['email'];
        $telefon = $_POST['telefon'];
        $kategori = $_POST['kategori'];
        $slot = $_POST['slot'];

        $jumlah = $harga * $slot;
    ?>

    <div class="box">
        <p><strong>Nama Penuh:</strong> <?php echo $nama; ?></p>
        <p><strong>E-mel:</strong> <?php echo $email; ?></p>
        <p><strong>Nombor Telefon:</strong> <?php echo $telefon; ?></p>
        <p><strong>Kategori Peserta:</strong> <?php echo $kategori; ?></p>
        <p><strong>Bilangan Slot:</strong> <?php echo $slot; ?></p>

        <hr>

        <p><strong>Harga Seunit:</strong> RM <?php echo number_format($harga, 2); ?></p>
        <p><strong>Jumlah Yuran:</strong> RM <?php echo number_format($jumlah, 2); ?></p>
    </div>
</div>

</body>
</html>