<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }} - إنشاء حساب جديد</title>
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
            max-width: 600px;
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

        .form-input, .form-select {
            width: 100%;
            padding: 0.75rem 1rem;
            border: 2px solid #e2e8f0;
            border-radius: 0.75rem;
            font-size: 1rem;
            transition: all 0.3s ease;
            background: white;
        }

        .form-input:focus, .form-select:focus {
            border-color: #3b82f6;
            box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.1);
            outline: none;
        }

        .error-message {
            color: #ef4444;
            font-size: 0.875rem;
            margin-top: 0.5rem;
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

            .btn-primary {
                width: 100%;
            }
        }
    </style>
</head>
<body>
    <div class="auth-container">
        <div class="auth-header">
            <h1>إنشاء حساب جديد</h1>
            <p>يرجى ملء المعلومات التالية لإنشاء حسابك</p>
        </div>

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- First Name -->
            <div class="form-group">
                <label for="first_name" class="form-label">الاسم الأول</label>
                <input id="first_name" class="form-input" type="text" name="first_name" value="{{ old('first_name') }}" required autofocus />
                @error('first_name')
                    <div class="error-message">{{ $message }}</div>
                @enderror
            </div>

            <!-- Last Name -->
            <div class="form-group">
                <label for="last_name" class="form-label">اسم العائلة</label>
                <input id="last_name" class="form-input" type="text" name="last_name" value="{{ old('last_name') }}" required />
                @error('last_name')
                    <div class="error-message">{{ $message }}</div>
                @enderror
            </div>

            <!-- Gender -->
            <div class="form-group">
                <label for="gender" class="form-label">الجنس</label>
                <select id="gender" name="gender" class="form-select" required>
                    <option value="">اختر الجنس</option>
                    <option value="male" {{ old('gender') == 'male' ? 'selected' : '' }}>ذكر</option>
                    <option value="female" {{ old('gender') == 'female' ? 'selected' : '' }}>أنثى</option>
                </select>
                @error('gender')
                    <div class="error-message">{{ $message }}</div>
                @enderror
            </div>

            <!-- Phone -->
            <div class="form-group">
                <label for="phone" class="form-label">رقم الهاتف</label>
                <input id="phone" class="form-input" type="tel" name="phone" value="{{ old('phone') }}" required />
                @error('phone')
                    <div class="error-message">{{ $message }}</div>
                @enderror
            </div>

            <!-- Email Address -->
            <div class="form-group">
                <label for="email" class="form-label">البريد الإلكتروني</label>
                <input id="email" class="form-input" type="email" name="email" value="{{ old('email') }}" required />
                @error('email')
                    <div class="error-message">{{ $message }}</div>
                @enderror
            </div>

            <!-- Password -->
            <div class="form-group">
                <label for="password" class="form-label">كلمة المرور</label>
                <input id="password" class="form-input" type="password" name="password" required />
                @error('password')
                    <div class="error-message">{{ $message }}</div>
                @enderror
            </div>

            <!-- Confirm Password -->
            <div class="form-group">
                <label for="password_confirmation" class="form-label">تأكيد كلمة المرور</label>
                <input id="password_confirmation" class="form-input" type="password" name="password_confirmation" required />
                @error('password_confirmation')
                    <div class="error-message">{{ $message }}</div>
                @enderror
            </div>

            <div class="auth-footer">
                <a class="auth-link" href="{{ route('login') }}">
                    لديك حساب بالفعل؟
                </a>
                <button type="submit" class="btn-primary">
                    إنشاء الحساب
                </button>
            </div>
        </form>
    </div>
</body>
</html>
