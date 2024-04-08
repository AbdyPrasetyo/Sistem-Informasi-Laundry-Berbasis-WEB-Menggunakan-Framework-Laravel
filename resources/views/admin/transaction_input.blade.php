@extends('admin.template.mains')

@section('css')
    <link href="{{ asset('before/vendor/datatables-bs4/css/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
    <link href="{{ asset('before/vendor/datatables-responsive/css/responsive.bootstrap4.min.css') }}" rel="stylesheet">
    <!-- Add these lines to the head of your HTML -->

@endsection

@section('main-content')

<div class="col-lg stretch-card ">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Tambahkan Transaksi</h4>
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
                    </div>
                </div>
                <form action="{{ route('admin.transactions.session.store') }}" method="post">
                    @csrf


                    <div class="form-group row mb-0">
                        <label for="id-member" class="col-sm-2 col-form-label mb-0">ID Member</label>
                        <div class="col-sm-2">
                            <input type="number" min="1" class="form-control form-control-sm mt-2" id="id-member" name="member-id"
                                @if (isset($memberIdSessionTransaction)) value="{{ $memberIdSessionTransaction }}"
                                disabled title="Harap selesaikan transaksi yang ada untuk mengganti id member" @endif required>
                        </div>
                    </div>
                    <div class="form-group row mb-0">
                        <label for="barang" class="col-sm-2 col-form-label mb-0">Barang</label>
                        <div class="col-sm-4">
                            <select class="form-control mt-2" id="barang" name="item">
                                @foreach ($items as $item)
                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group row mb-0">
                        <label for="servis" class="col-sm-2 col-form-label mb-0">Servis</label>
                        <div class="col-sm-4">
                            <select class="form-control mt-1" id="servis" name="service">
                                @foreach ($services as $service)
                                <option value="{{ $service->id }}">{{ $service->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group row mb-0">
                        <label for="kategori" class="col-sm-2 col-form-label mb-0">Kategori</label>
                        <div class="col-sm-4">
                            <select class="form-control mt-1" id="kategori" name="category">
                                @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                        <div class="form-group row mb-0">
                            <label for="banyak" class="col-sm-2 col-form-label mb-0">Banyak</label>
                            <div class="col-sm-2">
                                <div class="input-group input-group-sm">
                                    <span class="input-group-btn ">
                                        <button type="button" class="quantity-left-minus btn btn-danger btn-number btn-sm" data-type="minus">
                                            <i class="mdi mdi-minus"></i>
                                        </button>
                                    </span>
                                    <input type="text" id="quantity" name="quantity" class="form-control input-number sm text-center" value="1" min="1" max="100">
                                    <span class="input-group-btn ">
                                        <button type="button" class="quantity-right-plus btn btn-success btn-number btn-sm" data-type="plus">
                                            <i class="mdi mdi-plus"></i>
                                        </button>
                                    </span>
                                </div>
                            </div>

                        <div class="col-sm-4">
                            <button type="submit" id="tambah-transaksi" class="btn btn-primary mb-0">Tambah Transaksi</button>
                        </div>
                    </div>
                </form>



        </div>


        <div class="card-body">


            <div class="table-responsive">
                <table class="table table-striped " id="tbl-input-transaksi">
                    <thead>
                        <tr>
                            <th>
                                No
                            </th>
                            <th>
                                Barang
                            </th>
                            <th>
                                Service
                            </th>
                            <th>Kategori</th>
                            <th>Banyak</th>
                            <th>Harga</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if (isset($sessionTransaction))
                        @foreach ($sessionTransaction as $transaction)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $transaction['itemName'] }}</td>
                                <td>{{ $transaction['serviceName'] }}</td>
                                <td>{{ $transaction['categoryName'] }}</td>
                                <td>{{ $transaction['quantity'] }}</td>
                                <td>{{ $transaction['subTotal'] }}</td>
                                <td>
                                    <a href="{{ route('admin.transactions.session.destroy', ['rowId' => $transaction['rowId']]) }}"
                                        class="btn btn-sm btn-outline-danger btn-fw ">Hapus</a>
                                        @if (isset($sessionTransaction))
                                        <button id="btn-bayar" class="btn btn-sm btn-outline-success btn-fw" data-toggle="modal"
                                            data-target="#paymentModal">Bayar</button>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    @endif
                </tbody>
            </table>

            </div>
        </div>



    </div>
</div>


@endsection

@section('modals')
    <x-admin.modals.payment-modal :$serviceTypes :vouchers="$vouchers ?? []" :totalPrice="$totalPrice ?? '0'" :show="isset($sessionTransaction)" />
@endsection

@section('scripts')
    <script src="{{ asset('before/vendor/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('before/vendor/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('before/vendor/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('before/vendor/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>

    <script type="text/javascript">

        $(document).ready(function() {
            $('#tbl-input-transaksi').DataTable({
                "searching": true,
                "bPaginate": true,
                "bLengthChange": true,
                "bFilter": true,
                "bInfo": true
            });
        });

        $(document).ready(function () {
        $(".quantity-right-plus").click(function (e) {
            // Don't allow the button click to submit the form
            e.preventDefault();

            // Get the current value in the quantity input
            var currentVal = parseInt($('#quantity').val());

            // Increment the value if it's less than the maximum value
            if (!isNaN(currentVal) && currentVal < 100) {
                $('#quantity').val(currentVal + 1);
            }
        });

        $(".quantity-left-minus").click(function (e) {
            // Don't allow the button click to submit the form
            e.preventDefault();

            // Get the current value in the quantity input
            var currentVal = parseInt($('#quantity').val());

            // Decrement the value if it's greater than the minimum value
            if (!isNaN(currentVal) && currentVal > 1) {
                $('#quantity').val(currentVal - 1);
            }
        });
    });



</script>

    </script>

    @if (session('id_trs'))
        <script type="text/javascript">
            window.open('{{ route('admin.transactions.print.index', ['transaction' => session('id_trs')]) }}', '_blank');
        </script>
    @endif





@endsection
