<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>الرخصة الإلكترونية</title>
    <style>
        body {
            font-family: 'DejaVu Sans', sans-serif;
            background: #f8fafc;
            padding: 2rem;
        }
        .license-container {
            background: white;
            border: 2px solid #e2e8f0;
            border-radius: 1rem;
            padding: 2rem;
            max-width: 800px;
            margin: 0 auto;
        }
        .header {
            text-align: center;
            margin-bottom: 2rem;
            border-bottom: 2px solid #e2e8f0;
            padding-bottom: 1rem;
        }
        .section {
            margin-bottom: 1.5rem;
        }
        .section-title {
            font-size: 1.25rem;
            font-weight: bold;
            color: #1e40af;
            margin-bottom: 0.5rem;
        }
        .info-row {
            display: flex;
            justify-content: space-between;
            margin-bottom: 0.5rem;
        }
        .label {
            color: #64748b;
            font-weight: bold;
        }
        .value {
            color: #1e293b;
        }
        .verification {
            text-align: center;
            margin-top: 2rem;
            padding: 1rem;
            background: #f1f5f9;
            border-radius: 0.5rem;
        }
        .footer {
            text-align: center;
            margin-top: 2rem;
            padding-top: 1rem;
            border-top: 2px solid #e2e8f0;
            color: #64748b;
        }
        .admin-notes {
            margin-top: 2rem;
            padding: 1rem;
            background: #f8fafc;
            border: 1px solid #e2e8f0;
            border-radius: 0.5rem;
        }
        .admin-notes-title {
            font-size: 1.1rem;
            font-weight: bold;
            color: #1e40af;
            margin-bottom: 0.5rem;
        }
        .admin-notes-content {
            color: #475569;
            line-height: 1.6;
        }
    </style>
</head>
<body>
    <div class="license-container">
        <div class="header">
            <h1>الرخصة الإلكترونية</h1>
            <p>الرخصة الرسمية المعتمدة من الوزارة</p>
        </div>

        <div class="section">
            <div class="section-title">معلومات شخصية</div>
            <div class="info-row">
                <span class="label">الاسم الكامل:</span>
                <span class="value">{{ $demande->prenom }} {{ $demande->nom }}</span>
            </div>
            <div class="info-row">
                <span class="label">رقم البطاقة الوطنية:</span>
                <span class="value">{{ $demande->cin }}</span>
            </div>
        </div>

        <div class="section">
            <div class="section-title">معلومات المركبة</div>
            <div class="info-row">
                <span class="label">نوع المركبة:</span>
                <span class="value">{{ $demande->type_vehicule }}</span>
            </div>
            <div class="info-row">
                <span class="label">رقم التسجيل:</span>
                <span class="value">{{ $demande->numero_immatriculation }}</span>
            </div>
        </div>

        <div class="section">
            <div class="section-title">معلومات المسار</div>
            <div class="info-row">
                <span class="label">نقطة الانطلاق:</span>
                <span class="value">{{ $demande->point_depart }}</span>
            </div>
            <div class="info-row">
                <span class="label">نقطة الوصول:</span>
                <span class="value">{{ $demande->point_arrivee }}</span>
            </div>
        </div>

        <div class="section">
            <div class="section-title">معلومات الصلاحية</div>
            <div class="info-row">
                <span class="label">تاريخ الإصدار:</span>
                <span class="value">{{ $demande->updated_at->format('Y-m-d') }}</span>
            </div>
            <div class="info-row">
                <span class="label">تاريخ الانتهاء:</span>
                <span class="value">{{ $demande->updated_at->addYear()->format('Y-m-d') }}</span>
            </div>
        </div>

        <div class="admin-notes">
            <div class="admin-notes-title">ملاحظات الإدارة</div>
            <div class="admin-notes-content">
                <p>1. يجب الالتزام بجميع القوانين واللوائح المتعلقة بالنقل.</p>
                <p>2. يجب الحفاظ على جميع المستندات المطلوبة في المركبة.</p>
                <p>3. يجب إبلاغ الإدارة عن أي تغييرات في معلومات المركبة أو المسار.</p>
                <p>4. يجب تجديد الرخصة قبل انتهاء صلاحيتها بثلاثين يوماً على الأقل.</p>
                <p>5. يجب الالتزام بمواعيد العمل المحددة في الطلب.</p>
            </div>
        </div>

        <div class="verification">
            <p>للتحقق من صحة الرخصة، قم بزيارة:</p>
            <p style="font-family: monospace; margin: 1rem 0;">{{ route('license.verify', $demande->id) }}</p>
        </div>

        <div class="footer">
            <p>هذه الرخصة صالحة حتى {{ $demande->updated_at->addYear()->format('Y-m-d') }}</p>
        </div>
    </div>
</body>
</html> 