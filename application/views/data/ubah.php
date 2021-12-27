<div class="container">
	<div class="row mt-3">
		<div class="col-md-6">
			<div class="card">
				<div class="card-header">
					Form Ubah Data Tiket
				</div>
				<div class="card-body"> 
			<form action="" method="post">
            <input type="hidden" name="id_tiket" value="<?= $tiket['id_tiket'];?>">
            <div class="form-group">
					<label for="asal">Asal</label>
					<select class="form-control" id="asal" name="asal">
                            <option value="<?= $tiket['asal']; ?>"><?= $tiket['asal']; ?></option>
                                <?php foreach($kota as $ko) :?>
                                    <option value="<?= $ko['nama_kota'] ?>"><?= $ko['nama_kota']; ?></option>
                                <?php endforeach; ?>
					</select>
				</div>
				
				<div class="form-group">
					<label for="tujuan">Tujuan</label>
					<select class="form-control" id="tujuan" name="tujuan">
                            <option value="<?= $tiket['tujuan']; ?>"><?= $tiket['tujuan']; ?></option>
                                 <?php foreach($kota as $ko) :?>
                                    <option value="<?= $ko['nama_kota'] ?>"><?= $ko['nama_kota']; ?></option>
                                <?php endforeach; ?>
					</select>
				</div>

                <div class="form-group">
					<label for="tanggal">Tanggal</label>
					<input type="date" name="tanggal" class="form-control" id="tanggal" value="<?= $tiket['tanggal'] ?>">
				</div>

                <div class="form-group">
					<label for="jadwal">Jadwal</label>
					<input type="date" name="jadwal" class="form-control" id="jadwal" value="<?= $tiket['jadwal'] ?>">
				</div>

                <div class="form-group">
					<label for="harga">Harga</label>
					<input type="text" name="harga" class="form-control" id="harga" value="<?= $tiket['harga'] ?>">
				</div>

                <div class="form-group">
					<label for="seat">Seat</label>
					<input type="text" name="seat" class="form-control" id="seat" value="<?= $tiket['seat'] ?>">
				</div>

                <div class="form-group">
					<label for="j_keberangkatan">Jam Keberangkatan</label>
					<input type="time" name="j_keberangkatan" class="form-control" id="j_keberangkatan" value="<?= $tiket['j_keberangkatan'] ?>">
				</div>
                <br>
				<button type="submit" name="tambah" class="btn btn-primary float-right">Ubah Data</button>
			</form>
		</div>
	</div>

		</div>
	</div>
</div>