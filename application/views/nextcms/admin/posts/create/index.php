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


                            <form enctype="multipart/form-data" id="form_validation" method="POST" action="<?= base_url().'cms-admin/posts/create' ?>">
                               
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="title" required>
                                        <label class="form-label">Title</label>
                                    </div>
                                </div>

                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="slug" required>
                                        <label class="form-label">slug</label>
                                    </div>
                                </div>

                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="seo" required>
                                        <label class="form-label">Seo</label>
                                    </div>
                                </div>

                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="description" required>
                                        <label class="form-label">Description</label>
                                    </div>
                                </div>

                                <div class="form-group form-float">
                                    <label class="form-label">Image - Max 2MB</label>
                                    <input type="file" class="form-control" name="myfile" required>
                                </div>

                                <div class="form-group">
                                    <label class="form-label">Category</label>
                                    <select name="category" class="form-control" required>
                                        <option value="">Choose Category</option>
                                        <?php foreach($datacategory as $value): ?>
                                            <option value="<?= $value->id ?>"><?= $value->category ?></option>
                                        <?php endforeach;?>
                                    </select>
                                </div>

                                <label class="form-label">Posts Body</label>
                                <textarea id="ckeditor" name="body">
                                    <h2>WYSIWYG Editor</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam ullamcorper sapien non nisl facilisis bibendum in quis tellus. Duis in urna bibendum turpis pretium fringilla. Aenean neque velit, porta eget mattis ac, imperdiet quis nisi. Donec non dui et tortor vulputate luctus. Praesent consequat rhoncus velit, ut molestie arcu venenatis sodales.</p>
                                    <h3>Lacinia</h3>
                                    <ul>
                                        <li>Suspendisse tincidunt urna ut velit ullamcorper fermentum.</li>
                                        <li>Nullam mattis sodales lacus, in gravida sem auctor at.</li>
                                        <li>Praesent non lacinia mi.</li>
                                        <li>Mauris a ante neque.</li>
                                        <li>Aenean ut magna lobortis nunc feugiat sagittis.</li>
                                    </ul>
                                    <h3>Pellentesque adipiscing</h3>
                                    <p>Maecenas quis ante ante. Nunc adipiscing rhoncus rutrum. Pellentesque adipiscing urna mi, ut tempus lacus ultrices ac. Pellentesque sodales, libero et mollis interdum, dui odio vestibulum dolor, eu pellentesque nisl nibh quis nunc. Sed porttitor leo adipiscing venenatis vehicula. Aenean quis viverra enim. Praesent porttitor ut ipsum id ornare.</p>
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