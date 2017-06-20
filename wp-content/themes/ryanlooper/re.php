<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>
    <?php
/*
Template Name: Re
*/
?>
        <!-- \\\\\\\\\\\\\\\\ START POSTS ////////////////-->
        <div class="green-borders" id="green-borders">
            <div class="row">
                <div class="col-sm-2"></div>
                <div class="col-sm-6">
                    <p> I started in NYC as a wine rep in 2007 with zero accounts, a minimal knowledge of wine and no clue how the beverage business really worked. On my first day I walked out into the streets to cold-call accounts with a paper portfolio of wines I represented and one bottle.  I was over-dressed, under-prepared, and downright scared.  At the time, the title of 'Sommelier' was not a coveted one, natural wine was rarely spoken of, and Rosé was a discounted, dusty category of wine on the bottom of the store shelf.  In fact, you could still sell a wine with virtually any score from a publication.  Things have obviously changed. </p>
                </div>
            </div>
            <div class="space-sm"></div>
            <div class="row">
                <div class="col-sm-4"></div>
                <div class="col-sm-6">
                    <p>Since then, I sold through an economic downturn and recovery, watched the opening and closing of countless restaurants, and marveled at the rise in prominence of the sommelier/wine buyer.  What was once the strong and seemingly impenetrable brand behind the bar is now challenged daily by the craft spirits movement.  Essentially, I have watched the wine and spirits world of NYC change from the inside out. Today I am blessed to sell and work with some of the best restaurants and retailers in New York City.  Selling in this market has taught me patience, resilience, and the value of observation.  </p></div>
            </div>
            <div class="row">
                <div class="col-sm-2"></div>
                <div class="col-sm-6">
                    <p>Because of the time I spent (and still spend) interacting in restaurants and retail, I am blessed with a vantage point on the market that is rarely accessed.  The difference between listening to an opera on CD versus being in the theater and hearing the voices live is larger than you might think.  Likewise, in the NYC beverage market you have to listen carefully.  I have spent countless hours in the theater that is the beverage market, and it gives me a lead on when tastes are changing and what may come next.</p></div>
            </div>
            <div class="row">
                <div class="col-sm-4"></div>
                <div class="col-sm-6">
                    <p>What I aim to do here is give you an insider’s take: to unpack and open the books.  There are many roles that have an impact on the market that are rarely, if ever, explored and I want to change that. The art of the beverage director, the craft of the sales rep, graceful distribution, the thoughtful retailer, the power of the importer.  All of these, and the relationship between them, play a pivotal part in not only how wine and spirits get to the table, but how the market evolves.  I hope to shed some light on how the business of producing, distributing, selling and drinking wine has been changing. This will be my focus, along with what I see happening in the day to day that points to a possible shift.   
                        <p> </p></div>
            </div>
            <div class="row">
                <div class="col-sm-4"></div>
                <div class="col-sm-6"> <h3>Principles</h3> <p>
                    <br>Here I will challenge and question, but I will not tear down, the industry.
                    <br><br> Anyone who is quoted and/or featured will not be edited beyond spelling.
                    <br><br> The perspective is mine and does not reflect the views of anyone else.
                    <br><br> Any errors will be corrected thoughtfully and expeditiously.
                    <br> </p>
                </div>
            </div>
            <div class="space"></div>
            <script>
                $(document).ready(function () {
                    $('.row-anim').animateCss('zoomIn');
                });
            </script>
            <div class="space"></div>
            <?php echo do_shortcode( '[testimonial posts_per_page="1000" orderby="none" testimonial_id=""]' ); ?>
        </div>
        <div class="space"></div>
        <?php //get_sidebar(); ?>
            <?php get_footer(); ?>