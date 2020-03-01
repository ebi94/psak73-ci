<div class="modal fade" id="deleteUserModal">
  <div class="modal-dialog modal-md">
    <div class="modal-content">
      <div class="modal-header bg-danger">
        <h4 class="modal-title">Tambah Aset</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color: white;">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <section class="content">
          <div class="container-fluid">
            <strong>Apakah ada penambahan aset dalam no kontrak "<?php echo $no_kontrak ?>" ?</strong>
          </div>
        </section>
      </div>
      <div class="modal-footer">
        <input type="hidden" name="id_user_delete" id="id_user_delete" class="form-control">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
        <button type="button" type="submit" id="btn_user_delete" class="btn btn-primary">Iya</button>
      </div>
    </div>
  </div>
</div>