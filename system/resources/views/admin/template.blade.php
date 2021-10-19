<!DOCTYPE html>
<html lang="en">

<head>
	
	<link rel="canonical" href="https://demo-basic.adminkit.io/" />

	<title>Admin</title>

	@include("admin.section.assets")
</head>

<body>
	<div class="wrapper">
		@include("admin.section.sidebar")

		<div class="main">
			@include("admin.section.header")

			<main class="content">
				<div class="container-fluid p-0">
					@yield('content')
					@include('admin.utils.notif')
					
				</div>
			</main>

			@include("admin.section.footer")
		</div>
	</div>

	@include("admin.section.js")

</body>

</html>