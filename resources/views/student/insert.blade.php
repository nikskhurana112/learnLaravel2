@extends('student.layout')

@section('content')


    @if( $errors->any() )

     <div class="alert alert-danger">
         @foreach ($errors->all() as $item)
             <b> {{$item}} </b> <br>
         @endforeach
     </div>
     
    @endif

    <form action="create" method="post">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="">Full Name</label>
            <input type="text" class="form-control" value="{{old("full_name")}}" name="full_name" placeholder="Enter Full name">
        </div>
        <div class="form-group">
            <label for="">City</label>
            <input type="text" class="form-control" value="{{old("city")}}" name="city" placeholder="Enter City ">
        </div>
        <div class="form-group">
            <label for="">Age</label>
            <input type="number" min="18" name="age" value="{{old("age")}}" class="form-control" placeholder="Enter Age">

             @if( $errors->has("age") )

                <div class="alert alert-danger">
                    {{-- <b> {{ $errors->get("age")[0] }} </b> --}}

                    @foreach ($errors->get("age") as $item)
                    <b> {{$item}} </b> <br>
                @endforeach
                </div>

            @endif

        </div>
            <div class="form-group">
                <button class="btn btn-success">Submit</button>
            </div>
    </form>
@endsection

