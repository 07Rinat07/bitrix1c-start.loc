<?php
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php');
$APPLICATION->SetTitle("Test");
?><?php $APPLICATION->IncludeComponent(
	"bitrix:breadcrumb",
	"breadcrumb",
	Array(
		"COMPONENT_TEMPLATE" => ".default",
		"PATH" => "",
		"SITE_ID" => "s1",
		"START_FROM" => "0"
	)
);?><?php
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php');
?>