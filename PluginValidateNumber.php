<?php
class PluginValidateNumber{
  public function is_numeric($value){
    return is_numeric($value);
  }
  public function is_decimal($value){
    return is_numeric( $value ) && floor( $value ) != $value;
  }
}