
<!DOCTYPE html>
<html lang="en">
<body>
<div class="col-md-12">
    <table class="table table-striped table-bordered bootstrap-datatable datatable responsive">
    <thead>
    <tr>
        <tr>
        <th class="text-center">ID</th>
        <th class="text-center">Nama CS</th>
        <th class="text-center">Mobil</th>
        <th class="text-center">Nama Sopir</th>
        <th class="text-center">Tanggal Sewa</th>
        <th class="text-center">Tanggal Kembali</th>
        <th class="text-center">Total Harga</th>
        <th class="text-center">Keterangan</th>
        <th class="text-center">Aksi</th>
    </tr>
    </thead>
    <tbody>
          <?php
          $id=$_GET['id'];
          $tampil=$koneksi->query("SELECT * FROM tbdetailsewa LEFT JOIN tbcostumer ON tbdetailsewa.kd_cs=tbcostumer.kd_cs LEFT JOIN tbsewa ON tbdetailsewa.kd_sewa=tbsewa.kd_sewa LEFT JOIN tbmobil ON tbsewa.no_polisi=tbmobil.no_polisi LEFT JOIN tbmerk ON tbmobil.kd_merk=tbmerk.kd_merk LEFT JOIN tbsopir ON tbdetailsewa.kd_sopir=tbsopir.kd_sopir WHERE tbdetailsewa.kd_cs='$id'");
          $jumlah_data=$tampil->num_rows;
          if($jumlah_data>0){
          while($row = $tampil->fetch_object()){?>
            
                        <tr>
                          <td class='text-center' width='50px'><?php echo $row->kd_detail?></td> 
                          <td class='text-center'><?php echo $row->nama_cs?></td>
                          <td class='text-center' ><?php echo $row->no_polisi?> - <?php echo $row->merk_mobil?> <?php echo $row->jenis_mobil?></td> 
                          <td class='text-center'><?php echo $row->nama_sopir?></td>
                          <td class='text-center'><?php echo $row->tgl_sewa?></td>
                          <td class='text-center'><?php echo $row->tgl_kembali?></td>
                          <td class='text-center'><?php echo $row->total_harga?></td>
                          <td class='text-center'><?php echo $row->ket?></td>
                          <td>
                            <a href="laporan/cetakNota.php?id=<?php echo $_SESSION['kd_cs']; ?>&id2=<?php echo $row->kd_detail?>" target="_blank">Cetak</a>
                          </td>
                        </tr>
                        <?php 
                                            ;
                                                 
                                               }
                                              }else{
                                                echo "<tr><td colspan='9'>Data Kosong</td></tr>";
                                              }
                                          ?>

    </tbody>
    </table>
    </div>
</body>
</html>
