<?php
include_once("./layouts/header.php");
?>
<main class="form-signin">
    <form>
        <img class="mb-4" src="../assets/brand/bootstrap-logo.svg" alt="" width="72" height="57">
        <h1 class="h3 mb-3 fw-normal">Please Sign Up</h1>
        <div class="form-floating">
            <input type="name" class="form-control" id="floatingInput" placeholder="Njoli Patrick">
            <label for="floatingInput">Full Name</label>
        </div>
        <div class="form-floating">
            <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
            <label for="floatingInput">Email address</label>
        </div>

        <div class="form-floating">
            <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
            <label for="floatingPassword">Password</label>
        </div>

        <!-- <div class="checkbox mb-3">
            <label>
                <input type="checkbox" value="remember-me"> Remember me
            </label>
        </div> -->
        <button class="w-100 btn btn-lg btn-primary" name="action" value="signup" type="submit">Sign up</button>
        <p class="mt-5 mb-3 text-muted">&copy; 2021</p>
    </form>
</main>
<?php
include_once("./layouts/footer.php");
?>