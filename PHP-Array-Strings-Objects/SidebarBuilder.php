<!DOCTYPE html>
<html>
<head>
    <title>Sidebar Buider</title>
    <style>
        hr{
            width: 160px;

        }
        div {
            border: 2px solid;
            border-radius: 25px;
            width: 150px;
            padding: 10px;
            background: skyblue;
        }
        a {
            color:black;
        }

    </style>
</head>
<body>
    <form action="" method="get">
       Categories: <input type="text" name="categories"><br>
       Tags: <input type="text" name="tags"><br>
       Months: <input type="text" name="months"><br>
       <input type="submit" value="Generate">
    </form>
    <?php
    if(isset($_GET['categories'])){
        $categories = explode(', ' ,$_GET['categories'] ) ;
        $tags = explode(', ' ,$_GET['tags'] ) ;
        $months = explode(', ' ,$_GET['months'] ) ;
    ?>
        <br>
        <div>Categories
        <hr align="rigth"/>
    <?php
        for( $i = 0 ; $i<sizeof($categories) ; $i++)
        {
            echo '<ul type="circle"><li><a href="#">'.$categories[$i].'</a></li></ul>'  ;
        }
    ?>
    </div>
        <br>
        <div>Tags
            <hr align="rigth"/>
            <?php
            for( $i = 0 ; $i<sizeof($tags) ; $i++)
            {
                echo '<ul type="circle"><li><a href="#">'.$tags[$i].'</a></li></ul>'  ;
            }
            ?>
        </div>
        <br>
        <div>Months
            <hr align="rigth"/>
            <?php
            for( $i = 0 ; $i<sizeof($months) ; $i++)
            {
                echo '<ul type="circle"><li><a href="#">'.$months[$i].'</a></li></ul>'  ;
            }
            ?>
        </div>
<?php
    }
    ?>
</body>
</html>