<form method="post">
    <?php
    $method = $_SERVER['REQUEST_METHOD'];
    $request = explode('/', trim($_SERVER['PATH_INFO'],'/'));
    //$input = json_decode(file_get_contents('php://input'),true);
    $path = $_SERVER['PATH_INFO'];

    echo $method;
        print_r($path);
    //echo print_r($request);


    /*

    for($i=1;$i<=5;$i++)
    {
        ?>
        <div class="well well-sm well-primary">
            <input type="hidden" name="ques"/>Questions?
        </div>
        <div class="well well-sm">
            <div class="radio">
                <label>
                <input type="radio" name="optradio[<?php echo $i; ?>]" value="a">Option 1</label>
            </div>
            <div class="radio">
                <label>
                <input type="radio" name="optradio[<?php echo $i; ?>]" value="b">Option 2</label>
            </div>
            <div class="radio">
                <label>
                <input type="radio" name="optradio[<?php echo $i; ?>]" value="c">Option 3</label>
            </div>
        </div>
        <?php
    } */
    ?>
    <button type="button" class="btn btn-success" name="submit">Finish</button>

</form>
