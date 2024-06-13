<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TP LARAVEL</title>
</head>
<body>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:700,600" rel="stylesheet" type="text/css" />

    <style>
        body {
            font-family: "Open Sans", sans-serif;
    
            margin: 0 auto 0 auto;
            width: 100%;
            text-align: center;
            margin: 20px 0px 20px 0px;
        }
    
        p {
            font-size: 12px;
            text-decoration: none;
            color: #ffffff;
        }
    
        h1 {
            font-size: 1.5em;
            color: #525252;
        }
    
        .box {
            background: white;
            width: 340px;
            border-radius: 6px;
            margin: 0 auto 0 auto;
            padding: 0px 0px 70px 0px;
            box-shadow: rgba(0, 0, 0, 0.05) 0px 6px 24px 0px, rgba(0, 0, 0, 0.08) 0px 0px 0px 1px;
            position: absolute;
            top: 50%;
            left: 50%;
    
            transform: translate(-50%, -50%);
        }
    
        .email {
            background: #ecf0f1;
            border: #ccc 1px solid;
            border-bottom: #ccc 2px solid;
            padding: 8px;
            width: 250px;
            color: #aaaaaa;
            margin-top: 10px;
            font-size: 1em;
            border-radius: 4px;
        }
    
        .password {
            border-radius: 4px;
            background: #ecf0f1;
            border: #ccc 1px solid;
            padding: 8px;
            width: 250px;
            font-size: 1em;
        }
    
        .btn-container {
            padding: 1rem;
        }
    
        button {
            background: #2ecc71;
            width: 125px;
            padding-top: 5px;
            padding-bottom: 5px;
            color: white;
            border-radius: 4px;
            border: #27ae60 1px solid;
            font-weight: 800;
            font-size: 0.8em;
        }
    
        .btn:hover {
            background: #2cc06b;
        }
    
        #btn2 {
            float: left;
            background: #3498db;
            width: 125px;
            padding-top: 5px;
            padding-bottom: 5px;
            color: white;
            border-radius: 4px;
            border: #2980b9 1px solid;
    
            margin-top: 20px;
            margin-bottom: 20px;
            margin-left: 10px;
            font-weight: 800;
            font-size: 0.8em;
        }
    
        #btn2:hover {
            background: #3594d2;
        }
    </style>
    
    <form method="post" action="">
    
        @csrf
        @method('POST')
    
        <div class="box">
            <h1>Dashboard</h1>
    
            <input type="email" name="email" class="email" />
    
            <input type="password" name="password" class="email" />
    
            <div class="btn-container">
                <button type="submit"> Login</button>
            </div>
    
            <!-- End Btn -->
            <!-- End Btn2 -->
        </div>
        <!-- End Box -->
    </form>
    

</body>
</html>