<div class="dtdc_geotag_form">   
	<div class="">
		<div class=""><?php print drupal_render($form['field_reporting_office_type']); ?></div>
		<div class=""><?php print drupal_render($form['field_reporting_office_code']); ?></div>
		<div class="col-sm-6 "><?php print drupal_render($form['title']); ?></div>
		<div class="col-sm-6"><?php print drupal_render($form['field_facility_name']); ?></div>
		<div class="col-sm-6"><div class="gray-bg min-height no-image"><?php print drupal_render($form['field_geo_image']); ?></div></div>
		<div class="col-sm-6"><div class="gray-bg min-height"><?php print drupal_render($form['field_location']);	?></div></div>
	</div>
	
	<div class="col-sm-4 "><?php print drupal_render($form['field_address_1']); ?></div>
	<div class="col-sm-4 "><?php print drupal_render($form['field_address_2']); ?></div>
	<div class="col-sm-4 "><?php print drupal_render($form['field_landmark']); ?></div>
	<div class="col-sm-4 "><?php print drupal_render($form['field_city']); ?></div>
	<div class="col-sm-4 "><?php print drupal_render($form['field_state']); ?></div>
	<div class="col-sm-4 "><?php print drupal_render($form['field_postal_code']); ?></div>
	<div class="col-sm-4 "><?php print drupal_render($form['field_country']); ?></div>
	<div class="col-sm-4 "><?php print drupal_render($form['field_phone_number']); ?></div>
	<div class="col-sm-4 "><?php print drupal_render($form['field_phone_number2']); ?></div>
	<div class="col-sm-4 "><?php print drupal_render($form['field_phone_number3']); ?></div>
	<div class="col-sm-4 "><?php print drupal_render($form['field_mobile_number']); ?></div>
	<div class="col-sm-4 "><?php print drupal_render($form['field_email']); ?></div>
	<div class="col-sm-4 "><?php print drupal_render($form['field_contact_person']); ?></div>
	<div class="col-sm-4 "><?php print drupal_render($form['field_opening_hours']); ?></div>
	<div class="col-sm-4 "><?php print drupal_render($form['field_closing_hours']); ?></div>
	<div class="col-sm-4 "><?php print drupal_render($form['field_closing_days']); ?></div>
	<div class="col-sm-4 "><?php print drupal_render($form['field_parking_available']); ?></div>
	<div class="col-sm-4 "><?php print drupal_render($form['field_no_of_employees']); ?></div>
	<div class="col-sm-4 "><?php print drupal_render($form['field_cctv']); ?></div>
	<div class="col-sm-4 "><?php print drupal_render($form['field_office_floor']); ?></div>
	<div class="col-sm-4 "><?php print drupal_render($form['field_shop_area']); ?></div>
	<div class="col-sm-4 "><?php print drupal_render($form['field_pudo_storage_space']); ?></div>
	<div class="col-sm-4 "><?php print drupal_render($form['locations']); ?></div>
	<div class="col-sm-4 "><?php print drupal_render($form['field_created_by']); ?></div>
	<div class=""><?php print drupal_render($form['field_context']); ?></div>
	<div class=""><?php print drupal_render($form['field_type_of_location']); ?></div>
	<div class=""><?php print drupal_render($form['field_location_status']); ?></div>
	<div class=""><?php print drupal_render($form['field_location_closed']); ?></div>
	<div class=""><?php print drupal_render($form['field_updated_by_mobile']); ?></div>
	<div class="col-sm-4 "><?php print drupal_render($form['body']); ?></div>
	<?php print drupal_render_children($form); ?>
	<?php print drupal_render($form['actions']); ?>
</div>
