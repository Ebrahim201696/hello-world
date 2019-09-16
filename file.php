<?php
if(isset($_POST["fs"]))
{
  $str1 = $_POST["fs"] ;


}
function count_of_each_letter($string){
        $string_chars = array();
        $length_ = mb_strlen($string,'UTF-8');
        if($length_== 0){
          return null;
        }
        else{
            for ($i=0; $i < $length_; $i++) {
                $each_letter = mb_substr($string,0,1,'UTF-8');
                $string_chars[$each_letter] = mb_substr_count($string, $each_letter);
                $string = str_replace($each_letter,"", $string);
                $length_ = mb_strlen($string,'UTF-8');
            }
            $string = '';
            foreach ($string_chars as $key => $value) {
                $string .= $key.'-'.$value.'<br>';
            }
            return $string;
        }
    }
    $s = count_of_each_letter($str1);
?>



<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form action="file.php" method="post">
      First string: <input type="text" name="fs"
      <?php
      if(isset($_POST["fs"])){ ?>
        value="<?php echo $_POST["fs"]; ?>"
      <?php } ?>
       >
      <input type="submit" value="convert">
    </form>

    <div class="result">
      <?php
      // ONLY Print when fn Exists and no Errors Exist
      if(isset($_POST["fs"])){
      echo $s;
      }
       ?>

  </body>
</html>
