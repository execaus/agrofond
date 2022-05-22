@extends('admin_panel.base')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Готовые решения</h1>
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
                                <form action="{{ route('solutions.store') }}" method="POST" enctype="multipart/form-data" class="save_form">
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
                                            <label for="exampleInputEmail1">Заголовок</label>
                                            <input name="title" type="text" class="form-control" id="exampleInputEmail1" placeholder="Введите заголовок">
                                        </div>
                                        <div class="form-group col">
                                            <label for="exampleInputEmail1">Наименование</label>
                                            <input name="name" type="text" class="form-control" id="exampleInputEmail1" placeholder="Введите текст">
                                        </div>
                                        <div class="form-group col">
                                            <label>Категория</label>
                                            <select name="category_id" class="form-control">
                                                <option hidden>Выберите категорию</option>
                                                @foreach($categories as $item)
                                                    <option value="{{ $item['id'] }}">{{ $item['name'] }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary">Добавить</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        @foreach($solutions as $solution)
                            <div class="card update_delete_content">
                                <span class="content_font card-footer col-6 col-md-10">
                                    <div class="col">
                                        <a href="{{ asset('storage/'.$solution['file']) }}">{{ str_replace(['solutions/'], '',$solution['file']) }}</a>
                                    </div>
                                    <div class="col">
                                        {{ $solution['title'] }}
                                    </div>
                                    <div class="col">
                                        {{ $solution['name'] }}
                                    </div>
                                    <div class="col">
                                        {{ \App\Models\Solutions::getCategoriesText($solution['category_id']) }}
                                    </div>
                                </span>
                                <div class="card-footer">
                                    <div class="row">
                                        <button type="button" class="btn btn-info mr-3" data-bs-toggle="modal" data-bs-target="#modal_{{ $solution['id'] }}">
                                            Изменить
                                        </button>
                                        <div class="modal fade" id="modal_{{ $solution['id'] }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="staticBackdropLabel">Изменение слайдера</h5>
                                                        <button type="button" class="btn btn-close" data-bs-dismiss="modal" aria-label="Close">
                                                            <i class="fas fa-times"></i>
                                                        </button>
                                                    </div>
                                                    <form action="{{ route('solutions.update', $solution['id']) }}" method="POST" enctype="multipart/form-data">
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
                                                                    <textarea style="height: 100px; resize: none" name="title" type="text" class="form-control">{{ $solution['title'] }}</textarea>
                                                                </div>
                                                                <div class="form-group col">
                                                                    <label for="exampleInputEmail1">Текст</label>
                                                                    <textarea style="height: 250px; resize: none" name="name" type="text" class="form-control">{{ $solution['name'] }}</textarea>
                                                                </div>
                                                                <div class="form-group col">
                                                                    <label>Категория</label>
                                                                    <select name="category_id" class="form-control">
                                                                        <option value="{{ $solution['category_id'] }}" hidden>{{ \App\Models\Solutions::getCategoriesText($solution['category_id']) }}</option>
                                                                        @foreach($categories as $item)
                                                                            <option value="{{ $item['id'] }}">{{ $item['name'] }}</option>
                                                                        @endforeach
                                                                    </select>
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
                                        <form action="{{route('solutions.destroy', $solution['id'])}}" method="POST">
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
    <script src="{{ asset('js/pages/solutions.js') }}"></script>
@endsection
