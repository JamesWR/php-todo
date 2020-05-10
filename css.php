<?php
function css() {
    return <<<'EOD'
        <style type="text/css">
            .list-item, .filter, .add-todo {
                padding: 5px;
            }
            .list-item {
                border-top: 1px solid lightgray;
            }
            .list-item:last-of-type {
                border-bottom: 1px solid lightgray;
            }
            .todo-list {
                float: left;
                border: 1px solid gray;
            }
        </style>
    EOD;
}
?>