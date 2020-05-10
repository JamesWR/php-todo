<?php

function list_item($todo) {
    return sprintf(<<<'EOD'
        <div class="list-item">
            <input 
                type="checkbox" 
                id="%s"    
                name="%s" 
                value="%s"
                %s
                onchange="jQuery.post(
                    './update_post', 
                    {'done':this.checked, 'id':this.id}, 
                    console.log
                );"
            >
            <label for="$s">%s</label>
        </div>
        EOD,
        $todo["ID"],
        $todo["ID"],
        $todo["ID"],
        ($todo["done"] ? "checked" : ""),
        $todo["action"]
    );
}

// echo list_item(['action' => 'abc', 'done' => false])
?>