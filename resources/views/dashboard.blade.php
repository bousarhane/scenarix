<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>لوحة التحكم — Scenarix</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #f4f5f7;
            color: #1f2937;
        }

        header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 18px 32px;
            background: #111827;
            color: white;
        }

        header h1 {
            margin: 0;
            font-size: 22px;
        }

        .user-area {
            display: flex;
            align-items: center;
            gap: 16px;
        }

        .logout-button {
            padding: 9px 16px;
            border: 0;
            border-radius: 6px;
            background: #dc2626;
            color: white;
            cursor: pointer;
        }

        main {
            max-width: 1200px;
            margin: 40px auto;
            padding: 0 24px;
        }

        .welcome {
            margin-bottom: 28px;
        }

        .welcome h2 {
            margin-bottom: 8px;
        }

        .cards {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(230px, 1fr));
            gap: 20px;
        }

        .card {
            padding: 24px;
            border-radius: 12px;
            background: white;
            box-shadow: 0 4px 14px rgba(0, 0, 0, 0.06);
        }

        .card h3 {
            margin-top: 0;
        }

        .card p {
            color: #6b7280;
            line-height: 1.7;
        }

        .primary-button {
            display: inline-block;
            margin-top: 10px;
            padding: 10px 18px;
            border-radius: 7px;
            background: #2563eb;
            color: white;
            text-decoration: none;
        }
    </style>
</head>

<body>

<header>
    <h1>Scenarix</h1>

    <div class="user-area">
        <span>{{ auth()->user()->name }}</span>

        <form method="POST" action="{{ route('logout') }}">
            @csrf

            <button class="logout-button" type="submit">
                تسجيل الخروج
            </button>
        </form>
    </div>
</header>

<main>
    <section class="welcome">
        <h2>مرحبًا، {{ auth()->user()->name }}</h2>

        <p>
            هذه لوحة التحكم الرئيسية لإدارة مشاريعك الدرامية والسينمائية والمسرحية.
        </p>
    </section>

    <section class="cards">
        <article class="card">
            <h3>المشاريع</h3>

            <p>
                إنشاء المشاريع وإدارة بياناتها ومراحل تطويرها.
            </p>

            <a href="#" class="primary-button">
                عرض المشاريع
            </a>
        </article>

        <article class="card">
            <h3>مشروع جديد</h3>

            <p>
                ابدأ مشروعًا مسرحيًا أو سينمائيًا أو دراميًا جديدًا.
            </p>

            <a href="#" class="primary-button">
                إنشاء مشروع
            </a>
        </article>

        <article class="card">
            <h3>دفتر العمل</h3>

            <p>
                الوصول إلى الملاحظات والتصورات والوثائق المرتبطة بالمشاريع.
            </p>

            <a href="#" class="primary-button">
                فتح الدفتر
            </a>
        </article>
    </section>
</main>

</body>
</html>