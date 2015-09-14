<div class="contact_box_b">

      <div class="contact_brown">
            <form action="<?php echo base_url() ?>welcome/message" method="post" accept-charset="utf-8">
            <input type="hidden" name="first_num" value="<?php echo $first_num; ?>">
            <input type="hidden" name="next_num" value="<?php echo $next_num; ?>">
            <table id="contact_table" class="contact_table">
                <tr id="bottom_border"><td id="row_40" class="righter">Name:</td><td>
                    <input type="text" maxlength="50" id="name" size="45" name="name" 
                           placeholder="<?php if (form_error('name') != ''){echo form_error('name');}else{echo '';}?>"
                           value="<?php if (set_value('name') != ''){echo set_value('name');}else{echo '';}?>"
                           autofocus /></td></tr>
                
                
                <tr id="border_top"><td class="righter">Email:</td><td>
                        <input type="text" maxlength="50" id="email" size="45" name="email" 
                               placeholder="<?php if (form_error('email') != ''){echo form_error('email');}else{echo '';}?>"
                               value="<?php if (form_error('email') != ''){echo '';}else{echo set_value('email');}?>"
                               /></td></tr>
                
                <tr id="border_top"><td class="righter">Subject:</td><td>
                        <input type="text" maxlength="50" id="subject" size="45" name="subject" 
                               placeholder="<?php if (form_error('subject') != ''){echo form_error('subject');}else{echo '';}?>"
                               value="<?php if (set_value('subject') != ''){echo set_value('subject');}else{echo '';}?>"
                               /></td></tr>
                
                <tr id="border_top"><td class="righter">Message:</td><td>
                        <textarea maxlength="450" id="message" rows="4" cols="37" name="message"
                               placeholder="<?php if (form_error('message') != ''){echo form_error('message');}else{echo '';}?>"
                               ><?php if (set_value('message') != ''){echo set_value('message');}else{echo '';}?></textarea></td></tr>
                
                <tr id="border_top"><td class="righter">What is <?php echo $first_num." "; ?>plus <?php echo $next_num; ?>: </td><td>
                        <input type="text" maxlength="2" size="3" name="mr_robot">
                               <?php if($wrong_ans == true){
                                    echo "<span class='lefter_light'>&nbsp &#60;&#60; You answered this wrong last time!?!</span>";
                                    }else{
                                      echo "<span class='lefter_light'>&nbsp &#60;&#60; this is to prove you're not a robot</span>";
                                    }
                                ?>
                               </td></tr>
                
                  
                <tr id="border_top"><td></td><td><input id="button" class="send_button" type="submit" value="&nbsp;Send Message&nbsp;"></td></tr>
            </table>
            </form>
      </div>

</div>

<div class="contact_box_b_mobile">

      <div class="contact_brown_mobile">
            <form action="<?php echo base_url() ?>welcome/message" method="post" accept-charset="utf-8">
            <input type="hidden" name="first_num" value="<?php echo $first_num; ?>">
            <input type="hidden" name="next_num" value="<?php echo $next_num; ?>">
            <table id="contact_table_mobile" class="contact_table">
                <tr id="bottom_border_mobile"><td id="row_40" class="righter">Name:</td><td>
                    <input type="text" maxlength="50" id="name" size="45" name="name" 
                           placeholder="<?php if (form_error('name') != ''){echo form_error('name');}else{echo '';}?>"
                           value="<?php if (set_value('name') != ''){echo set_value('name');}else{echo '';}?>"
                           autofocus /></td></tr>
                
                
                <tr id="border_top_mobile"><td class="righter">Email:</td><td>
                        <input type="text" maxlength="50" id="email" size="45" name="email" 
                               placeholder="<?php if (form_error('email') != ''){echo form_error('email');}else{echo '';}?>"
                               value="<?php if (form_error('email') != ''){echo '';}else{echo set_value('email');}?>"
                               /></td></tr>
                
                <tr id="border_top_mobile"><td class="righter">Subject:</td><td>
                        <input type="text" maxlength="50" id="subject" size="45" name="subject" 
                               placeholder="<?php if (form_error('subject') != ''){echo form_error('subject');}else{echo '';}?>"
                               value="<?php if (set_value('subject') != ''){echo set_value('subject');}else{echo '';}?>"
                               /></td></tr>
                
                <tr id="border_top_mobile"><td class="righter">Message:</td><td>
                        <textarea maxlength="450" id="message" rows="4" cols="37" name="message"
                               placeholder="<?php if (form_error('message') != ''){echo form_error('message');}else{echo '';}?>"
                               ><?php if (set_value('message') != ''){echo set_value('message');}else{echo '';}?></textarea></td></tr>
                
                <tr id="border_top_mobile"><td class="righter">What is <?php echo $first_num." "; ?>plus <?php echo $next_num; ?>: </td><td>
                        <input type="text" maxlength="2" size="3" name="mr_robot">
                               <?php if($wrong_ans == true){
                                    echo "<span class='lefter_light'>&nbsp &#60;&#60; You answered this wrong last time!?!</span>";
                                    }else{
                                      echo "<span class='lefter_light'>&nbsp &#60;&#60; this is to prove you're not a robot</span>";
                                    }
                                ?>
                               </td></tr>
                
                  
                <tr id="border_top_mobile"><td></td><td><input id="button_mobile" class="send_button" type="submit" value="&nbsp;Send Message&nbsp;"></td></tr>
            </table>
            </form>
      </div>
<script type="text/javascript">
  $(document).ready(function() {
    var input = document.getElementById("name").focus();
  }); 
</script>