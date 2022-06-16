<form action=" {{ route('admin.users.update', ['user'=> $user->id]) }} " method="POST">
    @csrf
    @method('PUT')
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="inputEmail4">Name</label>
      <input type="text" name="name" class="form-control" id="inputEmail4" value="{{ $user->name ?? '' }}" placeholder="Name">
      </div>
      <div class="form-group col-md-6">
        <label for="inputEmail4">Email</label>
      <input type="email" class="form-control" id="inputEmail4" value="{{ $user->email ?? '' }}" placeholder="Email">
      </div>
      <div class="form-group col-md-6">
        <label for="inputPassword4">Old Password</label>
        <input type="password" name="old_password" class="form-control" id="inputPassword4"  placeholder="Password">
      </div>
      <div class="form-group col-md-6">
        <label for="inputPassword4">New Password</label>
        <input type="password" name="new_password" class="form-control" id="inputPassword4" placeholder="Password">
      </div>
      <div class="form-group col-md-6">
        <label for="inputPassword4">Confirm New Password</label>
        <input type="password" name="confirm_password" class="form-control" id="inputPassword4" placeholder="Password">
      </div>
    </div>
    <div class="form-group">
      <label for="inputAddress">Address</label>
      <input type="text" name="address" class="form-control" value=" {{ $user->address }} " id="inputAddress" placeholder="1234 Main St">
    </div>
    @auth
        @if (auth()->user()->is_admin)
        <div class="form-group">
          <input type="radio" id="contactChoice1"
              name="is_valid" value="1"
              @if ( $user and $user->is_valid )
                  checked
              @endif
              >
          <label for="contactChoice1">Validate</label>

          <input  type="radio" id="contactChoice1"
                  name="is_valid" value="0"
              @if ( $user and ! $user->is_valid )
                  checked
              @endif
          >
          <label for="contactChoice1">Not Validate</label> 
        </div> 

        <div class="form-group">
          <input type="radio" id="contactChoice2"
              name="is_admin" value="1"
              @if ( $user and $user->is_admin )
                  checked
              @endif
              >
          <label for="contactChoice2">Admin</label>

          <input  type="radio" id="contactChoice3"
                  name="is_admin" value="0"
              @if ( $user and ! $user->is_admin )
                  checked
              @endif
          >
          <label for="contactChoice2">Simple User</label> 
        </div> 

        <div class="form-group">
          <input type="radio" id="contactChoice3"
              name="is_blocked" value="1"
              @if ( $user and $user->is_blocked )
                  checked
              @endif
              >
          <label for="contactChoice3">Block</label>

          <input  type="radio" id="contactChoice3"
                  name="is_blocked" value="0"
              @if ( $user and ! $user->is_blocked )
                  checked
              @endif
          >
          <label for="contactChoice3">Active</label> 
        </div>              
        @endif
    @endauth
   
    <div class="form-group">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" id="gridCheck">
        <label class="form-check-label" for="gridCheck">
          Check me out
        </label>
      </div>
    </div>
    <button type="submit" class="btn btn-primary">Update profile</button>
  </form>
