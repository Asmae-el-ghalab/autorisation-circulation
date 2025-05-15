<style>
    .license-container {
        background: linear-gradient(135deg, #f8f9fa 0%, #ffffff 100%);
        border-radius: 24px;
        box-shadow: 0 10px 30px rgba(0, 82, 204, 0.1);
        padding: 40px;
        margin: 40px auto;
        max-width: 900px;
        border: 1px solid rgba(0, 123, 255, 0.15);
        transition: all 0.3s ease;
    }

    .license-container:hover {
        box-shadow: 0 15px 35px rgba(0, 82, 204, 0.15);
    }

    .license-header {
        text-align: center;
        margin-bottom: 32px;
        position: relative;
    }

    .license-header h2 {
        color: #0052cc;
        font-weight: 700;
        font-size: 2rem;
        margin-bottom: 8px;
        display: inline-block;
        background: linear-gradient(90deg, #0052cc 0%, #007bff 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }

    .license-header::after {
        content: "";
        display: block;
        width: 80px;
        height: 4px;
        background: linear-gradient(90deg, #007bff 0%, #00d4ff 100%);
        margin: 16px auto 0;
        border-radius: 2px;
    }

    .license-preview {
        border-radius: 16px;
        overflow: hidden;
        box-shadow: 0 5px 15px rgba(0, 82, 204, 0.1);
        margin-bottom: 32px;
        border: 1px solid rgba(0, 123, 255, 0.2);
        background-color: #ffffff;
    }

    .license-preview iframe {
        width: 100%;
        height: 500px;
        border: none;
    }

    .action-buttons {
        display: flex;
        justify-content: center;
        gap: 20px;
        margin-bottom: 28px;
        flex-wrap: wrap;
    }

    .btn-download {
        background: linear-gradient(135deg, #007bff 0%, #0052cc 100%);
        border: none;
        padding: 12px 36px;
        border-radius: 50px;
        font-weight: 600;
        font-size: 1.1rem;
        color: white;
        box-shadow: 0 4px 12px rgba(0, 82, 204, 0.2);
        transition: all 0.3s ease;
        display: inline-flex;
        align-items: center;
        gap: 8px;
    }

    .btn-download:hover {
        transform: translateY(-2px);
        box-shadow: 0 6px 16px rgba(0, 82, 204, 0.3);
        color: white;
        background: linear-gradient(135deg, #0066e6 0%, #0047b3 100%);
    }

    .btn-print {
        background: white;
        border: 2px solid #007bff;
        padding: 12px 36px;
        border-radius: 50px;
        font-weight: 600;
        font-size: 1.1rem;
        color: #007bff;
        transition: all 0.3s ease;
        display: inline-flex;
        align-items: center;
        gap: 8px;
    }

    .btn-print:hover {
        background-color: #f0f7ff;
        color: #0052cc;
    }

    .license-info {
        text-align: center;
        margin-top: 24px;
    }

    .expiration-alert {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        background-color: #fff8e6;
        color: #e68a00;
        padding: 12px 24px;
        border-radius: 50px;
        font-weight: 600;
        margin-bottom: 16px;
        border-left: 4px solid #ffcc00;
    }

    .notification-info {
        color: #5c6b77;
        font-size: 0.95rem;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 8px;
    }

    @media (max-width: 768px) {
        .license-container {
            padding: 30px 20px;
            margin: 20px auto;
        }
        
        .action-buttons {
            flex-direction: column;
            gap: 12px;
        }
        
        .btn-download, .btn-print {
            width: 100%;
            justify-content: center;
        }
    }
</style>
@include('layouts.navigation')

<div class="container">
    <div class="license-container">
        <div class="license-header">
            <h2>📄 الرخصة الإلكترونية</h2>
            <p class="text-muted">الرخصة الرسمية المعتمدة من الوزارة</p>
        </div>

        <div class="license-preview">
            <iframe src="/license/example.pdf" title="عرض الرخصة"></iframe>
        </div>

        <div class="action-buttons">
            <a href="/license/download/123" class="btn btn-download">
                <i class="fas fa-download"></i> تحميل PDF
            </a>
            <button class="btn btn-print" onclick="window.print()">
                <i class="fas fa-print"></i> طباعة الرخصة
            </button>
        </div>

        <div class="license-info">
            <div class="expiration-alert">
                <i class="fas fa-exclamation-circle"></i>
                <span>تنتهي الصلاحية في: <strong>2025-06-01</strong></span>
            </div>
            <p class="notification-info">
                <i class="fas fa-bell"></i>
                سيصلك إشعار بالتجديد قبل 30 يوماً من تاريخ الانتهاء
            </p>
        </div>
    </div>
</div>

<!-- Font Awesome pour les icônes -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
