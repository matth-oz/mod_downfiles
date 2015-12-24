<?php
defined('_JEXEC') or die;
?>

<?php if(!empty($list)):?>
<div class="downfiles<?php echo $moduleclass_sfx ?>">
    <ul class="downfiles-list">
        <?php foreach($list as $item):?>
        <?php $ext = substr(strrchr($item->filename, '.'), 1);?>
        <li>
            <a href="index.php?option=com_downfiles&task=item.getfile&file_id=<?php echo $item->id?>"><?php echo $item->file_desc?></a> (<?php echo $ext.", ".$item->file_size;?>)
        </li> 
        <?php endforeach;?>
    </ul>
</div>    
<?php endif;?>
