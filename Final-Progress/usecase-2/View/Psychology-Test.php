<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Psychology Test</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <!-- Custom CSS -->
  <link rel="stylesheet" href="Psychology-Test.css" />
</head>
<body>
  <div class="container py-4 px-2 position-relative" style="max-width: 420px;">
    <!-- Back button -->
    <a href="?c=Test&m=guidelines" class="back-button text-dark fs-3">&#60;</a>

    <form method="POST" action="?c=Test&m=submit">
      <!-- Progress Bar -->
      <div class="progress-container mt-5">
        <div class="d-flex justify-content-between small mb-1 px-1">
          <span>0%</span>
            <?php
              // Define questions and options before using them
              $questions = [
    "I feel overwhelmed by my responsibilities.",
    "I find it difficult to relax.",
    "I often feel nervous or anxious.",
    "I have trouble concentrating on tasks.",
    "I feel tired even after a full night's sleep.",
    "I get irritated easily.",
    "I feel like I can't control important things in my life.",
    "I experience headaches or muscle tension.",
    "I feel sad or down frequently.",
    "I have trouble falling or staying asleep.",
    "I worry about things that are out of my control.",
    "I feel frustrated with myself.",
    "I feel like I have too much to do and not enough time.",
    "I avoid social situations because of stress.",
    "I feel my heart racing or palpitations during stressful times.",
    "I have difficulty making decisions.",
    "I feel tense or 'on edge' most of the time.",
    "I feel hopeless about the future.",
    "I experience stomach problems when stressed.",
    "I find it hard to enjoy activities I used to like."
];

      $options = ['Strongly disagree', 'Disagree', 'Neutral', 'Agree', 'Strongly agree'];
    ?>
            <span>
            <span id="progress-text">0/<?= count($questions) ?></span>
            </span>
</div>
<!-- Sample Questions -->
<?php foreach ($questions as $index => $question): ?>
<div class="question bg-light p-3 rounded mb-3 text-center">
  <div class="options mb-3">
    <?php for ($i = 1; $i <= 5; $i++): ?>
      <label>
        <input type="radio" name="q<?= $index + 1 ?>" value="<?= $i ?>" <?= $i === 1 ? 'required' : '' ?> />
        <span><?= $i ?></span>
        <small><?= $options[$i - 1] ?></small>
      </label>
    <?php endfor; ?>
  </div>
  <p class="statement fw-semibold mb-0"><?= $question ?></p>
</div>
<?php endforeach; ?>


      <!-- Submit Button -->
      <div class="text-center">
<button type="submit" class="btn btn-primary rounded-pill px-4">Submit Test</button>
</div>
</form>
</div>
</body>
</html>
