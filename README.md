# valid_form
Плагин валидации формы с тултипами
Для тултипов используется плагин http://qtip2.com/
Необходимые файлы плагина тултипов - jquery.qtip.min.css, jquery.qtip.min.js, imagesloaded.pkg.min.js

1.Инициализация плагина 
formValModul.init('#file-md-form');//Передаём id формы
//<form action="add_work.php" id="file-md-form">
// add_work.php - на это адрес будет осуществлятся Ajax запрос с данными формы

2.Отладка кода
 _cnl = function(text){//отображение console.log
    var view = true;
    if (view) {console.log(text)};
  },

3.Информацианные сообщения, отображаются в результате работы Ajax
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

//wrp-bl-info -- обязательный класс для js(прячим сообщение)
//block-info-close -- класс для кнопки спрятать сообщение


4.Установка валидации поля
<div class="form-item">
	<label for="prj_name" class="lable-item">Название проекта</label>
	<input type="text" name="prj_name" id="prj_name" class="input-item add-tooltip" placeholder='Введите название' data-errtxt='введите название' data-pos="left" data-valtype="text">
</div><!-- /form-item-->

//class="add-tooltip" -- устанавливает валидацию на поле
//data-errtxt='введите название' -- текст, который будет выводится в тултипе
//data-pos="left" -- положение тултипа относительно поля (left/right)
//data-valtype="text" -- тип валидации поля (text/numb/url/email)


