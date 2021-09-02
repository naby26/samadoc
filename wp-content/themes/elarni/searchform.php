
  <!-- **Searchform** -->
<?php
 $search_text = empty($_GET['s']) ? esc_html__("Search",'elearni') : get_search_query(); ?>

<form method="GET" id="searchform" action="http://localhost/samadoc/resultat_recherche/">
    <input id="s" name="recherche" type="text" 
         	placeholder=" Rechercher un document" class="text_input"
		    onblur="if(this.value==''){this.value='<?php echo esc_attr($search_text);?>';}"
            onfocus="if(this.value =='<?php echo esc_attr($search_text);?>') {this.value=''; }"/>
    <a href="http://localhost/samadoc/resultat_recherche/" class="dt-search-icon"> <span class="fas fa-times"> </span> </a>
	<input name="submit" type="submit"  value="<?php esc_attr_e('Go','elearni');?>" />
</form><!-- **Searchform - End** -->