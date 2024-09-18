<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>نموذج الإدخال المحسن</title>
    <style>
        /* إعدادات عامة */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Arial', sans-serif;
        }

        body {
            direction: rtl; /* لضبط اتجاه النص إلى اليمين */
            background-color: #f4f4f4;
            display: flex;
            justify-content: center; /* لتوسيط النموذج أفقياً */
            align-items: center; /* لتوسيط النموذج عمودياً */
            height: 100vh;
            padding: 20px;
        }

        /* صندوق النموذج */
        .form-container {
            background-color: #fff;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
            max-width: 800px;
            width: 100%;
        }

        /* عنوان النموذج */
        .form-container h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #333;
            font-size: 24px;
        }

        /* تصميم الشبكة */
        .form-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
        }

        /* تصميم الحقول */
        .form-group {
            display: flex;
            flex-direction: column;
        }

        .form-group label {
            margin-bottom: 8px;
            font-weight: bold;
            color: #555;
        }

        .form-group input,
        .form-group textarea {
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 6px;
            font-size: 16px;
            transition: border-color 0.3s ease;
            outline: none;
        }

        .form-group input:focus,
        .form-group textarea:focus {
            border-color: #3498db; /* لون إطار الحقل عند التحديد */
        }

        .form-group textarea {
            resize: vertical;
            height: 120px;
        }

        /* زر الإرسال */
        .submit-btn {
            width: 100%;
            padding: 12px;
            background-color: #3498db;
            border: none;
            border-radius: 6px;
            color: white;
            font-size: 18px;
            cursor: pointer;
            transition: background-color 0.3s;
            text-align: center;
            margin-top: 20px;
        }

        .submit-btn:hover {
            background-color: #2980b9;
        }

        /* تصميم استجابة */
        @media (max-width: 768px) {
            .form-grid {
                grid-template-columns: 1fr;
            }
        }

    </style>
</head>
<body>
<div class="form-container">
    @csrf
    <h2>نموذج الإدخال</h2>
    <form action="/Design/create" method="POST">
        <div class="form-grid">
            <!-- Left Side Inputs -->
            <div class="form-group">
                <label for="model-number">رقم الموديل:</label>
                <input type="text" id="model-number" name="model-number" placeholder="أدخل رقم الموديل">
            </div>

            <div class="form-group">
                <label for="year">العام:</label>
                <input type="text" id="year" name="year" placeholder="أدخل العام">
            </div>

            <div class="form-group">
                <label for="details">التفاصيل:</label>
                <textarea id="details" name="details" placeholder="أدخل التفاصيل هنا"></textarea>
            </div>

            <div class="form-group">
                <label for="department">القسم:</label>
                <input type="text" id="department" name="department" placeholder="أدخل القسم">
            </div>

            <!-- Right Side Inputs -->
            <div class="form-group">
                <label for="start-date">تاريخ البدء:</label>
                <input type="date" id="start-date" name="start-date">
            </div>

            <div class="form-group">
                <label for="manager">الريس:</label>
                <input type="text" id="manager" name="manager" placeholder="أدخل اسم الريس">
            </div>
        </div>
        <button type="submit" class="submit-btn">إرسال</button>
    </form>
</div>
</body>
</html>
