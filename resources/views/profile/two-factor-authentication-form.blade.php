<div class="card">
    <div class="card-header">
        <h4>Two-Factor Authentication</h4>
    </div>
    <div class="card-body">

        @if(! auth()->user()->two_factor_secret)
        {{-- Enable 2FA --}}
        <form method="POST" action="{{ url('user/two-factor-authentication') }}">
            @csrf

            <button type="submit" class="btn btn-primary">
                {{ __('Enable Two-Factor') }}
            </button>
        </form>
        @else
        {{-- Disable 2FA --}}
        <form method="POST" action="{{ url('user/two-factor-authentication') }}">
            @csrf
            @method('DELETE')

            <button type="submit" class="btn btn-danger mb-3">
                {{ __('Disable Two-Factor') }}
            </button>
        </form>

        @if(session('status') == 'two-factor-authentication-enabled')
        {{-- Show SVG QR Code, After Enabling 2FA --}}
        <p>
            {{ __('Two factor authentication is now enabled. Scan the following QR code using your phone\'s authenticator application.') }}
        </p>

        <div class="mb-3">
            {!! auth()->user()->twoFactorQrCodeSvg() !!}
        </div>
        @endif

        {{-- Show 2FA Recovery Codes --}}
        <p>
            {{ __('Store these recovery codes in a secure password manager. They can be used to recover access to your account if your two factor authentication device is lost.') }}
        </p>

        <p>
            @foreach (json_decode(decrypt(auth()->user()->two_factor_recovery_codes), true) as $code)
            <div>{{ $code }}</div>
            @endforeach
        </p>

        {{-- Regenerate 2FA Recovery Codes --}}
        <form method="POST" action="{{ url('user/two-factor-recovery-codes') }}">
            @csrf

            <button type="submit" class="btn btn-dark">
                {{ __('Regenerate Recovery Codes') }}
            </button>
        </form>
        @endif
    </div>
</div>