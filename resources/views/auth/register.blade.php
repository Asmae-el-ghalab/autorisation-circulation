<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }} - إنشاء حساب جديد</title>
    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/auth.css') }}">
</head>
<body>
    <div class="auth-card">
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
