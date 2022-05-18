<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GENERAL QUIZ PAGE</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@600&family=Righteous&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Satisfy&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Archivo+Narrow:ital@1&family=Satisfy&display=swap" rel="stylesheet">
    <style>
        *{
            margin: 0px;
            padding: 0px;
        }
        body{
            background-image: url("https://lionquotes.net/wp-content/uploads/2021/07/Hanuman-images-Photos-Wallpaper-Lord-Hanuman-Ji-HD-1000x600.png");
            background-attachment: fixed;
            background-repeat: no-repeat;
            background-size: 150% 150%;
            backgroud-color: orange;
        }
        .container{
            background-color: #b060319e;
            width: auto;
            height: 970px;
        }
        header {
            margin: auto;
            background-color: rgb(28 22 32 / 85%);
            padding: 20px 20px;
            color: white;
        }
        .welcome{
            width: fit-content;
            font-size: 32px;
            padding: 0px 37%;
            color: #f5d8a8;
            text-shadow: 2px 2px 5px orange;
            font-family: 'Dancing Script', cursive;
        }

        .form-area{
            width: 100%;
            height: 600px;  
            color: white;
        }
        .form-quiz{
            width: 40%;
            height: 130%;
            margin: 40px auto;
            background-color: #351212ad;
            border-radius: 10px;
            font-family: 'Archivo Narrow', sans-serif;
            font-size: 20px;
        } 
        .fields input,select {
            width: 315px;
            height: 30px;
            margin: 10px 29%;
            border-radius: 5px;
            border-color: snow;
        }
        .fields p,checkbox p{
            margin: 1px 29%;
        }

        #radio

        .btn button {
            width: 320px;
            height: 35px;
            margin: 10px 10%;
            padding: 2px 10px;
            font-size: 20px;
            font-weight: bolder;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            background-color: #1e1a21c7;
            color: beige;
            border-radius: 10px;
            border-color: rgb(159 159 189);
            cursor: pointer;
        }
        .pagename{
            background-color: #0c0cd34a;
            width: auto;
            height: 60px;
            font-family: 'Lobster', cursive;
            font-size: 50px;
            text-align: center;
            border-radius: 10px 10px 0px 0px;
            color: aliceblue;
            text-shadow: 2px 2px 5px orange;
        }

    </style>
</head>
<body>
    <div class="container">
        <header>
        <div class="welcome" width="50">ABHIJEET WELCOMES YOU</div>
        </header>
        <div class="form-area">
            <div class="form-quiz">
                <form action="" method="POST">
                    <div class="pagename">
                        GENERAL QUIZ
                    </div>
                    <div class="fields ">
                        <p>What is Your Name?</p>
                        <input type="text" size="25" name="name" placeholder="Your Name" required>
                    </div>
                    <div class="fields">
                        <p>How many siblings you have?</p>
                        <input type="number" size="2" name="siblings" placeholder="Siblings" required>
                    </div>
                    <div class="fields">
                        <p>Write your Email Address</p>
                        <input type="email" size="25" name="email" placeholder="Your Email" required>
                    </div>
                    <div class= "fields">
                        <p>Enter your State</p>
                        <select name="MyState" id="state">
                        <option value="0">Choose your state</option>    
                        <option value="1">Assam </option>
                        <option value="2">Bihar</option>
                        <option value="3">Madhya Pradesh</option>
                        <option value="4">Jharkhand</option>
                        <option value="5">Uttar Pradesh</option>
                        <option value="6">Uttrakhand</option>
                        <option value="7">West Bengal</option>
                        <option value="8">Punjab</option>
                        <option value="9">Maharashtra</option>
                        </select>
                    </div>
                    <div class="gender">
                        Gender :  Male<input type="radio" name="mygender"> Female<input type="radio" name="mygender"> Other<input type="radio" name="mygender">
                    </div>
                    <div class="fields">
                        <p>How old are You?</p>
                        <input type"number" size="2" name="address" placeholder="Enter your Age" required>
                    </div>
                    <div class="checkbox">
                        <p>Choose Your Favourite Colors </p>
                        <input type="checkbox" name="color1">  Blue   
                        <input type="checkbox" name="color2">  Black   
                        <input type="checkbox" name="color3">  Yellow   
                        <input type="checkbox" name="color4">  White   
                        <input type="checkbox" name="color5">  Pink   
                        <input type="checkbox" name="color6">  Red   
                        <input type="checkbox" name="color7">  Grey   
                    </div>
                    <div class="checkbox">
                        <p>Tell Us Your Area of interest.</p>
                        <input type="checkbox" name="intrest2">&nbsp;Cinema &nbsp;&nbsp;
                        <input type="checkbox" name="intrest3">&nbsp;Music &nbsp;&nbsp;
                        <input type="checkbox" name="intrest1">&nbsp;Cricket &nbsp;&nbsp;
                        <input type="checkbox" name="intrest4">&nbsp;Business &nbsp;&nbsp;
                    </div>
                    <div class="checkbox">
                        <input type="checkbox" name="declaration" id="declaration">:I WILL BE RESPONSIBLE FOR ANY WRONG
                        INFORMATION.
                    </div>
                    <div class="btn" id="contactbutton">
                        <button type="submit" name="submit">Submit Response</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>