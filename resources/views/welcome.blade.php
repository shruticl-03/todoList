<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Todo List</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

    <!-- Styles -->
    <style>
        body {
            font-family: 'Nunito', sans-serif;
            background-color: #f7fafc;
            color: #333;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: flex-start;
            min-height: 100vh;
        }

        .container {
            width: 90%;
            max-width: 600px;
            background-color: #fff;
            border-radius: 10px;
            padding: 25px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            text-align: center;
            margin-top: 30px;
        }

        /* Restored Heading Design */
        h1 {
            font-size: 2.5rem;
            color: transparent;
            background: linear-gradient(45deg, #6a11cb, #2575fc);
            -webkit-background-clip: text;
            font-weight: 700;
            margin-bottom: 20px;
            transition: all 0.3s ease;
        }

        h1:hover {
            background: linear-gradient(45deg, #2575fc, #6a11cb);
            -webkit-background-clip: text;
            text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.3);
            transform: scale(1.05);
        }

        .add-todo-form {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }

        .add-todo-form input[type="text"] {
            width: 100%;
            padding: 12px;
            font-size: 1rem;
            border: 1px solid #ddd;
            border-radius: 5px;
            margin-bottom: 15px;
        }

        .add-todo-form button {
            background: linear-gradient(135deg, #6a11cb, #2575fc);
            color: white;
            border: none;
            padding: 12px 20px;
            font-size: 1rem;
            border-radius: 5px;
            cursor: pointer;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            gap: 8px;
            width: 100%;
        }

        .add-todo-form button:hover {
            background: linear-gradient(135deg, #2575fc, #6a11cb);
        }

        .todo-list {
            text-align: left;
        }

        .todo-item {
            background-color: #fff;
            padding: 15px;
            margin-bottom: 15px;
            border-radius: 8px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .todo-item button {
            background: linear-gradient(135deg, #6a11cb, #2575fc);
            color: white;
            border: none;
            padding: 10px;
            font-size: 1rem;
            border-radius: 5px;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .todo-item button:hover {
            background: linear-gradient(135deg, #2575fc, #6a11cb);
        }
    </style>
</head>

<body>

    <div class="container">
        <h1>Todo List</h1>

        <!-- Add New Todo Form (At the Top) -->
        <div class="add-todo-form">
            <form method="post" action="{{route('saveItem')}}">
                @csrf
                <input type="text" name="listItem" placeholder="Enter a new task..." required>
                <button type="submit"><i class="fas fa-plus"></i> Add Todo List</button>
            </form>
        </div>

        <!-- Todo List -->
        <div class="todo-list">
            @foreach($listItems as $listItem)
            <div class="todo-item">
                <span class="todo-text">Item: {{$listItem->name}}</span>
                <form method="post" action="{{route('markComplete', $listItem->id)}}">
                    @csrf
                    <button type="submit"><i class="fas fa-check"></i> Mark Complete</button>
                </form>
            </div>
            @endforeach
        </div>

    </div>

</body>

</html>
