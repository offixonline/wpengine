<?php

vc_map( array(
        'name' =>'Webnus Line',
        'base' => 'line',
		"description" => "Horizonal line",
        'category' => esc_html__( 'Webnus Shortcodes', 'michigan' ),
        "icon" => "webnus-line",
        'params' => array(
						array(
							'type' => 'dropdown',
							'heading' => esc_html__( 'Line Type', 'michigan' ),
							'param_name' => 'type',
							'value' => array(
											'Line'=>'1',
											'Thick Line'=>'2',
											
																
										),
							'description' => esc_html__( 'Select the Line type', 'michigan')
						),
						
						
           
        ),
		
        
    ) );


?>