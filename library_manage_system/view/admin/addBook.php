<?php 
if(filter_input(INPUT_POST, "addBook")){

print "<pre>";
print_r(filter_input_array(INPUT_POST));
print "</pre>";

    // if(!empty($_POST['book_id'] && $_POST['book_name'] && $_POST['author'] && $_POST['publication'] && $_POST['isbn'] && $_POST['price'] && $_POST['stock'] && $_POST['description'] && $_POST['current_date']))
    // {

        $data = [
            "book_id" => filter_input(INPUT_POST, "book_id", FILTER_VALIDATE_INT, FILTER_SANITIZE_ENCODED),
            "book_name" => filter_input(INPUT_POST, "book_name", FILTER_SANITIZE_STRING, FILTER_SANITIZE_SPECIAL_CHARS),
            "author" => filter_input(INPUT_POST, "author", FILTER_SANITIZE_STRING, FILTER_SANITIZE_SPECIAL_CHARS),
            "publication" => filter_input(INPUT_POST, "publication", FILTER_SANITIZE_STRING, FILTER_SANITIZE_SPECIAL_CHARS),
            "isbn" => filter_input(INPUT_POST, "isbn", FILTER_VALIDATE_INT),
            "price" => filter_input(INPUT_POST, "price", FILTER_VALIDATE_INT),
            "stock" => filter_input(INPUT_POST, "stock", FILTER_VALIDATE_INT),
            "date" => filter_input(INPUT_POST, "current_date", FILTER_SANITIZE_STRING, FILTER_SANITIZE_SPECIAL_CHARS)
        ];
print "<pre>";
print_r($data);
print "</pre>";
//        $d = new Database();
//        if($d->Insert("all_book", $data)){
//            echo $message = "Insert Successful";
//        }   
//        else{
//            echo $message = "Server too busy"; 
//        }    
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
					    <label for="stock">stock</label>
					    <input type="text" name="stock" class="form-control">
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