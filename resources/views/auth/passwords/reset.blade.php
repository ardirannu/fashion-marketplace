@extends('home.layouts.master')

@section('title')
    Rainbow | Marketplace
@endsection

@section('content')
<!-- Tampilan Web -->
<section class="spad">
    <div class="d-sm-none d-none d-md-block">
        <div class="container">
            <table class="table table-bordered cobain">
                <tbody>
                    <tr>
                        <td class="rrr">
                            <i class="fa fa-info-circle info"></i>
                            <div class="butuhBantuan">
                                <span class="font-weight-bolder">Butuh Bantuan? Hubungi Customer Sevice Kami</span>
                                <p>Jam Kerja, Senin - Jumat (9.00 - 18.00) <br>
                                    Sabtu - Minggu (8.00 -17.00)
                                </p>
                            </div>
                        </td>
                        <td class="bbb">
                            <i class="fa fa-envelope pesan"></i>
                            <div class="emailKami">
                                <span class="font-weight-bolder">Email Kami</span>
                                <p>cs@rainbow.com</p>
                            </div>
                        </td>
                        <td>
                            <i class="fa fa-comments info"></i>
                            <div class="emailKami ">
                                <span class="font-weight-bolder">SMS Kami</span>
                                <p>0812 8880 4414</p>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="row justify-content-center text-center mt-5">
                <div class="col">
                    <h3 class="font-weight-bolder">Reset Password</h3>
                </div>
            </div>
            <form method="POST" action="{{ route('password.update') }}">
            @csrf
            <div class="form-group row justify-content-center mt-5">
                <label for="email" class="col-md-1 col-form-label">Email</label>
                <div class="col-md-5 ml-4">
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="form-group row justify-content-center mt-5">
                <label for="password" class="col-md-1 col-form-label">Password</label>
                <div class="col-md-5 ml-4">
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="form-group row justify-content-center mt-5">
                <label for="password" class="col-md-1 col-form-label">Konfirmasi Password</label>
                <div class="col-md-5 ml-4">
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                </div>
            </div>
            <div class="row justify-content-center text-center mt-4  ml-2">
                <div class="col-sm-4">
                    <button type="submit" class="btn btn-secondary  keranjangButton text-white px-5">Reset Password</button>
                </div>
            </div>
            </form>
            <div class="row justify-content-center text-center ml-1 mt-3">
                <div class="col">
                    <p class="belumPunya">Sudah Punya Akun Rainbow? <a href="{{ route('login') }}">Login Sekarang</a></p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End -->

<!-- sesi Mobile -->
<div class="d-md-none d-sm-block">
    <div class="text-center cobba">
        <img src="img/logo_website_shayna.png" width="35%">
    </div>
    <div class="container">
        <div class="row justify-content-center text-center mt-5">
            <div class="col">
                <h4 class="font-weight-bolder">Reset Password</h4>
            </div>
        </div>
        <form method="POST" action="{{ route('password.update') }}">
            @csrf
            <div class="form-group row mt-4">
                <div class="col-md-10">
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="form-group row mt-4">
                <div class="col-md-10">
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Masukkan Password baru" required autocomplete="new-password">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="form-group row mt-4">
                <div class="col-md-10">
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Konfirmasi Password baru" required autocomplete="new-password">
                </div>
            </div>
            <button type="submit" class="btn-prosesMobile btn-block text-uppercase">Submit</button>
            <div class="row justify-content-center text-center mt-2 mb-5">
                <div class="col ">
                    <p class="belumPunya fontMobileLogin">Sudah Punya Akun Rainbow? <a href="{{ route('login') }}">Login Sekarang</a></p>
                </div>
            </div>
        </form>

    </div>
</div>
<!-- End Mobile -->
@endsection

