<?php 
$title ="Registration";
include 'includes/header.php'; ?>

<div class="registration">
<h2 class="create-account">Create an Account</h2>


    <label for="username" class="registration-form">Username</label>
    <input type="text" class="registration-form" id="username" >

    <label for="email" class="registration-form">Email</label>
    <input type="text" class="registration-form" id="email" required>

    <label for="password" class="registration-form">Password</label>
    <input type="text" class="registration-form" id="password" required>

    <label for="role" class="registration-form">Role</label>
    <select id="role" name="role" onchange="toggleProofField()">
        <option value="">Select Role</option>
        <option value="">Student</option>
        <option value="">Admin</option>
    </select>
    
    <div id="proof-container" class="registration-form">
        <label for="proof">Proof of Administration</label>
        <input type="file" id="proof" accept="image/*, application/pdf">
    </div>
    <input type="submit" value="Create Account" class="btn-primary">
    
</form>
</div>





<?php include 'includes/footer.php'; ?>