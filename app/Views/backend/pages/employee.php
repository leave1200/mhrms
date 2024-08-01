<?= $this->extend('backend/layout/pages-layout') ?>
<script src="/backend/jquery-3.6.0.min.js"></script>
<script src="/backend/src/plugins/apexcharts/apexcharts.min.js"></script>
<link rel="preload" href="/backend/vendors/fonts/fontawesome-webfont.woff2?v=4.7.0" as="font" type="font/woff2" crossorigin="anonymous">

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
                    <li class="breadcrumb-item active" aria-current="page">Add Employee</li>
                </ol>
            </nav>
        </div>
    </div>
</div>
<div class="pd-ltr-20 xs-pd-20-10">
    <div class="min-height-200px">
        <div class="pd-20 card-box mb-30">
            <div class="clearfix">
                <h4 class="text-blue h4">Employee</h4>
                <p class="mb-30">Application Form</p>
            </div>
            <div class="wizard-content">
                <form class="tab-wizard wizard-circle wizard" id="addEmployeeForm" action="<?= route_to('employee_save') ?>" method="POST">
                    <?= csrf_field() ?>
                    <h5>Personal Info</h5>
                    <section>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="firstname">First Name :</label>
                                    <input type="text" class="form-control" id="firstname" name="firstname" required/>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="lastname">Last Name :</label>
                                    <input type="text" class="form-control" id="lastname" name="lastname" required/>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="email">Email Address :</label>
                                    <input type="email" class="form-control" id="email" name="email" required/>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="phone">Phone Number :</label>
                                    <input type="text" class="form-control" id="phone" name="phone" maxlength="11" oninput="this.value = this.value.replace(/[^0-9]/g, '')" required/>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                <label for="address">Address :</label>
                                <input type="text" class="form-control" id="address" name="address" required/>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="dob">Date of Birth :</label>
                                    <input type="text" class="form-control date-picker" id="dob" name="dob" placeholder="Select Date" required/>
                                </div>
                            </div>
                        </div>
                    </section>
                    <h5>Educational Background</h5>
                    <section>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="p_school">Primary School Attended:</label>
                                    <input type="text" class="form-control" id="p_school" name="p_school" required/>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="s_school">Secondary School Attended :</label>
                                    <input type="text" class="form-control" id="s_school" name="s_school" required/>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="t_school">Tertiary School Attended:</label>
                                    <input type="text" class="form-control" id="t_school" name="t_school" required/>
                                </div>
                            </div>
                        </div>
                    </section>
                    <h5>Interview</h5>
                    <section>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="interview_for">Interview For :</label>
                                    <input type="text" class="form-control" id="interview_for" name="interview_for" required/>
                                </div>
                                <div class="form-group">
                                    <label for="interview_type">Interview Type :</label>
                                    <select class="form-control" id="interview_type" name="interview_type">
                                        <option value="Normal">Normal</option>
                                        <option value="Difficult">Difficult</option>
                                        <option value="Hard">Hard</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="interview_date">Interview Date :</label>
                                    <input type="text" class="form-control date-picker" id="interview_date" name="interview_date" placeholder="Select Date" required/>
                                </div>
                                <div class="form-group">
												<label>Interview Time :</label>
												<input
													class="form-control time-picker"
													placeholder="Select time"
													type="text"
                                                    name="interview_time"
												/>
											</div>
                            </div>
                        </div>
                    </section>
                    <h5>Remark</h5>
                    <section>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="behaviour">Behaviour :</label>
                                    <input type="text" class="form-control" id="behaviour" name="behaviour" reuired/>
                                </div>
                                <div class="form-group">
                                    <label for="result">Result :</label>
                                    <select class="form-control" id="result" name="result">
                                        <option value="">Select Result</option>
                                        <option value="Pending">Pending</option>
                                        <option value="Hired">Hired</option>
                                        <option value="Rejected">Rejected</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="comment">Comments :</label>
                                    <textarea class="form-control" id="comment" name="comment"></textarea>
                                </div>
                            </div>
                        </div>
                    </section>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- success Popup html Start -->
<div
						class="modal fade"
						id="success-modal"
						tabindex="-1"
						role="dialog"
						aria-labelledby="exampleModalCenterTitle"
						aria-hidden="true"
					>
						<div class="modal-dialog modal-dialog-centered" role="document">
							<div class="modal-content">
								<div class="modal-body text-center font-18">
									<h3 class="mb-20">Employee Added!</h3>
									<div class="mb-30 text-center">
										<img src="/backend/vendors/images/success.png" />
									</div>
                                    successfully!!
								</div>
								<div class="modal-footer justify-content-center">
									<button
										type="button"
										class="btn btn-primary"
										data-dismiss="modal"
									>
										Done
									</button>
								</div>
							</div>
						</div>
					</div>
					<!-- success Popup html End -->
                    <script>
        $(document).ready(function() {
            $("#dob").datepicker({
                changeMonth: true,
                changeYear: true,
                yearRange: "-100:+0",
                dateFormat: "yy-mm-dd",
                onSelect: function(dateText, inst) {
                    var selectedDate = new Date(dateText);
                    selectedDate.setFullYear(selectedDate.getFullYear() - 18);
                    var newDate = selectedDate.toISOString().split('T')[0];
                    $("#dob").val(newDate);
                }
            });
        });
    </script>
<?= $this->endSection() ?>
