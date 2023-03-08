@include ('partials.header')
  
<form action="/store" method="Post"> 
@CSRF
  <div class="mb-3">
    <label for="name" class="form-label">Name</label>
    <input type="text" class="form-control" name="name">
   
  </div>
  <div class="mb-3">
    <label for="emailAddress" class="form-label">Email</label>
    <input type="email" class="form-control" name="email" aria-describedby="emailHelp">
  </div>
  <div class="form-group">
    <label for="password" class="form-label">Password</label>
    <input type="password" class="form-control" name="password">
  </div>
  <div class="mb-3">
    <label for="confirmPassword" class="form-label">Confirm password</label>
    <input type="password" class="form-control" name="password_confirmation">
  </div>
 
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@include ("partials.footer")
