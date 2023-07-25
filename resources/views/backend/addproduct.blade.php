<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>php crud oparation</title>
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>
<body>
<h1>Add Product</h1>
<div class="container">
	<div class="row">
	<div class="col-md-6 offset-md-3">

		<form method="POST" action="{{Route ('productstore')}}">
			@csrf
	<div class="form-group">
		<label for="pname">Product Name</label>
		<input type="text" name="pname" class="form-control" >
	</div>

	<div class="form-group">
		<label for="pdes">Product Description</label>
		<input type="text" name="pdes" class="form-control">
	</div>

	<div class="form-group">
		<label for="cat">Category</label>
		<input type="text" name="cat" class="form-control">
	</div>
	<div class="form-group">
		<label for="scat">Sub  Category</label>
		<input type="text" name="scat" class="form-control">
	</div>
	<div class="form-group">
		<label for="price">Product Price</label>
		<input type="number" name="price" class="form-control">
	</div>



	<div class="form-group">
		<label>Status</label>
		<select name="status" class="form-control">
			<option value="1">-------select status-----</option>
			<option value="1">Active</option>
			<option value="2">Inactive</option>

			
		</select>
		
		
	</div>
	<button name="save" class="form-control btn btn-info mt-3">Add product</button>
	
	
</form>

	</div>
</div>
</div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>
</body>
</html>