<?php
include'../../controller/crud_user_c.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title>Tambah User</title>
    <style>
        body {
            font-family: Arial;
            background-color: #111111;
            padding: 20px;
        }
        h2 {
            text-align: center;
        }
        .container {
            max-width: 800px;
            margin: auto;
            background: white;
            padding: 20px;
            border-radius: 10px;
        }
        input {
            width: 100%;
            padding: 8px;
            margin: 5px 0;
        }
        button {
            padding: 8px 15px;
            background: #EFBA36;
            color: white;
            border: none;
            border-radius: 5px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            padding: 10px;
            border: 1px solid #ccc;
            text-align: center;
        }
        th {
            background: #EFBA36;
            color: white;
        }
        .hapus {
            background: #d9534f;
            padding: 6px 10px;
            color: white;
            border-radius: 5px;
            text-decoration: none;
        }
        .edit {
            background: #5bc0de;
            padding: 6px 10px;
            color: white;
            border-radius: 5px;
            text-decoration: none;
        }
        .kembali {
    display: inline-block;
    margin-bottom: 15px;
    padding: 8px 15px;
    background: #EFBA36;
    color: white;
    border-radius: 5px;
    text-decoration: none;
}
    </style>
</head>
<body>

<div class="container">
<a href="dashboardmin.php" class="kembali">Kembali</a>
    <h2>TAMBAH PENGGUNA</h2>

    <!-- FORM -->
<form method="post" action="../../controller/crud_user_c.php">
    <input type="hidden" name="id" value="<?= $dataEdit ? $dataEdit['id'] : ''; ?>">

    <input type="text" name="username" placeholder="Username"
           value="<?= $dataEdit ? $dataEdit['username'] : ''; ?>" required>

    <input type="password" name="password" placeholder="Password" 
           value="<?= $dataEdit ? $dataEdit['password'] : ''; ?>" required>

    <input type="text" name="role" placeholder="Role"
           value="<?= $dataEdit ? $dataEdit['role'] : ''; ?>" required>

    <?php if ($dataEdit): ?>
        <button type="submit" name="update">Update</button>
    <?php else: ?>
        <button type="submit" name="tambah">Simpan</button>
    <?php endif; ?>
</form>


    <!--TABEL -->
    <table>
    <tr>
        <th>No</th>
        <th>Username</th>
        <th>Password</th>
        <th>Role</th>
        <th>Aksi</th>
    </tr>
    <?php
    $no = 1;
    while ($data = mysqli_fetch_array($query)): 
    ?>
        <tr>
            <td><?= $no++; ?></td>
            <td><?= $data['username']; ?></td>
            <td><?= $data['password']; ?></td>
            <td><?= $data['role']; ?></td>
            <td>
                <a href="?edit=<?= $data['id']; ?>" class="edit">Edit</a>
                <a href="../../controller/crud_user_c.php?hapus=<?= $data['id']; ?>" class="hapus"
   onclick="return confirm('Yakin hapus data?')">Hapus</a>
            </td>
        </tr>
    <?php endwhile;?>
</table>

</div>

</body>
</html>