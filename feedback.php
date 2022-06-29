<?php include 'inc/header.php'; ?>
<?php
$sql = "SELECT * FROM FeedBack";
$result = mysqli_query($conn, $sql);
$feedbacks = mysqli_fetch_all($result, MYSQLI_ASSOC);

?>
<a class="navbar-brand" href="#">Traversy Media</a>
<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navbarNav">
  <ul class="navbar-nav ms-auto">
    <li class="nav-item">
      <a class="nav-link" href="/php-crash/feedback/index.html">Home</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="/php-crash/feedback/feedback.html">Feedback</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="/php-crash/feedback/about.html">About</a>
    </li>
  </ul>
</div>
</div>
</nav>

<main>
  <div class="container d-flex flex-column align-items-center">

    <h2>Post Feedback</h2>
    <?php if (empty($feedbacks)) : ?>
      <p class="lead mt-3">There is no feedback</p>
    <?php endif; ?>

    <?php foreach ($feedbacks as $feedback) : ?>
      <div class="card my-3 w-75">
        <div class="card-body text-center">
          <?php echo $feedback['body']; ?>
          <div class="text-secondary mt-2">
            By <?php echo $feedback['name']; ?> on <?php echo $feedback['date']; ?>
          </div>
        </div>
      </div>
    <?php endforeach; ?>






    <?php include './inc/footer.php'; ?>