
<!DOCTYPE html>
<html>
	<head>
		<!-- Basic Page Info -->
		<meta charset="utf-8" />
		<title><?= isset($pageTitle) ? $pageTitle : 'New Page Title'; ?></title>

		<!-- Site favicon -->
		<link
			rel="apple-touch-icon"
			sizes="180x180"
			href="/backend/vendors/images/apple-touch-icon.png"
		/>
		<link
			rel="icon"
			type="image/png"
			sizes="32x32"
			href="/backend/vendors/images/favicon-32x32.png"
		/>
		<link
			rel="icon"
			type="image/png"
			sizes="16x16"
			href="/backend/vendors/images/favicon-16x16.png"
		/>

		<!-- Mobile Specific Metas -->
		<meta
			name="viewport"
			content="width=device-width, initial-scale=1, maximum-scale=1"
		/>

		<!-- Google Font -->
		<link
			href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap"
			rel="stylesheet"
		/>
		<!-- CSS -->
		<link rel="stylesheet" type="text/css" href="/backend/vendors/styles/core.css" />
		<link
			rel="stylesheet"
			type="text/css"
			href="/backend/vendors/styles/icon-font.min.css"
		/>
		<link
			rel="stylesheet"
			type="text/css"
			href="src/plugins/datatables/css/dataTables.bootstrap4.min.css"
		/>
		<link
			rel="stylesheet"
			type="text/css"
			href="src/plugins/datatables/css/responsive.bootstrap4.min.css"
		/>
		<link rel="stylesheet" type="text/css" href="/backend/vendors/styles/style.css" />

	</head>
	<body>

<?php include('inc/header.php') ?>
<?php include('inc/right-sidebar.php') ?>
<?php include('inc/left-sidebar.php') ?>

		<!-- js -->
		<script src="/backend/vendors/scripts/core.js"></script>
		<script src="/backend/vendors/scripts/script.min.js"></script>
		<script src="/backend/vendors/scripts/process.js"></script>
		<script src="/backend/vendors/scripts/layout-settings.js"></script>
		<script src="/backend/src/plugins/apexcharts/apexcharts.min.js"></script>
		<script src="/backend/src/plugins/datatables/js/jquery.dataTables.min.js"></script>
		<script src="/backend/src/plugins/datatables/js/dataTables.bootstrap4.min.js"></script>
		<script src="/backend/src/plugins/datatables/js/dataTables.responsive.min.js"></script>
		<script src="/backend/src/plugins/datatables/js/responsive.bootstrap4.min.js"></script>
		<script src="/backend/vendors/scripts/dashboard3.js"></script>
	</body>
</html>
