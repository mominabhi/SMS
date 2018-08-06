
@include('main')

@section('main_content')



    <div class="prtm-content">


        <div class="row">



            <div class="col-sm-4">
                {!! Form::open(['url' => 'new_sec', 'method' => 'post']) !!}
                    <label> Section Name:  </label>
                    <input type="text" class="form-control" name="name">
                <br>
                    <input type="submit" class="form-control btn btn-success" value="Add New Sec">
                {!! Form::close() !!}
            </div>


            <div class="col-sm-8">
                <div class="table-style">
                    <div class="prtm-block pos-relative">
                        <div class="prtm-block-title mrgn-b-lg">
                            <div class="caption">
                                <h3 class="text-capitalize">All Sections</h3>
                            </div>
                        </div>
                        <div class="prtm-block-content">
                            <div class="table-responsive">
                                <div class="">
                                    <table class="table table-hover table-bordered table-striped">
                                        <thead >
                                        <tr class="bg-primary" >
                                            <th class="text-center">Id</th>
                                            <th class="text-center">Sec Name</th>
                                            <th class="text-center" colspan="2">Edit</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($sections as $section)
                                            @if($sec_id_edit == $section->id)
                                                {!! Form::open(['url' => 'update_sec', 'method' => 'post']) !!}
                                                <tr>
                                                    <td>
                                                        {{$section->id}}
                                                        <input type="hidden" value="{{$section->id}}" name="id" class="form-control" >
                                                    </td>


                                                    <td>
                                                        <input type="text" class="form-control" value="{{$section->name}}" name="name">
                                                    </td>
                                                    <td colspan="2">
                                                        <button type="submit"  class=" btn-success">
                                                            <i class="material-icons">update</i>
                                                        </button>
                                                    </td>

                                                </tr>
                                                {!! Form::close() !!}
                                            @else
                                                <tr>
                                                    <td>{{$section->id}}</td>
                                                    <td>{{$section->name}}</td>
                                                    <td>
                                                        <a href="{{URL::to('/edit/'.$section->id)}}" class="">
                                                            <i class="material-icons">edit</i>
                                                        </a>
                                                    </td>
                                                    <td>
                                                        <a href="{{URL::to('/delete/'.$section->id)}}" class="">
                                                            <i class="material-icons">delete</i>
                                                        </a>
                                                    </td>
                                                </tr>
                                            @endif

                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



        </div>



    </div>


    @endsection