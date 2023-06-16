<?php 

$strain_type = array(
    'option_1' => 'Option 1',
    'option_2' => 'Option 2',
    'option_3' => 'Option 3',
    'option_4' => 'Option 4',
);
$strain_type_value = esc_attr(get_post_meta(get_the_ID(), 'hcf_strain_type', true));

$terpene = array(
    'option_1' => 'Terpene 1',
    'option_2' => 'Terpene 2',
    'option_3' => 'Terpene 3',
    'option_4' => 'Terpene 4',
);
$terpene_value = esc_attr(get_post_meta(get_the_ID(), 'hcf_dom_terp', true));
$other_terpene_value = esc_attr(get_post_meta(get_the_ID(), 'hcf_other_terp_1', true));
$other_terpene_2_value = esc_attr(get_post_meta(get_the_ID(), 'hcf_other_terp_2', true));


$flavors = array(
  'sweet' => 'Sweet',
  'berry' => 'Berry',
  'blueberry' => 'Blueberry',
  'Flavor 4' => 'Flavor 4',
);
$flavor_value = esc_attr(get_post_meta(get_the_ID(), 'hcf_flav_1', true));
$flavor_2_value = esc_attr(get_post_meta(get_the_ID(), 'hcf_flav_2', true));
$flavor_3_value = esc_attr(get_post_meta(get_the_ID(), 'hcf_flav_3', true));


$feels = array(
  'Feel 1' => 'Feel 1',
  'Feel 2' => 'Feel 2',
  'Feel 3' => 'Feel 3',
  'Feel 4' => 'Feel 4',
);
$feel_value = esc_attr(get_post_meta(get_the_ID(), 'hcf_feel_1', true));
$feel_2_value = esc_attr(get_post_meta(get_the_ID(), 'hcf_feel_2', true));
$feel_3_value = esc_attr(get_post_meta(get_the_ID(), 'hcf_feel_3', true));

$helps = array(
  'Help 1' => 'Help 1',
  'Help 2' => 'Help 2',
  'Help 3' => 'Help 3',
  'Help 4' => 'Help 4',
);
$help_value = esc_attr(get_post_meta(get_the_ID(), 'hcf_help_1', true));
$help_2_value = esc_attr(get_post_meta(get_the_ID(), 'hcf_help_2', true));
$help_3_value = esc_attr(get_post_meta(get_the_ID(), 'hcf_help_3', true));


$negatives = array(
  'Negative 1' => 'Negative 1',
  'Negative 2' => 'Negative 2',
  'Negative 3' => 'Negative 3',
  'Negative 4' => 'Negative 4',
);
$negative_value = esc_attr(get_post_meta(get_the_ID(), 'hcf_neg_1', true));
$negative_2_value = esc_attr(get_post_meta(get_the_ID(), 'hcf_neg_2', true));
$negative_3_value = esc_attr(get_post_meta(get_the_ID(), 'hcf_neg_3', true));

$grows = array(
  'Grow Diff' => 'Grow Diff',
  'Grow Avg Hight' => 'Grow Avg Hight',
  'Grow Avg Yeild' => 'Grow Avg Yeild',
  'Grow Time' => 'Grow Time',
);
$grow_value = esc_attr(get_post_meta(get_the_ID(), 'hcf_grow_dif', true));

$grow_heights = array(
  'Tall' => 'Tall',
  'Option 2' => 'Option 2',
);
$grow_height_value = esc_attr(get_post_meta(get_the_ID(), 'hcf_grow_avg_hight', true));

$grow_yeilds = array(
  'Yeild 1' => 'Yeild 2',
  'Option 2' => 'Option 2',
);
$grow_yeild_value = esc_attr(get_post_meta(get_the_ID(), 'hcf_grow_avg_yeild', true));

$grow_times = array(
  '10-12' => '10-12',
  '12-15' => '12-15',
);
$grow_time_value = esc_attr(get_post_meta(get_the_ID(), 'hcf_grow_time', true));

?>





<div class="hcf_box">
  <style scoped>
    .hcf_box {
      display: grid;
      grid-template-columns: max-content 1fr;
      grid-row-gap: 10px;
      grid-column-gap: 20px;
    }

    .hcf_field {
      display: contents;
    }
  </style>

  <p class="meta-options hcf_field">
    <label for="hcf_aka">aka</label>
    <input id="hcf_aka" type="text" name="hcf_aka"
      value="<?php echo esc_attr(get_post_meta(get_the_ID(), 'hcf_aka', true)); ?>">
  </p>
  <p class="meta-options hcf_field">
    <label for="hcf_user_ratings">User Ratings <small>1-5</small></label>
    <input id="hcf_user_ratings" type="text" name="hcf_user_ratings"
      value="<?php echo esc_attr(get_post_meta(get_the_ID(), 'hcf_user_ratings', true)); ?>">
  </p>
  <p class="meta-options hcf_field">
    <label for="hcf_strain_type">Strain Type</label>
    <select id="hcf_strain_type" name="hcf_strain_type">
      <option value="">Please select Strain Type</option>
        <?php foreach($strain_type as $key => $type): ?>
            <option <?php echo ($strain_type_value == $key)?'selected':''; ?> value="<?php echo $key; ?>"><?php echo $type; ?></option>
        <?php endforeach; ?>
    </select>    
  </p>

  <!-- // THC  -->
  <p class="meta-options hcf_field">
    <label for="hcf_THC">THC</label>
    <input id="hcf_THC" type="number" name="hcf_THC"
      value="<?php echo esc_attr(get_post_meta(get_the_ID(), 'hcf_THC', true)); ?>">
  </p>
  <p class="meta-options hcf_field">
    <label for="hcf_CBD">CBD</label>
    <input id="hcf_CBD" type="number" name="hcf_CBD"
      value="<?php echo esc_attr(get_post_meta(get_the_ID(), 'hcf_CBD', true)); ?>">
  </p>
  <p class="meta-options hcf_field">
    <label for="hcf_CBG">CBG</label>
    <input id="hcf_CBG" type="number" name="hcf_CBG"
      value="<?php echo esc_attr(get_post_meta(get_the_ID(), 'hcf_CBG', true)); ?>">
  </p>

  <!-- // Terpene -->
  <p class="meta-options hcf_field">
    <label for="hcf_dom_terp">Dominate Terp </label>
    <select id="hcf_dom_terp" name="hcf_dom_terp">
      <option value="">Please select Terpene</option>
        <?php foreach($terpene as $key => $value): ?>
            <option <?php echo ($terpene_value == $key)?'selected':''; ?> value="<?php echo $key; ?>"><?php echo $value; ?></option>
        <?php endforeach; ?>
    </select>    
  </p>
  <p class="meta-options hcf_field">
    <label for="hcf_other_terp_1">Other Terp 1 </label>
    <select id="hcf_other_terp_1" name="hcf_other_terp_1">
      <option value="">Please select Terpene</option>
        <?php foreach($terpene as $key => $value): ?>
            <option <?php echo ($other_terpene_value == $key)?'selected':''; ?> value="<?php echo $key; ?>"><?php echo $value; ?></option>
        <?php endforeach; ?>
    </select>
  </p>
  <p class="meta-options hcf_field">
    <label for="hcf_other_terp_2">Other Terp 2 </label>
    <select id="hcf_other_terp_2" name="hcf_other_terp_2">
      <option value="">Please select Terpene</option>
        <?php foreach($terpene as $key => $value): ?>
            <option <?php echo ($other_terpene_2_value == $key)?'selected':''; ?> value="<?php echo $key; ?>"><?php echo $value; ?></option>
        <?php endforeach; ?>
    </select>
  </p>

  <!-- // Flavor -->
  <p class="meta-options hcf_field">
    <label for="hcf_flav_1">Flavors </label>
    <select id="hcf_flav_1" name="hcf_flav_1">
      <option value="">Please select Flavor</option>
        <?php foreach($flavors as $key => $value): ?>
            <option <?php echo ($flavor_value == $key)?'selected':''; ?> value="<?php echo $key; ?>"><?php echo $value; ?></option>
        <?php endforeach; ?>
    </select>
  </p>
  <p class="meta-options hcf_field">
    <label for="hcf_flav_2">Flavor 2 </label>
    <select id="hcf_flav_2" name="hcf_flav_2">
      <option value="">Please select Flavor</option>
        <?php foreach($flavors as $key => $value): ?>
            <option <?php echo ($flavor_2_value == $key)?'selected':''; ?> value="<?php echo $key; ?>"><?php echo $value; ?></option>
        <?php endforeach; ?>
    </select>
  </p>
  <p class="meta-options hcf_field">
    <label for="hcf_flav_3">Flavor 3 </label>
    <select id="hcf_flav_3" name="hcf_flav_3">
      <option value="">Please select Flavor</option>
        <?php foreach($flavors as $key => $value): ?>
            <option <?php echo ($flavor_3_value == $key)?'selected':''; ?> value="<?php echo $key; ?>"><?php echo $value; ?></option>
        <?php endforeach; ?>
    </select>
  </p>

  <!-- // Feel -->
  <p class="meta-options hcf_field">
    <label for="hcf_feel_1">Feel 1 </label>
    <select id="hcf_feel_1" name="hcf_feel_1">
      <option value="">Please select Feel</option>
        <?php foreach($feels as $key => $value): ?>
            <option <?php echo ($feel_value == $key)?'selected':''; ?> value="<?php echo $key; ?>"><?php echo $value; ?></option>
        <?php endforeach; ?>
    </select>
  </p>
  <p class="meta-options hcf_field">
    <label for="hcf_feel_2">Feel 2 </label>
    <select id="hcf_feel_2" name="hcf_feel_2">
      <option value="">Please select Feel</option>
        <?php foreach($feels as $key => $value): ?>
            <option <?php echo ($feel_2_value == $key)?'selected':''; ?> value="<?php echo $key; ?>"><?php echo $value; ?></option>
        <?php endforeach; ?>
    </select>
  </p>
  <p class="meta-options hcf_field">
    <label for="hcf_feel_3">Feel 3 </label>
    <select id="hcf_feel_3" name="hcf_feel_3">
      <option value="">Please select Feel</option>
        <?php foreach($feels as $key => $value): ?>
            <option <?php echo ($feel_3_value == $key)?'selected':''; ?> value="<?php echo $key; ?>"><?php echo $value; ?></option>
        <?php endforeach; ?>
    </select>
  </p>

  <!-- // Help -->

  <p class="meta-options hcf_field">
    <label for="hcf_help_1">Help 1 </label>
    <select id="hcf_help_1" name="hcf_help_1">
      <option value="">Please select Help</option>
        <?php foreach($helps as $key => $value): ?>
            <option <?php echo ($help_value == $key)?'selected':''; ?> value="<?php echo $key; ?>"><?php echo $value; ?></option>
        <?php endforeach; ?>
    </select>
  </p>
  <p class="meta-options hcf_field">
    <label for="hcf_help_2">Help 2 </label>
    <select id="hcf_help_2" name="hcf_help_2">
      <option value="">Please select Help</option>
        <?php foreach($helps as $key => $value): ?>
            <option <?php echo ($help_2_value == $key)?'selected':''; ?> value="<?php echo $key; ?>"><?php echo $value; ?></option>
        <?php endforeach; ?>
    </select>
  </p>
  <p class="meta-options hcf_field">
    <label for="hcf_help_3">Help 3 </label>
    <select id="hcf_help_3" name="hcf_help_3">
      <option value="">Please select Help</option>
        <?php foreach($helps as $key => $value): ?>
            <option <?php echo ($help_3_value == $key)?'selected':''; ?> value="<?php echo $key; ?>"><?php echo $value; ?></option>
        <?php endforeach; ?>
    </select>
  </p>

  <!-- // Negative -->
  <p class="meta-options hcf_field">
    <label for="hcf_neg_1">Negative</label>
    <select id="hcf_neg_1" name="hcf_neg_1">
      <option value="">Please select Negative</option>
        <?php foreach($negatives as $key => $value): ?>
            <option <?php echo ($negative_value == $key)?'selected':''; ?> value="<?php echo $key; ?>"><?php echo $value; ?></option>
        <?php endforeach; ?>
    </select>
  </p>
  <p class="meta-options hcf_field">
    <label for="hcf_neg_2">Negative 2 </label>
    <select id="hcf_neg_2" name="hcf_neg_2">
      <option value="">Please select Negative</option>
        <?php foreach($negatives as $key => $value): ?>
            <option <?php echo ($negative_2_value == $key)?'selected':''; ?> value="<?php echo $key; ?>"><?php echo $value; ?></option>
        <?php endforeach; ?>
    </select>
  </p>
  <p class="meta-options hcf_field">
    <label for="hcf_neg_3">Negative 3 </label>
    <select id="hcf_neg_3" name="hcf_neg_3">
      <option value="">Please select Negative</option>
        <?php foreach($negatives as $key => $value): ?>
            <option <?php echo ($negative_3_value == $key)?'selected':''; ?> value="<?php echo $key; ?>"><?php echo $value; ?></option>
        <?php endforeach; ?>
    </select>
  </p>

  <!-- //hcf_seed_link  -->
  <p class="meta-options hcf_field">
    <label for="hcf_seed_link">Seed Link </label>
    <input id="hcf_seed_link" type="text" name="hcf_seed_link"
      value="<?php echo esc_attr(get_post_meta(get_the_ID(), 'hcf_seed_link', true)); ?>">
  </p>
  <!-- // Genetics -->
  <p class="meta-options hcf_field">
    <label for="hcf_parent_1">Parent 1 </label>
    <input id="hcf_parent_1" type="text" name="hcf_parent_1"
      value="<?php echo esc_attr(get_post_meta(get_the_ID(), 'hcf_parent_1', true)); ?>">
  </p>
  <p class="meta-options hcf_field">
    <label for="hcf_parent_2">Parent 2 </label>
    <input id="hcf_parent_2" type="text" name="hcf_parent_2"
      value="<?php echo esc_attr(get_post_meta(get_the_ID(), 'hcf_parent_1', true)); ?>">
  </p>
  <p class="meta-options hcf_field">
    <label for="hcf_child_1">Child 1 </label>
    <input id="hcf_child_1" type="text" name="hcf_child_1"
      value="<?php echo esc_attr(get_post_meta(get_the_ID(), 'hcf_parent_1', true)); ?>">
  </p>
  <p class="meta-options hcf_field">
    <label for="hcf_child_2">Child 2 </label>
    <input id="hcf_child_2" type="text" name="hcf_child_2"
      value="<?php echo esc_attr(get_post_meta(get_the_ID(), 'hcf_parent_1', true)); ?>">
  </p>

  <!-- // grow  -->
  <p class="meta-options hcf_field">
    <label for="hcf_grow_dif">Grow Dif </label>
    <select id="hcf_grow_dif" name="hcf_grow_dif">
      <option value="">Please select Grow</option>
        <?php foreach($grows as $key => $value): ?>
            <option <?php echo ($grow_value == $key)?'selected':''; ?> value="<?php echo $key; ?>"><?php echo $value; ?></option>
        <?php endforeach; ?>
    </select>
  </p>
  <p class="meta-options hcf_field">
    <label for="hcf_grow_avg_hight">Grow Avg Hight </label>
    <select id="hcf_grow_avg_hight" name="hcf_grow_avg_hight">
      <option value="">Please select Grow Avg Hight</option>
        <?php foreach($grow_heights as $key => $value): ?>
            <option <?php echo ($grow_height_value == $key)?'selected':''; ?> value="<?php echo $key; ?>"><?php echo $value; ?></option>
        <?php endforeach; ?>
    </select>
  </p>
  <p class="meta-options hcf_field">
    <label for="hcf_grow_avg_yeild">Grow Avg Yeild </label>
    <select id="hcf_grow_avg_yeild" name="hcf_grow_avg_yeild">
      <option value="">Please select Grow Avg Yeild</option>
        <?php foreach($grow_yeilds as $key => $value): ?>
            <option <?php echo ($grow_yeild_value == $key)?'selected':''; ?> value="<?php echo $key; ?>"><?php echo $value; ?></option>
        <?php endforeach; ?>
    </select>
  </p>
  <p class="meta-options hcf_field">
    <label for="hcf_grow_time">Grow Time </label>
    <select id="hcf_grow_time" name="hcf_grow_time">
      <option value="">Please select Grow Time</option>
        <?php foreach($grow_times as $key => $value): ?>
            <option <?php echo ($grow_time_value == $key)?'selected':''; ?> value="<?php echo $key; ?>"><?php echo $value; ?></option>
        <?php endforeach; ?>
    </select>
  </p>

</div>