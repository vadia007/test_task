<?php
function getTable($sql_result){
    if(mysql_fetch_assoc($sql_result))
    $html ="";
    $html.= "<table border='1' >";
    $i = 0;
    while($result = mysql_fetch_assoc($sql_result)){
        if ($i==0){
            $html.= "<tr>";
            foreach ($result as $key => $val){
                $html.= "<th>{$key}</th>";
            }
            $html.= "</tr>";
        }
        $i++;
        $html.= "<tr>";
        foreach ($result as $item){

            $html.= "<td>{$item}</td>";
        }
        $html.="</tr>";
    }
    $html.= "</table><br>" ;
    return $html;

}