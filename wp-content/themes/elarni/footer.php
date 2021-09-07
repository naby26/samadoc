    <?php
        /**
         * elearni_hook_content_after hook.
         * 
         */
        do_action( 'elearni_hook_content_after' );
    ?>

        <!-- **Footer** -->
        <footer id="footer">
            <div class="container">
            <?php
                /**
                 * elearni_footer hook.
                 * 
                 * @hooked elearni_vc_footer_template - 10
                 *
                 */
                do_action( 'elearni_footer' );
            ?>
             <style>
        .footer{
            position: absolute;
            width: 100%;
            background-color: black;            
            color: white;
            font-weight: normal;
            display: grid;
            grid-template-rows: auto auto;
            margin-top: 1%;
            border-radius: 30px 30px 0px 0px;
            box-shadow: -0px -10px 30px rgba(0,0,0,0.1);
        }
        .logo_footer{
            display:grid;
            grid-template-columns: 1fr 1fr;
            justify-content: space-around;
        }
        .logo_footer img{
            border-radius: 0%;
            padding-top: 3%;
            transform: scale(1.5);
            margin-left: 50px;
            justify-self: center;
        }
        .lien_footer{
            margin-left:2%;
        }
        .footer hr{
            width: 95%;
        }
        .lien_footer  h1{
            text-align: center;
        }
        .lien_footer a{
            display: flex;
            text-decoration: none;
            color: white;
            margin: 1%;
        }
        .propos_footer{
            text-align: center;
        }
        .dt-no-footer-builder-content span, .footer-copyright span{
            display: none;
        }
        .lien_footer{
            display: inline-flex;
            flex-direction: column;
            float: inline-end;
        }
    </style>
    <div class="footer">
        <div class="logo_footer">
            <div class="img">
            <a href="https://www.ussein.sn" target="_blank"><img src="http://localhost/samadoc/wp-content/uploads/2021/09/USSEIN.png" alt="Logo Ussein" class="img_logo" width="200px" height="108px"></a>
            </div>
            <div class="lien_footer">
            <h1>Liens Utiles</h1>
            <a href="https://www.ussein.sn" target="_blank">Université Sine-Saloum El-hadji Ibrahima Niass</a>
            <a href="https://www.ussein.uvs.sn" target="_blank">Plateforme de cours en Ligne USSEIN</a>     
        </div>
            
        </div>
        <hr>
        <div class="propos_footer">
            &copy; 2021 DISI, Université du Sine Saloum El-Hadj Ibrahima NIASS - Tous droits réservées
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