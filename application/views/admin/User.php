<div class="row">
  <div class="col-md-12">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">User list</h3>
        <button class="btn btn-info add_user float-right" id="add_user_modal" type="button" data-toggle="modal" data-target="#addUserModal"><span class="fas fa-user-plus"> Add User</span></button>
      </div>
      <!-- /.card-header -->
      <div class="card-body">
      	<div class="alert alert-success" id="user-success-alert" role="alert">
      	  <button type="button" class="close" data-dismiss="alert">x</button>
      	  <strong>Success! </strong> User Successfuly added.
      	</div>
      	<div class="alert alert-success" id="user-delete-alert" role="alert">
      	  <button type="button" class="close" data-dismiss="alert">x</button>
      	  <strong>Success! </strong> User Successfuly deleted.
      	</div>
      	<table id="user_list" class="table table-bordered table-striped table-hover" cellspacing="0" style="width: 100%;">
      		<thead>
      			<tr>
      				<th style="vertical-align: top; text-align: center; width: 5%;">No.</th>
      				<th style="vertical-align: top; text-align: center;">Username</th>
      				<th style="vertical-align: top; text-align: center;">Name</th>
      				<th style="vertical-align: top; text-align: center;">Role</th>
      				<th style="vertical-align: top; text-align: center;">Action</th>
      			</tr>
      		</thead>
      		<tbody id="show_data_user">

      		</tbody>
      	</table>
      </div>
	</div>
  </div>
</div>
<?php $this->load->view('modal/AddUser.php'); ?>
<?php $this->load->view('modal/DeleteUser.php'); ?>