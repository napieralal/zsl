<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Form</title>
    <link rel="stylesheet/less" type="text/css" href="../style/styles.less"/>
    <script src="//cdn.jsdelivr.net/npm/less"></script>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>
<form class="user" action="form_user_data.php" method="post" autocomplete="off">
    <p> ( <span class="required-star">*</span> ) Required fields </p>
    <div class="user__element">
        <p class="user__element--title">Account type </p>
        <div class="user__element--radio">
            <label class="user__radio">
                <input type="radio" value="Personal Account" checked name="accountType" required>
                Personal Account
            </label>
            <label>
                <input type="radio" value="Business Account" name="accountType" required>
                Business Account
            </label>
        </div>
    </div>
    <label class="user__element">
        <p class="user__element--title">First Name </p>
        <input name="firstName" required pattern="^[A-Z][a-z]{2,10}"/>
    </label>
    <label class="user__element">
        <p class="user__element--title">Last Name </p>
        <input name="lastName" required pattern="^[A-Z][a-z]{2,20}"/>
    </label>
    <label class="user__element">
        <p class="user__element--title">Country/Region </p>
        <select name="country" required>
            <option value="" selected hidden disabled>Select</option>
            <option value="Poland">Poland</option>
            <option value="USA">USA</option>
            <option value="Greece">Greece</option>
        </select>
    </label>
    <label class="user__element">
        <p class="user__element--title">Street Address </p>
        <input name="streetAddress1" required/>
    </label>
    <label class="user__element">
        <p class="user__element--title">Street Address 2 </p>
        <input name="streetAddress2"/>
    </label>
    <label class="user__element">
        <p class="user__element--title">City </p>
        <input name="city" required/>
    </label>
    <label class="user__element">
        <p class="user__element--title">State/Providence </p>
        <select name="state" required>
            <option value="" selected hidden disabled>Select</option>
            <option value="Wielkopolskie">Wielkopolskie</option>
            <option value="Zachodniopomorskie">Zachodniopomorskie</option>
            <option value="Malopolskie">Małopolskie</option>
        </select>
    </label>
    <label class="user__element">
        <p class="user__element--title">ZIP/Postal Code </p>
        <input name="zipCode" class="user__element--zipcode" required pattern="[0-9]{5}"/>
    </label>
    <label class="user__element">
        <p class="user__element--title">Phone number </p>
        <div class="user__element--phone">
            <input name="phoneNumber" required/>
        </div>
    </label>

    <button class="user__submit" id="submit">SEND</button>
</form>
<script src="../js/script.js"></script>
</body>
</html>
