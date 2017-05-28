<html>
<head>
  <title>Data barang</title>
<body>
  <form method="POST" action="<?php echo base_url('admin/do_update'); ?> " enctype='multipart/form-data'>
<table>
    <tr>
        <td><?php foreach ($data as $barang) { ?>
          id_barang
        </td>
        <td>
          <input type="text" name="id_barang" value="<?php echo $barang['id_barang']; ?>" readonly />
        </td>
    </tr>
    <tr>
        <td>
          merk
        </td>
        <td>
          <input type="text" name="merk" value="<?php echo $barang['merk']; ?>" />
        </td>
    </tr>
   
    <tr>
        <td>
          model
        </td>
        <td>
          <input type="text" name="model" value="<?php echo $barang['model']; ?>" />
        </td>
    </tr>
     <tr>
        <td>
          Tipe
        </td>
        <td>
          <input type="text" name="tipe" value="<?php echo $barang['tipe']; ?>" />
        </td>
    </tr>
    <tr>
        <td>
          deskripsi
        </td>
        <td>
          <input type="text" name="deskripsi" value="<?php echo $barang['deskripsi']; ?>"/>
        </td>
    </tr>
    
    <tr>
        <td>
          gambar
        </td>
        <td>
          <input type="file" name="file1">
        </td>
    </tr>
    
   <?php } ?>
    <tr>
        <td>
        </td>
        <td>
          <input type="submit" name="btnSubmit" value="Simpan" />
        </td>
    </tr>
</table>
</form>
</body>
</head>
</html>
