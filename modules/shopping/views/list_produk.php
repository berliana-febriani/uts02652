<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

<div class="container" style="margin-left: 320px; margin-top: -290px;">
<h3>Daftar Produk</h3>
	<?php
 		foreach ($produk as $row) {
	?>
	<br> <br>
 
 <div class="col mb-4">
 	<div class="kotak">
 		<form method="post" action="<?php echo base_url();?>shopping/tambah" method="post" accept-charset="utf8">
 			<a href="#"><img class="img-thumbnail" src="<?php echo base_url('gambar/'.$row['gambar'].''); ?>"/></a>
 			<div class="card-body">
 				<h4 class="card-title">
 					<a href="#" style="color: #000;"><?php echo $row['nama_produk'];?></a>
 				</h4>
				<h5>Rp. <?php echo number_format($row['harga'],0,",",".");?></h5>
 				<p class="card-text"><?php echo $row['deskripsi'];?></p>
 			</div>
 			<div class="card-footer">
 				<a href="<?php echo base_url();?>shopping/detail_produk/<?php echo $row['id_produk'];?>" class="btn btn-sm btn-default"><i class="glyphicon glyphicon-search"></i> Detail
 				</a>
 				<input type="hidden" name="id" value="<?php echo $row['id_produk']; ?>" />
 				<input type="hidden" name="nama" value="<?php echo $row['nama_produk']; ?>" />
 				<input type="hidden" name="harga" value="<?php echo $row['harga']; ?>" />
 				<input type="hidden" name="gambar" value="<?php echo $row['gambar']; ?>" />
 				<input type="hidden" name="qty" value="1" />
 				<button type="submit" class="btn btn-sm btnsuccess"><i class="glyphicon glyphicon-shopping-cart"></i>Beli</button>
 			</div>
 		</form>
 		
 	</div>
 </div>
 
<?php
 }
?>