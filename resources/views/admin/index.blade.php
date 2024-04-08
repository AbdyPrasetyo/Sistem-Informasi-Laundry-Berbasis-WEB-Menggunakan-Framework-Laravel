@extends('admin.template.mains')

@section('css')
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
@endsection

@section('main-content')
<div class="row">
    <div class="col-sm-6 mb-4 mb-xl-0">
        <div class="d-lg-flex align-items-center">
            <div>
                <h3 class="text-dark font-weight-bold mb-2">Hi, welcome back!</h3>
                <h6 class="font-weight-normal mb-2">Last login was 23 hours ago. View details</h6>
            </div>

        </div>
    </div>

</div>


<div class="row">
    <div class="col-lg-3 stretch-card ">
        <div class="card sale-diffrence-border ">
            <div class="card-body pb-0">
                <div class="d-flex align-items-center justify-content-between">
                    <h2 class="text-primary font-weight-bold">{{ $membersCount }}</h2>
                    <i class="mdi mdi-account-outline mdi-18px text-dark"></i>
                </div>
            </div>
            <canvas id="newClient"></canvas>
            <div class="line-chart-row-title">Jumlah Member</div>
        </div>
    </div>
    <div class="col-lg-3 stretch-card">
        <div class="card sale-diffrence-border ">
            <div class="card-body pb-0">
                <div class="d-flex align-items-center justify-content-between">
                    <h2 class="text-primary font-weight-bold">{{ $productCount }}</h2>
                    <i class="mdi  mdi-archive mdi-18px text-dark"></i>
                </div>
            </div>
            <canvas id="orderRecieved"></canvas>
            <div class="line-chart-row-title">Jumlah Produk</div>
        </div>
    </div>
    <div class="col-lg-3 stretch-card">
        <div class="card sale-diffrence-border">
            <div class="card-body pb-0">
                <div class="d-flex align-items-center justify-content-between">
                    <h2 class="text-primary font-weight-bold">{{ $voucherCount }}</h2>
                    <i class="mdi mdi-cash-100 mdi-19px text-dark"></i>
                </div>
            </div>
            <canvas id="projects"></canvas>
            <div class="line-chart-row-title">Jumlah Voucher</div>
        </div>
    </div>



    <div class="col-lg-3 stretch-card">
        <div class="card sale-diffrence-border ">
            <div class="card-body pb-0">
                <div class="d-flex align-items-center justify-content-between">
                    <h2 class="text-primary font-weight-bold">{{ $transactionsCount }}</h2>
                    <i class="mdi mdi-cart-outline mdi-18px text-dark"></i>
                </div>
            </div>
            <canvas id="invoices"></canvas>
            <div class="line-chart-row-title">Jumlah Transaksi</div>
        </div>
    </div>


    <!-- content-wrapper ends -->
    <div class="col-lg-12 grid-margin stretch-card mt-5">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Transaksi Berjalan (Priority Service)</h4>

                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>
                                    No
                                </th>
                                <th>
                                    Tanggal
                                </th>
                                <th>
                                    Status
                                </th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($priorityTransactions as $transaction)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ date('d F Y', strtotime($transaction->created_at)) }}</td>
                                <td>
                                    @if ($transaction->status_id != '3')
                                        <span class="text-warning">{{ $transaction->status->name }}</span>
                                    @else
                                        <span class="text-success">{{ $transaction->status->name }}</span>
                                    @endif
                                </td>
                            </tr>
                        @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>




    <!-- content-wrapper ends -->
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Transaksi Berjalan</h4>

                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>
                                    No
                                </th>
                                <th>
                                    Tanggal
                                </th>
                                <th>
                                    Status
                                </th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($recentTransactions as $transaction)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ date('d F Y', strtotime($transaction->created_at)) }}</td>
                                <td>
                                    @if ($transaction->status_id != '3')
                                        <span class="text-warning">{{ $transaction->status->name }}</span>
                                    @else
                                        <span class="text-success">{{ $transaction->status->name }}</span>
                                    @endif
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

@endsection
