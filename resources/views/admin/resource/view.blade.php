@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <a href="/home"><i class="fas fa-arrow-left" style="margin-right: 10px"></i>Dashboard</a>
                        @foreach ($errors->all() as $error)
                            <li style="float:right;color:red;">{{ $error }}</li>
                        @endforeach
                    </div>

                    <div class="card-body">
                      @if (session('success'))
                              <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                  {{ session('success') }}
                              </div>
                          @endif
                        <!-- Button trigger modal -->
                            <button type="button" style="margin-bottom: 10px;float:right" class="btn btn-success btn-sm" data-toggle="modal" data-target="#exampleModalCenter">
                               <i class="fas fa-plus"></i>&nbsp;Add New Resource
                            </button>

                            <table class="table">
                                <thead>
                                <tr>
                                    <th scope="col">NO</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Description</th>
                                    <th scope="col">Author</th>
                                    <th scope="col">File Size</th>
                                    <th scope="col">Total View </th>
                                    <th scope="col">Action</th>

                                </tr>
                                </thead>
                                <tbody>
                                  <?php $i=1;?>
                                  @foreach($flights as $share)
                                        <tr>
                                            <td>{{$i}}</td>
                                            <td>{{$share->book_name}}</td>
                                            <td>{{$share->book_des}}</td>
                                            <td>{{$share->book_author}}</td>
                                            <td>{{$share->file_size}}</td>
                                            <td>{{$share->total_view}}</td>

                                            <td>
                                                <form action="{{'/destroy/'.$share->id}}" method="POST">

                                                    <a class="btn btn-outline-info btn-sm" href="{{'/edit/'.$share->id}}">Edit</a>
                                                    @csrf

                                                    <button type="submit" class="btn btn-outline-danger btn-sm">Delete</button>
                                                </form>

                                            </td>
                                        </tr>
                                        <?php $i++;?>
                                    @endforeach

                                </tbody>
                            </table>

                    </div>



                    <!-- Modal -->
                    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLongTitle">Add Resources</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form method="POST" action="{{ route('add_resource') }}" enctype="multipart/form-data">
                                        @csrf

                                        <div class="form-group">
                                            <label for="exampleFormControlSelect1">Catagory</label>
                                            <select class="form-control"name="book_catagory" id="first" required>
                                                <option disabled selected value="">--Select--</option>
                                                <option value="ug">Undergraduate</option>
                                                <option value="pg">Postgraduate</option>
                                                <option value="ot">Others</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleFormControlSelect1">Sub Catagory</label>
                                            <select class="form-control" name="book_sub_catagory" required id="second">
                                                <option disabled selected value="">--Select--</option>

                                                <option value="eng">EETE</option>
                                                <option value="bba">BBA</option>
                                                <option value="civil">Civil Engineering</option>
                                                <option value="cse">CSE</option>
                                                <option value="law">LAW</option>
                                                <option value="english">ENGLISH</option>
                                                <option value="sociology">SOCIOLOGY</option>
                                                <option value="pharmacy">PHARMACY</option>
                                                <option value="it">Information Technology</option>


                                                <option value="cp">Conference Paper</option>
                                                <option value="js">Journals</option>


                                                <option value="sf">Software</option>
                                                <option value="nv">Novel</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Name</label>
                                            <input type="text" name="book_name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  required>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleFormControlTextarea1">Description</label>
                                            <textarea class="form-control" name="book_des" id="exampleFormControlTextarea1" rows="3" required></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Author/Publisher</label>
                                            <input type="text" name="book_author" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  required>
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleFormControlFile1">Cover Image</label>
                                            <input type="file" name="book_image" class="form-control-file" id="exampleFormControlFile1" required>


                                        </div>

                                        <div class="form-group">
                                            <label for="exampleFormControlFile1">Resource File [PDF/Zip]</label>
                                            <input type="file" name="file_name" class="form-control-file" id="exampleFormControlFile1" required>
                                        </div>
                                        <button type="submit" class="btn btn-success">Add</button>
                                    </form>

                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>

                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Modal -->
                </div>
            </div>
        </div>
    </div>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script>
        $(document).ready(function(){
            $('#first').on('change', function () {
                console.log($('#first').val());
                $('#second').html('');
                if ($('#first').val() == 'ug') {

                    $('#second').append('<option value="eng">EETE</option>');
                    $('#second').append('<option value="bba">BBA</option>');
                    $('#second').append('<option value="civil">Civil Engineering</option>');
                    $('#second').append('<option value="cse">CSE</option>');
                    $('#second').append('<option value="law">LAW</option>');
                    $('#second').append('<option value="english">ENGLISH</option>');
                    $('#second').append('<option value="sociology">SOCIOLOGY</option>');
                    $('#second').append('<option value="pharmacy">PHARMACY</option>');
                    $('#second').append('<option value="it">Information Technology</option>');



                }
                else if ($('#first').val() == 'pg') {

                    $('#second').append('<option value="cp">Conference Paper</option>');
                    $('#second').append('<option value="js">Journals</option>');
                }
                else if ($('#first').val() == 'ot') {

                    $('#second').append('<option value="sf">Software</option>');
                    $('#second').append('<option value="nv">Novel</option>');

                }

            });

        });
    </script>
@endsection
