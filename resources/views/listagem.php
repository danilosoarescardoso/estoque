<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="/css/app.css">
	<title>Controle de Estoque</title>
</head>
<body>
	
	<h1>Listagem de produtos</h1>
	<table class="table">
		<?php  foreach ($produtos as $p): ?>
   
		<tr>
			<td><?= $p->nome ?></td>
			<td><?= $p->valor ?></td>
			<td><?= $p->descricao ?></td>
			<td><?= $p->quantidade ?></td>
			<td><a href="/produtos/mostra/<?= $p->id ?>"><span class="glyphicon glyphicon-search"></span></a></td>
		</tr>
	<?php endforeach ?>
	</table>

</body>
</html>