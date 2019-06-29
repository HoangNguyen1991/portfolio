<?php
    
    
    //message vars
    $msg = '';
    $smgClass = '';

    //chechk for submit
    if(filter_has_var(INPUT_POST,"submit")):
        //get form data
        $title = htmlspecialchars($_POST['title']);
        $subtitle = htmlspecialchars($_POST['subTitle']);
        $content = htmlspecialchars($_POST['content']);
        if (!empty($title) || !empty($subtitle) || !empty($content)):
            echo ("$title");
        else:
            $msg = 'you did not edit anything';
            $smgClass = 'alert-danger';
        endif;
    endif;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
<div class="container">
    <?php if($msg !=''): ?>
        <div class="class <?php echo $smgClass;?>"><?php echo $msg; ?></div>
    <?php endif ?>
        <div class="alert"> </div>
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <div>
            <label for="title">Title</label>
            <input type="text" name="title" class="form-control">
        </div>
        <div>
            <label for="subTitle">Sub-title</label>
            <input type="text" name="subTitle" class="form-control">
        </div>
        <div>
            <label for="content">Content</label>
            <textarea name="content" class="form-control"></textarea>
        </div>
        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    </form>
</div>  
</body>
</html>



