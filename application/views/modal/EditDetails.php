<!-- Main content -->
<section class="content">
	<div class="container-fluid">
		<form enctype="multipart/form-data" name="form" role="form">
			<!-- Input Data  -->
			<div class="card card-secondary">
				<div class="card-header">
					<h3 class="card-title">Contract Form</h3>
					<input type="hidden" name="id" id="eidsummary">
					<input type="hidden" name="id" id="idkontrak">
					<div class="card-tools">
						<button type="button" class="btn btn-tool" data-card-widget="collapse"><i
								class="fas fa-minus"></i></button>
						<button type="button" class="btn btn-tool" data-card-widget="remove"><i
								class="fas fa-remove"></i></button>
					</div>
				</div>
				<!-- /.card-header -->
				<div class="card-body">
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<label>Nama Perusahaan / PT</label>
								<input class="form-control" id="enamapt" type="text" name="nama_pt">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<label>Nomor Kontrak</label>
								<input class="form-control" id="enomorkontrak" type="text" name="nomor_kontrak">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<label>Vendor</label>
								<input class="form-control" id="evendor" type="text" name="vendor">
							</div>
						</div>
					</div>
				</div>
				<div class="card-footer">
					* Wajib diisi
				</div>
			</div>

			<div class="card card-secondary">
				<div class="card-header">
					<h3 class="card-title">Nature Sewa</h3>
					<div class="card-tools">
						<button type="button" class="btn btn-tool" data-card-widget="collapse"><i
								class="fas fa-minus"></i></button>
						<button type="button" class="btn btn-tool" data-card-widget="remove"><i
								class="fas fa-remove"></i></button>
					</div>
				</div>
				<!-- /.card-header -->
				<div class="card-body">
					<div class="row">
						<div class="col-md-8">
							<div class="form-group">
								<label>Jenis Sewa</label>
								<input class="form-control" id="ejenissewa" name="jenis_sewa" type="text">
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label>Halaman di dalam PDF ?</label>
								<input class="form-control" name="epageinpdf" type="number" id="epageinpdf">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<label>a. Apakah terdapat modifikasi ?</label>
								<select class="form-control" id="ensa" name="ns_a">
									<option value="Yes">Yes</option>
									<option value="No">No</option>
								</select>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<label>b. Apakah kontrak dinegosiasikan dengan kontrak lain ?</label>
								<select class="form-control" id="ensb" name="ns_b">
									<option value="Yes">Yes</option>
									<option value="No">No</option>
								</select>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<label>c. 1. Apakah kontrak mengandung opsi perpanjangan ?</label>
								<select class="form-control" id="ensc1" name="ns_c1">
									<option value="Yes">Yes</option>
									<option value="No">No</option>
								</select>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<label>c. 2. Penyewa cukup pasti untuk mengeksekusi Opsi tersebut ?</label>
								<input class="form-control" type="text" id="ensc2" name="ns_c2">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<label>d. 1. Apakah kontrak mengandung Opsi terminasi ?</label>
								<select class="form-control" id="ensd1" name="ns_d1">
									<option value="Yes">Yes</option>
									<option value="No">No</option>
								</select>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<label>d. 2. Penyewa cukup pasti untuk tidak mengeksekusi Opsi tersebut ?</label>
								<input class="form-control" type="text" id="ensd2" name="ns_d2">
							</div>
						</div>
					</div>
				</div>
				<div class="card-footer">
					* Wajib diisi
				</div>
			</div>

			<div class="card card-secondary">
				<div class="card-header">
					<h3 class="card-title">Identifikasi Sewa</h3>
				</div>
				<div class="card-body">
					<!--  -->
					<div class="col">
						<div class="row">
							<div class="col-sm-12">
								<div class="form-group">
									<label>1. Certain Asset ? *</label>
									<select class="form-control" id="eis1" name="is_1">
										<option value="Yes">Yes</option>
										<option value="No">No</option>
									</select>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-12">
								<div class="form-group">
									<label>2. Right to Operate ? *</label>
									<select class="form-control" id="eis2" name="is_2">
										<option value="Yes">Yes</option>
										<option value="No">No</option>
									</select>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-12">
								<div class="form-group">
									<label>3. Control of the Output or other utility ? *</label>
									<select class="form-control" id="eis3" name="is_3">
										<option value="Yes">Yes</option>
										<option value="No">No</option>
									</select>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-12">
								<div class="form-group">
									<label>4. Control Physical Asset ? *</label>
									<select class="form-control" id="eis4" name="is_4">
										<option value="Yes">Yes</option>
										<option value="No">No</option>
									</select>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-12">
								<div class="form-group">
									<label>5. Contract Price ? *</label>
									<select class="form-control" id="eis5" name="is_5">
										<option value="Yes">Yes</option>
										<option value="No">No</option>
									</select>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-12">
								<div class="form-group">
									<label>6. Output used by third party ? *</label>
									<select class="form-control" id="eis6" name="is_6">
										<option value="Yes">Yes</option>
										<option value="No">No</option>
									</select>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-12">
								<div class="form-group">
									<label>7. Right to control the use of Asset ? *</label>
									<select class="form-control" id="eis6" name="is_6">
										<option value="Yes">Yes</option>
										<option value="No">No</option>
									</select>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<label>Apakah kontrak Sewa terdiri dari beberapa komponen ?</label>
									<input class="form-control" type="text" id="ekomponen" name="komponen">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<label>Lokasi sewa ?</label>
									<input class="form-control" type="text" id="elokasi" name="lokasi">
								</div>
							</div>
						</div>
					</div>
					<!--  -->
					<div class="row">
						<label>Panjang Kontrak</label>
					</div>
					<div class="row">
						<div class="col-md-4">
							<div class="form-group">
								<label>Start Date</label>
								<input class="form-control" type="date" id="estartdate" placeholder="01/01/20"
									name="start_date">
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label>End Date</label>
								<input class="form-control" type="date" id="eenddate" placeholder="01/01/20"
									name="end_date">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<label>Besar nilai kontrak ?</label>
								<input class="form-control" type="text" onkeyup="splitInDots(this)" id="enilaikontrak"
									name="nilai_kontrak">
							</div>
						</div>
					</div>
				</div>
				<div class="card-footer">
					* Wajib diisi
				</div>
			</div>

			<div class="card card-secondary">
				<div class="card-header">
					<h3 class="card-title">Calculation Form</h3>
					<div class="card-tools">
						<button type="button" class="btn btn-tool" data-card-widget="collapse"><i
								class="fas fa-minus"></i></button>
						<button type="button" class="btn btn-tool" data-card-widget="remove"><i
								class="fas fa-remove"></i></button>
					</div>
				</div>
				<!-- /.card-header -->
				<div class="card-body">
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<label>Discount Rate</label>
								<input class="form-control" type="text" name="dr" id="edr">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<label>Payment Amount Term</label>
								<input class="form-control" type="text" name="pat" id="epat">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<label>Term of Payment</label>
								<select class="form-control" name="top" id="etop">
									<option value="1">1 (Tahunan)</option>
									<option value="2">2 (Semester)</option>
									<option value="4">4 (Kuartal)</option>
									<option value="12">12 (Bulanan)</option>
								</select>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<label>Awal Bulan / Akhir Bulan</label>
								<select class="form-control" name="awak" id="eawak">
									<option value="1">Awal Bulan</option>
									<option value="0">Akhir Bulan</option>
								</select>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<label>Frekuensi Pembayaran</label>
								<input type="number" class="form-control" name="frekuensi" id="efrekuensi">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<label>Payment Date</label>
								<input class="form-control" name="pd" type="date" id="epd">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<label>Prepaid</label>
								<input class="form-control" onkeyup="splitInDots(this)" name="prepaid" type="text"
									id="eprepaid">
							</div>
						</div>
					</div>
				</div>
				<div class="card-footer">
					* Wajib diisi
				</div>
			</div>

			<div class="card card-secondary">
				<div class="card-header">
					<h3 class="card-title">Detail Contract Form</h3>
					<div class="card-tools">
						<button type="button" class="btn btn-tool" data-card-widget="collapse"><i
								class="fas fa-minus"></i></button>
						<button type="button" class="btn btn-tool" data-card-widget="remove"><i
								class="fas fa-remove"></i></button>
					</div>
				</div>
				<!-- /.card-header -->
				<div class="card-body">
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<label>Status PPN</label>
								<select class="form-control" name="status_ppn" id="estatus_ppn">
									<option value="0">Belum Termasuk PPN</option>
									<option value="1">Sudah Termasuk PPN</option>
								</select>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<label>PPN %</label>
								<input class="form-control" type="text" name="ppn" id="eppn">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<label>Jumlah Unit</label>
								<input class="form-control" type="text" name="jumlah_unit" id="ejumlah_unit">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<label>Satuan</label>
								<input class="form-control" name="satuan" type="text" id="esatuan">
							</div>
						</div>
					</div>
				</div>
				<div class="card-footer">
					* Wajib diisi
				</div>
			</div>

			<div class="card card-secondary">
				<div class="card-header">
					<h3 class="card-title">Perpanjangan</h3>
					<div class="card-tools">
						<button type="button" class="btn btn-tool" data-card-widget="collapse"><i
								class="fas fa-minus"></i></button>
						<button type="button" class="btn btn-tool" data-card-widget="remove"><i
								class="fas fa-remove"></i></button>
					</div>
				</div>
				<!-- /.card-header -->
				<div class="card-body">
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<label>Nilai Asumsi Perpanjang</label>
								<input class="form-control" type="text" name="nilai_asumsi_perpanjangan"
									id="enilai_asumsi_perpanjangan">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<label>Tanggal Perpanjang</label>
								<input class="form-control" type="date" name="tgl_perpanjangan" id="etgl_perpanjangan">
							</div>
						</div>
					</div>
				</div>
				<div class="card-footer">
					* Wajib diisi
				</div>
			</div>

			<div class="row justify-content-between">
				<div class="col-md-2">
					<input type="button" class="btn btn-block btn-secondary" data-dismiss="modal" value="Batalkan">
				</div>
				<div class="col-md-2">
					<button type="submit" id="edit_summary" class="btn btn-info col-md-12">Simpan</button>
				</div>
			</div>
			<div class="col"></div>

		</form>
	</div>
	<!-- /.container-fluid -->
</section>
<!-- /.content -->
<!-- jQuery -->
<script src="<?php echo base_url('assets/AdminLTE'); ?>/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url('assets/AdminLTE'); ?>/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Select2 -->
<script src="<?php echo base_url('assets/AdminLTE'); ?>/plugins/select2/js/select2.full.min.js"></script>
<!-- Bootstrap4 Duallistbox -->
<script
	src="<?php echo base_url('assets/AdminLTE'); ?>/plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js">
</script>
<!-- InputMask -->
<script src="<?php echo base_url('assets/AdminLTE'); ?>/plugins/moment/moment.min.js"></script>
<script src="<?php echo base_url('assets/AdminLTE'); ?>/plugins/inputmask/min/jquery.inputmask.bundle.min.js"></script>
<!-- date-range-picker -->
<script src="<?php echo base_url('assets/AdminLTE'); ?>/plugins/daterangepicker/daterangepicker.js"></script>
<!-- bootstrap color picker -->
<script src="<?php echo base_url('assets/AdminLTE'); ?>/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js">
</script>
<!-- Tempusdominus Bootstrap 4 -->
<script
	src="<?php echo base_url('assets/AdminLTE'); ?>/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js">
</script>
<!-- Bootstrap Switch -->
<script src="<?php echo base_url('assets/AdminLTE'); ?>/plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url('assets/AdminLTE'); ?>/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url('assets/AdminLTE'); ?>/dist/js/demo.js"></script>
<!-- Page script -->
<script>
	$(function () {
		//Initialize Select2 Elements
		$('.select2').select2()
		//Initialize Select2 Elements
		$('.select2bs4').select2({
			theme: 'bootstrap4'
		})
		//Datemask dd/mm/yyyy
		$('#datemask').inputmask('dd/mm/yyyy', {
			'placeholder': 'dd/mm/yyyy'
		})
		//Datemask2 mm/dd/yyyy
		$('#datemask2').inputmask('mm/dd/yyyy', {
			'placeholder': 'mm/dd/yyyy'
		})
		//Money Euro
		$('[data-mask]').inputmask()
		//Date range picker
		$('#reservation').daterangepicker()
		//Date range picker with time picker
		$('#reservationtime').daterangepicker({
			timePicker: true,
			timePickerIncrement: 30,
			locale: {
				format: 'MM/DD/YYYY hh:mm A'
			}
		})
		//Date range as a button
		$('#daterange-btn').daterangepicker({
				ranges: {
					'Today': [moment(), moment()],
					'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
					'Last 7 Days': [moment().subtract(6, 'days'), moment()],
					'Last 30 Days': [moment().subtract(29, 'days'), moment()],
					'This Month': [moment().startOf('month'), moment().endOf('month')],
					'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1,
						'month').endOf('month')]
				},
				startDate: moment().subtract(29, 'days'),
				endDate: moment()
			},
			function (start, end) {
				$('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
			}
		)
		//Timepicker
		$('#timepicker').datetimepicker({
			format: 'LT'
		})
		//Bootstrap Duallistbox
		$('.duallistbox').bootstrapDualListbox()
		//Colorpicker
		$('.my-colorpicker1').colorpicker()
		//color picker with addon
		$('.my-colorpicker2').colorpicker()
		$('.my-colorpicker2').on('colorpickerChange', function (event) {
			$('.my-colorpicker2 .fa-square').css('color', event.color.toString());
		});
		$("input[data-bootstrap-switch]").each(function () {
			$(this).bootstrapSwitch('state', $(this).prop('checked'));
		});
	})

</script>
<script type="text/javascript">
	function reverseNumber(input) {
		return [].map.call(input, function (x) {
			return x;
		}).reverse().join('');
	}

	function plainNumber(number) {
		return number.split('.').join('');
	}

	function splitInDots(input) {

		var value = input.value,
			plain = plainNumber(value),
			reversed = reverseNumber(plain),
			reversedWithDots = reversed.match(/.{1,3}/g).join('.'),
			normal = reverseNumber(reversedWithDots);

		console.log(plain, reversed, reversedWithDots, normal);
		input.value = normal;
	}

	function oneDot(input) {
		var value = input.value,
			value = plainNumber(value);

		if (value.length > 3) {
			value = value.substring(0, value.length - 3) + '.' + value.substring(value.length - 3, value.length);
		}
		console.log(value);
		input.value = value;
	}

</script>
