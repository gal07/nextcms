<section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>EDITORS</h2>
            </div>

            <!-- CKEditor -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                CKEDITOR
                                <small>CKEditor is a ready-for-use HTML text editor designed to simplify web content creation. Taken from <a href="http://ckeditor.com/" target="_blank">ckeditor.com</a></small>
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">


                            <form id="form_validation" method="POST" action="<?= base_url().'cms-admin/posts/create' ?>">
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
                                        <input value="<?= $dataposts->seo ?>" type="text" class="form-control" name="seo" required>
                                        <label class="form-label">Seo</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="description" required>
                                        <label class="form-label">Description</label>
                                    </div>
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