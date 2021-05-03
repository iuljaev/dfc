<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<ul class="country-main">

<?php foreach ($arResult['SECTIONS'] as &$arSection):?>

		<?php $this->AddEditAction($arSection['ID'], $arSection['EDIT_LINK'], $strSectionEdit);
		$this->AddDeleteAction($arSection['ID'], $arSection['DELETE_LINK'], $strSectionDelete, $arSectionDeleteParams);
			?>


		<li id="<? echo $this->GetEditAreaId($arSection['ID']); ?>">
			<a href="<? echo $arSection['SECTION_PAGE_URL']; ?>"><? echo $arSection['NAME']; ?></a>
		</li>



<?php endforeach; ?>
<?php unset($arSection); ?>
</ul>
