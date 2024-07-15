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
										Add Employee
									</li>
								</ol>
							</nav>
						</div>
					</div>
				</div>

<div class="pd-20 card-box mb-30">
						<div class="clearfix">
							<div class="pull-left">
								<h4 class="text-blue h4">Add Employee</h4>
							</div>
						</div>
						<form>
							<div class="form-group row">
								<label class="col-sm-12 col-md-2 col-form-label">Text</label>
								<div class="col-sm-12 col-md-10">
									<input class="form-control" type="text" placeholder="Johnny Brown">
								</div>
							</div>
							<div class="form-group row">
								<label class="col-sm-12 col-md-2 col-form-label">Search</label>
								<div class="col-sm-12 col-md-10">
									<input class="form-control" placeholder="Search Here" type="search">
								</div>
							</div>
							<div class="form-group row">
								<label class="col-sm-12 col-md-2 col-form-label">Email</label>
								<div class="col-sm-12 col-md-10">
									<input class="form-control" value="bootstrap@example.com" type="email">
								</div>
							</div>
							<div class="form-group row">
								<label class="col-sm-12 col-md-2 col-form-label">URL</label>
								<div class="col-sm-12 col-md-10">
									<input class="form-control" value="https://getbootstrap.com" type="url">
								</div>
							</div>
							<div class="form-group row">
								<label class="col-sm-12 col-md-2 col-form-label">Telephone</label>
								<div class="col-sm-12 col-md-10">
									<input class="form-control" value="1-(111)-111-1111" type="tel">
								</div>
							</div>
							<div class="form-group row">
								<label class="col-sm-12 col-md-2 col-form-label">Password</label>
								<div class="col-sm-12 col-md-10">
									<input class="form-control" value="password" type="password">
								</div>
							</div>
							<div class="form-group row">
								<label class="col-sm-12 col-md-2 col-form-label">Number</label>
								<div class="col-sm-12 col-md-10">
									<input class="form-control" value="100" type="number">
								</div>
							</div>
							<div class="form-group row">
								<label for="example-datetime-local-input" class="col-sm-12 col-md-2 col-form-label">Date and time</label>
								<div class="col-sm-12 col-md-10">
									<input class="form-control datetimepicker" placeholder="Choose Date anf time" type="text">
								</div>
							</div>
							<div class="form-group row">
								<label class="col-sm-12 col-md-2 col-form-label">Date</label>
								<div class="col-sm-12 col-md-10">
									<input class="form-control date-picker" placeholder="Select Date" type="text">
								</div>
							</div>
							<div class="form-group row">
								<label class="col-sm-12 col-md-2 col-form-label">Month</label>
								<div class="col-sm-12 col-md-10">
									<input class="form-control month-picker" placeholder="Select Month" type="text">
								</div>
							</div>
							<div class="form-group row">
								<label class="col-sm-12 col-md-2 col-form-label">Time</label>
								<div class="col-sm-12 col-md-10">
									<input class="form-control time-picker td-input" placeholder="Select time" type="text" readonly="">
								</div>
							</div>
							<div class="form-group row">
								<label class="col-sm-12 col-md-2 col-form-label">Select</label>
								<div class="col-sm-12 col-md-10">
									<select class="custom-select col-12">
										<option selected="">Choose...</option>
										<option value="1">One</option>
										<option value="2">Two</option>
										<option value="3">Three</option>
									</select>
								</div>
							</div>
						</form>
					</div>

<?= $this->endSection()?>
