<?
defined('C5_EXECUTE') or die(_("Access Denied."));
$step = ($_REQUEST['step']) ? "&step={$_REQUEST['step']}" : ""; ?>

<? global $c; ?>
	
	<? if (is_array($extraParams)) { // defined within the area/content classes 
		foreach($extraParams as $key => $value) { ?>
			<input type="hidden" name="<?=$key?>" value="<?=$value?>">
		<? } ?>
	<? } ?>
	
	<div class="ccm-buttons">
	<a href="javascript:void(0)" <? if ($replaceOnUnload) { ?>onclick="location.href='<?=DIR_REL?>/index.php?cID=<?=$c->getCollectionID()?><?=$step?>'; return true" class="ccm-button-left cancel"<? } else { ?>class="ccm-dialog-close ccm-button-left cancel"<? } ?>><span><em class="ccm-button-close"><?=t('Cancel')?></em></span></a>
	<a href="javascript:clickedButton = true;$('#ccm-form-submit-button').get(0).click()" class="ccm-button-right accept"><span><em class="ccm-button-update"><?=t('Update')?></em></span></a>
	</div>	

	<input type="hidden" name="update" value="1" />
	<input type="submit" name="submit" value="submit" style="display: none" id="ccm-form-submit-button" />
	<input type="hidden" name="processBlock" value="1">

	</form>

</div>