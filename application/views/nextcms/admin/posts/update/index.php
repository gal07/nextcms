<section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>EDITORS</h2>
            </div>

            <!-- CKEditor -->
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
                            <h2>
                                CKEDITOR
                                <small>CKEditor is a ready-for-use HTML text editor designed to simplify web content creation. Taken from <a href="http://ckeditor.com/" target="_blank">ckeditor.com</a></small>
                            </h2>
                        </div>
                        <div class="body">


                            <form enctype="multipart/form-data" id="form_validation" method="POST" action="<?= base_url().'cms-admin/posts/update/'.$dataposts->id ?>">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input value="<?= $dataposts->title ?>" type="text" class="form-control" name="title" required>
                                        <label class="form-label">Title</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input value="<?= $dataposts->slug ?>" type="text" class="form-control" name="slug" required>
                                        <label class="form-label">slug</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input value="<?= $dataposts->keyword ?>" type="text" class="form-control" name="seo" required>
                                        <label class="form-label">Seo</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input value="<?= $dataposts->description ?>" type="text" class="form-control" name="description" required>
                                        <label class="form-label">Description</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                   
                                     <label class="form-label">Image - Max 2MB</label>
                                     <input type="file" class="form-control" name="myfile">
                                     <a href="javascript:void(0);">
                                        <img height="200" src="<?= base_url().$dataposts->path.'/'.$dataposts->imagename ?>">
                                    </a>
                                </div>

                                <div class="form-group">
                                    <label class="form-label">Category</label>
                                    <select name="category" class="form-control" required>
                                        <?php foreach($datacategory as $value): ?>
                                            <option <?= ($value->id == $dataposts->category ? 'selected':'') ?> value="<?= $value->id ?>"><?= $value->category ?></option>
                                        <?php endforeach;?>
                                    </select>
                                </div>

                                <label class="form-label">Posts Body</label>
                                <textarea id="ckeditor" name="body">
                                    <?= $dataposts->body ?>
                                </textarea>
                                <br>

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
            <!-- #END# CKEditor -->
        </div>
    </section>