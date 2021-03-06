
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
                                         <li><a href="<?= base_url().'cms-admin/posts/create/' ?>">Add Post</a></li>
                                         <input id="baseurl" type="hidden" value="<?= base_url() ?>">
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table id="tables" class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead>
                                        <tr>
                                            <th>Judul</th>
                                            <th>Category</th>
                                            <th>World</th>
                                            <th>Top Series</th>
                                            <th>Ontop News</th>
                                            <th>Featured</th>
                                            <th>Fpost</th>
                                            <th>Gallery</th>
                                            <th>Fcson</th>
                                            <th>Lifestyle</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Judul</th>
                                            <th>Category</th>
                                            <th>World</th>
                                            <th>Top Series</th>
                                            <th>Ontop News</th>
                                            <th>Featured</th>
                                            <th>Fpost</th>
                                            <th>Gallery</th>
                                            <th>Fcson</th>
                                            <th>Lifestyle</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php
                                        foreach( $dataposts as $value ): ?>
                                        <tr id="cell<?= $value->id ?>">
                                            <td><?= $value->title ?></td>
                                            <td><?= $value->namakategori ?></td>
                                            <td>
                                                <div class="switch">
                                                    <label>
                                                        <input <?= ($value->world == 1 ? 'checked':'') ?> class="togglestatus" dataid="<?= $value->id ?>" rolethisbutton="world" type="checkbox"><span class="lever switch-col-blue-grey"></span>
                                                    </label>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="switch">
                                                    <label>
                                                        <input <?= ($value->topseries == 1 ? 'checked':'') ?> class="togglestatus" dataid="<?= $value->id ?>" rolethisbutton="topseries" type="checkbox"><span class="lever switch-col-blue-grey"></span>
                                                    </label>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="switch">
                                                    <label>
                                                        <input <?= ($value->ontopnews == 1 ? 'checked':'') ?> class="togglestatus" dataid="<?= $value->id ?>" rolethisbutton="ontopnews" type="checkbox"><span class="lever switch-col-blue-grey"></span>
                                                    </label>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="switch">
                                                    <label>
                                                        <input <?= ($value->featuredpost == 1 ? 'checked':'') ?> class="togglestatus" dataid="<?= $value->id ?>" rolethisbutton="featuredpost" type="checkbox"><span class="lever switch-col-blue-grey"></span>
                                                    </label>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="switch">
                                                    <label>
                                                        <input <?= ($value->fpost == 1 ? 'checked':'') ?> class="togglestatus" dataid="<?= $value->id ?>" rolethisbutton="fpost" type="checkbox"><span class="lever switch-col-blue-grey"></span>
                                                    </label>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="switch">
                                                    <label>
                                                        <input <?= ($value->gallery == 1 ? 'checked':'') ?> class="togglestatus" dataid="<?= $value->id ?>" rolethisbutton="gallery" type="checkbox"><span class="lever switch-col-blue-grey"></span>
                                                    </label>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="switch">
                                                    <label>
                                                        <input <?= ($value->fcson == 1 ? 'checked':'') ?> class="togglestatus" dataid="<?= $value->id ?>" rolethisbutton="fcson" type="checkbox"><span class="lever switch-col-blue-grey"></span>
                                                    </label>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="switch">
                                                    <label>
                                                        <input <?= ($value->lifestyle == 1 ? 'checked':'') ?> class="togglestatus" dataid="<?= $value->id ?>" rolethisbutton="lifestyle" type="checkbox"><span class="lever switch-col-blue-grey"></span>
                                                    </label>
                                                </div>
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

    