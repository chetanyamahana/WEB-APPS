<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Form</title>
</head>
<body>
   <form action="confirmation.php" method = "POST">
       <h1><center> Payment Form</center></h1>
       <hr>
       <h2>SBI Payment Portal</h2>
       <p>Required fields are followed by *</p>
       <fieldset>
           <legend>User Details</legend>

       <p>Name*- <input type="text" class = "form-control" name="first_name" placeholder = "First name" required></p>
       <p>
           <fieldset>
               <legend>Gender*</legend>
           
           Male <input type="radio" name="Gender" id="Male" required>
           Female <input type="radio" name="Gender" id="female" required>
        </fieldset>
       </p>
       <p>Address- <textarea name="address" id="address" cols="70" rows="8"></textarea></textarea></p>
       <p>Email- <input type="email" name="Email" id="email"></p>
       <p> 
           Pincode- <input type="number" name="pincode" id="pincode">
       </p>    
       </fieldset>
       <fieldset>
           <legend>Payment Details</legend>
           <p>Card Type*- 
               <select name="card_type" id="card_type" required>
                   <option value="">---select a Card Type---</option>
                   <option value="Visa">Visa</option>
                   <option value="Debit card">Debit card</option>
                   <option value="Master card">Master card</option>
                   <option value="Rupay">Rupay</option>
               </select>
           </p>
           <p>
               Card number*- <input type="number" name="number" id="number" required>
           </p>   
           <p>
               Expiration date*- <input type="date" name="exp_date" id="exp_date" required>
           </p>
           <p>
               CVV*- <input type="password" name="cvv" id="cvv" required>
           </p>
           <input type="submit" value="Pay Now">
       </fieldset>
   </form>
</body>
</html>