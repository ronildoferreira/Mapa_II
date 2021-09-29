
<script >
		var deletinUrl = "index.php?c=course&f=delete";
		var deletionId= "";

		function deleteItem(id)
		{
			deletionId = id;

			var modal = new bootstrap.Modal(document.getElementById['modal-delete']);
			modal.show();
		}

</script>



<div class="modal fade" id="modal-delete">
	<div class="modal-dialog">
		<div class="modal-content">
			
			<div class="modal-header"></div>
			
			<h5> Excluir</h5>

		</div>
		<div class="modal-body">
			Deseja excluir esse item?
		</div>
		<div class="modal-footer"></div>
		<button type="button" class="btn btn-secundary" data-bs-dismiss="modal">Cancelar</button>
		<button type="button" class="btn btn-danger">Excluir</button>
	</div>
</div>


<div class="row">
	<div class="col">
<h2>Lista de Cursos</h2>

<a class="btn btn-primary" href="index.php?c=course&f=add">+ Novo Curso</a>
<table class="table table-striped">
	<thead>
	<tr>
		<th>Id</th>
		<th>Nome</th>
		<th>Data de Inicio</th>
		<th>Data fim</th>
		<th>&nbsp;</th>
	</tr>
</thead>

<tbody>
	<?php foreach ($result as $course):?>
	<?php 
	$dateStart = new DateTime($course['dateStart']);
	$dateFinish = new DateTime($course['dateFinish'])
	?>
	<tr>
		<td><?php echo $course['id'];?></td>
		<td><?php echo $course['nameCourse']; ?></td>
		<td><?php echo $dateStart->format('d/m/Y'); ?></td>
		<td><?php echo $dateFinish->format('d/m/Y'); ?></td>
		<td>
			<a href="index.php?c=course&f=edit&id=<?php echo $course['id'] ?>" class="btn btn-primary">Editar</a>
			<button 
			type="button" 
			class="btn btn-danger"
			onclick="deleteItem(<?php echo $course['id']?>)"
			>Excluir</button>
		</td>
	</tr>

<?php endforeach ?>
</tbody>
</table>	
		
	</div>
</div>





