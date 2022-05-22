@foreach($response as $item)
    <div class="card update_delete_content">
        <span class="content_font card-footer col-6">
            {{ $item['telephone'] }}
            <form action="{{route('telephone.update',$item['id'])}}" method="POST">
                @method('PUT')
                <input value="{{ $item['telephone'] }}" name="telephone" class="form_hidden_input form-control ml-3 " id="telephone_{{ $item['id'] }}" placeholder="Введите адрес">
                <button id="update_btn_hidden_telephone{{ $item['id'] }}" type="submit" hidden>Изменить</button>
            </form>
        </span>
        <div class="card-footer">
            <div class="row">
                <button id="update_btn" data-btn="update_btn_hidden_telephone{{ $item['id'] }}" data-target="telephone_{{ $item['id'] }}" type="button" class="btn btn-info mr-3 update_btn">Изменить</button>
                <form action="{{route('telephone.destroy',$item['id'])}}" method="post">
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Удалить</button>
                </form>
            </div>
        </div>
    </div>
@endforeach
