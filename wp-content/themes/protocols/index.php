<?php
get_header()
?>
	<div class="limiter">
		<div class="container-table100">
			<div class="wrap-table100">
				<?php if (have_posts()) : while (have_posts()) : the_post() ?>
						<div class="table100">
							<h1 class="title">
								<?php the_title() ?>
							</h1>
							<table>
								<thead>
									<tr class="table100-head">
										<th class="column1">Medicamento</th>
										<th class="column2">Dosagem</th>
										<th class="column3">Quantidade</th>
										<th class="column4">Horas</th>
										<th class="column5">Máximo</th>
										<th class="column6">Recomendação</th>
									</tr>
								</thead>
								<tbody>
										<?php the_content(); ?>
								</tbody>
							</table>
						</div>
					<?php endwhile;
				else : ?>
					<div class="table100">
						<h1 class="title">Título</h1>
						<table>
							<thead>
								<tr class="table100-head">
									<th class="column1">Medicamento</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td style="width:100%; text-align:center;">Nada encontrado</td>
								</tr>
							</tbody>
						</table>
					</div>
				<?php endif; ?>
			</div>
		</div>
	</div>

<?php
get_footer()
?>