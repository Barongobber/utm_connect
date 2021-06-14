@section('title', 'New news')
@extends('layouts.app')

@section('content')
    <form action="{{ 'post.store' }}" method="post">
        @csrf
        <div class="d-sm-flex justify-content-between align-items-center">
            <h3 class="text-dark mb-4">Add News</h3>
        </div>
        <div class="mb-3">
            <button class="btn btn-shadow btn-danger" onclick="window.location.href='?cms=content_management'">
                <i class="fas fa-angle-left"></i>
                <span>Back</span>
            </button>
        </div>
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
                                        <input type="text" class="form-control" value="{{ old('title') }}"
                                            placeholder="Write your title of news here" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Category<span
                                            style="color: red;">*</span></label>
                                    <div class="col-sm-9">
                                        <select class="form-control">
                                            <option value="" disabled selected>Choose Category</option>
                                            <option value="Sports" {{ old('category') === 'Sport' ? 'selected' : null }}>
                                                Sport</option>
                                            <option value="Academic"
                                                {{ old('category') === 'Academic' ? 'selected' : null }}>Academic</option>
                                            <option value="Arts or Music"
                                                {{ old('category') === 'Arts or Music' ? 'selected' : null }}>Arts or
                                                Music</option>
                                            <option value="Strategic Studies"
                                                {{ old('category') === 'Strategic Studies' ? 'selected' : null }}>
                                                Strategic Studies</option>
                                            <option value="Human Dev" {{ old('category') === 'html' ? 'selected' : null }}
                                                {{ old('category') === 'Human Dev' ? 'selected' : null }}>Human Development
                                            </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">News Details<span
                                            style="color: red;">*</span></label>
                                    <div class="col-sm-9">
                                        <textarea rows="8" type="text" class="form-control"
                                            placeholder="Write details of the news here"></textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Picture 1<span
                                            style="color: red;">*</span></label>
                                    <div class="col-sm-9">
                                        <input type="submit" class="btn btn-primary" value="Upload Picture" name="" id="">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="contact-province" class="col-sm-3 col-form-label">Picture 2</label>
                                    <div class="col-sm-9">
                                        <input type="submit" class="btn btn-primary" value="Upload Picture" name="" id="">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="contact-city" class="col-sm-3 col-form-label">Picture 3</label>
                                    <div class="col-sm-9">
                                        <input type="submit" class="btn btn-primary" value="Upload Picture" name="" id="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="text-right">
                            <button type="button" class="btn btn-danger btn-shadow"
                                onclick="window.location.href='?cms=content_management'">Cancel</button>
                            <button type="submit" class="btn btn-success btn-shadow">Submit</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection
