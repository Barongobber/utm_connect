@extends('layouts.app')

@section('content')
    <div class="d-sm-flex justify-content-between align-items-center">
        <h3 class="text-dark mb-4">Add News</h3>
    </div>
    <div class="mb-3">
        <a class="btn btn-shadow btn-danger" href="{{ route('table') }}">
            <i class="fas fa-angle-left"></i>
            <span>Back</span>
        </a>
    </div>
    <form action="{{ route('addNews') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="card shadow">
            <div class="tabbable">
                <div class="tab-content">
                    <div class="card-header py-3">
                        <p class="text-primary m-0 font-weight-bold">Insert News Information</p>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Title<span style="color: red;">*</span></label>
                                    <div class="col-sm-9">
                                        <input name="news_title" type="text" class="form-control"
                                            value="{{ old('title') }}" placeholder="Write your title of news here"
                                            required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Category<span
                                            style="color: red;">*</span></label>
                                    <div class="col-sm-9">
                                        <select name="news_category" class="form-control" required>
                                            <option value="" selected>Choose Category</option>
                                            <option value="Sport">Sports</option>
                                            <option value="Academic">Academic</option>
                                            <option value="Arts or Music">Arts or Music</option>
                                            <option value="Strategic Studies">Strategic Studies</option>
                                            <option value="Human Dev">Human Development</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">News Details<span
                                            style="color: red;">*</span></label>
                                    <div class="col-sm-9">
                                        <textarea name="news_content" rows="8" type="text" class="form-control"
                                            placeholder="Write details of the news here"></textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Picture 1<span
                                            style="color: red;">*</span></label>
                                    <div class="col-sm-9">
                                        <input type="file" class="btn btn-primary" value="Upload Picture" name="news_pic1"
                                            id="" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="contact-province" class="col-sm-3 col-form-label">Picture 2</label>
                                    <div class="col-sm-9">
                                        <input type="file" class="btn btn-primary" value="Upload Picture" name="news_pic2"
                                            id="">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="contact-city" class="col-sm-3 col-form-label">Picture 3</label>
                                    <div class="col-sm-9">
                                        <input type="file" class="btn btn-primary" value="Upload Picture" name="news_pic3"
                                            id="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="text-right">
                            <a class="btn btn-danger btn-shadow" href="{{ route('table') }}">Cancel</a>
                            <button type="submit" class="btn btn-success btn-shadow">Submit</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection
