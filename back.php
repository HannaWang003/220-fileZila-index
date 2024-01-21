<?php
include_once "./api/db.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>作品集</h1>
    <form action="">
    <table>
        <tr>
            <td>name</td>
            <td>about</td>
            <td>skill</td>
            <td>package</td>
            <td>url</td>
            <td>effect</td>
        </tr>
        <?php
$ins = $Index220->all();
foreach($ins as $in){
?>
        <tr>
            <td><img src="./img/{<?=$in['img']?>}"></td>
            <td><input name="name" type="text" value="<?=$in['name']?>"></td>
            <td><input name="about" type="text" value="<?=$in['about']?>"></td>
            <td><textarea name="skill" id="a" cols="30" rows="10"><?=$in['skill']?></textarea></td>
            <td><textarea name="package" id="b" cols="30" rows="10"><?=$in['package']?></textarea></td>
            <td><input name="url" type="text" value="<?=$in['url']?>"></td>
            <td>
            <select name="effect" >
                <?php
$opts=$Inexeffect->all(['sh'=>1]);
foreach($opts as $opt){
                ?>
                <option value="<?=$opt['id']?>"><?=$opt['name']?></option>
                <?php
}
                ?>
            </select>
            </td>
        </tr>
        <?php
}

?>
<tr>
    <td colspan="7">
        <input type="button" value="確認">
        <input type="reset" value="清除">
    </td>
    <!-- <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td> -->
</tr>
    </table>
    </form>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script>
        $('input[type=button]').click(
            function(){
                console.log($(this).parent().parent().parent().find('#a').val());
            }
        )
    </script>
</body>
</html>