<!DOCTYPE html>
<!-- Coding By CodingNepal - youtube.com/codingnepal -->
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>Currency  </title>
    <link rel="stylesheet" href="Currency.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- FontAweome CDN Link for Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
</head>
<body>
<div class="wrapper">
    <header>Currency Converter</header>
    <form action="#">
        <div class="amount">
            <p>Enter Amount</p>
            <input type="text" value="1">
        </div>
        <div class="drop-list">
            <div class="from">
                <p>From</p>
                <div class="select-box">
                    <img src="https://flagcdn.com/48x36/us.png" alt="flag">
                    <select> <!-- Options tag are inserted from JavaScript -->

                    </select>
                </div>
            </div>
            <div class="icon"><i class="fas fa-exchange-alt"></i></div>
            <div class="to">
                <p>To</p>
                <div class="select-box">
                    <img src="https://flagcdn.com/48x36/il.png" alt="flag">
                    <select> <!-- Options tag are inserted from JavaScript --> </select>
                </div>
            </div>
        </div>
        <div class="exchange-rate">Getting exchange rate...</div>
        <button>Get Exchange Rate</button>
        <a href="para.php" <button class="s">back</button></a>
    </form>
</div>
<script src="curr_list.js"></script>
<script src="currency.js"></script>
</body>
</html>