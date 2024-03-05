<div class="min-h-screen w-full bg-[#FBF4E8] flex flex-col justify-center">

    <div class="mx-auto w-full max-w-lg max-sm:p-4">
        <div class="flex flex-col items-center bg-white p-8 shadow-xl">
            <h1 class="text-3xl font-semibold text-gray-700">Login</h1>

            <form wire:submit.prevent="login" class="flex w-full flex-col gap-4">
                @csrf

                <label for="email" class="text-gray-600">Email</label>
                <input type="email" class="forcus:ring-0 border-2 border-gray-400 p-3" wire:model="email" placeholder="Email" required>

                <label for="password" class="text-gray-600">Password</label>
                <input type="password" class="forcus:ring-0 border-2 border-gray-400 p-3" wire:model="password" placeholder="Password" required>

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li class="text-red-500">{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <button type="submit"
                    class="w-full border border-black bg-black p-4 text-white hover:bg-white hover:text-black cursor-pointer">Login</button>
            </form>

            <span class="mb-4 mt-7 w-full text-center text-2xl font-semibold text-gray-700">Don't have an
                account?</span>
            <a href="/register" class="w-full cursor-pointer text-center text-[#235A54] underline underline-offset-8"
                wire:navigate>Create an account</a>
        </div>

    </div>
</div>
