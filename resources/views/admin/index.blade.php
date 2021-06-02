@extends('admin.layouts.app')

@section('content')

<h1 align="center"><i class="fa fa-university"></i> <u>Role Management</u> <i class="fa fa-university"></i></h1>
<div class="card shadow container col-12 mt-0">
    <div class="tabbable">
        <div class="tab-content">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr align="center">
                                <th>Name</th>
                                <th>Matrix No</th>
                                <th>Faculty</th>
                                <th>Role</th>
                                <th>Action Button</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php for($i = 0; $i < 30; $i++) { ?>
                            <tr>
                                <td>Some Random Name</td>
                                <td align="center">A18XXXXX</td>
                                <td align="center">10</td>
                                <td align="center">
                                    <select name="" id="" style="color: white">
                                        <option value="">Member</option>
                                        <option value="">Management</option>
                                        <option value="">DB Admin</option>
                                    </select>
                                </td>
                                <td align="center">
                                    <button type="button" class="btn-light" >Apply Changes</button>
                                </td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>