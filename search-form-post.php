<?php
$search_param = isset($_GET['filter-search']) ? wp_strip_all_tags($_GET['filter-search']) : "";
?>

<div class="filter_search">
    <form id="search-form-filter">
        <input placeholder="Type to Search..." name="search" type="search" value="<?php echo $search_param; ?>">
        <svg style="<?php if(!$search_param) echo 'display:none;'; ?>" class="remove-search" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="20px" height="20px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve"><polygon points="438.393,374.595 319.757,255.977 438.378,137.348 374.595,73.607 255.995,192.225 137.375,73.622 73.607,137.352 192.246,255.983 73.622,374.625 137.352,438.393 256.002,319.734 374.652,438.378 "></polygon></svg>
    </form>
</div>
