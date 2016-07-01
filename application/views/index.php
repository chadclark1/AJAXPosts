<!DOCTYPE html>
<html>
<head>
	<title>AJAX Posts</title>

	<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="/assets/style.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>

		<script type="text/javascript">
			$(document).ready(function(){
				// $('#get_all_button').click(function(){
					$.get('/quotes/index_html', function(res) {

						$('#quotes').html(res);	
					});
				$('form').submit(function(){
					console.log('hi');
		         
		          $.post('/quotes/create', $(this).serialize(), function(res) {
		            $('#quotes').html(res);
		          });
		         
		          return false;
		        });
			});
		</script>

</head>
	<body>
	<header>
			<nav class="navbar navbar-default">
			  <div class="container-fluid">
			    <div class="navbar-header">
			      <a href="/">
				      <h1 class="navbar-brand">
				       	AJAX Posts
				      </h1>
			      </a>
			    </div>
			  </div>
			</nav>
		</header>
		<div class="container">
			<h1>
				My Posts:
			</h1>
			<div id="quotes" class="col-sm-12">
				
			</div>
			<div>
				<!-- <button class="btn btn-primary" id="get_all_button">Get Quotes</button> -->
			</div>
			
			<div class="col-sm-5 form">
				<form method="post" action="/quotes/create">
					<fieldset class="form-group">
						<textarea name="quote" class="form-control"></textarea>
					</fieldset>
					<button class="btn btn-primary">Post It</button>
				</form>
			</div>
		</div>

	</body>
</html>