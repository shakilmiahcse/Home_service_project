<div>
    <style>
        nav svg{
            height: 20px;
        }
        nav .hidden{
            display: block !important;
        }
    </style>
    <div class="section-title-01 honmob">
        <div class="bg_parallax image_02_parallax"></div>
        <div class="opacy_bg_02">
            <div class="container">
                <h1>{{$category_name}} Services</h1>
                <div class="crumbs">
                    <ul>
                        <li><a href="/">Home</a></li>
                        <li>/</li>
                        <li>{{$category_name}} Services</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <section class="content-central">
        <div class="content_info">
            <div class="paddings-mini">
                <div class="container">
                    <div class="row portfolioContainer">
                        <div class="col-md-12 profile1">
                            <div class="panel panel-default">
                                <div class="penel-heading">
                                    <div class="row">
                                        <div class="col-md-6">
                                            {{$category_name}} Service
                                        </div>
                                        <div class="col-md-6">
                                            <a href="#" class="btn btn-info pull-right">Add New</a>
                                        </div>
                                    </div>
                                </div>
                           <div class="panel-body">
                            @if(Session::has('massage'))
                            <div class="alert alert-success" role="alert">{{Session::get('massage')}}</div>
                            @endif
                            <table class="table table-striped">
                                <thead>
                                     <tr>
                                       <th>Sl No</th>
                                       <th>Image</th>
                                       <th>Name</th>
                                       <th>Price</th>
                                       <th>Status</th>
                                       <th>Category</th>
                                       <th>Created At</th>
                                       <th>Action</th>
                                     </tr>
                                </thead>
                               <tbody>
                               @foreach($services as $service)
                                      <tr>
                                        <td>{{ $service->id }}</td>
                                        <td><img src="{{ asset('images/services/thumbnails')}}/{{ $service->thumbnail }}" height="60"/></td>
                                        <td>{{ $service->name }}</td>
                                        <td>{{ $service->price }}</td>
                                        <td>
                                            @if($service->status)
                                               Active
                                            @else
                                               Inactive
                                            @endif
                                        </td>
                                        <td>{{$service->category->name}}</td>
                                        <td>{{$service->created_at}}</td>
                                        <td>
                                            <a href="#"><i class="fa fa-edit fa-Zx text-info"></i> </a>
                                            <a href="#" style="margin-left: 10px"><i class="fa fa-trash" aria-hidden="true"></i></a>
                                        </td>
                                      </tr>
                               @endforeach
                              </tbody> 
                           </table>
                               {{$services->links()}}
                           </div>
                       </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
</div>
