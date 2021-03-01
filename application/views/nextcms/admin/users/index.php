
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>
                    Users
                </h2>
            </div>

            <!-- Basic Examples -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">

                        <!-- Alert -->
                        <?php 
                           $sessusr=$this->session->flashdata('message'); 

                           if(isset($sessusr)){
                            echo $this->alerts->launch($this->session->flashdata('message'),$this->session->flashdata('class'));
                           }
                        ?>
                        <!-- Alert -->

                        <div class="header">
                        <h2><?= $title ?></h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="<?= base_url().'cms-admin/users/create/' ?>">Add User</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Username</th>
                                            <th>Email</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Name</th>
                                            <th>Username</th>
                                            <th>Email</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php
                                        foreach( $datauser as $value ): ?>
                                        <tr>
                                            <td><?= $value->fullname ?></td>
                                            <td><?= $value->username ?></td>
                                            <td><?= $value->email ?></td>
                                            <td><?= ($value->status == 1 ? 'Aktif':'Tidak Aktif') ?></td>
                                            <td>

                                            <a href="<?= base_url().'cms-admin/users/update/'.$value->id ?>" type="button" class="btn btn-primary btn-sm waves-effect waves-circle waves-float">
                                                <i class="material-icons">mode_edit</i>
                                            </a>

                                            <a href="<?= base_url().'cms-admin/users/delete/'.$value->id ?>" type="button" class="btn btn-danger btn-sm waves-effect waves-circle waves-float">
                                                <i class="material-icons">delete</i>
                                            </a>

                                            </td>
                                        </tr>
                                        <?php endforeach;?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Basic Examples -->
        </div>
    </section>