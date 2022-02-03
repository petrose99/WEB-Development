<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz</title>
    <link rel="stylesheet" href="./styles.css">

</head>
<body>
    <?php 
    $Questions = array(
    1 => array(
        'Question' => '1. CSS stands for',
        'Answers' => array(
            'A' => 'Computer Styled Sections',
            'B' => 'Cascading Style Sheets',
            'C' => 'Crazy Solid Shapes',
            'D' => 'Chips See Chips'
        ),
        'CorrectAnswer' => ['A','B','C','D'],
        'type' => 'checkbox'
    ),

    2 => array(
        'Question' => '2. Choose teams from England',
        'Answers' => array(
            'A' => 'Real Madrid',
            'B' => 'Liverpool',
            'C' => 'Juventus',
            'D' => 'Chiefs',
        ),
        'CorrectAnswer'=> ['B'],
        'type' => 'checkbox'
    ),

    3 => array(

        'Question' => '3. What is the Capital of Algeria?',
        'CorrectAnswer' => 'Algiers',
        'type' => 'text'
    ),

    4 => array(
        'Question' => '4. Choose artists who are not rappers',
        'Answers' => array(
            'A' => 'Jay Z',
            'B' => 'Kendrick Lamar',
            'C' => 'Justin Timbarlake',
            'D' => 'Rihanna',
        ),
        'CorrectAnswer'=> ['C','D'],
        'type' => 'checkbox'
    ),

    5 => array(

        'Question' => '5. Which Country won the previous mens Football World Cup?',
        'CorrectAnswer' => 'France',
        'type' => 'text'
    ),

    6 => array(

        'Question' => '6. Choose Southern African country names',
        'Answers' => array(
            'A' => 'Algeria',
            'B' => 'South Africa',
            'C' => 'Zimbabwe',
            'D' => 'Swaziland',
        ),
        'CorrectAnswer' => ['B','C','D'],
        'type' => 'checkbox'
    ),

    7 => array(

        'Question' => '7. What is 10 multiplied by 10',
        'CorrectAnswer' => '100',
        'type' => 'text'
    ),

    8 => array(
        'Question' => '8. Lesotho district',
        'Answers' => array(
            'A' => 'Maseru',
            'B' => 'Leribe',
            'C' => 'Mohaleshoek',
            'D' => 'Quthing'
        ),
        'CorrectAnswer' => ['A'],
        'type' => 'checkbox'
    ),

);



if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
  if(!empty($_POST["answers1"])){
    $Answers1 = $_POST['answers1'];
        $count1 = "";
           $i = 0;
          foreach($Questions as $QuestionNo=> $Value){
              if(count($Value[CorrectAnswer])== 1){
              $arr = $Value[CorrectAnswer];

                if($arr[0] == $Answers1[$i]){
                  $count1++;
                  $i++;
                }
              }
              
          }
  }

if (!empty($_POST["answers2"])){
    $Answers2 = $_POST['answers2'];
         $count2 = "";
           $i = 0;
          foreach($Questions as $QuestionNo=> $Value){
              if(count($Value[CorrectAnswer])== 2){
              $arr = $Value[CorrectAnswer];

                if($arr[0] == $Answers2[$i] && $arr[1]==$Answers2[$i+1]){
                  $count2++;
                  $i = $i + 2;
                }
              }
              
          }

}

  if(!empty($_POST["answers3"])){
     $Answers3 = $_POST['answers3'];
        $count3 = "";
           $i = 0;
          foreach($Questions as $QuestionNo=> $Value){
              if(count($Value[CorrectAnswer])== 3){
              $arr = $Value[CorrectAnswer];

                if($arr[0] == $Answers3[$i] && $arr[1]==$Answers3[$i+1] && $arr[2]==$Answers3[$i+2]){
                  $count3++;
                  $i = $i + 3;
                }
              }
              
          } 
  }

  if(!empty($_POST["answers4"])){
      $Answers4 = $_POST['answers4'];
        $count4 = "";
           $i = 0;
          foreach($Questions as $QuestionNo=> $Value){
              if(count($Value[CorrectAnswer]) == 4){
              $arr = $Value[CorrectAnswer];

                if($arr[0] == $Answers4[$i] && $arr[1]==$Answers4[$i+1] && $arr[2]==$Answers4[$i+2] && $arr[3]==$Answers4[$i+3]){
                  $count4++;
                  $i = $i + 4;
                }
              }
              
          }

  }

  if(!empty(($_POST["ans"]))){
      $textAns = $_POST["ans"];
      $arr = [];
      foreach($Questions as $QuestionNo=> $Value){
          if($Value[type] == text){
              array_push($arr,$Value[CorrectAnswer]);
          }
      }

      for($i=0;$i < count($textAns);$i++){
        if($arr[$i]==$textAns[$i]){
            $count5++;
        }
      }
  }

  if($count1!="" || $count2!="" || $count3!="" || $count4!="" || $count5){
    echo "Your score is ".($count1 + $count2 + $count3 + $count4 + $count5)."/".count($Questions);

}

}
?>

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" id="quiz">
    <?php foreach ($Questions as $QuestionNo => $Value){ ?>

        <h3><?php echo $Value['Question']; ?></h3>

        <?php if($Value[type]=='checkbox'){?>
        <?php 
            foreach ($Value['Answers'] as $Letter => $Answer){ 
            $Label = 'question-'.$QuestionNo.'-answers-'.$Letter;
            if(count($Value[CorrectAnswer]) == 1){?>
    
        <div>
            <input type="checkbox" name="answers1[]" id="<?php echo $Label; ?>" value="<?php echo $Letter; ?>"/>
            <label for="<?php echo $Label; ?>"> <?php echo $Letter; ?>) <?php echo $Answer; ?> </label>
        </div>
        <?php } ?>

        <?php if (count($Value[CorrectAnswer]) == 2){ ?>
            <div>
            <input type="checkbox" name="answers2[]" id="<?php echo $Label; ?>" value="<?php echo $Letter; ?>" />
            <label for="<?php echo $Label; ?>"> <?php echo $Letter; ?>) <?php echo $Answer; ?> </label>
        </div>
       <?php } ?>    

       <?php if (count($Value[CorrectAnswer]) == 3){ ?>
            <div>
            <input type="checkbox" name="answers3[]" id="<?php echo $Label; ?>" value="<?php echo $Letter; ?>" />
            <label for="<?php echo $Label; ?>"> <?php echo $Letter; ?>) <?php echo $Answer; ?> </label>
        </div>
        <?php } ?>

        <?php if (count($Value[CorrectAnswer]) == 4){ ?>
            <div>
            <input type="checkbox" name="answers4[]" id="<?php echo $Label; ?>" value="<?php echo $Letter; ?>" />
            <label for="<?php echo $Label; ?>"> <?php echo $Letter; ?>) <?php echo $Answer; ?> </label>
        </div>
        <?php } ?> 

        <?php } ?>
        <?php }?>
        
        <?php if($Value[type]=='text'){?>
        
            <input type="text", name="ans[]" required>
        <?php } ?>

    <?php } ?>
    <br><br>
    <input type="submit" name="submit" value="submit quiz"/>
    </form>

</body>
</html>