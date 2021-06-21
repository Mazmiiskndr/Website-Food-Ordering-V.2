
<div class="content-body">
	<!-- row -->
	<div class="container-fluid">
		<div class="row">
			<div class="col-xl-6 col-xxl-12">
				<div class="row">
					<div class="col-xl-6 col-lg-6 col-sm-6">
						<div class="widget-stat card bg-primary">
							<div class="card-body  p-4">
								<div class="media">
									<span class="mr-3">
										<i class="la la-users"></i>
									</span>
									<div class="media-body text-white text-right">
										<p class="mb-1">Total Users</p>
										<h3 class="text-white"><?= $jumlah_users ?></h3>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-6 col-lg-6 col-sm-6">
						<div class="widget-stat card bg-secondary">
							<div class="card-body p-4">
								<div class="media">
									<span class="mr-3">
										<i class="la la-cutlery"></i>
									</span>
									<div class="media-body text-white text-right">
										<p class="mb-1">Total Menu</p>
										<h3 class="text-white"><?= $jumlah_foods ?></h3>
									</div>
								</div>
							</div>
						</div>
					</div>
					
					<div class="col-sm-6">
						<div class="card avtivity-card">
							<div class="card-body">
								<div class="media align-items-center">
									<span class="activity-icon bgl-danger mr-md-4 mr-3">
										<svg width="40" height="39" viewBox="0 0 40 39" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M18.0977 7.90402L9.78535 16.7845C9.17929 17.6683 9.40656 18.872 10.2862 19.4738L18.6574 25.2104V30.787C18.6574 31.8476 19.4992 32.7357 20.5598 32.7568C21.6456 32.7735 22.5295 31.9023 22.5295 30.8207V24.1961C22.5295 23.5564 22.2138 22.9588 21.6877 22.601L16.3174 18.9184L20.8376 14.1246L23.1524 19.3982C23.4596 20.101 24.1582 20.5556 24.9243 20.5556H31.974C33.0346 20.5556 33.9226 19.7139 33.9437 18.6532C33.9605 17.5674 33.0893 16.6835 32.0076 16.6835H26.1953C25.4293 14.9411 24.6128 13.2155 23.9015 11.4478C23.5395 10.5556 23.3376 10.1684 22.6726 9.55389C22.5379 9.42763 21.5993 8.56904 20.7618 7.80305C19.9916 7.10435 18.8047 7.15065 18.0977 7.90402Z" fill="#FF3282"/> 
											<path d="M26.0269 8.87206C28.4769 8.87206 30.463 6.88598 30.463 4.43603C30.463 1.98608 28.4769 0 26.0269 0C23.577 0 21.5909 1.98608 21.5909 4.43603C21.5909 6.88598 23.577 8.87206 26.0269 8.87206Z" fill="#FF3282"/>
											<path d="M8.16498 38.388C12.6744 38.388 16.33 34.7325 16.33 30.2231C16.33 25.7137 12.6744 22.0581 8.16498 22.0581C3.65559 22.0581 0 25.7137 0 30.2231C0 34.7325 3.65559 38.388 8.16498 38.388Z" fill="#FF3282"/>
											<path d="M31.835 38.388C36.3444 38.388 40 34.7325 40 30.2231C40 25.7137 36.3444 22.0581 31.835 22.0581C27.3256 22.0581 23.67 25.7137 23.67 30.2231C23.67 34.7325 27.3256 38.388 31.835 38.388Z" fill="#FF3282"/>
										</svg>
									</span>
									<div class="media-body">
										<p class="fs-14 mb-2">Total Pengantaran</p>
										<span class="title text-black font-w600">
											<?= $jumlah_status ?>
											</span>
									</div>
								</div>
								<div class="progress" style="height:5px;">
									<div class="progress-bar bg-success" style="width: 50%; height:5px;" role="progressbar">
									</div>
								</div>
							</div>
							<div class="effect bg-black"></div>
						</div>
					</div>
					<div class="col-xl-6 col-lg-6 col-sm-6">
						<div class="widget-stat card bg-dark ">
							<div class="card-body p-4">
								<div class="media">
									<span class="mr-3">
										<i class="flaticon-381-controls-3"></i>
									</span>
									<div class="media-body text-white text-right">
										<p class="mb-1">Total Kategori Restoran</p>
										<h3 class="text-white"><?= $jumlah_kategori ?></h3>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xl-6 col-xxl-12">
				<div class="row">
					<div class="col-xl-6 col-lg-6 col-sm-6">
						<div class="widget-stat card bg-warning">
							<div class="card-body  p-4">
								<div class="media">
									<span class="mr-3">
										<i class="la la-building"></i>
									</span>
									<div class="media-body text-white text-right">
										<p class="mb-1">Total Restoran</p>
										<h3 class="text-white"><?= $jumlah_restoran ?></h3>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-6 col-lg-6 col-sm-6">
						<div class="widget-stat card bg-info">
							<div class="card-body p-4">
								<div class="media">
									<span class="mr-3">
										<i class="la la-comments-o"></i>
									</span>
									<div class="media-body text-white text-right">
										<p class="mb-1">Total Contact</p>
										<h3 class="text-white"><?= $jumlah_contact ?></h3>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-6 col-lg-6 col-sm-6">
						<div class="widget-stat card bg-danger">
							<div class="card-body p-4">
								<div class="media">
									<span class="mr-3">
										<i class="la la-shopping-cart"></i>
									</span>
									<div class="media-body text-white text-right">
										<p class="mb-1">Total Pesanan</p>
										<h3 class="text-white"><?= $jumlah_transaksi ?></h3>
									</div>
								</div>
							</div>
						</div>
					</div>
					
					<div class="col-xl-6 col-lg-6 col-sm-6">
						<div class="widget-stat card bg-success ">
							<div class="card-body p-4">
								<div class="media">
									<span class="mr-3">
										<i class="la la-money"></i>
									</span>
									<div class="media-body text-white text-right">
										<p class="mb-1">Total Pendapatan</p>
										<h5 class="text-white">Rp. <?= number_format($pendapatan,0,',','.'); ?></h5>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			
		
			<div class="col-xl-9 col-xxl-8">
				<div class="row">
					<div class="col-xl-12">	

						<div class="card">
							<div class="card-header">
								<h4 class="card-title"><strong>Data Restoran</strong></h4>
							</div>
							<div class="card-body">
								<div class="table-responsive">
									<table id="example" class="display min-w850">
										<thead>
											<tr>
												<th>No.</th>
												<th>Nama</th>
												<th>Kategori</th>
												<th>Email</th>
												<th>No. HP</th>
												<th>Aksi</th>
											</tr>
										</thead>
										<tbody>
											<?php
											$no = 1;
											foreach($restoran as $row){
												?>
												<tr>
													<td><?= $no++ ?></td>

													<td><?= $row->nama_restoran ?></td>
													<td><?= $row->nama_kategori ?></td>
													<td><a href="javascript:void(0);"><strong><?= $row->email ?></strong></a></td>
													<td><a href="javascript:void(0);"><strong><?= $row->no_hp ?></strong></a></td>
													<td>

														<a href="<?= base_url('admin/restoran/edit_restoran/'.$row->id_restoran) ?>" class="btn btn-facebook shadow btn-sm sharp mr-1"><i class="fa fa-pencil"></i></a>
														<a href="<?= base_url('admin/restoran/delete_restoran/'.$row->id_restoran) ?>" class="btn btn-youtube shadow btn-sm sharp" onclick="return confirm('Yakin ingin menghapus?')"><i class="fa fa-trash"></i></a>
													</td>
												</tr>
											<?php } ?>

										</tbody>
										<tfoot>
											<tr>
												<th>No.</th>
												<th>Nama</th>
												<th>Kategori</th>
												<th>Email</th>
												<th>No. HP</th>
												<th>Aksi</th>
											</tr>
										</tfoot>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xl-3 col-xxl-4">
				<div class="row">
					<div class="col-xl-12">
						<div class="card featuredMenu">
							<div class="card-header border-0">
								<h4 class="text-black font-w600 fs-20 mb-0">Data Menu</h4>
							</div>
							<div class="card-body loadmore-content height750 dz-scroll pt-0" id="FeaturedMenusContent">
								<?php foreach($foods as $food){ ?>
									<div class="media mb-4">
										<img src="<?= base_url('assets/uploads/menu/'.$food->gambar_foods) ?>" width="85" alt="" class="rounded mr-3">
										<div class="media-body">
											<h5><a href="#" class="text-black fs-16"><?= $food->nama_foods ?></a></h5>
											<span class="fs-14 text-primary font-w500">Rp. <?= number_format($food->harga,0,',','.'); ?></span>
										</div>
									</div>
								<?php } ?>

							</div>
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>