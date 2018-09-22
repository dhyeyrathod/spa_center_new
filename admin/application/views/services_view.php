<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Blank Page - Vali Admin</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?php $this->load->view('common/css') ?>
    </head>
    <body class="app sidebar-mini rtl">
        <!-- Navbar-->
        <?php $this->load->view('common/header') ?>
        <!-- Sidebar menu-->
        <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
        <?php $this->load->view('common/sidebar') ?>
        <main class="app-content">
            <div class="app-title">
                <div>
                    <h1><i class="fa fa-dashboard"></i>Services</h1>
                </div>
                <ul class="app-breadcrumb breadcrumb">
                    <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
                    <li class="breadcrumb-item"><a href="#">Blank Page</a></li>
                </ul>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="tile">
                        <div class="col-lg-12">
                            <?= form_open_multipart('services') ?>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Services Name</label>
                                    <input class="form-control" name="new_services" type="text" placeholder="Enter New Services" autofocus>
                                    <span class="text-danger"><?= form_error('new_services') ? form_error('new_services') : "" ?></span>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Services Description</label>
                                    <textarea class="form-control" name="description" rows="3"></textarea>
                                    <span class="text-danger"><?= form_error('description') ? form_error('description') : "" ?></span>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile">Image Upload</label>
                                    <input class="form-control-file" name="spa_images" multiple="" type="file" aria-describedby="fileHelp">
                                    <small class="form-text text-muted" id="fileHelp">For upload multiple image hold conroll key and select multiple image</small>
                                </div>
                                <button class="btn btn-primary" type="submit">Submit</button>
                            <?= form_close() ?> 
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="tile">
                        <div class="tile-body">
                            <table class="table table-hover table-bordered" id="sampleTable">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Services Name</th>
                                        <th>status</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php foreach ($all_services_key as $key => $all_services_data) : ?>
                                    <tr>
                                        <td><?= $key + 1 ?></td>
                                        <td><?= $all_services_data->services_name ?></td>
                                        <td><?= $all_services_data->status ?></td>
                                        <td><a href=""><button class="btn btn-primary">Edit</button></a></td>
                                        <td><a href="<?= base_url('services/delete_services') ?>/<?= $this->friend->base64url_encode($all_services_data->id) ?>"><button class="btn btn-danger">Delete</button></a></td>
                                    </tr>    
                                <?php endforeach ; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <!-- Essential javascripts for application to work-->
        <?php $this->load->view('common/js') ?>
        <script src="https://cdn.ckeditor.com/4.10.0/standard/ckeditor.js"></script>
        <script type="text/javascript" src="<?= base_url('assets') ?>/js/plugins/jquery.dataTables.min.js"></script>
        <script type="text/javascript" src="<?= base_url('assets') ?>/js/plugins/dataTables.bootstrap.min.js"></script>
        <script type="text/javascript">$('#sampleTable').DataTable();</script>
        <script type="text/javascript">
            var success_services = '<?= $this->session->flashdata('success_services') ? $this->session->flashdata('success_services') : "" ?>';
            if (success_services) {
                swal("Success", success_services, "success");
            }
            CKEDITOR.replace( 'description' );
        </script>
    </body>
</html>