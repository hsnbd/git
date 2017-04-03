<div class="row">
	<div class="issueBook col-md-12">
		<h4>Issue Book</h4>

		<form accept="" method="post">
			<div class="row">
				<div class="col-md-6">
					<div class="row">
				      	<div class="form-group col-md-6">
				        	<input type="text" name="book_id" class="form-control" placeholder="Book Id">
				      	</div>
				      	<div class="form-group col-md-4">
				       		<button type="submit" name="book_id" class="form-control btn-primary">Find Book Id</button>
				        </div>
				        <div class="form-group col-md-6">
				        	<input type="text" name="book_name" class="form-control" placeholder="Book Name">
				      	</div>
				      	<div class="form-group col-md-4">
				       		<button type="submit" name="book_name" class="form-control btn-primary">Find Book Name</button>
				        </div> 
				    </div> 
				</div>

				<div class="col-md-6">
					<div class="row">
				      	<div class="form-group col-md-6">
				        	<input type="text" name="library_id" class="form-control" placeholder="Student Library Id">
				      	</div>
				      	<div class="form-group col-md-4">
				       		<button type="submit" name="library_id" class="form-control btn-primary">Find Student Id</button>
				        </div>
				        <div class="form-group col-md-6">
				        	<input type="text" name="student_name" class="form-control" placeholder="Student Name">
				      	</div>
				      	<div class="form-group col-md-4">
				       		<button type="submit" name="student_name" class="form-control btn-primary">Find Student</button>
				        </div> 
				    </div> 
				</div>

			</div>
<hr>
			<div class="row">
				<div class="col-md-12">
					<div class="row">
						<div class="col-md-6">
							<label>Issue Date: </label><input type="text" name="current_date" class="form-control" placeholder="<?php echo date("d - m - Y"); ?>">
						</div>

						<div class="col-md-6">
							<label>Issued for: </label><input type="text" name="current_date" class="form-control" placeholder="No. of Date">
						</div>
					</div>
				</div>
			</div>
<hr>
			<div class="row">
				<div class="col-md-6 offset-md-6">
					<button type="submit" name="issueBook" class="form-control col-md-10 btn-primary">Issue Book</button>
				</div>
			</div>
		</form>
	</div>
</div>