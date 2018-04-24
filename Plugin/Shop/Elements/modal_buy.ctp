  [IF REDUCTIONAL_ITEMS]
    <div class="alert alert-info">
      {REDUCTIONAL_ITEMS_LIST}
    </div>
  [/IF REDUCTIONAL_ITEMS]

  <p><b>{LANG-SHOP__ITEM_NAME} :</b> {ITEM_NAME}</p>
  <p><b>{LANG-SHOP__ITEM_DESCRIPTION} :</b> {ITEM_DESCRIPTION}</p>
  [IF AFFICH_SERVER]
    <p><b>{LANG-SERVER__TITLE} :</b> {ITEM_SERVERS}</p>
  [/IF AFFICH_SERVER]
  <p><b>{LANG-SHOP__ITEM_PRICE} :</b> {ITEM_PRICE} {SITE_MONEY}</p>
  <p><input name="code" type="text" class="form-control" autocomplete="off" id="code-voucher" style="width:100%;" placeholder="{LANG-SHOP__BUY_VOUCHER_ASK}"></p>
</div>
<div class="modal-footer">
  <div class="pull-left">
    <a class="btn btn-success disabled">{LANG-SHOP__ITEM_TOTAL} : <span id="total-price">{ITEM_PRICE}</span>  {SITE_MONEY}</a>
  </div>
  [IF MULTIPLE_BUY]
    <div class="col-md-3">
      <input type="text" value="1" name="quantity" style="height: 32px;padding: 0 15px;">
    </div>
  [/IF MULTIPLE_BUY]
  [IF ADD_TO_CART]
    <a type="button" class="btn btn-success add-to-cart" data-item-id="{ITEM_ID}" id="btn-cart">{LANG-SHOP__BUY_ADD_TO_CART}</a>
  [/IF ADD_TO_CART]
  <a type="button" class="btn btn-success buy-item" data-item-id="{ITEM_ID}" id="btn-buy">{LANG-SHOP__BUY}</a>
