<?php


/**
 * developed by www.sunnysideup.co.nz
 * author: Nicolaas - modules [at] sunnysideup.co.nz
**/

//copy the lines between the START AND END line to your /mysite/_config.php file and choose the right settings

//===================---------------- START ecommerce_product_tag MODULE ----------------===================
//Object::add_extension("Product","EcommerceProductTagProductDecorator");
/**
 * ADD TO ECOMMERCE.YAML:
ProductsAndGroupsModelAdmin:
	managed_modules: [
		...
		EcommerceProductTag
	]
*/
//===================---------------- END ecommerce_product_tag MODULE ----------------===================
