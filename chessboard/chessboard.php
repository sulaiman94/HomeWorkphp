<!DOCTYPE html>  
     <html>   
     <head>   
	 <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet"
	href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<script
	src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script
	src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <title>Exercise 1 Chessboard</title>   
<style>
#theTable{
	width : 270px;
	border: 2px solid black
}

.box-size {
	width : 30px;
	height : 30px;
}

.black {
	background-color : black;
}
</style>

  
  </head>  
  <body>  
		<div class="container">
			<div class="row">
			
			<div class="col-md-4"></diV>
			
			<div class="col-md-4">
			<h2>Exercise 1 Chessboard</h2>
				<h4> Sulaiman Aloraini </h4>
			</diV>
				
			<div class="col-md-4"></diV>
				<br>
			</div>
			<div class="row">
				<div class="col-md-4"></diV>
				
				<div class="col-md-4">
						<!-- here we will use php code to generate the boxes -->
					<table id="theTable" class="table-hover">
					
					<?php
					
						for($row = 0; $row < 6; $row++)
						{
							print "<tr>";
							for($colum = 0; $colum < 6; $colum++){
								if($row % 2 == 0){
									print '<td class="box-size black"> </td>';
									print '<td class="box-size"> </td>';
								} else {
									print '<td class="box-size"> </td>';
									print '<td class="box-size black"> </td>';
								}
								
							}
							print"</tr>";
						}
					?>
					</table>
				
				</diV>
				
				<div class="col-md-4"></diV>
				
			</div>
		</div>
  

	
  
  </body>
  </html>