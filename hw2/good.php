<?php 

$get = $_GET;
$id = $get['id'];
$auth = true;

$goods = [
	[
		'id' => 1,
		'title' => 'Piano',
		'price' => 2341
	],
	[
		'id' => 2,
		'title' => 'Guitar',
		'price' => 567
	],
	[
		'id' => 3,
		'title' => 'Drum',
		'price' => 2564
	],

];

$num = 800;
$i = 0;
while ($num >= 50) {
	$num /= 2;
    $i++;
};
echo "$i <br>";

$num = 800;
for ($i=1; $i < 10; $i++) {
  if ($num/2 >= 50) {
    $num /= 2;
  } else {
    echo "$i";
    break;
  }
}


 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="css/comment.css">
</head>

<body>
<section>
	<?php if ($auth == false): ?>
		<p>Комментарии могут оставлять только зарегистрированные пользователи</p>
	<?php else: ?>
		<?php foreach ($goods as $good): ?>
		<?php if ($good['id'] == $id): ?>
			<h3><?php echo $good["title"]; ?></h3>
			<p><?php echo $good["price"]; ?></p>
			<fieldset id="comFieldset">
    			<legend>Комментарий:</legend>
    			<p><textarea id="newComment"></textarea></p>
    			<input type="button" id="button"value="Добавить коммент"/>
			</fieldset>
		<?php endif; ?>
	<?php endforeach; ?>
	<?php endif; ?>
</section>

<script type="text/javascript" src="js/comment.js"></script>
</body>
</html>