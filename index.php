<?php
$makanan = $_POST; //simpan POST hasil inputan kedalam variable
?>
<html>

<head>
    <title>Bemby Store</title>
</head>

<body>
    <table border="1" width="300" style="justify-content: center; text-align: center;">
        <caption>Menu Makanan</caption>
        <thead>
            <tr>
                <td>No</td>
                <td>Nama Makanan</td>
                <td>Harga</td>
                <td>Pesan</td>
            </tr>
        </thead>
        <tbody>
            <form method="POST" action="index.php">
                <tr>
                    <td>1</td>
                    <td>Cendol</td>
                    <td>10000</td>
                    <td><input type="checkbox" name="Cendol" value="10000"></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Kacang</td>
                    <td>2000</td>
                    <td><input type="checkbox" name="Kacang" value="2000"></td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Rengginang</td>
                    <td>3000</td>
                    <td><input type="checkbox" name="Rengginang" value="3000"></td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Mie Ayam</td>
                    <td>13000</td>
                    <td><input type="checkbox" name="Mieayam" value="13000"></td>
                </tr>
        </tbody>
    </table>
    <br>
    <button type="submit">Masukan</button>
    </form>
    <?php if ($makanan) : //beri kondisi, ini akan di cetak jika ada inputan yang dikirim ?> 
        <table border="1" width="300">
            <thead>
                <tr>
                    <td>No</td>
                    <td>Makan</td>
                    <td>Harga</td>
                </tr>
            </thead>
            <tbody>
                <?php $jmlh = 0; $i = 1; // untuk mendeklarasikan variable penampung hitung harga dan untuk nomor urut ?>
                <?php foreach ($makanan as $mkn => $harga) : // lakukan hasil inputang dgn perulangan beserta valuenya ?>
                    <?php $jmlh += $harga; // tambahakn harga ke dalam variable yang tdi di deklarasikan agar dihitung scra otomatis ?>
                    <tr>
                        <td><?= $i; ?></td>
                        <td><?= $mkn; ?></td>
                        <td><?= $harga; ?></td>
                    </tr>
                <?php $i++; endforeach; //increment $i agar bertambah satu setiap perulangan untuk nomor urutnya?>
                <tr>
                    <td></td>
                    <td>TOTAL</td>
                    <td><?= $jmlh; //tampilakn jumlah harganya ?></td>
                </tr>
            </tbody>
        </table>
    <?php endif; ?>
</body>

</html>