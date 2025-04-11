<div class="py-32 px-10">
    <div class="py-10 flex justify-center">
        <div class="p-5 w-[60%] border rounded-md border-gray-300 shadow-sm ">
            <p class="text-2xl text-gray-700 text-center">Sign Up</p>
            <form method="POST" action="./src/services/auth/signup.php" class="px-5 my-10 grid grid-cols-2 gap-6">
                <div class="grid gap-3">
                    <label for="" class="font-bold text-gray-600">First name</label>
                    <input type="text" name="fname" class="border-1 w-[100%] p-3 rounded-md border-gray-300 outline-none focus:border-blue-900" id="">
                </div>
                <div class="grid gap-3">
                    <label for="" class="font-bold text-gray-600">Last name</label>
                    <input type="text" name="lname" class="border-1 w-[100%] p-3 rounded-md border-gray-300 outline-none focus:border-blue-900" id="">
                </div>
                <div class="grid gap-3">
                    <label for="" class="font-bold text-gray-600">Email</label>
                    <input type="email" name="email" class="border-1 w-[100%] p-3 rounded-md border-gray-300 outline-none focus:border-blue-900" id="">
                </div>
                <div class="grid gap-3">
                    <label for="" class="font-bold text-gray-600">Address</label>
                    <input type="text" name="address" class="border-1 w-[100%] p-3 rounded-md border-gray-300 outline-none focus:border-blue-900" id="">
                </div>
                <div class="grid gap-3">
                    <label for="" class="font-bold text-gray-600">Phone number</label>
                    <input type="tel" name="phone" class="border-1 w-[100%] p-3 rounded-md border-gray-300 outline-none focus:border-blue-900" id="">
                </div>
                <div class="grid gap-3">
                    <label for="" class="font-bold text-gray-600">Password</label>
                    <input type="password" name="password" class="border-1 w-[100%] p-3 rounded-md border-gray-300 outline-none focus:border-blue-900" id="">
                </div>
                <div class="grid gap-3">
                    <label for="" class="font-bold text-gray-600">Confirm password</label>
                    <input type="password" name="confirm_password" class="border-1 w-[100%] p-3 rounded-md border-gray-300 outline-none focus:border-blue-900" id="">
                </div>
                <div class="grid gap-3 col-span-2 text-center">
                    <div>
                        <input type="submit" value="Sign In" name="" class="bg-blue-800 text-white cursor-pointer transition duration-300 hover:bg-blue-700 border-1 w-[100%] p-3 rounded-md border-gray-300 outline-none focus:border-blue-900" id="">
                    </div>
                </div>
                <div class="col-span-2">
                    <p class="text-sm text-gray-500">Don't have an account <a href="" class="border-b">Sign Up</a> </p>
                </div>
            </form>
        </div>
    </div>
</div>