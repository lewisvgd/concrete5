<? 
defined('C5_EXECUTE') or die(_("Access Denied."));
?>
</div>

<? 

// simple file that controls the adding of blocks.

// $blockTypes is an array using the btID as the key and btHandle as the value.
// It is defined within Area->_getAreaAddBlocks(), which then calls a 
// function in Content to include the file

// note, we're also passed an area & collection object from the original function

$arHandle = $a->getAreaHandle();
$arHandleTrunc = strtolower(preg_replace("/[^0-9A-Za-z]/", "", $a->getAreaHandle()));

$c = $a->getAreaCollectionObject();
$cID = $c->getCollectionID();
$u = new User();

if (($a->areaAcceptsBlocks()) || $cp->canAdminPage()) { ?>

<? if (!$c->isArrangeMode()) { ?>
	<script type="text/javascript">
	ccm_areaMenuObj<?=$a->getAreaID()?> = new Object();
	ccm_areaMenuObj<?=$a->getAreaID()?>.type = "AREA";
	ccm_areaMenuObj<?=$a->getAreaID()?>.aID = <?=$a->getAreaID()?>;
	ccm_areaMenuObj<?=$a->getAreaID()?>.arHandle = "<?=$arHandle?>";

	$(function() {ccm_menuInit(ccm_areaMenuObj<?=$a->getAreaID()?>)});
	</script>
	<div id="a<?=$a->getAreaID()?>controls" class="ccm-add-block"><?=t('Add To %s', $arHandle)?></div>
	<? } ?>
<? } ?>