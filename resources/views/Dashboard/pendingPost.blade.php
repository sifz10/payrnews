@extends('layouts.dashboardLayout')
@section('content')
  <div class="container-fluid">
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="card">
                <div class="header">
                    <h2><strong>User</strong> Accounts</h2>
                </div>
                <div class="body">
                    <div class="table-responsive">
                        <table class="table table-filter table-hover m-b-0">
                            <tbody>
                              <tr>
                                <td>No.</td>
                                <td>Image</td>
                                <td>Title</td>
                                <td>Category</td>
                                <td>View Blog</td>
                                <td>Action</td>
                              </tr>
                              @foreach ($Pendingposts as $value)
                                <tr>
                                    <td>{{ $loop->index+1 }}</td>
                                    <td><div class="media-object"><img src="../{{ $value->avatar }}" alt="" width="50px" height="50px" class="rounded-circle"></div></td>
                                    <td>{{ $value->postTitle }}</td>
                                    <td>{{ $value->category }}</td>
                                    <td>
                                      <a href="{!! route('signleBlog',$value->id) !!}" class="btn btn-success" name="button">View Blog</a>
                                    </td>
                                    <td>
                                      <a href="{!! route('PostApprove',$value->id) !!}" class="btn btn-info" name="button">Approve</a>
                                      <a href="{!! route('PostDenied',$value->id) !!}" class="btn btn-danger" name="button">Delete</a>
                                    </td>
                                  </tr>
                              @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            @if (Session::has('status'))
              <div class="alert alert-success">
                  <strong>Well done ! </strong> {{ Session('status') }}.
              </div>
            @endif
            @if (Session::has('danger'))
              <div class="alert alert-danger">
                  <strong>OPS! </strong> {{ Session('danger') }}.
              </div>
            @endif
        </div>
    </div>
  </div>
@endsection
