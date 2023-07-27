<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myModalLabel">Active Users</h5>

                

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="mt-1">
                    <table class="table table-bordered" id="users-list">
                        <thead>
                            <tr>
                              
                                <th>Name</th>
                                <th>Email</th>
                                <th>status</th>
                               
                            </tr>
                        </thead>
                        <tbody>
                            @if ($active)
                            @foreach ($active as $user)
                            <tr>
                              
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{$user->status}}</td>
                                
                            </tr>
                            @endforeach
                            @endif
    
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>