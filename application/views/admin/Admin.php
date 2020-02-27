

<!-- Contents -->
	<!-- Main content -->
	  <div class="row">
	    <div class="col-md-12">

	      <div class="card">
	        <div class="card-header">
			  <h3 class="card-title">Data list</h3>
			  	<a href="<?php echo base_url(''); ?>admin/add">
					<button class="btn btn-info add_user float-right" type="button"><span class="fas fa-plus"> Add</span></button>
				</a>
	        </div>
	        <!-- /.card-header -->
	        <div class="card-body">
	          <table id="example1" class="table table-bordered table-striped">
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
	            <tbody>
	              <?php foreach($data_summary as $d): ?>
	          		<tr>
	          			<td><?php echo $d->id; ?></td>
	          			<td><?php echo $d->nama_pt; ?></td>
	          			<td><?php echo $d->nomor_kontrak; ?></td>
	          			<td><?php echo $d->vendor; ?></td>
	          			<td><?php echo $d->jenis_sewa; ?></td>
	                <!-- <td><?php echo $d->ns_a; ?></td>
	                <td><?php echo $d->ns_b; ?></td>
	                <td><?php echo $d->ns_c1; ?></td>
	                <td><?php echo $d->ns_c2; ?></td>
	                <td><?php echo $d->ns_d1; ?></td>
	                <td><?php echo $d->ns_d2; ?></td>
	                <td><?php echo $d->is_1; ?></td>
	                <td><?php echo $d->is_2; ?></td>
	                <td><?php echo $d->is_3; ?></td>
	                <td><?php echo $d->is_4; ?></td>
	                <td><?php echo $d->is_5; ?></td>
	                <td><?php echo $d->is_6; ?></td>
	                <td><?php echo $d->is_7; ?></td>
	                <td><?php echo $d->komponen; ?></td> -->
	                <td><?php echo $d->lokasi; ?></td>
	                <td><?php echo $d->start_date; ?></td>
	                <td><?php echo $d->end_date; ?></td>
	                <td><?php echo $d->nilai_kontrak; ?></td>
	                <td>
	                  <button 
	                    type="button" 
	                    class="modalihat btn btn-block btn-outline-primary btn-xs"  
	                    data-toggle="modal" 
	                    data-target="#modal-lihat" 
	                    data-title="<?php echo $d->nama_pt; ?>" 
	                    data-nomorkontrak="<?php echo $d->nomor_kontrak; ?>"
	                    data-vendor="<?php echo $d->vendor; ?>"
	          			    data-jenissewa="<?php echo $d->jenis_sewa; ?>"
	                    data-nsa="<?php echo $d->ns_a; ?>"
	                    data-nsb="<?php echo $d->ns_b; ?>"
	                    data-nsc="<?php echo $d->ns_c1; ?>"
	                    data-nsc2="<?php echo $d->ns_c2; ?>"
	                    data-nsd1="<?php echo $d->ns_d1; ?>"
	                    data-nsd2="<?php echo $d->ns_d2; ?>"
	                    data-is1="<?php echo $d->is_1; ?>"
	                    data-is2="<?php echo $d->is_2; ?>"
	                    data-is3="<?php echo $d->is_3; ?>"
	                    data-is4="<?php echo $d->is_4; ?>"
	                    data-is5="<?php echo $d->is_5; ?>"
	                    data-is6="<?php echo $d->is_6; ?>"
	                    data-is7="<?php echo $d->is_7; ?>"
	                    data-komponen="<?php echo $d->komponen; ?>"
	                    data-lokasi="<?php echo $d->lokasi; ?>"
	                    data-startdate="<?php echo $d->start_date; ?>"
	                    data-enddate="<?php echo $d->end_date; ?>"
	                    data-nilaikontrak="<?php echo $d->nilai_kontrak; ?>">
	                      Lihat
	                  </button>
	                  <button 
	                    type="button" 
	                    class="modaedit btn btn-block btn-outline-info btn-xs"  
	                    data-toggle="modal" 
	                    data-target="#modal-edit" 
	                    data-id="<?php echo $d->id; ?>"
	                    data-title="<?php echo $d->nama_pt; ?>" 
	                    data-nomorkontrak="<?php echo $d->nomor_kontrak; ?>"
	                    data-vendor="<?php echo $d->vendor; ?>"
	          			    data-jenissewa="<?php echo $d->jenis_sewa; ?>"
	                    data-nsa="<?php echo $d->ns_a; ?>"
	                    data-nsb="<?php echo $d->ns_b; ?>"
	                    data-nsc="<?php echo $d->ns_c1; ?>"
	                    data-nsc2="<?php echo $d->ns_c2; ?>"
	                    data-nsd1="<?php echo $d->ns_d1; ?>"
	                    data-nsd2="<?php echo $d->ns_d2; ?>"
	                    data-is1="<?php echo $d->is_1; ?>"
	                    data-is2="<?php echo $d->is_2; ?>"
	                    data-is3="<?php echo $d->is_3; ?>"
	                    data-is4="<?php echo $d->is_4; ?>"
	                    data-is5="<?php echo $d->is_5; ?>"
	                    data-is6="<?php echo $d->is_6; ?>"
	                    data-is7="<?php echo $d->is_7; ?>"
	                    data-komponen="<?php echo $d->komponen; ?>"
	                    data-lokasi="<?php echo $d->lokasi; ?>"
	                    data-startdate="<?php echo $d->start_date; ?>"
	                    data-enddate="<?php echo $d->end_date; ?>"
	                    data-nilaikontrak="<?php echo $d->nilai_kontrak; ?>">
	                      Ubah
	                  </button>
	                  <button 
	                    type="button" 
	                    class="modahapus btn btn-block btn-outline-danger btn-xs" 
	                    data-toggle="modal" 
	                    data-id="<?php echo $d->id; ?>" 
	                    data-target="#modal-hapus">
	                      Hapus
	                  </button>
	                </td>
	          		</tr>
	          		<?php endforeach; ?>
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
	    <div  class="col-md-2">
	      <a href="export/export_excel" target="_blank">
	        <button class="btn btn-block btn-success">Export to Excel</button>
	      </a>
	    </div>
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
				
	<!-- Modal Tambah -->
		<?php $this->load->view('modal/AddSummary.php'); ?>
	<!-- Modal Tambah -->

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
	  $(function () {
	    $("#example1").DataTable();
	    $('#example2').DataTable({
	      "paging": true,
	      "lengthChange": false,
	      "searching": false,
	      "ordering": true,
	      "info": true,
	      "autoWidth": false,
	    });
	  });
	// Function Show Detail
	  $(document).on("click", ".modalihat", function () {
	     
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
	      $("#title").html( title );
	      $("#nomorkontrak").html( nomorkontrak );
	      $("#vendor").html( vendor );
	      $("#jenissewa").html( jenissewa );
	      $("#nsa").html( nsa );
	      $("#nsb").html( nsb );
	      $("#nsc").html( nsc1 );
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
	</script>
<!-- End Contents -->
