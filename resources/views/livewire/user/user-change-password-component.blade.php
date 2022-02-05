<div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">

                    </div>
                    <div class="panel-body">
                        @if(Session::has('password_success'))
                        <div class="alert alert-success">
                            {{ Session::get('password_success') }}
                         </div>
                         @endif
                         @if(Session::has('password_error'))
                         <div class="alert alert-danger">
                            {{ Session::get('password_error') }}
                         </div>

                        @endif
                        <form class="form-horizontal" wire:submit.prevent="changePassword">
                            <div class="form-group">
                                <label for="" class="col-md-4">
                                    Current Password
                                </label>
                                <div class="col-md-4">
                                    <input type="password" placeholder="Current Password" class="form-control input-md" name="current_password" wire:model="current_password" />
                                    @error('current_password')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-md-4">
                                    New Password
                                </label>
                                <div class="col-md-4">
                                    <input type="password" placeholder="New Password" class="form-control input-md" name="password" wire:model="password" />
                                    @error('password')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-md-4">
                                    Confirm Password
                                </label>
                                <div class="col-md-4">
                                    <input type="password" placeholder="Confirm Password" class="form-control input-md" name="password_confimation" wire:model="password_confirmation" />
                                    @error('password_confirmation')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">

                                <div class="col-md-4">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
