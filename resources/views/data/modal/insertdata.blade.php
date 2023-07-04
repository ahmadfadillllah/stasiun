<div class="modal fade bs-example-modal-lggg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title mt-0" id="myLargeModalLabel">Tambah Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <form action="{{ route('datainsert.insert', request()->route('id')) }}" method="POST">
                @csrf
                <input type="text" maxlength="25" name="id_stasiun" value="{{ request()->route('id') }}" class="form-control" hidden>
                <div class="modal-body">
                    <p id="demo"></p>
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="form-group row">
                                <label class="col-sm-12 col-form-label">Tahun</label>
                                <div class="col-sm-12">
                                    <input type="number" maxlength="25" name="tahun_alat" class="form-control" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="form-group row">
                                <label class="col-sm-12 col-form-label">Januari</label>
                                <div class="col-md-12">

                                    <div class="form-check-inline my-1">
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="customRadio2" name="januari" class="custom-control-input" value="true"/>
                                            <label class="custom-control-label" for="customRadio2">ada</label>
                                        </div>
                                    </div>
                                    <div class="form-check-inline my-1">
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="customRadio3" name="januari" class="custom-control-input" value="false"/>
                                            <label class="custom-control-label" for="customRadio3">tidak ada</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="form-group row">
                                <label class="col-sm-12 col-form-label">Februari</label>
                                <div class="col-md-12">

                                    <div class="form-check-inline my-1">
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="customRadio5" name="februari" class="custom-control-input" value="true"/>
                                            <label class="custom-control-label" for="customRadio5">ada</label>
                                        </div>
                                    </div>
                                    <div class="form-check-inline my-1">
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="customRadio6" name="februari" class="custom-control-input" value="false"/>
                                            <label class="custom-control-label" for="customRadio6">tidak ada</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="form-group row">
                                <label class="col-sm-12 col-form-label">Maret</label>
                                <div class="col-md-12">

                                    <div class="form-check-inline my-1">
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="customRadio8" name="maret" class="custom-control-input" value="true"/>
                                            <label class="custom-control-label" for="customRadio8">ada</label>
                                        </div>
                                    </div>
                                    <div class="form-check-inline my-1">
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="customRadio9" name="maret" class="custom-control-input" value="false"/>
                                            <label class="custom-control-label" for="customRadio9">tidak ada</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="form-group row">
                                <label class="col-sm-12 col-form-label">April</label>
                                <div class="col-md-12">

                                    <div class="form-check-inline my-1">
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="customRadio11" name="april" class="custom-control-input" value="true"/>
                                            <label class="custom-control-label" for="customRadio11">ada</label>
                                        </div>
                                    </div>
                                    <div class="form-check-inline my-1">
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="customRadio12" name="april" class="custom-control-input" value="false"/>
                                            <label class="custom-control-label" for="customRadio12">tidak ada</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="form-group row">
                                <label class="col-sm-12 col-form-label">Mei</label>
                                <div class="col-md-12">

                                    <div class="form-check-inline my-1">
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="customRadio14" name="mei" class="custom-control-input" value="true"/>
                                            <label class="custom-control-label" for="customRadio14">ada</label>
                                        </div>
                                    </div>
                                    <div class="form-check-inline my-1">
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="customRadio15" name="mei" class="custom-control-input" value="false"/>
                                            <label class="custom-control-label" for="customRadio15">tidak ada</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="form-group row">
                                <label class="col-sm-12 col-form-label">Juni</label>
                                <div class="col-md-12">

                                    <div class="form-check-inline my-1">
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="customRadio17" name="juni" class="custom-control-input" value="true"/>
                                            <label class="custom-control-label" for="customRadio17">ada</label>
                                        </div>
                                    </div>
                                    <div class="form-check-inline my-1">
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="customRadio18" name="juni" class="custom-control-input" value="false"/>
                                            <label class="custom-control-label" for="customRadio18">tidak ada</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="form-group row">
                                <label class="col-sm-12 col-form-label">Juli</label>
                                <div class="col-md-12">

                                    <div class="form-check-inline my-1">
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="customRadio20" name="juli" class="custom-control-input" value="true"/>
                                            <label class="custom-control-label" for="customRadio20">ada</label>
                                        </div>
                                    </div>
                                    <div class="form-check-inline my-1">
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="customRadio21" name="juli" class="custom-control-input" value="false"/>
                                            <label class="custom-control-label" for="customRadio21">tidak ada</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="form-group row">
                                <label class="col-sm-12 col-form-label">Agustus</label>
                                <div class="col-md-12">

                                    <div class="form-check-inline my-1">
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="customRadio23" name="agustus" class="custom-control-input" value="true"/>
                                            <label class="custom-control-label" for="customRadio23">ada</label>
                                        </div>
                                    </div>
                                    <div class="form-check-inline my-1">
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="customRadio24" name="agustus" class="custom-control-input" value="false"/>
                                            <label class="custom-control-label" for="customRadio24">tidak ada</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="form-group row">
                                <label class="col-sm-12 col-form-label">September</label>
                                <div class="col-md-12">

                                    <div class="form-check-inline my-1">
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="customRadio26" name="september" class="custom-control-input" value="true"/>
                                            <label class="custom-control-label" for="customRadio26">ada</label>
                                        </div>
                                    </div>
                                    <div class="form-check-inline my-1">
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="customRadio27" name="september" class="custom-control-input" value="false"/>
                                            <label class="custom-control-label" for="customRadio27">tidak ada</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="form-group row">
                                <label class="col-sm-12 col-form-label">Oktober</label>
                                <div class="col-md-12">

                                    <div class="form-check-inline my-1">
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="customRadio29" name="oktober" class="custom-control-input" value="true"/>
                                            <label class="custom-control-label" for="customRadio29">ada</label>
                                        </div>
                                    </div>
                                    <div class="form-check-inline my-1">
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="customRadio30" name="oktober" class="custom-control-input" value="false"/>
                                            <label class="custom-control-label" for="customRadio30">tidak ada</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="form-group row">
                                <label class="col-sm-12 col-form-label">November</label>
                                <div class="col-md-12">

                                    <div class="form-check-inline my-1">
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="customRadio32" name="november" class="custom-control-input" value="true"/>
                                            <label class="custom-control-label" for="customRadio32">ada</label>
                                        </div>
                                    </div>
                                    <div class="form-check-inline my-1">
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="customRadio33" name="november" class="custom-control-input" value="false"/>
                                            <label class="custom-control-label" for="customRadio33">tidak ada</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="form-group row">
                                <label class="col-sm-12 col-form-label">Desember</label>
                                <div class="col-md-12">

                                    <div class="form-check-inline my-1">
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="customRadio35" name="desember" class="custom-control-input" value="true"/>
                                            <label class="custom-control-label" for="customRadio35">ada</label>
                                        </div>
                                    </div>
                                    <div class="form-check-inline my-1">
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="customRadio36" name="desember" class="custom-control-input" value="false"/>
                                            <label class="custom-control-label" for="customRadio36">tidak ada</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4">
                            <div class="form-group row">
                                <div class="col-sm-12">
                                    <button type="submit" class="btn btn-info waves-effect waves-light">
                                        <i class="mdi mdi-send mr-2"></i>Tambahkan
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>


