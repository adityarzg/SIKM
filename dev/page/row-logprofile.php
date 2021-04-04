<div class="d-none d-sm-block topbar-divider"></div>
<li class="nav-item dropdown no-arrow">
    <div class="nav-item dropdown no-arrow">
        <a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="#">
            <span class="d-none d-lg-inline mr-2 text-gray-600 small"><?php echo $_SESSION['nama']; ?></span>
            <img class="border rounded-circle img-profile" src="assets/img/avatars/default-avatar.png">
        </a>
        <div class="dropdown-menu shadow dropdown-menu-right animated--grow-in">
            <a class="dropdown-item" href="proses-logout.php">
                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;Logout</a>
        </div>
    </div>
</li>