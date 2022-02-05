<div>
    <div class="container" style="padding:10px 0;">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-default">
                    <div class="card-heading">
                        <div class="row">
                            <div class="col-md-6 header-right">
                                <h3>Sale Setting</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    {{-- @if(Session::has('message'))
                    <div class="alert alert-success" role="alert">{{ Session::get('message') }}</div>
                    @endifd --}}
                    <form action="" class="form-horizontal">

                        <div class="form-group">
                            <label  class="col-md-4 control-label">Status</label>
                            <div class="col-md-4">
                                <select class="form-control">
                                    <option value="">Inactive</option>
                                    <option value="">Active</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label  class="col-md-4 control-label">Sale Date</label>
                            <div class="col-md-4">
                                <input type="text" id="sale-date" placeholder="YY/MM/DD H:M:S" class="form-control input-md" />

                            </div>
                        </div>

                        <div class="form-group">
                            <label  class="col-md-4 control-label"></label>
                            <div class="col-md-4">
                                <button type="submit"  class="btn btn-primary ">

                                   update
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
            $('#sale-date').datetimepicker({
                format:'Y-MM-DD h:m:s',
            })
            .on('dp.change',function(ev){

            })
        });
    </script>

@endpush

