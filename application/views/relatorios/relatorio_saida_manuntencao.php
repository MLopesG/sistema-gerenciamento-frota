<!DOCTYPE html>
<html>
	<?php include('public/componentes/head_page.inc');?>
<body>
	<?php include('public/componentes/header.inc');?>
	<main>
		<?php include('public/componentes/sidebar.inc');?>
		<?php include 'public/componentes/msg.inc'?>
		<div class="content">
			<div  class='resposive_table'>
				<div class='box-dados'>
				<div class='box-dados-title'>
					<h1>Saida para manunteção</h1>
				</div>
				<div class="pagination">
					<?php if(!empty($links)): ?>
					<p><?=$links; ?></p>
					<?php endif; ?>	
				</div>
				<table id='HTMLtoPDF'>
					<tr>
						<th>Data saida</th>
						<th>Data entrada</th>
						<th>Código manuntenção </th>
						<th>Veículo manuntenção</th>
						<th>Veículo substituto</th>
						<th>Descrição manuntenção</th>
						<th>Situação</th>
					</tr>
					<?php foreach($saida_manuntencao as $manuntencao): ?>
						<?php if($manuntencao->status == 'aberto'):?>
						<tr class="danger">
							<td><?=formatdata($manuntencao->data_saida_veiculo) ?></td>
							<td><?=formatdata($manuntencao->data_retorno_veiculo) ?></td>
							<td><?=$manuntencao->id_saida_manuntencao ?></td>
							<td><?=$manuntencao->placa_veiculo ?></td>
							<td><?=$manuntencao->veiculo_substituicao ?></td>
							<td><?=$manuntencao->desc_manuntencao ?></td>
							<td><?=$manuntencao->status ?></td>
							<td><a href="<?=base_url("saida-manuntencao-finalizar/{$manuntencao->id_saida_manuntencao}") ?>"><i class='material-icons' title='Fechar saida manuntenção registrada. '>done_all</i></a></td>
							 <td><a onClick="janela_mensagem('Remover','Saida manuntenção','<?=base_url("saida-manuntencao-deletar/{$manuntencao->id_saida_manuntencao}")?>')"><i class='material-icons status_indisponível' title='Remover saida manuntenção registrada. '>delete</i></a></td>
							</tr>
						</tr>
						<?php else: ?>
						<tr>
							<td><?=formatdata($manuntencao->data_saida_veiculo) ?></td>
							<td><?=formatdata($manuntencao->data_retorno_veiculo) ?></td>
							<td><?=$manuntencao->id_saida_manuntencao ?></td>
							<td><?=$manuntencao->placa_veiculo ?></td>
							<td><?=$manuntencao->veiculo_substituicao ?></td>
							<td><?=$manuntencao->desc_manuntencao ?></td>
							<td><?=$manuntencao->status ?></td>
							<td><a href="<?=base_url("saida-manuntencao-visualizar/{$manuntencao->id_saida_manuntencao}") ?>"><i class='material-icons'  title='Visualizar informações registrada na saida para manuntenção . '>done_all</i></a></td>
							<td><a onClick="janela_mensagem('Remover','saida para manuntenção','<?=base_url("saida-manuntencao-deletar/{$manuntencao->id_saida_manuntencao}")?>')"><i class='material-icons status_indisponível' title='Remover saida manuntenção registrada. '>delete</i></a></td>
							 <td><a onClick="janela_mensagem('Reabrir','saida para manuntenção','<?=base_url("saida-manuntencao-status/{$manuntencao->id_saida_manuntencao}/aberto")?>')"><i class='material-icons 'title='Reabrir saida manuntenção registrada. '>lock_open</i></a></td>
									</tr>
						<?php endif; ?>
					<?php endforeach; ?>
				</table>
				<button onclick= 'Gerar_pdf()'>Gerar documento</button>	
			</div>
		</div>
	</main>
	<?php include('public/componentes/footer.inc');?>
	<script type="text/javascript" src="../public/js/imprimir_mes.js"></script>
</body>
</html>