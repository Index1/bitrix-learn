<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();$this->setFrameMode(false);?><form action="<?=POST_FORM_ACTION_URI?>" method="POST">    <div class="modal-error"></div>    <div class="form-group">        <label for="descMail">Cопроводительное письмо:</label>        <textarea class="form-control" name="DescMail" id="descMail" rows="4"></textarea>    </div>    <input type="hidden" name="JobID" value="<?=$arParams['JobID'];?>" />    <button type="submit" class="btn btn-primary">Отправить</button></form>