<div class="data-table-area mg-tb-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="sparkline13-list">
                            <div class="sparkline13-hd">
                                <div class="main-sparkline13-hd">
                                    <h1><?php echo $Type;?></h1>
                                </div>
                            </div>
                            <div class="sparkline13-graph">
                                <div class="datatable-dashv1-list custom-datatable-overright">
                                 <div class="add-product">
                                	<a href="<?php echo base_url()."index.php/Ppi_mahasiswa/Add"?>">Tambah Data</a>
                            	</div>
                                    <div id="toolbar">
                                        <select class="form-control">
										<option value="">Export Basic</option>
										<option value="all">Export All</option>
										<option value="selected">Export Selected</option>
										</select>
                                    </div>
                                    <table id="table" data-toggle="table" data-pagination="true"
                                    data-search="true" data-show-columns="true" data-show-pagination-switch="true"
                                    data-show-refresh="true" data-key-events="true" data-show-toggle="true"
                                    data-resizable="true" data-cookie="true"
                                    data-cookie-id-table="saveId" data-show-export="true"
                                    data-click-to-select="true" data-toolbar="#toolbar">
                                    <thead>
                                    <tr>
                                    <th data-field="state" data-checkbox="true"></th>
									<th>Tahun</th>
									<th>Tahun (X)</th>
									<th>Penjualan (Y)</th>
									<th>XY</th>
									<th>X^2</th>
									
                                    <!-- <th data-field="Edit">Aksi</th> -->
                                   
									</tr>
									</thead>
									<tbody>
									<?php
									$jumlahData = count($Data_penjualan);
									$jumlahPenjualan = 0;
									$jumlahXY = 0;
									$jumlahX = 0;
									$n = 0;
									if (($jumlahData % 2)==0){
										$i = 1 - $jumlahData;
									}else{
										$i = 0;
									};
									foreach($Data_penjualan as $data){
										
									echo "<tr>".
									"<td></td>".
											 
									"<td>".$data->Tahun."</td>".
									"<td>".$i."</td>".
									"<td>".number_format($data->Jumlah,0,',','.')."</td>".
									"<td>".number_format(($i * $data->Jumlah),0,',','.')."</td>".
									"<td>".number_format(pow($i,2),0,',','.')."</td>";
									$jumlahPenjualan = $jumlahPenjualan+$data->Jumlah;
									$jumlahXY = ($jumlahXY+($i * $data->Jumlah));
									$jumlahX = ($jumlahX+(pow($i,2)));
									if (($jumlahData % 2)==0){
												$i = $i+2;

										}else{
											
										};
									/*"<td>
									<a href='".base_url()."index.php/Ppi_mahasiswa/Edit/".$data->ppi_id."'>".
									"<button  data-toggle='tooltip' title='Edit' class='pd-setting-ed'>
									<i class='fa fa-pencil-square-o' aria-hidden='true'> Ubah</i>
									</button>
									</a>".
											
									"
									<button class='pd-setting-ed' title='Hapus Data' data-toggle='tooltip' 
									data-placement='bottom' onclick='validate(this)' value='$data->ppi_id'>
									<i class='fa fa-trash-o'> Hapus</i>
									</button>
									</td>".*/
									echo "</tr>";	
									}
									echo "<tr>".
										"<td></td>".
										"<td colspan='2'><b>Jumlah</b></td>".
										"<td><b>".number_format($jumlahPenjualan,0,',','.')."</b></td>".
										"<td><b>".number_format($jumlahXY,0,',','.')."</b></td>".
										"<td><b>".number_format($jumlahX,0,',','.')."</b></td>".
										"</tr>";
                                    ?>
									
                                    </tbody>
                                    </table>
									
									<!-- Untuk menghitung nilai koefisien a dan b-->
									<table id="table">
										<tr>
											<td>Koefisien</td>
											<td>Hasil</td>
										</tr>
										<tr>
											<td>a</td>
											<td>
												<?php 
													$a = $jumlahPenjualan/$jumlahData; 
													echo number_format($a,2,',','.');
												?>
											</td>
										</tr>
										<tr>
											<td>b</td>
											<td>
												<?php 
													$b = $jumlahXY/$jumlahX; 
													echo number_format($b,2,',','.');
												?>
											</td>
										</tr>
										<tr>
											<td>Prediksi Penjualan Tahun 2017</td>
											<td>
												<?php 
													$prediksi = ($a+($b*$i)); 
													echo number_format($prediksi,2,',','.');
												?></td>
										</tr>
									</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


<script>
$(function(){ TablesDatatables.init(); });
function validate(a)
{
    var id= a.value;

    swal({
            title: "Yakin Akan Menghapus Data?",
            text: "Anda Yakin Data ini Akan dihapus!",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Yes, Delete it!",
            closeOnConfirm: false }, function()
        {
            swal("Deleted!", "Data Item has been Deleted.", "success");
            $(location).attr('href','<?php echo base_url()?>index.php/Ppi_mahasiswa/Delete/'+id);
        }
    );
}
 </script>