

<!-- Contents -->
	<!-- Main content -->
	  <div class="row">
	    <div class="col-md-12">

	      <div class="card">
	        <div class="card-header">
			  <h3 class="card-title">Data list</h3>
			  <div class="float-right">
			  	<a href="<?php echo base_url('admin/add'); ?>">
					<button class="btn btn-info add_user" type="button"><span class="fas fa-plus"> Add</span></button>
				</a>
				<a href="<?php echo base_url('export/kkp'); ?>">
					<button class="btn btn-success export_kkp" type="button"><span class="far fa-file-excel"> Export KKP</span></button>
				</a>
			  </div>
	        </div>
	        <!-- /.card-header -->
	        <div class="card-body">
	          <table id="summary_list" class="table table-bordered table-striped">
	            <thead>
	            <tr>
	              <th>Nope</th>
	              <th>Nama PT</th>
	              <th>Nomor Kontrak</th>
	              <th>Vendor</th>
	              <th>Jenis Sewa</th>
	              <!-- <th>Apakah terdapat modifikasi ?</th>
	              <th>Apakah kontrak dinegosiasikan dengan kontrak lain ?</th>
	              <th>Apakah kontrak mengandung opsi perpanjangan ?</th>
	              <th>Penyewa cukup pasti untuk mengeksekusi Opsi tersebut ?</th>
	              <th>Apakah kontrak mengandung Opsi terminasi ?</th>
	              <th>Penyewa cukup pasti untuk tidak mengeksekusi Opsi tersebut ?</th>
	              <th>Certain Asset ?</th>
	              <th>Right to Operate ?</th>
	              <th>Control of the Output or other utility ?</th>
	              <th>Control Physical Asset ?</th>
	              <th>Contract Price ?</th>
	              <th>Output used by third party ?</th>
	              <th>Right to control the use of Asset ?</th>
	              <th>Apakah kontrak Sewa terdiri dari beberapa komponen ?</th> -->
	              <th>Lokasi sewa ?</th>
	              <th>Start Date</th>
	              <th>End Date</th>
	              <th>Besar nilai kontrak ?</th>
	              <th>Action</th>
	            </tr>
	            </thead>
	            <tbody id="show_data_summary">

	            </tbody>
	            <tfoot>
	            <tr>
	              <th>No</th>
	              <th>Nama PT</th>
	              <th>Nomor Kontrak</th>
	              <th>Vendor</th>
	              <th>Jenis Sewa</th>
	              <!-- <th>Apakah terdapat modifikasi ?</th>
	              <th>Apakah kontrak dinegosiasikan dengan kontrak lain ?</th>
	              <th>Apakah kontrak mengandung opsi perpanjangan ?</th>
	              <th>Penyewa cukup pasti untuk mengeksekusi Opsi tersebut ?</th>
	              <th>Apakah kontrak mengandung Opsi terminasi ?</th>
	              <th>Penyewa cukup pasti untuk tidak mengeksekusi Opsi tersebut ?</th>
	              <th>Certain Asset ?</th>
	              <th>Right to Operate ?</th>
	              <th>Control of the Output or other utility ?</th>
	              <th>Control Physical Asset ?</th>
	              <th>Contract Price ?</th>
	              <th>Output used by third party ?</th>
	              <th>Right to control the use of Asset ?</th>
	              <th>Apakah kontrak Sewa terdiri dari beberapa komponen ?</th> -->
	              <th>Lokasi sewa ?</th>
	              <th>Start Date</th>
	              <th>End Date</th>
	              <th>Besar nilai kontrak ?</th>
	              <th>Action</th>
	            </tr>
	            </tfoot>
	          </table>
	        </div>
	        <!-- /.card-body -->
	      </div>
	      <!-- /.card -->
	    </div>
	    <!-- <div  class="col-md-2">
	      <a href="data/export_excel" target="_blank">
	        <button class="btn btn-block btn-primary">Export to Excel</button>
	      </a>
	    </div> -->
	    <!-- <div  class="col-md-2">
	      <a href="export/export_excel" target="_blank">
	        <button class="btn btn-block btn-success">Export to Excel</button>
	      </a>
	    </div> -->
	    <!-- /.col -->
	  </div>
	  <!-- /.row -->
	<!-- /.content -->

	<!-- Modal Edit -->
	<div class="modal fade" id="modal-edit">
	        <div class="modal-dialog modal-lg">
	          <div class="modal-content">
	            <div class="modal-header">
	              <h4 class="modal-title">Ubah Data</h4>
	              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	                <span aria-hidden="true">&times;</span>
	              </button>
	            </div>
	            <div class="modal-body">
	              <!-- @include('editdetail') -->
	              <?php $this->load->view('modal/EditDetails'); ?>
	            </div>
	            <div class="modal-footer justify-content-between">
	              <!-- <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
	              <button type="button" class="btn btn-primary">Simpan</button> -->
	            </div>
	          </div>
	          <!-- /.modal-content -->
	        </div>
	        <!-- /.modal-dialog -->
	      </div>
	<!-- Modal Edit -->

	<!-- Modal Lihat -->
	<div class="modal fade" id="modal-lihat">
	        <div class="modal-dialog modal-lg">
	          <div class="modal-content">
	            <div class="modal-header">
	              <h4 class="modal-title">Lihat Data</h4>
	              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	                <span aria-hidden="true">&times;</span>
	              </button>
	            </div>
	            <div class="modal-body">
	              <!-- @include('showdetail') -->
	              <?php $this->load->view('modal/ShowDetails'); ?>
	            </div>
	            <div class="modal-footer justify-content-between">
	              <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
	              <button type="button" class="btn btn-primary" id="tambah_aset">Tambah Asset</button>
	            </div>
	          </div>
	          <!-- /.modal-content -->
	        </div>
	        <!-- /.modal-dialog -->
	      </div>
	<!-- Modal Lihat -->

	<!-- Modal Hapus -->
	<div class="modal fade" id="modal-hapus">
	        <div class="modal-dialog">
	          <div class="modal-content">
	            <div class="modal-header">
	              <h4 class="modal-title">Hapus Data !</h4>
	              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	                <span aria-hidden="true">&times;</span>
	              </button>
	            </div>
	            <div class="modal-body">
	              <p>Apakah anda yakin untuk menghapus data ini ?</p>
	            </div>
	            <div class="modal-footer justify-content-between">
	              <div class="col-md-2" id="dhref">
	                <a href=""><button type="button" class="btn btn-block btn-success btn-md">Iya</button></a>
	              </div>
	              <div class="col-md-2">
	                <button type="button" class="btn btn-block btn-secondary btn-md" data-dismiss="modal">Tidak</button>
	              </div>
	            </div>
	          </div>
	          <!-- /.modal-content -->
	        </div>
	        <!-- /.modal-dialog -->
	      </div>
	<!-- Modal Hapus -->

	<script src="<?php echo base_url('assets/AdminLTE'); ?>/plugins/jquery/jquery.min.js"></script>
	<!-- Bootstrap 4 -->
	<script src="<?php echo base_url('assets/AdminLTE'); ?>/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
	<!-- DataTables -->
	<script src="<?php echo base_url('assets/AdminLTE'); ?>/plugins/datatables/jquery.dataTables.js"></script>
	<script src="<?php echo base_url('assets/AdminLTE'); ?>/plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
	<!-- AdminLTE App -->
	<script src="<?php echo base_url('assets/AdminLTE'); ?>/dist/js/adminlte.min.js"></script>
	<!-- AdminLTE for demo purposes -->
	<script src="<?php echo base_url('assets/AdminLTE'); ?>/dist/js/demo.js"></script>
	<!-- page script -->
	<script>
	// Function Show Detail
	$(document).on("click", ".modalihat", function () {
	     
	      var title = $(this).data('title');
	      var nomorkontrak = $(this).data('nomorkontrak');
	      var vendor = $(this).data('vendor');
	      var jenissewa = $(this).data('jenissewa');
	      var nsa = $(this).data('nsa');
	      var nsb = $(this).data('nsb');
	      var nsc1 = $(this).data('nsc1');
	      var nsc2 = $(this).data('nsc2');
	      var nsd1 = $(this).data('nsd1');
	      var nsd2 = $(this).data('nsd2');
	      var is1 = $(this).data('is1');
	      var is2 = $(this).data('is2');
	      var is3 = $(this).data('is3');
	      var is4 = $(this).data('is4');
	      var is5 = $(this).data('is5');
	      var is6 = $(this).data('is6');
	      var is7 = $(this).data('is7');
	      var komponen = $(this).data('komponen');
	      var lokasi = $(this).data('lokasi');
	      var startdate = $(this).data('startdate');
	      var enddate = $(this).data('enddate');
	      var nilaikontrak = $(this).data('nilaikontrak');
	      $("#title").html( title );
	      $("#nomorkontrak").html( nomorkontrak );
	      $("#vendor").html( vendor );
	      $("#jenissewa").html( jenissewa );
	      $("#nsa").html( nsa );
	      $("#nsb").html( nsb );
	      $("#nsc1").html( nsc1 );
	      $("#nsc2").html( nsc2 );
	      $("#nsd1").html( nsd1 );
	      $("#nsd2").html( nsd2 );
	      $("#is1").html( is1 );
	      $("#is2").html( is2 );
	      $("#is3").html( is3 );
	      $("#is4").html( is4 );
	      $("#is5").html( is5 );
	      $("#is6").html( is6 );
	      $("#is7").html( is7 );
	      $("#komponen").html( komponen );
	      $("#lokasi").html( lokasi );
	      $("#startdate").html( startdate );
	      $("#enddate").html( enddate );
	      $("#nilaikontrak").html( nilaikontrak );
	});
	// Function Show Detail

	// Function Edit
	$(document).on("click", ".modaedit", function () {
	     var id = $(this).data('id');
	     var title = $(this).data('title');
	     var nomorkontrak = $(this).data('nomorkontrak');
	     var vendor = $(this).data('vendor');
	     var jenissewa = $(this).data('jenissewa');
	     var nsa = $(this).data('nsa');
	     var nsb = $(this).data('nsb');
	     var nsc = $(this).data('nsc1');
	     var nsc2 = $(this).data('nsc2');
	     var nsd1 = $(this).data('nsd1');
	     var nsd2 = $(this).data('nsd2');
	     var is1 = $(this).data('is1');
	     var is2 = $(this).data('is2');
	     var is3 = $(this).data('is3');
	     var is4 = $(this).data('is4');
	     var is5 = $(this).data('is5');
	     var is6 = $(this).data('is6');
	     var is7 = $(this).data('is7');
	     var komponen = $(this).data('komponen');
	     var lokasi = $(this).data('lokasi');
	     var startdate = $(this).data('startdate');
	     var enddate = $(this).data('enddate');
	     var nilaikontrak = $(this).data('nilaikontrak');
	     $("#id").val( id );
	     $("#etitle").val( title );
	     $("#enomorkontrak").val( nomorkontrak );
	     $("#evendor").val( vendor );
	     $("#ejenissewa").val( jenissewa );
	     $("#ensa").val( nsa );
	     $("#ensb").val( nsb );
	     $("#ensc").val( nsc1 );
	     $("#ensc2").val( nsc2 );
	     $("#ensd1").val( nsd1 );
	     $("#ensd2").val( nsd2 );
	     $("#eis1").val( is1 );
	     $("#eis2").val( is2 );
	     $("#eis3").val( is3 );
	     $("#eis4").val( is4 );
	     $("#eis5").val( is5 );
	     $("#eis6").val( is6 );
	     $("#eis7").val( is7 );
	     $("#ekomponen").val( komponen );
	     $("#elokasi").val( lokasi );
	     $("#estartdate").val( startdate );
	     $("#eenddate").val( enddate );
	     $("#enilaikontrak").val( nilaikontrak );
	 });
	// Function Edit
	// Function Delete
	$(document).on("click", ".modahapus", function () {
	     var did = $(this).data('id');
	     $("#dhref a").attr("href", 'admin/delete/'+did)
	 });
	//  Function Delete

	// Function Tambah Asset Melalui Modal
	$(document).on("click", "#tambah_aset", function () {
		var id = $(this).data('id');
	});
	// Function Tambah Asset Melalui Modal
	</script>
<!-- End Contents -->
