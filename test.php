<html>
	<head>
	</head>
	<body>
		
		
			<?php
				include 'connect.php';
				
				$sql=$link->rawQuery("select * from post");
				if($link->count > 0)
				{
					foreach($sql as $data)
					{
						?>
						<?php echo $data['blog_title']; ?>
						<br>
						<?php echo $data['blog_content']; ?>
				<br>
				<br>
						
						<?php
					}
				}
			?>
		
	</body>
</html>