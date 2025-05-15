
<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>تقديم طلب الرخصة</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    
    <style>
        :root {
            --primary-blue: #1a73e8;
            --secondary-blue: #4285f4;
            --light-blue: #e8f0fe;
            --dark-blue: #0d47a1;
        }
        
        body {
            background-color: #f8f9fa;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        .card {
            border-radius: 12px;
            border: none;
            overflow: hidden;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        
        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }
        
        .card-header {
            background: linear-gradient(135deg, var(--primary-blue), var(--secondary-blue));
            color: white;
            padding: 1.5rem;
            border-bottom: none;
        }
        
        .form-control, .form-select {
            border-radius: 8px;
            padding: 12px 15px;
            border: 1px solid #dfe1e5;
            transition: border-color 0.3s ease, box-shadow 0.3s ease;
        }
        
        .form-control:focus, .form-select:focus {
            border-color: var(--primary-blue);
            box-shadow: 0 0 0 2px rgba(26, 115, 232, 0.2);
        }
        
        .btn-primary {
            background-color: var(--primary-blue);
            border: none;
            border-radius: 8px;
            padding: 12px 24px;
            font-weight: 500;
            transition: background-color 0.3s ease;
        }
        
        .btn-primary:hover {
            background-color: var(--dark-blue);
        }
        
        .btn-submit {
            background: linear-gradient(135deg, var(--primary-blue), var(--secondary-blue));
            letter-spacing: 0.5px;
            font-weight: 600;
            margin-top: 20px;
        }
        
        .camera-container {
            background-color: #f1f3f4;
            border-radius: 8px;
            padding: 15px;
            margin-bottom: 15px;
        }
        
        .camera {
            width: 100%;
            height: 240px;
            background-color: #e8eaed;
            border-radius: 8px;
            margin-bottom: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #5f6368;
            position: relative;
            overflow: hidden;
        }
        
        .camera-preview {
            max-width: 100%;
            max-height: 100%;
            border-radius: 6px;
        }
        
        .section-title {
            color: var(--primary-blue);
            font-weight: 600;
            margin: 20px 0 15px;
            padding-bottom: 8px;
            border-bottom: 2px solid var(--light-blue);
        }
        
        .form-label {
            font-weight: 500;
            color: #3c4043;
            margin-bottom: 8px;
        }
        
        .required-field::after {
            content: " *";
            color: #d93025;
        }
        
        .icon-input {
            position: relative;
        }
        
        .icon-input i {
            position: absolute;
            left: 15px;
            top: 50%;
            transform: translateY(-50%);
            color: var(--primary-blue);
        }
        
        .icon-input input, .icon-input select {
            padding-right: 15px;
            padding-left: 40px;
        }
        .navbar {
    border-radius: 10px;
    padding: 15px;
}

    </style>
    
            <style>
                :root {
                    --primary: #6366f1;
                    --primary-dark: #4f46e5;
                    --text: #1e293b;
                    --text-light: #64748b;
                    --bg: #f8fafc;
                    --bg-dark: #0f172a;
                    --border: #e2e8f0;
                    --border-dark: #334155;
                    --error: #ef4444;
                    --success: #10b981;
                    --radius: 0.5rem;
                    --shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -2px rgba(0, 0, 0, 0.1);
                    --transition: all 0.2s ease-in-out;
                }

                * {
                    box-sizing: border-box;
                    margin: 0;
                    padding: 0;
                }

                body {
                    font-family: 'Inter', system-ui, -apple-system, sans-serif;
                    background-color: var(--bg);
                    color: var(--text);
                    line-height: 1.5;
                    min-height: 100vh;
                    display: flex;
                    flex-direction: column;
                    transition: background-color 0.3s ease;
                }

                .dark body {
                    background-color: var(--bg-dark);
                    color: #e2e8f0;
                }

                .container {
                    width: 100%;
                    max-width: 1200px;
                    margin: 0 auto;
                    padding: 2rem;
                }

                /* Header */
                header {
                    width: 100%;
                    padding: 1rem 2rem;
                    display: flex;
                    justify-content: flex-end;
                }

                nav {
                    display: flex;
                    gap: 1rem;
                }

                .btn {
                    display: inline-flex;
                    align-items: center;
                    justify-content: center;
                    padding: 0.5rem 1.25rem;
                    border-radius: var(--radius);
                    font-weight: 500;
                    text-decoration: none;
                    transition: var(--transition);
                    font-size: 0.875rem;
                }

                .btn-outline {
                    border: 1px solid var(--border);
                    color: var(--text);
                    background: transparent;
                }

                .btn-outline:hover {
                    border-color: var(--primary);
                    color: var(--primary);
                }

                .dark .btn-outline {
                    border-color: var(--border-dark);
                    color: #e2e8f0;
                }

                .dark .btn-outline:hover {
                    border-color: var(--primary);
                    color: var(--primary);
                }

                .btn-primary {
                    background-color: var(--primary);
                    color: white;
                    border: 1px solid var(--primary);
                }

                .btn-primary:hover {
                    background-color: var(--primary-dark);
                    border-color: var(--primary-dark);
                }

                /* Main content */
                .main-content {
                    flex: 1;
                    display: flex;
                    flex-direction: column;
                    align-items: center;
                    justify-content: center;
                    text-align: center;
                    padding: 2rem;
                }

                .hero {
                    max-width: 800px;
                    margin: 0 auto;
                }

                .hero h1 {
                    font-size: 3rem;
                    font-weight: 700;
                    margin-bottom: 1.5rem;
                    line-height: 1.2;
                }

                .hero p {
                    font-size: 1.25rem;
                    color: var(--text-light);
                    margin-bottom: 2.5rem;
                    max-width: 600px;
                    margin-left: auto;
                    margin-right: auto;
                }

                .dark .hero p {
                    color: #94a3b8;
                }

                /* Responsive */
                @media (max-width: 768px) {
                    .hero h1 {
                        font-size: 2rem;
                    }
                    
                    .hero p {
                        font-size: 1rem;
                    }
                    
                    nav {
                        flex-direction: column;
                        width: 100%;
                        gap: 0.5rem;
                    }
                    
                    .btn {
                        width: 100%;
                    }
                }
            </style>
</head>
<body>
     @include('layouts.navigation')
    <div class="container py-5" dir="rtl">
         
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card shadow-lg">
                    <div class="card-header text-center">
                        <h1 class="h3 mb-0"><i class="fas fa-file-alt me-2"></i>تقديم طلب الرخصة </h1>
                    </div>
                    <div class="card-body p-4">
                        <form method="POST" action="#" enctype="multipart/form-data" id="demandeForm" onsubmit="return validateForm()">
                            @csrf
                            
                            <h3 class="section-title"><i class="fas fa-user-circle me-2"></i>المعلومات الشخصية</h3>
                            
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label class="form-label required-field">الاسم الشخصي</label>
                                    <div class="icon-input">
                                        <i class="fas fa-user"></i>
                                        <input type="text" class="form-control" name="prenom" required placeholder="أدخل الاسم الشخصي">
                                    </div>
                                </div>
                                
                                <div class="col-md-6 mb-3">
                                    <label class="form-label required-field">الاسم العائلي</label>
                                    <div class="icon-input">
                                        <i class="fas fa-user"></i>
                                        <input type="text" class="form-control" name="nom" required placeholder="أدخل الاسم العائلي">
                                    </div>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label class="form-label required-field">رقم البطاقة الوطنية (CIN)</label>
                                    <div class="icon-input">
                                        <i class="fas fa-id-card"></i>
                                        <input type="text" class="form-control" name="cin" required placeholder="أدخل رقم البطاقة">
                                    </div>
                                </div>
                                
                                <div class="col-md-6 mb-3">
                                    <label class="form-label required-field">رقم السيارة (Matricule)</label>
                                    <div class="icon-input">
                                        <i class="fas fa-car"></i>
                                        <input type="text" class="form-control" name="matricule" required placeholder="أدخل رقم السيارة">
                                    </div>
                                </div>
                            </div>
                            
                            <h3 class="section-title"><i class="fas fa-id-badge me-2"></i>معلومات الرخصة</h3>
                            
                            <div class="mb-4">
                                <label class="form-label required-field">نوع الرخصة</label>
                                <div class="icon-input">
                                    <i class="fas fa-tag"></i>
                                    <select class="form-select" name="type_licence" id="licenceType" onchange="toggleExtraFields()" required>
                                        <option value="">-- اختر نوع الرخصة --</option>
                                        <option value="فردية">فردية</option>
                                        <option value="معنوية">معنوية</option>
                                    </select>
                                </div>
                            </div>
            
                            <div id="moraleFields" class="d-none">
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">📄 السجل التجاري</label>
                                        <div class="icon-input">
                                            <i class="fas fa-file-contract"></i>
                                            <input type="text" class="form-control" name="registre_commerce" placeholder="أدخل رقم السجل التجاري">
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">📄 التعريف الضريبي</label>
                                        <div class="icon-input">
                                            <i class="fas fa-file-invoice-dollar"></i>
                                            <input type="text" class="form-control" name="identifiant_fiscal" placeholder="أدخل التعريف الضريبي">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <h3 class="section-title"><i class="fas fa-camera me-2"></i>المستندات المطلوبة</h3>
                            
                            <div class="camera-container mb-4">
                                <div class="text-center mb-3">
                                    <h5 class="fw-bold text-primary"><i class="fas fa-id-card me-2"></i>البطاقة الرمادية</h5>
                                </div>
                                <div id="camera_1" class="camera">
                                    <i class="fas fa-camera fa-3x"></i>
                                </div>
                                <div class="d-flex justify-content-center mt-3">
                                    <button type="button" class="btn btn-primary me-2" onclick="initializeCamera(1)">
                                        <i class="fas fa-camera me-2"></i>أخذ صورة
                                    </button>
                                    <button type="button" class="btn btn-outline-secondary" onclick="clearCamera(1)">
                                        <i class="fas fa-trash-alt me-2"></i>مسح
                                    </button>
                                </div>
                                <div id="results_1" class="text-center mt-3"></div>
                                <input type="hidden" name="scanned_image_1" id="scanned_image_1">
                            </div>
                            
                            <div class="camera-container">
                                <div class="text-center mb-3">
                                    <h5 class="fw-bold text-primary"><i class="fas fa-file-signature me-2"></i>شهادة التأمين</h5>
                                </div>
                                <div id="camera_2" class="camera">
                                    <i class="fas fa-camera fa-3x"></i>
                                </div>
                                <div class="d-flex justify-content-center mt-3">
                                    <button type="button" class="btn btn-primary me-2" onclick="initializeCamera(2)">
                                        <i class="fas fa-camera me-2"></i>أخذ صورة
                                    </button>
                                    <button type="button" class="btn btn-outline-secondary" onclick="clearCamera(2)">
                                        <i class="fas fa-trash-alt me-2"></i>مسح
                                    </button>
                                </div>
                                <div id="results_2" class="text-center mt-3"></div>
                                <input type="hidden" name="scanned_image_2" id="scanned_image_2">
                            </div>
                            
                            <div class="d-grid mt-4">
                                <button type="submit" class="btn btn-submit btn-lg">
                                    <i class="fas fa-paper-plane me-2"></i>إرسال الطلب
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/webcamjs/1.0.26/webcam.min.js"></script>
    <script>
        function initializeCamera(cameraId) {
            clearCameras();

            Webcam.set({
                width: 320,
                height: 240,
                image_format: 'jpeg',
                jpeg_quality: 90,
                flip_horiz: true
            });

            Webcam.attach('#camera_' + cameraId);

            // Change button to snapshot button
            const buttons = document.querySelectorAll(`#camera_${cameraId} ~ .d-flex .btn-primary`);
            buttons[0].innerHTML = '<i class="fas fa-camera me-2"></i>التقاط الصورة';
            buttons[0].onclick = function() {
                take_snapshot(cameraId);
            };
        }

        function take_snapshot(cameraId) {
            Webcam.snap(function(data_uri) {
                const resultsDiv = document.getElementById('results_' + cameraId);
                resultsDiv.innerHTML = `
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <i class="fas fa-check-circle me-2"></i>تم التقاط الصورة بنجاح
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    <img src="${data_uri}" class="camera-preview mt-2 border p-2 rounded"/>
                `;
                document.getElementById('scanned_image_' + cameraId).value = data_uri;
                
                // Reset button to initialize camera again
                const buttons = document.querySelectorAll(`#camera_${cameraId} ~ .d-flex .btn-primary`);
                buttons[0].innerHTML = '<i class="fas fa-camera me-2"></i>إعادة المحاولة';
                buttons[0].onclick = function() {
                    initializeCamera(cameraId);
                };
                
                Webcam.reset('#camera_' + cameraId);
            });
        }

        function clearCamera(cameraId) {
            Webcam.reset('#camera_' + cameraId);
            document.getElementById('results_' + cameraId).innerHTML = '';
            document.getElementById('scanned_image_' + cameraId).value = '';
            
            // Reset button to initialize camera
            const buttons = document.querySelectorAll(`#camera_${cameraId} ~ .d-flex .btn-primary`);
            buttons[0].innerHTML = '<i class="fas fa-camera me-2"></i>أخذ صورة';
            buttons[0].onclick = function() {
                initializeCamera(cameraId);
            };
        }

        function clearCameras() {
            Webcam.reset('#camera_1');
            Webcam.reset('#camera_2');
        }

        function toggleExtraFields() {
            const type = document.getElementById('licenceType').value;
            const moraleFields = document.getElementById('moraleFields');
            moraleFields.classList.toggle('d-none', type !== 'معنوية');
        }

        function validateForm() {
            // Add your validation logic here
            return true;
        }
    </script>
</body>
</html>