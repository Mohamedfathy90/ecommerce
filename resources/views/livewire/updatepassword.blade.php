<div class="card-body">

<form wire:submit.prevent="save">
				
					<div class="row mb-3">
					<div class="col-sm-3">
						<h6 class="mb-0">Old Password</h6>
					</div>
					<div class="col-sm-9 text-secondary">
					<input type="password" wire:model="old_password" class="form-control" id="current_password"   placeholder="Old Password" />
					@error('old_password')
                    <span class="text-danger">{{$message}}</span>
					@enderror
                    </div>
				</div>


				<div class="row mb-3">
				<div class="col-sm-3">
					<h6 class="mb-0">New Password</h6>
				</div>
				<div class="col-sm-9 text-secondary">
					<input type="password" wire:model="new_password" class="form-control"  id="new_password"   placeholder="New Password" />
					@error('new_password')
                    <span class="text-danger">{{$message}}</span>
					@enderror
				</div>
				</div>


				<div class="row mb-3">
				<div class="col-sm-3">
					<h6 class="mb-0">Confirm New Password</h6>
				</div>
				<div class="col-sm-9 text-secondary">
					<input type="password" wire:model="new_password_confirmation" class="form-control" id="new_password_confirmation"   placeholder="Confirm New Password" /> 
				</div>
				</div>


				<div class="row">
					<div class="col-sm-3"></div>
					<div class="col-sm-9 text-secondary">
					<input type="submit" class="btn btn-primary px-4" value="Save Changes" />
					</div>
				</div>
			
			</div>

		</form>
</div>
