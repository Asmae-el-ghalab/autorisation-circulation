<x-app-layout>
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
        <link href="https://fonts.bunny.net/css?family=inter:400,500,600" rel="stylesheet" />

        <!-- Styles / Scripts -->
        
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
    <body class="dark:bg-[#0f172a]">
        
        <main class="main-content">
            <div class="hero">
                <h1>Welcome to Your Application</h1>
                <p>A modern, clean and responsive starter template for your Laravel project with dark mode support.</p>
            </div>
        </main>
    </body>
</html>
</x-app-layout>