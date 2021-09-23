<?php 
error_reporting(error_reporting() & ~E_NOTICE)
?>

<style type="text/css">
    body { font-family : "Century Gothic"}
</style>


<!DOCTYPE html>
<html>
    <head>
    <title>UTS (Pembayaran SPP Siswa)</title>
</head>
<body>
    <h2 style="text-align:center;">Selamat Datang di Menu Pembayaran SPP Siswa</h2>
<table width="100%" border="1">
    <tr height="5%">
        <td align="center">
            <a href="<?php echo base64_encode('petugas'); ?>">Petugas | </a>
            <a href="<?php echo base64_encode('kelas'); ?>">Kelas |    </a>
            <a href="<?php echo base64_encode('spp'); ?>">SPP |   </a>
            <a href="<?php echo base64_encode('siswa'); ?>">Siswa |  </a>
            <a href="<?php echo base64_encode('pembayaran'); ?>">Pembayaran |   </a>
            <a href="<?php echo base64_encode('login/logout'); ?>">Logout </a>
        </td>
    </tr>
</table>
</body>
</html>