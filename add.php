<?php
function add() {
    return sprintf(<<<'EOD'
        <div class="add-todo">
            <form action="./add_post.php" method="post">
                <label for="action-input">Add ToDo</label>
                <input type="text" id="action-input" name="action">
                <input type="submit" value="Submit">
            </form>
        </div>
        EOD,
    );
}

?>