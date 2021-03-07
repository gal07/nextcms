


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
                            <form id="form_validation" method="POST" action="<?= base_url().'cms-admin/category/update/'.$datacategory->id ?>">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input value="<?= $datacategory->category ?>" type="text" class="form-control" name="category" required>
                                        <label class="form-label">Nama Kategori</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Color</label>
                                    <select name="color" class="form-control" required>
                                            <option value="">Choose Color</option>
                                            <option <?= ($datacategory->color === 'world' ? 'selected':'') ?> value="world">Blue</option>
                                            <option <?= ($datacategory->color === 'travel' ? 'selected':'') ?> value="travel">Orange</option>
                                            <option <?= ($datacategory->color === 'tech' ? 'selected':'') ?> value="tech">Apple Green</option>
                                            <option <?= ($datacategory->color === 'fashion' ? 'selected':'') ?> value="fashion">Purple</option>
                                            <option <?= ($datacategory->color === 'video' ? 'selected':'') ?> value="video">Yellow</option>
                                            <option <?= ($datacategory->color === 'sport' ? 'selected':'') ?> value="sport">Purple - Blue</option>
                                            <option <?= ($datacategory->color === 'food' ? 'selected':'') ?> value="food">Light Green</option>
                                            <option <?= ($datacategory->color === 'features' ? 'selected':'') ?> value="features">Brown</option>
                                    </select>
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
