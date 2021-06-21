
<div id="preloader">
	<div class="sk-three-bounce">
		<div class="sk-child sk-bounce1"></div>
		<div class="sk-child sk-bounce2"></div>
		<div class="sk-child sk-bounce3"></div>
	</div>
</div>
<div id="main-wrapper">

        <!--**********************************
            Nav header start
            ***********************************-->
            <div class="nav-header">
            	<a href="index.html" class="brand-logo">
            		<img class="logo-abbr" src="<?= base_url('assets/') ?>favicon.png" alt="">
            		<img class="logo-compact" src="<?= base_url('assets/admin/') ?>/images/logo-text2.png" alt="">
            		<img class="brand-title" src="<?= base_url('assets/admin/') ?>/images/logo-text2.png" alt="">
            	</a>

            	<div class="nav-control">
            		<div class="hamburger">
            			<span class="line"></span><span class="line"></span><span class="line"></span>
            		</div>
            	</div>
            </div>
        <!--**********************************
            Nav header end
            ***********************************-->
            <div class="header">
            	<div class="header-content">
            		<nav class="navbar navbar-expand">
            			<div class="collapse navbar-collapse justify-content-between">
            				<div class="header-left">
            					<div class="dashboard_bar">
            						Dashboard
            					</div>
            				</div>
            				<ul class="navbar-nav header-right">
            					
            					
            					<li class="nav-item dropdown header-profile">
            						<a class="nav-link" href="javascript:void(0)" role="button" data-toggle="dropdown">
            							<img src="<?= base_url('assets/uploads/users/'.$this->session->userdata('gambar')) ?>" width="20" alt=""/>
            							<div class="header-info">
            								<span class="text-black"><strong><?= $this->session->userdata('nama') ?></strong></span>
            								<p class="fs-12 mb-0"><?= $this->session->userdata('email') ?></p>
            							</div>
            						</a>
            						<div class="dropdown-menu dropdown-menu-right">
            							<a href="./app-profile.html" class="dropdown-item ai-icon">
            								<svg id="icon-user1" xmlns="http://www.w3.org/2000/svg" class="text-primary" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
            								<span class="ml-2">Profile </span>
            							</a>
            							<a href="<?= base_url('admin/contact') ?>" class="dropdown-item ai-icon">
            								<svg id="icon-inbox" xmlns="http://www.w3.org/2000/svg" class="text-success" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
            								<span class="ml-2">Contact </span>
            							</a>
            							<a href="<?= base_url('auth/login/logut') ?>" class="dropdown-item ai-icon" onclick="return confirm('Ingin Logout?')">
            								<svg id="icon-logout" xmlns="http://www.w3.org/2000/svg" class="text-danger" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg>
            								<span class="ml-2">Logout </span>
            							</a>
            						</div>
            					</li>
            				</ul>
            			</div>
            		</nav>
            	</div>
            </div>