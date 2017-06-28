<?php

	$id = $_GET['id'];

    $crud5 = new Crud($objCon, "showcase");

    $crud5->SetArray("*");

   	$crud5->Select('WHERE id = '.$id);

    $res5 = $crud5->SendSQL();

    $obj5 = $res5->fetch_object();

?>

<div class="wrapper">

	<div class="addBox">

		<h1>Edit page option</h1>

		<form id="newsForm" action="<?php echo $prefix; ?>code/code_editPage.php?editId=<?php echo $obj5->id; ?>" method="post" enctype="multipart/form-data" novalidate>

			<label>
				<input type="text" name="title" value="<?php echo $obj5->title; ?>" autofocus required>
				<span class="floating-label">Title</span>
			</label>

			<label>
				<!--<span>Text</span>-->
				<textarea name="text" required><?php echo $obj5->text; ?></textarea>
			</label>

			<label>
				<input type="submit" value="Save changes">
			</label>

		</form>

	</div>	

</div>