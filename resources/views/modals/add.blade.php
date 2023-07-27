<div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myModalLabel">Add Users</h5>

                

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('save.user') }}" method="POST"  id="add_create" name="add_create" >
                    @csrf
             
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" name="name" class="form-control">
                      </div>
                      <div class="form-group">
                        <label>Email</label>
                        <input type="text" name="email" class="form-control">
                      </div> 

                       <div class="form-group">
                        <label>Dob</label>
                        <input type="date" name="date_of_birth" class="form-control">
                      </div>
     
     
                     <div class="form-group">
                        <label>status</label>
                        <select class="form-control" name="status">
                            <option value="1">Active</option>
                            <option value="0">Inactive</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <button type="submit" class="btn btn-info btn-block">Add Data</button>
                        <button type="button" class="btn btn-secondary btn-block" data-dismiss="modal">Close</button>
                      </div>
            </form>

            </div>
            
        </div>
    </div>
</div>
