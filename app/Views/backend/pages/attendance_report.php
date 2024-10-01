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
                    <li class="breadcrumb-item"><a href="<?= route_to('admin.home') ?>">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">
                        Attendance Reports
                    </li>
                </ol>
            </nav>
        </div>
    </div>
</div>
<!-- Date Filter Form -->
<form method="get" action="<?= route_to('attendance_report') ?>" class="mb-4">
    <div class="form-group">
        <label for="start_date">Start Date:</label>
        <input type="date" id="start_date" name="start_date" value="<?= esc($startDate) ?>" class="form-control">
    </div>
    <div class="form-group">
        <label for="end_date">End Date:</label>
        <input type="date" id="end_date" name="end_date" value="<?= esc($endDate) ?>" class="form-control">
    </div>
    <button type="submit" class="btn btn-primary">Filter</button>
</form>
<div class="pd-20 card-box mb-30">
    <div class="clearfix mb-20">
        <div class="pull-left">
            <h4 class="text-blue h4">Sign In/Sign Out Record</h4>
        </div>
    </div>
    <button onclick="printDataTable()" class="btn btn-primary">Print</button> <!-- Change the onclick function here -->
    <div class="table-responsive">
        <div id="print-area">
        <table class="data-table table stripe hover nowrap dataTable no-footer dtr-inline collapsed" id="DataTables_Table_0" role="grid">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Office</th>
                    <th scope="col">Position</th>
                    <th scope="col">Sign In</th>
                    <th scope="col">Sign Out</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php if (!empty($attendances)): ?>
                    <?php foreach ($attendances as $index => $attendance): ?>
                        <tr>
                            <td><?= ($index + 1) + (($pager->getCurrentPage() - 1) * $perPage) ?></td>
                            <td><?= htmlspecialchars($attendance['name']) ?></td>
                            <td><?= htmlspecialchars($attendance['office']) ?></td>
                            <td><?= htmlspecialchars($attendance['position']) ?></td>
                            <td><?= htmlspecialchars($attendance['sign_in']) ?></td>
                            <td><?= htmlspecialchars($attendance['sign_out']) ?></td>
                            <?php if (isset($userStatus) && $userStatus !== 'EMPLOYEE'): ?>
                            <td>
                                <button type="button" class="btn btn-secondary" onclick="deleteAttendance(<?= $attendance['id'] ?>)">Delete</button>
                            </td>
                            <?php endif; ?>
                        </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="7">No attendance records found</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
        </div>
    </div>



<!-- Pagination Links -->
<div class="clearfix">
    <div class="pull-right">
        <nav aria-label="Page navigation example">
            <ul class="pagination">
                <!-- Previous Page Link -->
                <?php if ($hasPrevious): ?>
                    <li class="page-item">
                        <a class="page-link" href="?page=<?= $currentPage - 1 ?>&start_date=<?= esc($startDate) ?>&end_date=<?= esc($endDate) ?>" aria-label="Previous">
                            <span aria-hidden="true">&laquo; Previous</span>
                        </a>
                    </li>
                <?php else: ?>
                    <li class="page-item disabled">
                        <span class="page-link">&laquo; Previous</span>
                    </li>
                <?php endif; ?>

                <!-- Current Page Indicator (Optional) -->
                <li class="page-item disabled">
                    <span class="page-link"><?= $currentPage ?></span>
                </li>

                <!-- Next Page Link -->
                <?php if ($hasNext): ?>
                    <li class="page-item">
                        <a class="page-link" href="?page=<?= $currentPage + 1 ?>&start_date=<?= esc($startDate) ?>&end_date=<?= esc($endDate) ?>" aria-label="Next">
                            <span aria-hidden="true">Next &raquo;</span>
                        </a>
                    </li>
                <?php else: ?>
                    <li class="page-item disabled">
                        <span class="page-link">Next &raquo;</span>
                    </li>
                <?php endif; ?>
            </ul>
        </nav>
    </div>
</div>

</div>
<script>
function printDataTable() {
    var printContent = document.getElementById('print-area').innerHTML; // Get the HTML of the table
    var originalContent = document.body.innerHTML; // Save the original content of the body

    document.body.innerHTML = printContent; // Replace the body's content with the table's content
    window.print(); // Trigger the print dialog
    document.body.innerHTML = originalContent; // Restore the original content of the body
    window.location.reload(); // Reload the page to reset any changes made for printing
}
</script>

<?= $this->endSection() ?>
