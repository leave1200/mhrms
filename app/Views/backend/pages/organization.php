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
										Department
									</li>
								</ol>
							</nav>
						</div>
					</div>
				</div>

<form>
							<div class="form-group row">
								<label class="col-sm-12 col-md-2 col-form-label">Department Name</label>
								<div class="col-sm-12 col-md-10">
									<input class="form-control" type="text" placeholder="Johnny Brown">
								</div>
							</div>
							<div class="form-group row">
								<label class="col-sm-12 col-md-2 col-form-label">Category</label>
								<div class="col-sm-12 col-md-10">
									<input class="form-control" placeholder="Search Here" type="search">
								</div>
							</div>
						</form>
                        <div class="pd-20 card-box mb-30">
						<div class="clearfix mb-20">
							<div class="pull-left">
								<h4 class="text-blue h4">Department</h4>
							</div>
						</div>
						<table class="table table-bordered">
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
									<td><span class="badge badge-secondary">Secondary</span></td>
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
						<div class="collapse-box collapse" id="border-table" style="">
							<div class="code-box">
                                <span class="hljs-tag">&lt;<span class="hljs-name">table</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"table table-bordered"</span>&gt;</span>
                                <span class="hljs-tag">&lt;<span class="hljs-name">thead</span>&gt;</span>
                                    <span class="hljs-tag">&lt;<span class="hljs-name">tr</span>&gt;</span>
                                    <span class="hljs-tag">&lt;<span class="hljs-name">th</span> <span class="hljs-attr">scope</span>=<span class="hljs-string">"col"</span>&gt;</span>#<span class="hljs-tag">&lt;/<span class="hljs-name">th</span>&gt;</span>
                                    <span class="hljs-tag">&lt;/<span class="hljs-name">tr</span>&gt;</span>
                                <span class="hljs-tag">&lt;/<span class="hljs-name">thead</span>&gt;</span>
                                <span class="hljs-tag">&lt;<span class="hljs-name">tbody</span>&gt;</span>
                                    <span class="hljs-tag">&lt;<span class="hljs-name">tr</span>&gt;</span>
                                    <span class="hljs-tag">&lt;<span class="hljs-name">th</span> <span class="hljs-attr">scope</span>=<span class="hljs-string">"row"</span>&gt;</span>1<span class="hljs-tag">&lt;/<span class="hljs-name">th</span>&gt;</span>
                                    <span class="hljs-tag">&lt;/<span class="hljs-name">tr</span>&gt;</span>
                                <span class="hljs-tag">&lt;/<span class="hljs-name">tbody</span>&gt;</span>
                                <span class="hljs-tag">&lt;/<span class="hljs-name">table</span>&gt;</span>
							</code></pre>
							</div>
						</div>
					</div>
                        

<?= $this->endSection()?>
