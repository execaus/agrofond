@foreach($response as $item)
    <div class="card update_delete_content">
        <span class="content_font card-footer col-6">
            {{ $item['email_address'] }}
            <form action="{{route('email.update',$item['id'])}}" method="POST">
                @method('PUT')
                <input value="{{ $item['email_address'] }}" name="email_address" class="form_hidden_input form-control ml-3 " id="email_{{ $item['id'] }}" placeholder="Введите адрес">
                <button id="update_btn_hidden_email_{{ $item['id'] }}" type="submit" hidden>Изменить</button>
            </form>
        </span>
        <div class="card-footer">
            <button id="update_btn" data-btn="update_btn_hidden_email_{{ $item['id'] }}" data-target="email_{{ $item['id'] }}" type="button" class="btn btn-info mr-3 update_btn">Изменить</button>
            <form action="{{route('email.destroy',$item['id'])}}" method="post">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Удалить</button>
            </form>
        </div>
    </div>
@endforeach
