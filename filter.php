<?php
function filter() {
    return <<<'EOD'
        <div class="filter">
            <label for="filter">What items do you want to see?</label>
            <select id="fitler" onchange="filter.bind(this)()">
                <option value="all" > All </option>
                <option value="todo"> To Do </option>
                <option value="done"> Done </option>
            </select>
        </div>
        EOD;
}

?>