<!doctype html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- Bootstrap CSS -->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

		<title>Hello, world!</title>

		<style type="text/css">
			main {
				position: relative;
			}
			.left-menu {
				width: 280px;
				height: 100%;
				position: absolute;
				top: 0;
				left: 0;
				background: #343a40;
			}
			.left-menu a {
				color: #0a58ca;
			}

		</style>
	</head>
	<body>

		<nav class="navbar navbar-expand-lg navbar-light bg-light mb-0 p-0">
			<div class="container-fluid">
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav me-auto mb-2 mb-lg-0">
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
								Arquivo
							</a>
							<ul class="dropdown-menu rounded-0 py-0" aria-labelledby="navbarDropdown">
								<li><a class="dropdown-item py-1" href="#">Nova Conexão</a></li>
								<li><a class="dropdown-item py-1" href="#">Nova Conexão</a></li>
								<li><hr class="dropdown-divider my-0"></li>
								<li><a class="dropdown-item py-1" href="#">Sair</a></li>
							</ul>
						</li>
						<li class="nav-item">
							<a href="#" class="nav-link {* disabled *}">Sobre</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>

		<main>
			{* Menu *}
			<div class="left-menu">
				<ul class="nav nav-pills flex-column mb-auto">
					<li class="nav-item">
						<a href="#" class="nav-link py-1 text-white">asdasd</a>
					</li>
					<li class="nav-item">
						<a href="#" class="nav-link py-1 text-white">asdasd</a>
					</li>
					<li class="nav-item">
						<a href="#" class="nav-link py-1 text-white">asdasd</a>
					</li>
				</ul>
			</div>

			<div class="main-content"></div>
		</main>


		
		
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

		<script type="text/javascript">
			$('main').height($(document).height() - $('nav').height());
		</script>
	</body>
</html>