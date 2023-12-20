

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Stock Barang</title>
        <link href="css/styles.css" rel="stylesheet" />
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
    </head>

    <body>
    <form action="update.php" method="post">
        <input type="hidden" name="idb" value="1"> <!-- Assuming you have a way to get the ID -->
        <br>
        <input type="text" name="namabarang" placeholder="namabarang" class="form-control" required>
        <br>
        <input type="text" name="deskripsi" placeholder="deskripsi" class="form-control" required>
        <button type="submit" name="update" class="button">Submit</button>
    </form>
</body>
</html>