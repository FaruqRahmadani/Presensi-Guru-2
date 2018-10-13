@extends('layouts/masterDepan')
@section('content-heading','Login Tambah')
@section('content')
<body class="layout-h" style="margin-top: 10%">
    <div class="wrapper">
            <section class="section-container">
                <div class="content-wrapper">
                    <div class="row">
                        <div class="col-xl-8"></div>
                        <div class="col-xl-4">
                            <div class="row mr-3">
                                <div class="col-xl-12">
                                    <div class="card card-default">
                                        <div class="card-header">Login</div>
                                        <div class="card-body">
                                            <form action="">
                                                <div class="form-grop">
                                                    <label for="">Username</label>
                                                    <input type="text" class="form-control">
                                                </div>
                                                <div class="form-grop">
                                                    <label for="">Password</label>
                                                    <input type="password" class="form-control">
                                                </div>
                                                <br>
                                                <div class="clear-fix">
                                                    <div class="float-right">
                                                        <a href="">Lupa Password</a>
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="form-group"><button class="btn btn-md btn-info">Login</button></div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>    
</body>
@endsection