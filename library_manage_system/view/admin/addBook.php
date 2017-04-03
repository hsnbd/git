<?php 

//----------------------------------------------------------------------------------
//ekhane code dile $message variable ta error ase why ?
//----------------------------------------------------------------------------------




if(isset($_POST['addBook'])){

print "<pre>";
print_r($_POST);
print "</pre>";

    // if(!empty($_POST['book_id'] && $_POST['book_name'] && $_POST['author'] && $_POST['publication'] && $_POST['isbn'] && $_POST['price'] && $_POST['available_copy'] && $_POST['description'] && $_POST['current_date']))
    // {
        $data = array(
            "book_id" => $_POST['book_id'],
            "book_name" => $_POST['book_name'],
            "author" => $_POST['author'],
            "publication" => $_POST['publication'],
            "isbn" => $_POST['isbn'],
            "price" => $_POST['price'],
            "available_copy" => $_POST['available_copy'],
            "description" => $_POST['description'],
            "date" => $_POST['current_date']
        );
print "<pre>";
print_r($data);
print "</pre>";
        $d = new Database();
        if($d->Insert("all_book", $data)){
            echo $message = "Insert Successful";
        }   
        else{
            echo $message = "Server too busy"; 
        }    
    // }
    // else
    // {
    //     echo $message = "Fill All Data Field";
    // }
}


?>



<div class="row">
	<div class="addBook col-md-12">
		<h4>Add Book</h4>

		<div class="form">
			<form method="post" action="" class="row">
			
				<div class="col-md-4">
					<div class="form-group">
					    <label for="book_id">Book ID</label>
					    <input type="text" name="book_id" class="form-control">
					</div>
					<div class="form-group">
					    <label for="book_name">Book Name</label>
					    <input type="text" name="book_name" class="form-control">
					</div>
					<div class="form-group">
					    <label for="author">Book Author</label>
					    <input type="text" name="author" class="form-control">
					</div>
					<div class="form-group">
					    <label for="publication">Publication</label>
					    <input type="text" name="publication" class="form-control">
					</div>
				</div>

				<div class="col-md-4">
					<div class="form-group">
					    <label for="isbn">Isbn Code</label>
					    <input type="text" name="isbn" class="form-control" id="formGroupExampleInput" >
					</div>
					<div class="form-group">
					    <label for="price">Book Price</label>
					    <input type="text" name="price" class="form-control" id="formGroupExampleInput" >
					</div>
					<div class="form-group">
					    <label for="available_copy">Available Copy</label>
					    <input type="text" name="available_copy" class="form-control">
					</div>
					<div class="form-group">
					    <label for="description">Description</label>
					    <textarea class="form-control" name="description"></textarea>
					</div>

					<div class="form-group sr-only">
					    <input type="text" value="<?php echo date("d - m - Y"); ?>" name="current_date" class="form-control">
					</div>

					<div class="form-group">
					    <input type="submit" name="addBook" class="form-control btn btn-primary" placeholder="Book Price">
					</div>
				</div>

			</form>
		</div>
	</div>
</div>