# Модуль «Файлы для загрузки» (mod_downfiles)

<p>Модуль «Файлы для загрузки» (<b>mod_downfiles</b>) предназначен для вывода списка файлов, добавленных администратором сайта с помощью компонента «Загрузка файлов и статистика» (<b>com_downfiles</b>).</p>
<p>Каждый элемент списка включает в себя ссылку для скачивания файла. При клике на нее происходит загрузка и данные об этом событии сохраняются в базу данных.</p>
<p>На основе данных формируется статистика загрузок, с которой можно ознакомиться в админской части сайта в компоненте «Загрузка файлов и статистика» (<b>com_downfiles</b>).</p>
<p style="color:#f00;">Модуль «Файлы для загрузки» (<b>mod_downfiles</b>) будет работать только если установлен компонент «Загрузка файлов и статистика» (<b>com_downfiles</b>)</p>
<h2>Установка и настройка</h2>
<ol>
	<li>В админке «Расширения» → «Менеджер расширений». Производим установку из zip-архива (<b>mod_downfiles.zip</b>);</li>
	<li>После установки открываем страницу «Менеджер модулей» («Расширения» → «Менеджер модулей»);</li>
	<li>Выбираем модуль «Файлы для загрузки» - открывается стандратная страница настройки модулей CMS Joomla;</li>
	<li>Настраиваем модуль. Кроме стандартных полей в настройках модуля присутствуют еще 2 поля:
		<ul>
			<li><i>«Количество файлов для показа»</i> - указывается количество файлов, которые будут показаны в списке. Значение по-умолчанию - 3 файла;</li>
			<li><i>«Текст перед списком файлов для загрузки»</i> - в это поле можно добавить текст, который будет показан перед списком файлов для скачивания. Может включать в себя HTML-теги.</li>	
		</ul>
	</li>
</ol>
<h2>Использование</h2>
<p>Разместите модуль в публичной части сайта, выбрав в настройках позицию для размещения модуля в шаблоне сайта.</p>

