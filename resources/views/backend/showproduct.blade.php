<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>php crud oparation</title>
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
	 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
<h1>Add Product</h1>
<div class="container">
	<div class="row">
	<div class="col-md-6 offset-md-3">

		<table  class="table">
			<tr>
				<th>Sl NO</th>
				<th>Product Name</th>
				<th>Product Description</th>
				<th>Subcategory</th>
				<th>Price</th>
				<th>Status</th>
				<th colspan="2">Action</th>
			</tr>
			<?php $sl=1; ?>

			@foreach ($products as $data)
			<tr>
				<td>{{ $sl }}</td>
				<td>{{ $data->pname }}</td>
				<td>{{ $data->pdes }}</td>
				<td>{{ $data->cat }}</td>
				<td>{{ $data->scat }}</td>
				<td>{{ $data->price }}</td>
				<td>
					@if($data->status==1)
					<a href="{{Route('status',$data->id) }}" class="btn btn-success
					" ><i class="fa fa-check" aria-hidden="true"></i></a>
					@else
						<a href="{{Route('status',$data->id) }}" class="btn btn-danger
					" ><i class="fa fa-check"></i></a>
					@endif
				</td>

				<td>
					<a  href="{{ Route('edditproduct',$data->id)}}"  class="btn btn-info btn-sm"><i class="fa fa-edit" aria-hidden="true"></i></a>
				</td>

				<td>
					<a href="{{ Route('delete',$data->id) }}"  class="btn btn-danger btn-sm"><i class="fa fa-trash" aria-hidden="true"></i></a>
				</td>
			</tr>

			<?php $sl++ ?>

			@endforeach



		</table>

	</div>
</div>
</div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>
</body>
</html>