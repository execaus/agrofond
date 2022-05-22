@foreach($response as $item)
    <div class="card update_delete_content">
        <span class="content_font card-footer col-6">
            {{ $item['address'] }}
            <form action="{{route('address.update',$item['id'])}}" method="POST">
                @method('PUT')
                <input value="{{ $item['address'] }}" name="address" class="form_hidden_input input_address form-control ml-3 " id="address_{{ $item['id'] }}" placeholder="Введите адрес">
                <button id="update_btn_hidden_address_{{ $item['id'] }}" type="submit" hidden>Изменить</button>
            </form>
        </span>
        <div class="card-footer">
            <button id="update_btn" data-btn="update_btn_hidden_address_{{ $item['id'] }}" data-target="address_{{ $item['id'] }}" type="button" class="btn btn-info mr-3 update_btn">Изменить</button>
            <form action="{{route('address.destroy',$item['id'])}}" method="post">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Удалить</button>
            </form>
        </div>
    </div>
@endforeach
