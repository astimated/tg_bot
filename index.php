<?php
	include 'config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="description" content="" />
	<meta name="author" content="" />
	
	<title>Бот</title>
	<link rel="icon" type="image/png" href="<?php echo SITE_PATH; ?>assets/favicon-32x32.png" />
	<link rel="stylesheet" href="<?php echo SITE_PATH; ?>/assets/bootstrap.css">
	<link rel="stylesheet" href="<?php echo SITE_PATH; ?>/assets/style.css">
	<link rel="stylesheet" href="<?php echo SITE_PATH; ?>/assets/style_extend.css">
	<link rel="stylesheet" href="<?php echo SITE_PATH; ?>/assets/fontawesome/css/fontawesome.css">
	<link rel="stylesheet" href="<?php echo SITE_PATH; ?>/assets/fontawesome/css/all.css">
	<script src="<?php echo SITE_PATH; ?>/assets/bootstrap.bundle.min.js"></script>	
	<script src="<?php echo SITE_PATH; ?>/assets/jquery-3.6.0.min.js"></script>
</head>

<body>

<div class="card ex-w400 ex-mrgt50 ex-mrgl10 floatleft no_flex">
	<div class="card-header">Опрос</div>
	<div class="card-body ">

		<form>
<!-- Input type text -->
<div class="form-group">
	<label for="question_1">Заголовок опроса</label>
	<input type="text" class="form-control" name="poll_title" id="poll_title">
</div>


<!-- Input type text -->
<div class="form-group">
	<label for="question_1">Вопрос 1</label>
	<input type="text" class="form-control" name="question_1" id="question_1">
</div>

<!-- Input type text -->
<div class="form-group">
	<label for="question_2">Вопрос 2</label>
	<input type="text" class="form-control" name="question_2" id="question_2">
</div>

<!-- Input type text -->
<div class="form-group">
	<label for="question_4">Вопрос 3</label>
	<input type="text" class="form-control" name="question_4" id="question_4">
</div>

<button type="button" class="btn btn-secondary ex-mrgt30" name="button_id_4" id="button_id_4">Добавить вопрос <i class="fas fa-plus white"></i></button>
<!-- Input type file -->
<div class="form-group ex-mrgt20">
	<label for="file_id_5">Изображение под заголовок</label>
	<div class="custom-file">
		<input type="file" class="custom-file-input"  name="file_id_5" id="file_id_5">
		<label class="custom-file-label" for="file_id_5"></label>
	</div>
</div>

<button type="submit" class="btn btn-primary ex-mrgt30 floatright" name="button_id_6" id="button_id_6">Опубликовать</button>
		</form>


	</div>
</div>

</body>
</html>