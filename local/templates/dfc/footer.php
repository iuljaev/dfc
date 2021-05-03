<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();?>

</div>
<div class="aside">
  <dl class="country">
    <dt> Страны</dt>
      <?$APPLICATION->IncludeComponent(
	"bitrix:catalog.section.list",
	"countries",
	array(
		"ADD_SECTIONS_CHAIN" => "Y",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"COUNT_ELEMENTS" => "N",
		"COUNT_ELEMENTS_FILTER" => "CNT_ACTIVE",
		"FILTER_NAME" => "sectionsFilter",
		"IBLOCK_ID" => "7",
		"IBLOCK_TYPE" => "country",
		"SECTION_CODE" => "",
		"SECTION_FIELDS" => array(
			0 => "",
			1 => "",
		),
		"SECTION_ID" => $_REQUEST["SECTION_CODE"],
		"SECTION_URL" => "",
		"SECTION_USER_FIELDS" => array(
			0 => "",
			1 => "",
		),
		"SHOW_PARENT_NAME" => "Y",
		"TOP_DEPTH" => "2",
		"VIEW_MODE" => "TEXT",
		"COMPONENT_TEMPLATE" => "countries"
	),
	false
);?>
  </dl>
  <div class="search">
    <h3>Найти тур</h3>
    <div class="inner-search">

  <form action="" method="" name="">

    <script language="javascript">
    var request;
    var tour;

    function processStateChange(){
      if (request.readyState == 4){
        contentDiv = document.getElementById(tour);
        if (request.status == 200){
    response = request.responseText;
    contentDiv.innerHTML = response;
        } else {
    contentDiv.innerHTML = "Error: Status "+request.status;
        }
      }
    }

    function loadHTML(URL, tours){
      tour = tours;

      if (window.XMLHttpRequest){
        request = new XMLHttpRequest();
        request.onreadystatechange = processStateChange;
        request.open("GET", URL, true);
        request.send(null);
      } else if (window.ActiveXObject){
        request = new ActiveXObject("Microsoft.XMLHTTP");
        if (request) {
    request.onreadystatechange = processStateChange;
    request.open("GET", URL, true);
    request.send();
        }
      }
    }
    </script>
    <?CModule::IncludeModule("iblock");

  $IBLOCK_ID=7;
  $str = "";
  $str .= "<select name=\"country-name\" onchange=\"loadHTML('/tours/ajax.php?id='+this.options[this.selectedIndex].value,'label');\" >";
  $str .="<option>Выберите страну</option>";

  $arFilter = Array('IBLOCK_ID'=>$IBLOCK_ID, 'GLOBAL_ACTIVE'=>'Y');
  $db_list = CIBlockSection::GetList(Array("NAME"=>"ASC"), $arFilter, true);
    while($ar_result = $db_list->GetNext())
    {
      $str .= "<option value=\"".$ar_result['ID'] ."\">".$ar_result['NAME']."</option>";
    }

    $str .= "</select>";
?>
    <dl>
      <dt>Страна</dt>
      <dd>
          <?=$str?>
      </dd>

      <dt>Город (Курорт)</dt>
      <dd id="label">
        <select  name="city-name">
          <option value="empty">empty</option>
         </select>
      </dd>

      <dt>Тип тура</dt>
      <dd id="lable2">
        <select  name="tour-name">
        <option selected="selected">Любой тип</option>
        <option >Образование</option>
        <option >Отдых</option>
        <option >Путешествие</option>
        <option >Экскурсия</option>
         </select>
      </dd>

      <dt>Цена до ($)</dt>
      <dd>
      <input type="text" />
      </dd>
    </dl>

      <label><input type="checkbox"/> <span>Горячий тур</span></label>
      <p><input type="submit" value="Найти"/></p>
    </form>
  </div>
  </div>
</div>
</div>
</div>
<div class="footer">
<div class="footer-inner">
<div class="hot-block podval">
  <div class="l-t"></div> <div class="r-t"></div>
  <?$APPLICATION->IncludeComponent(
	"bitrix:menu",
	"bottom_menu",
	array(
		"ALLOW_MULTI_SELECT" => "N",
		"CHILD_MENU_TYPE" => "left",
		"DELAY" => "N",
		"MAX_LEVEL" => "1",
		"MENU_CACHE_GET_VARS" => array(
		),
		"MENU_CACHE_TIME" => "3600",
		"MENU_CACHE_TYPE" => "N",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"ROOT_MENU_TYPE" => "top",
		"USE_EXT" => "N",
		"COMPONENT_TEMPLATE" => "bottom_menu"
	),
	false
);?>
<p>Copyright &copy; Your Company Name</p>
<div class="l-b"></div> <div class="r-b"></div>
  </div>
</div>

<?php $APPLICATION->IncludeComponent("bitrix:catalog.section.list", "bottom_countries", Array(
	"ADD_SECTIONS_CHAIN" => "Y",	// Включать раздел в цепочку навигации
		"CACHE_FILTER" => "N",	// Кешировать при установленном фильтре
		"CACHE_GROUPS" => "Y",	// Учитывать права доступа
		"CACHE_TIME" => "36000000",	// Время кеширования (сек.)
		"CACHE_TYPE" => "A",	// Тип кеширования
		"COUNT_ELEMENTS" => "N",	// Показывать количество элементов в разделе
		"COUNT_ELEMENTS_FILTER" => "CNT_ACTIVE",	// Показывать количество
		"FILTER_NAME" => "sectionsFilter",	// Имя массива со значениями фильтра разделов
		"IBLOCK_ID" => "7",	// Инфоблок
		"IBLOCK_TYPE" => "country",	// Тип инфоблока
		"SECTION_CODE" => "",	// Код раздела
		"SECTION_FIELDS" => array(	// Поля разделов
			0 => "",
			1 => "",
		),
		"SECTION_ID" => $_REQUEST["SECTION_CODE"],	// ID раздела
		"SECTION_URL" => "",	// URL, ведущий на страницу с содержимым раздела
		"SECTION_USER_FIELDS" => array(	// Свойства разделов
			0 => "",
			1 => "",
		),
		"SHOW_PARENT_NAME" => "Y",	// Показывать название раздела
		"TOP_DEPTH" => "2",	// Максимальная отображаемая глубина разделов
		"VIEW_MODE" => "TEXT",	// Вид списка подразделов
		"COMPONENT_TEMPLATE" => "countries1"
	),
	false
); ?>

</div>
</body>
</html>
