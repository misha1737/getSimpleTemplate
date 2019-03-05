<?php if(!defined('IN_GS')){ die('you cannot load this page directly.'); }
/****************************************************
*
* @File: 			template.php
* @Package:		GetSimple
* @Action:		Innovation theme for GetSimple CMS
*
*****************************************************/


# Get this theme's settings based on what was entered within its plugin. 
# This function is in functions.php 
$innov_settings = Innovation_Settings();

# Include the header template
include('header.inc.php'); 
?>
	

		<!-- page content -->
		
		<article>
			<section>
				<!-- title and content -->	
				
				<div class="container-fluid">
				<div class="row">
				<div class="titleBox">
				<h1><?php get_page_title(); ?></h1>
					<h2>developer days 2019</h2>
			</div>
				<?php get_page_content(); ?>

<!-- test -->

<!-- test -->
				</div>
				</div>
				<!-- page footer -->
				<div class="footer">	
				</div>
			</section>
		</article>
		
		<!-- include the sidebar template -->
<div class="moadalRegistration">
	<div class="moadalRegistration__form">




 <div class="form-container">
		      <div class="form-container__title" >Заявка</div>
		<span class="glyphicon glyphicon-remove form-container__close"></span>

		      <div class="form-container__note" id="note"></div>
		      <div class="form-container__fields" id="fields">
			     <form id="ajax-contact-form" action="">
				    <label class="form-container__label" >Імя</label><input type="text" name="name" value="" placeholder="Ваше імя" />
			         <label class="form-container__label">Телефон</label><input type="text" name="tel" value="" placeholder="Номер телефону"/>
				     <label class="form-container__label">Повідомлення</label><textarea name="message" rows="5" cols="25" placeholder="Коментар"></textarea>
				     <input class="btn form-container__button" type="submit" name="submit" value="Надіслати" />
			     </form>
		      </div>
	       </div>
 	</div>
</div>
<!-- include the footer template -->
<?php include('footer.inc.php'); ?>