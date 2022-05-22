@extends('admin_panel.base')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>База знаний</h1>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div id="slider_content" class="col">
                        <div class="form_content">
                            <div class="card card-primary">
                                <form action="{{ route('knowledge.store') }}" method="POST" enctype="multipart/form-data" class="save_form">
                                    @csrf
                                    <div class="card-body row">
                                        <div class="form-group col">
                                            <label for="exampleInputFile">Загрузка файла</label>
                                            <div class="input-group">
                                                <div class="custom-file">
                                                    <input name="file" type="file" class="custom-file-input" id="exampleInputFile">
                                                    <label class="custom-file-label" for="exampleInputFile">Выбрать файл</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group col">
                                            <label for="exampleInputEmail1">Название</label>
                                            <input name="name" type="text" class="form-control" id="exampleInputEmail1" placeholder="Введите заголовок">
                                        </div>
                                        <div class="form-group col">
                                            <label for="exampleInputEmail1">Описание</label>
                                            <input name="description" type="text" class="form-control" id="exampleInputEmail1" placeholder="Введите текст">
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary">Добавить</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        @foreach($knowledge as $item)
                            <div class="card update_delete_content">
                                <span class="content_font card-footer col-6 col-md-10">
                                    <div class="col">
                                        <a href="{{ asset('storage/'.$item['file']) }}">{{ str_replace(['knowledge/'], '',$item['file']) }}</a>
                                    </div>
                                    <div class="col">
                                        {{ $item['name'] }}
                                    </div>
                                    <div class="col">
                                        {{ $item['description'] }}
                                    </div>
                                </span>
                                <div class="card-footer">
                                    <div class="row">
                                        <button type="button" class="btn btn-info mr-3" data-bs-toggle="modal" data-bs-target="#modal_{{ $item['id'] }}">
                                            Изменить
                                        </button>
                                        <div class="modal fade" id="modal_{{ $item['id'] }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="staticBackdropLabel">Изменение слайдера</h5>
                                                        <button type="button" class="btn btn-close" data-bs-dismiss="modal" aria-label="Close">
                                                            <i class="fas fa-times"></i>
                                                        </button>
                                                    </div>
                                                    <form action="{{ route('knowledge.update', $item['id']) }}" method="POST" enctype="multipart/form-data">
                                                        @csrf
                                                        @method('PUT')
                                                        <div class="modal-body">
                                                            <div class="card-body">
                                                                <div class="form-group col">
                                                                    <label for="exampleInputFile">Загрузка файла</label>
                                                                    <div class="input-group">
                                                                        <div class="custom-file">
                                                                            <input name="file" type="file" class="custom-file-input" id="exampleInputFile">
                                                                            <label class="custom-file-label" for="exampleInputFile">Выбрать файл</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group col">
                                                                    <label for="exampleInputEmail1">Заголовок</label>
                                                                    <textarea style="height: 100px; resize: none" name="name" type="text" class="form-control">{{ $item['name'] }}</textarea>
                                                                </div>
                                                                <div class="form-group col">
                                                                    <label for="exampleInputEmail1">Текст</label>
                                                                    <textarea style="height: 250px; resize: none" name="description" type="text" class="form-control">{{ $item['description'] }}</textarea>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Закрыть</button>
                                                            <button type="submit" class="btn btn-primary">Сохранить</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <form action="{{route('knowledge.destroy', $item['id'])}}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Удалить</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        @endforeach
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
    <script src="{{ asset('js/pages/knowledge.js') }}"></script>
@endsection
