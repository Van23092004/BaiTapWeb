<?php

$filename = "Quiz.txt";
$questions = file($filename, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
$current_question = [];
$questions_data = [];
foreach ($questions as $line) {
    if (strpos($line, "ANSWER:") !== false) {
        $answer = trim(substr($line, strpos($line, ":") + 1));
        $current_question['answer'] = $answer;
        $questions_data[] = $current_question;
        $current_question = [];
    } elseif (strpos($line, "Cau") === 0 || strpos($line, "Layout") === 0 || strpos($line, "Intent") === 0) {
        $current_question['question'] = $line;
    } else {
        $current_question['answers'][] = $line;
    }
}
?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bai thi trac nghiem</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2 class="text-center">Bài thi trắc nghiệm</h2>
        <form method="POST" action="submit.php">
            <?php foreach ($questions_data as $index => $question): ?>
                <div class="card mb-4">
                    <div class="card-header"><strong>Câu <?= ($index + 1) ?></strong></div>
                    <div class="card-body">
                        <p><?= $question['question'] ?></p>
                        <?php foreach ($question['answers'] as $key => $answer): ?>
                            <?php $answerLetter = chr(65 + $key); ?>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="question<?= $index ?>" value="<?= $answerLetter ?>" id="question<?= $index ?><?= $answerLetter ?>">
                                <label class="form-check-label" for="question<?= $index ?><?= $answerLetter ?>"><?= $answer ?></label>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            <?php endforeach; ?>
            <button type="submit" class="btn btn-success">Nộp bài</button>
        </form>
    </div>
</body>
</html>
