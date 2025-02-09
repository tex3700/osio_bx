<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("ГЛАВНАЯ");
?>
    <h3>Здесь будет главная страница</h3><br><br><br><br><br><br><br><br><br><br><br><br><br>
<?//$APPLICATION->IncludeComponent("bitrix:furniture.catalog.index", "", array(
//	"IBLOCK_TYPE" => "products",
//	"IBLOCK_ID" => "2",
//	"IBLOCK_BINDING" => "section",
//	"CACHE_TYPE" => "A",
//	"CACHE_TIME" => "36000000",
//	"CACHE_GROUPS" => "N"
//	),
//	false
//);?>

<?//$APPLICATION->IncludeComponent("bitrix:furniture.catalog.index", "", array(
//	"IBLOCK_TYPE" => "products",
//	"IBLOCK_ID" => "3",
//	"IBLOCK_BINDING" => "element",
//	"CACHE_TYPE" => "A",
//	"CACHE_TIME" => "36000000",
//	"CACHE_GROUPS" => "N"
//	),
//	false
//);?>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>