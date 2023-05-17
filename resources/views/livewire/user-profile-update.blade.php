<div class="card-body">
    <form wire:submit.prevent="update">
        
            <div class="row">
            <div class="form-group col-md-12">
                <label>Full Name <span class="required">*</span></label>
                <input required="" class="form-control" wire:model="name" type="text"  />
                @error('name')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group col-md-12">
                <label>Username</label>
                <input class="form-control" type="text" value="{{auth()->user()->username}}" disabled />
            </div>

            <div class="form-group col-md-12">
                <label>Email Address <span class="required">*</span></label>
                <input required="" class="form-control" wire:model="email" type="email"  />
                @error('email')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group col-md-12">
                <label>Current Password <span class="required">*</span></label>
                <input class="form-control" wire:model="old_password" type="password" />
                @error('old_password')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group col-md-12">
                <label>New Password <span class="required">*</span></label>
                <input  class="form-control" wire:model="newpassword" type="password" />
                @error('newpassword')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group col-md-12">
                <label>Confirm Password <span class="required">*</span></label>
                <input  class="form-control" wire:model="newpassword_confirmation" type="password" />
            </div>
            <div class="col-md-12">
                <button type="submit" class="btn btn-fill-out submit font-weight-bold" >Save Change</button>
            </div>
        </div>
    </form>
</div>
