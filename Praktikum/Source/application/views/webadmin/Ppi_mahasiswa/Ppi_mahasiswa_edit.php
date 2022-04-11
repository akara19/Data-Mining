<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
	<div class="sparkline12-list">
		<div class="sparkline12-hd">
			<div class="main-sparkline12-hd">
				<h1>
				<?php 
				echo $Type;
				 foreach($Ppi_mahasiswa as $data);
				?></h1>
			</div>
		</div>
		<div class="sparkline12-graph">
			<div class="basic-login-form-ad">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<div class="all-form-element-inner">
							<?php echo form_open_multipart('Ppi_mahasiswa/Update');?>
								
								<!-- Untuk menampung data yang menjadi PK yang akan digunakan untuk acuan update data -->
								<input type="hidden" name="id"  value="<?php echo $data->ppi_id;?>">
								<!-- ================================================================================ -->
								
								
								<div class="form-group-inner">
									<div class="row">
										<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
											<label class="login2 pull-right pull-right-pro">Nim</label>
										</div>
										<div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
										<input type="text" class="form-control" name="Nim" 
										value="<?php echo $data->Nim;?>">
										</div>
									</div>
								</div>
								
								
								<div class="form-group-inner">
									<div class="row">
										<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
											<label class="login2 pull-right pull-right-pro">Nama</label>
										</div>
										<div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
										<input type="text" class="form-control" name="Nama" 
										value="<?php echo $data->Nama;?>">
										</div>
									</div>
								</div>
	
                 
								<div class="form-group-inner">
									<div class="login-btn-inner">
										<div class="row">
											<div class="col-lg-3"></div>
											<div class="col-lg-9">
												<div class="login-horizental cancel-wp pull-left">
												
												<button class="btn btn-sm btn-primary login-submit-cs" type="submit">Save
												</button>
												</div>
											</div>
										</div>
									</div>
								</div>
							
							<!-- End Form -->
							</form>
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

