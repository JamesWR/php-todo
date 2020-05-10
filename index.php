<?php
include  "list_item.php";
include  "filter.php";
include  "add.php";
include  "css.php";
include  "js.php";
include  "db.php";
function todo($items) {
    return sprintf(<<<'EOD'
        <body>
            <script src="http://code.jquery.com/jquery-1.10.0.min.js"></script>
            %s
            %s
            <div class="todo-list">
                %s
                <div class="list">
                    %s
                </div>
                %s
            </div
        </body>
        EOD,
        js(),
        css(),
        filter(),
        implode('', array_map('list_item', $items)),
        add()
    );
}

echo todo(get_todos());

?>