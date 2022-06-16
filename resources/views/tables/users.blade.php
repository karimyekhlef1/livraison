@isset($users)
   
    @if ($users->count())
    <div class="container-fluid">
        <table class="table table-bordered table-striped table-hover">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                {{-- <th>Level</th> --}}
                <th>Action</th>
            </tr>
            </thead>
            @foreach ($users as $user)
            <tr>
                <td> {{ $user->id }} </td>
                <td> {{ $user->name }} </td>
                <td> {{ $user->email }} </td>
                {{-- <td> {{ $user->level->name ?? '' }} </td> --}}
                <td> 
                    <div class="dropdown">
                        <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                        More
                        <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                        <li><a href="{{ route('admin.users.show', ['user' => $user->id]) }}" class="btn"> Details </a> </li>
                        <li><a href="{{ route('admin.users.edit', ['user' => $user->id]) }}" class="btn"> Edit </a> </li>
                        <li><a href="{{ route('admin.users.delete', ['user' => $user->id]) }}" class="btn"> Delete </a> </li>
                        </ul>
                    </div>                     
                            
                </td>
            </tr>
            @endforeach
        </table>
        @if ($users->links())
        <div class="d-flex justify-content-center fixed-bottom">
        {{ $users->links()}}
        </div>
        @endif

    </div> 
    @else  
    <h3>
        There are no users.
    </h3>
    @endif    
@endisset 