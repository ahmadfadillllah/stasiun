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
                            data-animation="bounce" data-target=".bs-example-modal-lggg">Tambah Data
                        </button>
                        @include('data.modal.insertdata')
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
                        <h4 class="mt-0 header-title">Daftar Data Stasiun</h4>
                        <table id="datatable" class="table table-bordered dt-responsive nowrap"
                            style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                                <tr>
                                    <th>Tahun</th>
                                    <th>Jan</th>
                                    <th>Feb</th>
                                    <th>Mar</th>
                                    <th>Apr</th>
                                    <th>May</th>
                                    <th>Jun</th>
                                    <th>Jul</th>
                                    <th>Aug</th>
                                    <th>Sep</th>
                                    <th>Oct</th>
                                    <th>Nov</th>
                                    <th>Des</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($datastasiun as $s)
                                @include('data.modal.destroydata')
                                @include('data.modal.updatedata')
                                    <tr style="text-align: center">
                                        <td>{{ $s->tahun_alat }}</td>
                                        <td>@if ($s->januari == 'true') &#9989; @else &#10060; @endif</td>
                                        <td>@if ($s->februari == 'true') &#9989; @else &#10060; @endif</td>
                                        <td>@if ($s->maret == 'true') &#9989; @else &#10060; @endif</td>
                                        <td>@if ($s->april == 'true') &#9989; @else &#10060; @endif</td>
                                        <td>@if ($s->mei == 'true') &#9989; @else &#10060; @endif</td>
                                        <td>@if ($s->juni == 'true') &#9989; @else &#10060; @endif</td>
                                        <td>@if ($s->juli == 'true') &#9989; @else &#10060; @endif</td>
                                        <td>@if ($s->agustus == 'true') &#9989; @else &#10060; @endif</td>
                                        <td>@if ($s->september == 'true') &#9989; @else &#10060; @endif</td>
                                        <td>@if ($s->oktober == 'true') &#9989; @else &#10060; @endif</td>
                                        <td>@if ($s->november == 'true') &#9989; @else &#10060; @endif</td>
                                        <td>@if ($s->desember == 'true') &#9989; @else &#10060; @endif</td>
                                        <td>
                                                <button type="button" class="btn btn-outline-warning waves-effect waves-light" data-toggle="modal"
                                                data-animation="bounce" data-target=".bs-example-modal-lg-updatedata{{$s->id}}">
                                                    <i class="mdi mdi-power mr-2"></i>Edit
                                                </button>
                                                <button type="button" class="btn btn-outline-danger waves-effect waves-light" data-toggle="modal"
                                                data-animation="bounce" data-target=".bs-example-modal-lg-destroydata{{$s->id}}">
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
