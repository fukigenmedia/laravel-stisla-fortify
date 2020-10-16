<div class="card">
    <form method="POST" action="{{ route('user-password.update') }}">
        @csrf @method('PUT')

        <div class="card-header">
            <h4>Update Password</h4>
        </div>
        <div class="card-body">
            <div class="form-group">
                <label>{{ __('Current Password') }}</label>
                <input type="password" class="form-control" name="current_password" required
                    autocomplete="current-password" />
            </div>
            <div class="form-group">
                <label>{{ __('Password') }}</label>
                <input type="password" name="password" required autocomplete="new-password" class="form-control" />
            </div>
            <div class="form-group">
                <label>{{ __('Confirm Password') }}</label>
                <input type="password" class="form-control" name="password_confirmation" required
                    autocomplete="new-password" />
            </div>
        </div>
        <div class="card-footer text-right">
            <button class="btn btn-primary" type="submit">
                {{ __('Update Password') }}
            </button>
        </div>
    </form>
</div>