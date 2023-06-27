<div class="modal fade bs-example-modal-lg-updatedata{{$s->id}}" id="updatedataKategori{{ $s->id }}" aria-hidden="true" aria-labelledby="..." tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title mt-0" id="myLargeModalLabel">Edit Data Tahun {{ $s->tahun_alat }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <form action="{{ route('dataupdate.update', $s->id) }}" method="POST">
                @csrf
                <div class="modal-body">
                    <p id="demo"></p>
                    <div class="row">
                        {{-- <div class="col-xl-12">
                            <div class="form-group row">
                                <label class="col-sm-12 col-form-label">Tahun</label>
                                <div class="col-sm-12">
                                    <input type="number" maxlength="25" name="tahun_alat" class="form-control" value="" required>
                                </div>
                            </div>
                        </div> --}}
                        <div class="col-xl-6">
                            <div class="form-group row">
                                <label class="col-sm-12 col-form-label">Januari</label>
                                <div class="col-md-12">

                                    <div class="form-check-inline my-1">
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="customRadio37" name="januari" class="custom-control-input" value="true" {{ $s->januari == true ? 'checked' : '' }}/>
                                            <label class="custom-control-label" for="customRadio37">true</label>
                                        </div>
                                    </div>
                                    <div class="form-check-inline my-1">
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="customRadio38" name="januari" class="custom-control-input" value="false" {{ $s->januari == true ? 'checked' : '' }}/>
                                            <label class="custom-control-label" for="customRadio38">false</label>
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
                                            <input type="radio" id="customRadio39" name="februari" class="custom-control-input" value="true" {{ $s->februari == true ? 'checked' : '' }}/>
                                            <label class="custom-control-label" for="customRadio39">true</label>
                                        </div>
                                    </div>
                                    <div class="form-check-inline my-1">
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="customRadio40" name="februari" class="custom-control-input" value="false"{{ $s->februari == true ? 'checked' : '' }}/>
                                            <label class="custom-control-label" for="customRadio40">false</label>
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
                                            <input type="radio" id="customRadio41" name="maret" class="custom-control-input" value="true" {{ $s->maret == true ? 'checked' : '' }}/>
                                            <label class="custom-control-label" for="customRadio41">true</label>
                                        </div>
                                    </div>
                                    <div class="form-check-inline my-1">
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="customRadio42" name="maret" class="custom-control-input" value="false" {{ $s->maret == true ? 'checked' : '' }}/>
                                            <label class="custom-control-label" for="customRadio42">false</label>
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
                                            <input type="radio" id="customRadio43" name="april" class="custom-control-input" value="true" {{ $s->april == true ? 'checked' : '' }}/>
                                            <label class="custom-control-label" for="customRadio43">true</label>
                                        </div>
                                    </div>
                                    <div class="form-check-inline my-1">
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="customRadio44" name="april" class="custom-control-input" value="false" {{ $s->april == true ? 'checked' : '' }}/>
                                            <label class="custom-control-label" for="customRadio44">false</label>
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
                                            <input type="radio" id="customRadio45" name="mei" class="custom-control-input" value="true" {{ $s->mei == true ? 'checked' : '' }}/>
                                            <label class="custom-control-label" for="customRadio45">true</label>
                                        </div>
                                    </div>
                                    <div class="form-check-inline my-1">
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="customRadio46" name="mei" class="custom-control-input" value="false" {{ $s->mei == true ? 'checked' : '' }}/>
                                            <label class="custom-control-label" for="customRadio46">false</label>
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
                                            <input type="radio" id="customRadio47" name="juni" class="custom-control-input" value="true" {{ $s->juni == true ? 'checked' : '' }}/>
                                            <label class="custom-control-label" for="customRadio47">true</label>
                                        </div>
                                    </div>
                                    <div class="form-check-inline my-1">
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="customRadio48" name="juni" class="custom-control-input" value="false" {{ $s->juni == true ? 'checked' : '' }}/>
                                            <label class="custom-control-label" for="customRadio48">false</label>
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
                                            <input type="radio" id="customRadio49" name="juli" class="custom-control-input" value="true" {{ $s->juli == true ? 'checked' : '' }}/>
                                            <label class="custom-control-label" for="customRadio49">true</label>
                                        </div>
                                    </div>
                                    <div class="form-check-inline my-1">
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="customRadio50" name="juli" class="custom-control-input" value="false" {{ $s->juli == true ? 'checked' : '' }}/>
                                            <label class="custom-control-label" for="customRadio50">false</label>
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
                                            <input type="radio" id="customRadio51" name="agustus" class="custom-control-input" value="true" {{ $s->agustus == true ? 'checked' : '' }}/>
                                            <label class="custom-control-label" for="customRadio51">true</label>
                                        </div>
                                    </div>
                                    <div class="form-check-inline my-1">
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="customRadio52" name="agustus" class="custom-control-input" value="false" {{ $s->agustus == true ? 'checked' : '' }}/>
                                            <label class="custom-control-label" for="customRadio52">false</label>
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
                                            <input type="radio" id="customRadio53" name="september" class="custom-control-input" value="true" {{ $s->september == true ? 'checked' : '' }}/>
                                            <label class="custom-control-label" for="customRadio53">true</label>
                                        </div>
                                    </div>
                                    <div class="form-check-inline my-1">
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="customRadio54" name="september" class="custom-control-input" value="false" {{ $s->september == true ? 'checked' : '' }}/>
                                            <label class="custom-control-label" for="customRadio54">false</label>
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
                                            <input type="radio" id="customRadio55" name="oktober" class="custom-control-input" value="true" {{ $s->oktober == true ? 'checked' : '' }}/>
                                            <label class="custom-control-label" for="customRadio55">true</label>
                                        </div>
                                    </div>
                                    <div class="form-check-inline my-1">
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="customRadio56" name="oktober" class="custom-control-input" value="false" {{ $s->oktober == true ? 'checked' : '' }}/>
                                            <label class="custom-control-label" for="customRadio56">false</label>
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
                                            <input type="radio" id="customRadio57" name="november" class="custom-control-input" value="true" {{ $s->november == true ? 'checked' : '' }}/>
                                            <label class="custom-control-label" for="customRadio57">true</label>
                                        </div>
                                    </div>
                                    <div class="form-check-inline my-1">
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="customRadio58" name="november" class="custom-control-input" value="false" {{ $s->november == true ? 'checked' : '' }}/>
                                            <label class="custom-control-label" for="customRadio58">false</label>
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
                                            <input type="radio" id="customRadio59" name="desember" class="custom-control-input" value="true" {{ $s->desember == true ? 'checked' : '' }}/>
                                            <label class="custom-control-label" for="customRadio59">true</label>
                                        </div>
                                    </div>
                                    <div class="form-check-inline my-1">
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="customRadio60" name="desember" class="custom-control-input" value="false" {{ $s->desember == true ? 'checked' : '' }}/>
                                            <label class="custom-control-label" for="customRadio60">false</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4">
                            <div class="form-group row">
                                <div class="col-sm-12">
                                    <button type="submit" class="btn btn-secondary waves-effect waves-light">
                                        <i class="mdi mdi-send mr-2"></i>Update
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


