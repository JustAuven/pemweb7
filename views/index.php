<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Data Mahasiswa</title>
</head>
<body>
    <h1>Data Mahasiswa</h1>
    <a href="index.php?page=tambah">Tambah Data</a>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>NIM</th>
            <th>Program Studi</th>
            <th>Aksi</th>
        </tr>
        <?php $i=1; foreach ($data as $row): ?>
        <tr>
            <td><?= $i++ ?></td>
            <td><?= htmlspecialchars($row['nama']) ?></td>
            <td><?= htmlspecialchars($row['nim']) ?></td>
            <td><?= htmlspecialchars($row['program_studi']) ?></td>
            <td>
                <a href="index.php?page=edit&nim=<?= $row['nim'] ?>">Edit</a> |
                <a href="index.php?page=hapus&nim=<?= $row['nim'] ?>" onclick="return confirm('hapus data?');">Hapus</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
