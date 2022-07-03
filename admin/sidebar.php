<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <h3 class="text-center">ZRP</h3>
    <ul class="nav">
        <li class="nav-item nav-category">Dashboard</li>
        <li class="nav-item">
            <a class="nav-link" href="home.php">
                <span class="icon-bg"><i class="mdi mdi-cube menu-icon"></i></span>
                <span class="menu-title">Home</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="index.php">
                <span class="icon-bg"><i class="mdi mdi-face-agent menu-icon"></i></span>
                <span class="menu-title">Residents</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="profile.php">
                <span class="icon-bg"><i class="mdi mdi-message-draw menu-icon"></i></span>
                <span class="menu-title">Residents Chats</span>
            </a>
        </li>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="crime_report.php">
                <span class="icon-bg"><i class="mdi mdi-contacts menu-icon"></i></span>
                <span class="menu-title">Reported Crimes</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="notifications.php">
                <span class="icon-bg"><i class="mdi mdi-format-list-bulleted menu-icon"></i></span>
                <span class="menu-title">Notification</span>
            </a>
        </li>


        <li class="nav-item documentation-link">
            <a class="nav-link" href="report.php" >
                <span class="icon-bg">
                  <i class="mdi mdi-file-document-box menu-icon"></i>
                </span>
                <span class="menu-title">Reports</span>
            </a>
        </li>
        <li class="nav-item sidebar-user-actions">
            <div class="user-details">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <div class="d-flex align-items-center">
                            <div class="sidebar-profile-img">
                                <img src='../img/user.png' width="30" height="30" class="rounded-circle" alt='image'>
                            </div>
                            <div class="sidebar-profile-text">
                                <p class="mb-1"><?php echo $names; ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="badge badge-danger">3</div>
                </div>
            </div>
        </li>
    </ul>
</nav>