<?= $this->extend('Dashboard/layout/main') ?>

<?= $this->section('css') ?>
<link rel="stylesheet" href="<?= base_url() ?>/assets/dashboard/vendor/libs/datatables-bs5/datatables.bootstrap5.css">
<link rel="stylesheet" href="<?= base_url() ?>/assets/dashboard/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css">
<link rel="stylesheet" href="<?= base_url() ?>/assets/dashboard/vendor/libs/datatables-checkboxes-jquery/datatables.checkboxes.css">
<link rel="stylesheet" href="<?= base_url() ?>/assets/dashboard/vendor/libs/datatables-buttons-bs5/buttons.bootstrap5.css">
<link rel="stylesheet" href="<?= base_url() ?>/assets/dashboard/vendor/libs/datatables-rowgroup-bs5/rowgroup.bootstrap5.css">
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="container-xxl flex-grow-1 container-p-y">
            
            
            <h4 class="py-3 mb-4">
              <span class="text-muted fw-light">Penelitian /</span> Lembaga Penelitian
            </h4>
            
            <div class="card">
                <div class="card-header flex-column flex-md-row">
                    <div class="head-label text-center">
                        <h5 class="card-title mb-0">Lembaga Penelitian</h5>
                    </div>
                    <div class="buttonAdd text-end pt-3 pt-md-0">
                        <button class="btn btn-primary" tabindex="0" id="btn_tambah"  data-bs-toggle="modal" data-bs-target="#modalTambah" type="button">
                            <span><i class="bx bx-plus me-sm-1"></i> <span class="d-none d-sm-inline-block">Tambah Data</span></span>
                        </button>
                    </div>
                </div>
                <div class="card-datatable table-responsive">
                    <table id="table" class="datatables-basic table border-top">
                        <thead>
                            <tr>
                                <th>No. </th>
                                <th>Nama Lembaga</th>
                                <th>Email</th>
                                <th>Website</th>
                                <th>Alamat</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody></tbody>
                    </table>
                </div>
            </div>

            <div class="modal fade" id="modalTambah" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <form action="<?= base_url('Penelitian/Lembaga/add') ?>" method="post" id="formTambah">
                        <div class="modal-header">
                            <h5 class="modal-title" id="modalTambahTitle">Tambah Lembaga</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="row mb-3">
                                <label for="nama_lembaga" class="form-label">Nama Lembaga</label>
                                <input type="text" name="nama_lembaga" id="nama_lembaga" class="form-control" placeholder="Nama Lembaga">
                                <span class="text-danger error-text nama_lembaga_error"></span>
                            </div>
                            <div class="row mb-3">
                                <label for="email_lembaga" class="form-label">Email</label>
                                <input type="text" name="email_lembaga" id="email_lembaga" class="form-control" placeholder="Email Lembaga">
                                <span class="text-danger error-text email_lembaga_error"></span>
                            </div>
                            <div class="row mb-3">
                                <label for="website_lembaga" class="form-label">Website</label>
                                <input type="text" name="website_lembaga" id="website_lembaga" class="form-control" placeholder="Website Lembaga">
                                <span class="text-danger error-text website_lembaga_error"></span>
                            </div>
                            <div class="row mb-3">
                                <label for="alamat_lembaga" class="form-label">Alamat</label>
                                <textarea id="alamat_lembaga" name="alamat_lembaga" class="form-control" placeholder="Alamat Lembaga"></textarea>
                                <span class="text-danger error-text alamat_lembaga_error"></span>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Tutup</button>
                            <button type="submit" class="btn btn-primary">Tambah</button>
                        </div>
                    </form>
                </div>
                </div>
            </div>

            <div class="modal fade" id="modalEdit" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <form action="<?= base_url('Penelitian/Lembaga/update') ?>" method="post" id="formEdit">
                        <div class="modal-header">
                            <h5 class="modal-title" id="modalEditTitle">Edit Lembaga</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <input type="hidden" name="id_edit" id="id_edit" value="">
                            <div class="row mb-3">
                                <label for="nama_lembaga_edit" class="form-label">Nama Lembaga</label>
                                <input type="text" name="nama_lembaga_edit" id="nama_lembaga_edit" class="form-control" placeholder="Nama Lembaga">
                                <span class="text-danger error-text nama_lembaga_edit_error"></span>
                            </div>
                            <div class="row mb-3">
                                <label for="email_lembaga_edit" class="form-label">Email</label>
                                <input type="text" name="email_lembaga_edit" id="email_lembaga_edit" class="form-control" placeholder="Email Lembaga">
                                <span class="text-danger error-text email_lembaga_edit_error"></span>
                            </div>
                            <div class="row mb-3">
                                <label for="website_lembaga_edit" class="form-label">Website</label>
                                <input type="text" name="website_lembaga_edit" id="website_lembaga_edit" class="form-control" placeholder="Website Lembaga">
                                <span class="text-danger error-text website_lembaga_edit_error"></span>
                            </div>
                            <div class="row mb-3">
                                <label for="alamat_lembaga_edit" class="form-label">Alamat</label>
                                <textarea id="alamat_lembaga_edit" name="alamat_lembaga_edit" class="form-control" placeholder="Alamat Lembaga"></textarea>
                                <span class="text-danger error-text alamat_lembaga_edit_error"></span>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Tutup</button>
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </form>
                </div>
                </div>
            </div>
            
            
            
            
                      </div>
<?= $this->endSection() ?>


<?= $this->section('js') ?>
<script src="<?= base_url() ?>/assets/dashboard/vendor/libs/datatables-bs5/datatables-bootstrap5.js"></script>

<script src="../../assets/js/tables-datatables-basic.js"></script>
<script>
    $(document).ready(function() {
        $('#table').DataTable({
            processing: true,
            serverSide: true,
            ajax: {
                url: '<?= base_url() ?>/Penelitian/Lembaga/table',
                method: 'POST'
            },
            columnDefs: [
                { 
                    "targets": [0],
                    "data": "0",
                    "orderable": false,
                }, 
                { 
                    "targets": [1],
                    "data": "2",
                }, 
                
                { 
                    "targets": [2],
                    "data": "3",
                }, 
                { 
                    "targets": [3],
                    "data": "4",
                }, 
                { 
                    "targets": [4],
                    "data": "5",
                }, 
                { 
                    "targets": [5],
                    "data": "6",
                    "orderable": false,
                }, 
            ],
        });

    });

    $("#formTambah").submit(function (e) { 
    e.preventDefault();
    var form = this;
    $.ajax({
           url:$(form).attr('action'),
           method:$(form).attr('method'),
           data:new FormData(form),
           processData:false,
           dataType:'json',
           contentType:false,
           beforeSend:function(){
              $(form).find('span.error-text').text('');
           },
           success:function(data){
                 if($.isEmptyObject(data.error)){
                     if(data.code == 1){
                         $(form)[0].reset();
                         $('#table').DataTable().ajax.reload(null, false);
                         $('#modalTambah').modal('hide');
                         
                         swal('Berhasil tambah data!', {
                            icon: 'success',
                         })
                     }else{
                         alert(data.msg);
                     }
                 }else{
                     $.each(data.error, function(prefix, val){
                         $(form).find('span.'+prefix+'_error').text(val);
                     });
                 }
           }
        });
    });

    $("#formEdit").submit(function (e) { 
    e.preventDefault();
    var form = this;
    $.ajax({
           url:$(form).attr('action'),
           method:$(form).attr('method'),
           data:new FormData(form),
           processData:false,
           dataType:'json',
           contentType:false,
           beforeSend:function(){
              $(form).find('span.error-text').text('');
           },
           success:function(data){
                 if($.isEmptyObject(data.error)){
                     if(data.code == 1){
                         $(form)[0].reset();
                         $('#table').DataTable().ajax.reload(null, false);
                         $('#modalEdit').modal('hide'); 
                         swal('Berhasil edit data!', {
                            icon: 'success',
                         })
                     }else{
                         alert(data.msg);
                     }
                 }else{
                     $.each(data.error, function(prefix, val){
                         $(form).find('span.'+prefix+'_error').text(val);
                     });
                 }
           }
        });
    });

    $(document).on('click', '#btn_edit', function(e) {
		e.preventDefault(); 
		id = $(this).data('kode'); 
		$.ajax({
			url: '<?php echo base_url("Penelitian/Lembaga/get") ?>',
			type: 'POST',
			dataType: 'JSON',
			data: {
				id: id,
            }
		})
		.done(function(data) {
			if (data) {
                $('#id_edit').val(data.id_lembaga_penelitian);
				$('#nama_lembaga_edit').val(data.nama_lembaga);
				$('#email_lembaga_edit').val(data.email_lembaga);
				$('#website_lembaga_edit').val(data.website_lembaga);
				$('#alamat_lembaga_edit').val(data.alamat_lembaga);
                $('#modalEdit').modal('show');
            } else {
				toastConfig(data.status, data.message);
			}
		})
		.fail(function() {
			console.log("error");
		})
		.always(function() {
			console.log("complete");
		});
	});

    $(document).on('click', '#btn_hapus', function(e) {
		e.preventDefault();
        id = $(this).data('kode');
        hapus(id); 
	});

    function hapus(kdKode) {
        swal({
            title: 'Yakin Ingin Hapus Data?',
            text: 'Setelah dihapus, anda tidak akan bisa mengembalikan data ini.',
            icon: 'warning',
        	buttons: true,
        	dangerMode: true,
	    })
        .then((willDelete) => {
            if (willDelete) { 
			    $.ajax({
				    url: "<?php echo base_url('Penelitian/Lembaga/delete') ?>",
				    data: {
					    id: id,
				    },
				    type: 'POST',
				    dataType: 'json',
				    success: function(data) {
					    $('#table').DataTable().ajax.reload(null, false);
					    swal('Data berhasil dihapus!', {
						    icon: 'success',
					    })
				    }
			    });
		    } else {
			    swal('Tidak jadi menghapus data!');
	        }
	    });
    }
</script>
<?= $this->endSection() ?>