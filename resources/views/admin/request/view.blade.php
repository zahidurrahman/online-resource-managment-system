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
                          
                            <table class="table">
                                <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Phone</th>
                                    <th scope="col">Request Details</th>


                                </tr>
                                </thead>
                                <tbody>
                                  <?php $i=1;?>
                                  @foreach($flights as $share)
                                        <tr>
                                            <td>{{$i}}</td>
                                            <td>{{$share->User->name}}</td>
                                            <td>{{$share->User->email}}</td>
                                            <td>{{$share->User->phone}}</td>
                                            <td>{{$share->details}}</td>

                                        </tr>
                                        <?php $i++;?>
                                    @endforeach

                                </tbody>
                            </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
