<div class="wrapper">

	<h1>News</h1>

	<table>
		<tr>
			<td>ID</td>
			<td>Title</td>
			<td>Description</td>
            <td>Featured</td>
			<td>Edit</td>
			<td>Delete</td>
		</tr>
        <?php

            $crud = new Crud($objCon, "showcase");

            $crud->SetArray("*");

            $cruds = $crud->Select('ORDER BY id DESC');

            $res = $crud->SendSQL();

            while($obj = $res->fetch_object()){

        ?>
            <tr>
                <td><?php echo $obj->id; ?></td>
                <td><?php echo $obj->title; ?></td>
                <td><?php echo $obj->desc; ?></td>
                <td><?php echo $obj->featured; ?></td>
                <td><a href="<?php echo $prefix; ?>admin/pages/add_news.php?editId=<?php echo $obj->id; ?>"><i class="material-icons edit">mode_edit</i></a></td>
                <td><a href="<?php echo $prefix; ?>code/code_deleteNews.php?id=<?php echo $obj->id; ?>"><i class="material-icons delete">delete</i></a></td>
            </tr>
        <?php
            }
        ?>
	</table>
</div>