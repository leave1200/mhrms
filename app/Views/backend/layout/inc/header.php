<style>
	.notification-active {
		background-color: #f00;
		border-radius: 50%;
		padding: 2px 6px;
		font-size: 12px;
		color: white;
	}
	.dropdown-menu.notifications-dropdown {
		width: 300px; /* Adjust width of the dropdown */
		max-height: 300px; /* Control height and enable scroll */
		overflow-y: auto;
	}
</style>

<div class="header">
	<div class="header-left">
		<div class="menu-icon bi bi-list"></div>
		<div class="search-toggle-icon bi bi-search" data-toggle="header_search"></div>
		<div class="header-search"></div>
	</div>
	<div class="header-right">
		<div class="dashboard-setting user-notification">
			<div class="dropdown">
				<a class="dropdown-toggle no-arrow" href="javascript:;" data-toggle="right-sidebar">
					<i class="dw dw-settings2"></i>
				</a>
			</div>
		</div>
		<div class="user-notification">
			<div class="dropdown">
				<a class="dropdown-toggle no-arrow" href="#" role="button" data-toggle="dropdown">
					<i class="icon-copy dw dw-notification"></i>
					<span class="badge notification-active"></span>
				</a>
				<div class="dropdown-menu dropdown-menu-right notifications-dropdown">
					<h6 class="dropdown-header">Notifications</h6>
					<ul class="list-group">
						<li class="list-group-item">No new notifications.</li>
						<!-- Dynamically add notifications here -->
					</ul>
				</div>
			</div>
		</div>
		<div class="user-info-dropdown">
			<div class="dropdown">
				<a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown">
					<span class="user-icon ci-photo">
						<img src="<?= get_user()->picture == null ? '/images/users/userav-min.png' : '/images/users/'.get_user()->picture ?>" alt="" />
					</span>
					<span class="user-name ci-name"><?= get_user()->name ?></span>
				</a>
				<div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
					<a class="dropdown-item" href="<?= route_to('admin.profile'); ?>"><i class="dw dw-user1"></i> Profile</a>
					<a class="dropdown-item" href="<?= route_to('setting'); ?>"><i class="dw dw-settings2"></i> Setting</a>
					<a class="dropdown-item" href="faq.html"><i class="dw dw-help"></i> Help</a>
					<a class="dropdown-item" href="<?= route_to('admin.logout') ?>"><i class="dw dw-logout"></i> Log Out</a>
				</div>
			</div>
		</div>
	</div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function () {
    $('.user-notification a').on('click', function () {
        $.ajax({
            url: '/get-notifications',  // Route to get notifications
            type: 'GET',
            success: function (data) {
                let notifications = '';
                if (data.length > 0) {
                    data.forEach(function (notification) {
                        notifications += `<li class="list-group-item">${notification.message}</li>`;
                    });
                } else {
                    notifications = '<li class="list-group-item">No new notifications.</li>';
                }
                $('.notifications-dropdown .list-group').html(notifications);
            },
            error: function () {
                $('.notifications-dropdown .list-group').html('<li class="list-group-item">Error loading notifications.</li>');
            }
        });
    });
});

</script>