@extends('layouts.customLayout')

@section('content')
    <div class="row" style="float: right">
        <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#exampleModalCenter">
                Add Record
            </button>
            
            <!-- Modal -->
            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Add a department</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ route('departments.store') }}" method="post">
                            @csrf
                            @method('post')
                            <div class="form-group">
                                <input type="text" class="form-control" name="depName" placeholder="Department Name">
                              </div>
                              <div class="modal-footer">
                                <input type="cancel" value="cancel" class="btn btn-secondary btn-sm" />
                                <input type="submit" value="Add" class="btn btn-primary btn-sm" />
                                </div>
                        </form>
                    </div>
                    
                </div>
                </div>
            </div>
    </div>
    <div class="row" style="padding-top:35px;">
        <div class="col-md-4">
            <table class="table table-bordered table-hover table-striped table-sm" id="table1">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Department Name</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @if ($departments->count() > 0)
                        @foreach ($departments as $department)
                        <tr>
                            <td></td>
                            <td>{{ $department->depName }}</td>
                            <td>
                                <a href="#">Edit</a> |
                                <a href="#">Delete</a>
                            </td>
                        </tr>
                            
                        @endforeach
                    @else
                    <p>No data!</p>
                    @endif
                </tbody>
            </table>
        </div>
        {{-- <div class="col-md-3"></div> --}}
       
    </div>
@endsection