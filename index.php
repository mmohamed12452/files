<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="./index.css"/>
  </head>
  <body>

  <form action="./form.php" method="post">
      <h1>Step 1:Your details</h1>
      <div class="input-row">
        <label for="first-name">Name</label>
        <input type="text" name="firstname" placeholder="First and last name" required/>
      </div>
      <div class="input-row">
        <label for="Email">Email</label>
        <input type="email" name="email" placeholder="examples@yahoo.com" />
      </div>

      <div class="input-row">
        <label for="phone">Phone</label>
        <input type="tel" name="telephone" placeholder="Eg.+447000000000000" />
      </div>

      <h1>Step 2:Delivery address</h1>
      <div class="input-row">
        <label for="Address">Address</label>
        <textarea name="address" id="Address" cols="34" rows="10"></textarea>
      </div>
      <div class="input-row">
        <label for="post-code">post-code</label>
        <input type="text" name="postcode"/>
      </div>

      <div class="input-row">
        <label for="Country">Country</label>
        <input type="text" name="country"/>
      </div>

      <h1>Step 3: Card details</h1>
      <div class="radio-input-row">
        <label for="card-type">card-type</label>
        <div>
          <input type="radio" id="visa" name="visa" value="visa" />
          <label for="card-type">Visa</label>
          <input type="radio" id="visa" name="visa" value="Am-Ex" />
          <label for="card-type">Am-Ex</label>
          <input type="radio" id="visa" name="visa" value="Mastercard" />
          <label for="card-type">Mastercard</label>
        </div>
      </div>

      <div class="input-row">
        <label for="card-number">Card Number:</label>

        <input type="text" name="cardnumber" />
      </div>

      <div class="input-row">
        <label for="Security-code">Security code:</label>
        <input type="text" name="securitycode" />
      </div>

      <div class="input-row">
        <label for="Name-card">Name on card:</label>
        <input type="text" name="namecard" placeholder="Exact name as on the card" />
      </div>
      
      <button name="submit">Buy it!</button>
    </form>
  </body>
</html>
