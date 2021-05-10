<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

$this->setFrameMode(true);
?>

<div class="company">
	<h2><?=$arResult["NAME"]?></h2>
	<div class="">
		<img src="<?=$arResult["DETAIL_PICTURE"]["SRC"]?>" alt="">
	</div>
	<div class="company_cont">
		<p><?=$arResult["DETAIL_TEXT"]?></p>
	</div>

</div>
<div class="">
	<ul>
<?php debug($arResult); ?>
		 	<li> <a href="<?=$arResult['CATALOG']['DETAIL_PAGE_URL']
                .$arResult['CATALOG']['CODE']?>"><?=$arResult['CATALOG']['NAME
                ']?></a>
            </li>



	</ul>
</div>
