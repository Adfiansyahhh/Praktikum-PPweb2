<?php
    require_once ('bukuTamu.php');
    session_start();

    if (!isset($_SESSION['bukuTamu'])){
        $_SESSION['bukuTamu'] = [];
    }

    if (isset($_POST['submit'])) {
        $bukuTamu = new BukuTamu();
        $bukuTamu->timestamp = date('Y-m-d H:i:s');
        $bukuTamu->fullname = $_POST['Fullname'];
        $bukuTamu->email = $_POST['email'];
        $bukuTamu->message = $_POST['message'];

        array_push($_SESSION['bukuTamu'], $bukuTamu);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <h4>Daftar Menu</h4>
        <table>
            <thead>
                <tr>
                    <th>timestamp</th>
                    <th>full name</th>
                    <th>email</th>
                    <th>message</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($_SESSION['bukuTamu'] as $buku): ?>
                <tr>
                    <td><?= htmlspecialchars($buku->timestamp) ?></td>
                    <td><?= htmlspecialchars($buku->fullname) ?></td>
                    <td><?= htmlspecialchars($buku->email) ?></td>
                    <td><?= htmlspecialchars($buku->message) ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    
</body>
</html>