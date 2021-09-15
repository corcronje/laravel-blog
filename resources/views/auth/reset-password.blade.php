<x-guest-layout>
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card-header">
                {{ __('Reset Password') }}
            </div>
            <div class="card">
                <div class="card-body">            
                    <form method="POST" id="reset-password-form" action="{{ route('password.update') }}">
                        @csrf
            
                        <!-- Password Reset Token -->
                        <input type="hidden" name="token" value="{{ $request->route('token') }}">
            
                        <!-- Email Address -->
                        <div class="form-group">
                            <label for="email">{{ __('Email') }}</label>
                            <input type="email" name="email" id="email" value="{{ old('email', $request->email) }}"
                                class="form-control" required autofocus>
                            @error('email')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
            
                        <!-- Password -->
                        <div class="form-group">
                            <label for="password">{{ __('Password') }}</label>
                            <input type="password" name="password" id="password" value="{{ old('password') }}"
                                class="form-control" required>
                            @error('password')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Confirm Password -->
                        <div class="form-group">
                            <label for="password_confirmation">{{ __('Password') }}</label>
                            <input type="password" name="password_confirmation" id="password_confirmation"
                                value="{{ old('password_confirmation') }}" class="form-control" required />
                        </div>
                    </form>
                </div>
                <div class="card-footer">
                    <div class="d-flex justify-content-end">
                        <button type="submit" form="reset-password-form" class="btn btn-primary">
                            {{ __('Reset Password') }}
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>
