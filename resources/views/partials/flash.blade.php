@if(Session::has('message'))
    <div class="alert {{Session::get('message')['type']}}">
        <p>{{Session::get('message')['success']?? Session::get('message')['warning']?? Session::get('message')['alert']?? ''}}</p>
    </div>
@endif