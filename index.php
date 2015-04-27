<!DOCTYPE html>
<html lang="ru-RU">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">

	<title>Валидация формы</title>
	
	<!-- favicons-->
	<link rel="apple-touch-icon" sizes="57x57" href="img/favicons/apple-touch-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="img/favicons/apple-touch-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="img/favicons/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="img/favicons/apple-touch-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="img/favicons/apple-touch-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="img/favicons/apple-touch-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="img/favicons/apple-touch-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="img/favicons/apple-touch-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="img/favicons/apple-touch-icon-180x180.png">
	<link rel="icon" type="image/png" href="img/favicons/favicon-32x32.png" sizes="32x32">
	<link rel="icon" type="image/png" href="img/favicons/android-chrome-192x192.png" sizes="192x192">
	<link rel="icon" type="image/png" href="img/favicons/favicon-96x96.png" sizes="96x96">
	<link rel="icon" type="image/png" href="img/favicons/favicon-16x16.png" sizes="16x16">
	<link rel="manifest" href="/manifest.json">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="msapplication-TileColor" content="#da532c">
	<meta name="msapplication-TileImage" content="/mstile-144x144.png">
	<meta name="theme-color" content="#ffffff">

	<!-- SEO -->
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="">

	<!-- CSS -->
	<link rel="stylesheet" href="bower/normalize.css/normalize.css">
	<link rel="stylesheet" type="text/css" href="css/form.css">
		
		<!-- qtip -->
	<link type="text/css" rel="stylesheet" href="css/jquery.qtip.min.css" />
	

	<!-- JS -->
	<script type="text/javascript" src="bower/modernizr/modernizr.js"></script>
	<style type="text/css">
		.toltip_st{
		  color:#fff !important;
		  padding: 2px 5px !important;
		  border: 1px solid #f97e76 !important;
		  background: #f97e76 !important;
		  font-size: 13px !important;
		  -webkit-border-radius: 3px;
		  border-radius: 3px;
		}
	</style>
</head>
<body>
	

	 <!--[if lt IE 8]>
            <p class="browserupgrade">Ваш браузер<strong>устарел</strong>. Пожалуйста <a href="http://browsehappy.com/">обновите</a> его.</p>
        <![endif]-->
	<!-- main-block -->
	

	<div class="md-modal md-effect-11" id="modal-11">
		<div class="md-content">
			<div class="file-md">
		<div class="file-md-title">
			Добавление проекта
			<div class="md-close file-md-close">x</div>
		</div>
		<div class="file-md-cont">
			<form action="add_work.php" id="file-md-form">
				<div class="block-info  bl-error wrp-bl-info" hidden>
					<div class="block-info-close bl-error">x</div>
					<div class="block-info-title bl-error">Ошибка</div>
					<div class="block-info-content bl-error">Невозможно добавить проект.</div>
				</div><!-- / block-info -->
				<div class="wrap-info-bl bl-success wrp-bl-info" hidden>
					<div class="block-info bl-success">
						<div class="block-info-close bl-success">x</div>
						<div class="block-info-title bl-success">Ура!</div>
						<div class="block-info-content bl-success">Проект успешно добавлен.</div>
					</div><!-- / block-info -->
				</div><!-- / wrap-info-bl -->
				<div class="form-item">
					<label for="prj_name" class="lable-item">Название проекта</label>
					<input type="text" name="prj_name" id="prj_name" class="input-item add-tooltip" placeholder='Введите название' data-errtxt='введите название' data-pos="left" data-valtype="text">
				</div><!-- /form-item-->
				
				<div class="form-item">
					<label for="prj_img" class="lable-item">Картинка проекта</label>
					<div class="bl-upl-img">
						<input type="text" name="prj_img_text" id="prj_img_text" class="input-item add-tooltip" placeholder='Загрузите изображение' data-errtxt='изображение' data-pos="left"  data-valtype="text">
						<div class="bl-upl-icon">
							<input type="file" name="prj_img" id="prj_img" class="input-item">
						</div>
					</div><!-- /bl-upl-img-->
				</div><!-- /form-item-->
				
				<div class="form-item">
					<label for="prj_url" class="lable-item">URL проекта</label>
					<input type="text" name="prj_url" id="prj_url" class="input-item add-tooltip" placeholder='Добавьте ссылку' data-errtxt='Ссылка на проект' data-pos="left"  data-valtype="url">
				</div><!-- /form-item-->
				
				<div class="form-item">
					<label for="prj_text" class="lable-item">Описание</label>
					<textarea  name="prj_text" id="prj_text" rows="8" class="textarea-item add-tooltip" placeholder='Пара слов о Вашем проекте'  data-errtxt='Описание проекта' data-pos="left"  data-valtype="text"></textarea>
				</div><!-- /form-item-->
				<div class="form-item">
					<input type="submit" class="btn btn-send" value="Добавить">
				</div><!-- /form-item-->
		
			</form>
		</div><!-- /file-md-cont-->
	</div><!-- /add-file-md-->
		</div>
	</div><!-- /modal-11 -->
	<div class="md-overlay"></div>

	
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/jquery.js"><\/script>')</script>

    <!-- qtip-->
    <script src="js/jquery.qtip.min.js"></script>
    <script src="js/imagesloaded.pkg.min.js"></script>

    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>

  	
</body>
</html>