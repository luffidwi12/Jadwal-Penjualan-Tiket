<div class="container">
	<div class="row mt-3">
		<div class="col-md-6">
			<div class="card">
				<div class="card-header">
					Form Tambah Data Tiket
				</div>
				<div class="card-body"> 
			<form action="" method="post">
            <div class="form-group">
					<label for="asal">Asal</label>
					<select class="form-control" id="asal" name="asal">
                            <option value="">--Pilih Kota Asal--</option>
                                <?php foreach($kota as $ko) :?>
                                    <option value="<?= $ko['nama_kota'] ?>"><?= $ko['nama_kota']; ?></option>
                                <?php endforeach; ?>
					</select>
				</div>
				
				<div class="form-group">
					<label for="tujuan">Tujuan</label>
					<select class="form-control" id="tujuan" name="tujuan">
                            <option value="">--Pilih Kota Tujuan--</option>
                                 <?php foreach($kota as $ko) :?>
                                    <option value="<?= $ko['nama_kota'] ?>"><?= $ko['nama_kota']; ?></option>
                                <?php endforeach; ?>
					</select>
				</div>

                <div class="form-group">
					<label for="tanggal">Tanggal</label>
					<input type="date" name="tanggal" class="form-control" id="tanggal">
				</div>

                <div class="form-group">
					<label for="jadwal">Jadwal</label>
					<input type="date" name="jadwal" class="form-control" id="jadwal">
				</div>

                <div class="form-group">
					<label for="harga">Harga</label>
					<input type="text" name="harga" class="form-control" id="harga">
				</div>

                <div class="form-group">
					<label for="seat">Seat</label>
					<input type="text" name="seat" class="form-control" id="seat">
				</div>

                <div class="form-group">
					<label for="j_keberangkatan">Jam Keberangkatan</label>
					<input type="time" name="j_keberangkatan" class="form-control" id="j_keberangkatan">
				</div>
                <br>
				<button type="submit" name="tambah" class="btn btn-primary float-right">Tambah Data</button>
			</form>
		</div>
	</div>

		</div>
	</div>
</div>