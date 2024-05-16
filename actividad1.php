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
	<link rel="stylesheet" href="css/style.css">


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
						
						<div class="d-flex flex-column w-100 overflow-hidden">
 <div class="d-md-none pl-1 pt-1 sm:pl-3 sm:pt-3">
    <button @click="open=true" type="button" class="btn btn-light btn-sm rounded-circle">
      <span class="sr-only">Open sidebar</span>
      <svg class="bi bi-list" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
        <path fill-rule="evenodd" d="M2.5 11.5A.5.5 0 013 11h10a.5.5 0 010 1H3a.5.5 0 01-.5-.5zm0-4A.5.5 0 013 7h10a.5.5 0 010 1H3a.5.5 0 01-.5-.5zm0-4A.5.5 0 013 3h10a.5.5 0 010 1H3a.5.5 0 01-.5-.5z"/>
      </svg>
    </button>
 </div>

 <main class="flex-grow-1 relative z-0 overflow-auto">
    <div class="py-6">
      <div class="container-fluid px-4 sm:px-6 md:px-8">
        <h1 class="display-4 font-weight-bold text-dark"></h1>
      </div>

      <div class="container-fluid px-4 sm:px-6 md:px-8">
        <video controls preload="auto" data-setup="{'playbackRates': [0.5, 1, 1.5, 2], 'fluid': true}">
    <source src="cusos.mp4" type="video/mp4">
    <source src="cusos.ogg" type="video/ogg">
    <p class="vjs-no-js">
        Para ver este video, por favor habilita JavaScript y considera actualizar a un navegador web que soporte video HTML5.
        <a href="https://videojs.com/html5-video-support/" target="_blank">Soporte de video HTML5</a>
    </p>
</video>


        <div class="relative py-16 mt-4 overflow-hidden">
          <div class="relative px-4 sm:px-6 lg:px-8">
            <div class="lead max-w-prose mx-auto">
              <h1>
                <span class="d-block text-center text-primary font-weight-bold tracking-wide uppercase">Category</span>
                <span class="mt-2 d-block text-center text-lg-xl font-weight-bold tracking-tight text-dark sm:text-xl"></span>
              </h1>
              <p class="mt-8 text-lg text-muted"></p>
            </div>
            <div class="mt-6 text-muted mx-auto">
              <p>test</p>
            </div>
          </div>
        </div>
      </div>
    </div>
 </main>
</div>

	
					</div> 
				</div> 
			</div> 

		</div> 
	</div> 
	
	
</body> 



</html>
