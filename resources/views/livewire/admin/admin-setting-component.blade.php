<div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">

                    </div>
                    <div class="panel-body">
                        @if(Session::has('message'))
                        <div class="alert alert-success">
                            {{ Session::get('message') }}
                         </div>
                         @endif

                        <form class="form-horizontal"  wire:submit.prevent="saveSetting" >
                            <table>
                                <tbody>
                                    <tr>
                                        <th> <label for="" class="col-md-4">
                                            Email
                                        </label>
                                        </th>
                                        <td>
                                            <input type="email" placeholder="Email" class="form-control input-md"   wire:model="email"  />
                                            @error('email')
                                                <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                        </td>
                                        <th>
                                            <label for="" class="col-md-4">
                                                Phone
                                            </label>
                                        </th>
                                        <td>
                                            <input type="text" placeholder="Phone" class="form-control input-md"   wire:model="phone"  />
                                            @error('phone')
                                                <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            <label for="" class="col-md-4">
                                                Phone2
                                            </label>
                                        </th>
                                        <td>
                                            <input type="text" placeholder="Phone2" class="form-control input-md"   wire:model="phone2"  />
                                            @error('phone2')
                                                <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                        </td>
                                        <th>
                                            <label for="" class="col-md-4">
                                                Adresse
                                            </label>
                                        </th>
                                        <td>
                                            <input type="text" placeholder="Adresse" class="form-control input-md"   wire:model="adresse"  />
                                            @error('adresse')
                                                <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            <label for="" class="col-md-4">
                                                Map
                                            </label>
                                        </th>
                                        <td>
                                            <input type="text" placeholder="Map" class="form-control input-md"   wire:model="map"  />
                                            @error('map')
                                                <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                        </td>
                                        <th>
                                            <label for="" class="col-md-4">
                                                Twiter
                                            </label>
                                        </th>
                                        <td>
                                            <input type="text" placeholder="Twiter" class="form-control input-md"   wire:model="twitter"  />
                                            @error('twitter')
                                                <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            <label for="" class="col-md-4">
                                                Facebbok
                                            </label>
                                        </th>
                                        <td>
                                            <input type="text" placeholder="Facebbok" class="form-control input-md"   wire:model="facebook"  />
                                            @error('facebook')
                                                <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                        </td>
                                        <th>
                                            <label for="" class="col-md-4">
                                                Pinterest
                                            </label>
                                        </th>
                                        <td>
                                            <input type="text" placeholder="Pinterest" class="form-control input-md"   wire:model="pinterest"  />
                                            @error('pinterest')
                                                <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            <label for="" class="col-md-4">
                                                Instagram
                                            </label>
                                        </th>
                                        <td>
                                            <input type="text" placeholder="Instagram" class="form-control input-md"   wire:model="instagram"  />
                                            @error('instagram')
                                                <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                        </td>
                                        <th>
                                            <label for="" class="col-md-4">
                                                Youtube
                                            </label>
                                        </th>
                                        <td>
                                            <input type="text" placeholder="Youtube" class="form-control input-md"   wire:model="youtube"  />
                                            @error('youtube')
                                                <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                        </td>
                                    </tr>
                                    <tr>
                                        <th> <label for=""></label> </th>
                                        <td>
                                            <button type="submit" class="btn btn-primary">Save</button>

                                        </td>

                                    </tr>
                                </tbody>
                            </table>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

