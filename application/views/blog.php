<div class="content_wrapper_blog">
    <div class="mCustomScrollbar" data-mcs-theme="dark-thick" id="blog_results">
    <?php
    foreach ($blog as $post) {
        $body = nl2br($post['body']);
        $date = new DateTime($post['date']);
        $date = date_format($date, 'g:ia  m/d/Y');
        echo "<div class='blog_box'>";
        echo "<span class='blog_title'><a href='".base_url()."welcome/blog_post/".$post['id']."/".$post['title']."'>".$post['title']."</a></span> <hr> <span class='blog_author'>by ".$post['author']."&nbsp;&nbsp;&middot;&nbsp;&nbsp; ".$date."</span><hr>";
        echo "<div class='blog_body'>";
        if ($post['image_one'] != '') {
                            echo "<img src='".base_url()."images/blog/".$post['id']."/"."MED/".$post['image_one']."'";
                            echo " srcset='".base_url()."images/blog/".$post['id']."/"."SMALL/".$post['image_one']." 650w,"; 
                            echo " ".base_url()."images/blog/".$post['id']."/"."MED/".$post['image_one']." 1200w,"; 
                            echo " ".base_url()."images/blog/".$post['id']."/"."LARGE/".$post['image_one']." 1900w,"; 
                            echo " ".base_url()."images/blog/".$post['id']."/"."LARGE/".$post['image_one']." 1024w 2x'"; 
                            echo " alt='".$post['title']."'/>";
                        }
        echo $body."</div>";
        echo "";
        echo "</div>";
    }
    ?>
    </div>
    <div class='blog_years'>
    <?php 
        foreach ($years as $value) {
            echo '<a href="'.base_url().'welcome/blog/'.$value.'" id="'.$value.'" value="'.$value.'">';
            echo $value.'&nbsp;&nbsp;&nbsp;';
            echo '</a>';
        }
    ?>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function() {
        var active_year = <?php echo $year ?>;
        var bold_it = $('#<?php echo $year ?>');
        bold_it.css('font-weight', 'bolder');
    });
</script>



