<?= $this->extend('backend/layout/pages-layout') ?>
<?= $this->section('content') ?>
<div class="page-header">
					<div class="row">
						<div class="col-md-6 col-sm-12">
							<div class="title">
								<h4>Dashboard</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.html">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">
										Employee List
									</li>
								</ol>
							</nav>
						</div>
					</div>
				</div>
<div class="pd-20 card-box mb-30">
						<div class="clearfix mb-20">
							<div class="pull-left">
								<h4 class="text-blue h4">Employee List</h4>
						</div>
						<div class="table-responsive">
							<table class="table table-striped">
								<thead>
									<tr>
										<th scope="col">#</th>
										<th scope="col">First</th>
										<th scope="col">Last</th>
										<th scope="col">Handle</th>
										<th scope="col">Tag</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<th scope="row">1</th>
										<td>Mark</td>
										<td>Otto</td>
										<td>@mdo</td>
										<td><span class="badge badge-primary">Primary</span></td>
									</tr>
									<tr>
										<th scope="row">2</th>
										<td>Jacob</td>
										<td>Thornton</td>
										<td>@fat</td>
										<td>
											<span class="badge badge-secondary">Secondary</span>
										</td>
									</tr>
									<tr>
										<th scope="row">3</th>
										<td>Larry</td>
										<td>the Bird</td>
										<td>@twitter</td>
										<td><span class="badge badge-success">Success</span></td>
									</tr>
									<tr>
										<th scope="row">2</th>
										<td>Jacob</td>
										<td>Thornton</td>
										<td>@fat</td>
										<td>
											<span class="badge badge-secondary">Secondary</span>
										</td>
									</tr>
									<tr>
										<th scope="row">3</th>
										<td>Larry</td>
										<td>the Bird</td>
										<td>@twitter</td>
										<td><span class="badge badge-success">Success</span></td>
									</tr>
								</tbody>
							</table>
						</div>
						<div class="collapse-box collapse" id="responsive-table" style="">
							<div class="code-box">
								<div class="clearfix">
									<a href="javascript:;" class="btn btn-primary btn-sm code-copy pull-left" data-clipboard-target="#responsive-table-code"><i class="fa fa-clipboard"></i> Copy Code</a>
									<a href="#responsive-table" class="btn btn-primary btn-sm pull-right collapsed" rel="content-y" data-toggle="collapse" role="button" aria-expanded="false"><i class="fa fa-eye-slash"></i> Hide Code</a>
								</div>
							</div>
						</div>
					</div>

<?= $this->endSection()?>
