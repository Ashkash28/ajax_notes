<html>
	<head>
		<title>Notes</title>
		 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
		 <script type="text/javascript">
		 	$(document).ready(function(){
		 		$(document).on('submit', 'form', function(){
		 			$.post(
		 				$(this).attr('action'),
		 				$(this).serialize(),
		 				function(response){
		 					$('#result').html(response)
		 				})
		 			return false;
		 		})
		 		$(document).on('change', 'div.notes textarea, div.notes input', function(){
		 			$(this).parent().submit();
		 		})

		 		$(document).on('click', 'div.notes .title', function(){
		 			$(this).replaceWith("<input type='text' name='title'>");
		 		});
		 	})
		 </script>
		<style type="text/css">
			div.notes{
				border: 1px solid silver;
				padding: 10px;
				margin: 5px;
				background-color: yellow;
				display: inline-block;
				width: 200px;
				height: 160px; 
			}
			h2{
				font-size: 14px;
				margin: 0px;
				padding: 0px;
			}
		</style>
	</head>
	<body>
		<div id="result">
			<?php require_once('partial_index.php'); ?>
		</div>

		
		<h2>Create a note</h2>
		<form action="/notes/create" method="post">
			<input type="text" name="title"><br>
			<textarea name="description"></textarea>
			<input type="submit" value="Create">
		</form>
		
	</body>
</html>