<?php
echo js_asset('jquery-ui.js', 'ace');
?>
<style>
    .ui-autocomplete{z-index: 3;}
    /*i'm sorry blind ppl*/
    .ui-helper-hidden-accessible { display:none; }
</style>
<div class="row">
    <div class="col-xs-12">
        <h3 class="header smaller lighter blue"><?php echo $profile->name; ?></h3>
        <div class="center">
            <div class="avatar avatar-l">
                <?php echo image_asset('avatars/' . $profile->pic, 'africlick'); ?>                                        
            </div>
        </div>
        <?php echo form_open_multipart('individu', ['class' => 'form-horizontal', 'role' => 'form', 'id' => 'individu_form']); ?>
        <div class="row">
            <div class="col-xs-6 col-sm-6">
                <!-- NAMA -->
                <div class="form-group">
                    <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Name </label>

                    <div class="col-sm-9">
                        <label class="control-label"><?php echo $profile->name; ?></label>
                    </div>
                </div>

                <!-- GENDER -->
                <div class="form-group">
                    <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Gender </label>

                    <div class="col-sm-9">
                        <label class="control-label">       <?php echo $profile->gender == 'F' ? "Female" : "Male"; ?></label>
                    </div>
                </div>

                <!-- TEMPAT LAHIR -->
                <div class="form-group">
                    <label class="col-sm-3 control-label no-padding-right" for="form-field-1-1"> City </label>

                    <div class="col-sm-9">
                        <label class="control-label"><?php echo $profile->city; ?></label>
                    </div>
                </div>

                <!-- NATIONALITY -->
                <div class="form-group">
                    <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Religion </label>

                    <div class="col-sm-9">
                        <label class="control-label"><?php echo $profile->religion; ?></label>
                    </div>
                </div>

                <!-- ALIAS -->
                <div class="form-group">
                    <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Profession </label>

                    <div class="col-sm-9">
                        <label class="control-label"><?php echo $profile->profession; ?></label>
                    </div>
                </div>

            </div>

            <div class="col-xs-6 col-sm-6">
                <!-- RECENT FORMAL EDUCATION -->
                <div class="form-group">
                    <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Age </label>

                    <div class="col-sm-9">
                        <label class="control-label"><?php echo $profile->age; ?></label>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Origin </label>

                    <div class="col-sm-9">
                        <label class="control-label"><?php echo $profile->country; ?></label>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Tribe </label>

                    <div class="col-sm-9">
                        <label class="control-label"><?php echo $profile->tribe; ?></label>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Education </label>

                    <div class="col-sm-9">
                        <label class="control-label"><?php echo $profile->education; ?></label>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Match Age </label>

                    <div class="col-sm-9">
                        <label class="control-label"><?php echo $profile->min_match_age . '-' . $profile->max_match_age; ?></label>
                    </div>
                </div>


            </div>
        </div></form>
    </div><!-- PAGE CONTENT ENDS -->

</div>
<div class="fade" id="row-actions">
    <div class="hidden-sm hidden-xs action-buttons">
        <a class="blue" href="#" data-toggle="modal" data-target="#modal-form" data-action="view">
            <i class="ace-icon fa fa-search-plus bigger-130"></i>
        </a>
        <a class="green edit" href="#" data-toggle="modal" data-target="#modal-form" data-action="edit">
            <i class="ace-icon fa fa-pencil bigger-130"></i>
        </a>
        <a class="red delete" href="#">
            <i class="ace-icon fa fa-trash-o bigger-130"></i>
        </a>
    </div>
    <div class="hidden-md hidden-lg">
        <div class="inline position-relative">
            <button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown" data-position="auto">
                <i class="ace-icon fa fa-caret-down icon-only bigger-120"></i>
            </button>
            <ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close action-buttons">
                <li>
                    <a href="#" class="tooltip-info" data-toggle="modal" data-target="#modal-form" data-action="view" data-rel="tooltip" title="View">
                        <span class="blue">
                            <i class="ace-icon fa fa-search-plus bigger-120"></i>
                        </span>
                    </a>
                </li>
                <li>
                    <a href="#" class="tooltip-success edit" data-toggle="modal" data-target="#modal-form" data-action="edit" data-rel="tooltip" title="Edit">
                        <span class="green">
                            <i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
                        </span>
                    </a>
                </li>
                <li>
                    <a href="#" class="tooltip-error delete" data-rel="tooltip" title="Delete">
                        <span class="red">
                            <i class="ace-icon fa fa-trash-o bigger-120"></i>
                        </span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
<div id="latsen-modal-form" class="modal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="blue bigger">Tambah Event Latihan Militer Senjata</h4>
            </div>

            <div class="modal-body">
                <form class="row form-horizontal">
                    <div class="col-xs-12">
                        <!-- Tempat -->
                        <div class="form-group">
                            <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Lokasi event </label>

                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="tempat" />
                                <select style="width: 100%" class="form-control kotakab-select2" name="kotakab"></select>
                            </div>
                        </div>
                        <!-- Tanggal -->
                        <div class="form-group">
                            <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Waktu </label>

                            <div class="col-sm-9">
                                <div class="input-group">
                                    <input type="text" class="monthpicker input-sm form-control" name="sejak" />
                                    <span class="input-group-addon">
                                        <i class="fa fa-exchange"></i>
                                    </span>

                                    <input type="text" class="monthpicker input-sm form-control" name="hingga" />
                                </div>

                            </div>
                        </div>
                        <!-- materi latihan -->
                        <div class="form-group">
                            <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Materi Latihan </label>

                            <div class="col-sm-9">
                                <textarea name="materi" class='autoExpand form-control' rows='1' data-min-rows='1'></textarea>
                            </div>
                        </div>
                        <!-- motif -->
                        <div class="form-group">
                            <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Motif </label>

                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="motif" />
                            </div>
                        </div>

                    </div>
                </form>
            </div>

            <div class="modal-footer">
                <button class="btn btn-sm" data-dismiss="modal">
                    <i class="ace-icon fa fa-times"></i>
                    Cancel
                </button>

                <button class="btn btn-sm btn-primary">
                    <i class="ace-icon fa fa-check"></i>
                    Tambah
                </button>
            </div>
        </div>
    </div>
</div>

<div id="latihan-modal-form" class="modal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="blue bigger">Tambah Event Latihan Militer Non-Senjata</h4>
            </div>

            <div class="modal-body">
                <form class="row form-horizontal">
                    <div class="col-xs-12">
                        <!-- Label -->
                        <div class="form-group">
                            <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Label </label>

                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="label" />
                            </div>
                        </div>
                        <!-- Tempat -->
                        <div class="form-group">
                            <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Lokasi event </label>

                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="tempat" />
                                <select style="width: 100%" class="form-control kotakab-select2" name="kotakab"></select>
                            </div>
                        </div>
                        <!-- Tanggal -->
                        <div class="form-group">
                            <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Waktu </label>

                            <div class="col-sm-9">
                                <div class="input-group">
                                    <input type="text" class="monthpicker input-sm form-control" name="sejak" />
                                    <span class="input-group-addon">
                                        <i class="fa fa-exchange"></i>
                                    </span>

                                    <input type="text" class="monthpicker input-sm form-control" name="hingga" />
                                </div>

                            </div>
                        </div>
                        <!-- materi latihan -->
                        <div class="form-group">
                            <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Materi Latihan </label>

                            <div class="col-sm-9">
                                <textarea name="materi" class='autoExpand form-control' rows='1' data-min-rows='1'></textarea>
                            </div>
                        </div>
                        <!-- motif -->
                        <div class="form-group">
                            <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Motif </label>

                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="motif" />
                            </div>
                        </div>

                    </div>
                </form>
            </div>

            <div class="modal-footer">
                <button class="btn btn-sm" data-dismiss="modal">
                    <i class="ace-icon fa fa-times"></i>
                    Cancel
                </button>

                <button class="btn btn-sm btn-primary">
                    <i class="ace-icon fa fa-check"></i>
                    Tambah
                </button>
            </div>
        </div>
    </div>
</div>
<div id="nonteror-modal-form" class="modal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="blue bigger">Tambah Event Kejahatan NonTeror</h4>
            </div>

            <div class="modal-body">
                <form class="row form-horizontal">
                    <div class="col-xs-12">
                        <!-- Tempat -->
                        <div class="form-group">
                            <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Lokasi event </label>

                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="tempat" />
                                <select style="width: 100%" class="form-control kotakab-select2" name="kotakab"></select>
                            </div>
                        </div>
                        <!-- Tanggal -->
                        <div class="form-group">
                            <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Tanggal </label>

                            <div class="col-sm-9">
                                <div class="input-group">
                                    <input class="form-control combofulldate" name="date" type="text" data-format="YYYY-MM-DD" data-template="DD MMM YYYY" />

                                </div>
                            </div>
                        </div>
                        <!-- Waktu -->
                        <div class="form-group">
                            <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Waktu </label>

                            <div class="col-sm-9">
                                <div class="input-group">
                                    <input type="text" class="time-picker form-control" name="time" />
                                    <span class="input-group-addon">
                                        <i class="fa fa-clock-o bigger-110"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <!-- Jenis Pidana -->
                        <div class="form-group">
                            <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Jenis Pidana </label>

                            <div class="col-sm-9">
                                <textarea name="pidana" class='autoExpand form-control' rows='1' data-min-rows='1'></textarea>
                            </div>
                        </div>
                        <!-- Korban -->
                        <div class="form-group">
                            <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Korban </label>

                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="korban" />
                            </div>
                        </div>
                        <!-- Kerugian -->
                        <div class="form-group">
                            <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Kerugian </label>

                            <div class="col-sm-9">
                                <input type="text" class=" form-control" name="nilai" />
                            </div>
                        </div>
                        <!-- Motif -->
                        <div class="form-group">
                            <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Motif </label>

                            <div class="col-sm-9">
                                <input type="text" class=" form-control" name="motif" />
                            </div>
                        </div>

                    </div>
                </form>
            </div>

            <div class="modal-footer">
                <button class="btn btn-sm" data-dismiss="modal">
                    <i class="ace-icon fa fa-times"></i>
                    Cancel
                </button>

                <button class="btn btn-sm btn-primary">
                    <i class="ace-icon fa fa-check"></i>
                    Tambah
                </button>
            </div>
        </div>
    </div>
</div>
<div id="organisasi-modal-form" class="modal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="blue bigger">Tambah Organisasi</h4>
            </div>

            <div class="modal-body">
                <form class="row form-horizontal">
                    <div class="col-xs-12">
                        <!-- Label -->
                        <div class="form-group">
                            <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Label Organisasi </label>

                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="label" />
                            </div>
                        </div>
                        <!-- Nama -->
                        <div class="form-group">
                            <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Nama Organisasi </label>

                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="name" />
                            </div>
                        </div>
                        <!-- Daerah -->
                        <div class="form-group">
                            <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Daerah </label>

                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="daerah" />
                            </div>
                        </div>
                    </div>
                </form>
            </div>

            <div class="modal-footer">
                <button class="btn btn-sm" data-dismiss="modal">
                    <i class="ace-icon fa fa-times"></i>
                    Cancel
                </button>

                <button class="btn btn-sm btn-primary">
                    <i class="ace-icon fa fa-check"></i>
                    Tambah
                </button>
            </div>
        </div>
    </div>
</div>

<div id="teror-modal-form" class="modal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="blue bigger">Tambah Event Kejahatan Teror</h4>
            </div>

            <div class="modal-body">
                <form class="row form-horizontal">
                    <div class="col-xs-12">
                        <!-- Tempat -->
                        <div class="form-group">
                            <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Lokasi event </label>

                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="tempat" />
                                <select style="width: 100%" class="form-control kotakab-select2" name="kotakab"></select>
                            </div>
                        </div>
                        <!-- Tanggal -->
                        <div class="form-group">
                            <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Tanggal </label>

                            <div class="col-sm-9">
                                <div class="input-group">
                                    <input class="form-control combofulldate" name="tanggal" type="text" data-format="YYYY-MM-DD" data-template="DD MMM YYYY" />

                                </div>
                            </div>
                        </div>
                        <!-- Waktu -->
                        <div class="form-group">
                            <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Waktu </label>

                            <div class="col-sm-9">
                                <div class="input-group">
                                    <input type="text" class="time-picker form-control" name="waktu" />
                                    <span class="input-group-addon">
                                        <i class="fa fa-clock-o bigger-110"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <!-- Model Serangan -->
                        <div class="form-group">
                            <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Model Serangan </label>

                            <div class="col-sm-9">
                                <textarea name="serangan" class='autoExpand form-control' rows='1' data-min-rows='1'></textarea>
                            </div>
                        </div>
                        <!-- Sasaran -->
                        <div class="form-group">
                            <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Sasaran </label>

                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="sasaran" />
                            </div>
                        </div>
                        <!-- Motif -->
                        <div class="form-group">
                            <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Motif </label>

                            <div class="col-sm-9">
                                <input type="text" class=" form-control" name="motif" />
                            </div>
                        </div>

                    </div>
                </form>
            </div>

            <div class="modal-footer">
                <button class="btn btn-sm" data-dismiss="modal">
                    <i class="ace-icon fa fa-times"></i>
                    Cancel
                </button>

                <button class="btn btn-sm btn-primary">
                    <i class="ace-icon fa fa-check"></i>
                    Tambah
                </button>
            </div>
        </div>
    </div>
</div>
<div id="school-modal-form" class="modal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="blue bigger">Tambah School</h4>
            </div>

            <div class="modal-body">
                <form class="row form-horizontal">
                    <div class="col-xs-12">
                        <!-- Label -->
                        <div class="form-group">
                            <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Label </label>

                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="label" />
                            </div>
                        </div>
                        <!-- Name -->
                        <div class="form-group">
                            <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Nama </label>

                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="school_name" />
                            </div>
                        </div>
                        <!-- Alamat -->
                        <div class="form-group">
                            <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Alamat </label>

                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="address" />
                            </div>
                        </div>
                        <!-- Kota -->
                        <div class="form-group">
                            <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Kota </label>

                            <div class="col-sm-9">
                                <select style="width: 100%" class="form-control kotakab-select2" name="kotakab"></select>
                            </div>
                        </div>

                    </div>
                </form>
            </div>

            <div class="modal-footer">
                <button class="btn btn-sm" data-dismiss="modal">
                    <i class="ace-icon fa fa-times"></i>
                    Cancel
                </button>

                <button class="btn btn-sm btn-primary">
                    <i class="ace-icon fa fa-check"></i>
                    Tambah
                </button>
            </div>
        </div>
    </div>
</div>

<div id="pengajian-modal-form" class="modal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="blue bigger">Tambah Pengajian</h4>
            </div>

            <div class="modal-body">
                <form class="row form-horizontal">
                    <div class="col-xs-12">
                        <!-- Label -->
                        <div class="form-group">
                            <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Label </label>

                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="label" />
                            </div>
                        </div>
                        <!-- Topik -->
                        <div class="form-group">
                            <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Topik </label>

                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="topik" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Rumah </label>

                            <div class="col-sm-9">
                                <select style="width: 100%" class="form-control individu-select2 " name="rumah" ></select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Masjid </label>

                            <div class="col-sm-9">
                                <select style="width: 100%" class="form-control masjid-select2 " name="masjid" ></select>
                            </div>
                        </div>
                        <div class="widget-box collapsed">
                            <div class="widget-header">
                                <h4 class="widget-title">Tambah Masjid</h4>

                                <div class="widget-toolbar">
                                    <a href="#" data-action="collapse">
                                        <i class="ace-icon fa fa-chevron-down"></i>
                                    </a>
                                </div>
                            </div>

                            <div class="widget-body">
                                <div class="widget-main template-group">
                                    <div class="form-template template" style="margin-bottom:5px;padding:10px;border:1px solid black;">
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Nama Masjid </label>

                                            <div class="col-sm-9">
                                                <input type="text" placeholder="Nama" class="form-control" name="masjid_name" />
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Alamat Masjid </label>

                                            <div class="col-sm-9">
                                                <input type="text" placeholder="Alamat" class="form-control" name="masjid_address" />
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Kota </label>

                                            <div class="col-sm-9">
                                                <select style="width: 100%" class="form-control kotakab-select2" name="masjid_kotakab"></select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="form-group">
                            <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> School </label>

                            <div class="col-sm-9">
                                <select style="width: 100%" class="form-control school-select2 " name="school" ></select>
                            </div>
                        </div>
                        <div class="widget-box collapsed">
                            <div class="widget-header">
                                <h4 class="widget-title">Tambah School</h4>

                                <div class="widget-toolbar">
                                    <a href="#" data-action="collapse">
                                        <i class="ace-icon fa fa-chevron-down"></i>
                                    </a>
                                </div>
                            </div>

                            <div class="widget-body">
                                <div class="widget-main template-group">
                                    <div class="form-template template" style="margin-bottom:5px;padding:10px;border:1px solid black;">
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Nama School </label>

                                            <div class="col-sm-9">
                                                <input type="text" placeholder="Nama" class="form-control" name="school_name" />
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Alamat School </label>

                                            <div class="col-sm-9">
                                                <input type="text" placeholder="Alamat" class="form-control" name="school_address" />
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Kota </label>

                                            <div class="col-sm-9">
                                                <select style="width: 100%" class="form-control kotakab-select2" name="school_kotakab"></select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Lokasi lain -->
                        <div class="form-group">
                            <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Lokasi Lain </label>

                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="lokasi" />
                            </div>
                        </div>

                    </div>
                </form>
            </div>

            <div class="modal-footer">
                <button class="btn btn-sm" data-dismiss="modal">
                    <i class="ace-icon fa fa-times"></i>
                    Cancel
                </button>

                <button class="btn btn-sm btn-primary">
                    <i class="ace-icon fa fa-check"></i>
                    Tambah
                </button>
            </div>
        </div>
    </div>
</div>
<div id="lapas-modal-form" class="modal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="blue bigger">Tambah Lapas</h4>
            </div>

            <div class="modal-body">
                <form class="row form-horizontal">
                    <div class="col-xs-12">
                        <!-- Label -->
                        <div class="form-group">
                            <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Label </label>

                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="label" />
                            </div>
                        </div>
                        <!-- Name -->
                        <div class="form-group">
                            <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Nama </label>

                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="name" />
                            </div>
                        </div>
                        <!-- Alamat -->
                        <div class="form-group">
                            <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Alamat </label>

                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="address" />
                            </div>
                        </div>
                        <!-- Kota -->
                        <div class="form-group">
                            <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Kota </label>

                            <div class="col-sm-9">
                                <select style="width: 100%" class="form-control kotakab-select2" name="kotakab"></select>
                            </div>
                        </div>

                    </div>
                </form>
            </div>

            <div class="modal-footer">
                <button class="btn btn-sm" data-dismiss="modal">
                    <i class="ace-icon fa fa-times"></i>
                    Cancel
                </button>

                <button class="btn btn-sm btn-primary">
                    <i class="ace-icon fa fa-check"></i>
                    Tambah
                </button>
            </div>
        </div>
    </div>
</div>

<div id="individu-modal-form" class="modal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="blue bigger">Tambah Individu</h4>
            </div>

            <div class="modal-body">
                <form class="row form-horizontal">
                    <div class="col-xs-12">
                        <div class="form-group">
                            <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Nama </label>

                            <div class="col-sm-9">
                                <input type="text" placeholder="Nama Individu" class="form-control" name="individu_name" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Jenis Kelamin </label>

                            <div class="col-sm-9">
                                <select class="form-control" name="gender">
                                    <option value="Laki-laki">Laki-laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Alamat </label>

                            <div class="col-sm-9">
                                <input type="text" placeholder="Alamat" class="form-control" name="address" />
                                <select style="width: 100%" class="form-control kotakab-select2" name="address_kotakab"></select>
                            </div>
                        </div>
                        <div class="widget-box collapsed">
                            <div class="widget-header">
                                <h4 class="widget-title">Riwayat Pekerjaan</h4>

                                <div class="widget-toolbar">
                                    <a href="#" data-action="collapse">
                                        <i class="ace-icon fa fa-chevron-down"></i>
                                    </a>
                                </div>
                            </div>

                            <div class="widget-body">
                                <div class="widget-main template-group">
                                    <div class="hide form-template template" style="margin-bottom:5px;padding:10px;border:1px solid black;">
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Tempat </label>

                                            <div class="col-sm-9">
                                                <input type="text" placeholder="Nama" class="form-control" name="job_place[]" />
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label no-padding-right" for="form-field-1-1"> Tanggal </label>

                                            <div class="col-sm-9">
                                                <div class="input-group">
                                                    <input type="text" class="monthpicker input-sm form-control" name="job_start[]" />
                                                    <span class="input-group-addon">
                                                        <i class="fa fa-exchange"></i>
                                                    </span>

                                                    <input type="text" class="monthpicker input-sm form-control" name="job_end[]" />
                                                </div>

                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label no-padding-right" for="form-field-1"></label>
                                            <div class="col-sm-9">
                                                <button class="btn btn-danger btn-delete" type="button">
                                                    <i class="ace-icon fa fa-remove bigger-110"></i>
                                                    Hapus
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Tambah Pekerjaan </label>

                                        <div class="col-sm-9">
                                            <span class="plus input-group-addon">
                                                <i class="fa fa-plus bigger-110"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="widget-box collapsed" >
                            <div class="widget-header">
                                <h4 class="widget-title">Riwayat Organisasi</h4>

                                <div class="widget-toolbar">
                                    <a href="#" data-action="collapse">
                                        <i class="ace-icon fa fa-chevron-down"></i>
                                    </a>
                                </div>
                            </div>

                            <div class="widget-body">
                                <div class="widget-main template-group">
                                    <div class="hide form-template template" style="margin-bottom:5px;padding:10px;border:1px solid black;">
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Organisasi </label>

                                            <div class="col-sm-9">
                                                <select style="width: 100%" class="form-control organisasi-select2 " name="organisasi_id[]" ></select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label no-padding-right" for="form-field-1-1"> Tanggal </label>

                                            <div class="col-sm-9">
                                                <div class="input-group">
                                                    <input type="text" class="monthpicker input-sm form-control" name="org_start[]" />
                                                    <span class="input-group-addon">
                                                        <i class="fa fa-exchange"></i>
                                                    </span>

                                                    <input type="text" class="input-sm monthpicker form-control" name="org_end[]" />
                                                </div>

                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Sebagai </label>

                                            <div class="col-sm-9">
                                                <select data-placeholder="Pilih Relasi..." name="org_edge[]">

                                                    <option value="15">Anggota Aktif</option>
                                                    <option value="16">Anggota Biasa</option>
                                                    <option value="53">Anggota inti/Pengurus</option>
                                                    <option value="54">Muharrik/Pengurus Inti</option>
                                                    <option value="55">Pelaku Teror</option>
                                                    <option value="17">Amir</option>                                    
                                                    <option value="18">Komandan militer</option>                                    
                                                    <option value="19">Dewan Pimpinan/Pimpinan Wilayah</option>                                    
                                                    <option value="20">Pemberi dukungan permanen/rutin</option>                                    
                                                    <option value="20">Pemberi dukungan insidental</option>                                    
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label no-padding-right" for="form-field-1"></label>
                                            <div class="col-sm-9">
                                                <button class="btn btn-danger btn-delete" type="button">
                                                    <i class="ace-icon fa fa-remove bigger-110"></i>
                                                    Hapus
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Tambah Riwayat Organisasi </label>

                                        <div class="col-sm-9">
                                            <span class="input-group-addon plus">
                                                <i class="fa fa-plus bigger-110"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="widget-box collapsed">
                            <div class="widget-header">
                                <h4 class="widget-title">Kejahatan Teror</h4>

                                <div class="widget-toolbar">
                                    <a href="#" data-action="collapse">
                                        <i class="ace-icon fa fa-chevron-down"></i>
                                    </a>
                                </div>
                            </div>

                            <div class="widget-body">
                                <div class="widget-main template-group">
                                    <div class="hide form-template template" style="margin-bottom:5px;padding:10px;border:1px solid black;">
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Kasus </label>

                                            <div class="col-sm-9">
                                                <!--<div class="input-group">-->
                                                <select style="width: 100%" class="form-control teror-select2" name="teror[]" ></select>
<!--                                                    <span class="input-group-addon" data-toggle="modal" data-target="#teror-modal-form">
                                                    <i class="fa fa-plus bigger-110"></i>
                                                </span>-->
                                                <!--</div>-->
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Sebagai </label>

                                            <div class="col-sm-9">
                                                <select data-placeholder="Pilih Relasi..." name="teror_edge[]">

                                                    <option value="25">Pemberi Perintah</option>
                                                    <option value="26">Perencana</option>
                                                    <option value="27">Pelaksana</option>                                    
                                                    <option value="28">Pemberi Dukungan</option>                                    
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label no-padding-right" for="form-field-1"></label>
                                            <div class="col-sm-9">
                                                <button class="btn btn-danger btn-delete" type="button">
                                                    <i class="ace-icon fa fa-remove bigger-110"></i>
                                                    Hapus
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Tambah Catatan </label>

                                        <div class="col-sm-9">
                                            <span class="plus input-group-addon">
                                                <i class="fa fa-plus bigger-110"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="widget-box collapsed">
                            <div class="widget-header">
                                <h4 class="widget-title">Kejahatan Non Teror</h4>

                                <div class="widget-toolbar">
                                    <a href="#" data-action="collapse">
                                        <i class="ace-icon fa fa-chevron-down"></i>
                                    </a>
                                </div>
                            </div>

                            <div class="widget-body">
                                <div class="widget-main template-group">
                                    <div class="hide form-template template" style="margin-bottom:5px;padding:10px;border:1px solid black;">
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Kasus </label>

                                            <div class="col-sm-9">
                                                <select style="width: 100%" class="form-control nonteror-select2" name="nonteror[]" ></select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Sebagai </label>

                                            <div class="col-sm-9">
                                                <select data-placeholder="Pilih Relasi..." name="nonteror_edge[]">

                                                    <option value="29">Pemberi Perintah</option>
                                                    <option value="30">Perencana</option>
                                                    <option value="31">Pelaksana</option>                                    
                                                    <option value="32">Pemberi Dukungan</option>                                    
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label no-padding-right" for="form-field-1"></label>
                                            <div class="col-sm-9">
                                                <button class="btn btn-danger btn-delete" type="button">
                                                    <i class="ace-icon fa fa-remove bigger-110"></i>
                                                    Hapus
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Tambah Catatan </label>

                                        <div class="col-sm-9">
                                            <span class="plus input-group-addon">
                                                <i class="fa fa-plus bigger-110"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div></div>
                </form>
            </div>

            <div class="modal-footer">
                <button class="btn btn-sm" data-dismiss="modal">
                    <i class="ace-icon fa fa-times"></i>
                    Cancel
                </button>

                <button class="btn btn-sm btn-primary">
                    <i class="ace-icon fa fa-check"></i>
                    Tambah
                </button>
            </div>
        </div>
    </div>
</div>


<?php
echo js_asset('jquery.dataTables.js', 'ace');
echo js_asset('jquery.dataTables.bootstrap.js', 'ace');
echo js_asset('bootbox.js', 'ace');
echo js_asset('jquery.hotkeys.js', 'ace');
echo js_asset('bootstrap-wysiwyg.js', 'ace');
echo js_asset('moment.js', 'africlick');
echo js_asset('combodate.js', 'africlick');
echo css_asset('bootstrap-timepicker.css', 'ace');
echo js_asset('date-time/bootstrap-timepicker.js', 'ace');
echo js_asset('individu/individu-form.js', 'africlick');
echo js_asset('individu/configs.js', 'africlick');
if (isset($edit_id)) {
    echo js_asset('individu/individu-load.js', 'africlick');
    ?>
    <!--load data and populate form-->
    <script>
        $(window).load(function () {
            load_individu(<?php echo $edit_id; ?>);
        });
    </script>
    <?php
}
?>
<!-- PAGE CONTENT ENDS -->