@extends('admin.template.mains')

@section('css')
    <link href="{{ asset('before/vendor/datatables-bs4/css/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
    <link href="{{ asset('before/vendor/datatables-responsive/css/responsive.bootstrap4.min.css') }}" rel="stylesheet">
@endsection

@section('main-content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Daftar Member</h1>
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
                            <table id="members" class="table table-striped nowrap mt-2 mb-2" style="width: 100%" >
                                <thead class="thead-light">
                                    <tr>
                                        <th>No</th>
                                        <th>ID Member</th>
                                        <th>Nama Member</th>
                                        <th>Jenis Kelamin</th>
                                        <th>Alamat</th>
                                        <th>No Telp</th>
                                        <th>Poin</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($members as $member)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $member->id }}</td>
                                            <td>{{ $member->name }}</td>
                                            <td>
                                                @if ($member->gender == 'L')
                                                    Laki-Laki
                                                @elseif ($member->gender == 'P')
                                                    Perempuan
                                                @else
                                                @endif
                                            </td>
                                            <td>{{ $member->address }}</td>
                                            <td>{{ $member->phone_number }}</td>
                                            <td>{{ $member->point }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </div>
@endsection

@section('scripts')
<script src="{{ asset('before/vendor/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('before/vendor/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('before/vendor/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('before/vendor/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('before/js/ajax.js') }}"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#members').DataTable();
        });
    </script>
@endsection
