    <?php
        /**
         * elearni_hook_content_after hook.
         * 
         */
        do_action( 'elearni_hook_content_after' );
    ?>
    <style>
        .footer {
            bottom:0;
            /* height: 100px; */
            background-color:black;
            color:white;
        }
        .lien_util{
            color:white;
        }


    </style>

        <!-- **Footer** -->
        <footer id="footer " class="footer ">
            <div class=" ">
                <div class="container">
                    <div class="row">
                        <div class="col-6 col-md-8 m-0 p-0">
                            <img src="http://localhost/samadoc/wp-content/uploads/2021/09/USSEIN-LOGO.png" width="120" height="90" class="img ml-4" alt="...">
                        </div>
                        <div class="col  p-0 m-0">
                                <h5 class="lien_util">Liens utils</h5>
                                <ul class="list-unstyled lien_util p-0 m-0 ">
                                    <li class="list-item p-0 m-0"><a href="https://www.ussein.sn" target="_blank">&middot; Université Sine-Saloum El-hadji Ibrahima Niass</a></li>
                                    <!-- <li class="list-inline-item">&middot;</li> -->
                                    <li class="list-item  p-0 m-0"><a href="https://ussein.uvs.sn" target="_blank">&middot; Plateforme de cours en Ligne USSEIN</a></li>
                                </ul>
                        </div>
                </div> 
                <div class="row justify-content-center p-0 m-0">
                    <p class='text-center border-top '>&copy; 2021 DISI, Université du Sine Saloum El-Hadj Ibrahima NIASS - Tous droits réservées</p>
                </div>
                </div>
               
            
            </div>
        </footer><!-- **Footer - End** -->

    </div><!-- **Inner Wrapper - End** -->
        
</div><!-- **Wrapper - End** -->
<?php
    
    do_action( 'elearni_hook_bottom' );

    wp_footer();
?>
</body>
</html>