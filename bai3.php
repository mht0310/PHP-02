<h3 style="text-align: center">Bảng cửu chương</h3>
<table style="margin-left: auto;margin-right: auto">
    <?php
    for ($i = 1;$i <11 ; $i++){
    ?>
    <tr>
        <?php
        for($j=2;$j<10;$j++){ ?>
            <td>
                <?php
                echo $j.'x'.$i.'='.$j*$i
                ?>
            </td>
       <?php
        }
        ?>
    </tr>
    <?php } ?>
</table>