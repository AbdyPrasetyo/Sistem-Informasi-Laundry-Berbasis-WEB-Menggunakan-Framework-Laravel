@extends('auth.mains')

@section('title', config('app.name') . ' - ' . __('auth.reg_title'))

@section('container')
<h3 class="text-center mb-3">@lang('auth.reg_title')</h3>




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
                    <form class="pt-3" href="" method="POST" >
                        @csrf
                        <div class="form-group">
                          <div class="input-group">
                            <div class="input-group-prepend bg-transparent">
                              <span class="input-group-text bg-transparent border-right-0">
                                <i class="mdi mdi-account-outline text-primary"></i>
                              </span>
                            </div>
                            <input type="text" class="form-control form-control-lg border-left-0 @error('name') is-invalid @enderror" id="name"
                            name="name" placeholder="@lang('auth.name_placeholder')" value="{{old('name')}}"
                            required>
                        @error('name')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                        @enderror
                    </div>
                    </div>


                        <div class="form-group">
                          <div class="input-group">
                            <div class="input-group-prepend bg-transparent">
                              <span class="input-group-text bg-transparent border-right-0">
                                <i class="mdi mdi-email-outline text-primary"></i>
                              </span>
                            </div>
                            <input type="email" class="form-control form-control-lg border-left-0 @error('email') is-invalid @enderror" id="email"
                            name="email" placeholder="@lang('auth.email_placeholder')" value="{{old('email')}}"
                            required>
                        @error('email')
                        <div class="invalid-feedback">
                            {{$message}}
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
                            <input type="password" class="form-control form-control-lg border-left-0 @error('password') is-invalid @enderror"
                            id="password" name="password" placeholder="@lang('auth.password_placeholder')" required>
                        @error('password')
                        <div class="invalid-feedback">
                            {{$message}}
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
                            <input type="password" class="form-control form-control-lg border-left-0 @error('password') is-invalid @enderror"
                             name="password_confirmation"
                            id="exampleInputPassword" placeholder="Masukan ulang kata sandi" required>
                        @error('password')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                        @enderror
                          </div>
                        </div>




                        <div class="mt-3">
                          <button type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">SIGN UP</button>
                        </div>
                        <div class="text-center mt-4 font-weight-light">
                          Already have an account? <a href="{{url('login')}}" class="text-primary">Login</a>
                        </div>
                      </form>















@endsection
