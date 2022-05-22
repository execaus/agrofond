@extends('admin_panel.base')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Услуги</h1>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col">
                        <div class="form_content">
                            <div class="card card-primary">
                                <form action="{{ route('services.store') }}" method="POST" class="save_form flex-column" enctype="multipart/form-data">
                                    @csrf
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="exampleInputFile">Загрузка изображения</label>
                                            <div class="input-group">
                                                <div class="custom-file">
                                                    <input name="image" type="file" class="custom-file-input" id="exampleInputFile">
                                                    <label class="custom-file-label" for="exampleInputFile">Выбрать файл</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group col">
                                            <label for="exampleInputEmail1">Заголовок</label>
                                            <textarea style="height: 100px; resize: none" name="heading" class="form-control" id="exampleInputEmail1" placeholder="Введите заголовок"></textarea>
                                        </div>
                                        <div class="form-group col">
                                            <label for="exampleInputEmail1">Текст</label>
                                            <textarea style="height: 250px; resize: none" name="text" class="form-control" id="exampleInputEmail1" placeholder="Введите текст"></textarea>
                                        </div>
                                    </div>
                                    <div class="card-footer ml-2">
                                        <button type="submit" class="btn btn-primary">Добавить</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!--/.col (left) -->
                </div>
                <!-- /.row -->
                <a href="{{ route('services.show-all') }}" class="btn btn-success ml-4">Посмотреть все услуги</a>
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection

@section('script')
    <script src="{{ asset('js/pages/services.js') }}"></script>
@endsection
