<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Exam Practice</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEJxvYcRqrDmtVlhGkwbxwbnyf8LrgkqmnVqq0fDxIHm+lIWVVnYs5p19Zhyf" crossorigin="anonymous">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Arial', sans-serif;
        }
        .welcome-card {
            border-radius: 8px;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
            background-color: white;
            padding: 30px;
            text-align: center;
            max-width: 400px;
            margin: auto;
        }
        h1 {
            font-size: 2.5rem;
            margin-bottom: 20px;
        }
        .btn-primary {
            padding: 10px 20px;
            font-size: 1.1rem;
        }
    </style>
</head>
<body>
    <div class="container mt-6">
        <div class="welcome-card">
            <h1>Welcome to Laravel Exam Practice</h1>
            <p class="mb-4">This application allows you to Modify student records. Click the button below to add a new student.</p>

            <a class="btn btn-primary" href="{{ route('student.create') }}">
                CREATE STUDENT RECORD
            </a>
          
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pzjw8f+ua7Kw1TIq0Y6ldQ9S/ykn//Ih1tjWV/Yr5ji06g/b6hEqC1Hql2r/PzG8" crossorigin="anonymous"></script>
</body>
</html>
