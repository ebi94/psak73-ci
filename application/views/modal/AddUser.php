<div class="modal fade" id="addUserModal">
  <div class="modal-dialog modal-md">
    <div class="modal-content">
      <div class="modal-header bg-secondary">
        <h4 class="modal-title">Add User</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color: white;">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <section class="content">
          <div class="container-fluid">
            <form enctype="multipart/form-data" name="form" role="form">
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label>Username</label>
                    <input class="form-control" id="Auth_email" type="email" name="auth_email" placeholder="mail@mail.com">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label>Password</label>
                    <input class="form-control" id="Auth_password" type="password" name="auth_password" placeholder="min 6 characters">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label>Name</label>
                    <input class="form-control" id="Auth_name" type="text" name="auth_name" placeholder="name">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label>Role</label>
                    <select class="form-control" id="Auth_level" name="auth_level">
                      <option value="0">Super Admin</option>
                      <option value="1">Admin</option>
                      <option value="2">Client</option>
                    </select>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </section>
      </div>
      <div class="modal-footer justify-content-between">
        <button type="submit" id="add_user" class="btn btn-info col-md-12">Save</button>
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>