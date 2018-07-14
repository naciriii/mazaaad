<div id="confirmDeleteModal" class="modal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">@lang('g.PayAttention')</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>@lang('g.YouSureDeleteProduct')</p>
      </div>
      <div class="modal-footer">
        <button type="button" onclick="confirmDeleteProduct()" class="btn btn-primary">@lang('g.Confirm')</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">@lang('g.Close')</button>
      </div>
    </div>
  </div>
</div>
        <script type="text/javascript">
        var url ;
        function showDeleteConfirmation(deleteUrl) {
            url = deleteUrl;
            $('#confirmDeleteModal').modal();

        }
        function confirmDeleteProduct() {
            window.location.replace(url);
        }</script>