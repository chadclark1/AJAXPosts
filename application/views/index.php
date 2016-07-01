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


						// console.log(res);
						// var htmlstr = "";
						// for(var i = 0;i < res['quotes'].length; i++){
						// 	// console.log(i);
						// 	htmlstr += "<div class = ' col-sm-4 quote'>"
						// 	htmlstr += "<p>" + res.quotes[i]['quote'] + "</p>"
						// 	htmlstr += "</div>"
						// 	// htmlstr += "<h1>HIIIII</h1>";
						$('#quotes').html(res);
						// }
						// $('#quotes').html(htmlstr);

					// }, 'json');
				});
				$('form').submit(function(){
					console.log('hi');
		          // there are three arguments that we are passing into $.post function
		          //     1. the url we want to go to: '/quotes/create'
		          //     2. what we want to send to this url: $(this).serialize()
		          //            $(this) is the form and by calling .serialize() function on the form it will 
		          //            send post data to the url with the names in the inputs as keys
		          //     3. the function we want to run when we get a response:
		          //            function(res) { $('#quotes').html(res) }
		          $.post('/quotes/create', $(this).serialize(), function(res) {
		            $('#quotes').html(res);
		          });
		          // We have to return false for it to be a single page application. Without it,
		          // jQuery's submit function will refresh the page, which defeats the point of AJAX.
		          // The form below still contains 'action' and 'method' attributes, but they are ignored.
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