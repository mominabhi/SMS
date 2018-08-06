
@include('main')

@section('main_content')



    <div class="prtm-content">


        <div class="row">



            <div class="col-sm-4">
                {!! Form::open(['url' => 'new_class', 'method' => 'post']) !!}
                <label> Class Name:  </label>
                <input type="text" class="form-control" name="name">
                <br/>
                <label> Select sections with <span style="background-color: yellow"> Ctrl+ mouse click </span>  </label>

                <select class="form-control" multiple name="sections[]" style="height: 200px">
                    @foreach($sections as $sec)
                        <option value="{{$sec->id}}">{{$sec->name}}</option>
                    @endforeach
                </select>
                <br>
                <input type="submit" class="form-control btn btn-success" value="Add New Class">
                {!! Form::close() !!}
            </div>


            <div class="col-sm-8">
                <div class="table-style">
                    <div class="prtm-block pos-relative">
                        <div class="prtm-block-title mrgn-b-lg">
                            <div class="caption">
                                <h3 class="text-capitalize">All Classes</h3>
                            </div>
                        </div>
                        <div class="prtm-block-content">
                            <div class="table-responsive">
                                <div class="">
                                    <table class="table table-hover table-bordered table-striped">
                                        <thead >
                                        <tr class="bg-primary" >
                                            <th class="text-center">Id</th>
                                            <th class="text-center">Class Name</th>
                                            <th class="text-center">Sections</th>
                                            <th class="text-center" colspan="2">Edit</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($classes as $class)
                                            @if($class_id_edit == $class->id)
                                                {!! Form::open(['url' => 'update_class', 'method' => 'post']) !!}
                                                <tr>
                                                    <td>
                                                        {{$class->id}}
                                                        <input type="hidden" value="{{$class->id}}" name="id" class="form-control" >
                                                    </td>


                                                    <td>
                                                        <input type="text" class="form-control" value="{{$class->name}}" name="name">
                                                    </td>
                                                    <td>
                                                        <select class="form-control" name="sections[]" multiple style="display: none">
                                                            @foreach($class->db_secs as $sec )
                                                                <option value="{{$sec->id}}">{{$sec->name}}</option>
                                                            @endforeach
                                                        </select>
                                                        <select class="form-control" name="sections[]" multiple style="display: ">
                                                            @foreach($sections as $sec )
                                                                <option value="{{$sec->id}}">{{$sec->name}}</option>
                                                            @endforeach
                                                        </select>

                                                        {{--<button class="btn btn-success btn-sm form-control" onclick="chengeDisplay(this)">Add Section</button>
                                                        <button class="btn btn-danger form-control" onclick="chengeDisplay(this)">Delete Section</button>--}}

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
                                                    <td>{{$class->id}}</td>
                                                    <td>{{$class->name}}</td>

                                                    <td>
                                                        @foreach($class->db_secs as $sec )
                                                            {{$sec->name}},
                                                        @endforeach

                                                    </td>
                                                    <td>
                                                        <a href="{{URL::to('/edit_class/'.$class->id)}}" class="">
                                                            <i class="material-icons">edit</i>
                                                        </a>
                                                    </td>
                                                    <td>
                                                        <a href="{{URL::to('/delete_class/'.$class->id)}}" class="">
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

    <script>
        function chengeDisplay(elem){
            elem.style.display = "node";
        }
    </script>

@endsection

