<?php /* List questions from StackOverflow related to the error */ ?>

<ul class="help-questions">
<?php foreach ($help_questions as $question) { ?>
    <li class="help-question">
        <a target="_blank" href="<?php echo $question['link'] ?>" <?php if ($question['is_answered']) echo 'class="answered"' ?>>
            [<?php echo $question['answer_count'] ?>] <?php echo $question['title'] ?>
        </a>
    </li>
<?php } ?>
</ul>
