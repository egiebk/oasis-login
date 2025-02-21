<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    @vite('resources/css/app.css')
</head>

<body class="flex items-center justify-center min-h-screen bg-gradient-to-br from-emerald-400 via-sky-300 to-blue-500">
    <div class="flex w-full max-w-6xl bg-white/60 backdrop-blur-2xl rounded-3xl layered box overflow-hidden">
        <div class="w-full md:w-1/2 p-8 flex flex-col justify-center">
            <div class="text-center my-4">
                <img src="{{ asset('images/oasis-logo.png') }}" class="mx-auto" width="45%" alt="RRMS Logo">
                <p class="text-lg text-gray-800">Online Administrative Services and Integrated Systems <br> (OASIS)</p>
            </div>

            <form action="{{ route('login') }}" method="POST" class="px-6">
                @csrf
                <div class="space-y-2 mb-4">
                    <label for="email" class="block font-medium text-gray-700">Email</label>
                    <input type="email" name="email" id="email" class="w-full px-4 py-3 border rounded-lg focus:ring focus:ring-blue-300" required>
                    @error('email') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                </div>

                <div class="space-y-2 mb-4">
                    <label for="password" class="block font-medium text-gray-700">Password</label>
                    <input type="password" name="password" id="password" class="w-full px-4 py-3 border rounded-lg focus:ring focus:ring-blue-300" required>
                    @error('password') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                </div>

                <button class="group mt-6 mb-6 relative inline-flex h-12 items-center justify-center overflow-hidden rounded-md bg-indigo-900 px-12 font-medium text-neutral-200">
                    <span>Log-in</span>
                    <div class="w-0 translate-x-[100%] pl-0 opacity-0 transition-all duration-200 group-hover:w-5 group-hover:translate-x-0 group-hover:pl-1 group-hover:opacity-100">
                        <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5">
                            <path d="M8.14645 3.14645C8.34171 2.95118 8.65829 2.95118 8.85355 3.14645L12.8536 7.14645C13.0488 7.34171 13.0488 7.65829 12.8536 7.85355L8.85355 11.8536C8.65829 12.0488 8.34171 12.0488 8.14645 11.8536C7.95118 11.6583 7.95118 11.3417 8.14645 11.1464L11.2929 8H2.5C2.22386 8 2 7.77614 2 7.5C2 7.22386 2.22386 7 2.5 7H11.2929L8.14645 3.85355C7.95118 3.65829 7.95118 3.34171 8.14645 3.14645Z" fill="currentColor" fill-rule="evenodd" clip-rule="evenodd"></path>
                        </svg>
                    </div>
                </button>
            </form>
        </div>

        <div class="hidden md:block w-1/2 bg-cover bg-top relative" style="background-image: url('{{ asset('images/nfrdi-bldg.jpg') }}');">
            <div class="absolute inset-0 bg-black opacity-5"></div>
        </div>
    </div>

    <footer class="absolute bottom-0 w-full py-4 text-xs text-gray-500">
        <div class="flex font-light justify-end px-4">
            <span class="text-gray-300 italic">Online Administrative Services and Integrated Systems | Authentication by 
                <a href="" class="font-semibold inline-flex items-center gap-1">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="12" height="12" fill="currentColor">
                        <path d="M19 10H20C20.5523 10 21 10.4477 21 11V21C21 21.5523 20.5523 22 20 22H4C3.44772 22 3 21.5523 3 21V11C3 10.4477 3.44772 10 4 10H5V9C5 5.13401 8.13401 2 12 2C15.866 2 19 5.13401 19 9V10ZM5 12V20H19V12H5ZM11 14H13V18H11V14ZM17 10V9C17 6.23858 14.7614 4 12 4C9.23858 4 7 6.23858 7 9V10H17Z"></path>
                    </svg>CREDS
                </a>
            </span>
        </div>
    </footer>
</body>

</html>