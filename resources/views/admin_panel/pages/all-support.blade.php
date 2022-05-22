@extends('admin_panel.base')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Меры поддержки</h1>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col">
                        @forelse($support_measures as $item)
                            <div class="card update_delete_content">
                                <div>
                                    <span class="card-footer">
                                        <div class="col">
                                            <img style="width: 400px" src="{{ asset('storage/'.$item['image']) }}" alt="">
                                            <div class="col content_font mt-3">
                                                {{ \App\Models\SupportMeasures::getTypesText($item['support_type']) }}
                                            </div>
                                            <div class="col content_font mt-3">
                                                <a href="{{ asset('storage/'.$item['file']) }}">{{ str_replace(['support/files/'], '',$item['file']) }}</a>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="col content_font">
                                                {{ $item['title'] }}
                                            </div>
                                            <div class="col">
                                                {{ $item['text'] }}
                                            </div>
                                        </div>
                                    </span>
                                    <div class="card-footer">
                                        <div class="row ml-1">
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
                                                        <form action="{{ route('support.update', $item['id']) }}" method="POST" enctype="multipart/form-data">
                                                            @csrf
                                                            @method('PUT')
                                                            <div class="modal-body">
                                                                <div class="card-body">
                                                                    <div class="form-group col">
                                                                        <label for="exampleInputFile">Загрузка изображения</label>
                                                                        <div class="custom-file">
                                                                            <input name="image" type="file" class="custom-file-input">
                                                                            <label class="custom-file-label" for="exampleInputFile">Выбрать изображение</label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group col">
                                                                        <label for="exampleInputFile">Загрузка файла</label>
                                                                        <div class="custom-file">
                                                                            <input name="file" type="file" class="custom-file-input">
                                                                            <label class="custom-file-label" for="exampleInputFile">Выбрать файл</label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group col">
                                                                        <label for="exampleInputEmail1">Заголовок</label>
                                                                        <textarea style="height: 100px; resize: none" name="title" type="text" class="form-control">{{ $item['title'] }}</textarea>
                                                                    </div>
                                                                    <div class="form-group col">
                                                                        <label for="exampleInputEmail1">Текст</label>
                                                                        <textarea style="height: 250px; resize: none" name="text" type="text" class="form-control">{{ $item['text'] }}</textarea>
                                                                    </div>
                                                                    <div class="form-group col">
                                                                        <label>Тип поддержки</label>
                                                                        <select name="support_type" class="form-control">
                                                                            <option value="{{ $item['support_type'] }}" hidden>{{ \App\Models\SupportMeasures::getTypesText($item['support_type']) }}</option>
                                                                            @foreach($support_types as $support_type)
                                                                                <option value="{{ $support_type['id'] }}">{{ $support_type['name'] }}</option>
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
                                            <form action="{{route('support.destroy',$item['id'])}}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger">Удалить</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @empty
                            Нету мер поддержки
                        @endforelse
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
    <script src="{{ asset('js/pages/support.js') }}"></script>
@endsection
