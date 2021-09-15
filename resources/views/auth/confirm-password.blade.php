<x-guest-layout>
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Password Confirmation
                </div>
                <div class="card-body">
                    <div class="alert alert-info">
                        {{ __('This is a secure area of the application. Please confirm your password before continuing.') }}
                    </div>

                    <form method="POST" id="confirm-password-form" action="{{ route('password.confirm') }}">
                        @csrf

                        <!-- Password -->
                        <div class="form-group">
                            <label for="password">{{ __('Password') }}</label>
                            <input type="password" name="password" id="password" value="{{ old('password') }}"
                                class="form-control" required autocomplete="current-password">
                            @error('password')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </form>
                </div>
                <div class="card-footer">
                    <div class="d-flex justify-content-end">
                        <button type="submit" form="confirm-password-form" class="btn btn-primary">
                            {{ __('Confirm') }}
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>