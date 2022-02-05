<div>
    <style>
        nav svg{
            height: 20px;
        }
        nav .hidden{
            display:block !important;
        }
        .sclist li{
            list-style: none;
            border-bottom:1px solid #ccc;
        }
        .ssclist li{
            list-style: none;
            border-bottom:1px solid #ccc;

        }
    </style>
    <div class="container" style="padding:10px 0;">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="row">
                        <div class="col-md-6">
                           <h4>Tout Categories</h4>
                        </div>
                        <div class="col-md-6 header-right">
                            <a href="{{ route('admin.addcategory') }}" class="btn btn-success mb-2 header-right">Ajouter nouveau</a>
                        </div>
                    </div>
                    <div class="panel-body">
                        @if(Session::has('message'))
                        <div class="alert alert-success" role="alert">{{ Session::get('message') }}</div>
                        @endif
                        <table class="table table-striped table-bordered text-center">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Categorie</th>
                                    <th>Slug</th>
                                    <th>Sous Categorie</th>
                                    <th>Sous-sous Categorie</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($categories as $category)
                                    <tr>
                                        <td>{{ $category->id }}</td>
                                        <td>{{ $category->name }}</td>
                                        <td>{{ $category->slug }}</td>
                                        <td>
                                            <ul class="sclist">
                                                @foreach ($category->subCategories as $scategory )
                                                <li>
                                                    <i class="icon icon-caret-right"></i> {{ $scategory->name }}
                                                    <a href="{{ route('admin.editcategory',['category_slug'=>$category->slug,'scategory_slug'=>$scategory->slug]) }}"> <i class="icon-edit text-success"></i></a>
                                                    <a href="#" onclick="confirm('Are you sure you want to delete this subcategory?') || event.stopImmediatePropagation()" wire:click.prevent="deleteSubcategories({{ $scategory->id }})" style="margin-left:10px;"> <i class="icon-times"></i></a>
                                                </li>

                                                @endforeach
                                            </ul>
                                        </td>
                                        <td>
                                            <ul class="ssclist">
                                                @foreach ($scategory->scategories as $sscategory )
                                                <li>
                                                    <i class="icon icon-caret-right"></i> {{ $sscategory->name }}
                                                    <a> <i class="icon-edit text-success"></i></a>
                                                    <a href="#" onclick="confirm('Are you sure you want to delete this subcategory?') || event.stopImmediatePropagation()" wire:click.prevent="deleteScategories({{ $sscategory->id }})" style="margin-left:10px;"> <i class="icon-times"></i></a>
                                                </li>

                                                @endforeach
                                            </ul>
                                        </td>
                                        <td>
                                            <a href="{{ route('admin.editcategory',['category_slug'=>$category->slug]) }}"> <i class="icon-edit text-success"></i></a>
                                            <a href="#" onclick="confirm('Are you sure you want to delete this category?') || event.stopImmediatePropagation()" wire:click.prevent="deleteCategory({{ $category->id }})" style="margin-left:10px;"> <i class="icon-times"></i></a>

                                        </td>

                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{ $categories->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
