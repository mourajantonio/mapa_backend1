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
		<div class="main_cta">
            <article class="main_cta_content">
                <div class="main_cta_content_spacer">
                    <header>
                        <h1>Venha se deliciar com as marmitas de Dona Rita, escolha uma e pronto!!.</h1>
                    </header>
                    <p>Você vai adorar nosso sabor</p>
                    <p><a href="#" class="btn">Saiba Mais</a></p>
                </div>
            </article>
        </div>
		<section class="main_cardapio">
			<header class="main_cardapio_header">
				<h1>Nosso cardápio de marmitas</h1>
				<h2>Escolha sua marmita!</h2>
			</header>
			<?php
				foreach($cardapio as $key => $value){
			?>
			<article>
				<a href="exibir.php?id=<?=$value['id'];?>"><img class="imagem" src=<?=$value['imagem'];?> ></a>
				<h2><?=$value['titulo'];?></h2>
				<h2 style="color:red"><?=$value['preco'];?></h2>
			</article>
			<?php
				}
			?>
			
		</section>
	</main>

	<?php
		include "includes/footer.php";
	?>
</body>
</html>