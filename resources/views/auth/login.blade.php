@extends('auth.mains')

@section('title', config('app.name') . ' - ' . __('auth.log_title'))

@section('container')


<h3 class="text-center mb-3">@lang('auth.log_title')</h3>


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


                        <form class="pt-3" action="" method="POST">
                            @csrf
                            <div class="form-group">
                              <div class="input-group">
                                <div class="input-group-prepend bg-transparent">
                                  <span class="input-group-text bg-transparent border-right-0">
                                    <i class="mdi mdi-account-outline text-primary"></i>
                                  </span>
                                </div>
                                <input type="email" name="email" class="form-control form-control-lg border-left-0 @error('email') is-invalid @enderror" id="email" placeholder="Email"  value="{{ old('email') }}">

                                @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                              </div>
                            </div>
                            <div class="form-group">
                              <div class="input-group">
                                <div class="input-group-prepend bg-transparent">
                                  <span class="input-group-text bg-transparent border-right-0">
                                    <i class="mdi mdi-lock-outline text-primary"></i>
                                  </span>
                                </div>
                                <input type="password" name="password" class="form-control form-control-lg border-left-0 @error('password') is-invalid @enderror" id="exampleInputPassword" placeholder="Kata Sandi">

                                @error('password')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                              </div>
                            </div>
                            <div class="my-2 d-flex justify-content-between align-items-center">
                              <div class="form-check">
                                <label class="form-check-label text-muted">
                                  <input type="checkbox" class="form-check-input" id="remember" name="remember">
                                  Keep me signed in
                                </label>
                              </div>
                            </div>
                            <div class="my-3">
                              <button type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">LOGIN</button>
                            </div>

                            <div class="text-center mt-4 font-weight-light">
                              Don't have an account? <a href="{{ url('register') }}" class="text-primary">Create</a>
                            </div>
                          </form>





@endsection
