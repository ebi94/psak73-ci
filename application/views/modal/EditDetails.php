<!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <form action="<?php echo base_url('admin/edit'); ?>" method="post">
    <!-- Input Data  -->
    <div class="card card-secondary">
      <div class="card-header">
        <h3 class="card-title">Contract Form</h3>
        <input type="hidden" name="id" id="id">
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
              <label>Nama Perusahaan / PT</label>
              <input class="form-control" id="etitle" type="text" name="nama_pt">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-8">
            <div class="form-group">
              <label>Nomor Kontrak</label>
              <input class="form-control" id="enomorkontrak" type="text" name="nomor_kontrak">
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label for="exampleInputFile">Upload image</label>
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
              <label>Vendor</label>
              <input class="form-control" id="evendor" type="text" name="vendor">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-8">
            <div class="form-group">
              <label>Jenis Sewa</label>
              <input class="form-control" id="ejenissewa" name="jenis_sewa" type="text">
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label for="exampleInputFile">Upload image</label>
              <div class="custom-file">
                <input type="file" class="custom-file-input" id="customFile">
                <label class="custom-file-label" for="customFile">Choose file</label>
              </div>
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
          <div class="col-md-8">
            <div class="form-group">
              <label>a. Apakah terdapat modifikasi ?</label>
              <input class="form-control" type="text" id="ensa" name="ns_a">
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label for="exampleInputFile">Upload image</label>
              <div class="custom-file">
                <input type="file" class="custom-file-input" id="customFile">
                <label class="custom-file-label" for="customFile">Choose file</label>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-8">
            <div class="form-group">
              <label>b. Apakah kontrak dinegosiasikan dengan kontrak lain ?</label>
              <input class="form-control" type="text" id="ensb" name="ns_b">
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label for="exampleInputFile">Upload image</label>
              <div class="custom-file">
                <input type="file" class="custom-file-input" id="customFile">
                <label class="custom-file-label" for="customFile">Choose file</label>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-8">
            <div class="form-group">
              <label>c. 1. Apakah kontrak mengandung opsi perpanjangan ?</label>
              <input class="form-control" type="text" id="ensc1" name="ns_c1">
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label for="exampleInputFile">Upload image</label>
              <div class="custom-file">
                <input type="file" class="custom-file-input" id="customFile">
                <label class="custom-file-label" for="customFile">Choose file</label>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-8">
            <div class="form-group">
              <label>c. 2. Penyewa cukup pasti untuk mengeksekusi Opsi tersebut ?</label>
              <input class="form-control" type="text" id="ensc2" name="ns_c2">
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label for="exampleInputFile">Upload image</label>
              <div class="custom-file">
                <input type="file" class="custom-file-input" id="customFile">
                <label class="custom-file-label" for="customFile">Choose file</label>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-8">
            <div class="form-group">
              <label>d. 1. Apakah kontrak mengandung Opsi terminasi ?</label>
              <input class="form-control" type="text" id="ensd1" name="ns_d1">
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label for="exampleInputFile">Upload image</label>
              <div class="custom-file">
                <input type="file" class="custom-file-input" id="customFile">
                <label class="custom-file-label" for="customFile">Choose file</label>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-8">
            <div class="form-group">
              <label>d. 2. Penyewa cukup pasti untuk tidak mengeksekusi Opsi tersebut ?</label>
              <input class="form-control" type="text" id="ensd2" name="ns_d2">
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label for="exampleInputFile">Upload image</label>
              <div class="custom-file">
                <input type="file" class="custom-file-input" id="customFile">
                <label class="custom-file-label" for="customFile">Choose file</label>
              </div>
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
            <div class="col-sm-8">
              <div class="form-group">
                <label>1. Certain Asset ? *</label>
                <select class="form-control" id="eis1" name="is_1">
                  <option>Yes/No</option>
                  <option>Yes</option>
                  <option>No</option>
                </select>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="exampleInputFile">Upload image *</label>
                <div class="custom-file">
                  <input type="file" class="custom-file-input" id="customFile">
                  <label class="custom-file-label" for="customFile">Choose</label>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-8">
              <div class="form-group">
                <label>2. Right to Operate ? *</label>
                <select class="form-control" id="eis2" name="is_2">
                  <option>Yes/No</option>
                  <option>Yes</option>
                  <option>No</option>
                </select>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="exampleInputFile">Upload image *</label>
                <div class="custom-file">
                  <input type="file" class="custom-file-input" id="customFile">
                  <label class="custom-file-label" for="customFile">Choose</label>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-8">
              <div class="form-group">
                <label>3. Control of the Output or other utility ? *</label>
                <select class="form-control" id="eis3" name="is_3">
                  <option>Yes/No</option>
                  <option>Yes</option>
                  <option>No</option>
                </select>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="exampleInputFile">Upload image *</label>
                <div class="custom-file">
                  <input type="file" class="custom-file-input" id="customFile">
                  <label class="custom-file-label" for="customFile">Choose</label>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-8">
              <div class="form-group">
                <label>4. Control Physical Asset ? *</label>
                <select class="form-control" id="eis4" name="is_4">
                  <option value="">Yes/No</option>
                  <option value="1">Yes</option>
                  <option value="0">No</option>
                </select>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="exampleInputFile">Upload image *</label>
                <div class="custom-file">
                  <input type="file" class="custom-file-input" id="customFile">
                  <label class="custom-file-label" for="customFile">Choose</label>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-8">
              <div class="form-group">
                <label>5. Contract Price ? *</label>
                <select class="form-control" id="eis5" name="is_5">
                  <option value="">Yes/No</option>
                  <option value="1">Yes</option>
                  <option value="0">No</option>
                </select>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="exampleInputFile">Upload image *</label>
                <div class="custom-file">
                  <input type="file" class="custom-file-input" id="customFile">
                  <label class="custom-file-label" for="customFile">Choose</label>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-8">
              <div class="form-group">
                <label>6. Output used by third party ? *</label>
                <select class="form-control" id="eis6" name=ïs_6>
                  <option value="">Yes/No</option>
                  <option value="1">Yes</option>
                  <option value="0">No</option>
                </select>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="exampleInputFile">Upload image *</label>
                <div class="custom-file">
                  <input type="file" class="custom-file-input" id="customFile">
                  <label class="custom-file-label" for="customFile">Choose</label>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-8">
              <div class="form-group">
                <label>7. Right to control the use of Asset ? *</label>
                <select class="form-control" id="eis7" name="is_7">
                  <option value="">Yes/No</option>
                  <option value="1">Yes</option>
                  <option value="0">No</option>
                </select>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="exampleInputFile">Upload image*</label>
                <div class="custom-file">
                  <input type="file" class="custom-file-input" id="customFile">
                  <label class="custom-file-label" for="customFile">Choose</label>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-8">
              <div class="form-group">
                <label>Apakah kontrak Sewa terdiri dari beberapa komponen ?</label>
                <input class="form-control" type="text" id="ekomponen" name="komponen">
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="exampleInputFile">Upload image</label>
                <div class="custom-file">
                  <input type="file" class="custom-file-input" id="customFile">
                  <label class="custom-file-label" for="customFile">Choose file</label>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-8">
              <div class="form-group">
                <label>Lokasi sewa ?</label>
                <input class="form-control" type="text" id="elokasi" name="lokasi">
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="exampleInputFile">Upload image</label>
                <div class="custom-file">
                  <input type="file" class="custom-file-input" id="customFile">
                  <label class="custom-file-label" for="customFile">Choose file</label>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--  -->
        <div class="row"><label>Panjang Kontrak</label></div>
        <div class="row">
          <div class="col">
            <div class="form-group">
              <label>Start Date</label>
              <input class="form-control" type="date" id="estartdate" placeholder="01/01/20" name="start_date">
            </div>
          </div>
          <div class="col">
            <div class="form-group">
              <label>End Date</label>
              <input class="form-control" type="date" id="eenddate" placeholder="01/01/20" name="end_date">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-8">
            <div class="form-group">
              <label>Besar nilai kontrak ?</label>
              <input class="form-control" type="text" onkeyup="splitInDots(this)" id="enilaikontrak" name="nilai_kontrak">
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label for="exampleInputFile">Upload image</label>
              <div class="custom-file">
                <input type="file" class="custom-file-input" id="customFile">
                <label class="custom-file-label" for="customFile">Choose file</label>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="card-footer">
        * Wajib diisi
      </div>
    </div>

  <div class="row">
    <div  class="col-md-2">
      <input type="submit" class="btn btn-block btn-primary" value="Simpan Data">
    </div>
    <div  class="col-md-2">
      <input type="button" class="btn btn-block btn-secondary" data-dismiss="modal" value="Batalkan">
    </div>
  </div>
  <div class="col"></div>

  </form>
  </div><!-- /.container-fluid -->
</section>
<!-- /.content -->
<!-- jQuery -->
<script src="<?php echo base_url('assets/AdminLTE'); ?>/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url('assets/AdminLTE'); ?>/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Select2 -->
<script src="<?php echo base_url('assets/AdminLTE'); ?>/plugins/select2/js/select2.full.min.js"></script>
<!-- Bootstrap4 Duallistbox -->
<script src="<?php echo base_url('assets/AdminLTE'); ?>/plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js"></script>
<!-- InputMask -->
<script src="<?php echo base_url('assets/AdminLTE'); ?>/plugins/moment/moment.min.js"></script>
<script src="<?php echo base_url('assets/AdminLTE'); ?>/plugins/inputmask/min/jquery.inputmask.bundle.min.js"></script>
<!-- date-range-picker -->
<script src="<?php echo base_url('assets/AdminLTE'); ?>/plugins/daterangepicker/daterangepicker.js"></script>
<!-- bootstrap color picker -->
<script src="<?php echo base_url('assets/AdminLTE'); ?>/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="<?php echo base_url('assets/AdminLTE'); ?>/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
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
    $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
    //Datemask2 mm/dd/yyyy
    $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
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
    $('#daterange-btn').daterangepicker(
      {
        ranges   : {
          'Today'       : [moment(), moment()],
          'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
          'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
          'Last 30 Days': [moment().subtract(29, 'days'), moment()],
          'This Month'  : [moment().startOf('month'), moment().endOf('month')],
          'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        },
        startDate: moment().subtract(29, 'days'),
        endDate  : moment()
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
    $('.my-colorpicker2').on('colorpickerChange', function(event) {
      $('.my-colorpicker2 .fa-square').css('color', event.color.toString());
    });
    $("input[data-bootstrap-switch]").each(function(){
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
      
      console.log(plain,reversed, reversedWithDots, normal);
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