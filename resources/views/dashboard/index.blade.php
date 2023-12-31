@include('layout.head')
@include('layout.header')
<div class="wrapper">
    <div class="container-fluid">
        <!-- Page-Title -->
        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <div class="float-right hide-phone">
                        <ul class="list-inline">
                            <li class="list-inline-item mr-3"><input class="knob" data-width="48" data-height="48"
                                    data-linecap="round" data-fgcolor="#605daf" value="80" data-skin="tron"
                                    data-angleoffset="180" data-readonly="true" data-thickness=".1"></li>
                            <li class="list-inline-item"><span class="text-muted">Storage used</span>
                                {{-- <h6>400GB/524.84GB</h6> --}}
                            </li>
                        </ul>
                    </div>
                    <h4 class="page-title">Dashboard</h4>
                    <div class="btn-group mt-2">
                        <ol class="breadcrumb hide-phone p-0 m-0">
                            <li class="breadcrumb-item"><a href="#">Admin</a></li>
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div><!-- end page title end breadcrumb -->
        <div class="row">
            <div class="col-lg-9">
                <div class="row">
                    {{-- <div class="col-lg-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="icon-contain">
                                    <div class="row">
                                        <div class="col-2 align-self-center"><i
                                                class="fas fa-tasks text-gradient-success"></i></div>
                                        <div class="col-10 text-right">
                                            <h5 class="mt-0 mb-1">{{ $j_provinsi }}</h5>
                                            <p class="mb-0 font-12 text-muted">Jumlah Provinsi</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="icon-contain">
                                    <div class="row">
                                        <div class="col-2 align-self-center"><i
                                                class="fas fa-tasks text-gradient-success"></i></div>
                                        <div class="col-10 text-right">
                                            <h5 class="mt-0 mb-1">{{ $j_kota }}</h5>
                                            <p class="mb-0 font-12 text-muted">Jumlah Kab/kota</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="icon-contain">
                                    <div class="row">
                                        <div class="col-2 align-self-center"><i
                                                class="fas fa-tasks text-gradient-success"></i></div>
                                        <div class="col-10 text-right">
                                            <h5 class="mt-0 mb-1">{{ $j_pos }}</h5>
                                            <p class="mb-0 font-12 text-muted">Jumlah Pos</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="icon-contain">
                                    <div class="row">
                                        <div class="col-2 align-self-center"><i
                                                class="fas fa-tasks text-gradient-success"></i></div>
                                        <div class="col-10 text-right">
                                            <h5 class="mt-0 mb-1">{{ $j_stasiun }}</h5>
                                            <p class="mb-0 font-12 text-muted">Jumlah Stasiun</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                </div>
                <div class="card">
                    <div class="card-body">
                        <div class="btn-group btn-group-toggle float-right" data-toggle="buttons"><label
                                class="btn btn-primary btn-sm active"><input type="radio" name="options"
                                    id="option1" checked=""> This Week</label> <label
                                class="btn btn-primary btn-sm"><input type="radio" name="options" id="option2"> Last
                                Month</label></div>
                        <h5 class="header-title mb-4 mt-0">Weekly Record</h5><canvas id="lineChart"
                            height="80"></canvas>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card">
                    <div class="card-body">
                        <div class="dropdown d-inline-block float-right"><a class="nav-link dropdown-toggle arrow-none"
                                id="dLabel4" data-toggle="dropdown" href="#" role="button"
                                aria-haspopup="false" aria-expanded="false"><i
                                    class="fas fa-ellipsis-v font-20 text-muted"></i></a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dLabel4"><a
                                    class="dropdown-item" href="#">Create Project</a> <a class="dropdown-item"
                                    href="#">Open Project</a> <a class="dropdown-item" href="#">Tasks
                                    Details</a></div>
                        </div>
                        <h5 class="header-title mb-4 mt-0">Activity</h5>
                        <div><canvas id="dash-doughnut" height="200"></canvas></div>
                        <ul class="list-unstyled list-inline text-center mb-0 mt-3">
                            <li class="mb-2 list-inline-item text-muted font-13"><i
                                    class="mdi mdi-label text-success mr-2"></i>Active</li>
                            <li class="mb-2 list-inline-item text-muted font-13"><i
                                    class="mdi mdi-label text-danger mr-2"></i>Complete</li>
                            <li class="mb-2 list-inline-item text-muted font-13"><i
                                    class="mdi mdi-label text-warning mr-2"></i>Panding</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- end container -->
</div><!-- end wrapper -->
<!-- Footer -->
@include('layout.footer')
