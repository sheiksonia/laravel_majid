<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>php crud oparation</title>
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>
<body>
<h1>Add Product</h1>
<div class="row">
	<div class="col-md-6 offset-md-3">

		<form method="post" action="{{ Route('productstor')}}">
			@csrf
	<div class="form-group">
		<label>Product Name</label>
		<input type="text" name="pname" class="form-control" >
	</div>

	<div class="form-group">
		<label>Product Description</label>
		<input type="text" name="pdes" class="form-control">
	</div>

	<div class="form-group">
		<label>Status</label>
		<select name="status" class="form-control">
			<option value="1">-------select status-----</option>
			<option value="1">Active</option>
			<option value="2">Inactive</option>

			
		</select>
		
		
	</div>
	<button name="save" class="form-control btn btn-info mt-3">Save</button>
	
	
</form>

	</div>
</div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>
</body>
</html>