<?php
if ( ! defined( 'ABSPATH' ) ) {
	die();
}

/**
 * Class Forminator_Template_Leads
 *
 * @since 1.0
 */
class Forminator_Template_Leads extends Forminator_Template {

	/**
	 * Template defaults
	 *
	 * @since 1.0
	 * @return array
	 */
	public function defaults() {
		return array(
			'id'          => 'leads',
			'name'        => __( 'Leads for Quizzes & Polls', Forminator::DOMAIN ),
			'description' => __( "...", Forminator::DOMAIN ),
			'icon'        => 'mail',
			'priortiy'    => 2,
		);
	}

	/**
	 * Template fields
	 *
	 * @since 1.0
	 * @return array
	 */
	public function fields() {
		return array(
			array(
				'wrapper_id' => 'wrapper-6160-5978',
				'fields'     => array(
					array(
						'element_id'      => 'html-1',
						'type'            => 'html',
						'cols'            => '12',
						"field_label"     => '',
						"variations"      => __( "<p>Please provide your contact information to proceed.</p>", Forminator::DOMAIN ),
						"validation"      => true,
						"validation_text" => "",
					),
				),
			),
			array(
				'wrapper_id' => 'wrapper-1511347712118-1739',
				'fields'     => array(
					array(
						'element_id'      => 'email-1',
						'type'            => 'email',
						'cols'            => '12',
						"required"        => "true",
						"field_label"     => __( "Email Address", Forminator::DOMAIN ),
						"placeholder"     => __( "E.g., john@doe.com", Forminator::DOMAIN ),
						"validation"      => true,
						"validation_text" => "",
					),
				),
			),
			array(
				'wrapper_id' => 'wrapper-1511347711918-1669',
				'fields'     => array(
					array(
						'element_id'        => 'name-1',
						'type'              => 'name',
						'cols'              => '12',
						"required"          => "true",
						"field_label"       => __( "First Name", Forminator::DOMAIN ),
						"placeholder"       => __( "E.g., John", Forminator::DOMAIN ),
						"prefix_label"      => __( "Prefix", Forminator::DOMAIN ),
						"fname_label"       => __( "First Name", Forminator::DOMAIN ),
						"fname_placeholder" => __( "E.g., John", Forminator::DOMAIN ),
						"mname_label"       => __( "Middle Name", Forminator::DOMAIN ),
						"mname_placeholder" => __( "E.g., Smith", Forminator::DOMAIN ),
						"lname_label"       => __( "Last Name", Forminator::DOMAIN ),
						"lname_placeholder" => __( "E.g., Doe", Forminator::DOMAIN ),
					),
				),
			),
			array(
				'wrapper_id' => 'wrapper-9037-977',
				'fields'     => array(
					array(
						'element_id'      => 'gdprcheckbox-1',
						'type'            => 'gdprcheckbox',
						'cols'            => '12',
						"required"          => "true",
						"field_label"     => __( "GDPR", Forminator::DOMAIN ),
						"validation"      => true,
						"validation_text" => "",
						"gdpr_description" => __( "Yes, I agree with the <a href=\"#\">privacy policy</a> and <a href=\"#\">terms and conditions</a>." ),
						"required_message" => __( "This field is required. Please check it." )
					),
				),
			),
		);
	}

	/**
	 * Template settings
	 *
	 * @since 1.0
	 * @return array
	 */
	public function settings() {
		return array(
			"form-type"                     => "leads",
			"submission-behaviour"          => "behaviour-thankyou",
			"thankyou-message"              => __( "Thank you for contacting us, we will be in touch shortly.", Forminator::DOMAIN ),
			'submitData'                    => array(
				"custom-submit-text"          => __( 'Submit', Forminator::DOMAIN ),
				"custom-invalid-form-message" => __( "Error: Your form is not valid, please fix the errors!", Forminator::DOMAIN ),
			),
			'enable-ajax'                   => 'true',
			'validation-inline'             => true,
			'fields-style'                  => 'open',
			"form-expire"                   => 'no_expire',
			// Main container
			'form-padding'                  => 'custom',
			'form-padding-top'              => '30',
			'form-padding-right'            => '30',
			'form-padding-bottom'           => '30',
			'form-padding-left'             => '30',
			'form-border-width'             => '0',
			'form-border-style'             => 'none',
			'form-border-radius'            => '0',
			// Colors
			'cform-color-settings'          => 'true',
			'cform-form-background'         => '#FAFAFA',
			// Typography - Label
			'cform-label-font-family'       => 'Roboto',
			'cform-label-custom-family'     => '',
			'cform-label-font-size'         => '12',
			'cform-label-font-weight'       => 'bold',
			// Typography - Section Title
			'cform-title-font-family'       => 'Roboto',
			'cform-title-custom-family'     => '',
			'cform-title-font-size'         => '45',
			'cform-title-font-weight'       => 'normal',
			'cform-title-text-align'        => 'left',
			// Typography - Section Subtitle
			'cform-subtitle-font-family'    => 'Roboto',
			'cform-subtitle-custom-font'    => '',
			'cform-subtitle-font-size'      => '18',
			'cform-subtitle-font-weight'    => 'normal',
			'cform-subtitle-text-align'     => 'left',
			// Typography - Input & Textarea
			'cform-input-font-family'       => 'Roboto',
			'cform-input-custom-font'       => '',
			'cform-input-font-size'         => '16',
			'cform-input-font-weight'       => 'normal',
			// Typography - Radio & Checkbox
			'cform-radio-font-family'       => 'Roboto',
			'cform-radio-custom-font'       => '',
			'cform-radio-font-size'         => '14',
			'cform-radio-font-weight'       => 'normal',
			// Typography - Select
			'cform-select-font-family'      => 'Roboto',
			'cform-select-custom-family'    => '',
			'cform-select-font-size'        => '16',
			'cform-select-font-weight'      => 'normal',
			// Typography - Multi Select
			'cform-multiselect-font-family' => 'Roboto',
			'cform-multiselect-custom-font' => '',
			'cform-multiselect-font-size'   => '16',
			'cform-multiselect-font-weight' => 'normal',
			// Typography - Dropdown
			'cform-dropdown-font-family'    => 'Roboto',
			'cform-dropdown-custom-font'    => '',
			'cform-dropdown-font-size'      => '16',
			'cform-dropdown-font-weight'    => 'normal',
			// Typography - Calendar
			'cform-calendar-font-family'    => 'Roboto',
			'cform-calendar-custom-font'    => '',
			'cform-calendar-font-size'      => '13',
			'cform-calendar-font-weight'    => 'normal',
			// Typography - Buttons
			'cform-button-font-family'      => 'Roboto',
			'cform-button-custom-font'      => '',
			'cform-button-font-size'        => '14',
			'cform-button-font-weight'      => '500',
			// Typography - Timeline
			'cform-timeline-font-family'    => 'Roboto',
			'cform-timeline-custom-font'    => '',
			'cform-timeline-font-size'      => '12',
			'cform-timeline-font-weight'    => 'normal',
			// Typography - Pagination
			'cform-pagination-font-family'  => '',
			'cform-pagination-custom-font'  => '',
			'cform-pagination-font-size'    => '16',
			'cform-pagination-font-weight'  => 'normal',
			'payment_require_ssl'           => false,
			'submission-file'               => 'delete',
		);
	}
}
