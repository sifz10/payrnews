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
                              @foreach ($allUsers as $value)
                                <tr data-status="approved">
                                    <td>{{ $loop->index+1 }}</td>
                                    <td><div class="media-object"><img src="{!! asset('dashboardAsset') !!}/assets/images/xs/avatar1.jpg" alt="" width="35px" class="rounded-circle"></div></td>
                                    <td>{{ $value->name }}</td>
                                    <td>{{ $value->email }}</td>
                                    <td>
                                      <a href="#" class="btn btn-success" name="button">View Profile</a>
                                    </td>
                                      @if ($value->role == 1)
                                        <td data-target="Regular-User"><span class="badge badge-success"> Regular Users </span></td>
                                      @endif
                                      @if ($value->role == 2)
                                        <td data-target="Admins"><span class="badge badge-default"> Admins </span></td>
                                      @endif
                                      @if ($value->role == 3)
                                        <td data-target="Moderator"><span class="badge badge-primary"> Moderator </span></td>
                                      @endif
                                      @if ($value->role == 4)
                                        <td data-target="Agets"><span class="badge badge-default"> Agents </span></td>
                                      @endif
                                      @if ($value->role == 5)
                                        <td data-target="Bloggers"><span class="badge badge-warning"> Blogers </span></td>
                                      @endif
                                      @if ($value->role == 5)
                                        <td data-target="blocked"><span class="badge badge-danger"> Blocked </span></td>
                                      @endif
                                </tr>
                              @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
