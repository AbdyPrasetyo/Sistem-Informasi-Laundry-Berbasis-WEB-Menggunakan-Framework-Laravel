@extends('admin.template.mains')

@section('css')
<link href="{{ asset('before/vendor/datatables-bs4/css/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
<link href="{{ asset('before/vendor/datatables-responsive/css/responsive.bootstrap4.min.css') }}" rel="stylesheet">
<meta name="csrf-token" content="{{ csrf_token() }}">
<meta name="base_url" content="{{ url('admin') }}">
@endsection

@section('main-content')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Saran atau Komplain</h1>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h5>Daftar Saran atau Komplain</h5>
                        <div class="row">
                            <div class="col-sm-6">

                                <table class="table">
                                    <thead class="thead-light">
                                        <tr>
                                            <th>Nama</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>


                                        @foreach ($complaints as $c)
                                        <tr>
                                            <td>{{ $c->user->name }}</td>
                                            <td><button href="#" class="btn btn-outline-primary lihat-isi"
                                                    data-id="{{ $c->id }}">Lihat isi
                                                    komplain</button></td>
                                        </tr>
                                        @endforeach

                                        @foreach ($suggestions as $s)
                                        <tr>
                                            <td>{{ $s->user->name }}</td>
                                            <td><button href="#" class="btn btn-outline-primary lihat-isi"
                                                    data-id="{{ $s->id }}">Lihat isi
                                                    saran</button></td>
                                        </tr>
                                        @endforeach
                                        @foreach ($happy as $h)
                                        <tr>
                                            <td>{{ $h->user->name }}</td>
                                            <td><button href="#" class="btn btn-outline-primary lihat-isi"
                                                    data-id="{{ $h->id }}">Lihat isi
                                                    Kepuasan</button></td>
                                        </tr>
                                        @endforeach
                                        <hr>
                                        <tr class="text-center">
                                            <td>Jumlah</td>
                                            <td>{{ $count }}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="isi-aduan">Isi Aduan</label>
                                    <textarea class="form-control" id="isi-aduan" rows="3" disabled></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="balas">Balas</label>
                                    <textarea class="form-control" id="balas" rows="3" disabled></textarea>
                                </div>
                                <button id="btn-kirim-balasan" class="btn btn-primary" data-id="">Kirim</button>
                            </div>
                        </div>


                    </div><!-- /.container-fluid -->
                </div>

            </div>
        </div>
    </div>
</div>








    <div class="content mt-4 mb-5">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h5>Data Saran dan Komplain</h5>
                            <div class="row">
                                <table id="tbl-transaksi-priority"
                                    class="table dt-responsive nowrap mt-2 mb-2 table-striped" style="width: 100%">
                                    <thead class="thead-light">
                                        <tr>
                                            <th>No</th>
                                            <th>Id Member</th>
                                            <th>Isi Pesan Costumer</th>
                                            <th>Balasan</th>
                                            <th>Jenis Pesan</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <tr>
                                            @foreach ($all as $a )

                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $a->user_id }}</td>
                                            <td>{{ $a->body }}</td>
                                            <td>{{ $a->reply }}</td>

                                            <td>
                                                @if ($a->type == 1)
                                                Saran
                                                @elseif ($a->type == 2)
                                                Komplain
                                                @elseif ($a->type == 3)
                                                Kepuasan
                                                @endif
                                        </tr>
                                        @endforeach

                                    </tbody>
                                </table>

                            </div><!-- /.container-fluid -->
                        </div>

                    </div>
                </div>
            </div>
        </div>





<div class="content mt-4 mb-5">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h5>Data FAQ</h5>
                        <div class="row">
                            <table id="tbl-tr"
                                class="table dt-responsive nowrap mt-2 mb-2 table-striped" style="width: 100%">
                                <thead class="thead-light">
                                    <tr>
                                        <th>No</th>
                                        <th>Pesan</th>
                                        <th>Nama</th>
                                        <th>Email</th>
                                        <th>Subject</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <tr>
                                        @foreach ($message as $ms )

                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $ms->message }}</td>
                                        <td>{{ $ms->name }}</td>
                                        <td>{{ $ms->email }}</td>
                                        <td>{{ $ms->subject }}</td>

                                    </tr>
                                    @endforeach

                                </tbody>
                            </table>

                        </div><!-- /.container-fluid -->
                    </div>

                </div>
            </div>
        </div>
    </div>




        @endsection

        @section('scripts')
        <script src="{{ asset('before/js/ajax-saran.js') }}"></script>


        <script src="{{ asset('before/vendor/datatables/jquery.dataTables.min.js') }}"></script>
        <script src="{{ asset('before/vendor/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
        <script src="{{ asset('before/vendor/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
        <script src="{{ asset('before/vendor/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
        <script src="{{ asset('before/js/ajax.js') }}"></script>
        <script type="text/javascript">
            $(document).ready(function () {
                $('#tbl-transaksi-priority').DataTable();
                $('#tbl-tr').DataTable();
            });
        </script>
        @endsection
