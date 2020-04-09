<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Electricity Bill Calculator</title>
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="form-wrapper">
       <form id="form-calc" method="post">
        <h4>Electricity Bill Calculator</h4>
            <div class="text-info mb-4 mt-3">
                <h5>Question</h5>
            You are required to print electricity bill for the no of unit. Units must be given as an input by the user, it will print the electricity bill using: i. For first 50 units, it will charge Rs 9 per unit ii. For next 50 units, it will charge Rs 12 and iii. Above it, it will charge Rs 15.
            </div>
            <div class="form-group">
                <input type="number" name="unit" required class="form-control">
            </div>
            <div class="form-group">
                <button class="btn btn-danger">Calculate</button>
            </div>
            <div class="form-group">
                <div id="result"></div>
            </div>
            <div class="text-center">
                Name :Abhishek singh
                <br/>
                REG: 11602854<br>

            </div>
       </form>
    </div>
   
</body>
<script
  src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="app.js"></script>
</html>