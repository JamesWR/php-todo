
<?php
function js() {
    return <<<'EOD'
        <script type="text/javascript">
            function filter() {
                switch (this.selectedIndex){
                    case 0:
                        jQuery('.list-item').show();
                        break;
                    case 1:
                        jQuery('.list-item:has(input:not(:checked))').show();
                        jQuery('.list-item:has(input:checked)').hide();
                        break;
                    case 2:
                        jQuery('.list-item:has(input:not(:checked))').hide();
                        jQuery('.list-item:has(input:checked)').show();
                }
        
            }
        </script>
    EOD;
}
?>