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
										Dashboard
									</li>
								</ol>
							</nav>
						</div>
					</div>
				</div><div class="row clearfix progress-box">
					<div class="col-lg-3 col-md-6 col-sm-12 mb-30">
						<div class="card-box pd-30 height-100-p">
							<div class="progress-box text-center">
								<div style="display:inline;width:120px;height:120px;"><canvas width="150" height="150" style="width: 120px; height: 120px;"></canvas><input type="text" class="knob dial1" value="<?= $designationCount ?>" data-width="120" data-height="120" data-linecap="round" data-thickness="0.12" data-bgcolor="#fff" data-fgcolor="#1b00ff" data-angleoffset="180" readonly="readonly" style="width: 64px; height: 40px; position: absolute; vertical-align: middle; margin-top: 40px; margin-left: -92px; border: 0px; background: none rgb(255, 255, 255); font: bold 24px Arial; text-align: center; color: rgb(27, 0, 255); padding: 0px; appearance: none;font-size: 50px"></div>
								<h5 class="text-blue padding-top-10 h5">Deparment</h5>
								<span class="d-block"><i class="fa fa-line-chart text-blue"></i></span>
							</div>
						</div>
					</div>
					
					<div class="col-lg-3 col-md-6 col-sm-12 mb-30">
						<div class="card-box pd-30 height-100-p">
							<div class="progress-box text-center">
								<div style="display:inline;width:120px;height:120px;">
									<canvas width="150" height="150" style="width: 120px; height: 120px;"></canvas>
									<input type="text" class="knob dial2" value="<?= $employeeCount ?>" data-width="120" data-height="120" data-linecap="round" data-thickness="0.12" data-bgcolor="#fff" data-fgcolor="#00e091" data-angleoffset="180" readonly="readonly" style="width: 64px; height: 40px; position: absolute; vertical-align: middle; margin-top: 40px; margin-left: -92px; border: 0px; background: none rgb(255, 255, 255); font: bold 24px Arial; text-align: center; color: rgb(0, 224, 145); padding: 0px; appearance: none;font-size: 50px">
								</div>
								<h5 class="text-light-green padding-top-10 h5">
									Employee
								</h5>
								<span class="d-block"><i class="fa text-light-green fa-line-chart"></i></span>
							</div>
						</div>
					</div>

					<div class="col-lg-3 col-md-6 col-sm-12 mb-30">
						<div class="card-box pd-30 height-100-p">
							<div class="progress-box text-center">
								<div style="display:inline;width:120px;height:120px;"><canvas width="150" height="150" style="width: 120px; height: 120px;"></canvas><input type="text" class="knob dial3" value="unvalue yet" data-width="120" data-height="120" data-linecap="round" data-thickness="0.12" data-bgcolor="#fff" data-fgcolor="#f56767" data-angleoffset="180" readonly="readonly" style="width: 64px; height: 40px; position: absolute; vertical-align: middle; margin-top: 40px; margin-left: -92px; border: 0px; background: none rgb(255, 255, 255); font: bold 24px Arial; text-align: center; color: rgb(245, 103, 103); padding: 0px; appearance: none;"></div>
								<h5 class="text-light-orange padding-top-10 h5">
									Approved Leave Application
								</h5>
								<span class="d-block"> <i class="fa text-light-orange fa-line-chart"></i></span>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-12 mb-30">
						<div class="card-box pd-30 height-100-p">
							<div class="progress-box text-center">
								<div style="display:inline;width:120px;height:120px;"><canvas width="150" height="150" style="width: 120px; height: 120px;"></canvas><input type="text" class="knob dial4" value="Unvalue yet" data-width="120" data-height="120" data-linecap="round" data-thickness="0.12" data-bgcolor="#fff" data-fgcolor="#a683eb" data-angleoffset="180" readonly="readonly" style="width: 64px; height: 40px; position: absolute; vertical-align: middle; margin-top: 40px; margin-left: -92px; border: 0px; background: none rgb(255, 255, 255); font: bold 24px Arial; text-align: center; color: rgb(166, 131, 235); padding: 0px; appearance: none;"></div>
								<h5 class="text-light-purple padding-top-10 h5">
									Panding Leave Application
								</h5>
								<span class="d-block"> <i class="fa text-light-purple fa-line-chart"></i></span>
							</div>
						</div>
					</div>
				</div>
				<div class="card-box pb-10">
					<div class="h5 pd-20 mb-0">Employee</div>
					<div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
						<div class="row">
							<div class="col-sm-12">
								<table class="data-table table nowrap dataTable no-footer dtr-inline collapsed" id="DataTables_Table_0" role="grid">
									<thead>
										<tr role="row">
											<th>#</th>
											<th>Name</th>
											<th>Birth Date</th>
											<th>Address</th>
										</tr>
									</thead>
									<tbody>
										<?php if (!empty($employee)): ?>
											<?php foreach ($employee as $index => $emp): ?>
												<tr>
													<td><?= $index + 1 ?></td>
													<td><?= htmlspecialchars($emp['firstname'] . ' ' . $emp['lastname']) ?></td>
													<td><?= htmlspecialchars($emp['dob']) ?></td>
													<td><?= htmlspecialchars($emp['address']) ?></td>
												</tr>
											<?php endforeach; ?>
										<?php else: ?>
											<tr>
												<td colspan="4">No employees found</td>
											</tr>
										<?php endif; ?>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>



<?= $this->endSection()?>