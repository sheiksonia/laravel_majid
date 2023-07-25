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

		<form method="POST" action="{{ Route('update',$products->id) }}">
			@csrf
	<div class="form-group">
		<label for="pname">Product Name</label>
		<input value="{{$products->pname}}"          type="text" name="pname" class="form-control" >
	</div>

	<div class="form-group">
		<label for="pdes">Product Description</label>
		<input value="{{$products->pdes}}"   type="text" name="pdes" class="form-control">
	</div>

	<div class="form-group">
		<label for="cat">Category</label>
		<input value="{{$products->cat}}"  type="text" name="cat" class="form-control">
	</div>
	<div class="form-group">
		<label for="scat">Sub  Category</label>
		<input value="{{$products->scat}}"  type="text" name="scat" class="form-control">
	</div>
	<div class="form-group">
		<label for="price">Product Price</label>
		<input value="{{$products->price}}"  type="number" name="price" class="form-control">
	</div>



	<div class="form-group">
		<label>Status</label>
		<select name="status" class="form-control">
			<option value="1">-------select status-----</option>
			<option value="1" @if($products->status==1) selected @endif>Active</option>
			<option value="2" @if($products->status==2) selected @endif>Inactive</option>

			
		</select>
		
		
	</div>
	<button name="save" class="form-control btn btn-info mt-3">Update product</button>
	
	
</form>

	</div>
</div>
</div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>
</body>
</html>