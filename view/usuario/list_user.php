

<table>
    <tr>
        <th>Id</th>
        <th>Email</th>
    </tr>
    <?php 
    if($dataToView["data"]){
        foreach ($dataToView["data"] as $usuario) {
            ?>
            <tr>
<td><?= $usuario->getId()?></td>
<td><?= $usuario->getEmail()?></td>

       <?php }
    }
    ?>
    </table>

    