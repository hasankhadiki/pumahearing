<!DOCTYPE html>
<?php

if($this->session->userdata('nama')){

} else {
    redirect(base_url("Login"));
}

?>

<html>
<head>
	<title>PBW BARANG</title>
	<link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.min.css"); ?>" type="text/css">
	<link rel="stylesheet" href="<?php echo base_url("assets/css/style.css"); ?>" type="text/css">
</head>
<body>
	<div style="text-align: right;"><a class="btn btn-danger" href="<?php echo site_url()."/Login/logout"; ?>">logout</a></div>
	<div class="head" style="text-align: center; font-weight: bold;">
		<h1>Admin Panel</h1>
	</div>
	<div class="konten" style="text-align: center;">
		<div class="tombol">
			<a class="btn btn-success" href="#" data-toggle="modal" data-target="#myModal">Tambah Barang</a>
		</div>
		<h2><?php if (isset($error)) {
			echo $error;
		} ?></h2>
		<div class="tabel">
		<DIV class="header">
			<h4 style="text-align: center;">Daftar Barang</h4>
		</DIV>
            
           
            
			<table class="table table-bordered">
				<tr>
					<th>ID</th>
					<th>MERK</th>
					<th>MODEL</th>
					<th>TIPE</th>
					<th>DESKRIPSI</th>
					<th>FOTO</th>
					<th>AKSI</th>  
				</tr>
				<?php $i=0; $j=0;
				foreach($data as $x){
				?>
				<tr>
					<td style="text-align: left;" id=i><?php $i++; echo $i; ?></td>
					<td style="text-align: left;"><?php echo $x['merk']; ?></td>
					<td style="text-align: left;"><?php echo $x['model']; ?></td>
					<td style="text-align: left;"><?php echo $x['tipe']; ?></td>
					<td style="text-align: left;"><?php echo $x['deskripsi']; ?></td>
					<td style="text-align: left; max-width: 250px;"><img width= "400" height="300" src="<?php echo base_url().$x['image']; ?>"></td>
					<td align="center">
						<div>
                            <!--<a class="btn btn-success" href="<?php echo base_url()."index.php/admin/edit_data/".$x['id_barang']; ?>" >Edit</a>--><?php $j++; ?>
							<a class="btn btn-success" href="#" data-toggle="modal" data-target="#EditModal<?php echo $j; ?>"><?php  ?>Edit</a>
						</div>
						<div>
						<div >
							<a class="btn btn-danger" href="<?php 
echo base_url()."admin/do_delete/".$x['id_barang']; ?>">Delete</a>
						</div>			
					</td>
				</tr>
                
                <div id="EditModal<?php echo $j; ?>" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Edit Data Barang</h4>
      </div>
      <form method="POST" action="<?php echo base_url()."Admin/do_update/".$x['id_barang']; ?>" enctype='multipart/form-data'>
      <div class="modal-body">
        <div class="form-group"> 
		  <label for="comment">Merk</label>
		  <input type="text" class="form-control" name="merk" required="" value="<?php echo $x['merk']; ?>">
		</div>
        <div class="form-group">
		  <label for="comment">Model</label>
		  <input type="text" class="form-control" name="model" required="" value="<?php echo $x['model']; ?>">
		</div>
        <div class="form-group">
		  <label for="comment">Tipe</label>
		  <input type="text" class="form-control" name="tipe" required="" value="<?php echo $x['tipe']; ?>">
		</div>		
        <div class="form-group">
		  <label for="comment">Deskripsi</label>
		  <textarea type="text" class="form-control" name="deskripsi" required="" ><?php echo $x['deskripsi']; ?></textarea>
		  <!-- <input type="text" class="form-control" name="deskripsi" required=""> -->
		</div>					
		<div class="form-group">
		  <label for="comment">Gambar</label>
		  <input type="file" name="file1">
		</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-default">Kirim</button>
      </div>
      </form>
    </div>

  </div>
</div>
				<?php 
                    
				}
				?>
			</table>
		</div>
	</div>
</body>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</html>


<!--Tambah Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Tambah Barang</h4>
      </div>
      <form method="POST" action="<?php echo base_url()."Admin/insert"; ?>" enctype='multipart/form-data'>
      <div class="modal-body">
      	<div class="form-group">
		  <label for="usr">ID</label>
		  <input type="text" class="form-control" name="id_barang" required="">
		</div>
        <div class="form-group">
		  <label for="comment">Merk</label>
		  <input type="text" class="form-control" name="merk" required="">
		</div>
        <div class="form-group">
		  <label for="comment">Model</label>
		  <input type="text" class="form-control" name="model" required="">
		</div>
        <div class="form-group">
		  <label for="comment">Tipe</label>
		  <input type="text" class="form-control" name="tipe" required="">
		</div>		
        <div class="form-group">
		  <label for="comment">Deskripsi</label>
		  <textarea type="text" class="form-control" name="deskripsi" required=""></textarea>
		  <!-- <input type="text" class="form-control" name="deskripsi" required=""> -->
		</div>					
		<div class="form-group">
		  <label for="comment">Gambar</label>
		  <input type="file" name="file1">
		</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-default">Kirim</button>
      </div>
      </form>
    </div>

  </div>
</div>

<!-- Edit Modal -->


<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>