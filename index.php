<!DOCTYPE html>
<html lang="ms">
<head>
    <meta charset="UTF-8">
    <title>Pendaftaran Ceramah</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f2f2f2;
        }
        .container {
            width: 800px;
            margin: auto;
            background: white;
            padding: 30px;
        }
        h1 {
            color: #2c3e50;
        }
        input, select {
            width: 100%;
            padding: 10px;
            margin: 8px 0;
        }
        button {
            background: #2980b9;
            color: white;
            padding: 12px;
            border: none;
            width: 100%;
            font-size: 16px;
            cursor: pointer;
        }
        button:hover {
            background: #1f6391;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Ceramah Profesional Dunia Digital</h1>

    <p><strong>Penceramah:</strong> Dr. Ahmad Zaki</p>
    <p><strong>Tarikh:</strong> 15 Mei 2026</p>
    <p><strong>Yuran:</strong> RM2500.00 / slot</p>

    <hr>

    <h2>Borang Pendaftaran</h2>

    <form action="pengesahan.php" method="POST" enctype="multipart/form-data">

        <input type="text" name="nama" placeholder="Nama Penuh" required>
        <input type="email" name="email" placeholder="Alamat E-mel" required>
        <input type="text" name="telefon" placeholder="Nombor Telefon" required>

        <select name="kategori" required>
            <option value="">Pilih Kategori Peserta</option>
            <option>Pelajar</option>
            <option>Pensyarah</option>
            <option>Orang Awam</option>
            <option>Korporat</option>
        </select>

        <input type="number" name="slot" placeholder="Bilangan Slot" required>
        <input type="file" name="resit" required>

        <label>
            <input type="checkbox" required>
            Saya bersetuju dengan Terma & Syarat
        </label>

        <br><br>
        <button type="submit">Hantar</button>

    </form>
</div>

</body>
</html>