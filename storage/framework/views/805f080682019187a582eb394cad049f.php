<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sign Up</title>
  <link href="assets/img/logo2.png" rel="icon">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-image: url('assets/img/hero-bg-light.webp');
      background-size: cover;
      background-position: center;
      background-attachment: fixed;
      margin: 0;
      height: 100vh;
    }
    .card {
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
      border: none;
    }

    .card-header {
      background-color: rgb(77, 146, 168);
      color: white;
    }

    .card-body {
      background-color: #f8f9fa;
      color: #333;
    }

    .form-control:focus {
      border-color: rgb(77, 146, 168);
      box-shadow: 0 0 5px rgb(77, 146, 168);
    }

    .btn-primary {
      background-color: rgb(77, 146, 168);
      border-color: rgb(77, 146, 168);
    }

    .btn-primary:hover {
      background-color: rgb(63, 120, 140);
      border-color: rgb(63, 120, 140);
    }

    a {
      color: rgb(77, 146, 168);
      text-decoration: none;
    }

    a:hover {
      color: rgb(63, 120, 140);
      text-decoration: underline;
    }
  </style>
</head>
<body>
  <div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="card">
          <div class="card-header text-center">
            <h4>Sign Up</h4>
          </div>
          <div class="card-body">
            <form action="/signup" method="POST">
              <?php echo csrf_field(); ?>
              
              <!-- Full Name -->
              <div class="mb-3">
                <label for="full_name" class="form-label">Full Name</label>
                <input type="text" class="form-control" id="full_name" name="full_name" required>
              </div>

              <!-- Email -->
              <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" required>
              </div>

              <!-- Password -->
              <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password" required>
              </div>

              <!-- Confirm Password -->
              <div class="mb-3">
                <label for="password_confirmation" class="form-label">Confirm Password</label>
                <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required>
              </div>

              <!-- Submit Button -->
              <button type="submit" class="btn btn-primary w-100"style="background-color: rgb(77, 146, 168); color: white;">Sign Up</button>
            </form>
          </div>
          <div class="card-footer text-center">
            <p>Already have an account? <a href="login">Login here</a></p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>
</html><?php /**PATH C:\laragon\www\lms\resources\views/signup.blade.php ENDPATH**/ ?>