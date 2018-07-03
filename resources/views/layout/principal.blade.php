<!DOCTYPE html>
<html>
<head>
	<link href="/css/app.css" rel="stylesheet">
	<link href="/css/custom.css" rel="stylesheet">
	@yield('title')
</head>
<body>
	<div class="container"> <!-- class Containter permite o conteudo ficar centralizado -->

		<nav class="navbar navbar-default">
			<div class="container-fluid">
				<div class="navbar-header">
					<a class="navbar-brand" href="/produto/lista">
						Estoque Laravel
					</a>
				</div>
				<ul class="nav navbar-nav navbar-right">
					<li><a href="/produto/lista">Listagem</a></li>
					<li><a href="/produto/novo">Novo</a></li>
				</ul>
			</div>
		</nav>	

		@yield('conteudo')


		<footer class="footer">
			<p>© Código de Felipe :p.</p>
		</footer>
		
	</div>

</body>
</html>