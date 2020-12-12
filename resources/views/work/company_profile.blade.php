@extends('work.base')


@section('content')
    <div class="container-fluid mt-5">
        <div class="row">
            <div class="col-3">
                <div class="list-group list-group-flush">
                    <a href="" class="list-group-item list-group-item-action">Profile</a>
                    <a href="" class="list-group-item list-group-item-action">Setting</a>
                    <a href="" class="list-group-item list-group-item-action">Manage Job Posts</a>
                    <a href="" class="list-group-item list-group-item-action">Login</a>
                </div>
            </div>

            <div class="col-9">
                @isset($company)
                    <table class="table">
                        <tr>
                            <th>Title</th>
                            <td>{{$company->title}}</td>
                        </tr>
                    </table>
                @endisset
                
                @empty($company)
                <div class="card">
                    <div class="card-body">
                    <form action="{{route('company.profile.insert')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="">Company Name</label>
                            <input type="text" name="title" class="form-control" value="{{old('title')}}">
                            @error('title')
                                <span class="text-danger small">{{$message}}</span>
                            @enderror
                            </div>
                            <div class="mb-3">
                                <label for="">CIN</label>
                            <input type="number" name="cin" class="form-control" value="{{old('cin')}}">
                            @error('cin')
                                <span class="text-danger small">{{$message}}</span>
                            @enderror
                            </div>
                            <div class="mb-3">
                                <label for="">Est Year</label>
                                <input type="year" name="est_year" class="form-control" value="{{old('est_year')}}">
                            @error('est_year')
                                <span class="text-danger small">{{$message}}</span>
                            @enderror
                        </div>
                            <div class="mb-3">
                                <label for="">Address</label>
                                <input type="text" name="address" class="form-control" value="{{ old('address')}}">
                            @error('address')
                                <span class="text-danger small">{{$message}}</span>
                            @enderror
                            </div>
                            <div class="mb-3">
                                <label for="">Industry Type</label>
                                <select  name="industry_type" class="form-control">
                                    <option selected disabled value="">Select Industry Type</option>
                                    <option>Software</option>
                                    <option>HardWare</option>
                                    <option>Textile</option>
                                </select>
                                @error('industry_type')
                                    <span class="text-danger small">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="">logo</label>
                                <input type="file" name="logo" class="form-control">
                                @error('logo')
                                    <span class="text-danger small">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="">description</label>
                                <textarea  name="description" rows="7" class="form-control" value="{{ old('description')}}"></textarea>
                                @error('description')
                                    <span class="text-danger small">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <input type="submit" class="btn w-100 btn-success" value="Submit">
                            </div>
                        </form>
                    </div>
               
                </div>     
                @endempty
               

        </div>
    </div>
@endsection