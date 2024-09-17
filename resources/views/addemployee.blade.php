<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        input{
            margin: 4px 4px 4px 4px;
        }
        form{
            padding-top:20px;
            padding-bottom:20px;
            background-color: rgb(226, 226, 226);
            justify-content: center;
        }
    </style>
</head>
<body>
    <x-nav-layout>
        <form action="" method="POST" style="display: grid">
            @csrf
            <h3>اضف عامل</h3>
            <input type="text" name="name" placeholder="اسم العامل">
            <select name="gender" class="selectionBox">
                <option> ذكر
                </option>
                <option> انثى
                </option>
            </select>
            <input type="number" name="salary" placeholder="الراتب">
            <input type="text" name="dept" placeholder="القسم">
            <input type="text" name="job_title" placeholder="المسمى الوظيفي">
            <input type="submit" value="اضف عامل">
        </form>
    </x-nav-layout>    
</body>
</html>

