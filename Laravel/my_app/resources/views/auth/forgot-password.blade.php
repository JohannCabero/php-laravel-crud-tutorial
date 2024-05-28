<x-layout>
    <h1 class="title">Request a Password Reset Email</h1>

    {{-- Session Message --}}
    @if (session('status'))
        <x-flashMsg msg="{{ session('status') }}" bg="bg-green-500" />
    @endif

    <div class="mx-auto max-w-screen-sm card">

        <form action="{{ route('password.request') }}" method="post">
            @csrf

            {{-- Email --}}
            <div class="mnb-4">
                <label for="email">Email</label>
                <input type="text" name="email" value="{{ old('email') }}"
                    class="input
                @error('email') ring-red-500 @enderror">

                @error('email')
                    <p class="error">{{ $message }}</p>
                @enderror
            </div>

            {{-- Submit Button --}}
            <button class="btn">Submit</button>
        </form>

    </div>
</x-layout>
