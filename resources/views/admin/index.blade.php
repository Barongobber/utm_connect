@extends('admin.layouts.app')

@section('content')

<h1 align="center"><i class="fa fa-university"></i> <u>Role Management</u> <i class="fa fa-university"></i></h1>
<div class="card shadow container col-12 mt-0">
  <div class="tabbable">
    <div class="tab-content">
      <div class="card-body">
        <div class="mb-3 text-right">
            <div class="dropdown" >
                <button class="btn-secondary dropdown-toggle p-1" style="border-radius: 10px;" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class='fas fa-stream'></i>
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="#">Go to Member Side</a>
                    <a class="dropdown-item" href="#">Go to Management Side</a>
                    <a class="dropdown-item" href="#">Logout</a>
                </div>
            </div>
        </div>
        <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr align="center">
                <th>Name</th>
                <th>Matrix No</th>
                <th>Program Code</th>
                <th>Role</th>
                <th>Action Button</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($members as $member)
              <form method="POST" action="{{ route('changeGrant', ['id' => $member->matrix_card]) }}" enctype="multipart/form-data">
              @csrf
                <tr>
                  <td>{{ $member->name }}</td>
                  <td align="center">{{ $member->matrix_card }}</td>
                  <td align="center">{{ $member->program_code }}</td>
                  <td align="center">
                    <select name="role" id="role" style="color: white">
                      @if ($member->access_grant == 1)
                        <option value='1' selected="selected">Member</option>
                      @else
                        <option value='1'>Member</option>
                      @endif
                      @if ($member->access_grant == 2)
                        <option value='2' selected="selected">Management</option>
                      @else
                        <option value='2'>Management</option>
                      @endif
                      @if ($member->access_grant == 3)
                        <option value='3' selected="selected">DB Admin</option>
                      @else
                        <option value='3'>DB Admin</option>
                      @endif
                    </select>
                  </td>
                  <td align="center">
                    <button class="btn-light" type="submit">Apply Changes</button>
                  </td>
                </tr>
              </form>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
