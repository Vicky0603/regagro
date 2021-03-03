<?  $title= 'РегАгро';?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	<title><?= $title ?></title>
</head>
<body>
	@if(count($errors) > 0)

		<div class="alert alert-danger">
			<ul>
				@foreach($errors->all() as $error)
					<li>{{$error}}</li>
				@endforeach
			</ul>
		</div>
	@else
    	<div class="alert alert-success">
			<ul>
				<li>This is a success notice.</li>
			</ul>
		</div>

	@endif
	@yield('content')
    <script src="https://kit.fontawesome.com/e7fddb5768.js" crossorigin="anonymous"></script>
</body>
</html>

