<html>
<head>
    <title>Kalkulator Sederhana</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: gray;
        }
        #container {
            margin: 50px auto;
            width: 400px;
            background-color: white;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-shadow: 0px 0px 5px #ccc;
            padding: 20px;
        }
        h1 {
            text-align: center;
        }
        form {
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        input[type=text], select, input[type=submit] {
            padding: 10px;
            margin: 10px;
            border: none;
            border-radius: 5px;
            box-shadow: 0px 0px 5px #ccc;
        }
        input[type=submit] {
            background-color: #4CAF50;
            color: #fff;
            cursor: pointer;
        }
        input[type=submit]:hover {
            background-color: #3e8e41;
        }
        #hasil {
            margin-top: 20px;
            text-align: center;
            font-size: 24px;
        }
    </style>
</head>
<body>
    <div id="container">
        <h1>Kalkulator PHP</h1>
        <form method="post">
            <input type="text" name="angka1" placeholder="Angka Pertama">
            <input type="text" name="angka2" placeholder="Angka Kedua">
            <select name="operator">
                <option value="tambah">+</option>
                <option value="kurang">-</option>
                <option value="kali">*</option>
                <option value="bagi">/</option>
                <option value="pangkat">^</option>
                <option value="akar">√</option>
            </select>
            <input type="submit" name="submit" value="Hitung">
            <input type="submit" name="hapus" value="Hapus">
        </form>
        <?php
            if(isset($_POST['submit'])){
                $angka1 = $_POST['angka1'];
                $angka2 = $_POST['angka2'];
                $operator = $_POST['operator'];
                switch($operator){
                    case "tambah":
                        $hasil = $angka1 + $angka2;
                        break;
                    case "kurang":
                        $hasil = $angka1 - $angka2;
                        break;
                    case "kali":
                        $hasil = $angka1 * $angka2;
                        break;
                    case "bagi":
                        $hasil = $angka1 / $angka2;
                        break;
                    case "pangkat":
                        $hasil = pow($angka1, $angka2);
                        break;
                    case "akar":
                        $hasil = sqrt($angka1);
                        break;   
                    case "hapus";
                        $hasil = "";
                        $angka1= "";
                        $angka2= "";
                        break;
                 
                }
                echo "<div id='hasil'>Hasil: $hasil</div>";
            }
        ?>
    </div>
</body>
</html>