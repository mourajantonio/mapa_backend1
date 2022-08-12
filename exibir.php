<?php
	include("dados.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title><?=$title;?></title>
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body>
	<?php
		include "includes/header.php";
	?>
	
	<main>
	
		<section class="main_marmita">
			<div class="main_marmita_header">
				<h1>Marmita</h1>
				<p>Desfrute do melhor sabor!</p>
			</div>
			<?php
			
			if(isset($_GET['id']) && !empty($_GET['id'])){
				
                $id = $_GET['id'];
            
				foreach($cardapio as $key => $value){
                    if($value['id'] == $id){
			?>
			<div class="main_marmita_content">
				<img src=<?=$value['imagem'];?> width="100%" >
				<h2 style="padding:10px 0px 10px 0px"><?=$value['titulo'];?></h2>
				<h2 style="color:red;padding:10px 0px 10px 0px"><?=$value['preco'];?></h2>
				<p><?=$value['descricao'];?></p>
				<p style="padding:10px 0px 10px 0px">Ingredientes: <?=$value['ingredientes'];?></p>
			</div>
			<?php
                    }
				}
			}else{
				echo "Erro";
			}
			?>
		</section>

        <section class="main_cardapio">
			<header class="main_cardapio_header">
				<h1 >Outras opções</h1>
				<h2>Escolha sua marmita!</h2>
			</header>
			<?php
				foreach($cardapio as $key => $value){
					if($value['id'] != $id){
			?>
			<article>
				<a href="exibir.php?id=<?=$value['id'];?>"><img class="imagem" src=<?=$value['imagem'];?> width="300px"></a>
				<h2><?=$value['titulo'];?></h2>
			</article>
			<?php
				}
				}
			?>
		</section>
	</main>

	<?php
		include "includes/footer.php";
	?>
</body>
</html>