@extends('layouts.app')

@section('content')
<style>
    body {
        background-color: #f8f9fa;
    }
    .welcome-section {
        margin-top: 80px;
        background-color: white;
        border-radius: 20px;
        box-shadow: 0 0 15px rgba(0,0,0,0.1);
        padding: 40px 30px;
    }
    .welcome-section h1 {
        font-weight: bold;
        color: #007bff;
    }
    .welcome-section p {
        font-size: 1.2rem;
        color: #333;
    }
    .btn-start {
        background-color: #007bff;
        border-color: #007bff;
        font-size: 1.1rem;
        padding: 10px 30px;
        border-radius: 10px;
    }
    .btn-start:hover {
        background-color: #0056b3;
        border-color: #004085;
    }
</style>

<div class="container">
    <div class="welcome-section text-center">
        <img src="/images/logo.png" alt="شعار جماعة الرباط" class="mb-4" style="height: 100px;">
        <h1 class="mb-4">👋 مرحباً بكم في منصة طلبات الرخص</h1>
        <p class="mb-5">🔶 هذه الخدمة الرقمية مخصصة لطلبات رخص السير الخاصة بالشاحنات داخل مدينة الرباط. يرجى الضغط على الزر أدناه لبدء الطلب.</p>
        <a href="/demande" class="btn btn-primary btn-start">
            📝 ابدأ طلبك الآن
        </a>
    </div>
</div>
@endsection