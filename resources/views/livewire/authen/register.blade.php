<div class="min-h-screen w-full bg-[#FBF4E8] flex flex-col justify-center">
    <div class="mx-auto max-w-lg w-full max-sm:p-4">
        <div class="flex flex-col items-center bg-white p-8 shadow-xl" wire:loading.class="opacity-50">
            <h1 class="text-3xl font-semibold text-gray-700">Register</h1>
            <form wire:submit.prevent="register" class="flex w-full flex-col gap-4">
                <label for="name" class="text-gray-600">Name</label>
                <input type="text" class="border-2 border-gray-400 p-3 forcus:ring-0" wire:model="name" placeholder="Username" required>

                <label for="email" class="text-gray-600">Email</label>
                <input type="email" class="border-2 border-gray-400 p-3 forcus:ring-0" wire:model="email" placeholder="Email" required>

                <label for="password" class="text-gray-600">Password</label>
                <input type="password" class="border-2 border-gray-400 p-3 forcus:ring-0" wire:model="password" placeholder="Password" required>

                <label for="password_confirmation" class="text-gray-600">Confirm password</label>
                <input type="password" class="border-2 border-gray-400 p-3 forcus:ring-0" wire:model="password_confirmation" placeholder="Confirm password" required>
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li class="text-red-500">{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
                <button type="submit" wire:loading.remove class="border border-black bg-black text-white hover:bg-white hover:text-black w-full p-4">Register</button>
                <button type="submit" wire:loading class="border border-black bg-black text-white opacity-50 w-full p-4">Creating...</button>
                <div wire:dirty>Unsaved changes...</div> 
            </form>
            <span class="mt-7 mb-4 text-2xl text-gray-700 text-center w-full font-semibold">Already have an account?</span>
            <a href="/login" class="underline underline-offset-8 text-[#235A54] text-center w-full cursor-pointer" wire:navigate>Go to Log-in</a>
        </div>
    </div>
</div>
