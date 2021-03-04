
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>
                    Users
                </h2>
            </div>
            <!-- Basic Validation -->
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
                        </div>
                        <div class="body">
                            <form id="form_validation" method="POST" action="<?= base_url().'cms-admin/users/update/'.$datauser->id ?>">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input value="<?= $datauser->fullname ?>" type="text" class="form-control" name="fullname" required>
                                        <label class="form-label">Fullname</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input readonly value="<?= $datauser->username ?>" type="text" class="form-control" name="username" required>
                                        <label class="form-label">Username - Read Only</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input readonly value="<?= $datauser->email ?>" type="email" class="form-control" name="email" required>
                                        <label class="form-label">Email - Read Only</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="checkbox" id="checkbox" name="checkbox">
                                    <label for="checkbox">I have read and accept the terms</label>
                                </div>
                                <button class="btn btn-primary waves-effect" type="submit">SUBMIT</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Basic Validation -->
        </div>
    </section>

    