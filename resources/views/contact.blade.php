
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  @notifyCss
  <style>
    form .btn {
        background-color: #28a745;
        color: white;
        font-size: 1rem;
        border-radius: 0.25rem;
    }
</style>
</head>
<body>
<div class="container my-5">
  <div class="row justify-content-center">
    <div class="col-lg-9">
      <h1 class="mb-3">Contact Us</h1>
      <form method="post" action="{{ route('contact.store') }}"> @csrf
        <div class="row g-3">
          <div class="col-md-6">
            <label for="your-name" class="form-label">Your Name</label>
            <input type="text" class="form-control" id="name" name="name" required>
          </div>
          <div class="col-md-6">
            <label for="your-surname" class="form-label">Your Mobile</label>
            <input type="number" class="form-control" id="mobile" name="mobile" required>
          </div>
          <div class="col-md-6">
            <label for="your-email" class="form-label">Your Email</label>
            <input type="email" class="form-control" id="email" name="email" required>
          </div>
          <div class="col-md-6">
            <label for="your-subject" class="form-label">Your Subject</label>
            <input type="text" class="form-control" id="subject" name="subject">
          </div>
          <div class="col-12">
            <label for="your-message" class="form-label">Your Message</label> 
            <textarea class="form-control" id="contactmessage" name="contactmessage" rows="5" required></textarea>
          </div>
          <div class="col-12">
            <div class="row">
              <div class="col-md-6">
                <button type="submit" class="btn btn-success fw-bold">Submit</button>
              </div>
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
<x-notify::notify />
</body>
@notifyJs
</html>
