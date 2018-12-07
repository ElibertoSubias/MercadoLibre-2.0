@extends('layouts.master')

@section('content')  
{!! Html::style('css/verStyle.css') !!}
<style type="text/css">
    #SECTION_1 {
    border-collapse: collapse;
    box-sizing: border-box;
    color: rgb(51, 51, 51);
    height: 897.469px;
    text-decoration: none solid rgb(51, 51, 51);
    text-size-adjust: 100%;
    width: 771.188px;
    column-rule-color: rgb(51, 51, 51);
    perspective-origin: 385.594px 448.719px;
    transform-origin: 385.594px 448.719px;
    caret-color: rgb(51, 51, 51);
    border: 0px none rgb(51, 51, 51);
    font: normal normal 400 normal 16px / 21.6px "Proxima Nova", -apple-system, "Helvetica Neue", Helvetica, Roboto, Arial, sans-serif;
    outline: rgb(51, 51, 51) none 0px;
    padding: 44px 32px;
}/*#SECTION_1*/

#SECTION_1:after {
    border-collapse: collapse;
    box-sizing: border-box;
    color: rgb(51, 51, 51);
    text-decoration: none solid rgb(51, 51, 51);
    text-size-adjust: 100%;
    column-rule-color: rgb(51, 51, 51);
    caret-color: rgb(51, 51, 51);
    border: 0px none rgb(51, 51, 51);
    font: normal normal 400 normal 16px / 21.6px "Proxima Nova", -apple-system, "Helvetica Neue", Helvetica, Roboto, Arial, sans-serif;
    outline: rgb(51, 51, 51) none 0px;
}/*#SECTION_1:after*/

#SECTION_1:before {
    border-collapse: collapse;
    box-sizing: border-box;
    color: rgb(51, 51, 51);
    text-decoration: none solid rgb(51, 51, 51);
    text-size-adjust: 100%;
    column-rule-color: rgb(51, 51, 51);
    caret-color: rgb(51, 51, 51);
    border: 0px none rgb(51, 51, 51);
    font: normal normal 400 normal 16px / 21.6px "Proxima Nova", -apple-system, "Helvetica Neue", Helvetica, Roboto, Arial, sans-serif;
    outline: rgb(51, 51, 51) none 0px;
}/*#SECTION_1:before*/

#H2_2 {
    border-collapse: collapse;
    box-sizing: border-box;
    color: rgb(51, 51, 51);
    height: 24px;
    text-decoration: none solid rgb(51, 51, 51);
    text-size-adjust: 100%;
    width: 707.188px;
    column-rule-color: rgb(51, 51, 51);
    perspective-origin: 353.594px 12px;
    transform-origin: 353.594px 12px;
    caret-color: rgb(51, 51, 51);
    border: 0px none rgb(51, 51, 51);
    font: normal normal 600 normal 24px / 24px "Proxima Nova", -apple-system, "Helvetica Neue", Helvetica, Roboto, Arial, sans-serif;
    margin: 0px 0px 32px;
    outline: rgb(51, 51, 51) none 0px;
}/*#H2_2*/

#H2_2:after {
    border-collapse: collapse;
    box-sizing: border-box;
    color: rgb(51, 51, 51);
    text-decoration: none solid rgb(51, 51, 51);
    text-size-adjust: 100%;
    column-rule-color: rgb(51, 51, 51);
    caret-color: rgb(51, 51, 51);
    border: 0px none rgb(51, 51, 51);
    font: normal normal 600 normal 24px / 24px "Proxima Nova", -apple-system, "Helvetica Neue", Helvetica, Roboto, Arial, sans-serif;
    outline: rgb(51, 51, 51) none 0px;
}/*#H2_2:after*/

#H2_2:before {
    border-collapse: collapse;
    box-sizing: border-box;
    color: rgb(51, 51, 51);
    text-decoration: none solid rgb(51, 51, 51);
    text-size-adjust: 100%;
    column-rule-color: rgb(51, 51, 51);
    caret-color: rgb(51, 51, 51);
    border: 0px none rgb(51, 51, 51);
    font: normal normal 600 normal 24px / 24px "Proxima Nova", -apple-system, "Helvetica Neue", Helvetica, Roboto, Arial, sans-serif;
    outline: rgb(51, 51, 51) none 0px;
}/*#H2_2:before*/

#P_3, #P_12, #P_35 {
    border-collapse: collapse;
    box-sizing: border-box;
    clear: both;
    color: rgb(51, 51, 51);
    height: 22px;
    text-align: left;
    text-decoration: none solid rgb(51, 51, 51);
    text-size-adjust: 100%;
    width: 707.188px;
    column-rule-color: rgb(51, 51, 51);
    perspective-origin: 353.594px 11px;
    transform-origin: 353.594px 11px;
    caret-color: rgb(51, 51, 51);
    border: 0px none rgb(51, 51, 51);
    font: normal normal 400 normal 18px / 22.5px "Proxima Nova", -apple-system, "Helvetica Neue", Helvetica, Roboto, Arial, sans-serif;
    margin: 0px 0px 10px;
    outline: rgb(51, 51, 51) none 0px;
    overflow: hidden;
}/*#P_3, #P_12, #P_35*/

#P_3:after, #P_12:after, #P_35:after {
    border-collapse: collapse;
    box-sizing: border-box;
    color: rgb(51, 51, 51);
    text-align: left;
    text-decoration: none solid rgb(51, 51, 51);
    text-size-adjust: 100%;
    column-rule-color: rgb(51, 51, 51);
    caret-color: rgb(51, 51, 51);
    border: 0px none rgb(51, 51, 51);
    font: normal normal 400 normal 18px / 22.5px "Proxima Nova", -apple-system, "Helvetica Neue", Helvetica, Roboto, Arial, sans-serif;
    outline: rgb(51, 51, 51) none 0px;
}/*#P_3:after, #P_12:after, #P_35:after*/

#P_3:before, #P_12:before, #P_35:before {
    border-collapse: collapse;
    box-sizing: border-box;
    color: rgb(51, 51, 51);
    text-align: left;
    text-decoration: none solid rgb(51, 51, 51);
    text-size-adjust: 100%;
    column-rule-color: rgb(51, 51, 51);
    caret-color: rgb(51, 51, 51);
    border: 0px none rgb(51, 51, 51);
    font: normal normal 400 normal 18px / 22.5px "Proxima Nova", -apple-system, "Helvetica Neue", Helvetica, Roboto, Arial, sans-serif;
    outline: rgb(51, 51, 51) none 0px;
}/*#P_3:before, #P_12:before, #P_35:before*/

#DIV_4 {
    border-collapse: collapse;
    bottom: 0px;
    box-sizing: border-box;
    color: rgb(51, 51, 51);
    float: left;
    height: 90px;
    left: 0px;
    min-height: 90px;
    position: relative;
    right: 0px;
    text-decoration: none solid rgb(51, 51, 51);
    text-size-adjust: 100%;
    top: 0px;
    width: 707.188px;
    column-rule-color: rgb(51, 51, 51);
    perspective-origin: 353.594px 45px;
    transform-origin: 353.594px 45px;
    caret-color: rgb(51, 51, 51);
    border: 0px none rgb(51, 51, 51);
    font: normal normal 400 normal 16px / 21.6px "Proxima Nova", -apple-system, "Helvetica Neue", Helvetica, Roboto, Arial, sans-serif;
    outline: rgb(51, 51, 51) none 0px;
}/*#DIV_4*/

#DIV_4:after {
    border-collapse: collapse;
    box-sizing: border-box;
    color: rgb(51, 51, 51);
    text-decoration: none solid rgb(51, 51, 51);
    text-size-adjust: 100%;
    column-rule-color: rgb(51, 51, 51);
    caret-color: rgb(51, 51, 51);
    border: 0px none rgb(51, 51, 51);
    font: normal normal 400 normal 16px / 21.6px "Proxima Nova", -apple-system, "Helvetica Neue", Helvetica, Roboto, Arial, sans-serif;
    outline: rgb(51, 51, 51) none 0px;
}/*#DIV_4:after*/

#DIV_4:before {
    border-collapse: collapse;
    box-sizing: border-box;
    color: rgb(51, 51, 51);
    text-decoration: none solid rgb(51, 51, 51);
    text-size-adjust: 100%;
    column-rule-color: rgb(51, 51, 51);
    caret-color: rgb(51, 51, 51);
    border: 0px none rgb(51, 51, 51);
    font: normal normal 400 normal 16px / 21.6px "Proxima Nova", -apple-system, "Helvetica Neue", Helvetica, Roboto, Arial, sans-serif;
    outline: rgb(51, 51, 51) none 0px;
}/*#DIV_4:before*/

#A_5 {
    border-collapse: collapse;
    box-sizing: border-box;
    color: rgb(52, 131, 250);
    display: block;
    float: left;
    height: 36px;
    text-align: center;
    text-decoration: none solid rgb(52, 131, 250);
    text-size-adjust: 100%;
    width: 207.938px;
    column-rule-color: rgb(52, 131, 250);
    perspective-origin: 103.969px 18px;
    transform-origin: 103.969px 18px;
    caret-color: rgb(52, 131, 250);
    border: 1px solid rgb(52, 131, 250);
    border-radius: 4px 4px 4px 4px;
    font: normal normal 400 normal 13px / 17.55px "Proxima Nova", -apple-system, "Helvetica Neue", Helvetica, Roboto, Arial, sans-serif;
    margin: 6px 8px 38px 0px;
    outline: rgb(52, 131, 250) none 0px;
    padding: 9px 13px;
}/*#A_5*/

#A_5:after {
    border-collapse: collapse;
    box-sizing: border-box;
    color: rgb(52, 131, 250);
    text-align: center;
    text-decoration: none solid rgb(52, 131, 250);
    text-size-adjust: 100%;
    column-rule-color: rgb(52, 131, 250);
    caret-color: rgb(52, 131, 250);
    border: 0px none rgb(52, 131, 250);
    font: normal normal 400 normal 13px / 17.55px "Proxima Nova", -apple-system, "Helvetica Neue", Helvetica, Roboto, Arial, sans-serif;
    outline: rgb(52, 131, 250) none 0px;
}/*#A_5:after*/

#A_5:before {
    border-collapse: collapse;
    box-sizing: border-box;
    color: rgb(52, 131, 250);
    text-align: center;
    text-decoration: none solid rgb(52, 131, 250);
    text-size-adjust: 100%;
    column-rule-color: rgb(52, 131, 250);
    caret-color: rgb(52, 131, 250);
    border: 0px none rgb(52, 131, 250);
    font: normal normal 400 normal 13px / 17.55px "Proxima Nova", -apple-system, "Helvetica Neue", Helvetica, Roboto, Arial, sans-serif;
    outline: rgb(52, 131, 250) none 0px;
}/*#A_5:before*/

#A_6 {
    border-collapse: collapse;
    box-sizing: border-box;
    color: rgb(52, 131, 250);
    display: block;
    float: left;
    height: 36px;
    text-align: center;
    text-decoration: none solid rgb(52, 131, 250);
    text-size-adjust: 100%;
    width: 76.0313px;
    column-rule-color: rgb(52, 131, 250);
    perspective-origin: 38px 18px;
    transform-origin: 38px 18px;
    caret-color: rgb(52, 131, 250);
    border: 1px solid rgb(52, 131, 250);
    border-radius: 4px 4px 4px 4px;
    font: normal normal 400 normal 13px / 17.55px "Proxima Nova", -apple-system, "Helvetica Neue", Helvetica, Roboto, Arial, sans-serif;
    margin: 6px 8px 38px 0px;
    outline: rgb(52, 131, 250) none 0px;
    padding: 9px 13px;
}/*#A_6*/

#A_6:after {
    border-collapse: collapse;
    box-sizing: border-box;
    color: rgb(52, 131, 250);
    text-align: center;
    text-decoration: none solid rgb(52, 131, 250);
    text-size-adjust: 100%;
    column-rule-color: rgb(52, 131, 250);
    caret-color: rgb(52, 131, 250);
    border: 0px none rgb(52, 131, 250);
    font: normal normal 400 normal 13px / 17.55px "Proxima Nova", -apple-system, "Helvetica Neue", Helvetica, Roboto, Arial, sans-serif;
    outline: rgb(52, 131, 250) none 0px;
}/*#A_6:after*/

#A_6:before {
    border-collapse: collapse;
    box-sizing: border-box;
    color: rgb(52, 131, 250);
    text-align: center;
    text-decoration: none solid rgb(52, 131, 250);
    text-size-adjust: 100%;
    column-rule-color: rgb(52, 131, 250);
    caret-color: rgb(52, 131, 250);
    border: 0px none rgb(52, 131, 250);
    font: normal normal 400 normal 13px / 17.55px "Proxima Nova", -apple-system, "Helvetica Neue", Helvetica, Roboto, Arial, sans-serif;
    outline: rgb(52, 131, 250) none 0px;
}/*#A_6:before*/

#DIV_7 {
    border-collapse: collapse;
    box-shadow: rgba(0, 0, 0, 0.15) 0px 3px 7px 0px, rgba(0, 0, 0, 0.2) 0px 0px 2px 0px;
    box-sizing: border-box;
    color: rgb(255, 255, 255);
    display: none;
    float: left;
    text-decoration: none solid rgb(255, 255, 255);
    text-size-adjust: 100%;
    width: 212px;
    column-rule-color: rgb(255, 255, 255);
    caret-color: rgb(255, 255, 255);
    background: rgb(52, 131, 250) none repeat scroll 0% 0% / auto padding-box border-box;
    border: 0px none rgb(255, 255, 255);
    border-radius: 4px 4px 4px 4px;
    font: normal normal 400 normal 16px / 21.6px "Proxima Nova", -apple-system, "Helvetica Neue", Helvetica, Roboto, Arial, sans-serif;
    margin: 0px 0px 0px 6px;
    outline: rgb(255, 255, 255) none 0px;
    padding: 16px;
}/*#DIV_7*/

#DIV_7:after {
    border-collapse: collapse;
    box-sizing: border-box;
    color: rgb(255, 255, 255);
    content: '""';
    display: block;
    left: -7px;
    position: absolute;
    text-decoration: none solid rgb(255, 255, 255);
    text-size-adjust: 100%;
    top: 33px;
    column-rule-color: rgb(255, 255, 255);
    caret-color: rgb(255, 255, 255);
    border-top: 8px solid rgba(0, 0, 0, 0);
    border-right: 8px solid rgb(52, 131, 250);
    border-bottom: 8px solid rgba(0, 0, 0, 0);
    border-left: 0px none rgb(255, 255, 255);
    font: normal normal 400 normal 16px / 21.6px "Proxima Nova", -apple-system, "Helvetica Neue", Helvetica, Roboto, Arial, sans-serif;
    outline: rgb(255, 255, 255) none 0px;
}/*#DIV_7:after*/

#DIV_7:before {
    border-collapse: collapse;
    box-sizing: border-box;
    color: rgb(255, 255, 255);
    text-decoration: none solid rgb(255, 255, 255);
    text-size-adjust: 100%;
    column-rule-color: rgb(255, 255, 255);
    caret-color: rgb(255, 255, 255);
    border: 0px none rgb(255, 255, 255);
    font: normal normal 400 normal 16px / 21.6px "Proxima Nova", -apple-system, "Helvetica Neue", Helvetica, Roboto, Arial, sans-serif;
    outline: rgb(255, 255, 255) none 0px;
}/*#DIV_7:before*/

#DIV_8 {
    border-collapse: collapse;
    box-sizing: border-box;
    color: rgb(255, 255, 255);
    text-decoration: none solid rgb(255, 255, 255);
    text-size-adjust: 100%;
    column-rule-color: rgb(255, 255, 255);
    caret-color: rgb(255, 255, 255);
    border: 0px none rgb(255, 255, 255);
    font: normal normal 400 normal 16px / 21.6px "Proxima Nova", -apple-system, "Helvetica Neue", Helvetica, Roboto, Arial, sans-serif;
    outline: rgb(255, 255, 255) none 0px;
}/*#DIV_8*/

#DIV_8:after {
    border-collapse: collapse;
    box-sizing: border-box;
    color: rgb(255, 255, 255);
    text-decoration: none solid rgb(255, 255, 255);
    text-size-adjust: 100%;
    column-rule-color: rgb(255, 255, 255);
    caret-color: rgb(255, 255, 255);
    border: 0px none rgb(255, 255, 255);
    font: normal normal 400 normal 16px / 21.6px "Proxima Nova", -apple-system, "Helvetica Neue", Helvetica, Roboto, Arial, sans-serif;
    outline: rgb(255, 255, 255) none 0px;
}/*#DIV_8:after*/

#DIV_8:before {
    border-collapse: collapse;
    box-sizing: border-box;
    color: rgb(255, 255, 255);
    text-decoration: none solid rgb(255, 255, 255);
    text-size-adjust: 100%;
    column-rule-color: rgb(255, 255, 255);
    caret-color: rgb(255, 255, 255);
    border: 0px none rgb(255, 255, 255);
    font: normal normal 400 normal 16px / 21.6px "Proxima Nova", -apple-system, "Helvetica Neue", Helvetica, Roboto, Arial, sans-serif;
    outline: rgb(255, 255, 255) none 0px;
}/*#DIV_8:before*/

#P_9 {
    border-collapse: collapse;
    box-sizing: border-box;
    color: rgb(255, 255, 255);
    text-decoration: none solid rgb(255, 255, 255);
    text-size-adjust: 100%;
    column-rule-color: rgb(255, 255, 255);
    caret-color: rgb(255, 255, 255);
    border: 0px none rgb(255, 255, 255);
    font: normal normal 600 normal 14px / 14px "Proxima Nova", -apple-system, "Helvetica Neue", Helvetica, Roboto, Arial, sans-serif;
    margin: 0px 0px 5px;
    outline: rgb(255, 255, 255) none 0px;
}/*#P_9*/

#P_9:after {
    border-collapse: collapse;
    box-sizing: border-box;
    color: rgb(255, 255, 255);
    text-decoration: none solid rgb(255, 255, 255);
    text-size-adjust: 100%;
    column-rule-color: rgb(255, 255, 255);
    caret-color: rgb(255, 255, 255);
    border: 0px none rgb(255, 255, 255);
    font: normal normal 600 normal 14px / 14px "Proxima Nova", -apple-system, "Helvetica Neue", Helvetica, Roboto, Arial, sans-serif;
    outline: rgb(255, 255, 255) none 0px;
}/*#P_9:after*/

#P_9:before {
    border-collapse: collapse;
    box-sizing: border-box;
    color: rgb(255, 255, 255);
    text-decoration: none solid rgb(255, 255, 255);
    text-size-adjust: 100%;
    column-rule-color: rgb(255, 255, 255);
    caret-color: rgb(255, 255, 255);
    border: 0px none rgb(255, 255, 255);
    font: normal normal 600 normal 14px / 14px "Proxima Nova", -apple-system, "Helvetica Neue", Helvetica, Roboto, Arial, sans-serif;
    outline: rgb(255, 255, 255) none 0px;
}/*#P_9:before*/

#P_10 {
    border-collapse: collapse;
    box-sizing: border-box;
    color: rgb(255, 255, 255);
    text-decoration: none solid rgb(255, 255, 255);
    text-size-adjust: 100%;
    column-rule-color: rgb(255, 255, 255);
    caret-color: rgb(255, 255, 255);
    border: 0px none rgb(255, 255, 255);
    font: normal normal 300 normal 14px / 14px "Proxima Nova", -apple-system, "Helvetica Neue", Helvetica, Roboto, Arial, sans-serif;
    margin: 0px;
    outline: rgb(255, 255, 255) none 0px;
}/*#P_10*/

#P_10:after {
    border-collapse: collapse;
    box-sizing: border-box;
    color: rgb(255, 255, 255);
    text-decoration: none solid rgb(255, 255, 255);
    text-size-adjust: 100%;
    column-rule-color: rgb(255, 255, 255);
    caret-color: rgb(255, 255, 255);
    border: 0px none rgb(255, 255, 255);
    font: normal normal 300 normal 14px / 14px "Proxima Nova", -apple-system, "Helvetica Neue", Helvetica, Roboto, Arial, sans-serif;
    outline: rgb(255, 255, 255) none 0px;
}/*#P_10:after*/

#P_10:before {
    border-collapse: collapse;
    box-sizing: border-box;
    color: rgb(255, 255, 255);
    text-decoration: none solid rgb(255, 255, 255);
    text-size-adjust: 100%;
    column-rule-color: rgb(255, 255, 255);
    caret-color: rgb(255, 255, 255);
    border: 0px none rgb(255, 255, 255);
    font: normal normal 300 normal 14px / 14px "Proxima Nova", -apple-system, "Helvetica Neue", Helvetica, Roboto, Arial, sans-serif;
    outline: rgb(255, 255, 255) none 0px;
}/*#P_10:before*/

#SPAN_11 {
    border-collapse: collapse;
    box-sizing: border-box;
    color: rgb(255, 255, 255);
    cursor: pointer;
    display: block;
    height: 12px;
    position: absolute;
    right: 16px;
    text-decoration: none solid rgb(255, 255, 255);
    text-size-adjust: 100%;
    top: 17px;
    width: 12px;
    column-rule-color: rgb(255, 255, 255);
    caret-color: rgb(255, 255, 255);
    border: 0px none rgb(255, 255, 255);
    font: normal normal 400 normal 16px / 21.6px "Proxima Nova", -apple-system, "Helvetica Neue", Helvetica, Roboto, Arial, sans-serif;
    outline: rgb(255, 255, 255) none 0px;
}/*#SPAN_11*/

#SPAN_11:after {
    border-collapse: collapse;
    box-sizing: border-box;
    color: rgb(255, 255, 255);
    content: '""';
    cursor: pointer;
    display: block;
    height: 12px;
    left: 6px;
    position: absolute;
    text-decoration: none solid rgb(255, 255, 255);
    text-size-adjust: 100%;
    top: 0px;
    width: 1px;
    column-rule-color: rgb(255, 255, 255);
    caret-color: rgb(255, 255, 255);
    background: rgb(255, 255, 255) none repeat scroll 0% 0% / auto padding-box border-box;
    border: 0px none rgb(255, 255, 255);
    font: normal normal 400 normal 16px / 21.6px "Proxima Nova", -apple-system, "Helvetica Neue", Helvetica, Roboto, Arial, sans-serif;
    outline: rgb(255, 255, 255) none 0px;
}/*#SPAN_11:after*/

#SPAN_11:before {
    border-collapse: collapse;
    box-sizing: border-box;
    color: rgb(255, 255, 255);
    content: '""';
    cursor: pointer;
    display: block;
    height: 12px;
    left: 6px;
    position: absolute;
    text-decoration: none solid rgb(255, 255, 255);
    text-size-adjust: 100%;
    top: 0px;
    width: 1px;
    column-rule-color: rgb(255, 255, 255);
    caret-color: rgb(255, 255, 255);
    background: rgb(255, 255, 255) none repeat scroll 0% 0% / auto padding-box border-box;
    border: 0px none rgb(255, 255, 255);
    font: normal normal 400 normal 16px / 21.6px "Proxima Nova", -apple-system, "Helvetica Neue", Helvetica, Roboto, Arial, sans-serif;
    outline: rgb(255, 255, 255) none 0px;
}/*#SPAN_11:before*/

#FORM_13 {
    border-collapse: collapse;
    box-sizing: border-box;
    color: rgb(51, 51, 51);
    height: 96px;
    text-decoration: none solid rgb(51, 51, 51);
    text-size-adjust: 100%;
    width: 707.188px;
    column-rule-color: rgb(51, 51, 51);
    perspective-origin: 353.594px 48px;
    transform-origin: 353.594px 48px;
    caret-color: rgb(51, 51, 51);
    border: 0px none rgb(51, 51, 51);
    font: normal normal 400 normal 16px / 21.6px "Proxima Nova", -apple-system, "Helvetica Neue", Helvetica, Roboto, Arial, sans-serif;
    margin: 0px 0px 48px;
    outline: rgb(51, 51, 51) none 0px;
}/*#FORM_13*/

#FORM_13:after {
    border-collapse: collapse;
    box-sizing: border-box;
    color: rgb(51, 51, 51);
    text-decoration: none solid rgb(51, 51, 51);
    text-size-adjust: 100%;
    column-rule-color: rgb(51, 51, 51);
    caret-color: rgb(51, 51, 51);
    border: 0px none rgb(51, 51, 51);
    font: normal normal 400 normal 16px / 21.6px "Proxima Nova", -apple-system, "Helvetica Neue", Helvetica, Roboto, Arial, sans-serif;
    outline: rgb(51, 51, 51) none 0px;
}/*#FORM_13:after*/

#FORM_13:before {
    border-collapse: collapse;
    box-sizing: border-box;
    color: rgb(51, 51, 51);
    text-decoration: none solid rgb(51, 51, 51);
    text-size-adjust: 100%;
    column-rule-color: rgb(51, 51, 51);
    caret-color: rgb(51, 51, 51);
    border: 0px none rgb(51, 51, 51);
    font: normal normal 400 normal 16px / 21.6px "Proxima Nova", -apple-system, "Helvetica Neue", Helvetica, Roboto, Arial, sans-serif;
    outline: rgb(51, 51, 51) none 0px;
}/*#FORM_13:before*/

#DIV_14 {
    border-collapse: collapse;
    box-sizing: border-box;
    color: rgb(51, 51, 51);
    display: flex;
    height: 96px;
    text-decoration: none solid rgb(51, 51, 51);
    text-size-adjust: 100%;
    width: 707.188px;
    column-rule-color: rgb(51, 51, 51);
    perspective-origin: 353.594px 48px;
    transform-origin: 353.594px 48px;
    caret-color: rgb(51, 51, 51);
    border: 0px none rgb(51, 51, 51);
    font: normal normal 400 normal 16px / 21.6px "Proxima Nova", -apple-system, "Helvetica Neue", Helvetica, Roboto, Arial, sans-serif;
    outline: rgb(51, 51, 51) none 0px;
}/*#DIV_14*/

#DIV_14:after {
    border-collapse: collapse;
    box-sizing: border-box;
    color: rgb(51, 51, 51);
    display: block;
    text-decoration: none solid rgb(51, 51, 51);
    text-size-adjust: 100%;
    column-rule-color: rgb(51, 51, 51);
    caret-color: rgb(51, 51, 51);
    border: 0px none rgb(51, 51, 51);
    font: normal normal 400 normal 16px / 21.6px "Proxima Nova", -apple-system, "Helvetica Neue", Helvetica, Roboto, Arial, sans-serif;
    outline: rgb(51, 51, 51) none 0px;
}/*#DIV_14:after*/

#DIV_14:before {
    border-collapse: collapse;
    box-sizing: border-box;
    color: rgb(51, 51, 51);
    display: block;
    text-decoration: none solid rgb(51, 51, 51);
    text-size-adjust: 100%;
    column-rule-color: rgb(51, 51, 51);
    caret-color: rgb(51, 51, 51);
    border: 0px none rgb(51, 51, 51);
    font: normal normal 400 normal 16px / 21.6px "Proxima Nova", -apple-system, "Helvetica Neue", Helvetica, Roboto, Arial, sans-serif;
    outline: rgb(51, 51, 51) none 0px;
}/*#DIV_14:before*/

#DIV_15 {
    border-collapse: collapse;
    bottom: 0px;
    box-sizing: border-box;
    color: rgb(51, 51, 51);
    height: 96px;
    left: 0px;
    min-height: auto;
    min-width: auto;
    position: relative;
    right: 0px;
    text-decoration: none solid rgb(51, 51, 51);
    text-size-adjust: 100%;
    top: 0px;
    width: 572.25px;
    column-rule-color: rgb(51, 51, 51);
    perspective-origin: 286.125px 48px;
    transform-origin: 286.125px 48px;
    caret-color: rgb(51, 51, 51);
    border: 0px none rgb(51, 51, 51);
    font: normal normal 400 normal 16px / 21.6px "Proxima Nova", -apple-system, "Helvetica Neue", Helvetica, Roboto, Arial, sans-serif;
    outline: rgb(51, 51, 51) none 0px;
}/*#DIV_15*/

#DIV_15:after {
    border-collapse: collapse;
    box-sizing: border-box;
    color: rgb(51, 51, 51);
    min-height: auto;
    min-width: auto;
    text-decoration: none solid rgb(51, 51, 51);
    text-size-adjust: 100%;
    column-rule-color: rgb(51, 51, 51);
    caret-color: rgb(51, 51, 51);
    border: 0px none rgb(51, 51, 51);
    font: normal normal 400 normal 16px / 21.6px "Proxima Nova", -apple-system, "Helvetica Neue", Helvetica, Roboto, Arial, sans-serif;
    outline: rgb(51, 51, 51) none 0px;
}/*#DIV_15:after*/

#DIV_15:before {
    border-collapse: collapse;
    box-sizing: border-box;
    color: rgb(51, 51, 51);
    min-height: auto;
    min-width: auto;
    text-decoration: none solid rgb(51, 51, 51);
    text-size-adjust: 100%;
    column-rule-color: rgb(51, 51, 51);
    caret-color: rgb(51, 51, 51);
    border: 0px none rgb(51, 51, 51);
    font: normal normal 400 normal 16px / 21.6px "Proxima Nova", -apple-system, "Helvetica Neue", Helvetica, Roboto, Arial, sans-serif;
    outline: rgb(51, 51, 51) none 0px;
}/*#DIV_15:before*/

#DIV_16 {
    border-collapse: collapse;
    box-sizing: border-box;
    color: rgb(51, 51, 51);
    height: 62px;
    text-decoration: none solid rgb(51, 51, 51);
    text-size-adjust: 100%;
    width: 572.25px;
    column-rule-color: rgb(51, 51, 51);
    perspective-origin: 286.125px 31px;
    transform-origin: 286.125px 31px;
    caret-color: rgb(51, 51, 51);
    border: 0px none rgb(51, 51, 51);
    font: normal normal 400 normal 16px / 21.6px "Proxima Nova", -apple-system, "Helvetica Neue", Helvetica, Roboto, Arial, sans-serif;
    outline: rgb(51, 51, 51) none 0px;
}/*#DIV_16*/

#DIV_16:after {
    border-collapse: collapse;
    box-sizing: border-box;
    color: rgb(51, 51, 51);
    text-decoration: none solid rgb(51, 51, 51);
    text-size-adjust: 100%;
    column-rule-color: rgb(51, 51, 51);
    caret-color: rgb(51, 51, 51);
    border: 0px none rgb(51, 51, 51);
    font: normal normal 400 normal 16px / 21.6px "Proxima Nova", -apple-system, "Helvetica Neue", Helvetica, Roboto, Arial, sans-serif;
    outline: rgb(51, 51, 51) none 0px;
}/*#DIV_16:after*/

#DIV_16:before {
    border-collapse: collapse;
    box-sizing: border-box;
    color: rgb(51, 51, 51);
    text-decoration: none solid rgb(51, 51, 51);
    text-size-adjust: 100%;
    column-rule-color: rgb(51, 51, 51);
    caret-color: rgb(51, 51, 51);
    border: 0px none rgb(51, 51, 51);
    font: normal normal 400 normal 16px / 21.6px "Proxima Nova", -apple-system, "Helvetica Neue", Helvetica, Roboto, Arial, sans-serif;
    outline: rgb(51, 51, 51) none 0px;
}/*#DIV_16:before*/

#TEXTAREA_17 {
    border-collapse: collapse;
    color: rgb(51, 51, 51);
    height: 48px;
    resize: vertical;
    text-decoration: none solid rgb(51, 51, 51);
    text-size-adjust: 100%;
    width: 572.25px;
    column-rule-color: rgb(51, 51, 51);
    perspective-origin: 286.125px 24px;
    transform-origin: 286.125px 24px;
    caret-color: rgb(51, 51, 51);
    border: 1px solid rgb(221, 221, 221);
    border-radius: 3px 3px 3px 3px;
    font: normal normal 400 normal 14px / 17.5px "Proxima Nova", -apple-system, "Helvetica Neue", Helvetica, Roboto, Arial, sans-serif;
    margin: 5px 0px;
    outline: rgb(51, 51, 51) none 0px;
    padding: 14px 16px;
}/*#TEXTAREA_17*/

#TEXTAREA_17:after {
    border-collapse: collapse;
    box-sizing: border-box;
    color: rgb(51, 51, 51);
    text-decoration: none solid rgb(51, 51, 51);
    text-size-adjust: 100%;
    column-rule-color: rgb(51, 51, 51);
    caret-color: rgb(51, 51, 51);
    border: 0px none rgb(51, 51, 51);
    font: normal normal 400 normal 14px / 17.5px "Proxima Nova", -apple-system, "Helvetica Neue", Helvetica, Roboto, Arial, sans-serif;
    outline: rgb(51, 51, 51) none 0px;
}/*#TEXTAREA_17:after*/

#TEXTAREA_17:before {
    border-collapse: collapse;
    box-sizing: border-box;
    color: rgb(51, 51, 51);
    text-decoration: none solid rgb(51, 51, 51);
    text-size-adjust: 100%;
    column-rule-color: rgb(51, 51, 51);
    caret-color: rgb(51, 51, 51);
    border: 0px none rgb(51, 51, 51);
    font: normal normal 400 normal 14px / 17.5px "Proxima Nova", -apple-system, "Helvetica Neue", Helvetica, Roboto, Arial, sans-serif;
    outline: rgb(51, 51, 51) none 0px;
}/*#TEXTAREA_17:before*/

#DIV_18 {
    border-collapse: collapse;
    box-sizing: border-box;
    color: rgb(51, 51, 51);
    height: 18px;
    text-decoration: none solid rgb(51, 51, 51);
    text-size-adjust: 100%;
    width: 572.25px;
    column-rule-color: rgb(51, 51, 51);
    perspective-origin: 286.125px 9px;
    transform-origin: 286.125px 9px;
    caret-color: rgb(51, 51, 51);
    border: 0px none rgb(51, 51, 51);
    font: normal normal 400 normal 16px / 21.6px "Proxima Nova", -apple-system, "Helvetica Neue", Helvetica, Roboto, Arial, sans-serif;
    margin: 0px 0px 16px;
    outline: rgb(51, 51, 51) none 0px;
}/*#DIV_18*/

#DIV_18:after {
    border-collapse: collapse;
    box-sizing: border-box;
    color: rgb(51, 51, 51);
    text-decoration: none solid rgb(51, 51, 51);
    text-size-adjust: 100%;
    column-rule-color: rgb(51, 51, 51);
    caret-color: rgb(51, 51, 51);
    border: 0px none rgb(51, 51, 51);
    font: normal normal 400 normal 16px / 21.6px "Proxima Nova", -apple-system, "Helvetica Neue", Helvetica, Roboto, Arial, sans-serif;
    outline: rgb(51, 51, 51) none 0px;
}/*#DIV_18:after*/

#DIV_18:before {
    border-collapse: collapse;
    box-sizing: border-box;
    color: rgb(51, 51, 51);
    text-decoration: none solid rgb(51, 51, 51);
    text-size-adjust: 100%;
    column-rule-color: rgb(51, 51, 51);
    caret-color: rgb(51, 51, 51);
    border: 0px none rgb(51, 51, 51);
    font: normal normal 400 normal 16px / 21.6px "Proxima Nova", -apple-system, "Helvetica Neue", Helvetica, Roboto, Arial, sans-serif;
    outline: rgb(51, 51, 51) none 0px;
}/*#DIV_18:before*/

#P_19 {
    border-collapse: collapse;
    box-sizing: border-box;
    color: rgb(102, 102, 102);
    height: 18px;
    text-decoration: none solid rgb(102, 102, 102);
    text-size-adjust: 100%;
    width: 572.25px;
    column-rule-color: rgb(102, 102, 102);
    perspective-origin: 286.125px 9px;
    transform-origin: 286.125px 9px;
    caret-color: rgb(102, 102, 102);
    border: 0px none rgb(102, 102, 102);
    font: normal normal 400 normal 14px / 18.9px "Proxima Nova", -apple-system, "Helvetica Neue", Helvetica, Roboto, Arial, sans-serif;
    margin: 0px;
    outline: rgb(102, 102, 102) none 0px;
}/*#P_19*/

#P_19:after {
    border-collapse: collapse;
    box-sizing: border-box;
    color: rgb(102, 102, 102);
    text-decoration: none solid rgb(102, 102, 102);
    text-size-adjust: 100%;
    column-rule-color: rgb(102, 102, 102);
    caret-color: rgb(102, 102, 102);
    border: 0px none rgb(102, 102, 102);
    font: normal normal 400 normal 14px / 18.9px "Proxima Nova", -apple-system, "Helvetica Neue", Helvetica, Roboto, Arial, sans-serif;
    outline: rgb(102, 102, 102) none 0px;
}/*#P_19:after*/

#P_19:before {
    border-collapse: collapse;
    box-sizing: border-box;
    color: rgb(102, 102, 102);
    text-decoration: none solid rgb(102, 102, 102);
    text-size-adjust: 100%;
    column-rule-color: rgb(102, 102, 102);
    caret-color: rgb(102, 102, 102);
    border: 0px none rgb(102, 102, 102);
    font: normal normal 400 normal 14px / 18.9px "Proxima Nova", -apple-system, "Helvetica Neue", Helvetica, Roboto, Arial, sans-serif;
    outline: rgb(102, 102, 102) none 0px;
}/*#P_19:before*/

#STRONG_20 {
    border-collapse: collapse;
    box-sizing: border-box;
    color: rgb(102, 102, 102);
    text-decoration: none solid rgb(102, 102, 102);
    text-size-adjust: 100%;
    column-rule-color: rgb(102, 102, 102);
    perspective-origin: 0px 0px;
    transform-origin: 0px 0px;
    caret-color: rgb(102, 102, 102);
    border: 0px none rgb(102, 102, 102);
    font: normal normal 400 normal 14px / 18.9px "Proxima Nova", -apple-system, "Helvetica Neue", Helvetica, Roboto, Arial, sans-serif;
    outline: rgb(102, 102, 102) none 0px;
}/*#STRONG_20*/

#STRONG_20:after {
    border-collapse: collapse;
    box-sizing: border-box;
    color: rgb(102, 102, 102);
    text-decoration: none solid rgb(102, 102, 102);
    text-size-adjust: 100%;
    column-rule-color: rgb(102, 102, 102);
    caret-color: rgb(102, 102, 102);
    border: 0px none rgb(102, 102, 102);
    font: normal normal 400 normal 14px / 18.9px "Proxima Nova", -apple-system, "Helvetica Neue", Helvetica, Roboto, Arial, sans-serif;
    outline: rgb(102, 102, 102) none 0px;
}/*#STRONG_20:after*/

#STRONG_20:before {
    border-collapse: collapse;
    box-sizing: border-box;
    color: rgb(102, 102, 102);
    text-decoration: none solid rgb(102, 102, 102);
    text-size-adjust: 100%;
    column-rule-color: rgb(102, 102, 102);
    caret-color: rgb(102, 102, 102);
    border: 0px none rgb(102, 102, 102);
    font: normal normal 400 normal 14px / 18.9px "Proxima Nova", -apple-system, "Helvetica Neue", Helvetica, Roboto, Arial, sans-serif;
    outline: rgb(102, 102, 102) none 0px;
}/*#STRONG_20:before*/

#DIV_21 {
    border-collapse: collapse;
    box-sizing: border-box;
    color: rgb(51, 51, 51);
    height: 96px;
    min-height: auto;
    min-width: auto;
    text-decoration: none solid rgb(51, 51, 51);
    text-size-adjust: 100%;
    width: 134.938px;
    column-rule-color: rgb(51, 51, 51);
    perspective-origin: 67.4688px 48px;
    transform-origin: 67.4688px 48px;
    caret-color: rgb(51, 51, 51);
    border: 0px none rgb(51, 51, 51);
    font: normal normal 400 normal 16px / 21.6px "Proxima Nova", -apple-system, "Helvetica Neue", Helvetica, Roboto, Arial, sans-serif;
    outline: rgb(51, 51, 51) none 0px;
}/*#DIV_21*/

#DIV_21:after {
    border-collapse: collapse;
    box-sizing: border-box;
    color: rgb(51, 51, 51);
    min-height: auto;
    min-width: auto;
    text-decoration: none solid rgb(51, 51, 51);
    text-size-adjust: 100%;
    column-rule-color: rgb(51, 51, 51);
    caret-color: rgb(51, 51, 51);
    border: 0px none rgb(51, 51, 51);
    font: normal normal 400 normal 16px / 21.6px "Proxima Nova", -apple-system, "Helvetica Neue", Helvetica, Roboto, Arial, sans-serif;
    outline: rgb(51, 51, 51) none 0px;
}/*#DIV_21:after*/

#DIV_21:before {
    border-collapse: collapse;
    box-sizing: border-box;
    color: rgb(51, 51, 51);
    min-height: auto;
    min-width: auto;
    text-decoration: none solid rgb(51, 51, 51);
    text-size-adjust: 100%;
    column-rule-color: rgb(51, 51, 51);
    caret-color: rgb(51, 51, 51);
    border: 0px none rgb(51, 51, 51);
    font: normal normal 400 normal 16px / 21.6px "Proxima Nova", -apple-system, "Helvetica Neue", Helvetica, Roboto, Arial, sans-serif;
    outline: rgb(51, 51, 51) none 0px;
}/*#DIV_21:before*/

#INPUT_22 {
    border-collapse: collapse;
    color: rgb(255, 255, 255);
    cursor: pointer;
    height: 50px;
    text-align: center;
    text-decoration: none solid rgb(255, 255, 255);
    text-size-adjust: 100%;
    white-space: pre;
    width: 118.938px;
    column-rule-color: rgb(255, 255, 255);
    align-items: flex-start;
    perspective-origin: 59.4688px 25px;
    transform-origin: 59.4688px 25px;
    user-select: none;
    caret-color: rgb(255, 255, 255);
    background: rgb(52, 131, 250) none repeat scroll 0% 0% / auto padding-box border-box;
    border: 1px solid rgb(52, 131, 250);
    border-radius: 4px 4px 4px 4px;
    font: normal normal 400 normal 16px / normal "Proxima Nova", -apple-system, "Helvetica Neue", Helvetica, Roboto, Arial, sans-serif;
    margin: 5px 0px 0px 16px;
    outline: rgb(255, 255, 255) none 0px;
    padding: 12px 24px;
}/*#INPUT_22*/

#INPUT_22:after {
    border-collapse: collapse;
    box-sizing: border-box;
    color: rgb(255, 255, 255);
    cursor: pointer;
    text-align: center;
    text-decoration: none solid rgb(255, 255, 255);
    text-size-adjust: 100%;
    white-space: pre;
    column-rule-color: rgb(255, 255, 255);
    user-select: none;
    caret-color: rgb(255, 255, 255);
    border: 0px none rgb(255, 255, 255);
    font: normal normal 400 normal 16px / normal "Proxima Nova", -apple-system, "Helvetica Neue", Helvetica, Roboto, Arial, sans-serif;
    outline: rgb(255, 255, 255) none 0px;
}/*#INPUT_22:after*/

#INPUT_22:before {
    border-collapse: collapse;
    box-sizing: border-box;
    color: rgb(255, 255, 255);
    cursor: pointer;
    text-align: center;
    text-decoration: none solid rgb(255, 255, 255);
    text-size-adjust: 100%;
    white-space: pre;
    column-rule-color: rgb(255, 255, 255);
    user-select: none;
    caret-color: rgb(255, 255, 255);
    border: 0px none rgb(255, 255, 255);
    font: normal normal 400 normal 16px / normal "Proxima Nova", -apple-system, "Helvetica Neue", Helvetica, Roboto, Arial, sans-serif;
    outline: rgb(255, 255, 255) none 0px;
}/*#INPUT_22:before*/

#INPUT_23, #INPUT_24, #INPUT_26 {
    border-collapse: collapse;
    cursor: default;
    display: none;
    text-size-adjust: 100%;
    background: rgba(0, 0, 0, 0) none repeat scroll 0% 0% / auto padding-box border-box;
    border: 0px none rgb(0, 0, 0);
    font: normal normal 400 normal 16px / normal "Proxima Nova", -apple-system, "Helvetica Neue", Helvetica, Roboto, Arial, sans-serif;
    padding: 0px;
}/*#INPUT_23, #INPUT_24, #INPUT_26*/

#INPUT_23:after, #INPUT_24:after, #INPUT_26:after {
    border-collapse: collapse;
    box-sizing: border-box;
    cursor: default;
    text-size-adjust: 100%;
    font: normal normal 400 normal 16px / normal "Proxima Nova", -apple-system, "Helvetica Neue", Helvetica, Roboto, Arial, sans-serif;
}/*#INPUT_23:after, #INPUT_24:after, #INPUT_26:after*/

#INPUT_23:before, #INPUT_24:before, #INPUT_26:before {
    border-collapse: collapse;
    box-sizing: border-box;
    cursor: default;
    text-size-adjust: 100%;
    font: normal normal 400 normal 16px / normal "Proxima Nova", -apple-system, "Helvetica Neue", Helvetica, Roboto, Arial, sans-serif;
}/*#INPUT_23:before, #INPUT_24:before, #INPUT_26:before*/

#INPUT_25, #INPUT_27 {
    border-collapse: collapse;
    cursor: default;
    display: none;
    text-size-adjust: 100%;
    background: rgba(0, 0, 0, 0) none repeat scroll 0% 0% / auto padding-box border-box;
    border: 0px none rgb(0, 0, 0);
    font: normal normal 400 normal 16px / normal "Proxima Nova", -apple-system, "Helvetica Neue", Helvetica, Roboto, Arial, sans-serif;
    padding: 0px;
}/*#INPUT_25, #INPUT_27*/

#INPUT_25:after, #INPUT_27:after {
    border-collapse: collapse;
    box-sizing: border-box;
    cursor: default;
    text-size-adjust: 100%;
    font: normal normal 400 normal 16px / normal "Proxima Nova", -apple-system, "Helvetica Neue", Helvetica, Roboto, Arial, sans-serif;
}/*#INPUT_25:after, #INPUT_27:after*/

#INPUT_25:before, #INPUT_27:before {
    border-collapse: collapse;
    box-sizing: border-box;
    cursor: default;
    text-size-adjust: 100%;
    font: normal normal 400 normal 16px / normal "Proxima Nova", -apple-system, "Helvetica Neue", Helvetica, Roboto, Arial, sans-serif;
}/*#INPUT_25:before, #INPUT_27:before*/

#INPUT_28 {
    border-collapse: collapse;
    cursor: default;
    display: none;
    height: 12px;
    min-height: 12px;
    min-width: 12px;
    text-size-adjust: 100%;
    width: 12px;
    background: rgba(0, 0, 0, 0) none repeat scroll 0% 0% / auto padding-box border-box;
    border: 0px none rgb(0, 0, 0);
    font: normal normal 400 normal 16px / normal "Proxima Nova", -apple-system, "Helvetica Neue", Helvetica, Roboto, Arial, sans-serif;
    padding: 0px;
}/*#INPUT_28*/

#INPUT_28:after {
    border-collapse: collapse;
    box-sizing: border-box;
    cursor: default;
    text-size-adjust: 100%;
    font: normal normal 400 normal 16px / normal "Proxima Nova", -apple-system, "Helvetica Neue", Helvetica, Roboto, Arial, sans-serif;
}/*#INPUT_28:after*/

#INPUT_28:before {
    border-collapse: collapse;
    box-sizing: border-box;
    cursor: default;
    text-size-adjust: 100%;
    font: normal normal 400 normal 16px / normal "Proxima Nova", -apple-system, "Helvetica Neue", Helvetica, Roboto, Arial, sans-serif;
}/*#INPUT_28:before*/

#SCRIPT_29, #SCRIPT_30 {
    border-collapse: collapse;
    box-sizing: border-box;
    color: rgb(51, 51, 51);
    text-decoration: none solid rgb(51, 51, 51);
    text-size-adjust: 100%;
    column-rule-color: rgb(51, 51, 51);
    caret-color: rgb(51, 51, 51);
    border: 0px none rgb(51, 51, 51);
    font: normal normal 400 normal 16px / 21.6px "Proxima Nova", -apple-system, "Helvetica Neue", Helvetica, Roboto, Arial, sans-serif;
    outline: rgb(51, 51, 51) none 0px;
}/*#SCRIPT_29, #SCRIPT_30*/

#SCRIPT_29:after, #SCRIPT_30:after {
    border-collapse: collapse;
    box-sizing: border-box;
    color: rgb(51, 51, 51);
    text-decoration: none solid rgb(51, 51, 51);
    text-size-adjust: 100%;
    column-rule-color: rgb(51, 51, 51);
    caret-color: rgb(51, 51, 51);
    border: 0px none rgb(51, 51, 51);
    font: normal normal 400 normal 16px / 21.6px "Proxima Nova", -apple-system, "Helvetica Neue", Helvetica, Roboto, Arial, sans-serif;
    outline: rgb(51, 51, 51) none 0px;
}/*#SCRIPT_29:after, #SCRIPT_30:after*/

#SCRIPT_29:before, #SCRIPT_30:before {
    border-collapse: collapse;
    box-sizing: border-box;
    color: rgb(51, 51, 51);
    text-decoration: none solid rgb(51, 51, 51);
    text-size-adjust: 100%;
    column-rule-color: rgb(51, 51, 51);
    caret-color: rgb(51, 51, 51);
    border: 0px none rgb(51, 51, 51);
    font: normal normal 400 normal 16px / 21.6px "Proxima Nova", -apple-system, "Helvetica Neue", Helvetica, Roboto, Arial, sans-serif;
    outline: rgb(51, 51, 51) none 0px;
}/*#SCRIPT_29:before, #SCRIPT_30:before*/

#DIV_31 {
    border-collapse: collapse;
    box-sizing: border-box;
    color: rgb(51, 51, 51);
    display: none;
    position: relative;
    text-decoration: none solid rgb(51, 51, 51);
    text-size-adjust: 100%;
    column-rule-color: rgb(51, 51, 51);
    caret-color: rgb(51, 51, 51);
    border: 0px none rgb(51, 51, 51);
    font: normal normal 400 normal 16px / 21.6px "Proxima Nova", -apple-system, "Helvetica Neue", Helvetica, Roboto, Arial, sans-serif;
    outline: rgb(51, 51, 51) none 0px;
}/*#DIV_31*/

#DIV_31:after {
    border-collapse: collapse;
    box-sizing: border-box;
    color: rgb(51, 51, 51);
    text-decoration: none solid rgb(51, 51, 51);
    text-size-adjust: 100%;
    column-rule-color: rgb(51, 51, 51);
    caret-color: rgb(51, 51, 51);
    border: 0px none rgb(51, 51, 51);
    font: normal normal 400 normal 16px / 21.6px "Proxima Nova", -apple-system, "Helvetica Neue", Helvetica, Roboto, Arial, sans-serif;
    outline: rgb(51, 51, 51) none 0px;
}/*#DIV_31:after*/

#DIV_31:before {
    border-collapse: collapse;
    box-sizing: border-box;
    color: rgb(51, 51, 51);
    text-decoration: none solid rgb(51, 51, 51);
    text-size-adjust: 100%;
    column-rule-color: rgb(51, 51, 51);
    caret-color: rgb(51, 51, 51);
    border: 0px none rgb(51, 51, 51);
    font: normal normal 400 normal 16px / 21.6px "Proxima Nova", -apple-system, "Helvetica Neue", Helvetica, Roboto, Arial, sans-serif;
    outline: rgb(51, 51, 51) none 0px;
}/*#DIV_31:before*/

#P_32 {
    border-collapse: collapse;
    box-sizing: border-box;
    clear: both;
    color: rgb(51, 51, 51);
    text-align: left;
    text-decoration: none solid rgb(51, 51, 51);
    text-size-adjust: 100%;
    column-rule-color: rgb(51, 51, 51);
    caret-color: rgb(51, 51, 51);
    border: 0px none rgb(51, 51, 51);
    font: normal normal 400 normal 18px / 22.5px "Proxima Nova", -apple-system, "Helvetica Neue", Helvetica, Roboto, Arial, sans-serif;
    margin: 0px 0px 10px;
    outline: rgb(51, 51, 51) none 0px;
    overflow: hidden;
}/*#P_32*/

#P_32:after {
    border-collapse: collapse;
    box-sizing: border-box;
    color: rgb(51, 51, 51);
    text-align: left;
    text-decoration: none solid rgb(51, 51, 51);
    text-size-adjust: 100%;
    column-rule-color: rgb(51, 51, 51);
    caret-color: rgb(51, 51, 51);
    border: 0px none rgb(51, 51, 51);
    font: normal normal 400 normal 18px / 22.5px "Proxima Nova", -apple-system, "Helvetica Neue", Helvetica, Roboto, Arial, sans-serif;
    outline: rgb(51, 51, 51) none 0px;
}/*#P_32:after*/

#P_32:before {
    border-collapse: collapse;
    box-sizing: border-box;
    color: rgb(51, 51, 51);
    text-align: left;
    text-decoration: none solid rgb(51, 51, 51);
    text-size-adjust: 100%;
    column-rule-color: rgb(51, 51, 51);
    caret-color: rgb(51, 51, 51);
    border: 0px none rgb(51, 51, 51);
    font: normal normal 400 normal 18px / 22.5px "Proxima Nova", -apple-system, "Helvetica Neue", Helvetica, Roboto, Arial, sans-serif;
    outline: rgb(51, 51, 51) none 0px;
}/*#P_32:before*/

#UL_33 {
    border-collapse: collapse;
    box-sizing: border-box;
    color: rgb(51, 51, 51);
    text-decoration: none solid rgb(51, 51, 51);
    text-size-adjust: 100%;
    column-rule-color: rgb(51, 51, 51);
    caret-color: rgb(51, 51, 51);
    border: 0px none rgb(51, 51, 51);
    font: normal normal 400 normal 16px / 21.6px "Proxima Nova", -apple-system, "Helvetica Neue", Helvetica, Roboto, Arial, sans-serif;
    list-style: none outside none;
    margin: 0px;
    outline: rgb(51, 51, 51) none 0px;
    padding: 12px 0px 0px;
}/*#UL_33*/

#UL_33:after {
    border-collapse: collapse;
    box-sizing: border-box;
    color: rgb(51, 51, 51);
    text-decoration: none solid rgb(51, 51, 51);
    text-size-adjust: 100%;
    column-rule-color: rgb(51, 51, 51);
    caret-color: rgb(51, 51, 51);
    border: 0px none rgb(51, 51, 51);
    font: normal normal 400 normal 16px / 21.6px "Proxima Nova", -apple-system, "Helvetica Neue", Helvetica, Roboto, Arial, sans-serif;
    list-style: none outside none;
    outline: rgb(51, 51, 51) none 0px;
}/*#UL_33:after*/

#UL_33:before {
    border-collapse: collapse;
    box-sizing: border-box;
    color: rgb(51, 51, 51);
    text-decoration: none solid rgb(51, 51, 51);
    text-size-adjust: 100%;
    column-rule-color: rgb(51, 51, 51);
    caret-color: rgb(51, 51, 51);
    border: 0px none rgb(51, 51, 51);
    font: normal normal 400 normal 16px / 21.6px "Proxima Nova", -apple-system, "Helvetica Neue", Helvetica, Roboto, Arial, sans-serif;
    list-style: none outside none;
    outline: rgb(51, 51, 51) none 0px;
}/*#UL_33:before*/

#DIV_34 {
    border-collapse: collapse;
    bottom: 0px;
    box-sizing: border-box;
    color: rgb(51, 51, 51);
    height: 445.469px;
    left: 0px;
    position: relative;
    right: 0px;
    text-decoration: none solid rgb(51, 51, 51);
    text-size-adjust: 100%;
    top: 0px;
    width: 707.188px;
    column-rule-color: rgb(51, 51, 51);
    perspective-origin: 353.594px 222.719px;
    transform-origin: 353.594px 222.719px;
    caret-color: rgb(51, 51, 51);
    border: 0px none rgb(51, 51, 51);
    font: normal normal 400 normal 16px / 21.6px "Proxima Nova", -apple-system, "Helvetica Neue", Helvetica, Roboto, Arial, sans-serif;
    outline: rgb(51, 51, 51) none 0px;
}/*#DIV_34*/

#DIV_34:after {
    border-collapse: collapse;
    box-sizing: border-box;
    color: rgb(51, 51, 51);
    text-decoration: none solid rgb(51, 51, 51);
    text-size-adjust: 100%;
    column-rule-color: rgb(51, 51, 51);
    caret-color: rgb(51, 51, 51);
    border: 0px none rgb(51, 51, 51);
    font: normal normal 400 normal 16px / 21.6px "Proxima Nova", -apple-system, "Helvetica Neue", Helvetica, Roboto, Arial, sans-serif;
    outline: rgb(51, 51, 51) none 0px;
}/*#DIV_34:after*/

#DIV_34:before {
    border-collapse: collapse;
    box-sizing: border-box;
    color: rgb(51, 51, 51);
    text-decoration: none solid rgb(51, 51, 51);
    text-size-adjust: 100%;
    column-rule-color: rgb(51, 51, 51);
    caret-color: rgb(51, 51, 51);
    border: 0px none rgb(51, 51, 51);
    font: normal normal 400 normal 16px / 21.6px "Proxima Nova", -apple-system, "Helvetica Neue", Helvetica, Roboto, Arial, sans-serif;
    outline: rgb(51, 51, 51) none 0px;
}/*#DIV_34:before*/

#UL_36 {
    border-collapse: collapse;
    box-sizing: border-box;
    color: rgb(51, 51, 51);
    height: 413.469px;
    text-decoration: none solid rgb(51, 51, 51);
    text-size-adjust: 100%;
    width: 707.188px;
    column-rule-color: rgb(51, 51, 51);
    perspective-origin: 353.594px 206.719px;
    transform-origin: 353.594px 206.719px;
    caret-color: rgb(51, 51, 51);
    border: 0px none rgb(51, 51, 51);
    font: normal normal 400 normal 16px / 21.6px "Proxima Nova", -apple-system, "Helvetica Neue", Helvetica, Roboto, Arial, sans-serif;
    list-style: none outside none;
    margin: 0px;
    outline: rgb(51, 51, 51) none 0px;
    padding: 12px 0px 0px;
}/*#UL_36*/

#UL_36:after {
    border-collapse: collapse;
    box-sizing: border-box;
    color: rgb(51, 51, 51);
    text-decoration: none solid rgb(51, 51, 51);
    text-size-adjust: 100%;
    column-rule-color: rgb(51, 51, 51);
    caret-color: rgb(51, 51, 51);
    border: 0px none rgb(51, 51, 51);
    font: normal normal 400 normal 16px / 21.6px "Proxima Nova", -apple-system, "Helvetica Neue", Helvetica, Roboto, Arial, sans-serif;
    list-style: none outside none;
    outline: rgb(51, 51, 51) none 0px;
}/*#UL_36:after*/

#UL_36:before {
    border-collapse: collapse;
    box-sizing: border-box;
    color: rgb(51, 51, 51);
    text-decoration: none solid rgb(51, 51, 51);
    text-size-adjust: 100%;
    column-rule-color: rgb(51, 51, 51);
    caret-color: rgb(51, 51, 51);
    border: 0px none rgb(51, 51, 51);
    font: normal normal 400 normal 16px / 21.6px "Proxima Nova", -apple-system, "Helvetica Neue", Helvetica, Roboto, Arial, sans-serif;
    list-style: none outside none;
    outline: rgb(51, 51, 51) none 0px;
}/*#UL_36:before*/

#LI_37 {
    border-collapse: collapse;
    bottom: 0px;
    box-sizing: border-box;
    color: rgb(51, 51, 51);
    height: 90.1563px;
    left: 0px;
    position: relative;
    right: 0px;
    text-decoration: none solid rgb(51, 51, 51);
    text-size-adjust: 100%;
    top: 0px;
    width: 707.188px;
    column-rule-color: rgb(51, 51, 51);
    perspective-origin: 353.594px 45.0625px;
    transform-origin: 353.594px 45.0625px;
    caret-color: rgb(51, 51, 51);
    border: 0px none rgb(51, 51, 51);
    font: normal normal 400 normal 16px / 21.6px "Proxima Nova", -apple-system, "Helvetica Neue", Helvetica, Roboto, Arial, sans-serif;
    list-style: none outside none;
    margin: 15px 0px 32px;
    outline: rgb(51, 51, 51) none 0px;
}/*#LI_37*/

#LI_37:after {
    border-collapse: collapse;
    box-sizing: border-box;
    color: rgb(51, 51, 51);
    text-decoration: none solid rgb(51, 51, 51);
    text-size-adjust: 100%;
    column-rule-color: rgb(51, 51, 51);
    caret-color: rgb(51, 51, 51);
    border: 0px none rgb(51, 51, 51);
    font: normal normal 400 normal 16px / 21.6px "Proxima Nova", -apple-system, "Helvetica Neue", Helvetica, Roboto, Arial, sans-serif;
    list-style: none outside none;
    outline: rgb(51, 51, 51) none 0px;
}/*#LI_37:after*/

#LI_37:before {
    border-collapse: collapse;
    box-sizing: border-box;
    color: rgb(51, 51, 51);
    text-decoration: none solid rgb(51, 51, 51);
    text-size-adjust: 100%;
    column-rule-color: rgb(51, 51, 51);
    caret-color: rgb(51, 51, 51);
    border: 0px none rgb(51, 51, 51);
    font: normal normal 400 normal 16px / 21.6px "Proxima Nova", -apple-system, "Helvetica Neue", Helvetica, Roboto, Arial, sans-serif;
    list-style: none outside none;
    outline: rgb(51, 51, 51) none 0px;
}/*#LI_37:before*/

#ARTICLE_38, #ARTICLE_54, #ARTICLE_86 {
    border-collapse: collapse;
    box-sizing: border-box;
    color: rgb(51, 51, 51);
    height: 20.1563px;
    text-align: left;
    text-decoration: none solid rgb(51, 51, 51);
    text-size-adjust: 100%;
    width: 687.188px;
    column-rule-color: rgb(51, 51, 51);
    perspective-origin: 343.594px 10.0625px;
    transform-origin: 343.594px 10.0625px;
    caret-color: rgb(51, 51, 51);
    border: 0px none rgb(51, 51, 51);
    font: normal normal 400 normal 16px / 21.6px "Proxima Nova", -apple-system, "Helvetica Neue", Helvetica, Roboto, Arial, sans-serif;
    list-style: none outside none;
    margin: 10px 20px 10px 0px;
    outline: rgb(51, 51, 51) none 0px;
    overflow: hidden;
}/*#ARTICLE_38, #ARTICLE_54, #ARTICLE_86*/

#ARTICLE_38:after, #ARTICLE_54:after, #ARTICLE_86:after {
    border-collapse: collapse;
    box-sizing: border-box;
    color: rgb(51, 51, 51);
    text-align: left;
    text-decoration: none solid rgb(51, 51, 51);
    text-size-adjust: 100%;
    column-rule-color: rgb(51, 51, 51);
    caret-color: rgb(51, 51, 51);
    border: 0px none rgb(51, 51, 51);
    font: normal normal 400 normal 16px / 21.6px "Proxima Nova", -apple-system, "Helvetica Neue", Helvetica, Roboto, Arial, sans-serif;
    list-style: none outside none;
    outline: rgb(51, 51, 51) none 0px;
}/*#ARTICLE_38:after, #ARTICLE_54:after, #ARTICLE_86:after*/

#ARTICLE_38:before, #ARTICLE_54:before, #ARTICLE_86:before {
    border-collapse: collapse;
    box-sizing: border-box;
    color: rgb(51, 51, 51);
    text-align: left;
    text-decoration: none solid rgb(51, 51, 51);
    text-size-adjust: 100%;
    column-rule-color: rgb(51, 51, 51);
    caret-color: rgb(51, 51, 51);
    border: 0px none rgb(51, 51, 51);
    font: normal normal 400 normal 16px / 21.6px "Proxima Nova", -apple-system, "Helvetica Neue", Helvetica, Roboto, Arial, sans-serif;
    list-style: none outside none;
    outline: rgb(51, 51, 51) none 0px;
}/*#ARTICLE_38:before, #ARTICLE_54:before, #ARTICLE_86:before*/

#DIV_39, #DIV_46, #DIV_55, #DIV_62, #DIV_71, #DIV_78, #DIV_87 {
    border-collapse: collapse;
    box-sizing: border-box;
    color: rgb(51, 51, 51);
    float: left;
    height: 20.1563px;
    text-align: left;
    text-decoration: none solid rgb(51, 51, 51);
    text-size-adjust: 100%;
    width: 16px;
    column-rule-color: rgb(51, 51, 51);
    perspective-origin: 8px 10.0625px;
    transform-origin: 8px 10.0625px;
    caret-color: rgb(51, 51, 51);
    border: 0px none rgb(51, 51, 51);
    font: normal normal 400 normal 16px / 21.6px "Proxima Nova", -apple-system, "Helvetica Neue", Helvetica, Roboto, Arial, sans-serif;
    list-style: none outside none;
    outline: rgb(51, 51, 51) none 0px;
}/*#DIV_39, #DIV_46, #DIV_55, #DIV_62, #DIV_71, #DIV_78, #DIV_87*/

#DIV_39:after, #DIV_46:after, #DIV_55:after, #DIV_62:after, #DIV_71:after, #DIV_78:after, #DIV_87:after {
    border-collapse: collapse;
    box-sizing: border-box;
    color: rgb(51, 51, 51);
    text-align: left;
    text-decoration: none solid rgb(51, 51, 51);
    text-size-adjust: 100%;
    column-rule-color: rgb(51, 51, 51);
    caret-color: rgb(51, 51, 51);
    border: 0px none rgb(51, 51, 51);
    font: normal normal 400 normal 16px / 21.6px "Proxima Nova", -apple-system, "Helvetica Neue", Helvetica, Roboto, Arial, sans-serif;
    list-style: none outside none;
    outline: rgb(51, 51, 51) none 0px;
}/*#DIV_39:after, #DIV_46:after, #DIV_55:after, #DIV_62:after, #DIV_71:after, #DIV_78:after, #DIV_87:after*/

#DIV_39:before, #DIV_46:before, #DIV_55:before, #DIV_62:before, #DIV_71:before, #DIV_78:before, #DIV_87:before {
    border-collapse: collapse;
    box-sizing: border-box;
    color: rgb(51, 51, 51);
    text-align: left;
    text-decoration: none solid rgb(51, 51, 51);
    text-size-adjust: 100%;
    column-rule-color: rgb(51, 51, 51);
    caret-color: rgb(51, 51, 51);
    border: 0px none rgb(51, 51, 51);
    font: normal normal 400 normal 16px / 21.6px "Proxima Nova", -apple-system, "Helvetica Neue", Helvetica, Roboto, Arial, sans-serif;
    list-style: none outside none;
    outline: rgb(51, 51, 51) none 0px;
}/*#DIV_39:before, #DIV_46:before, #DIV_55:before, #DIV_62:before, #DIV_71:before, #DIV_78:before, #DIV_87:before*/

#svg_40, #svg_47, #svg_56, #svg_63, #svg_72, #svg_79, #svg_88 {
    border-collapse: collapse;
    box-sizing: border-box;
    color: rgb(51, 51, 51);
    display: inline-block;
    height: 16px;
    text-align: left;
    text-decoration: none solid rgb(51, 51, 51);
    text-size-adjust: 100%;
    vertical-align: middle;
    width: 16px;
    column-rule-color: rgb(51, 51, 51);
    perspective-origin: 8px 8px;
    transform-origin: 8px 8px;
    caret-color: rgb(51, 51, 51);
    border: 0px none rgb(51, 51, 51);
    font: normal normal 400 normal 16px / 21.6px "Proxima Nova", -apple-system, "Helvetica Neue", Helvetica, Roboto, Arial, sans-serif;
    list-style: none outside none;
    outline: rgb(51, 51, 51) none 0px;
    overflow: hidden;
}/*#svg_40, #svg_47, #svg_56, #svg_63, #svg_72, #svg_79, #svg_88*/

#svg_40:after, #svg_47:after, #svg_56:after, #svg_63:after, #svg_72:after, #svg_79:after, #svg_88:after {
    border-collapse: collapse;
    box-sizing: border-box;
    color: rgb(51, 51, 51);
    text-align: left;
    text-decoration: none solid rgb(51, 51, 51);
    text-size-adjust: 100%;
    column-rule-color: rgb(51, 51, 51);
    caret-color: rgb(51, 51, 51);
    border: 0px none rgb(51, 51, 51);
    font: normal normal 400 normal 16px / 21.6px "Proxima Nova", -apple-system, "Helvetica Neue", Helvetica, Roboto, Arial, sans-serif;
    list-style: none outside none;
    outline: rgb(51, 51, 51) none 0px;
}/*#svg_40:after, #svg_47:after, #svg_56:after, #svg_63:after, #svg_72:after, #svg_79:after, #svg_88:after*/

#svg_40:before, #svg_47:before, #svg_56:before, #svg_63:before, #svg_72:before, #svg_79:before, #svg_88:before {
    border-collapse: collapse;
    box-sizing: border-box;
    color: rgb(51, 51, 51);
    text-align: left;
    text-decoration: none solid rgb(51, 51, 51);
    text-size-adjust: 100%;
    column-rule-color: rgb(51, 51, 51);
    caret-color: rgb(51, 51, 51);
    border: 0px none rgb(51, 51, 51);
    font: normal normal 400 normal 16px / 21.6px "Proxima Nova", -apple-system, "Helvetica Neue", Helvetica, Roboto, Arial, sans-serif;
    list-style: none outside none;
    outline: rgb(51, 51, 51) none 0px;
}/*#svg_40:before, #svg_47:before, #svg_56:before, #svg_63:before, #svg_72:before, #svg_79:before, #svg_88:before*/

#use_41, #use_48, #use_57, #use_64, #use_73, #use_80, #use_89 {
    border-collapse: collapse;
    box-sizing: border-box;
    color: rgb(51, 51, 51);
    text-align: left;
    text-decoration: none solid rgb(51, 51, 51);
    text-size-adjust: 100%;
    column-rule-color: rgb(51, 51, 51);
    perspective-origin: 0px 0px;
    transform-origin: 0px 0px;
    caret-color: rgb(51, 51, 51);
    border: 0px none rgb(51, 51, 51);
    font: normal normal 400 normal 16px / 21.6px "Proxima Nova", -apple-system, "Helvetica Neue", Helvetica, Roboto, Arial, sans-serif;
    list-style: none outside none;
    outline: rgb(51, 51, 51) none 0px;
}/*#use_41, #use_48, #use_57, #use_64, #use_73, #use_80, #use_89*/

#use_41:after, #use_48:after, #use_57:after, #use_64:after, #use_73:after, #use_80:after, #use_89:after {
    border-collapse: collapse;
    box-sizing: border-box;
    color: rgb(51, 51, 51);
    text-align: left;
    text-decoration: none solid rgb(51, 51, 51);
    text-size-adjust: 100%;
    column-rule-color: rgb(51, 51, 51);
    caret-color: rgb(51, 51, 51);
    border: 0px none rgb(51, 51, 51);
    font: normal normal 400 normal 16px / 21.6px "Proxima Nova", -apple-system, "Helvetica Neue", Helvetica, Roboto, Arial, sans-serif;
    list-style: none outside none;
    outline: rgb(51, 51, 51) none 0px;
}/*#use_41:after, #use_48:after, #use_57:after, #use_64:after, #use_73:after, #use_80:after, #use_89:after*/

#use_41:before, #use_48:before, #use_57:before, #use_64:before, #use_73:before, #use_80:before, #use_89:before {
    border-collapse: collapse;
    box-sizing: border-box;
    color: rgb(51, 51, 51);
    text-align: left;
    text-decoration: none solid rgb(51, 51, 51);
    text-size-adjust: 100%;
    column-rule-color: rgb(51, 51, 51);
    caret-color: rgb(51, 51, 51);
    border: 0px none rgb(51, 51, 51);
    font: normal normal 400 normal 16px / 21.6px "Proxima Nova", -apple-system, "Helvetica Neue", Helvetica, Roboto, Arial, sans-serif;
    list-style: none outside none;
    outline: rgb(51, 51, 51) none 0px;
}/*#use_41:before, #use_48:before, #use_57:before, #use_64:before, #use_73:before, #use_80:before, #use_89:before*/

#DIV_42, #DIV_58, #DIV_90 {
    border-collapse: collapse;
    box-sizing: border-box;
    color: rgb(51, 51, 51);
    height: 20px;
    text-align: left;
    text-decoration: none solid rgb(51, 51, 51);
    text-size-adjust: 100%;
    width: 657.188px;
    column-rule-color: rgb(51, 51, 51);
    perspective-origin: 328.594px 10px;
    transform-origin: 328.594px 10px;
    caret-color: rgb(51, 51, 51);
    border: 0px none rgb(51, 51, 51);
    font: normal normal 400 normal 16px / 21.6px "Proxima Nova", -apple-system, "Helvetica Neue", Helvetica, Roboto, Arial, sans-serif;
    list-style: none outside none;
    margin: 0px 0px 0px 30px;
    outline: rgb(51, 51, 51) none 0px;
}/*#DIV_42, #DIV_58, #DIV_90*/

#DIV_42:after, #DIV_58:after, #DIV_90:after {
    border-collapse: collapse;
    box-sizing: border-box;
    color: rgb(51, 51, 51);
    text-align: left;
    text-decoration: none solid rgb(51, 51, 51);
    text-size-adjust: 100%;
    column-rule-color: rgb(51, 51, 51);
    caret-color: rgb(51, 51, 51);
    border: 0px none rgb(51, 51, 51);
    font: normal normal 400 normal 16px / 21.6px "Proxima Nova", -apple-system, "Helvetica Neue", Helvetica, Roboto, Arial, sans-serif;
    list-style: none outside none;
    outline: rgb(51, 51, 51) none 0px;
}/*#DIV_42:after, #DIV_58:after, #DIV_90:after*/

#DIV_42:before, #DIV_58:before, #DIV_90:before {
    border-collapse: collapse;
    box-sizing: border-box;
    color: rgb(51, 51, 51);
    text-align: left;
    text-decoration: none solid rgb(51, 51, 51);
    text-size-adjust: 100%;
    column-rule-color: rgb(51, 51, 51);
    caret-color: rgb(51, 51, 51);
    border: 0px none rgb(51, 51, 51);
    font: normal normal 400 normal 16px / 21.6px "Proxima Nova", -apple-system, "Helvetica Neue", Helvetica, Roboto, Arial, sans-serif;
    list-style: none outside none;
    outline: rgb(51, 51, 51) none 0px;
}/*#DIV_42:before, #DIV_58:before, #DIV_90:before*/

#P_43, #P_59, #P_75, #P_91 {
    border-collapse: collapse;
    box-sizing: border-box;
    color: rgb(51, 51, 51);
    display: inline;
    text-align: left;
    text-decoration: none solid rgb(51, 51, 51);
    text-size-adjust: 100%;
    column-rule-color: rgb(51, 51, 51);
    perspective-origin: 0px 0px;
    transform-origin: 0px 0px;
    caret-color: rgb(51, 51, 51);
    border: 0px none rgb(51, 51, 51);
    font: normal normal 400 normal 16px / 20px "Proxima Nova", -apple-system, "Helvetica Neue", Helvetica, Roboto, Arial, sans-serif;
    list-style: none outside none;
    margin: 0px;
    outline: rgb(51, 51, 51) none 0px;
}/*#P_43, #P_59, #P_75, #P_91*/

#P_43:after, #P_59:after, #P_75:after, #P_91:after {
    border-collapse: collapse;
    box-sizing: border-box;
    color: rgb(51, 51, 51);
    text-align: left;
    text-decoration: none solid rgb(51, 51, 51);
    text-size-adjust: 100%;
    column-rule-color: rgb(51, 51, 51);
    caret-color: rgb(51, 51, 51);
    border: 0px none rgb(51, 51, 51);
    font: normal normal 400 normal 16px / 20px "Proxima Nova", -apple-system, "Helvetica Neue", Helvetica, Roboto, Arial, sans-serif;
    list-style: none outside none;
    outline: rgb(51, 51, 51) none 0px;
}/*#P_43:after, #P_59:after, #P_75:after, #P_91:after*/

#P_43:before, #P_59:before, #P_75:before, #P_91:before {
    border-collapse: collapse;
    box-sizing: border-box;
    color: rgb(51, 51, 51);
    text-align: left;
    text-decoration: none solid rgb(51, 51, 51);
    text-size-adjust: 100%;
    column-rule-color: rgb(51, 51, 51);
    caret-color: rgb(51, 51, 51);
    border: 0px none rgb(51, 51, 51);
    font: normal normal 400 normal 16px / 20px "Proxima Nova", -apple-system, "Helvetica Neue", Helvetica, Roboto, Arial, sans-serif;
    list-style: none outside none;
    outline: rgb(51, 51, 51) none 0px;
}/*#P_43:before, #P_59:before, #P_75:before, #P_91:before*/

#A_44, #A_52, #A_60, #A_68, #A_76, #A_84, #A_92 {
    border-collapse: collapse;
    box-sizing: border-box;
    color: rgb(52, 131, 250);
    text-align: left;
    text-decoration: none solid rgb(52, 131, 250);
    text-size-adjust: 100%;
    visibility: hidden;
    column-rule-color: rgb(52, 131, 250);
    perspective-origin: 0px 0px;
    transform-origin: 0px 0px;
    caret-color: rgb(52, 131, 250);
    border: 0px none rgb(52, 131, 250);
    font: normal normal 400 normal 14px / 18.9px "Proxima Nova", -apple-system, "Helvetica Neue", Helvetica, Roboto, Arial, sans-serif;
    list-style: none outside none;
    margin: 0px 0px 0px 5px;
    outline: rgb(52, 131, 250) none 0px;
}/*#A_44, #A_52, #A_60, #A_68, #A_76, #A_84, #A_92*/

#A_44:after, #A_52:after, #A_60:after, #A_68:after, #A_76:after, #A_84:after, #A_92:after {
    border-collapse: collapse;
    box-sizing: border-box;
    color: rgb(52, 131, 250);
    text-align: left;
    text-decoration: none solid rgb(52, 131, 250);
    text-size-adjust: 100%;
    visibility: hidden;
    column-rule-color: rgb(52, 131, 250);
    caret-color: rgb(52, 131, 250);
    border: 0px none rgb(52, 131, 250);
    font: normal normal 400 normal 14px / 18.9px "Proxima Nova", -apple-system, "Helvetica Neue", Helvetica, Roboto, Arial, sans-serif;
    list-style: none outside none;
    outline: rgb(52, 131, 250) none 0px;
}/*#A_44:after, #A_52:after, #A_60:after, #A_68:after, #A_76:after, #A_84:after, #A_92:after*/

#A_44:before, #A_52:before, #A_60:before, #A_68:before, #A_76:before, #A_84:before, #A_92:before {
    border-collapse: collapse;
    box-sizing: border-box;
    color: rgb(52, 131, 250);
    text-align: left;
    text-decoration: none solid rgb(52, 131, 250);
    text-size-adjust: 100%;
    visibility: hidden;
    column-rule-color: rgb(52, 131, 250);
    caret-color: rgb(52, 131, 250);
    border: 0px none rgb(52, 131, 250);
    font: normal normal 400 normal 14px / 18.9px "Proxima Nova", -apple-system, "Helvetica Neue", Helvetica, Roboto, Arial, sans-serif;
    list-style: none outside none;
    outline: rgb(52, 131, 250) none 0px;
}/*#A_44:before, #A_52:before, #A_60:before, #A_68:before, #A_76:before, #A_84:before, #A_92:before*/

#ARTICLE_45, #ARTICLE_70 {
    border-collapse: collapse;
    box-sizing: border-box;
    color: rgb(51, 51, 51);
    height: 60px;
    text-align: left;
    text-decoration: none solid rgb(51, 51, 51);
    text-size-adjust: 100%;
    width: 687.188px;
    column-rule-color: rgb(51, 51, 51);
    perspective-origin: 343.594px 30px;
    transform-origin: 343.594px 30px;
    caret-color: rgb(51, 51, 51);
    border: 0px none rgb(51, 51, 51);
    font: normal normal 400 normal 16px / 21.6px "Proxima Nova", -apple-system, "Helvetica Neue", Helvetica, Roboto, Arial, sans-serif;
    list-style: none outside none;
    margin: 10px 20px 10px 0px;
    outline: rgb(51, 51, 51) none 0px;
    overflow: hidden;
}/*#ARTICLE_45, #ARTICLE_70*/

#ARTICLE_45:after, #ARTICLE_70:after {
    border-collapse: collapse;
    box-sizing: border-box;
    color: rgb(51, 51, 51);
    text-align: left;
    text-decoration: none solid rgb(51, 51, 51);
    text-size-adjust: 100%;
    column-rule-color: rgb(51, 51, 51);
    caret-color: rgb(51, 51, 51);
    border: 0px none rgb(51, 51, 51);
    font: normal normal 400 normal 16px / 21.6px "Proxima Nova", -apple-system, "Helvetica Neue", Helvetica, Roboto, Arial, sans-serif;
    list-style: none outside none;
    outline: rgb(51, 51, 51) none 0px;
}/*#ARTICLE_45:after, #ARTICLE_70:after*/

#ARTICLE_45:before, #ARTICLE_70:before {
    border-collapse: collapse;
    box-sizing: border-box;
    color: rgb(51, 51, 51);
    text-align: left;
    text-decoration: none solid rgb(51, 51, 51);
    text-size-adjust: 100%;
    column-rule-color: rgb(51, 51, 51);
    caret-color: rgb(51, 51, 51);
    border: 0px none rgb(51, 51, 51);
    font: normal normal 400 normal 16px / 21.6px "Proxima Nova", -apple-system, "Helvetica Neue", Helvetica, Roboto, Arial, sans-serif;
    list-style: none outside none;
    outline: rgb(51, 51, 51) none 0px;
}/*#ARTICLE_45:before, #ARTICLE_70:before*/

#DIV_49, #DIV_74 {
    border-collapse: collapse;
    box-sizing: border-box;
    color: rgb(51, 51, 51);
    height: 60px;
    text-align: left;
    text-decoration: none solid rgb(51, 51, 51);
    text-size-adjust: 100%;
    width: 657.188px;
    column-rule-color: rgb(51, 51, 51);
    perspective-origin: 328.594px 30px;
    transform-origin: 328.594px 30px;
    caret-color: rgb(51, 51, 51);
    border: 0px none rgb(51, 51, 51);
    font: normal normal 400 normal 16px / 21.6px "Proxima Nova", -apple-system, "Helvetica Neue", Helvetica, Roboto, Arial, sans-serif;
    list-style: none outside none;
    margin: 0px 0px 0px 30px;
    outline: rgb(51, 51, 51) none 0px;
}/*#DIV_49, #DIV_74*/

#DIV_49:after, #DIV_74:after {
    border-collapse: collapse;
    box-sizing: border-box;
    color: rgb(51, 51, 51);
    text-align: left;
    text-decoration: none solid rgb(51, 51, 51);
    text-size-adjust: 100%;
    column-rule-color: rgb(51, 51, 51);
    caret-color: rgb(51, 51, 51);
    border: 0px none rgb(51, 51, 51);
    font: normal normal 400 normal 16px / 21.6px "Proxima Nova", -apple-system, "Helvetica Neue", Helvetica, Roboto, Arial, sans-serif;
    list-style: none outside none;
    outline: rgb(51, 51, 51) none 0px;
}/*#DIV_49:after, #DIV_74:after*/

#DIV_49:before, #DIV_74:before {
    border-collapse: collapse;
    box-sizing: border-box;
    color: rgb(51, 51, 51);
    text-align: left;
    text-decoration: none solid rgb(51, 51, 51);
    text-size-adjust: 100%;
    column-rule-color: rgb(51, 51, 51);
    caret-color: rgb(51, 51, 51);
    border: 0px none rgb(51, 51, 51);
    font: normal normal 400 normal 16px / 21.6px "Proxima Nova", -apple-system, "Helvetica Neue", Helvetica, Roboto, Arial, sans-serif;
    list-style: none outside none;
    outline: rgb(51, 51, 51) none 0px;
}/*#DIV_49:before, #DIV_74:before*/

#P_50, #P_66, #P_82 {
    border-collapse: collapse;
    box-sizing: border-box;
    color: rgb(153, 153, 153);
    display: inline;
    text-align: left;
    text-decoration: none solid rgb(153, 153, 153);
    text-size-adjust: 100%;
    column-rule-color: rgb(153, 153, 153);
    perspective-origin: 0px 0px;
    transform-origin: 0px 0px;
    caret-color: rgb(153, 153, 153);
    border: 0px none rgb(153, 153, 153);
    font: normal normal 400 normal 16px / 20px "Proxima Nova", -apple-system, "Helvetica Neue", Helvetica, Roboto, Arial, sans-serif;
    list-style: none outside none;
    margin: 0px 0px 5px;
    outline: rgb(153, 153, 153) none 0px;
}/*#P_50, #P_66, #P_82*/

#P_50:after, #P_66:after, #P_82:after {
    border-collapse: collapse;
    box-sizing: border-box;
    color: rgb(153, 153, 153);
    text-align: left;
    text-decoration: none solid rgb(153, 153, 153);
    text-size-adjust: 100%;
    column-rule-color: rgb(153, 153, 153);
    caret-color: rgb(153, 153, 153);
    border: 0px none rgb(153, 153, 153);
    font: normal normal 400 normal 16px / 20px "Proxima Nova", -apple-system, "Helvetica Neue", Helvetica, Roboto, Arial, sans-serif;
    list-style: none outside none;
    outline: rgb(153, 153, 153) none 0px;
}/*#P_50:after, #P_66:after, #P_82:after*/

#P_50:before, #P_66:before, #P_82:before {
    border-collapse: collapse;
    box-sizing: border-box;
    color: rgb(153, 153, 153);
    text-align: left;
    text-decoration: none solid rgb(153, 153, 153);
    text-size-adjust: 100%;
    column-rule-color: rgb(153, 153, 153);
    caret-color: rgb(153, 153, 153);
    border: 0px none rgb(153, 153, 153);
    font: normal normal 400 normal 16px / 20px "Proxima Nova", -apple-system, "Helvetica Neue", Helvetica, Roboto, Arial, sans-serif;
    list-style: none outside none;
    outline: rgb(153, 153, 153) none 0px;
}/*#P_50:before, #P_66:before, #P_82:before*/

#TIME_51, #TIME_67, #TIME_83 {
    border-collapse: collapse;
    box-sizing: border-box;
    color: rgb(153, 153, 153);
    text-align: left;
    text-decoration: none solid rgb(153, 153, 153);
    text-size-adjust: 100%;
    column-rule-color: rgb(153, 153, 153);
    perspective-origin: 0px 0px;
    transform-origin: 0px 0px;
    caret-color: rgb(153, 153, 153);
    border: 0px none rgb(153, 153, 153);
    font: normal normal 400 normal 14px / 18.9px "Proxima Nova", -apple-system, "Helvetica Neue", Helvetica, Roboto, Arial, sans-serif;
    list-style: none outside none;
    margin: 0px 0px 0px 5px;
    outline: rgb(153, 153, 153) none 0px;
}/*#TIME_51, #TIME_67, #TIME_83*/

#TIME_51:after, #TIME_67:after, #TIME_83:after {
    border-collapse: collapse;
    box-sizing: border-box;
    color: rgb(153, 153, 153);
    text-align: left;
    text-decoration: none solid rgb(153, 153, 153);
    text-size-adjust: 100%;
    column-rule-color: rgb(153, 153, 153);
    caret-color: rgb(153, 153, 153);
    border: 0px none rgb(153, 153, 153);
    font: normal normal 400 normal 14px / 18.9px "Proxima Nova", -apple-system, "Helvetica Neue", Helvetica, Roboto, Arial, sans-serif;
    list-style: none outside none;
    outline: rgb(153, 153, 153) none 0px;
}/*#TIME_51:after, #TIME_67:after, #TIME_83:after*/

#TIME_51:before, #TIME_67:before, #TIME_83:before {
    border-collapse: collapse;
    box-sizing: border-box;
    color: rgb(153, 153, 153);
    text-align: left;
    text-decoration: none solid rgb(153, 153, 153);
    text-size-adjust: 100%;
    column-rule-color: rgb(153, 153, 153);
    caret-color: rgb(153, 153, 153);
    border: 0px none rgb(153, 153, 153);
    font: normal normal 400 normal 14px / 18.9px "Proxima Nova", -apple-system, "Helvetica Neue", Helvetica, Roboto, Arial, sans-serif;
    list-style: none outside none;
    outline: rgb(153, 153, 153) none 0px;
}/*#TIME_51:before, #TIME_67:before, #TIME_83:before*/

#LI_53 {
    border-collapse: collapse;
    bottom: 0px;
    box-sizing: border-box;
    color: rgb(51, 51, 51);
    height: 70.1563px;
    left: 0px;
    position: relative;
    right: 0px;
    text-decoration: none solid rgb(51, 51, 51);
    text-size-adjust: 100%;
    top: 0px;
    width: 707.188px;
    column-rule-color: rgb(51, 51, 51);
    perspective-origin: 353.594px 35.0625px;
    transform-origin: 353.594px 35.0625px;
    caret-color: rgb(51, 51, 51);
    border: 0px none rgb(51, 51, 51);
    font: normal normal 400 normal 16px / 21.6px "Proxima Nova", -apple-system, "Helvetica Neue", Helvetica, Roboto, Arial, sans-serif;
    list-style: none outside none;
    margin: 15px 0px 32px;
    outline: rgb(51, 51, 51) none 0px;
}/*#LI_53*/

#LI_53:after {
    border-collapse: collapse;
    box-sizing: border-box;
    color: rgb(51, 51, 51);
    text-decoration: none solid rgb(51, 51, 51);
    text-size-adjust: 100%;
    column-rule-color: rgb(51, 51, 51);
    caret-color: rgb(51, 51, 51);
    border: 0px none rgb(51, 51, 51);
    font: normal normal 400 normal 16px / 21.6px "Proxima Nova", -apple-system, "Helvetica Neue", Helvetica, Roboto, Arial, sans-serif;
    list-style: none outside none;
    outline: rgb(51, 51, 51) none 0px;
}/*#LI_53:after*/

#LI_53:before {
    border-collapse: collapse;
    box-sizing: border-box;
    color: rgb(51, 51, 51);
    text-decoration: none solid rgb(51, 51, 51);
    text-size-adjust: 100%;
    column-rule-color: rgb(51, 51, 51);
    caret-color: rgb(51, 51, 51);
    border: 0px none rgb(51, 51, 51);
    font: normal normal 400 normal 16px / 21.6px "Proxima Nova", -apple-system, "Helvetica Neue", Helvetica, Roboto, Arial, sans-serif;
    list-style: none outside none;
    outline: rgb(51, 51, 51) none 0px;
}/*#LI_53:before*/

#ARTICLE_61, #ARTICLE_77 {
    border-collapse: collapse;
    box-sizing: border-box;
    color: rgb(51, 51, 51);
    height: 40px;
    text-align: left;
    text-decoration: none solid rgb(51, 51, 51);
    text-size-adjust: 100%;
    width: 687.188px;
    column-rule-color: rgb(51, 51, 51);
    perspective-origin: 343.594px 20px;
    transform-origin: 343.594px 20px;
    caret-color: rgb(51, 51, 51);
    border: 0px none rgb(51, 51, 51);
    font: normal normal 400 normal 16px / 21.6px "Proxima Nova", -apple-system, "Helvetica Neue", Helvetica, Roboto, Arial, sans-serif;
    list-style: none outside none;
    margin: 10px 20px 10px 0px;
    outline: rgb(51, 51, 51) none 0px;
    overflow: hidden;
}/*#ARTICLE_61, #ARTICLE_77*/

#ARTICLE_61:after, #ARTICLE_77:after {
    border-collapse: collapse;
    box-sizing: border-box;
    color: rgb(51, 51, 51);
    text-align: left;
    text-decoration: none solid rgb(51, 51, 51);
    text-size-adjust: 100%;
    column-rule-color: rgb(51, 51, 51);
    caret-color: rgb(51, 51, 51);
    border: 0px none rgb(51, 51, 51);
    font: normal normal 400 normal 16px / 21.6px "Proxima Nova", -apple-system, "Helvetica Neue", Helvetica, Roboto, Arial, sans-serif;
    list-style: none outside none;
    outline: rgb(51, 51, 51) none 0px;
}/*#ARTICLE_61:after, #ARTICLE_77:after*/

#ARTICLE_61:before, #ARTICLE_77:before {
    border-collapse: collapse;
    box-sizing: border-box;
    color: rgb(51, 51, 51);
    text-align: left;
    text-decoration: none solid rgb(51, 51, 51);
    text-size-adjust: 100%;
    column-rule-color: rgb(51, 51, 51);
    caret-color: rgb(51, 51, 51);
    border: 0px none rgb(51, 51, 51);
    font: normal normal 400 normal 16px / 21.6px "Proxima Nova", -apple-system, "Helvetica Neue", Helvetica, Roboto, Arial, sans-serif;
    list-style: none outside none;
    outline: rgb(51, 51, 51) none 0px;
}/*#ARTICLE_61:before, #ARTICLE_77:before*/

#DIV_65, #DIV_81 {
    border-collapse: collapse;
    box-sizing: border-box;
    color: rgb(51, 51, 51);
    height: 40px;
    text-align: left;
    text-decoration: none solid rgb(51, 51, 51);
    text-size-adjust: 100%;
    width: 657.188px;
    column-rule-color: rgb(51, 51, 51);
    perspective-origin: 328.594px 20px;
    transform-origin: 328.594px 20px;
    caret-color: rgb(51, 51, 51);
    border: 0px none rgb(51, 51, 51);
    font: normal normal 400 normal 16px / 21.6px "Proxima Nova", -apple-system, "Helvetica Neue", Helvetica, Roboto, Arial, sans-serif;
    list-style: none outside none;
    margin: 0px 0px 0px 30px;
    outline: rgb(51, 51, 51) none 0px;
}/*#DIV_65, #DIV_81*/

#DIV_65:after, #DIV_81:after {
    border-collapse: collapse;
    box-sizing: border-box;
    color: rgb(51, 51, 51);
    text-align: left;
    text-decoration: none solid rgb(51, 51, 51);
    text-size-adjust: 100%;
    column-rule-color: rgb(51, 51, 51);
    caret-color: rgb(51, 51, 51);
    border: 0px none rgb(51, 51, 51);
    font: normal normal 400 normal 16px / 21.6px "Proxima Nova", -apple-system, "Helvetica Neue", Helvetica, Roboto, Arial, sans-serif;
    list-style: none outside none;
    outline: rgb(51, 51, 51) none 0px;
}/*#DIV_65:after, #DIV_81:after*/

#DIV_65:before, #DIV_81:before {
    border-collapse: collapse;
    box-sizing: border-box;
    color: rgb(51, 51, 51);
    text-align: left;
    text-decoration: none solid rgb(51, 51, 51);
    text-size-adjust: 100%;
    column-rule-color: rgb(51, 51, 51);
    caret-color: rgb(51, 51, 51);
    border: 0px none rgb(51, 51, 51);
    font: normal normal 400 normal 16px / 21.6px "Proxima Nova", -apple-system, "Helvetica Neue", Helvetica, Roboto, Arial, sans-serif;
    list-style: none outside none;
    outline: rgb(51, 51, 51) none 0px;
}/*#DIV_65:before, #DIV_81:before*/

#LI_69 {
    border-collapse: collapse;
    bottom: 0px;
    box-sizing: border-box;
    color: rgb(51, 51, 51);
    height: 110px;
    left: 0px;
    position: relative;
    right: 0px;
    text-decoration: none solid rgb(51, 51, 51);
    text-size-adjust: 100%;
    top: 0px;
    width: 707.188px;
    column-rule-color: rgb(51, 51, 51);
    perspective-origin: 353.594px 55px;
    transform-origin: 353.594px 55px;
    caret-color: rgb(51, 51, 51);
    border: 0px none rgb(51, 51, 51);
    font: normal normal 400 normal 16px / 21.6px "Proxima Nova", -apple-system, "Helvetica Neue", Helvetica, Roboto, Arial, sans-serif;
    list-style: none outside none;
    margin: 15px 0px 32px;
    outline: rgb(51, 51, 51) none 0px;
}/*#LI_69*/

#LI_69:after {
    border-collapse: collapse;
    box-sizing: border-box;
    color: rgb(51, 51, 51);
    text-decoration: none solid rgb(51, 51, 51);
    text-size-adjust: 100%;
    column-rule-color: rgb(51, 51, 51);
    caret-color: rgb(51, 51, 51);
    border: 0px none rgb(51, 51, 51);
    font: normal normal 400 normal 16px / 21.6px "Proxima Nova", -apple-system, "Helvetica Neue", Helvetica, Roboto, Arial, sans-serif;
    list-style: none outside none;
    outline: rgb(51, 51, 51) none 0px;
}/*#LI_69:after*/

#LI_69:before {
    border-collapse: collapse;
    box-sizing: border-box;
    color: rgb(51, 51, 51);
    text-decoration: none solid rgb(51, 51, 51);
    text-size-adjust: 100%;
    column-rule-color: rgb(51, 51, 51);
    caret-color: rgb(51, 51, 51);
    border: 0px none rgb(51, 51, 51);
    font: normal normal 400 normal 16px / 21.6px "Proxima Nova", -apple-system, "Helvetica Neue", Helvetica, Roboto, Arial, sans-serif;
    list-style: none outside none;
    outline: rgb(51, 51, 51) none 0px;
}/*#LI_69:before*/

#LI_85 {
    border-collapse: collapse;
    bottom: 0px;
    box-sizing: border-box;
    color: rgb(51, 51, 51);
    height: 20.1563px;
    left: 0px;
    position: relative;
    right: 0px;
    text-decoration: none solid rgb(51, 51, 51);
    text-size-adjust: 100%;
    top: 0px;
    width: 707.188px;
    column-rule-color: rgb(51, 51, 51);
    perspective-origin: 353.594px 10.0625px;
    transform-origin: 353.594px 10.0625px;
    caret-color: rgb(51, 51, 51);
    border: 0px none rgb(51, 51, 51);
    font: normal normal 400 normal 16px / 21.6px "Proxima Nova", -apple-system, "Helvetica Neue", Helvetica, Roboto, Arial, sans-serif;
    list-style: none outside none;
    margin: 15px 0px 0px;
    outline: rgb(51, 51, 51) none 0px;
}/*#LI_85*/

#LI_85:after {
    border-collapse: collapse;
    box-sizing: border-box;
    color: rgb(51, 51, 51);
    text-decoration: none solid rgb(51, 51, 51);
    text-size-adjust: 100%;
    column-rule-color: rgb(51, 51, 51);
    caret-color: rgb(51, 51, 51);
    border: 0px none rgb(51, 51, 51);
    font: normal normal 400 normal 16px / 21.6px "Proxima Nova", -apple-system, "Helvetica Neue", Helvetica, Roboto, Arial, sans-serif;
    list-style: none outside none;
    outline: rgb(51, 51, 51) none 0px;
}/*#LI_85:after*/

#LI_85:before {
    border-collapse: collapse;
    box-sizing: border-box;
    color: rgb(51, 51, 51);
    text-decoration: none solid rgb(51, 51, 51);
    text-size-adjust: 100%;
    column-rule-color: rgb(51, 51, 51);
    caret-color: rgb(51, 51, 51);
    border: 0px none rgb(51, 51, 51);
    font: normal normal 400 normal 16px / 21.6px "Proxima Nova", -apple-system, "Helvetica Neue", Helvetica, Roboto, Arial, sans-serif;
    list-style: none outside none;
    outline: rgb(51, 51, 51) none 0px;
}/*#LI_85:before*/


</style> 
<div style="margin-top: -5px;max-width: 1220px;height:auto;display: inline-block;width: 100%;"> 
    <nav class="nav-deep-links">
        <div class="container" style="margin-left: 0px;padding-left: 0px;"> 
            <p>También puede interesarte:</p> <a href="https://listado.mercadolibre.com.mx/mustang">mustang</a> - <a href="https://listado.mercadolibre.com.mx/ford+mustang">ford mustang</a> - <a href="https://listado.mercadolibre.com.mx/harley+davidson">harley davidson</a> - <a href="https://listado.mercadolibre.com.mx/combi">combi</a> - <a href="https://listado.mercadolibre.com.mx/food+truck">food truck</a>
        </div>
    </nav>
</div> 
<section class="vip-section-navigation vip-bg-alt no-deep-links">
    <nav class="vip-container u-clearfix">
        <div class="vip-navigation-breadcrumb">
            <a id="backToCateg" class="navigation-back" href="{{route('publicaciones')}}" title="Volver al listado">Volver al listado</a>
            <ul class="vip-navigation-breadcrumb-list">
                <li>
                    <a class="breadcrumb " href="#" title="">
                    Autos, Motos y Otros
                    </a>
                    <svg width="22" height="22" viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg" class="ui-icon ui-icon--chevron-right">
                    <g fill="#000" fill-rule="evenodd">
                    <path d="M6.646 5.354l4 4 .354.353.707-.707-.353-.354-4-4L7 4.293 6.293 5z"></path>
                    <path d="M7.354 13.354l4-4L11.707 9 11 8.293l-.354.353-4 4-.353.354.707.707z"></path>
                    </g>
                    </svg> 
                </li>
                <li>
                    <a class="breadcrumb " href="#" title="">
                    Camiones
                    </a>
                    <svg width="22" height="22" viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg" class="ui-icon ui-icon--chevron-right">
                    <g fill="#000" fill-rule="evenodd">
                    <path d="M6.646 5.354l4 4 .354.353.707-.707-.353-.354-4-4L7 4.293 6.293 5z"></path>
                    <path d="M7.354 13.354l4-4L11.707 9 11 8.293l-.354.353-4 4-.353.354.707.707z"></path>
                    </g>
                    </svg>
                </li>
                <li>
                    <a class="breadcrumb " href="#" title="">
                    Chevrolet
                    </a>
                    <svg width="22" height="22" viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg" class="ui-icon ui-icon--chevron-right">
                    <g fill="#000" fill-rule="evenodd">
                    <path d="M6.646 5.354l4 4 .354.353.707-.707-.353-.354-4-4L7 4.293 6.293 5z"></path>
                    <path d="M7.354 13.354l4-4L11.707 9 11 8.293l-.354.353-4 4-.353.354.707.707z"></path>
                    </g>
                    </svg>
                </li>
                <li>
                    <a class="breadcrumb " href="#" title="">
                    Otros Modelos
                    </a>
                    <svg width="22" height="22" viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg" class="ui-icon ui-icon--chevron-right">
                    <g fill="#000" fill-rule="evenodd">
                    <path d="M6.646 5.354l4 4 .354.353.707-.707-.353-.354-4-4L7 4.293 6.293 5z"></path>
                    <path d="M7.354 13.354l4-4L11.707 9 11 8.293l-.354.353-4 4-.353.354.707.707z"></path>
                    </g>
                    </svg>
                </li>
            </ul>
        </div>
        <div class="secondary-actions">
            <input type="checkbox" class="ui-dropdown__input" id="share-btn">
            <div class="actions-secondary__btn actions-secondary__btn--share ui-dropdown">
                <label class="ui-dropdown__trigger" for="share-btn">
                <small>Compartir</small>
                </label>
                <div class="ui-dropdown__content">
                </div>
            </div>
            <div class="vip-navigation-solt">
                <a style="padding-left: 10px;" id="soltLink" rel="nofollow" href="#">Vender uno igual</a>
            </div>
        </div>
    </nav>
</section>
<section class="outline-section vip-section-navigation">
    <div class="vip-nav-bounds">
        <section class="item-status item-status--redirect">
            <div class="item-status-notification">
                <div class="ch-box-info">
                    <div class="ui-icon--content">
                        <svg viewBox="0 0 100 100" role="presentation" class="ui-icon ui-icon--question-blocked">
                            <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#ui-icon--question-blocked"></use>
                            <svg viewBox="0 0 16 16" id="ui-icon--question-blocked" xmlns="http://www.w3.org/2000/svg" width="100%" height="100%"><g fill="none" fill-rule="evenodd"><circle fill="#F57819" transform="rotate(-180 8 8)" cx="8" cy="8" r="8"></circle><path fill="#FFF" d="M7 3h1.882l-.235 5.176H7.235z"></path><ellipse fill="#FFF" cx="7.941" cy="10.941" rx=".941" ry=".941"></ellipse></g></svg>
                        </svg>
                    </div>
                    <p class="item-status-notification__title"></p>
                </div>
            </div>
        </section> 
        @if($errors->any()) 
            <div class="alert alert-warning alert-dismissable"><button type="button" class="close" data-dismiss="alert">&times;</button><strong>Ups!</strong>{{$errors->first()}}</div>
        @endif

        @if($datos->estadoPublicacion===2)
        <section class="item-status bg-alt">
            <div class="item-status-notification">
                <div class="ch-box-info">
                    <div class="ui-icon--content">
                        <svg viewBox="0 0 100 100" role="presentation" class="ui-icon ui-icon--question-blocked">
                        <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#ui-icon--question-blocked"></use>
                        </svg>
                    </div>
                    
                    <p class="item-status-notification__title">
                    Publicación pausada
                    </p> 
                </div>
            </div>
        </section>
        @endif
        <section class="carousel-common__section carousel-common--with-installments">
            <div id="similarItemsCarousel" class="vip-section-carousel"></div>
        </section>    
    </div>
</section> 
        <div class="vip-nav-bounds" style="text-align: left;">
                <a id="contactAnchor"></a>
                <div class="layout-main u-clearfix">
                    <div class="layout-col layout-col--left">
                        


    

    <div class="vip-gallery-container ">
        <div id="productGalleryCollection" class="vip-gallery" data-gallery="">
            


<span class="product-gallery-nav" data-direction="previous" style="">
    <svg width="50" height="50" viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg" class="ui-icon ui-icon--chevron--left"><g fill="#3483fa" fill-rule="evenodd"><path d="M6.646 5.354l4 4 .354.353.707-.707-.353-.354-4-4L7 4.293 6.293 5z"></path><path d="M7.354 13.354l4-4L11.707 9 11 8.293l-.354.353-4 4-.353.354.707.707z"></path></g></svg>
</span>
<span class="product-gallery-nav" data-direction="next" style="">
    <svg width="50" height="50" viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg" class="ui-icon ui-icon--chevron--right"><g fill="#3483fa" fill-rule="evenodd"><path d="M6.646 5.354l4 4 .354.353.707-.707-.353-.354-4-4L7 4.293 6.293 5z"></path><path d="M7.354 13.354l4-4L11.707 9 11 8.293l-.354.353-4 4-.353.354.707.707z"></path></g></svg>
</span>

            <div id="gallery_dflt" class="product-gallery thumbs-col-1 ch-enlarge ch-points-ltrt" style="min-height: 350px">
                







<div class="gallery-content item-gallery__wrapper" data-gallery-id="default" data-full-images="[{&quot;src&quot;:&quot;&quot;,&quot;w&quot;:&quot;1118&quot;,&quot;h&quot;:&quot;698&quot;}]">
    
        
            
            
            
                
                <label for="thumbgallery_default-0" class="gallery__thumbnail gallery__thumbnail--selected" data-imgindex="0">
                    
                        <span class="ch-icon ch-icon-search"></span>
                    
                    
                    <img src="images/{{ $datos->idUser }}/{{$datos->idPublicacion}}/{{$imagen->url}}" width="70" height="70">
                    
                </label>
           
            
                <input type="radio" id="thumbgallery_default-0" class="thumbgallery_default-0" name="product-gallery-thumbnail_default" checked="">
            
            <figure class="gallery-image-container thumbgallery_default-0" data-side="right" data-align="top">
                
                <a href="images/{{ $datos->idUser }}/{{$datos->idPublicacion}}/{{$imagen->url}}" class="gallery-trigger gallery-item--landscape ch-zoom-trigger ch-shownby-pointerenter" data-imgindex="0" data-size="1118x698" style="height: 312px; width: 500px;" data-uid="1" aria-owns="ch-zoom-1" aria-haspopup="true">
                    <img src="images/{{ $datos->idUser }}/{{$datos->idPublicacion}}/{{$imagen->url}}" width="500" height="312" data-srcset="images/{{ $datos->idUser }}/{{$datos->idPublicacion}}/{{$imagen->url}} 2x" alt="alfa romeo" data-imgindex="0" srcset="images/{{ $datos->idUser }}/{{$datos->idPublicacion}}/{{$imagen->url}}">
                <div class="ch-zoom-loading ch-hide" style="left: 201px; top: 107px;"><div class="ch-loading-large"></div><p>Cargando zoom...</p></div><div class="ch-zoom-seeker ch-hide" style="width: 186px; height: 169px; left: 0px; top: 45.4063px;"></div></a>
            </figure>
        
    

    
        
            <label for="thumbgallery_default-1" class="gallery__thumbnail">
                <img class="icon-video__img" src="#" data-imgindex="2" data-video-id="DCJCazILkCE" width="70" height="70">
                <div class="icon-video ui-icon--content ui-icon__video">
                    <svg viewBox="0 0 60 60" id="ui-icon--video" xmlns="http://www.w3.org/2000/svg" width="100%" height="100%"><g fill="none" fill-rule="evenodd"><rect fill-opacity=".7" fill="#FFF" width="60" height="60" rx="30"></rect><path fill="#3483FA" d="M23 20v20.395l17.709-10.191z"></path></g></svg>
                </div>
            </label>
        
        
            <input type="radio" id="thumbgallery_default-1" class="thumbgallery_default-1" name="product-gallery-thumbnail_default">
         
    
</div>



            </div>
        </div>
    </div>

<!-- Root element of PhotoSwipe. Must have class pswp. -->
<div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">

    <!-- Background of PhotoSwipe.
         It's a separate element, as animating opacity is faster than rgba(). -->
    <div class="pswp__bg"></div>

    <!-- Slides wrapper with overflow:hidden. -->
    <div class="pswp__scroll-wrap">

        <!-- Container that holds slides.
            PhotoSwipe keeps only 3 of them in DOM to save memory.
            Don't modify these 3 pswp__item elements, data is added later on. -->
        <div class="pswp__container" style="transform: translate3d(-1511px, 0px, 0px);">
            <div class="pswp__item" style="display: block; transform: translate3d(3022px, 0px, 0px);"></div>
            <div class="pswp__item" style="transform: translate3d(0px, 0px, 0px);"><div class="pswp__zoom-wrap" style="transform: translate3d(258px, 44px, 0px) scale(0.744986);"><img class="pswp__img" src="#" style="backface-visibility: hidden; opacity: 1; display: block;"></div></div>
            <div class="pswp__item" style="display: block; transform: translate3d(1511px, 0px, 0px);"><div class="pswp__zoom-wrap" style="transform: translate3d(0px, 0px, 0px) scale(1);"></div></div>
        </div>

        <!-- Default (PhotoSwipeUI_Default) interface on top of sliding area. Can be changed. -->
        <div class="pswp__ui pswp__ui--fit pswp__ui--hidden">

            <div class="pswp__top-bar">

                <!--  Controls are self-explanatory. Order can be changed. -->

                <div class="pswp__counter">2 / 2</div>

                
                  <span class="pswp__button pswp__button--close ch-icon-remove" title="Cerrar (Esc)">
                    <svg width="22" height="22" viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg" class="ui-icon ui-icon-remove">
    <g fill="#000" fill-rule="evenodd">
        <path d="M1.646 2.354l14 14 .708-.708-14-14z"></path>
        <path d="M15.646 1.646l-14 14 .708.708 14-14z"></path>
    </g>
</svg>

                  </span>
                
                <!-- Preloader demo http://codepen.io/dimsemenov/pen/yyBWoR -->
                <!-- element will get class pswp__preloader--active when preloader is running -->
                <div class="pswp__preloader">
                    <div class="pswp__preloader__icn">
                        <div class="pswp__preloader__cut">
                            <div class="pswp__preloader__donut"></div>
                        </div>
                    </div>
                </div>
            </div>

            

            
                <button class="pswp__button pswp__button--arrow--left" title="Anterior (arrow left)">
                  <svg width="22" height="22" viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg" class="ui-icon">
    <g fill="#000" fill-rule="evenodd">
        <path d="M10.646 4.646l-4 4L6.293 9 7 9.707l.354-.353 4-4L11.707 5 11 4.293z"></path>
        <path d="M11.354 12.646l-4-4L7 8.293 6.293 9l.353.354 4 4 .354.353.707-.707z"></path>
    </g>
</svg>

                </button>

                <button class="pswp__button pswp__button--arrow--right" title="Siguiente (arrow right)">
                  <svg width="22" height="22" viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg" class="ui-icon ui-icon--chevron-right">
    <g fill="#000" fill-rule="evenodd">
        <path d="M6.646 5.354l4 4 .354.353.707-.707-.353-.354-4-4L7 4.293 6.293 5z"></path>
        <path d="M7.354 13.354l4-4L11.707 9 11 8.293l-.354.353-4 4-.353.354.707.707z"></path>
    </g>
</svg>

                </button>
            

            <div class="pswp__caption">
                <div class="pswp__caption__center"></div>
            </div>
        </div>
    </div>
</div>


                            <section class="ui-view-more vip-section-specs main-section">
    <h2 class="main-section__title">
       Ficha técnica
    </h2>
    
    <div class="description-content-main-group attribute-content">
        
        <div class="card-section">
            
    <div class="specs-wrapper">
        <section class="specs-container specs-layout-alternate">
            <ul class="specs-list">
                    @if($datos->motor!=null)
                    <li class="specs-item">
                    <strong>Marca del motor</strong>
                    <span>2</span>
                    </li>
                    @endif
                    @if($datos->tipoVenta=='VEHI')
                        @if($datos->kilometros!=null)
                        <li class="specs-item">
                        <strong>Kilómetros</strong>
                        <span>{{$datos->kilometros}} km</span>
                        </li>
                        @endif
                    @endif
                    @if($datos->marca!=null)
                    <li class="specs-item">
                    <strong>Marca</strong>
                    <span>{{$datos->marca}}</span>
                    </li>
                    @endif
                    @if($datos->modelo!=null)
                    <li class="specs-item">
                    <strong>Modelo</strong>
                    <span>{{$datos->modelo}}</span>
                    </li>
                    @endif
                    @if($datos->anio!=null)
                    <li class="specs-item">
                    <strong>Año</strong>
                    <span>{{$datos->anio}}</span>
                    </li>
                    @endif
            </ul>
        </section>
    </div>



        </div>

    </div>


    

    <div class="description-content-secondary-group attribute-content">
        
            
    <input type="checkbox" class="ui-dropdown__input" id="ui-dropdown-0">
    <div class="ui-dropdown">
        <label class="ui-view-more__title ui-dropdown__trigger" role="button" for="ui-dropdown-0">
            <span>Adicionales</span>
            <span class="ui-view-more__arrow"></span>
        </label>
        <div class="ui-dropdown__content">
            <div class="item-details__content ui-view-more__content">
                <ul class="attribute-list">
                    
                        <li>
    Dirección
    
        : <span>Hidráulica</span>
    
</li>


                    
                        <li>
    Transmisión
    
        : <span>Manual</span>
    
</li>


                    
                        
                    
                </ul>
            </div>
        </div>
    </div>


        
        
    </div>

</section>
    


    
        <section class="main-section item-description ">
            
                <h2 class="main-section__title item-description__title">Descripción</h2>
            

            
            
    <div id="description-includes" class="item-description__content ">

    

    
    <div class="item-description__text">
        <p>{{$datos->descripcion}}</p>
    </div>



  <!--   aqui empiezan los comentarios -->
</div>
<section id="SECTION_1">
    <h2 id="H2_2">
        Preguntas y respuestas
    </h2>
    <p id="P_3">
        ¿Qué quieres saber?
    </p>
    <div id="DIV_4">
         <a rel="nofollow" href="#" id="A_5">Medios de pago </a> <a rel="nofollow" href="#" id="A_6">Garantía</a>
        <div id="DIV_7">
            <div id="DIV_8">
                <p id="P_9">
                    ¿Tienes dudas?
                </p>
                <p id="P_10">
                    Estos atajos te ayudarán a encontrar lo que buscas.
                </p>
            </div><span id="SPAN_11"></span>
        </div>
    </div>
    <p id="P_12">
        O pregúntale al vendedor
    </p>
    <form action="/noindex/questions/make?noIndex=true" method="POST" id="FORM_13">
        <div id="DIV_14">
            <div id="DIV_15">
                <div id="DIV_16">
                    <textarea id="TEXTAREA_17" name="question" placeholder="Escribe una pregunta...">
                    </textarea>
                </div>
                <div id="DIV_18">
                    <p id="P_19">
                        Tiempo aproximado de respuesta <strong id="STRONG_20">7 minutos</strong>
                    </p>
                </div>
            </div>
            <div id="DIV_21">
                <input id="INPUT_22" type="submit" value="Preguntar" />
            </div>
        </div>
        <input type="hidden" name="itemId" value="MLM609549218" id="INPUT_23" />
        <input type="hidden" name="categoryId" value="MLM145823" id="INPUT_24" />
        <input type="hidden" name="token" value="76e25a63da2e248fb1dc1dd6496312ab7f15d3efb5ae71a17ad269b424c1e1f903291c10d09e83b43c8b214a36aa61e0f6d58c42638b323304ca48fdd44ced70" id="INPUT_25" />
        <input type="hidden" name="itemPermalink" value="https://articulo.mercadolibre.com.mx/MLM-609549218-hublot-king-power-unico-world-time-18k-oro-rosa-_JM" id="INPUT_26" />
        <input type="hidden" name="searchReferer" id="INPUT_27" />
        <input type="checkbox" id="INPUT_28" />
    </form>
    
    <script id="SCRIPT_30">document.addEventListener("DOMContentLoaded", function() {new BTSDK({ type:'desktop',keyboardForm:'form#questions-form',paramsConstants:{department:'aff0060dd11496b0fea4ad7a364df3bd',form_name:'meli_contact_seller',user_id:236377324,site_id:'MLM'}})});
        </script>
    <div id="DIV_31">
                <p id="P_32">
                </p>
                <ul id="UL_33">
                </ul>
            </div>
    <div id="DIV_34">
                <p id="P_35">
                    Últimas preguntas
                </p>
                <ul id="UL_36">
                    <li id="LI_37">
                        <article id="ARTICLE_38">
                            <div id="DIV_39">
                                <svg id="svg_40">
                                    <use id="use_41">
                                    </use>
                                </svg>
                            </div>
                            <div id="DIV_42">
                                <p id="P_43">
                                    Hola me interesa el reloj cual es su último precio?
                                </p> <a href="//www.mercadolibre.com.mx/noindex/denounce/?item_id=MLM609549218&amp;element_id=5429286981&amp;element_type=QUES" id="A_44">Denunciar</a>
                            </div>
                        </article>
                        <article id="ARTICLE_45">
                            <div id="DIV_46">
                                <svg id="svg_47">
                                    <use id="use_48">
                                    </use>
                                </svg>
                            </div>
                            <div id="DIV_49">
                                <p id="P_50">
                                    Que tal buen dia se lo podria dejar en 550,000 pesos completamente nuevo de fabrica empacado con todos sus plasticos de fabrica, caja y papeles donde se encuentra usted?
                                </p>
                                <time id="TIME_51">
                                    31/3/2018 09:20
                                </time> <a href="//www.mercadolibre.com.mx/noindex/denounce/?item_id=MLM609549218&amp;element_id=5429286981&amp;element_type=ANSW" id="A_52">Denunciar</a>
                            </div>
                        </article>
                    </li>
                    <li id="LI_53">
                        <article id="ARTICLE_54">
                            <div id="DIV_55">
                                <svg id="svg_56">
                                    <use id="use_57">
                                    </use>
                                </svg>
                            </div>
                            <div id="DIV_58">
                                <p id="P_59">
                                    Amigo no me aparecen fotos de tu publicación
                                </p> <a href="//www.mercadolibre.com.mx/noindex/denounce/?item_id=MLM609549218&amp;element_id=5326177046&amp;element_type=QUES" id="A_60">Denunciar</a>
                            </div>
                        </article>
                        <article id="ARTICLE_61">
                            <div id="DIV_62">
                                <svg id="svg_63">
                                    <use id="use_64">
                                    </use>
                                </svg>
                            </div>
                            <div id="DIV_65">
                                <p id="P_66">
                                    Una disculpa en la mañana subo muchas para que vea como viene el reloj viene sellado de hublot jamas se a usado 100% nuevo!!
                                </p>
                                <time id="TIME_67">
                                    14/2/2018 00:19
                                </time> <a href="//www.mercadolibre.com.mx/noindex/denounce/?item_id=MLM609549218&amp;element_id=5326177046&amp;element_type=ANSW" id="A_68">Denunciar</a>
                            </div>
                        </article>
                    </li>
                    
                    
                </ul>
            </div>
</section>
<!-- aqui terminan los comentarios  -->
        </section>

                        
                    </div>
                    <div class="layout-col layout-col--right">
                        <div class="layout-description-wrapper" data-js-desc-wrap="">
                            
                                <section class="short-description transition short-description--blocked down-payment" data-js-short-desc="" id="short-desc">
    <div class="short-description__floating">

        <article class="vip-classified-info">
    <dl>
            
            @if($datos->tipoVenta=='VEHI')
            <dd>Dispobles: <b>{{$datos->cantidad}}</b></dd> <b>|</b> <dd>Vendidos: <b>{{$totalVentas}}</b></dd><br>
            <dt>Año</dt>
            <dd>{{$datos->anio}}</dd>
                @if($datos->kilometros!=null)
                <dt>Kilómetros</dt>
                <dd>{{$datos->kilometros}} km</dd> 
                @endif
            @else  
                <dd>Dispobles: <b>{{$datos->cantidad}}</b></dd> <b>|</b> <dd>Vendidos: <b>{{$totalVentas}}</b></dd> 
            @endif
    </dl>
</article>
        <header class="item-title" data-js-item-title="">
    <h1 class="item-title__primary ">
        {{$datos->titulo}}
    </h1>
</header> 
        <fieldset class="item-price "> 
    <span class="price-tag price-tag-motors"> 
            
            <span class="price-tag-symbol" content="100000.0">$</span>
<span class="price-tag-fraction">{{$datos->precio}}</span> 
    </span> 
</fieldset>   
@if($datos->estadoPublicacion===2)
    <div class="ch-box-info">  
        <div class="ui-icon--content">
            <svg viewBox="0 0 16 16" id="ui-icon--question-blocked" xmlns="http://www.w3.org/2000/svg" width="100%" height="100%"><g fill="none" fill-rule="evenodd"><circle fill="#F57819" transform="rotate(-180 8 8)" cx="8" cy="8" r="8"></circle><path fill="#FFF" d="M7 3h1.882l-.235 5.176H7.235z"></path><ellipse fill="#FFF" cx="7.941" cy="10.941" rx=".941" ry=".941"></ellipse></g></svg>
        </div>
        
            <p class="item-status-notification__title">
                
                    Publicación pausada
                
            </p> 
    </div> 
@endif
    </div> 
</section> 
    <section class="ui-view-more vip-section-seller-info">
        <p class="card-title">
            
                Información sobre el vendedor
            
        </p> 

    <p class="card-subtitle name">Nombre</p>
    <p class="card-description card-description--bold">
        <span>{{$vendedor}}</span>
    </p> 

    <div class="card-section"> 

<div class="card-section seller-thermometer">
    <div class="reputation reputation-level-newbie null mesh-row ">
        <div class="vip-reputation-info">
            <ol class="reputation-thermometer">
                <li class="reputation-thermometer-1">Rojo</li>
                <li class="reputation-thermometer-2">Naranja</li>
                <li class="reputation-thermometer-3">Amarillo</li>
                <li class="reputation-thermometer-4">Verde claro</li>
                <li class="reputation-thermometer-5">Verde</li>
            </ol> 
        </div>
    </div>
</div> 
    </div> 
    <div class="reputation-info block">
        <p class="card-subtitle reputation-title">Este vendedor <strong>aún no tiene suficientes ventas</strong> para calcular su reputación.</p> 
            <div class="feedback-title">
                  <input type="hidden" name="_token" value="{{ csrf_token() }}" id="token"> 
                
                    Paga el apartado con Mercado Pago. Si cambias de opinión, te devolvemos el 100% de tu dinero.
                    <br>
        
                    <div>
                @isset(auth()->user()->_id)
                @if($idVendedor!=auth()->user()->_id) 
                    <div class="row" >
                        <div class="col-md-6 cont-btn-comprar">
                            <form action="{{route('recibirPor')}}" method="post" accept-charset="utf-8"> 
                                <input type="hidden" name="_token" value="{{ csrf_token() }}" id="token"> 
                                <input type="hidden" name="titulo" id="titulo" value="{{$datos->titulo}}">
                                <input type="hidden" name="precio" id="precio" value="{{$datos->precio}}">
                                <input type="hidden" name="color" id="color" value="{{$datos->color}}">
                                <input type="hidden" name="idArticulo" id="idArticulo" value="{{$datos->_id}}">
                                <input type="hidden" name="idPublicacion" id="idPublicacion" value="{{$datos->idPublicacion}}">
                                <input type="hidden" name="idUser" id="idUser" value="{{$datos->idUser}}"> 
                                <input type="hidden" name="cantidadDisponibles" id="cantidadDisponibles" value="{{$datos->cantidad}}">
                                <input type="hidden" name="urlPrincipal" id="urlPrincipal" value="{{$datos->urlPrincipal}}">
                                <input type="hidden" name="cantidadArticulos" value="1">
                                <input type="submit"  class="ui-button ui-button--secondary " style="font-size: 15px!important;min-width: 0;padding: 15px 16px;border: 1px solid #3483fa; color: white ;background: #3483fa;border-radius: 4px; margin-top: 40px; margin-right: 5px" value="      Comprar  ahora   ">
                            </form> 

                        </div>
                        <div class="col-md-6 cont-btn-agregar">
                            <form action="agregaralCarrito" method="post" accept-charset="utf-8">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}" id="token"> 
                                <input type="hidden" name="titulo" id="titulo" value="{{$datos->titulo}}">
                                <input type="hidden" name="precio" id="precio" value="{{$datos->precio}}">
                                <input type="hidden" name="color" id="color" value="{{$datos->color}}">
                                <input type="hidden" name="idArticulo" id="idArticulo" value="{{$datos->_id}}">
                                <input type="hidden" name="idPublicacion" id="idPublicacion" value="{{$datos->idPublicacion}}">
                                <input type="hidden" name="idUser" id="idUser" value="{{$datos->idUser}}"> 
                                <input type="hidden" name="cantidadDisponibles" id="cantidadDisponibles" value="{{$datos->cantidad}}">
                                <input type="hidden" name="urlPrincipal" id="urlPrincipal" value="{{$datos->urlPrincipal}}">
                                <input type="hidden" name="cantidadArticulos" value="1">
                                <input type="submit"  class="ui-button ui-button--secondary " style="font-size: 15px!important;min-width: 0;    margin-top: 40px;padding: 12px 16px;border: 1px solid #3483fa;    color: #3483fa;background: none;border-radius: 4px;" value="Agregar al carrito">
                            </form> 
                        </div>
                    </div> 
                @endif
                @endisset
                @empty(auth()->user()->_id)
                <div class="row" >
                        <div class="col-md-6 cont-btn-comprar">
                            <form action="{{route('recibirPor')}}" method="post" accept-charset="utf-8"> 
                                <input type="hidden" name="_token" value="{{ csrf_token() }}" id="token"> 
                                <input type="hidden" name="titulo" id="titulo" value="{{$datos->titulo}}">
                                <input type="hidden" name="precio" id="precio" value="{{$datos->precio}}">
                                <input type="hidden" name="color" id="color" value="{{$datos->color}}">
                                <input type="hidden" name="idArticulo" id="idArticulo" value="{{$datos->_id}}">
                                <input type="hidden" name="idPublicacion" id="idPublicacion" value="{{$datos->idPublicacion}}">
                                <input type="hidden" name="idUser" id="idUser" value="{{$datos->idUser}}"> 
                                <input type="hidden" name="cantidadDisponibles" id="cantidadDisponibles" value="{{$datos->cantidad}}">
                                <input type="hidden" name="urlPrincipal" id="urlPrincipal" value="{{$datos->urlPrincipal}}">
                                <input type="hidden" name="cantidadArticulos" value="1">
                                <input type="submit"  class="ui-button ui-button--secondary " style="font-size: 15px!important;min-width: 0;padding: 15px 16px;border: 1px solid #3483fa; color: white ;background: #3483fa;border-radius: 4px; margin-top: 40px; margin-right: 5px" value="      Comprar  ahora   ">
                            </form> 

                        </div>
                        <div class="col-md-6 cont-btn-agregar">
                            <form action="agregaralCarrito" method="post" accept-charset="utf-8">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}" id="token"> 
                                <input type="hidden" name="titulo" id="titulo" value="{{$datos->titulo}}">
                                <input type="hidden" name="precio" id="precio" value="{{$datos->precio}}">
                                <input type="hidden" name="color" id="color" value="{{$datos->color}}">
                                <input type="hidden" name="idArticulo" id="idArticulo" value="{{$datos->_id}}">
                                <input type="hidden" name="idPublicacion" id="idPublicacion" value="{{$datos->idPublicacion}}">
                                <input type="hidden" name="idUser" id="idUser" value="{{$datos->idUser}}"> 
                                <input type="hidden" name="cantidadDisponibles" id="cantidadDisponibles" value="{{$datos->cantidad}}">
                                <input type="hidden" name="urlPrincipal" id="urlPrincipal" value="{{$datos->urlPrincipal}}">
                                <input type="hidden" name="cantidadArticulos" value="1">
                                <input type="submit"  class="ui-button ui-button--secondary " style="font-size: 15px!important;min-width: 0;    margin-top: 40px;padding: 12px 16px;border: 1px solid #3483fa;    color: #3483fa;background: none;border-radius: 4px;" value="Agregar al carrito">
                            </form> 
                        </div>
                    </div> 
                @endempty
                </div>
            </div> 
    </div> 
    <p class="card-subtitle">Ubicación del vehículo</p>
    <p class="card-description">
        <span> 
    </span></p><div class="location-info">
        <div class="ui-icon--content">
            <svg viewBox="0 0 14 19" id="ui-icon--location-mark" xmlns="http://www.w3.org/2000/svg" width="100%" height="100%"><path d="M6.984.003C3.162.003.053 3.198.053 7.125c0 5.84 6.28 10.799 6.547 11.007a.622.622 0 0 0 .78-.01c.266-.218 6.536-5.416 6.536-10.997 0-3.927-3.11-7.122-6.932-7.122zm-.009 16.762c-1.341-1.159-5.652-5.228-5.652-9.64 0-3.208 2.54-5.818 5.66-5.818 3.123 0 5.663 2.61 5.663 5.818 0 4.21-4.335 8.437-5.671 9.64zm.009-12.494c-1.531 0-2.777 1.28-2.777 2.854 0 1.573 1.246 2.853 2.777 2.853 1.53 0 2.777-1.28 2.777-2.853 0-1.574-1.246-2.854-2.777-2.854zm0 4.403c-.831 0-1.507-.695-1.507-1.549s.676-1.55 1.507-1.55c.83 0 1.507.696 1.507 1.55 0 .854-.676 1.549-1.507 1.549z" fill-rule="nonzero" fill="#333"></path></svg>
        </div> 
            {{$datos->colonia}} - {{$datos->municipio}} - {{$datos->estado}} 
    </div> 
    <p></p> 
                <span class="seller-info-link"> 
                </span> 
    </section> 
                            <section class="vip-section-related-services">
    <div id="related-services-container"></div>
</section> 
                            <section class="ui-view-more vip-section-security">
    <h3 class="card-title">
        Consejos de seguridad
    </h3> 
    <div class="card-section borderless">
    <ul>
        
            <li>Aparta el vehículo solamente por Mercado Libre. No reserves con envíos de dinero. No recibas cupones de pago del vendedor.</li>
        
            <li>Mercado Libre no tiene vehículos bajo su custodia.</li>
        
            <li>Revisa el remitente de los e-mails que envía Mercado Libre. Ante cualquier duda, entra en <a id="guide" rel="nofollow" href="https://ayuda.mercadolibre.com.mx/ayuda/Creo-que-recibi-un-e-mail-falso_947">Creo que recibí un e-mail falso</a>.</li>
        
            <li>Desconfía de ofertas debajo del precio de mercado. Mira nuestra <a id="guide" rel="nofollow" href="http://www.mercadolibre.com.mx/precios_de_autos">guía de precios</a>.</li>
        
    </ul> 
        <a id="guide" rel="nofollow" href="https://www.mercadolibre.com.mx/ayuda/3835" class="ui-view-more__link">Más consejos de seguridad</a> 
</div> 
</section> 
        <section class="vip-section-display ch-hide">
            <div class="vip-section-display__wrapper">
                <div class="vip-section-display__container" id="motorsMiddleAdvertising"></div>
                <p class="vip-section-display__text">Publicidad</p>
            </div>
        </section> 
                        </div>
                        <div class="layout-anchor"></div>
                    </div>
                </div> 
<section class="item-info">
    <p class="item-info__id">Publicación <span class="item-info__id-number">#646934777</span></p> 
    <p class="item-info__denounce"><a href="#" id="denounce" rel="nofollow">Denunciar</a></p> 
</section> 
            </div> 
 
@stop