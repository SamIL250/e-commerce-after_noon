<div class="p-32">
    <div class="p-10 flex justify-center">
        <div class="p-5 w-[60%] border rounded-md border-gray-300 shadow-sm ">
            <p class="text-2xl text-gray-700 text-center">Sign In</p>
            <form method="POST" action="./src/services/auth/signin.php" class="px-20 my-10 grid gap-6">
                <div class="grid gap-3">
                    <label for="" class="font-bold text-gray-600">Email</label>
                    <input type="email" name="email" class="border-1 w-[100%] p-3 rounded-md border-gray-300 outline-none focus:border-blue-900" id="">
                </div>
                <div class="grid gap-3">
                    <label for="" class="font-bold text-gray-600">Password</label>
                    <input type="text" name="password" class="border-1 w-[100%] p-3 rounded-md border-gray-300 outline-none focus:border-blue-900" id="">
                </div>
                <div class="grid gap-3">
                    <input type="submit" value="Sign In" name="" class="bg-blue-800 text-white cursor-pointer transition duration-300 hover:bg-blue-700 border-1 w-[100%] p-3 rounded-md border-gray-300 outline-none focus:border-blue-900" id="">
                </div>
                <div class="">
                    <p class="text-sm text-gray-500">Don't have an account <a href="auth-signup" class="border-b">Sign Up</a> </p>
                </div>
            </form>

            
        </div>
    </div>
</div>