<div class="row">
	<div class="allBook col-md-12">
		<h4>ALL Book</h4>



		<table class="table table-striped">
			<thead>
				<tr>
					<th>Book ID</th>
					<th>Book Name</th>
					<th>Author</th>
					<th>Publication</th>
					<th>ISBN Code</th>
					<th>Price</th>
					<th>Stock</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
<?php 
$d = new Database();
$data = $d->Read("all_book", array("book_name", "ASC"));

while($dt = mysqli_fetch_object($data))
{
	if(!$dt)
	{
		echo "<h3>Book List is empty</h3>";
	}
	else
	{ ?>
			
				<tr>
					<td><?php echo $dt->book_id; ?></td>
					<td><?php echo $dt->book_name; ?></td>
					<td><?php echo $dt->author; ?></td>
					<td><?php echo $dt->publication; ?></td>
					<td><?php echo $dt->isbn; ?></td>
					<td>$<?php echo $dt->price; ?></td>
					<td><?php echo $dt->available_copy; ?></td>
					<td><i class="fa fa-eye btn-success btn-sm"></i><i class="fa fa-edit  btn-warning btn-sm"></i><i class="fa fa-trash  btn-danger btn-sm"></i></td>
				</tr>
			
<?php
	}
}


?>
			</tbody>
		</table>
	</div>
</div>