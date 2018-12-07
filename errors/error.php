<?php

class errors{

    function success($msg){
        return '<div style="color:green;">'.$msg.'</div>';
    }

    function danger($msg){
        return  '<div style="color:red;">'.$msg.'</div>';
    }
    function info($msg){
        return  '<div style="color:blue;">'.$msg.'</div>';
    }
}