<?php
include('koneksi.php');
$query = mysqli_query($koneksi,"SELECT * FROM td_gambar");
?>
<html>
    <head>
        <title></title>
        <link rel="stylesheet" type="text/css" href="ml.css">
    </head>
    <body background="skr.jpg"><center>
        <header>
        <a href="form_upload.php">Upload Gambar</a>
    </header>
        <table border="1">
            <tr>
                <th>No</th>
                <th>Gambar</th>
                <th>Keterangan</th>
                <th>Tipe</th>
                <th>Ukuran</th>
                <th>Action</th>
            </tr>
            <?php 
            $no = 1;
            while($row = mysqli_fetch_array($query))
            {
                ?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><img src="image_view.php?id_gambar=<?php echo $row['id_gambar']; ?>" width="100"/></td>
                    <td><?php echo $row['keterangan']; ?></td>
                    <td><?php echo $row['tipe_gambar']; ?></td>
                    <td><?php echo $row['ukuran_gambar']; ?></td>
                    <td><a href="delete_gambar.php?id_gambar=<?php echo $row['id_gambar']; ?>">Delete</a></td>
                </tr>
                <?php
            }
            ?>
        </table>
    </center>
    </body>
</html>