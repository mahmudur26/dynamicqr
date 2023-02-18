@extends('user.frame')
@section('content')

<style>
form{
    margin-top: 20px;
    width: 60%;
    margin-left: auto;
    margin-right: auto;
    border-radius: 15px;
    box-shadow: rgba(0, 0, 0, 0.16) 0px 10px 36px 0px, rgba(0, 0, 0, 0.06) 0px 0px 0px 1px;
    padding: 20px 15px 40px 15px;
}
.back_button{
    margin-right: 5px;
}
</style>

<div class="container">
    <form action="{{route('change_url')}}" method="post">
        @csrf
        <input type="hidden" name="qr_id" value="{{$qr->id}}">
        <div class="mb-3">
            <label for="url_text">URL</label>
            <input type="text" class="form-control" name="updated_url" id="url_text" value="{{$qr->input_text}}">
        </div>
            <button type="submit" class="btn btn-success">Change URL</button>
            <a class="btn btn-primary back_button" href="{{route('qr-list')}}">Back to List</a>
    </form>
</div>

@endsection