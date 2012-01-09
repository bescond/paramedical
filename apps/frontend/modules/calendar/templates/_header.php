<div id="header">
<form method="post" action="<?php echo url_for('@patient_list'); ?>" class="search" >
    <label for="search">Search</label>
    <input type="text" name="search" id="search" value="<?php echo $defaultSearch ?>"/>
    <input type="submit" value="Search your patients" class="button" />
  </table>
</form>
</div>