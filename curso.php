<!DOCTYPE html> 
<html lang="en"> 

<head> 
	<meta charset="UTF-8"> 
	<meta name="viewport"
		content="width=device-width, 
				initial-scale=1.0"> 
	<title>Bootstrap5 Sidebar</title> 
	<link href= 
"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css"
		rel="stylesheet"
		integrity= 
"sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ"
		crossorigin="anonymous"> 
	<link rel="stylesheet"
		href="style.css"> 
	<link rel="stylesheet" href= 
"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
		integrity= 
"sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
		crossorigin="anonymous"
		referrerpolicy="no-referrer" /> 

	<style>
    .bg-image-vertical {
    position: relative;
    overflow: hidden;
    background-repeat: no-repeat;
    background-position: right center;
    background-size: auto 100%;
    }
    
@media (min-width: 1025px) {
    .h-custom-2 {
    height: 100%;
    }
}

.navbar-black {
        background-color: #000000; /* Color de fondo negro */
}

    
.bg-success {
        background-color: #2C3E50 !important; /* Azul gris */
}
    
html, body { 
        height: 100%; 
        font-family: 'Ubuntu', sans-serif; 
} 
    
.gfg { 
        height: 50px; 
        width: 50px; 
    
} 
    
.mynav { 
        color: #fff; 
} 
    
.mynav li a { 
        color: #fff; 
        text-decoration: none; 
        width: 100%; 
        display: block; 
        border-radius: 5px; 
        padding: 8px 5px; 
} 
    
.mynav li a.active { 
        background: rgba(255, 255, 255, 0.2); 
} 
    
.mynav li a:hover { 
        background: rgba(255, 255, 255, 0.2); 
} 
    
.mynav li a i { 
        width: 25px; 
        text-align: center; 
} 
    
.notification-badge { 
        background-color: rgba(255, 255, 255, 0.7); 
        float: right; 
        color: #222; 
        font-size: 14px; 
        padding: 0px 8px; 
        border-radius: 2px; 
}
 	</style>
</head> 

<body> 

	<div class="container-fluid p-0 d-flex h-100"> 
		<div id="bdSidebar"
			class="d-flex flex-column 
					flex-shrink-0 
					p-3 bg-success 
					text-white offcanvas-md offcanvas-start"> 
			<a href="#"
			class="navbar-brand"> 
			</a><hr> 
			<ul class="mynav nav nav-pills flex-column mb-auto"> 
				<li class="nav-item mb-1"> 
					<a href="index.php"> 
						<i class="fa-regular fa-user"></i> 
						Profile 
					</a> 
				</li> 
				<li class="nav-item mb-1"> 
					<a href="#"> 
						<i class="fa-solid fa-archway"></i> 
						Institutions 
					</a> 
				</li> 
				<li class="nav-item mb-1"> 
					<a href="#"> 
						<i class="fa-solid fa-graduation-cap"></i> 
						Organizations 
					</a> 
				</li> 
				<li class="nav-item mb-1"> 
					<a href="actividad1.php"> 
						<i class="fa-regular fa-newspaper"></i> 
						Actividad
					</a> 
				</li> 

				<li class="sidebar-item nav-item mb-1"> 
					<a href="#"
					class="sidebar-link collapsed"
					data-bs-toggle="collapse"
					data-bs-target="#settings"
					aria-expanded="false"
					aria-controls="settings"> 
						<i class="fas fa-cog pe-2"></i> 
						<span class="topic">Settings </span> 
					</a> 
					<ul id="settings"
						class="sidebar-dropdown list-unstyled collapse"
						data-bs-parent="#sidebar"> 
						<li class="sidebar-item"> 
							<a href="#" class="sidebar-link"> 
								<i class="fas fa-sign-in-alt pe-2"></i> 
								<span class="topic"> Login</span> 
							</a> 
						</li> 
						<li class="sidebar-item"> 
							<a href="#" class="sidebar-link"> 
								<i class="fas fa-user-plus pe-2"></i> 
								<span class="topic">Register</span> 
							</a> 
						</li> 
						<li class="sidebar-item"> 
							<a href="#" class="sidebar-link"> 
								<i class="fas fa-sign-out-alt pe-2"></i> 
								<span class="topic">Log Out</span> 
							</a> 
						</li> 
					</ul> 
				</li> 
			</ul> 
			<hr> 
			
		</div> 

		<div class="bg-light flex-fill"> 
			<div class="p-2 d-md-none d-flex text-white bg-success"> 
				<a href="#" class="text-white"
				data-bs-toggle="offcanvas"
				data-bs-target="#bdSidebar"> 
					<i class="fa-solid fa-bars"></i> 
				</a> 
				<span class="ms-3">GFG Portal</span> 
			</div> 
			<div class="p-4"> 
				<nav style="--bs-breadcrumb-divider:'>';font-size:14px"> 
					<ol class="breadcrumb"> 
						<li class="breadcrumb-item"> 
							<i class="fa-solid fa-house"></i> 
						</li> 
						<li class="breadcrumb-item">Learning Content</li> 
						<li class="breadcrumb-item">Next Page</li> 
					</ol> 
				</nav> 

				<hr> 
				<div class="row"> 
					<div class="col"> 
						<p>Page content goes here</p> 
					</div> 
				</div> 
			</div> 

		</div> 
	</div> 
</body> 

</html>
