<?php

function getPostFormatedDate($date){
    return date("j. F Y", strtotime($date));
}

