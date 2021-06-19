</div><!-- end row class -->
 
<p>
    
</p>
	<div class="footer">
  		<div class="copyrights">
 			Copyright &copy; <?php echo date("Y") ?> |  Všechna práva vyhrazena | 
    		<a href="<?php echo home_url(); ?>/"  title="<?php bloginfo('description'); ?>">
    		<?php bloginfo('name'); ?></a>
                        <script>
var datum = new Date(); // aktuální datum
var denVTydnu = new Array("neděle","pondělí", "úterý", "středa", "čtvrtek", "pátek", "sobota");
var retezec = "Dnes je "; // postupně se k němu budou přičítat další řetězce
retezec += denVTydnu[datum.getDay()] + ", "; // Den v týdnu
retezec += datum.getDate() + ". "; // Den v měsíci
retezec += (1 + datum.getMonth()) + ". "; // Měsíce jsou číslovány od nuly
retezec += datum.getFullYear() + ". "; // Rok ve formátu 0000
retezec += "Čas: " + datum.getHours() + ":"; // Hodiny
retezec += datum.getMinutes(); // Minuty
// retezec += ":" + datum.getSeconds(); // Sekundy
retezec += "."; // Tečka za větou
document.write( retezec ); // Výpis řetězce do dokumentu
</script>
  		</div>
 
	</div>
    <!-- Theme Hook -->
    <?php wp_footer(); ?>
 
<!--END body-->
</body>
<!--END html -->
</html>