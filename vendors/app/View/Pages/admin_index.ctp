

<div class="paddb02">
	<h2>Gestion des utilisateurs</h2>
	<?= $this->Html->link('<< Revenir au home', array('action' => 'index', 'admin' => false)) ?>
	<br>
	<?= $this->Html->link('+ Ajouter un utilisateur', array('controller' => 'users', 'action' => 'add')) ?>
</div>
<div class="table-responsive">
	<table class="table table-hover table-striped">
		<tr>
			<th>Id</th>
			<th>Login</th>
			<th>Prenom</th>
			<th>Nom</th>
			<th>Email</th>
			<th>Type</th>
			<th>Date de naissance</th>
			<th>Statut</th>
			<th>Action</th>
		</tr>
		<?php foreach ($users as $k => $d): $d = current($d); ?>
			<tr>
				<td><?= $d['id']; ?></td>
				<td><?= $d['username']; ?></td>
				<td><?= $d['name']; ?></td>
				<td><?= $d['lastname']; ?></td>
				<td><?= $d['email']; ?></td>
				<td><?= $d['type']; ?></td>
				<td><?= $d['birthdate']; ?></td>
				<td>
				<?php
					echo '<span class="label ';
					switch ($d['status']) {
						case "Normal": echo 'label-info'; break;
						case "Banni": echo 'label-danger'; break;
						case "Suspendu": echo 'label-default'; break;
						case "En attente": echo 'label-warning'; break;
					}
					echo '">'
				?>
				<?= $d['status']; ?>
				</span>
				</td>
				<td>
					<?= $this->Html->link('Editer', array('controller' => 'users', 'action' => 'edit', $d['id'])) ?>
				</td>
			</tr>
		<?php endforeach; ?>
	</table>
</div>