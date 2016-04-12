<!DOCTYPE html>
<html>
<head>
	<title></title>

	<link rel="stylesheet" type="text/css" href="microcms.css">
	<meta charset="utf-8" />

</head>
<body>

<header>
	<h1>Micro Blog</h1>
</header>


<?php foreach ($articles as $article): ?>
	<article>
	    <h2><?php echo $article['art_title'] ?></h2>
	    <p><?php echo $article['art_content'] ?></p>
	</article>
<?php endforeach ?>

<footer class="footer">
    Exercices pratiques - micro blog
</footer>

</body>
</html>