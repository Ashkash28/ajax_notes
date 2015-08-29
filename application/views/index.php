<html lang="en">
	<head>
		<title>Notes</title>
		 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
		 <script type="text/javascript">
		 	$(document).ready(function(){
		 		$(document).on('submit', 'form', function(){
//AJAX POST--
		 			$.post(
		 				$(this).attr('action'),
		 				$(this).serialize(),
		 				function(response){
		 					$("#creation input, textarea").val("");
		 					$('#result').html(response);
		 				});
		 			return false;
//-----------
		 		})

//Update without submit button
		 		$(document).on('change', 'div.notes textarea, div.notes input', function(){
		 			$(this).parent().submit();
		 		})

//Change the title of note
		 		$(document).on('click', 'div.notes .title', function(){
		 			$(this).replaceWith("<input type='text' name='title'>");
		 		});
		 	})
		 </script>
		 <link  href="http://fonts.googleapis.com/css?family=Reenie+Beanie:regular" rel="stylesheet" type="text/css">
		 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
		 <link rel="stylesheet" type="text/css" href="./../../assets/css/stylish.css">
	</head>
	<body>
		<form id="creation" action="/notes/create" method="post">
		<h1>Create a note</h1>
			<input class="title" type="text" name="title" placeholder="Title..."><br>
			<textarea class="description" name="description" placeholder="Description..."></textarea>
			<button type="submit" class="btn btn-primary">Submit</button>
		</form>	

		<div id="result">
			<?php require_once('partial_index.php'); ?>
		</div>
		
	</body>
</html>