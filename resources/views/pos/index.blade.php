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
                            data-animation="bounce" data-target=".bs-example-modal-lg">Tambah Pos
                        </button>
                        @include('pos.modal.insert')

                    </div>
                    <h4 class="page-title">Pos</h4>
                    <div class="btn-group mt-2">
                        <ol class="breadcrumb hide-phone p-0 m-0">
                            <li class="breadcrumb-item"><a href="#">Admin</a></li>
                            <li class="breadcrumb-item active">Lihat Pos</li>
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
                        <h4 class="mt-0 header-title">Daftar Pos</h4>
                        <table id="datatable" class="table table-bordered dt-responsive nowrap"
                            style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th style="width: 70%">Nama Pos</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($pos as $p)
                                @include('pos.modal.edit')
                                @include('pos.modal.destroy')
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $p->name }}</td>
                                        <td>
                                                <button type="button" class="btn btn-outline-warning waves-effect waves-light" data-toggle="modal"
                                                data-animation="bounce" data-target=".bs-example-modal-lg-edit{{$p->id}}">
                                                    <i class="mdi mdi-alert-outline mr-2"></i>Edit
                                                </button>
                                                <button type="button" class="btn btn-outline-danger waves-effect waves-light" data-toggle="modal"
                                                data-animation="bounce" data-target=".bs-example-modal-lg-destroy{{$p->id}}">
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
