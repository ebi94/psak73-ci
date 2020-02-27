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
    <!-- Input Data  -->
    <div class="card card-secondary">
      <div class="card-header">
        <h3 class="card-title">Contract Form</h3>

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
              <label>Nama Perusahaan / PT</label>
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
              <label>Nomor Kontrak</label>
              <input class="form-control" type="text" name="nomor_kontrak" id="nomorkontrak">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="form-group">
              <label>Vendor</label>
              <input class="form-control" type="text" name="vendor" id="vendor">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="form-group">
              <label>Jenis Sewa</label>
              <input class="form-control" name="jenis_sewa" type="text" id="jenissewa" >
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
              <input class="form-control" type="text" name="ns_a" id="nsa">
            </div>
          </div>
          
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="form-group">
              <label>b. Apakah kontrak dinegosiasikan dengan kontrak lain ?</label>
              <input class="form-control" type="text" name="ns_b" id="nsb">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="form-group">
              <label>c. 1. Apakah kontrak mengandung opsi perpanjangan ?</label>
              <input class="form-control" type="text" name="ns_c1" id="nsc1">
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
              <input class="form-control" type="text" name="ns_d1" id="nsd1">
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
      </div>
      <div class="card-body">
        <!--  -->
        <div class="col">
          <div class="row">
            <div class="col-sm-12">
              <div class="form-group">
                <label>1. Certain Asset ? *</label>
                <select class="form-control" name="is_1" id="is1">
                  <option>Yes/No</option>
                  <option>Yes</option>
                  <option>No</option>
                </select>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-12">
              <div class="form-group">
                <label>2. Right to Operate ? *</label>
                <select class="form-control" name="is_2" id="is2">
                  <option>Yes/No</option>
                  <option>Yes</option>
                  <option>No</option>
                </select>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-12">
              <div class="form-group">
                <label>3. Control of the Output or other utility ? *</label>
                <select class="form-control" name="is_3" id="is3">
                  <option>Yes/No</option>
                  <option>Yes</option>
                  <option>No</option>
                </select>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-12">
              <div class="form-group">
                <label>4. Control Physical Asset ? *</label>
                <select class="form-control" name="is_4" id="is4>
                  <option value="">Yes/No</option>
                  <option value="1">Yes</option>
                  <option value="0">No</option>
                </select>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-12">
              <div class="form-group">
                <label>5. Contract Price ? *</label>
                <select class="form-control" name="is_5" id="is5">
                  <option value="">Yes/No</option>
                  <option value="1">Yes</option>
                  <option value="0">No</option>
                </select>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-12">
              <div class="form-group">
                <label>6. Output used by third party ? *</label>
                <select class="form-control" name=ïs_6 id=ïs6>
                  <option value="">Yes/No</option>
                  <option value="1">Yes</option>
                  <option value="0">No</option>
                </select>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-12">
              <div class="form-group">
                <label>7. Right to control the use of Asset ? *</label>
                <select class="form-control" name="is_7" id="is7">
                  <option value="">Yes/No</option>
                  <option value="1">Yes</option>
                  <option value="0">No</option>
                </select>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <label>Apakah kontrak Sewa terdiri dari beberapa komponen ?</label>
                <input class="form-control" type="text" name="komponen" id="komponen">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <label>Lokasi sewa ?</label>
                <input class="form-control" type="text" name="lokasi" id="lokasi">
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
              <input class="form-control" type="date" placeholder="01/01/20" name="start_date" id="startdate">
            </div>
          </div>
          <div class="col">
            <div class="form-group">
              <label>End Date</label>
              <input class="form-control" type="date" placeholder="01/01/20" name="end_date" id="enddate">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="form-group">
              <label>Besar nilai kontrak ?</label>
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
    <div  class="col-md-2">
      <button type="submit" id="add_summary" class="btn btn-info col-md-12">Save</button>
    </div>
    <div  class="col-md-2">
      <input type="cancel" class="btn btn-block btn-primary" value="Batalkan">
    </div>
  </div>
  <div class="col"></div>

  </form>
          </div>
        </section>
      </div>
      <div class="modal-footer justify-content-between">
        <button type="submit" id="add_summary" class="btn btn-info col-md-12">Save</button>
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>