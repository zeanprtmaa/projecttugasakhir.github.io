<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/stylesurvey.css">
    <title>Form Survey</title>
</head>

<body>
    <h2>Form Survey Website Tugas Akhir</h2>
    <form action="proses.php" method="POST">
        <input type="text" id="name" name="name" placeholder="Nama" required><br><br>
        <input type="email" id="email" name="email" placeholder="Email" required><br><br>
        <input type="text" id="phone" name="phone" placeholder="Telpon" required><br><br>
        <hr>
        <br>
        <label for="penggunaan">Seberapa mudah penggunaan website kami?</label><br>
        <select name="penggunaan" id="ease-of-use" required>
            <option value="">Pilih opsi</option>
            <option value="sangat-mudah">Sangat Mudah</option>
            <option value="mudah">Mudah</option>
            <option value="cukup-mudah">Cukup Mudah</option>
            <option value="agak-sulit">Agak Sulit</option>
            <option value="sulit">Sulit</option>
        </select><br><br>
        <label for="saran">Apa saran Anda untuk meningkatkan pengalaman pengguna di website kami?</label><br>
        <textarea name="saran" id="saran" cols="30" rows="5" required></textarea><br><br>
        <label for="rating">Beri peringkat (1-5) untuk website kami:</label><br>
        <input type="number" id="rating" name="rating" min="1" max="5" required><br><br>
        <div>
            <button class="btn-submit">Sumbit</button>
        </div>
        <br>
        <div>
            <button onclick="window.location.href='../index.html'" class="btn-submit">Kembali</button>
        </div>
    </form>
</body>

</html>