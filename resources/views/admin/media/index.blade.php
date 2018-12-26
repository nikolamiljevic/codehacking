@extends('layouts.admin')


@section('content')

<h1>Media</h1>

    <table class="table">
    @if($photos)
        <thead>
            <tr>
                <th>id</th>
                <th>Name</th>
                <th>Created</th>
                <th>Email</th>
            </tr>
        </thead>

        <tbody>
            @foreach($photos as $photo)
                <tr>
                <td>{{$photo->id}}</td>
                <td><img height="50" src="{{$photo->file}}" alt=""></td>
                <td>{{$photo->created_at ? $photo->created_at : "no date"}}</td>
               <td>
                {!!Form::open(['method'=>'delete','action'=>['AdminMediasController@destroy',$photo->id]])!!}
                       
                <div class="form-group">
                    {!!Form::submit('Delete media',['class'=>'btn btn-danger col-sm-4'])!!}
                </div>
                {!!Form::close()!!}
               </td>
                </tr>
            @endforeach
          
        </tbody>
    </table>
    @endif
@endsection