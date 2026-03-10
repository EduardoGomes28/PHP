<? php include 'server-info.php'; ?>
<head>
	<title>System Info</title>
	<link rel= "stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
	<h1>Server & File Info</h1>
	<?php if($server): ?>
		<u1 class="list-group">
		<?php foreach ($server as $key => $value): ?>
			<li class="list-group-item">
				<strong><?php echo $key; ?>: <strong>
				<?php echo $value; ?>
			</li>
		<?php endforeach; ?>
		</u1>
	<?php endif; ?>

	<h1>Client Info</h1>
	<?php if($client): ?>
		<u1 class="list-group">
		<?php foreach ($client as $key => $value): ?>
			<li class="list-group-item">
				<strong><?php echo $key; ?>: <strong>
				<?php echo $value; ?>
			</li>
		<?php endforeach; ?>
		</u1>
	<?php endif; ?>
</body>
</html>