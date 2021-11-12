<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>TEST</title>
</head>

<body>
	<p><?php echo $data_url ?></p>
	<ul>
		<?php
		foreach ($data as $item) :
			echo '<li>' . $item['clave'] . ' - ' . $item['valor'] . '</li>';
		endforeach; ?>
	</ul>
</body>

</html>