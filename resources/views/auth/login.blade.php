<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }} - تسجيل الدخول</title>
    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@400;500;700&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        body {
            font-family: 'Tajawal', sans-serif;
            background: linear-gradient(135deg, #1e40af 0%, #3b82f6 100%);
            min-height: 100vh;
            margin: 0;
            padding: 1rem;
        }

        .auth-container {
            max-width: 500px;
            margin: 2rem auto;
            background: rgba(255, 255, 255, 0.95);
            border-radius: 1.5rem;
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.1);
            padding: 2rem;
            backdrop-filter: blur(10px);
        }

        .auth-header {
            text-align: center;
            margin-bottom: 2rem;
        }

        .auth-header h1 {
            color: #1e40af;
            font-size: 2rem;
            font-weight: 700;
            margin-bottom: 0.5rem;
        }

        .auth-header p {
            color: #64748b;
            font-size: 1rem;
        }

        .form-group {
            margin-bottom: 1.5rem;
        }

        .form-label {
            display: block;
            color: #1e293b;
            font-weight: 500;
            margin-bottom: 0.5rem;
            font-size: 0.95rem;
        }

        .form-input {
            width: 100%;
            padding: 0.75rem 1rem;
            border: 2px solid #e2e8f0;
            border-radius: 0.75rem;
            font-size: 1rem;
            transition: all 0.3s ease;
            background: white;
        }

        .form-input:focus {
            border-color: #3b82f6;
            box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.1);
            outline: none;
        }

        .error-message {
            color: #ef4444;
            font-size: 0.875rem;
            margin-top: 0.5rem;
        }

        .remember-me {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            margin-bottom: 1rem;
        }

        .remember-me input[type="checkbox"] {
            width: 1.25rem;
            height: 1.25rem;
            border-radius: 0.375rem;
            border: 2px solid #e2e8f0;
            cursor: pointer;
        }

        .remember-me label {
            color: #1e293b;
            font-size: 0.95rem;
        }

        .forgot-password {
            color: #3b82f6;
            text-decoration: none;
            font-weight: 500;
            transition: color 0.3s ease;
            font-size: 0.95rem;
        }

        .forgot-password:hover {
            color: #1e40af;
        }

        .auth-footer {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 2rem;
            padding-top: 1.5rem;
            border-top: 1px solid #e2e8f0;
        }

        .auth-link {
            color: #3b82f6;
            text-decoration: none;
            font-weight: 500;
            transition: color 0.3s ease;
        }

        .auth-link:hover {
            color: #1e40af;
        }

        .btn-primary {
            background: linear-gradient(135deg, #1e40af 0%, #3b82f6 100%);
            color: white;
            padding: 0.75rem 1.5rem;
            border: none;
            border-radius: 0.75rem;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.3s ease;
            font-size: 1rem;
            width: 100%;
        }

        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(59, 130, 246, 0.3);
        }

        @media (max-width: 640px) {
            .auth-container {
                margin: 1rem;
                padding: 1.5rem;
            }

            .auth-header h1 {
                font-size: 1.75rem;
            }

            .auth-footer {
                flex-direction: column;
                gap: 1rem;
                text-align: center;
            }
        }
    </style>
</head>
<body>
    <div class="min-h-screen flex items-center justify-center bg-gradient-to-br from-blue-900 to-blue-600 py-12 px-4 sm:px-6 lg:px-8">
        <div class="max-w-md w-full space-y-8 bg-white/95 backdrop-blur-sm p-8 rounded-2xl shadow-xl">
            <!-- Logo et Titre -->
            <div class="text-center">
                <h2 class="mt-6 text-3xl font-bold text-blue-900">
                    مرحباً بعودتك
                </h2>
                <p class="mt-2 text-sm text-gray-600">
                    قم بتسجيل الدخول للوصول إلى حسابك
                </p>
            </div>

            <!-- Session Status -->
            <x-auth-session-status class="mb-4" :status="session('status')" />

            <form method="POST" action="{{ route('login') }}" class="mt-8 space-y-6">
                @csrf

                <!-- Email Address -->
                <div>
                    <x-input-label for="email" :value="__('البريد الإلكتروني')" class="text-right" />
                    <div class="mt-1">
                        <x-text-input id="email" 
                            class="block w-full px-4 py-3 rounded-xl border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 text-right" 
                            type="email" 
                            name="email" 
                            :value="old('email')" 
                            required 
                            autofocus 
                            autocomplete="username" 
                            placeholder="أدخل بريدك الإلكتروني" />
                        <x-input-error :messages="$errors->get('email')" class="mt-2 text-right" />
                    </div>
                </div>

                <!-- Password -->
                <div>
                    <x-input-label for="password" :value="__('كلمة المرور')" class="text-right" />
                    <div class="mt-1">
                        <x-text-input id="password" 
                            class="block w-full px-4 py-3 rounded-xl border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 text-right" 
                            type="password" 
                            name="password" 
                            required 
                            autocomplete="current-password" 
                            placeholder="أدخل كلمة المرور" />
                        <x-input-error :messages="$errors->get('password')" class="mt-2 text-right" />
                    </div>
                </div>

                <!-- Remember Me -->
                <div class="flex items-center justify-between">
                    <div class="flex items-center">
                        <input id="remember_me" 
                            type="checkbox" 
                            class="rounded border-gray-300 text-blue-600 shadow-sm focus:ring-blue-500" 
                            name="remember">
                        <label for="remember_me" class="mr-2 block text-sm text-gray-900">
                            تذكرني
                        </label>
                    </div>

                    @if (Route::has('password.request'))
                        <a class="text-sm text-blue-600 hover:text-blue-800 transition-colors duration-200" href="{{ route('password.request') }}">
                            نسيت كلمة المرور؟
                        </a>
                    @endif
                </div>

                <!-- Login Button -->
                <div class="mt-6">
                    <button type="submit" 
                        class="w-full flex justify-center py-3 px-4 border border-transparent rounded-xl shadow-sm text-sm font-medium text-white bg-gradient-to-r from-blue-900 to-blue-600 hover:from-blue-800 hover:to-blue-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition-all duration-200 ease-in-out transform hover:-translate-y-0.5">
                        تسجيل الدخول
                    </button>
                </div>

                <!-- Enter Button -->
                <div class="mt-4">
                    <button type="submit" 
                        class="w-full flex justify-center py-3 px-4 border border-transparent rounded-xl shadow-sm text-sm font-medium text-white bg-gradient-to-r from-green-600 to-green-500 hover:from-green-500 hover:to-green-400 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500 transition-all duration-200 ease-in-out transform hover:-translate-y-0.5">
                        Enter
                    </button>
                </div>

                <!-- Register Link -->
                <div class="text-center mt-4">
                    <p class="text-sm text-gray-600">
                        ليس لديك حساب؟
                        <a href="{{ route('register') }}" class="font-medium text-blue-600 hover:text-blue-800 transition-colors duration-200">
                            سجل الآن
                        </a>
                    </p>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
