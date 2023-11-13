
<!DOCTYPE html>
<html>
<head>
	<title> Caegory Create page</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>

		<p style="text-align: center;"> Category create page </p>
		<div class="container">
			<form method="post" action="/category_store">
				
			
			<div class="form-group">
				<input type="text" class="form-control" name="name" placeholder="Enter category name">
			</div>
			<div class="form-group">
				<input type="text" class="form-control" name="description" placeholder="Enter category name">
			</div>
			<div class="form-group">
				<input type="text" class="form-control" name="note" placeholder="Enter category name">
			</div>
			<button class="btn btn-success" type="submit" value="Save">Save</button>
			</form>
		</div>
</body>
</html>


