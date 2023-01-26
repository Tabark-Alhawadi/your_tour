<style>
    .navbar  {
        background-color: #14141F;
    }
</style>
@include('navbar')
<br>
<br>
<br>
<br>
<div class="vh-100 d-flex justify-content-center align-items-center ">
    <div class="col-md-5 p-5 shadow-sm border rounded-5 border-primary bg-white">
        <h2 class="text-center mb-4 text-primary">Sign Up Form</h2>
        <form>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Your name</label>
                <input type="text" class="form-control border border-primary" id="exampleInputName1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" class="form-control border border-primary" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control border border-primary" id="exampleInputPassword1">
            </div>
            {{-- <p class="small"><a class="text-primary" href="forget-password.html">Forgot password?</a></p> --}}
            <div class="d-grid">
                <button class="btn btn-primary" type="submit">Sign Up</button>
            </div>
        </form>
        <div class="mt-3">
            <p class="mb-0  text-center">Do you have an account? <a href="/login"
                    class="text-primary fw-bold">Login</a></p>
        </div>
    </div>
</div>

@include('footer')