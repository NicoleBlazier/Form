<!DOCTYPE html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>

    <form action="display.php" method="post" enctype="multipart/form-data">
    <div class="input">
    <label>User ID:</label>
    <div class="align">
    <input type="text" name="userid"> 
    </div>
    </div>
    
    <div class="input">
    <label>Password:</label>
    <div class="align">
    <input type="password" name="password">
    </div>
    </div>
    
    <div class="input">
    <label>Name:</label>
    <div class="align">
    <input type="text" name="name">
    </div>
    </div>
    
    <div class="input">
    <label>Address:</label>
    <div class="align">
    <input type="text" name="address">
    </div>
    </div>

    <div class="input">
    <label>Country:</label>
    <div class="align">
    <select name="country">
        <option value="USA">USA</option>
        <option value="Australia">Australia</option>
        <option value="New Zealand">New Zealand</option>
        <option value="South Korea">South Korea</option>
        <option value="Czech Republic">Czech Republic</option>
    </select> 
    </div>
    </div>

    <div class="input">
        <label>Zip Code:</label>
        <div class="align">
        <input type="number" name="zipcode">
        </div>
    </div> 
    
    <div class="input">
        <label>Email:</label>
        <div class="align">
        <input type="email" name="email">
        </div>
    </div>
    
    <div class="input">
        <label>Sex:</label>
        <div class="align">
        <input type="radio" name="sex" value="Female">Female<input type="radio" name="sex" value="Male">Male 
        </div>
    </div>
    
    <div class="input">
        <label>Lanuage:</label>
        <div class="align">
        <input type="checkbox" name="language">English<input type="checkbox" name="language">Non English 
        </div>
    </div> 
    
    <div class="input">
        <label>About:</label>
        <div class="align">
        <textarea></textarea>
        </div>
    </div> 
    
    <div class="input">
        <label>User Image:</label>
        <div class="align">
        <input type="file" name="fileToUpload" id="fileToUpload">
        </div>
    </div>
    
    <div class="input">
        <input class="btn" type="submit" name="Submit"> 
    </div>

    </form> 
   




    </body>
</html>