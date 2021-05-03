<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Тестовая страница");
?><?$APPLICATION->IncludeComponent(
	"price.list",
	".default",
	array(
		"IBLOCKS" => "9",
		"IBLOCK_TYPE" => "manual",
		"PROPERTIES" => array(
			0 => "",
			1 => "FILE",
			2 => "CATEGORIES",
			3 => "",
		),
		"COMPONENT_TEMPLATE" => ".default"
	),
	false
);?>
<div>
	<table>
	<thead>
	<tr>
		<td>
			 id
		</td>
		<td>
			 дату обновления
		</td>
		<td>
			 Отдел
		</td>
		<td>
			 Название
		</td>
		<td>
			 Тип файла
		</td>
		<td>
			 размер
		</td>
	</tr>
	</thead>
	<tbody>
	<tr>
		<td>
			 1
		</td>
		<td>
			 12.23.23
		</td>
		<td>
			 общий
		</td>
		<td>
			 Тестовая
		</td>
		<td>
			 тхт
		</td>
		<td>
			 153кб
		</td>
	</tr>
	<tr>
		<td>
			 1
		</td>
		<td>
			 12.23.23
		</td>
		<td>
			 общий
		</td>
		<td>
			 Тестовая
		</td>
		<td>
			 тхт
		</td>
		<td>
			 153кб
		</td>
	</tr>
	</tbody>
	</table>
</div>
<?php debug($arResult['ITEMS']); ?>
 <br><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
