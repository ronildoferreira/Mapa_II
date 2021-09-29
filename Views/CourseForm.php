
<div class="row">
	<div class="col">
		
	<h2><?php if(isset($course)):?>
	
	Editar Curso
	
	<?php else :?>
		
		Novo Curso


		<?php  endif?></h2>
	


	<form action="index.php?c=course&f=save" <?php if(isset($course)){echo "&id=".$course['id'];}?> method="POST">
		<div class="row">
			<div class="col">
				<input 
				type="text" 
				name="nameCourse" 
				maxlength="60" 
				class="form-control"
				required
				value="<?php

				if(isset($course))
				{
					echo $course['nameCourse'];
				}

			?>">

			</div>
			<div class="row">
				<div class="col">
					<input 
					type="text" 
					name="description" 
					maxlength="255"
					class="form-control"
					required
					value="<?php

					if(isset($course))
					{
						echo $course['description'];
					}

			?>">

				</div>

				<div class="row">
				
				<div class="col">
				<input type="date" 
				name="dateStart" 
				required
				class="form-control"
				required
				value="<?php

				if(isset($course))
				{
					echo $course['dateStart'];
				}

			?>">
				
			
				</div>

				<div class="col">
				<input type="date" name="dateFinish" required
				class="form-control"
				required
				value="<?php

				if(isset($course))
				{
					echo $course['dateFinish'];
				}

			?>">
				</div>

				<div class="col">
				
				<select name="status" id="" required>
				<option value="1" 

				<?php
				if (isset($course)) {
				if($course['status']==1)
				{
					echo 'selected';
				}	
				}
				?>>Ativo</option>
				<option value="0" <?php
				if (isset($course)) {
				if($course['status']==0)
				{
					echo 'selected';
				}	
				}
				?>>Inativo</option> 
				</select>
				</div>

			</div>
		</div>

		<div class="row">
			<div class="col">
				<a href="index.php?c=course" class="btn btn-danger">Cancelar</a>
				<button type="submit" class="btn btn-primary">Salvar</button>
			</div>
		</div>
	</form>		

	</div>

</div>