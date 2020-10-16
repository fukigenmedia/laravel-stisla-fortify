<div class="card">
    <form method="POST" action="{{ route('user-profile-information.update') }}">
        @csrf @method('PUT')

        <div class="card-header">
            <h4>Edit Profile</h4>
        </div>
        <div class="card-body">
            <div class="form-group">
                <label>{{ __('Name') }}</label>
                <input type="text" class="form-control" name="name" value="{{ old('name') ?? auth()->user()->name }}"
                    required autofocus autocomplete="name" />
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" class="form-control"
                    value="{{ old('email') ?? auth()->user()->email }}" required autofocus />
            </div>
        </div>
        <div class="card-footer text-right">
            <button class="btn btn-primary" type="submit">
                {{ __('Update Profile') }}
            </button>
        </div>
    </form>
</div>