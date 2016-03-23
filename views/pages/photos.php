<table class="gallery" cellpadding="0" cellspacing="0" border="0" align="center">
        <tr>
            <td valign="top">
            <?foreach($photos as $item):?>
                <a href="userfiles/photos/<?=$item['img'];?>" class="fancybox" data-fancybox-group="group" ><img src="userfiles/photos/<?=$item['img'];?>" alt="alt" /></a>
            <?endforeach;?>
            </td>
        </tr>
 </table>