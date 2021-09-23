<!DOCTYPE html>
<html>
    <head>
    <title>UTS (Pembayaran SPP Siswa)</title>
</head>
<body>
<div class="row" align="center">
  
  <h1>Daftar SPP Siswa</h1>
  <a href="<?php echo base64_encode('home/beranda'); ?>" class="btn btn-success mt-2">Home</a>

  <br>
</br>

  <table class="table" border="1 px">
      <thead>
        <tr>
          <th> ID SPP </th>
          <th> Tahun </th>
          <th> Nominal </th>
          <th> Aksi </th>
        </tr>

      </thead>
      <tbody>
          <?php foreach ($data['spp'] as $spp) :?>
          <tr>
            <td><?= $spp['id_spp'];?></td>
            <td><?= $spp['tahun'];?></td>
            <td><?= $spp['nominal'];?></td>
            <td>
              <a href="<?php echo base64_encode('spp/edit/'.$spp['id_spp']); ?>" class="badge badge-primary badge-pill">Edit</a>
              <a href="<?php echo base64_encode('spp/hapus/'.$spp['id_spp']); ?>" class="badge badge-primary badge-pill" onclick="return confirm('Yakin Hapus Data Ini?')">Hapus</a>
            </td>
          </tr>
         <?php endforeach; ?>
      </tbody>
  </table>
  <br>
  <a href="<?php echo base64_encode('spp/tambah'); ?>" class="btn btn-success mt-2">Tambahkan SPP Baru</a>
  
  
  </div>
</body>
</html>

