<?php

/**
 * Check If user has credits to create company
 */
function user_has_company_credit(){
    $user = auth()->user();
    if( $user->company_credit == '-1'){
        return true;
    }
    if( $user->company_credit == 0 ){
        return false;
    }
    return true;

}