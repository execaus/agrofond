@extends('admin_panel.base')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Контакты</h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div id="telephone_content" class="col-md-4">
                    <div class="form_content">
                        <!-- general form elements -->
                        <div class="card card-primary">
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form action="{{ route('telephone.store') }}" method="POST" class="save_form">
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Телефон</label>
                                        <input name="telephone" class="form-control" id="exampleInputEmail1" placeholder="Введите телефон">
                                    </div>
                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Добавить</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div id="address_content" class="col-md-4">
                    <div class="form_content">
                        <!-- general form elements -->
                        <div class="card card-primary">
                        <!-- /.card-header -->
                            <!-- form start -->
                            <form action="{{ route('address.store') }}" method="POST" class="save_form">
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Адрес</label>
                                        <input name="address" class="form-control" id="exampleInputEmail1" placeholder="Введите адрес">
                                    </div>
                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Добавить</button>
                                </div>
                            </form>
                    </div>
                </div>
                    <!-- /.card -->

                </div>

                <div id="email_content" class="col-md-4">
                    <div class="form_content">
                        <!-- general form elements -->
                        <div class="card card-primary">
                        <!-- /.card-header -->
                            <!-- form start -->
                            <form action="{{ route('email.store') }}" method="POST" class="save_form">
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Email</label>
                                        <input name="email_address" class="form-control" id="exampleInputEmail1" placeholder="Введите Email">
                                    </div>
                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Добавить</button>
                                </div>
                            </form>
                        </div>
                        <!-- /.card -->

                    </div>
                </div>
                <!--/.col (left) -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
@endsection

@section('script')
    <script src="{{ asset('js/api/contacts.js') }}"></script>
@endsection
