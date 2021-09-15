<x-guest-layout>
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    {{ __('Forgot your password?') }}
                </div>
                <div class="card-body">
                    <div class="alert alert-info">
                        {{ __('No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
                    </div>
                    <form method="POST" id="forgot-password-form" action="{{ route('password.email') }}">
                        @csrf
                        <!-- Email Address -->
                        <div class="form-group">
                            <label for="email">{{ __('Email') }}</label>
                            <input type="email" name="email" id="email" value="{{ old('email') }}" class="form-control" required autofocus>
                            @error('email')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </form>
                </div>
                <div class="card-footer">
                    <div class="row justify-content-end">
                        <button type="submit" form="forgot-password-form" class="btn btn-primary">{{ __('Email Password Reset Link') }}</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>
