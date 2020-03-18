<div class="row">
	<!-- Main content -->
	<section class="content col-lg-6 connectedSortable">
		<div class="container-fluid">
			<form action="input/add" method="get">
				<!-- Input Data  -->
				<div class="card card-secondary">
					<div class="card-header">
						<h3 class="card-title">Show Detail</h3>
						<input type="hidden" name="id" id="id">
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
									<br /><span id="title"></span>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<label>Nomor Kontrak</label>
									<br /><span id="nomorkontrak"></span>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<label>Vendor</label>
									<br /><span id="vendor"></span>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-8">
								<div class="form-group">
									<label>Jenis Sewa</label>
									<br /><span id="jenissewa"></span>
								</div>
							</div>
						</div>
					</div>
					<div class="card-footer">
						*
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
							<div class="col-md-12">
								<div class="form-group">
									<label>a. Apakah terdapat modifikasi ?</label>
									<br /><span id="nsa"></span>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<label>b. Apakah kontrak dinegosiasikan dengan kontrak lain ?</label>
									<br /><span id="nsb"></span>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<label>c. 1. Apakah kontrak mengandung opsi perpanjangan ?</label>
									<br /><span id="nsc1"></span>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<label>c. 2. Penyewa cukup pasti untuk mengeksekusi Opsi tersebut ?</label>
									<br /><span id="nsc2"></span>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<label>d. 1. Apakah kontrak mengandung Opsi terminasi ?</label>
									<br /><span id="nsd1"></span>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<label>d. 2. Penyewa cukup pasti untuk tidak mengeksekusi Opsi tersebut ?</label>
									<br /><span id="nsd2"></span>
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
										<br /><span id="is1"></span>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-12">
									<div class="form-group">
										<label>2. Right to Operate ? *</label>
										<br /><span id="is2"></span>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-12">
									<div class="form-group">
										<label>3. Control of the Output or other utility ? *</label>
										<br /><span id="is3"></span>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-12">
									<div class="form-group">
										<label>4. Control Physical Asset ? *</label>
										<br /><span id="is4"></span>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-12">
									<div class="form-group">
										<label>5. Contract Price ? *</label>
										<br /><span id="is5"></span>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-12">
									<div class="form-group">
										<label>6. Output used by third party ? *</label>
										<br /><span id="is6"></span>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-12">
									<div class="form-group">
										<label>7. Right to control the use of Asset ? *</label>
										<br /><span id="is7"></span>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<label>Apakah kontrak Sewa terdiri dari beberapa komponen ?</label>
										<br /><span id="komponen"></span>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<label>Lokasi sewa ?</label>
										<br /><span id="lokasi"></span>
									</div>
								</div>
							</div>
						</div>
						<!--  -->
						<div class="row">
							<label>Panjang Kontrak</label>
						</div>
						<div class="row">
							<div class="col">
								<div class="form-group">
									<label>Start Date</label>
									<br /><span id="startdate"></span>
								</div>
							</div>
							<div class="col">
								<div class="form-group">
									<label>End Date</label>
									<br /><span id="enddate"></span>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<label>Besar nilai kontrak ?</label>
									<br /><span id="nilaikontrak"></span>
								</div>
							</div>

						</div>
					</div>
					<div class="card-footer">
						*
					</div>
				</div>

				<div class="card card-secondary">
					<div class="card-header">
						<h3 class="card-title">Calculation</h3>
					</div>
					<div class="card-body">
						<!--  -->
						<div class="col">
							<div class="row">
								<div class="col-sm-6">
									<div class="form-group">
										<label>Discount Rate</label>
										<br /><span id="dr"></span>
									</div>
								</div>
								<div class="col-sm-6">
									<div class="form-group">
										<label>Payment Amount Term</label>
										<br /><span id="pat"></span>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-6">
									<div class="form-group">
										<label>Term of Payment</label>
										<br /><span id="top"></span>
									</div>
								</div>
								<div class="col-sm-6">
									<div class="form-group">
										<label>Awal Bulan / Akhir Bulan</label>
										<br /><span id="awak"></span>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-6">
									<div class="form-group">
										<label>Frekuensi Pembayaran</label>
										<br /><span id="frekuensi_pembayaran"></span>
									</div>
								</div>
								<div class="col-sm-6">
									<div class="form-group">
										<label>Payment Date</label>
										<br /><span id="pd"></span>
									</div>
								</div>
							</div>
						</div>
						<!--  -->
						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<label>Prepaid</label>
									<br /><span id="prepaid"></span>
								</div>
							</div>
						</div>
					</div>
					<div class="card-footer">
						*
					</div>
				</div>

				<div class="card card-secondary">
					<div class="card-header">
						<h3 class="card-title">Detail Contract</h3>
					</div>
					<div class="card-body">
						<!--  -->
						<div class="col">
							<div class="row">
								<div class="col-sm-6">
									<div class="form-group">
										<label>Status PPN</label>
										<br /><span id="status_ppn"></span>
									</div>
								</div>
								<div class="col-sm-6">
									<div class="form-group">
										<label>PPN</label>
										<br /><span id="ppn"></span>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-6">
									<div class="form-group">
										<label>Jumlah Unit</label>
										<br /><span id="jumlah_unit"></span>
									</div>
								</div>
								<div class="col-sm-6">
									<div class="form-group">
										<label>Satuan</label>
										<br /><span id="satuan"></span>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-6">
									<div class="form-group">
										<label>Nilai Asumsi Perpanjangan</label>
										<br /><span id="nilai_asumsi"></span>
									</div>
								</div>
								<div class="col-sm-6">
									<div class="form-group">
										<label>Tanggal Perpanjangan</label>
										<br /><span id="tgl_perpanjangan"></span>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="card-footer">
						*
					</div>
				</div>
			</form>
		</div>
		<!-- /.container-fluid -->
	</section>
	<section class="content col-lg-6 connectedSortable">
		<div class="container-fluid">
			<?php $this->load->view('admin/showpdf'); ?>
		</div>
	</section>
</div>
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
<!-- insert just before the closing body tag </body> -->
<!-- <script src='https://cdnjs.cloudflare.com/ajax/libs/pdfobject/2.1.1/pdfobject.js'></script>
    <script>
    var options = {
      pdfOpenParams: { scrollbar: '1', toolbar: '1', statusbar: '1', navpanes: '1' }
    };

    PDFObject.embed("https://swingtradingindo.com/wp-content/uploads/2020/01/ebook-jesse-livermore.pdf", false, options);
    </script> -->
