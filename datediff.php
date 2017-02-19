<?php

/*function dateDiff($from,$to)
{
    return 0;
}
*/
if(isset($_POST['submit']))
{
    $month_from = date("m",strtotime($_POST['date_from']));
    $month_to =date("m", strtotime($_POST['date_to']));
    $year_from = date("Y",strtotime($_POST['date_from']));
    $year_to =date("Y", strtotime($_POST['date_to']));

    $date_from = date("d",strtotime($_POST['date_from']));
    $date_to = date("d",strtotime($_POST['date_to']));

    $all_months = array("JAN","FEB","MAR", "APR","MAY", "JUN", "JUL","AUG", "SEP","OCT", "NOV", "DEC");

    $type ="";


    if($year_from == $year_to )
    {
        if($month_to == $month_from)
        {
            $type = "Daily";
            //$diff=date_diff($date_from,$date_to, true);
            //$no =  $diff->format("%R%a days");
            $no = $date_to - $date_from." days";


        }
        else
        {
            $type = "Monthly";
            $no = ($month_to - $month_from+1)." months";
            for($i=$month_from; $i<= $month_to ; $i++)
            {
                echo $all_months[$i-1]."<br>";
            }
        }


    }
    else
    {
        $type = "Yearly";
        $no = $year_to - $year_from+1;

    }

    //$diff=date_diff($date_from,$date_to);
    //$diff=date_diff($date_from,$date_to, true);
    //$no =  $diff->format("%R%a days");
echo "$type and $no";
    //echo $diff->format("%R%a days");

}

?>

<form action="" method="post">
    <input type="text" name="date_from" placeholder="date from">
    <input type="text" name="date_to" placeholder="date to">
    <button type="submit" name="submit">Difference</button>
</form>
