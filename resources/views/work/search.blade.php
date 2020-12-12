@extends('work.base')


@section('content')
   <div class="container-fluid py-3 bg-info text-white">
       <div class="container">  
        <div class="row">
            <div class="col-lg-6">
                <form action="" class="d-flex">
                    <input type="search" placeholder="E.g Php developer, Python, Java, HR etc" class="form-control">
                    <input type="submit" class="btn btn-primary bg-gradient">
                </form>
            </div>
        </div>
       </div>
   </div>

   <div class="container mt-5">
       <div class="row">
           <div class="col-lg-3">
               <div class="list-group">
                   @foreach ($roles as $role)
                        <a href="" class="list-group-item list-group-item-action">{{$role->r_title}}</a>
                   @endforeach
               </div>
           </div>
           <div class="col-lg-9">
            @foreach ($jobs as $job)
            <div class="card">
                <div class="card-body">
                   <div class="row">
                       <div class="col-lg-8">
                        <h6>{{$job->title}}</h6>
                        <p class="small text-muted m-0 p-0">{{$job->role->r_title}}</p>
                        <p class="small text-muted m-0 p-0">{{$job->job_type}}</p>
                        <p class="small text-muted m-0 p-0">{{$job->company->title}}</p>
                        
                        <p class="small text-muted m-0 p-0">{{$job->eligibility}}</p>
                        <p class="small text-muted m-0 p-0">{{$job->experience}}</p>
                        <p class="small text-muted m-0 p-0">{{$job->salary}}</p>
                        <p class=" m-0 p-0">
        
                            @php
                                $skills = explode(",",$job->skills);
                                foreach($skills as $skill){
                                    echo "<span class='badge bg-success me-1'>$skill</span>";
                                }
        
        
                            @endphp
        
                    </p>
                       </div>
                       <div class="col-lg-4">
                       <img src="{{asset("company_logo/". $job->company->logo)}}" alt="" class="img-fluid">
                       <div class="d-flex gap-2 justify-content-center mt-4">
                           <a href="" class="btn btn-info">View More</a>
                           <a href="" class="btn btn-primary">Apply Job</a>
                       </div>
                       </div>
                   </div>
                </div>
            </div>
        @endforeach
           </div>
       </div>
   </div>

    
@endsection