<?php
function tag_code($input){
    $get=file_get_contents('https://tag-code.ir/encode/?get='.$input);
    if($get){
        $r=$get;
    }elseif($get=='Error'){
        $r='Error,Please Try Again!';
    }else{
        $r='Error,Cannot Connect To Server,Please Check Your Internet Connection!';
    }
    return $r;
}
