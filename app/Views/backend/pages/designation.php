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
                    <li class="breadcrumb-item"><a href="<?= route_to('admin.home')?>">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Designation</li>
                </ol>
            </nav>
        </div>
    </div>
</div>
<div class="pd-20 card-box mb-30">
    <div class="clearfix">
        <div class="pull-left">
            <h4 class="text-blue h4">Designation</h4>
        </div>
    </div>
    <form action="<?= route_to('designation_save') ?>" method="post">
        <?= csrf_field() ?>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label>Designation</label>
                    <input type="text" class="form-control" name="designation" style="width: 100%; height: 38px" required>
                    <button type="submit" class="btn btn-outline-primary mt-2" id="sa-success">Add</button>
                </div>
            </div>
        </div>
    </form>
</div>

<div class="pd-20 card-box mb-30">
    <div class="clearfix mb-20">
        <div class="pull-left">
            <h4 class="text-blue h4">Assigned</h4>
        </div>
    </div>
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Designation Name</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php if (!empty($designations)): ?>
                    <?php foreach ($designations as $index => $designation): ?>
                        <tr>
                            <td><?= $index + 1 ?></td>
                            <td><?= htmlspecialchars($designation['name']) ?></td>
                            <td></td>
                        </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="2">No designations found</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>




<?= $this->endSection() ?>	
<script>
    $(document).ready(function() {
        $('#designationForm').on('submit', function(e) {
            e.preventDefault(); // Prevent the default form submission
            
            var designation = $('input[name="designation"]').val();
            
            $.ajax({
                url: '<?= route_to('designation_save') ?>',
                type: 'POST',
                data: {
                    designation: designation,
                    <?= csrf_token() ?>: '<?= csrf_hash() ?>'
                },
                success: function(response) {
                    // Handle the success response here
                    Swal.fire({
                        icon: 'success',
                        title: 'Success',
                        text: response.message
                    }).then((result) => {
                        if (result.isConfirmed) {
                            window.location.reload();
                        }
                    });
                },
                error: function(xhr, status, error) {
                    // Handle the error response here
                    Swal.fire({
                        icon: 'error',
                        title: 'Error',
                        text: 'An error occurred while adding the Designation'
                    });
                }
            });
        });
    });
</script>


