<?php
$nomor = $_GET['edit'] ?? '';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Biodata</title>
    <style>
        h1 {
            text-align: center;
        }

        form {
            margin: 0 auto;
            max-width: 400px;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 10px;
            margin-top: 200px;
            background-color: lightgray;
        }

        .form-group {
            margin-bottom: 15px;
        }


        .form-group input {
            width: 95%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        button {
            width: 100%;
            padding: 8px 15px;
            border: none;
            border-radius: 5px;
            background-color: #0078DF;
            color: white;
            cursor: pointer;
        }
    </style>
</head>

<body>
    <div class="container">
        <form action="index.php?edit=<?php echo $nomor; ?>" method="post">
            <h1>Edit Biodata</h1>
            <div class="form-group">
                <label for="nomor">NO:</label>
                <input type="text" id="nomor" name="nomorProgram" value="<?php echo $nomor; ?>" required readonly />
            </div>
            <div class="form-group">
                <label for="nama">Nama:</label>
                <input type="text" id="nama" name="nama" required />
            </div>
            <div class="form-group">
                <label for="NIM">NIM:</label>
                <input type="text" id="NIM" name="NIM" required />
            </div>
            <div class="form-group">
                <button type="submit">Simpan Perubahan</button>
            </div>
        </form>
    </div>
</body>

</html>
