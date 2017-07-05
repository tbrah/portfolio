<?php

	if(isset($_GET['editId'])){

		//Selecting for showcase if edit is enabled.

		$editId = $_GET['editId'];


		$crud5 = new Crud($objCon, "showcase");

		$crud5->SetArray("*");

		$crud5->Select('WHERE id = '.$editId);

		$res5 = $crud5->SendSQL();

		$obj5 = $res5->fetch_object();

		//Selecting showcase_tech if edit is enabled.

		$showcase_tech = new CRUD($objCon, "showcase_tech");

		$showcase_tech->SetArray("*");

		$showcase_tech->Select('WHERE showcase_id = '.$editId);

		$showcase_tech_res = $showcase_tech->SendSQL();

		$showcase_tech_array = [];

		while($showcase_tech_obj = $showcase_tech_res->fetch_object()){
			array_push($showcase_tech_array, $showcase_tech_obj->tech_id);
		}

		print_r($showcase_tech_array);

	}

		//Selecting for tech_table

		$tech_crud = new Crud($objCon, "tech_table");

		$tech_crud->SetArray("*");

		$tech_crud->Select('ORDER BY id DESC');

		$tech_res = $tech_crud->SendSQL();

?>

<div class="wrapper">

	<div class="addBox">

	<?php

	if(isset($_GET['editId'])){

	?>

		<h1>Edit news</h1>

	<?php

	}else {

	?>

		<h1>Add news</h1>

	<?php

	}

	?>

		<form id="newsForm" action="<?php if(isset($_GET['editId'])){ echo $prefix; ?>code/code_editNews.php?editId=<?php echo $obj5->id; }else {?><?php echo $prefix; ?>code/code_addNews.php<?php } ?>" method="post" enctype="multipart/form-data" novalidate>

			<label>
				<span>Image</span>
				<?php if(isset($_GET['editId'])){?>
					<div class="imgContainer">
						<img src="<?php echo $prefix; ?>assets/img/uploaded/<?php echo $obj5->img; ?>" alt="<?php echo $obj5->title; ?>">
					</div>
				<?php
				}else {
				?>
					<input type="file" name="img" required>
				<?php
				}
				?>
			</label>

			<label>
				<input type="text" name="title" value="<?php if(isset($_GET['editId'])){ echo $obj5->title; } ?>" autofocus required>
				<span class="floating-label">Title</span>
			</label>

			<label>
				<span>Featured:</span>
				
				<input type="checkboxHidden" type="hidden" name="featured" value=0 style="display:none;">
				<input type="checkbox" name="featured" value=1 <?php if(isset($_GET['editId']) && $obj5->featured == 1){ echo "checked";}?>>
			</label>

			<label>
				<input type="text" name="desc" value="<?php if(isset($_GET['editId'])){ echo $obj5->desc; } ?>" required>
				<span class="floating-label">Description</span>
			</label>

			<label>
				<?php 		
					while($tech_obj = $tech_res->fetch_object()){
						echo $tech_obj->title;
				?>
					<input class="tech-checkbox" type="checkbox" name="techarray[]" value=<?php echo $tech_obj->id; ?> 
						<?php
							if(isset($_GET['editId'])){ 
								if(in_array($tech_obj->id, $showcase_tech_array)){ echo "checked";}
							}
						?>
					>
				<?php
					}//While loop end.
				?>
			</label>

			<label>
				<!--<span>Text</span>-->
				<textarea name="text" required><?php if(isset($_GET['editId'])){ echo $obj5->text; } ?></textarea>
			</label>

			<label>
				<input type="submit" value="<?php if(isset($_GET['editId'])){ echo 'Save changes'; }else { echo 'Add news'; } ?>">
			</label>

		</form>

	</div>	

</div>