@extends('admin.template.mains')

@section('css')
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="base_url" content="{{ url('admin') }}">
    <link href="{{ asset('before/vendor/datatables-bs4/css/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
    <link href="{{ asset('before/vendor/datatables-responsive/css/responsive.bootstrap4.min.css') }}" rel="stylesheet">
@endsection

@section('main-content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Daftar Harga</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    @if (session('error'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            {{ session('error') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @elseif (session('warning'))
                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                            {{ session('warning') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @elseif (session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('success') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif
                    <div class="card">
                        <div class="card-body">
                            <h5>Tambah Harga</h5>


                            <form action="{{ route('admin.price-lists.store') }}" method="post">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group mb-2">
                                            <label for="barang" class="font-weight-bold">Barang</label>
                                            <div class="row">
                                                <div class="col-md-8">
                                                    <select class="form-control mt-2" id="barang" name="item">
                                                        @foreach ($items as $item)
                                                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="col-md-4">
                                                    <a id="tambah-barang" class="btn btn-sm btn-outline-primary " data-toggle="modal" data-target="#addItemModal">
                                                        <i class="mdi mdi-plus"></i> Jenis Barang
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group mb-2">
                                            <label for="servis" class="font-weight-bold">Servis</label>
                                            <div class="row">
                                                <div class="col-md-8">
                                                    <select class="form-control mt-2" id="servis" name="service">
                                                        @foreach ($services as $service)
                                                            <option value="{{ $service->id }}">{{ $service->name }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="col-md-4">
                                                    <a id="tambah-servis" class="btn btn-sm btn-outline-primary" data-toggle="modal" data-target="#addServiceModal">
                                                        <i class="mdi mdi-plus"></i> Jenis Servis
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group mb-2">
                                            <label for="kategori" class="font-weight-bold">Kategori</label>
                                            <select class="form-control" id="kategori" name="category">
                                                @foreach ($categories as $category)
                                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group mb-2">
                                            <label for="harga-modal" class="font-weight-bold">Harga</label>
                                            <input type="number" class="form-control form-control-sm" id="harga" name="price" required>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary mt-2">Tambah Harga</button>
                            </form>










                            <hr>
                            <h5 class="mt-3">Daftar Harga</h5>
                            <ul class="nav nav-tabs mt-3" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="kiloan-tab" data-toggle="tab" href="#kiloan"
                                        role="tab" aria-controls="kiloan" aria-selected="true">Kiloan</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="satuan-tab" data-toggle="tab" href="#satuan" role="tab"
                                        aria-controls="satuan" aria-selected="false">Satuan</a>
                                </li>
                            </ul>
                            <div class="tab-content mt-3" id="myTabContent">
                                <div class="tab-pane fade show active" id="kiloan" role="tabpanel"
                                    aria-labelledby="kiloan-tab">
                                    <table id="tbl-kiloann" class="table dataTable dt-responsive nowrap table-striped"
                                        style="width:100%">
                                        <thead class="thead-light">
                                            <tr>
                                                <th>No</th>
                                                <th>Barang</th>
                                                <th>Servis</th>
                                                <th>Harga</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($kiloan as $item)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>{{ $item->item->name }}</td>
                                                    <td>{{ $item->service->name }}</td>
                                                    <td>{{ $item->getFormattedPrice() }} /kilo</td>
                                                    <td>
                                                        <a href="#" class="btn btn-outline-warning btn-sm btn-fw btn-ubah-harga"
                                                            data-id="{{ $item->id }}" data-toggle="modal"
                                                            data-target="#changePriceModal">Ubah Harga</a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <div class="tab-pane fade" id="satuan" role="tabpanel" aria-labelledby="satuan-tab">
                                    <table id="tbl-satuan" class="table dataTable dt-responsive nowrap table-striped"
                                        style="width:100%">
                                        <thead class="thead-light">
                                            <tr>
                                                <th>No</th>
                                                <th>Barang</th>
                                                <th>Servis</th>
                                                <th>Harga</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($satuan as $item)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>{{ $item->item->name }}</td>
                                                    <td>{{ $item->service->name }}</td>
                                                    <td>{{ $item->getFormattedPrice() }} /pcs</td>
                                                    <td>
                                                        <a href="#" class="btn btn-outline-warning btn-sm btn-fw btn-ubah-harga"
                                                            data-id="{{ $item->id }}" data-toggle="modal"
                                                            data-target="#changePriceModal">Ubah Harga</a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <hr>
                            <h5 class="mt-3">Daftar Tipe Service</h5>
                            <div class="tab-content mt-3" id="myTabContent">
                                <table id="tbl-service-kiloan" class="table dataTable dt-responsive nowrap table-striped" style="width:100%">
                                    <thead class="thead-light">
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Tipe Service</th>
                                            <th>Biaya</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($serviceTypes as $serviceType)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $serviceType->name }}</td>
                                                <td>{{ $serviceType->getFormattedCost() }}</td>
                                                <td>
                                                    <a href="#" class="btn btn-outline-warning btn-fw btn-sm btn-update-cost"
                                                        data-id="{{ $serviceType->id }}" data-toggle="modal"
                                                        data-target="#updateCostModal">Ubah Harga</a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </div>
@endsection

@section('modals')
    <x-admin.modals.change-price-modal />

    <x-admin.modals.update-cost-modal />

    <x-admin.modals.add-item-modal />

    <x-admin.modals.add-service-modal />
@endsection

@section('scripts')
<script src="{{ asset('before/vendor/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('before/vendor/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('before/vendor/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('before/vendor/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('before/js/ajax-harga.js') }}"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#tbl-satuan').DataTable();
            $('#tbl-kiloann').DataTable();
            $('#tbl-service-kiloan').DataTable();
        });
    </script>
@endsection
