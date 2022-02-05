<div>
    <div class="container" style="padding:10px 0;">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-6 header-right">
                                <a href="{{ route('admin.categories') }}" class="btn btn-success header-right">Tout Category</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel-body">
                    @if(Session::has('message'))
                    <div class="alert alert-success" role="alert">{{ Session::get('message') }}</div>
                    @endif
                    <form action="" class="form-horizontal" wire:submit.prevent="storeCategory">
                        <div class="form-group">
                            <label  class="col-md-4 control-label">Sous-sous Categorie</label>
                            <div class="col-md-4">
                                <input type="text" placeholder="Sous-sous-Categories" class="form-control input-md" wire:model="name" wire:keyup="generateslug" />
                                @error('name')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <label  class="col-md-4 control-label">slug</label>
                            <div class="col-md-4">
                                <input type="text" placeholder="Category slug" class="form-control input-md" wire:model="slug" />
                                @error('slug')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label  class="col-md-4 control-label">Sous-Categorie</label>
                            <div class="col-md-4">
                                <select name="" class="form-controle input-md" wire:model="subcategory_id">
                                    <option value="">None</option>
                                    @foreach ($scategories as $sscategory)
                                    <option value="{{ $sscategory->id }}">{{ $sscategory->name }}</option>

                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label  class="col-md-4 control-label">Categorie</label>
                            <div class="col-md-4">
                                <select name="" class="form-controle input-md" wire:model="category_id">
                                    <option value="">None</option>
                                    @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>

                                    @endforeach
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
