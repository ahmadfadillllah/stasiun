@include('layout.head')
@include('layout.header')
<div class="wrapper">
    <div class="container-fluid">
        <!-- Page-Title -->
        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <div class="float-right hide-phone">
                        <button type="button" class="btn btn-primary waves-effect waves-light" data-toggle="modal"
                            data-animation="bounce" data-target=".bs-example-modal-lg">Tambah Data
                        </button>
                        @include('data.modal.insert')
                    </div>
                    <h4 class="page-title">Data</h4>
                    <div class="btn-group mt-2">
                        <ol class="breadcrumb hide-phone p-0 m-0">
                            <li class="breadcrumb-item"><a href="#">Admin</a></li>
                            <li class="breadcrumb-item active">Lihat Data</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div><!-- end page title end breadcrumb -->
        <div class="row">

            <div class="col-12">
                @include('notif.alert')
                <div class="card">
                    <div class="card-body">
                        <h4 class="mt-0 header-title">Daftar Ketersediaan Data</h4>
                        <table id="datatable" class="table table-bordered dt-responsive nowrap"
                            style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Pos</th>
                                    <th>Desa/Kelurahan</th>
                                    <th>Kecamatan</th>
                                    <th>Kabupaten/Kota</th>
                                    <th>Provinsi</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($stasiun as $s)
                                @include('data.modal.edit')
                                @include('data.modal.destroy')
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $s->pos->name }}</td>
                                        <td>{{ $s->desa->name }}</td>
                                        <td>{{ $s->kecamatan->name }}</td>
                                        <td>{{ $s->kota->name }}</td>
                                        <td>{{ $s->provinsi->name }}</td>
                                        <td>
                                                <a href="{{ route('datainsert.show', $s->id) }}" class="btn btn-outline-success waves-effect waves-light">
                                                    <i class="mdi mdi-alert-outline mr-2"></i>Lihat
                                                </a>
                                                <button type="button" class="btn btn-outline-danger waves-effect waves-light" data-toggle="modal"
                                                data-animation="bounce" data-target=".bs-example-modal-lg-destroy{{$s->id}}">
                                                    <i class="mdi mdi-power mr-2"></i>Hapus
                                                </button>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div><!-- end col -->
        </div>
    </div><!-- end container -->
</div><!-- end wrapper -->
<!-- Footer -->
@include('layout.footer')
