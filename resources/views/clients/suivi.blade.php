<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>تتبع طلب الرخصة</title>
    
    <!-- Styles -->
    <style>
        /* ===== Variables ===== */
        :root {
            --primary-blue: #0066ff;
            --primary-blue-light: #00a1ff;
            --glass-bg: rgba(255, 255, 255, 0.15);
            --glass-border: rgba(255, 255, 255, 0.2);
            --glass-shadow: 0 8px 32px rgba(0, 102, 255, 0.1);
            --text-dark: #2c3e50;
            --text-medium: #5c6b77;
            --text-light: #adb5bd;
        }

        /* ===== Base Styles ===== */
        body {
            background: linear-gradient(135deg, #f5f9ff 0%, #e6f1ff 100%);
            min-height: 100vh;
            font-family: 'Segoe UI', system-ui, sans-serif;
            color: var(--text-dark);
        }

        .container {
            padding: 20px;
        }

        /* ===== Track Container ===== */
        .track-container {
            backdrop-filter: blur(16px);
            background: var(--glass-bg);
            border-radius: 24px;
            border: 1px solid var(--glass-border);
            box-shadow: var(--glass-shadow);
            padding: 40px;
            margin: 60px auto;
            max-width: 800px;
            position: relative;
            overflow: hidden;
        }

        .track-container::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: radial-gradient(circle, rgba(0,102,255,0.08) 0%, rgba(0,102,255,0) 70%);
            z-index: -1;
        }

        /* ===== Header Section ===== */
        .track-header {
            text-align: center;
            margin-bottom: 40px;
            position: relative;
        }

        .track-header h2 {
            font-weight: 800;
            font-size: 2.5rem;
            margin-bottom: 12px;
            background: linear-gradient(90deg, var(--primary-blue), var(--primary-blue-light));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            text-shadow: 0 2px 10px rgba(0, 102, 255, 0.15);
        }

        .track-header p {
            color: var(--text-medium);
            font-size: 1.1rem;
        }

        /* ===== Form Section ===== */
        .track-form {
            background: rgba(255, 255, 255, 0.7);
            border-radius: 20px;
            padding: 30px;
            margin-bottom: 30px;
            box-shadow: 0 5px 25px rgba(0, 102, 255, 0.05);
            border: 1px solid rgba(255, 255, 255, 0.3);
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.1);
        }

        .track-form:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 35px rgba(0, 102, 255, 0.15);
        }

        .form-group {
            margin-bottom: 25px;
        }

        .form-label {
            font-weight: 700;
            color: var(--text-dark);
            margin-bottom: 12px;
            display: flex;
            align-items: center;
            gap: 10px;
            font-size: 1.1rem;
        }

        .form-control {
            border: none;
            border-radius: 12px;
            padding: 16px 20px;
            background: rgba(255, 255, 255, 0.8);
            box-shadow: inset 0 2px 5px rgba(0, 0, 0, 0.05);
            font-size: 1rem;
            transition: all 0.3s ease;
            border: 1px solid rgba(0, 102, 255, 0.1);
        }

        .form-control:focus {
            background: white;
            box-shadow: 0 0 0 3px rgba(0, 102, 255, 0.2), 
                        inset 0 2px 5px rgba(0, 0, 0, 0.05);
            outline: none;
        }

        /* ===== Buttons ===== */
        .btn-search {
            background: linear-gradient(135deg, var(--primary-blue), var(--primary-blue-light));
            border: none;
            padding: 16px 40px;
            border-radius: 50px;
            font-weight: 700;
            font-size: 1.1rem;
            color: white;
            box-shadow: 0 5px 20px rgba(0, 102, 255, 0.3);
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.1);
            display: inline-flex;
            align-items: center;
            gap: 12px;
            position: relative;
            overflow: hidden;
        }

        .btn-search::after {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: linear-gradient(
                to bottom right,
                rgba(255, 255, 255, 0.3) 0%,
                rgba(255, 255, 255, 0) 60%
            );
            transform: rotate(30deg);
        }

        .btn-search:hover {
            transform: translateY(-3px) scale(1.02);
            box-shadow: 0 8px 30px rgba(0, 102, 255, 0.4);
        }

        .btn-search:active {
            transform: translateY(1px);
        }

        /* ===== Status Card ===== */
        .status-card {
            background: rgba(255, 255, 255, 0.7);
            border-radius: 20px;
            padding: 30px;
            box-shadow: 0 5px 25px rgba(0, 102, 255, 0.05);
            border: 1px solid rgba(255, 255, 255, 0.3);
            position: relative;
            overflow: hidden;
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.1);
        }

        .status-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 5px;
            height: 100%;
            background: linear-gradient(to bottom, var(--primary-blue), var(--primary-blue-light));
        }

        .status-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 35px rgba(0, 102, 255, 0.15);
        }

        /* ===== Status Header ===== */
        .status-title {
            font-weight: 800;
            font-size: 1.5rem;
            color: var(--text-dark);
            margin-bottom: 25px;
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .status-badge {
            display: inline-block;
            padding: 8px 16px;
            border-radius: 50px;
            font-weight: 700;
            font-size: 0.95rem;
            background: linear-gradient(135deg, #ffcc00, #ff9500);
            color: white;
            box-shadow: 0 3px 15px rgba(255, 153, 0, 0.3);
            animation: pulse 2s infinite;
        }

        @keyframes pulse {
            0% { transform: scale(1); }
            50% { transform: scale(1.05); }
            100% { transform: scale(1); }
        }

        /* ===== Status Details ===== */
        .status-detail {
            display: flex;
            align-items: center;
            gap: 15px;
            margin-bottom: 15px;
            color: var(--text-medium);
            font-size: 1.05rem;
            padding-left: 10px;
            border-left: 2px solid rgba(0, 102, 255, 0.1);
        }

        .status-detail i {
            color: var(--primary-blue);
            width: 24px;
            text-align: center;
            font-size: 1.2rem;
        }

        .status-detail .text-muted {
            color: var(--text-light) !important;
        }

        /* ===== Progress Bar ===== */
        .progress-container {
            margin-top: 30px;
        }

        .progress-steps {
            display: flex;
            justify-content: space-between;
            position: relative;
            margin-bottom: 20px;
        }

        .progress-steps::before {
            content: '';
            position: absolute;
            top: 50%;
            left: 0;
            right: 0;
            height: 4px;
            background: rgba(0, 102, 255, 0.1);
            transform: translateY(-50%);
            z-index: 1;
            border-radius: 2px;
        }

        .progress-bar {
            position: absolute;
            top: 50%;
            left: 0;
            height: 4px;
            background: linear-gradient(to right, var(--primary-blue), var(--primary-blue-light));
            transform: translateY(-50%);
            z-index: 2;
            border-radius: 2px;
            width: 50%;
            transition: all 0.4s ease;
        }

        /* ===== Steps ===== */
        .step {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: white;
            border: 3px solid rgba(0, 102, 255, 0.1);
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 700;
            color: var(--text-light);
            position: relative;
            z-index: 3;
            transition: all 0.3s ease;
        }

        .step.active {
            border-color: var(--primary-blue);
            color: var(--primary-blue);
            background: white;
            box-shadow: 0 0 0 5px rgba(0, 102, 255, 0.2);
        }

        .step.completed {
            background: var(--primary-blue);
            border-color: var(--primary-blue);
            color: white;
        }

        .step-label {
            position: absolute;
            top: calc(100% + 10px);
            left: 50%;
            transform: translateX(-50%);
            font-size: 0.85rem;
            color: var(--text-medium);
            white-space: nowrap;
        }

        /* ===== Responsive Design ===== */
        @media (max-width: 768px) {
            .track-container {
                padding: 30px;
                margin: 30px auto;
                border-radius: 20px;
            }
            
            .track-header h2 {
                font-size: 2rem;
            }
            
            .btn-search {
                width: 100%;
                justify-content: center;
            }
            
            .progress-steps {
                flex-wrap: wrap;
                gap: 30px;
                justify-content: center;
            }
            
            .progress-steps::before,
            .progress-bar {
                display: none;
            }
        }
    </style>
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>
    @include('layouts.navigation')
    <div class="container">
        <!-- Main Tracking Container -->
        <div class="track-container">
            <!-- Header Section -->
            <div class="track-header">
                <h2><i class="fas fa-rocket"></i> تتبع طلبك</h2>
                <p>تابع حالة طلبك في الوقت الفعلي</p>
            </div>

            <!-- Search Form -->
            <div class="track-form">
                <form method="GET" action="#">
                    <div class="form-group">
                        <label class="form-label">
                            <i class="fas fa-fingerprint"></i> رقم الطلب
                        </label>
                        <input type="text" 
                               name="numero_demande" 
                               class="form-control" 
                               placeholder="أدخل الرقم المرجعي للطلب" 
                               required>
                    </div>
                    
                    <div class="text-center">
                        <button type="submit" class="btn btn-search">
                            <i class="fas fa-search"></i> تتبع الطلب
                        </button>
                    </div>
                </form>
            </div>

            <!-- Status Card -->
            <div class="status-card">
                <!-- Status Header -->
                <h5 class="status-title">
                    <i class="fas fa-clipboard-list"></i> حالة الطلب #DV-2025-0582
                    <span class="status-badge">قيد المعالجة</span>
                </h5>
                
                <!-- Status Details -->
                <div class="status-detail">
                    <i class="fas fa-calendar-check"></i>
                    <span>تاريخ الإرسال: <strong>2025-05-15</strong></span>
                </div>
                
                <div class="status-detail">
                    <i class="fas fa-clock"></i>
                    <span>تاريخ التحديث الأخير: <strong>2025-05-18</strong></span>
                </div>
                
                <div class="status-detail">
                    <i class="fas fa-info-circle"></i>
                    <span>المرحلة الحالية: <strong>مراجعة الوثائق</strong></span>
                </div>

                <!-- Progress Bar -->
                <div class="progress-container">
                    <div class="progress-steps">
                        <!-- Step 1 -->
                        <div class="step completed">
                            <i class="fas fa-check"></i>
                            <span class="step-label">مستلم</span>
                        </div>
                        
                        <!-- Step 2 -->
                        <div class="step completed">
                            <i class="fas fa-check"></i>
                            <span class="step-label">مراجعة أولية</span>
                        </div>
                        
                        <!-- Step 3 -->
                        <div class="step active">
                            3
                            <span class="step-label">مراجعة الوثائق</span>
                        </div>
                        
                        <!-- Step 4 -->
                        <div class="step">
                            4
                            <span class="step-label">الموافقة النهائية</span>
                        </div>
                        
                        <!-- Step 5 -->
                        <div class="step">
                            5
                            <span class="step-label">مكتمل</span>
                        </div>
                        
                        <!-- Progress Bar Indicator -->
                        <div class="progress-bar"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
