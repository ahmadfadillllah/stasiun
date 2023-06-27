<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title mt-0" id="myLargeModalLabel">Tambah Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <form action="{{ route('data.insert') }}" method="POST">
                @csrf
                <div class="modal-body">
                    @php
                        $provinces = new App\Http\Controllers\DependantDropdownController;
                        $provinces= $provinces->provinces();
                    @endphp
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="form-group row">
                                <label class="col-sm-12 col-form-label">Provinsi</label>
                                <div class="col-sm-12">
                                    <select class="form-control" name="id_provinsi" id="provinsi">
                                        <option>Select</option>
                                        @foreach ($provinces as $item)
                                            <option value="{{ $item->id ?? '' }}">{{ $item->name ?? '' }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-12">
                            <div class="form-group row">
                                <label class="col-sm-12 col-form-label">Kota/Kabupaten</label>
                                <div class="col-sm-12">
                                    <select class="form-control" name="id_kota" id="kota">
                                        <option>Select</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-12">
                            <div class="form-group row">
                                <label class="col-sm-12 col-form-label">Kecamatan</label>
                                <div class="col-sm-12">
                                    <select class="form-control" name="id_kecamatan" id="kecamatan">
                                        <option>Select</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-12">
                            <div class="form-group row">
                                <label class="col-sm-12 col-form-label">Kelurahan</label>
                                <div class="col-sm-12">
                                    <select class="form-control" name="id_desa" id="desa">
                                        <option>Select</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-12">
                            <div class="form-group row">
                                <label class="col-sm-12 col-form-label">Nama Pos</label>
                                <div class="col-sm-12">
                                    <select class="form-control" name="id_pos">
                                        <option selected>Select</option>
                                        @foreach ($pos as $p)
                                            <option value="{{ $p->id }}">{{ $p->name }}</option>
                                        @endforeach
                                    </select>
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
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script>
    function onChangeSelect(url, id, name) {
        // send ajax request to get the cities of the selected province and append to the select tag
        $.ajax({
            url: url,
            type: 'GET',
            data: {
                id: id
            },
            success: function (data) {
                $('#' + name).empty();
                $('#' + name).append('<option>Select</option>');

                $.each(data, function (key, value) {
                    $('#' + name).append('<option value="' + key + '">' + value + '</option>');
                });
            }
        });
    }
    $(function () {
        $('#provinsi').on('change', function () {
            onChangeSelect('{{ route("cities") }}', $(this).val(), 'kota');
        });
        $('#kota').on('change', function () {
            onChangeSelect('{{ route("districts") }}', $(this).val(), 'kecamatan');
        })
        $('#kecamatan').on('change', function () {
            onChangeSelect('{{ route("villages") }}', $(this).val(), 'desa');
        })
    });
</script>
