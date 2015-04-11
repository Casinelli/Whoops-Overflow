<?php /* List questions from StackOverflow related to the error */ ?>
<div class="help-container">
    <div class="help-panel">
        <div class="questions">
            <ul class="help-questions">
            <?php foreach ($help_questions as $question) { ?>
                <li class="help-question">
                    <a target="_blank" href="<?php echo $question['link'] ?>">
                        [<?php echo $question['answer_count'] ?>] <?php echo $question['title'] ?>
                        <?php if ($question["is_answered"]) echo " <em class='answered'>(answered)</em>" ?>
                    </a>
                </li>
            <?php } ?>
            </ul>
        </div>

        <div class="brand">
            <a target="_blank" href="https://www.github.com/Casinelli/Whoops-Overflow">Whoops Overflow &raquo;</a>
        </div>
    </div>
</div>
