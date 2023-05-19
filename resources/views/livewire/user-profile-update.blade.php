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
                <label>Address</label>
                <input class="form-control" wire:model="address" type="text"  />
                @error('address')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            
            
            <div class="form-group col-md-12">
            <label>User Photo <span class="required">*</span></label>
            <input class="form-control" wire:model="image" type="file"  id="image" />
            </div>
            
            <div class="form-group col-md-12">
            @if($image)
            <img src="{{$image->temporaryUrl()}}" alt="User" class="rounded-circle p-1 bg-primary" width="110">
            @else
            <img src="{{auth()->user()->image}}" alt="User" class="rounded-circle p-1 bg-primary" width="110">
            @endif
            </div>
            
            <div class="col-md-12">
            <button type="submit" class="btn btn-fill-out submit font-weight-bold" >Save Changes</button>
            </div>
        </div>
    </form>
</div>
