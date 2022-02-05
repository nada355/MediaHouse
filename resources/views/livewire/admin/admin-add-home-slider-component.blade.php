<div>
    <div class="container" style="padding:10px 0;">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-default">
                    <div class="card-heading">
                        <div class="row">
                            <div class="col-md-6 header-right">
                                <a href="{{ route('admin.homeslider') }}" class="btn btn-success header-right">All sliders</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    @if(Session::has('message'))
                    <div class="alert alert-success" role="alert">{{ Session::get('message') }}</div>
                    @endif
                    <form action="" class="form-horizontal" wire:submit.prevent="addSlider">


                        <div class="form-group">
                            <label  class="col-md-4 control-label">Title</label>
                            <div class="col-md-4">
                                <input type="text" placeholder="slide title" class="form-control input-md" wire:model="title" wire:keyup="" />
                            </div>
                        </div>

                        <div class="form-group">
                            <label  class="col-md-4 control-label">Subtitle</label>
                            <div class="col-md-4">
                                <input type="text" placeholder="subtitle" class="form-control input-md" wire:model="subtitle" />
                            </div>
                        </div>


                        <div class="form-group">
                            <label  class="col-md-4 control-label">Price</label>
                            <div class="col-md-4">
                                <input type="number" placeholder="price" class="form-control input-md" wire:model="price" />
                            </div>
                        </div>


                        <div class="form-group">
                            <label  class="col-md-4 control-label">Link</label>
                            <div class="col-md-4">
                                <input type="text" placeholder="Link" class="form-control input-md" wire:model="link" />
                            </div>
                        </div>

                        <div class="form-group">
                            <label  class="col-md-4 control-label">Image</label>
                            <div class="col-md-4">
                                <input type="file"  class="input-file" wire:model="image" />
                               @if ($image)
                                    <img src="{{ $image->temporaryUrl() }}"/>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label  class="col-md-4 control-label">Status</label>
                            <div class="col-md-4">
                                <select class="form-controle" wire:model="status">
                                    <option value="0">Inactive</option>
                                    <option value="1">Active</option>

                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label  class="col-md-4 control-label"></label>
                            <div class="col-md-4">
                                <button type="submit"  class="btn btn-primary ">
                                Submit
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
