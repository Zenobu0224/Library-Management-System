<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Student ID -->
        <div>
            <x-input-label for="student_id" :value="__('Student ID')" />
            <x-text-input id="student_id" class="block mt-1 w-full" type="text" name="student_id" :value="old('student_id')" required autofocus />
            <x-input-error :messages="$errors->get('student_id')" class="mt-2" />
        </div>

        <!-- First Name -->
        <div class="mt-4">
            <x-input-label for="firstname" :value="__('First Name')" />
            <x-text-input id="firstname" class="block mt-1 w-full" type="text" name="firstname" :value="old('firstname')" required />
            <x-input-error :messages="$errors->get('firstname')" class="mt-2" />
        </div>

        <!-- Last Name -->
        <div class="mt-4">
            <x-input-label for="lastname" :value="__('Last Name')" />
            <x-text-input id="lastname" class="block mt-1 w-full" type="text" name="lastname" :value="old('lastname')" required />
            <x-input-error :messages="$errors->get('lastname')" class="mt-2" />
        </div>

        <!-- Middle Name -->
        <div class="mt-4">
            <x-input-label for="middlename" :value="__('Middle Name (Optional)')" />
            <x-text-input id="middlename" class="block mt-1 w-full" type="text" name="middlename" :value="old('middlename')" />
            <x-input-error :messages="$errors->get('middlename')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Course -->
        <div class="mt-4">
            <x-input-label for="course" :value="__('Course')" />
            <x-text-input id="course" class="block mt-1 w-full" type="text" name="course" :value="old('course')" required />
            <x-input-error :messages="$errors->get('course')" class="mt-2" />
        </div>

        <!-- Year Level -->
        <div class="mt-4">
            <x-input-label for="year_level" :value="__('Year Level')" />
            <select id="year_level" name="year_level" class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" required>
                <option value="">Select Year Level</option>
                <option value="1" {{ old('year_level') == '1' ? 'selected' : '' }}>1st Year</option>
                <option value="2" {{ old('year_level') == '2' ? 'selected' : '' }}>2nd Year</option>
                <option value="3" {{ old('year_level') == '3' ? 'selected' : '' }}>3rd Year</option>
                <option value="4" {{ old('year_level') == '4' ? 'selected' : '' }}>4th Year</option>
            </select>
            <x-input-error :messages="$errors->get('year_level')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />
            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />
            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>