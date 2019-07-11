<!-- controller -->
    <?php include '../../php/autoload.php'; ?>
<!-- ---------- -->
<!DOCTYPE html>
<html>
	<?php include '../componentes/head_page.inc'?>
<body>
	<?php include '../componentes/header.inc'?>
	<main>
		<?php include '../componentes/sidebar.inc'?>
		<div class="content">
			<div class="box-dados">
				<div class="box-dados-title">
					<h1>Registrar retirada produto</h1>
				</div>
				<div class="form_registrar">
					<form name="form" action="../../php/request.php?page=Salvar/retirada/produto" method="post">
						<div class="container-input">
							<label for="quantidade_retirada">Quantidade:</label>
							<input type="number" name="quantidade_retirada" id="quantidade_retirada">
						</div>
						<div class="container-input">
							<label for="id_produto">Produto:</label>
							<select name="id_produto" id="id_produto">
								<option  value="" >Selecionar veiculo</option>
								<?=todos_produtos()?>
							</select>
						</div>
						<div class="container-input">
							<label for="id_veiculo">Veículo:</label>
							<select name="id_veiculo" id="id_veiculo">
								<option  value="" >Selecionar veiculo</option>
								<?= todos_veiculos()?>
							</select>
						</div>
						<div class="conjuntos_btns">
							<div>
								<input type="button" name="button" onclick="inputs_name_validar('quantidade_retirada','id_veiculo','id_produto')" value="Registrar retirada produto">
							</div>
						</div>
						<div>
							<?php include '../componentes/msg.inc' ?>
						</div>
					</form>
				</div>
			</div>
		</div>		
	</main>
	<?php include '../componentes/footer.inc'?>
</body>
</html>