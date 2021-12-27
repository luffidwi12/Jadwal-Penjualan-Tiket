<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cetak Laporan Tiket</title>
    <style>
        .judul{
            text-align: center;
        }
    </style>
</head>
<body>
    Tanggal Cetak: <?= date('d F Y'); ?>
    <h2 class="judul">Penjualan Tiket</h2>
    <table width="100%" border="1" cellpadding="10" cellspacing="0">
            <tr>
                <th>NO</th>
                <th>ASAL</th>
                <th>TUJUAN</th>
                <th>TANGGAL</th>
                <th>JADWAL</th>
                <th>HARGA</th>
                <th>SEAT</th>
                <th>JAM KEBERANGKATAN</th>
            </tr>

            <?php $i = 1; 
            foreach($semuaTiket as $data): ?>
            <tr>
                <td><?= $i; ?></td>
                <td><?= $data['asal']; ?></td>
                <td><?= $data['tujuan']; ?></td>
                <td><?= $data['tanggal']; ?></td>
                <td><?= $data['jadwal']; ?></td>
                <td><?= $data['harga']; ?></td>
                <td><?= $data['seat']; ?></td>
                <td><?= $data['j_keberangkatan']; ?></td>
            </tr>
            <?php $i++; 
        endforeach; ?>
        
    </table>
    
</body>
</html>