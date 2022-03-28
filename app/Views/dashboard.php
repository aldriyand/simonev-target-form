<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Dashboard</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">

    <!-- Styles -->
    <link rel="stylesheet" href="<?= base_url('assets/css/login.css') ?>">
    <!-- Favicon -->
    <link rel="shortcut icon" href="<?= base_url('favicon.ico') ?>" />

    <!-- Library / Plugin Css Build -->
    <link rel="stylesheet" href="<?= base_url('assets/css/core/libs.min.css') ?>" />

    <!-- Hope Ui Design System Css -->
    <link rel="stylesheet" href="<?= base_url('assets/css/hope-ui.min.css?v=1.1.0') ?>" />

    <!-- Custom Css -->
    <link rel="stylesheet" href="<?= base_url('assets/css/custom.min.css?v=1.1.0') ?>" />

    <style>
        :root {
            font-size: smaller;
        }
    </style>
</head>

<body>
    <!-- loader Start -->
    <div id="loading">
        <div class="loader simple-loader">
            <div class="loader-body"></div>
        </div>
    </div>
    <!-- loader END -->
    <aside class="sidebar sidebar-default navs-rounded-all ">
        <div class="sidebar-header d-flex align-items-center justify-content-start">
            <a href="<?= site_url('/') ?>" class="navbar-brand">
            </a>
            <div class="sidebar-toggle bg-success" data-toggle="sidebar" data-active="true">
                <i class="icon">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M4.25 12.2744L19.25 12.2744" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path d="M10.2998 18.2988L4.2498 12.2748L10.2998 6.24976" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                </i>
            </div>
        </div>
        <div class="sidebar-body pt-0 data-scrollbar">
            <div class="sidebar-list">
                <!-- Sidebar Menu Start -->
                <ul class="navbar-nav iq-main-menu" id="sidebar-menu">
                    <li class="nav-item static-item">
                        <a class="nav-link static-item disabled" href="#" tabindex="-1">
                            <span class="default-icon">Menu</span>
                            <span class="mini-icon">-</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= site_url() == '/' ?> ? 'active bg-success' : '' }}" aria-current="page" href="<?= site_url('/') ?>">
                            <i class="icon">
                                <svg width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path opacity="0.4" d="M16.0756 2H19.4616C20.8639 2 22.0001 3.14585 22.0001 4.55996V7.97452C22.0001 9.38864 20.8639 10.5345 19.4616 10.5345H16.0756C14.6734 10.5345 13.5371 9.38864 13.5371 7.97452V4.55996C13.5371 3.14585 14.6734 2 16.0756 2Z" fill="currentColor"></path>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M4.53852 2H7.92449C9.32676 2 10.463 3.14585 10.463 4.55996V7.97452C10.463 9.38864 9.32676 10.5345 7.92449 10.5345H4.53852C3.13626 10.5345 2 9.38864 2 7.97452V4.55996C2 3.14585 3.13626 2 4.53852 2ZM4.53852 13.4655H7.92449C9.32676 13.4655 10.463 14.6114 10.463 16.0255V19.44C10.463 20.8532 9.32676 22 7.92449 22H4.53852C3.13626 22 2 20.8532 2 19.44V16.0255C2 14.6114 3.13626 13.4655 4.53852 13.4655ZM19.4615 13.4655H16.0755C14.6732 13.4655 13.537 14.6114 13.537 16.0255V19.44C13.537 20.8532 14.6732 22 16.0755 22H19.4615C20.8637 22 22 20.8532 22 19.44V16.0255C22 14.6114 20.8637 13.4655 19.4615 13.4655Z" fill="currentColor"></path>
                                </svg>
                            </i>
                            <span class="item-name">Dashboard</span>
                        </a>
                    </li>
                </ul>
                <!-- Sidebar Menu End -->
            </div>
        </div>
        <div class="sidebar-footer"></div>
    </aside>
    <!-- Page Content -->
    <main class="main-content">
        <div class="position-relative">
            <!--Nav Start-->
            <nav class="nav navbar navbar-expand-lg navbar-light iq-navbar">
                <div class="container-fluid navbar-inner">
                    <a href="<?= site_url() == '/' ?>" class="navbar-brand">
                        <!--Logo start-->
                        <img width="30" src="">
                        <!--logo End-->
                        <h4 class="logo-title">Test</h4>
                    </a>
                    <div class="sidebar-toggle bg-success" data-toggle="sidebar" data-active="true">
                        <i class="icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
                            </svg>
                        </i>
                    </div>
                    <ul class="navbar-nav ms-auto align-items-center navbar-list mb-2 mb-lg-0">
                        <li class="nav-item dropdown" style="margin-top: 0.3rem;">
                            <a class="nav-link py-0 d-flex align-items-center" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="" alt="User-Profile" class="img-fluid avatar avatar-50 avatar-rounded" onerror="this.onerror=null; this.src='<?= base_url('assets/images/avatars/01.png') ?>'">
                                <div class="caption ms-3 d-none d-md-block ">
                                    <h6 class="mb-0 caption-title">Test User</h6>
                                    <p class="mb-0 caption-sub-title">Test Role</p>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </nav> <!-- Nav Header Component Start -->
            <div class="container-fluid">
                <div class="col-md-12">
                    <div class="card" style="padding: 0.8rem;">
                        <div class="card-body">
                            <div class="row mb-3" style="margin-top: 1%;">
                                <div class="col-md-10"></div>
                                <div class="col-md-2 d-flex justify-content-end">
                                    <button class="btn btn-primary" onclick="add_target()"><i class="fas fa-plus"></i> Add</button>
                                </div>
                            </div>
                            <div class="row">
                                <table id="test_table" class="table table-striped" style="font-size: x-small;">
                                    <thead>
                                        <tr>
                                            <th>ID Target</th>
                                            <th>ID Satker</th>
                                            <th>ID Subsatker</th>
                                            <th>ID Program</th>
                                            <th>ID Kegiatan</th>
                                            <th>ID Subkegiatan</th>
                                            <th>ID Rekening</th>
                                            <th>No. Rekening</th>
                                            <th>Jml Pagu</th>
                                            <th>1</th>
                                            <th>2</th>
                                            <th>3</th>
                                            <th>4</th>
                                            <th>5</th>
                                            <th>6</th>
                                            <th>7</th>
                                            <th>8</th>
                                            <th>9</th>
                                            <th>10</th>
                                            <th>11</th>
                                            <th>12</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($targets as $key => $item) : ?>
                                            <tr>
                                                <td><?php echo $item->id_target; ?></td>
                                                <td><?php echo $item->id_satker; ?></td>
                                                <td><?php echo $item->id_subsatker; ?></td>
                                                <td><?php echo $item->id_program; ?></td>
                                                <td><?php echo $item->id_kegiatan; ?></td>
                                                <td><?php echo $item->id_subkegiatan; ?></td>
                                                <td><?php echo $item->id_rekning; ?></td>
                                                <td><?php echo $item->nm_rekening; ?></td>
                                                <td><?php echo $item->jml_pagu; ?></td>
                                                <td><?php echo $item->bulan_1; ?></td>
                                                <td><?php echo $item->bulan_2; ?></td>
                                                <td><?php echo $item->bulan_3; ?></td>
                                                <td><?php echo $item->bulan_4; ?></td>
                                                <td><?php echo $item->bulan_5; ?></td>
                                                <td><?php echo $item->bulan_6; ?></td>
                                                <td><?php echo $item->bulan_7; ?></td>
                                                <td><?php echo $item->bulan_8; ?></td>
                                                <td><?php echo $item->bulan_9; ?></td>
                                                <td><?php echo $item->bulan_10; ?></td>
                                                <td><?php echo $item->bulan_11; ?></td>
                                                <td><?php echo $item->bulan_12; ?></td>
                                                <td>
                                                    <button class="btn btn-warning" onclick="edit_target('<?php echo $item->id_target; ?>')" style="font-size: x-small;"><i class="fas fa-edit"></i></button>
                                                    <button class="btn btn-danger" onclick="delete_target('<?php echo $item->id_target; ?>')" style="font-size: x-small;"><i class="fas fa-trash"></i></button>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- Bootstrap modal -->
    <div class="modal fade" id="modal_form" role="dialog">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Form Target</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body form">
                    <form action="#" id="form" class="form-horizontal">
                        <input type="hidden" value="" name="id_target" />
                        <div class="form-body">
                            <div class="row mb-1">
                                <label class="control-label col-form-label col-md-3">Satker</label>
                                <div class="col-md-9">
                                    <select class="form-select" name="id_satker" id="satker" aria-label="Column" required>
                                        <option value="">Select One</option>
                                        <?php foreach ($satker as $item) : ?>
                                            <option value="<?= $item->id_satker ?>"><?= $item->nm_satker ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-1">
                                <label class="control-label col-form-label col-md-3">Subatker</label>
                                <div class="col-md-9">
                                    <select class="form-select" name="id_subsatker" id="subsatker" aria-label="Column">
                                        <option value="">Select One</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-1">
                                <label class="control-label col-form-label col-md-3">Program</label>
                                <div class="col-md-9">
                                    <select class="form-select" name="id_program" id="program" aria-label="Column">
                                        <option value="">Select One</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-1">
                                <label class="control-label col-form-label col-md-3">Kegiatan</label>
                                <div class="col-md-9">
                                    <select class="form-select" name="id_kegiatan" id="kegiatan" aria-label="Column">
                                        <option value="">Select One</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-1">
                                <label class="control-label col-form-label col-md-3">Subkegiatan</label>
                                <div class="col-md-9">
                                    <select class="form-select" name="id_subkegiatan" id="subkegiatan" aria-label="Column">
                                        <option value="">Select One</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-1">
                                <label class="control-label col-form-label col-md-3">Rekening</label>
                                <div class="col-md-9">
                                    <select class="form-select" name="id_rekening" id="rekening" aria-label="Column">
                                        <option value="">Select One</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-1">
                                <label class="control-label col-form-label col-md-3">Nm Rekening</label>
                                <div class="col-md-9">
                                    <input name="nm_rekening" id="nm_rekening" placeholder="Nm Rekening" class="form-control" type="text">
                                </div>
                            </div>
                            <div class="row mb-1">
                                <label class="control-label col-form-label col-md-3">Jml Pagu</label>
                                <div class="col-md-9">
                                    <div class="input-group">
                                        <input name="jml_pagu" id="jml_pagu" placeholder="Jml Pagu" class="form-control" type="text">
                                        <button type="button" id="btnAverage" class="btn btn-primary" onclick="averagePagu()">Bagi Rata</button>
                                    </div>
                                </div>
                            </div>
                            <?php for ($i=1; $i < 13 ; $i++): ?>
                                <div class="row mb-1">
                                    <label class="control-label col-form-label col-md-3">Bulan <?= $i ?></label>
                                    <div class="col-md-9">
                                        <input name="bulan_<?= $i ?>" id="bulan_<?= $i ?>" placeholder="Bulan <?= $i ?>" class="form-control" type="text">
                                    </div>
                                </div>
                            <?php endfor ?>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" id="btnSave" onclick="save()" class="btn btn-primary">Save</button>
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
                </div>
            </div>
        </div>
    </div>
    <!-- End Bootstrap modal -->

    <!-- Library Bundle Script -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="<?= base_url('assets/js/core/libs.min.js')?>"></script>
    <script src="<?= base_url('assets/js/core/external.min.js')?>"></script>
    <script src="<?= base_url('assets/js/charts/dashboard.js')?>" defer></script>
    <script src="<?= base_url('assets/js/hope-ui.js')?>" defer></script>

    <script src="https://code.jquery.com/jquery-3.6.0.js"
        integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js"></script>
    <script type="text/javascript">
        var rules = {
            id_satker: {
                required: true
            }
        };
        $('#form').validate(rules);

        $(document).ready(function() {
            $('#test_table').DataTable();

            $('#satker').on('change', function() {
                var idSatker = $(this).val();
                if (idSatker) {
                    $.ajax({
                        url: "<?php echo site_url('dashboard/fetch_subsatker/') ?>" + idSatker,
                        type: 'GET',
                        success: function(data) {
                            $('#subsatker').html('<option value="">Select One</option>' + data)
                            if (data) {
                                $('#subsatker').rules('add', {required: true});
                            } else {
                                $('#subsatker').rules('remove');
                            }
                            $('#program').html('<option value="">Select One</option>')
                            $('#kegiatan').html('<option value="">Select One</option>')
                            $('#subkegiatan').html('<option value="">Select One</option>')
                        }
                    })
                } else {
                    $('#subsatker').html('<option value="">Select One</option>');
                    $('#program').html('<option value="">Select One</option>')
                    $('#kegiatan').html('<option value="">Select One</option>')
                    $('#subkegiatan').html('<option value="">Select One</option>')
                }
            })

            $('#subsatker').on('change', function() {
                var idSubsatker = $(this).val();
                var idSatker = $('#satker option:selected').val();
                if (idSubsatker) {
                    $.ajax({
                        url: "<?php echo site_url('dashboard/fetch_program/') ?>" + idSatker + "/" + idSubsatker,
                        type: 'GET',
                        success: function(data) {
                            $('#program').html('<option value="">Select One</option>' + data)
                            if (data) {
                                $('#program').rules('add', {required: true});
                            } else {
                                $('#program').rules('remove');
                            }
                            $('#kegiatan').html('<option value="">Select One</option>')
                            $('#subkegiatan').html('<option value="">Select One</option>')
                        }
                    })
                    $.ajax({
                        url: "<?php echo site_url('dashboard/fetch_rekening/') ?>" + idSubsatker,
                        type: 'GET',
                        success: function(data) {
                            $('#rekening').html('<option value="">Select One</option>' + data)
                            if (data) {
                                $('#rekening').rules('add', {required: true});
                                $('#nm_rekening').rules('add', {required: true});
                            } else {
                                $('#rekening').rules('remove');
                                $('#nm_rekening').rules('add', {required: true});
                            }
                            $('#kegiatan').html('<option value="">Select One</option>')
                            $('#subkegiatan').html('<option value="">Select One</option>')
                        }
                    })
                } else {
                    $('#program').html('<option value="">Select One</option>')
                    $('#kegiatan').html('<option value="">Select One</option>')
                    $('#subkegiatan').html('<option value="">Select One</option>')
                }
            })

            $('#rekening').on('change', function() {
                var str = $('#rekening option:selected').text();
                $('#nm_rekening').val(str.substring(str.indexOf('-') + 2));
                if (str != '') {
                    $.ajax({
                        url: "<?php echo site_url('dashboard/get_jml_pagu/') ?>" + $('#subsatker').val() + "/" + $('#rekening').val(),
                        type: 'GET',
                        success: function(data) {
                            $('#jml_pagu').val(data)
                        }
                    })
                }
            })

            $('#program').on('change', function() {
                var idProgram = $(this).val();
                if (idProgram) {
                    $.ajax({
                        url: "<?php echo site_url('dashboard/fetch_kegiatan/') ?>" + idProgram,
                        type: 'GET',
                        success: function(data) {
                            $('#kegiatan').html('<option value="">Select One</option>' + data)
                            if (data) {
                                $('#kegiatan').rules('add', {required: true});
                            } else {
                                $('#kegiatan').rules('remove');
                            }
                            $('#subkegiatan').html('<option value="">Select One</option>')
                        }
                    })
                } else {
                    $('#kegiatan').html('<option value="">Select One</option>')
                    $('#subkegiatan').html('<option value="">Select One</option>')
                }
            })

            $('#kegiatan').on('change', function() {
                var idKegiatan = $(this).val();
                if (idKegiatan) {
                    $.ajax({
                        url: "<?php echo site_url('dashboard/fetch_subkegiatan/') ?>" + idKegiatan,
                        type: 'GET',
                        success: function(data) {
                            $('#subkegiatan').html('<option value="">Select One</option>'+data)
                            if (data) {
                                $('#subkegiatan').rules('add', {required: true});
                            } else {
                                $('#subkegiatan').rules('remove');
                            }
                        }
                    })
                } else {
                    $('#subkegiatan').html('<option value="">Select One</option>')
                }
            })
        });

        function averagePagu() {
            const jmlPagu = $('#jml_pagu').val();
            const result = Number(jmlPagu) / 12;
            for (let index = 0; index < 12; index++) {
                $('#bulan_'+(String(index+1))).val(result)
            }
        }

        var save_method; //for save method string
        var table;

        function add_target() {
            save_method = 'add';
            $('#form')[0].reset(); // reset form on modals
            $('#modal_form').modal('show'); // show bootstrap modal
        }

        function edit_target(id) {
            save_method = 'update';
            $('#form')[0].reset(); // reset form on modals
            <?php header('Content-type: application/json'); ?>
            //Ajax Load data from ajax
            $.ajax({
                url: "<?php echo site_url('dashboard/get_by_id/') ?>" + id,
                type: "GET",
                dataType: "JSON",
                success: function(data) {
                    console.log(data);

                    $('#satker').html('<option value="'+data['target'].id_satker+'">'+data['satker'].nm_satker+'</option>');
                    $('#subsatker').html('<option value="'+data['target'].id_subsatker+'">'+data['subsatker'].nm_subsatker+'</option>');
                    $('#program').html('<option value="'+data['target'].id_program+'">'+data['program'].nm_prog+'</option>')
                    $('#kegiatan').html('<option value="'+data['target'].id_kegiatan+'">'+data['kegiatan'].nm_kgtn+'</option>')
                    $('#subkegiatan').html('<option value="'+data['target'].id_subkegiatan+'">'+data['subkegiatan'].nm_sub_kgtn+'</option>')
                    $('#rekening').html('<option value="'+data['target'].id_rekning+'">'+data['target'].id_rekning+'</option>')

                    $('[name="id_target"]').val(data['target'].id_target);
                    $('[name="id_satker"] select').val(data['target'].id_satker);
                    $('[name="id_subsatker select"]').val(data['target'].id_subsatker);
                    $('[name="id_program"] select').val(data['target'].id_program);
                    $('[name="id_subkegiatan select"]').val(data['target'].id_subkegiatan);
                    $('[name="id_rekening"] select').val(data['target'].id_rekning);
                    $('[name="nm_rekening"]').val(data['target'].nm_rekening);
                    $('[name="jml_pagu"]').val(data['target'].jml_pagu);
                    $('[name="bulan_1"]').val(data['target'].bulan_1);
                    $('[name="bulan_2"]').val(data['target'].bulan_2);
                    $('[name="bulan_3"]').val(data['target'].bulan_3);
                    $('[name="bulan_4"]').val(data['target'].bulan_4);
                    $('[name="bulan_5"]').val(data['target'].bulan_5);
                    $('[name="bulan_6"]').val(data['target'].bulan_6);
                    $('[name="bulan_7"]').val(data['target'].bulan_7);
                    $('[name="bulan_8"]').val(data['target'].bulan_8);
                    $('[name="bulan_9"]').val(data['target'].bulan_9);
                    $('[name="bulan_10"]').val(data['target'].bulan_10);
                    $('[name="bulan_11"]').val(data['target'].bulan_11);
                    $('[name="bulan_12"]').val(data['target'].bulan_12);
                    $('#modal_form').modal('show');
                    $('.modal-title').text('Edit Target');
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    console.log(jqXHR);
                    alert('Error get data from ajax');
                }
            });
        }

        function save() {
            $('#form').validate(rules);
            if(!$('#form').valid()) {
                Swal.fire({
                    icon: 'warning',
                    text: 'Please fill all required fields',
                    timer: 2000,
                    showCancelButton: false,
                    showConfirmButton: false
                })
                return;
            }

            var url;
            if (save_method == 'add') {
                url = "<?php echo site_url('dashboard/add_target') ?>";
            } else {
                url = "<?php echo site_url('dashboard/update_target') ?>";
            }

            $.ajax({
                url: url,
                type: "POST",
                data: $('#form').serialize(),
                dataType: "JSON",
                success: function(data) {
                    $('#modal_form').modal('hide');
                    Swal.fire({
                        icon: 'success',
                        title: 'Success',
                        timer: 2000,
                        showCancelButton: false,
                        showConfirmButton: false
                    })
                    location.reload();
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    alert('Error adding / update data');
                }
            });
        }

        function delete_target(id) {
            if (confirm('Are you sure want delete this data?')) {
                $.ajax({
                    url: "<?php echo site_url('dashboard/delete_by_id') ?>/" + id,
                    type: "POST",
                    dataType: "JSON",
                    success: function(data) {
                        Swal.fire({
                            icon: 'success',
                            title: 'Success',
                            timer: 2000,
                            showCancelButton: false,
                            showConfirmButton: false
                        })
                        location.reload();
                    },
                    error: function(jqXHR, textStatus, errorThrown) {
                        alert('Error deleting data');
                    }
                });
            }
        }
    </script>
</body>

</html>