<div>
    <div class="container" style="padding:10px 0;">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-default">
                    <div class="card-heading">
                        <div class="row">
                            <div class="col-md-6 header-right">
                                <a href="{{ route('admin.products') }}" class="btn btn-success header-right">All Products</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    @if(Session::has('message'))
                    <div class="alert alert-success" role="alert">{{ Session::get('message') }}</div>
                    @endif
                    <form action="" class="form-horizontal" wire:submit.prevent="addProduct">
                        <div class="form-group">
                            <label  class="col-md-4 control-label">Nom Produit</label>
                            <div class="col-md-4">
                                <input type="text" placeholder="product Name" class="form-control input-md" wire:model="name" wire:keyup="generateslug" />
                                @error('name')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <label  class="col-md-4 control-label">slug</label>
                            <div class="col-md-4">
                                <input type="text" placeholder="product slug" class="form-control input-md" wire:model="slug" />
                                @error('slug')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <label  class="col-md-4 control-label">Brève Description</label>
                            <div class="col-md-4" wire:ignore>
                                <textarea id="short_description" placeholder="Short Description"  wire:model="short_description"></textarea>
                                @error('short_description')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <label  class="col-md-4 control-label">Description</label>
                            <div class="col-md-4" wire:ignore>
                                <textarea id="description" placeholder="Description"  wire:model="description"></textarea>
                                @error('description')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <label  class="col-md-4 control-label">Prix habituel</label>
                            <div class="col-md-4">
                                <input type="number" placeholder="Regular Price" class="form-control input-md" wire:model="regular_price" />
                                @error('regular_price')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <label  class="col-md-4 control-label">Prix de vente</label>
                            <div class="col-md-4">
                                <input type="number" placeholder="Sale Price" class="form-control input-md" wire:model="sale_price" />
                                @error('sale_price')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <label  class="col-md-4 control-label">Reference</label>
                            <div class="col-md-4">
                                <input type="text" placeholder="SKU" class="form-control input-md" wire:model="SKU" />
                                @error('SKU')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group">
                            <label  class="col-md-4 control-label">Stock</label>
                            <div class="col-md-4">
                                <select class="form-control" wire:model="stack_status">
                                    <option value="instock">Instock</option>
                                    <option value="outstock">Out of stock</option>

                                </select>
                                @error('stack_status')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <label  class="col-md-4 control-label">Featured</label>
                            <div class="col-md-4">
                                <select class="form-control" wire:model="featured">
                                    <option value="0">No</option>
                                    <option value="1">Yes</option>

                                </select>
                            </div>
                        </div>


                        <div class="form-group">
                            <label  class="col-md-4 control-label">Quantité</label>
                            <div class="col-md-4">
                                <input type="number" placeholder="Quantity" class="form-control input-md" wire:model="quantity" />
                                @error('quantity')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <label  class="col-md-4 control-label">Image</label>
                            <div class="col-md-4">
                                <input type="file"  class="input-file" wire:model="image" />
                                @if ($image)
                                    <img src="{{ $image->temporaryUrl() }}"/>
                                @endif
                                @error('image')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label  class="col-md-4 control-label">Gallerie</label>
                            <div class="col-md-4">
                                <input type="file"  class="input-file" wire:model="images"  multiple />
                                @if ($images)
                                    @foreach($images as $image)
                                        <img src="{{ $image->temporaryUrl() }}"/>
                                    @endforeach

                                @endif
                                @error('images')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <label  class="col-md-4 control-label">Categories</label>
                            <div class="col-md-4">
                                <select class="form-control" wire:model="category_id" wire:change="changeSubcategory">
                                    <option value="">Selectioner categorie</option>
                                    @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach

                                </select>
                                @error('category_id')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <label  class="col-md-4 control-label">Sous Categorie</label>
                            <div class="col-md-4">
                                <select class="form-control" wire:model="scategory_id">
                                    <option value="0">Selectioner Sous categorie</option>
                                    @foreach ($scategories as $scategory)
                                    <option value="{{ $scategory->id }}">{{ $scategory->name }}</option>
                                    @endforeach

                                </select>
                                @error('scategory_id')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
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

@push('scripts')

    <script>
        $(function(){
            tinymce.init({
                selector:'#short_description',
                setup:function(editor){
                    editor.on('Change',function(e) {
                        tinyMCE.triggerSave();
                        var sd_data = $('#short_description').val();
                        @this.set('short_description',sd_data);
                    });

                }
            });

            tinymce.init({
                selector:'#description',
                setup:function(editor){
                    editor.on('Change',function(e) {
                        tinyMCE.triggerSave();
                        var d_data = $('#description').val();
                        @this.set('description',d_data);
                    });

                }
            });
        });
    </script>

@endpush
