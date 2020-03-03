<div class="alert alert-success" style="display: none" id="add-summary-success-alert" role="alert">
    <button type="button" class="close" data-dismiss="alert">x</button>
    <strong>Success! </strong> Data Successfuly added.
</div>
<div class="alert alert-success" style="display: none" id="add-summary-success-edit" role="alert">
    <button type="button" class="close" data-dismiss="alert">x</button>
    <strong>Success! </strong> Data Successfuly Updated.
</div>
<!-- Main content -->
<form enctype="multipart/form-data" name="form" role="form">
    <!-- Input Data  -->
    <div class="card card-secondary">
        <div class="card-header">
            <h3 class="card-title">Contract Form</h3>
            <input type="hidden" name="title" value="<?php echo $title; ?>">
            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-remove"></i></button>
            </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <div class="row">
                <div class="col-md-8">
                    <div class="form-group">
                        <label>Nama Perusahaan / PT *</label>
                        <input class="form-control" type="text" name="nama_pt" id="namapt">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="exampleInputFile">Upload file</label>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="customFile">
                            <label class="custom-file-label" for="customFile">Choose file</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Nomor Kontrak *</label>
                        <input class="form-control" type="text" name="nomor_kontrak" id="nomorkontrak">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Vendor *</label>
                        <input class="form-control" type="text" name="vendor" id="vendor">
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
            <h3 class="card-title">Jenis Sewa *</h3>
            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-remove"></i></button>
            </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Jenis Sewa</label>
                        <input class="form-control" name="jenis_sewa" type="text" id="jenissewa">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Serial Number / Nomor Polisi</label>
                        <input class="form-control" name="serialnumber" type="text" id="serialnumber">
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
                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-remove"></i></button>
            </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label>a. Apakah terdapat modifikasi ?</label>
                        <select class="form-control" name="nsa" id="nsa">
                            <option value="Yes">Yes</option>
                            <option value="No">No</option>
                        </select>
                    </div>
                </div>
            </div>
            
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label>a. 1. Tuliskan nomor kontrak original ?</label>
                        <input class="form-control" type="text" name="nsa1" id="nsa1">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label>b. Apakah kontrak dinegosiasikan dengan kontrak lain ?</label>
                        <select class="form-control" name="nsb" id="nsb">
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
                        <select class="form-control" name="nsc1" id="nsc1">
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
                        <input class="form-control" type="text" name="ns_c2" id="nsc2">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label>d. 1. Apakah kontrak mengandung Opsi terminasi ?</label>
                        <select class="form-control" name="nsd1" id="nsd1">
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
                        <input class="form-control" type="text" name="ns_d2" id="nsd2">
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
            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-remove"></i></button>
            </div>
        </div>
        <div class="card-body">
            <!--  -->
            <div class="col">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label>1. Certain Asset ? *</label>
                            <select class="form-control" name="is_1" id="is1">
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
                            <select class="form-control" name="is_2" id="is2">
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
                            <select class="form-control" name="is_3" id="is3">
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
                            <select class="form-control" name="is_4" id="is4">
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
                            <select class="form-control" name="is_5" id="is5">
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
                            <select class="form-control" name=is_6 id=is6>
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
                            <select class="form-control" name="is_7" id="is7">
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="card card-secondary">
                    <div class="card-header">
                        <h3 class="card-title">Komponen Sewa</h3>

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                            <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-remove"></i></button>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>1. Kontrak terdiri dari beberapa komponen (lease dan nonlease) ?</label>
                                <select class="form-control" name="kontrak_dari_beberapa_komponen" id="kontrak_dari_beberapa_komponen">
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>2. Tuliskan komponen dalam kontrak ?</label>
                                <input class="form-control" type="text" name="komponen_dalam_kontrak" id="komponen_dalam_kontrak">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>3. Komponen merupakan sewa ?</label>
                                <select class="form-control" name="komponen_merupakan_sewa" id="komponen_merupakan_sewa">
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>4. Penyewa mendapat manfaat dari penggunaan aset pendasar secara terpisah atau bersamaan dengan sumber daya lain yang tersedia untuk penyewa ?</label>
                                <select class="form-control" name="penyewa_mendapat_manfaat" id="penyewa_mendapat_manfaat">
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>5. Aset pendasar tersebut tidak memiliki ketergantungan yang tinggi dengan, maupun memiliki interelasi yang tinggi dengan, aset pendasar lainnya dalam kontrak ?</label>
                                <select class="form-control" name="aset_dasar" id="aset_dasar">
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        * Wajib diisi
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Lokasi sewa ? *</label>
                            <input class="form-control" type="text" name="lokasi" id="lokasi">
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
                        <label>Start Date *</label>
                        <input class="form-control" type="date" placeholder="01/01/20" name="start_date" id="startdate">
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label>End Date *</label>
                        <input class="form-control" type="date" placeholder="01/01/20" name="end_date" id="enddate">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Besar nilai kontrak ? *</label>
                        <input class="form-control" type="text" onkeyup="splitInDots(this)" name="nilai_kontrak" id="nilaikontrak">
                    </div>
                </div>

            </div>
        </div>
        <div class="card-footer">
            * Wajib diisi
        </div>
    </div>

    <div class="row">
        <div class="col-md-2">
            <button type="submit" id="add_summary" class="btn btn-info col-md-12">Lanjutkan</button>
        </div>
        <div class="col-md-2">
			<a href="<?php echo base_url(''); ?>">
            	<button class="btn btn-block btn-primary">Batalkan</button>
			</a>
        </div>
    </div>
    <div class="col"></div>

</form>
<!-- /.content -->
<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Select2 -->
<script src="plugins/select2/js/select2.full.min.js"></script>
<!-- Bootstrap4 Duallistbox -->
<script src="plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js"></script>
<!-- InputMask -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/inputmask/min/jquery.inputmask.bundle.min.js"></script>
<!-- date-range-picker -->
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- bootstrap color picker -->
<script src="plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Bootstrap Switch -->
<script src="plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- Page script -->
<script>
    $(function() {
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
                    'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
                },
                startDate: moment().subtract(29, 'days'),
                endDate: moment()
            },
            function(start, end) {
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

        $('.my-colorpicker2').on('colorpickerChange', function(event) {
            $('.my-colorpicker2 .fa-square').css('color', event.color.toString());
        });

        $("input[data-bootstrap-switch]").each(function() {
            $(this).bootstrapSwitch('state', $(this).prop('checked'));
        });

    })
</script>
<script type="text/javascript">
    function reverseNumber(input) {
        return [].map.call(input, function(x) {
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
