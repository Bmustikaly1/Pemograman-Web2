<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Shop</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
<body>
    <div class="container-fluid">
        <h2 style="margin-left: 50px;">Belanja Online</h2>
        <div class="row">
                <div class="col-md-7" style="margin-left: 50px;">
<form method="POST">
  <div class="form-group row">
    <label for="customer" class="col-4 col-form-label">Customer</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-address-card"></i>
          </div>
        </div> 
        <input id="nama" name="nama" placeholder="Nama Customer" type="text" class="form-control" required="required">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4">Pilih Produk</label> 
    <div class="col-8">
      <div class="custom-control custom-radio custom-control-inline">
        <input name="produk" id="produk_0" type="radio" class="custom-control-input" value="TV" required="required"> 
        <label for="produk_0" class="custom-control-label">TV</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="produk" id="produk_1" type="radio" class="custom-control-input" value="Kulkas" required="required"> 
        <label for="produk_1" class="custom-control-label">Kulkas</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="produk" id="produk_2" type="radio" class="custom-control-input" value="Mesin Cuci" required="required"> 
        <label for="produk_2" class="custom-control-label">Mesin Cuci</label>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="jumlah" class="col-4 col-form-label">Jumlah</label> 
    <div class="col-8">
      <input id="jumlah" name="jumlah" placeholder="Jumlah" type="number" class="form-control" required="required">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>
    </div>
    <div class="col-md-4" style="margin-right: 50px;">
    <div">
			<div class="card">
				<h5 class="card-header bg-primary text-white  text-uppercase ">
					Daftar Harga
				</h5>
				<div class="card-body">
					<p class="card-text">
						TV : Rp.4.200.000
					</p>
                    <p class="card-text">
						Kulkas : Rp.3.400.000
					</p>
                    <p class="card-text">
						Mesin Cuci : Rp.3.800.000
					</p>
				</div>
				<div class="card-footer  bg-primary text-white  text-uppercase">
					Harga Dapat Berubah Setiap Saat
	</div>
    </div>
    <hr>
    <div class="col-md-12">
                <div class="col-md-12"> 
                    <table class="table">
                        <tr class="table-primary">
                            <th>Nama Customer</th>
                            <th>Pilihan Produk</th>
                            <th>Jumlah Beli</th>
                            <th>Total Belanja</th>
                        </tr>
                        <?php require_once "proses_belanja.php"; ?>
                        <tr class="table-secondary">
                            <td><?=$nama;?></td>
                            <td><?=$produk;?></td>
                            <td><?=$jumlah;?></td>
                            <td><?="Rp " . number_format($total_belanja, 0, ",", ".");?></td>
                        </tr>
                    </table>
                </div>
    </div>
<footer style=" text-align:center">
    Create by;Bunga Mustika Ali
</footer>
</body>
</html>