<div class="search">
<form method="post" action="<?php echo url_for('@patient_list'); ?>" class="search" >
    <input type="text" name="keywords" id="search_keywords" value="<?php echo $searchKeywords ?>"/>
    <input type="submit" value="Search" class="button" />
  </table>
</form>
</div>