@extends('admin_panel.base')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Формы обратной связи</h1>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div id="slider_content" class="col">
                        @foreach($forms as $item)
                            <div class="card update_delete_content">
                                <span class="content_font card-footer col-6 col-md-10">
                                    <div class="col">
                                        {{ $item['name'] }}
                                    </div>
                                    <div class="col">
                                        {{ $item['telephone'] }}
                                    </div>
                                    <div class="col">
                                        {{ $item['email'] }}
                                    </div>
                                    <div class="col">
                                        @if($item['message'])
                                            {{ $item['message'] }}
                                        @else
                                            Без сообщения
                                        @endif
                                    </div>
                                </span>
                                <div class="card-footer">
                                    <div class="row">
                                        <form action="{{route('forms.destroy', $item['id'])}}" method="POST">
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
    <script src="{{ asset('js/pages/forms.js') }}"></script>
@endsection
