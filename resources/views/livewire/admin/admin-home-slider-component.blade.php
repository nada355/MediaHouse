<div>
    <style>
        nav svg{
            height: 20px;
        }
        nav .hidden{
            display:block !important;
        }
    </style>
    <div class="container" style="padding:10px 0;">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="row">
                        <div class="col-md-6">
                           <h4>All Sliders</h4>
                        </div>
                        <div class="col-md-6 header-right">
                            <a href="{{ route('admin.addhomeslider') }}" class="btn btn-success mb-2 header-right">Add New</a>
                        </div>
                    </div>
                    <div class="panel-body">
                     @if(Session::has('message'))
                        <div class="alert alert-danger" role="alert">{{ Session::get('message') }}</div>
                        @endif
                        <table class="table table-striped table-bordered text-center">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Image</th>
                                    <th>Title</th>
                                    <th>Subtitle</th>
                                    <th>Price</th>
                                    <th>Link</th>
                                    <th>Status</th>
                                    <th>Date</th>
                                    <th>Action</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($sliders as $slider)
                                    <tr>
                                        <td>{{ $slider->id }}</td>
                                        <td>
                                            <img src="{{ asset('assets/images/demos/demo-4/slider')}}/{{ $slider->image }}" width="120">
                                        </td>
                                        <td>{{ $slider->title }}</td>
                                        <td>{{ $slider->subtitle }}</td>
                                        <td>{{ $slider->price }}</td>
                                        <td>{{ $slider->link}}</td>
                                        <td>{{ $slider->status == 1 ? 'Active':'Inactive'}}</td>
                                        <td>{{ $slider->created_at }}</td>
                                        <td>
                                            <a href="{{ route('admin.edithomeslider',['slide_id'=>$slider->id]) }}"> <i class="icon-edit text-success"></i></a>
                                            <a onclick="confirm('Are you sure you want to delete this slide?') || event.stopImmediatePropagation()" wire:click.prevent="deleteSlider({{ $slider->id }})" style="margin-left:10px;"> <i class="icon-times"></i></a>

                                        </td>

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
