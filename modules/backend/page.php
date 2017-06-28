<div class="wrapper">

	<h1>Page</h1>

	<table>
		<tr>
			<td>Description</td>
			<td>Title</td>
			<td>Edit</td>
		</tr>
        
        <?php


            $crud = new Crud($objCon, "intelli_page");

            $crud->SetArray("*");

            $cruds = $crud->Select('');

            $res = $crud->SendSQL();

            while($obj = $res->fetch_object()){

        ?>
        
		<tr>
			<td><?php echo $obj->des; ?></td>
			<td><?php echo $obj->title; ?></td>
			<td><a href="<?php echo $prefix; ?>admin/pages/edit.php?id=<?php echo $obj->id; ?>"><i class="material-icons edit">mode_edit</i></a></td>
		</tr>
        
        <?php
                
            }
        ?>
	</table>

</div>