<?php
/**
 * The Sidebar containing the primary and secondary widget areas.
 *
 * @package WordPress
 * @subpackage Starkers
 * @since Starkers HTML5 3.0
 */
?>

<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3 bg-gradient-dark" id="sidenav-main">
	<div class="sidenav-header">
		<i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
		<a class="navbar-brand m-0 text-center" href=" https://demos.creative-tim.com/material-dashboard/pages/dashboard " target="_blank">
			<img src="<?php bloginfo('template_url'); ?>/img/logo-ct.png" class="navbar-brand-img h-100" alt="main_logo">
		</a>
	</div>
	<hr class="horizontal light mt-0 mb-2">
	<div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
		<ul class="navbar-nav">
			<li class="nav-item">
				<a class="nav-link text-white<?php if(is_page(10)){ echo ' active bg-gradient-primary'; } ?>" href="<?php echo get_permalink(10); ?>">
					<div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
						<i class="material-icons opacity-10">dashboard</i>
					</div>
					<span class="nav-link-text ms-1">Dashboard</span>
				</a>
			</li>
			<li class="nav-item">
				<a class="nav-link text-white<?php if(is_page(12)){ echo ' active bg-gradient-primary'; } ?>" href="<?php echo get_permalink(12); ?>">
					<div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
						<i class="material-icons opacity-10">table_view</i>
					</div>
					<span class="nav-link-text ms-1">Tables</span>
				</a>
			</li>
		</ul>
	</div>
</aside>
