<?php
  //total counts
  $sql1 ="SELECT count(id) As total FROM users";
      $result1=mysqli_query($mysqli,$sql1);
      $values=mysqli_fetch_assoc($result1);
      $users=$values['total'];
  $sql2 ="SELECT count(id) As total2 FROM reports ";
      $result2=mysqli_query($mysqli,$sql2);
      $values=mysqli_fetch_assoc($result2);
      $reports=$values['total2'];
  $sql3 ="SELECT count(id) As total3 FROM reports WHERE status=0";
      $result3=mysqli_query($mysqli,$sql3);
      $values=mysqli_fetch_assoc($result3);
      $requests=$values['total3'];
  $sql4 ="SELECT count(id) As total4 FROM reports WHERE status=5";
      $result4=mysqli_query($mysqli,$sql4);
      $values=mysqli_fetch_assoc($result4);
      $archives=$values['total4'];
  $sql5 ="SELECT count(id) As total5 FROM reports WHERE status=3";
      $result5=mysqli_query($mysqli,$sql5);
      $values=mysqli_fetch_assoc($result5);
      $active_case=$values['total5'];
  $sql6 ="SELECT count(id) As total6 FROM reports WHERE status=1 or status=2 or status=3 or status=4";
      $result6=mysqli_query($mysqli,$sql6);
      $values=mysqli_fetch_assoc($result6);
      $reports_process=$values['total6'];
  $sql7 ="SELECT count(id) As total7 FROM reports WHERE status=5";
      $result7=mysqli_query($mysqli,$sql7);
      $values=mysqli_fetch_assoc($result7);
      $found=$values['total7'];

//total graph data

    //male per month
$sql_sept_male ="SELECT count(id) As total_sept_male FROM reports WHERE gender='MALE' AND QUARTER(alarm_issue_date)=1 AND status=3 OR status=4 OR status=5";
    $result_sept_male=mysqli_query($mysqli,$sql_sept_male);
    $values=mysqli_fetch_assoc($result_sept_male);
    $male_sept=$values['total_sept_male'];
$sql_oct_male ="SELECT count(id) As total_oct_male FROM reports WHERE gender='MALE' AND QUARTER(alarm_issue_date)=2 AND status=3 OR status=4 OR status=5";
    $result_oct_male=mysqli_query($mysqli,$sql_oct_male);
    $values=mysqli_fetch_assoc($result_oct_male);
    $male_oct=$values['total_oct_male'];
$sql_nov_male ="SELECT count(id) As total_nov_male FROM reports WHERE gender='MALE' AND QUARTER(alarm_issue_date)=3 AND status=3 OR status=4 OR status=5";
    $result_nov_male=mysqli_query($mysqli,$sql_nov_male);
    $values=mysqli_fetch_assoc($result_nov_male);
    $male_nov=$values['total_nov_male'];
$sql_dec_male ="SELECT count(id) As total_dec_male FROM reports WHERE gender='MALE' AND QUARTER(alarm_issue_date)=4 AND status=3 OR status=4 OR status=5";
    $result_dec_male=mysqli_query($mysqli,$sql_dec_male);
    $values=mysqli_fetch_assoc($result_dec_male);
    $male_dec=$values['total_dec_male'];

    //female per month
$sql_sept_female ="SELECT count(id) As total_sept_female FROM reports WHERE gender='FEMALE' AND QUARTER(alarm_issue_date)=1 AND status=3 OR status=4 OR status=5";
    $result_sept_female=mysqli_query($mysqli,$sql_sept_female);
    $values=mysqli_fetch_assoc($result_sept_female);
    $female_sept=$values['total_sept_female'];
$sql_oct_female ="SELECT count(id) As total_oct_female FROM reports WHERE gender='FEMALE' AND QUARTER(alarm_issue_date)=2 AND status=3 OR status=4 OR status=5";
    $result_oct_female=mysqli_query($mysqli,$sql_oct_female);
    $values=mysqli_fetch_assoc($result_oct_female);
    $female_oct=$values['total_oct_female'];
$sql_nov_female ="SELECT count(id) As total_nov_female FROM reports WHERE gender='FEMALE' AND QUARTER(alarm_issue_date)=3 AND status=3 OR status=4 OR status=5";
    $result_nov_female=mysqli_query($mysqli,$sql_nov_female);
    $values=mysqli_fetch_assoc($result_nov_female);
    $female_nov=$values['total_nov_female'];
$sql_dec_female ="SELECT count(id) As total_dec_female FROM reports WHERE gender='FEMALE' AND QUARTER(alarm_issue_date)=4 AND status=3 OR status=4 OR status=5";
    $result_dec_female=mysqli_query($mysqli,$sql_dec_female);
    $values=mysqli_fetch_assoc($result_dec_female);
    $female_dec=$values['total_dec_female'];

    //children (0-17 y/old) 
$sql_sept_children ="SELECT count(id) As total_sept_children FROM reports WHERE age BETWEEN 0 AND 17 AND QUARTER(alarm_issue_date)=1 AND status=3 OR status=4 OR status=5";
    $result_sept_children=mysqli_query($mysqli,$sql_sept_children);
    $values=mysqli_fetch_assoc($result_sept_children);
    $children_sept=$values['total_sept_children'];
$sql_oct_children ="SELECT count(id) As total_oct_children FROM reports WHERE age BETWEEN 0 AND 17 AND QUARTER(alarm_issue_date)=2 AND status=3 OR status=4 OR status=5";
    $result_oct_children=mysqli_query($mysqli,$sql_oct_children);
    $values=mysqli_fetch_assoc($result_oct_children);
    $children_oct=$values['total_oct_children'];
$sql_nov_children ="SELECT count(id) As total_nov_children FROM reports WHERE age BETWEEN 0 AND 17 AND QUARTER(alarm_issue_date)=3 AND status=3 OR status=4 OR status=5";
    $result_nov_children=mysqli_query($mysqli,$sql_nov_children);
    $values=mysqli_fetch_assoc($result_nov_children);
    $children_nov=$values['total_nov_children'];
$sql_dec_children ="SELECT count(id) As total_dec_children FROM reports WHERE age BETWEEN 0 AND 17 AND QUARTER(alarm_issue_date)=4 AND status=3 OR status=4 OR status=5";
    $result_dec_children=mysqli_query($mysqli,$sql_dec_children);
    $values=mysqli_fetch_assoc($result_dec_children);
    $children_dec=$values['total_dec_children'];

    //adult (18-59 y/old)
$sql_sept_adult ="SELECT count(id) As total_sept_adult FROM reports WHERE age BETWEEN 18 AND 59 AND QUARTER(alarm_issue_date)=1 AND status=3 OR status=4 OR status=5";
    $result_sept_adult=mysqli_query($mysqli,$sql_sept_adult);
    $values=mysqli_fetch_assoc($result_sept_adult);
    $adult_sept=$values['total_sept_adult'];
$sql_oct_adult ="SELECT count(id) As total_oct_adult FROM reports WHERE age BETWEEN 18 AND 59 AND QUARTER(alarm_issue_date)=2 AND status=3 OR status=4 OR status=5";
    $result_oct_adult=mysqli_query($mysqli,$sql_oct_adult);
    $values=mysqli_fetch_assoc($result_oct_adult);
    $adult_oct=$values['total_oct_adult'];
$sql_nov_adult ="SELECT count(id) As total_nov_adult FROM reports WHERE age BETWEEN 18 AND 59 AND QUARTER(alarm_issue_date)=3 AND status=3 OR status=4 OR status=5";
    $result_nov_adult=mysqli_query($mysqli,$sql_nov_adult);
    $values=mysqli_fetch_assoc($result_nov_adult);
    $adult_nov=$values['total_nov_adult'];
$sql_dec_adult ="SELECT count(id) As total_dec_adult FROM reports WHERE age BETWEEN 18 AND 59 AND QUARTER(alarm_issue_date)=4 AND status=3 OR status=4 OR status=5";
    $result_dec_adult=mysqli_query($mysqli,$sql_dec_adult);
    $values=mysqli_fetch_assoc($result_dec_adult);
    $adult_dec=$values['total_dec_adult'];

    //senior citizen(60 y/old)
$sql_sept_senior ="SELECT count(id) As total_sept_senior FROM reports WHERE age BETWEEN 60 AND 200 AND QUARTER(alarm_issue_date)=1 AND status=3 OR status=4 OR status=5";
    $result_sept_senior=mysqli_query($mysqli,$sql_sept_senior);
    $values=mysqli_fetch_assoc($result_sept_senior);
    $senior_sept=$values['total_sept_senior'];
$sql_oct_senior ="SELECT count(id) As total_oct_senior FROM reports WHERE age BETWEEN 60 AND 200 AND QUARTER(alarm_issue_date)=2 AND status=3 OR status=4 OR status=5";
    $result_oct_senior=mysqli_query($mysqli,$sql_oct_senior);
    $values=mysqli_fetch_assoc($result_oct_senior);
    $senior_oct=$values['total_oct_senior'];
$sql_nov_senior ="SELECT count(id) As total_nov_senior FROM reports WHERE age BETWEEN 60 AND 200 AND QUARTER(alarm_issue_date)=3 AND status=3 OR status=4 OR status=5";
    $result_nov_senior=mysqli_query($mysqli,$sql_nov_senior);
    $values=mysqli_fetch_assoc($result_nov_senior);
    $senior_nov=$values['total_nov_senior'];
$sql_dec_senior ="SELECT count(id) As total_dec_senior FROM reports WHERE age BETWEEN 60 AND 200 AND QUARTER(alarm_issue_date)=4 AND status=3 OR status=4 OR status=5";
    $result_dec_senior=mysqli_query($mysqli,$sql_dec_senior);
    $values=mysqli_fetch_assoc($result_dec_senior);
    $senior_dec=$values['total_dec_senior'];

    //total missing reports per quarter
$sql_sept_report ="SELECT count(id) As total_sept_report FROM reports WHERE QUARTER(alarm_issue_date)=1 AND status=3 OR status=4 OR status=5";
    $result_sept_report=mysqli_query($mysqli,$sql_sept_report);
    $values=mysqli_fetch_assoc($result_sept_report);
    $report_sept=$values['total_sept_report'];
$sql_oct_report ="SELECT count(id) As total_oct_report FROM reports WHERE QUARTER(alarm_issue_date)=2 AND status=3 OR status=4 OR status=5";
    $result_oct_report=mysqli_query($mysqli,$sql_oct_report);
    $values=mysqli_fetch_assoc($result_oct_report);
    $report_oct=$values['total_oct_report'];
$sql_nov_report ="SELECT count(id) As total_nov_report FROM reports WHERE QUARTER(alarm_issue_date)=3 AND status=3 OR status=4 OR status=5";
    $result_nov_report=mysqli_query($mysqli,$sql_nov_report);
    $values=mysqli_fetch_assoc($result_nov_report);
    $report_nov=$values['total_nov_report'];
$sql_dec_report ="SELECT count(id) As total_dec_report FROM reports WHERE QUARTER(alarm_issue_date)=4 AND status=3 OR status=4 OR status=5";
    $result_dec_report=mysqli_query($mysqli,$sql_dec_report);
    $values=mysqli_fetch_assoc($result_dec_report);
    $report_dec=$values['total_dec_report'];
?>