<div class="modal fade bs-example-modal-lg-edit{{$p->id}}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title mt-0" id="myLargeModalLabel">Edit Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <form action="{{ route('pos.update', $p->id) }}" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="form-group row">
                                <label class="col-sm-12 col-form-label">Nama Pos</label>
                                <div class="col-sm-12">
                                    <input type="text" maxlength="255" name="name" value="{{ $p->name }}" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4">
                            <div class="form-group row">
                                <div class="col-sm-12">
                                    <button type="submit" class="btn btn-info waves-effect waves-light">
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
