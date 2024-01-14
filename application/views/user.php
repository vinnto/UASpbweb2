<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<h1>Menampilkan data user</h1>
	<table border="1">
		<tr>
			<th>Nama</th>
			<th>Username</th>
			<th>Password</th>
		</tr>
		<?php foreach($user as $u) : ?>
			<tr>
				<td><?php echo $u->nama; ?></td>
				<td><?php echo $u->username; ?></td>
				<td><?php echo $u->password; ?></td>
			</tr>
		<?php endforeach; ?>
	</table>
</body>
</html>