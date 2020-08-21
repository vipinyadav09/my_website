<?php
$currently_selected = 1;
 $earliest_date=31 ;
  $latest_date = 1;
  print '<select>';
  foreach ( range( $latest_date,$earliest_date ) as $i )
  {
    print '<option value="'.$i.'"'.($i === $currently_selected ? ' selected="selected"' : '').'>'.$i.'</option>';
  }
  print '</select>';

  $currently_selected =1;
    $earliest_month =12;
    $latest_month = 1;
    print '<select>';
    foreach ( range( $latest_month, $earliest_month ) as $i )
    {
      print '<option value="'.$i.'"'.($i === $currently_selected ? ' selected="selected"' : '').'>'.$i.'</option>';
    }
    print '</select>';


$currently_selected = date('Y');
  $earliest_year = $currently_selected-90;
  $latest_year = date('Y');
  print '<select>';
  foreach ( range( $latest_year, $earliest_year ) as $i )
  {
    print '<option value="'.$i.'"'.($i === $currently_selected ? ' selected="selected"' : '').'>'.$i.'</option>';
  }
  print '</select>';
?>
