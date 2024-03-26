<?php
include_once("partials/header.php");

?>
<main>
<form id="login" action="thankyou.html">
<div class="login">
<h1>Form</h1>
<div class="text">
    <input type="text" placeholder="Name" required>
    
</div>

<div class="textb">
    <input type="password" placeholder="Password" required >
    


</div>
<div class="email">
    <input type="email" placeholder="Email" required>
    
</div>
<div class="text-area">
   <textarea name="" id="text-area" cols="30" rows="10"></textarea>
</div>
<div class="checkbox"></div>
<input type="checkbox" required>
<div class="placeholder">I am not a robot</div>
<div class="checkbox"></div>
<input type="checkbox" required>
<div class="placeholder">I Agree with Terms</div>
<input type="submit" value="Submit" style="height:50px; width:80px">

</form>  
 
</main>
<?php
include_once("partials/footer.php");
?>








</body>

</html>