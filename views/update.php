<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Mahasiswa</title>
</head>
<body>
    <h1>Edit Mahasiswa</h1>
    <form action="" method="post">
        <input type="hidden" name="nim" value="<?= htmlspecialchars($mhs['nim']) ?>">
        <label>Nama:</label><br>
        <input type="text" name="nama" value="<?= htmlspecialchars($mhs['nama']) ?>" required><br>
        <label>Program Studi:</label><br>
        <input type="text" name="prodi" value="<?= htmlspecialchars($mhs['program_studi']) ?>" required><br><br>
        <button type="submit">Update</button>
    </form>
</body>
</html>
