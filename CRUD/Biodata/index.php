<div class="row">
<div class="col">
	<h5>Biodata Data Mahasiswa</h5>
</div>
	<div class="col text-end" >
<a class="btn btn-primary"href="?modul=from-tambah">Tambah Mahasiswa</a>
</div>
	</div>
	 	<table class="table"> 
            <tr>		 
    <th>N0</th>
	<th>NPM</th>
	<th>Nama</th>
    <th>Prodi</th>
	<th>Action</th>
</tr>
	<?php
$query = "SELECT * FROM biodata order by npm ASC";
$result = $mysqli->query ($query);
	$cek_data = $result->num_rows;
	$no=0 
	if($cek_data==0){
        ?> 
        <tr>
		 <td colspan="5">Tidak ada data</td>
          </tr>
<?php
 }else{
while($row=$result->fetch_assoc())}
   $no++;
?>
<tr>
<td><?=$no;?></td>
<td><?=$row['npm'];?></td>
<td><?=$row['nama'];?></td>
<td><?=$row['prodi'];?></td>
<td>
    <a href="<?= '?modul=from-edit&id=' .$row['id'];?>">Edit</a>
<a data-bs-toggle="modal" daat-bs-target="#hapusModal<?=$row['id'];?>"
 href="#" >Hapus</a>
	 <!--Modal -- >
     <div class="modal fade" id="hapusModl<?=$row['id'];?>"tabindex="-1"aria-
     labelledby="exampleModalLabel" aria-hidden="true">
                   <div class="modal-dialog">
	               <div class=" modal-content" >
	              <div class=" modal-header" >
	             <hl class="modal-title fs-5" id="exampleModalLblel">Konfirmasi Hapus</hl>
                 <button type="button" class="btn-close" data-bs-dismiss="modal" aria-
                 label="Close"/button></button>
                </div>
	           <div class="modal-boy">
	Apakah anda yakin akan menghapus data <?=$row['nama'];?>?
	</div>
	<div class="modal-footer">	
        <button type="button" class="btn btn-secondary" data-bs
dismiss="modal">Close</button>
<a class="btn btn-primary" href="<?= 'modul/biodata/proses .php?
 action=delet&id='.$row['id'];?>">Yakin</a> 
	</div>	
    </div>
	</div>
	</div>
    </td>
	</tr>
< ? php
}
}
?>
</table>