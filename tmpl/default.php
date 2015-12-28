<?php
defined('_JEXEC') or die;
$document = JFactory::getDocument();
$document->addStylesheet('/modules/mod_downfiles/media/css/style.css');
?>

<?php if(!empty($list)):?>
<div class="downfiles<?php echo $moduleclass_sfx ?>">
    <?php if(!empty($text_before)):?>
    <div class="downfiles-txtbefore">
        <?php echo $text_before;?>
    </div>
    <?php endif;?>
    <ul class="downfiles-list">
        <?php foreach($list as $item):?>
        <?php $ext = substr(strrchr($item->filename, '.'), 1);?>
        <li>
            <a href="index.php?option=com_downfiles&task=item.getfile&file_id=<?php echo $item->id?>"><?php echo $item->file_desc?></a> <span>(<?php echo $ext.", ".$item->file_size;?>)</span>
        </li> 
        <?php endforeach;?>
    </ul>
</div>    
<?php endif;?>
