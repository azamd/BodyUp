<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* home/index.html.twig */
class __TwigTemplate_a3d3dc30789511445ba72a920fbdaf4c2da8786135d5850fc1ba959c6946b3c9 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Home";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <!-- SubHeader =============================================== -->
    <section class=\"header-video\">
        <div id=\"hero_video\">
            <div id=\"sub_content\">
                <div class=\"mobile_fix\">
                    <h1>Fitness <strong>Videos</strong> Workout</h1>
                    <p>
                        Fall in love with Fitness
                    </p>
                </div>
            </div>
            <!-- End sub_content -->
        </div>
        <img src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/img/video_fix.png"), "html", null, true);
        echo "\" alt=\"\" class=\"header-video--media\" data-video-src=\"front/video/intro\" data-teaser-source=\"front/video/intro\" data-provider=\"\" data-video-width=\"1920\" data-video-height=\"960\">
        <div id=\"count\" class=\"hidden-xs\">
            <ul>
                <li><span class=\"number\">653</span> Workout</li>
                <li><span class=\"number\">1246</span> People Served</li>
                <li><span class=\"number\">2343</span> Registered Users</li>
            </ul>
        </div>
    </section>
    <!-- End Header video -->
    <!-- End SubHeader ============================================ -->
    <div id=\"newsletter_container\">
        <div class=\"container margin_60\">
            <div class=\"row\">
                <div class=\"col-md-10 col-md-offset-1 text-center\">
                    <h3>Subscribe to our Newsletter for latest news.</h3>
                    <div id=\"message-newsletter\"></div>
                    <form method=\"post\" action=\"assets/newsletter.php\" name=\"newsletter\" id=\"newsletter\" class=\"form-inline\">
                        <input name=\"email_newsletter\" id=\"email_newsletter\" type=\"email\" value=\"\" placeholder=\"Your Email\" class=\"form-control\">
                        <button id=\"submit-newsletter\" class=\"btn_1\"> Subscribe</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <section id=\"feat\">
        <div class=\"container\">
            <h2 class=\"main_title\"><em></em>How Lovefit works<span>Fall in love with Fitness</span></h2>
            <p class=\"lead styled\">
                Usu habeo equidem sanctus no. Suas summo id sed, erat erant oporteat cu pri. In eum omnes molestie. Sed ad debet scaevola, ne mel lorem legendos.
            </p>
            <div class=\"row\">
                <div class=\"col-sm-4 wow fadeIn animated\" data-wow-delay=\"0.2s\">
                    <div class=\"box_feat\" id=\"icon_2\">
                        <h3>Videos Workout</h3>
                        <p>Usu habeo equidem sanctus no. Suas summo id sed, erat erant oporteat cu pri. In eum omnes molestie. Sed ad debet scaevola, ne mel lorem legendos. </p>
                    </div>
                </div>
                <div class=\"col-sm-4 wow fadeIn animated\" data-wow-delay=\"0.5s\">
                    <div class=\"box_feat\" id=\"icon_1\">
                        <h3>Expert Trainers</h3>
                        <p>Usu habeo equidem sanctus no. Suas summo id sed, erat erant oporteat cu pri. In eum omnes molestie. Sed ad debet scaevola, ne mel lorem legendos. </p>
                    </div>
                </div>
                <div class=\"col-sm-4 wow fadeIn animated\" data-wow-delay=\"1s\">
                    <div class=\"box_feat\" id=\"icon_3\">
                        <h3>Play Everywhere</h3>
                        <p>Usu habeo equidem sanctus no. Suas summo id sed, erat erant oporteat cu pri. In eum omnes molestie. Sed ad debet scaevola, ne mel lorem legendos. </p>
                    </div>
                </div>
            </div>
            <!-- End row -->
        </div>
        <!-- End container -->
    </section>
    <!-- End section -->

    <div class=\"container_styled_1\">
        <div class=\"container margin_60_35\">
            <h2 class=\"main_title\"><em></em>Latest Workout Videos<span>Fall in love with Fitness</span></h2>
            <div id=\"filter_buttons\">
                <button data-toggle=\"portfilter\" class=\"active\" data-target=\"all\">All</button>
                <button data-toggle=\"portfilter\" data-target=\"Yoga\">Yoga</button>
                <button data-toggle=\"portfilter\" data-target=\"Strength\">Strength</button>
                <button data-toggle=\"portfilter\" data-target=\"Cardio\">Cardio</button>
                <button data-toggle=\"portfilter\" data-target=\"Pilates\">Pilates</button>
            </div>
            <div class=\"row\">
                <div class=\"col-md-4\" data-tag=\"Yoga\">
                    <div class=\"course_container\">
                        <div class=\"ribbon top\"><span>Top Sell</span>
                        </div>
                        <figure>
                            <a href=\"fitness-course-1.html\">
                                <img src=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/img/course_1.jpg"), "html", null, true);
        echo "\" width=\"800\" height=\"533\" class=\"img-responsive\" alt=\"Image\">
                                <div class=\"short_info\"><i class=\"icon-clock-1\"></i>2 hr 56 min</div>
                            </a>
                        </figure>
                        <div class=\"course_title\">
                            <div class=\"type\"><span>Yoga</span>
                            </div>
                            <h3><a href=\"fitness-course-1.html\">Yoga Fundamentals</a></h3>
                            <div class=\"info_2 clearfix\"><span class=\"price\">39.90<sup>\$</sup></span><span class=\"users\">450</span>
                            </div>
                        </div>
                    </div>
                    <!-- End box course_container -->
                </div>
                <div class=\"col-md-4\" data-tag=\"Yoga\">
                    <div class=\"course_container\">
                        <div class=\"ribbon top\"><span>Top sell</span>
                        </div>
                        <figure>
                            <a href=\"fitness-course-1.html\">
                                <img src=\"";
        // line 113
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/img/course_2.jpg"), "html", null, true);
        echo "\" width=\"800\" height=\"533\" class=\"img-responsive\" alt=\"Image\">
                                <div class=\"short_info\"><i class=\"icon-clock-1\"></i>2 hr 56 min</div>
                            </a>
                        </figure>
                        <div class=\"course_title\">
                            <div class=\"type\"><span>Yoga</span>
                            </div>
                            <h3><a href=\"fitness-course-1.html\">Total Body Stretching </a></h3>
                            <div class=\"info_2 clearfix\"><span class=\"price\">39.90<sup>\$</sup></span><span class=\"users\">450</span>
                            </div>
                        </div>
                    </div>
                    <!-- End box course_container -->
                </div>
                <div class=\"col-md-4\" data-tag=\"Yoga\">
                    <div class=\"course_container\">
                        <div class=\"ribbon\"><span>Popular</span>
                        </div>
                        <figure>
                            <a href=\"fitness-course-1.html\">
                                <img src=\"";
        // line 133
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/img/course_3.jpg"), "html", null, true);
        echo "\" width=\"800\" height=\"533\" class=\"img-responsive\" alt=\"Image\">
                                <div class=\"short_info\"><i class=\"icon-clock-1\"></i>2 hr 56 min</div>
                            </a>
                        </figure>
                        <div class=\"course_title\">
                            <div class=\"type\"><span>Yoga</span>
                            </div>
                            <h3><a href=\"fitness-course-1.html\">Flexibility and Toning</a></h3>
                            <div class=\"info_2 clearfix\"><span class=\"price\">39.90<sup>\$</sup></span><span class=\"users\">450</span>
                            </div>
                        </div>
                    </div>
                    <!-- End box course_container -->
                </div>
                <div class=\"col-md-4\" data-tag=\"Strength\">
                    <div class=\"course_container\">
                        <div class=\"ribbon\"><span>Popular</span>
                        </div>
                        <figure>
                            <a href=\"fitness-course-1.html\">
                                <img src=\"";
        // line 153
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/img/course_4.jpg"), "html", null, true);
        echo "\" width=\"800\" height=\"533\" class=\"img-responsive\" alt=\"Image\">
                                <div class=\"short_info\"><i class=\"icon-clock-1\"></i>2 hr 56 min</div>
                            </a>
                        </figure>
                        <div class=\"course_title\">
                            <div class=\"type\"><span>Strength</span>
                            </div>
                            <h3><a href=\"fitness-course-1.html\">Strength Upper Body</a></h3>
                            <div class=\"info_2 clearfix\"><span class=\"price\">39.90<sup>\$</sup></span><span class=\"users\">450</span>
                            </div>
                        </div>
                    </div>
                    <!-- End box course_container -->
                </div>

                <div class=\"col-md-4\" data-tag=\"Strength\">
                    <div class=\"course_container\">
                        <div class=\"ribbon\"><span>Popular</span>
                        </div>
                        <figure>
                            <a href=\"#0\">
                                <img src=\"";
        // line 174
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/img/course_5.jpg"), "html", null, true);
        echo "\" width=\"800\" height=\"533\" class=\"img-responsive\" alt=\"Image\">
                                <div class=\"short_info\"><i class=\"icon-clock-1\"></i>2 hr 56 min</div>
                            </a>
                        </figure>
                        <div class=\"course_title\">
                            <div class=\"type\"><span>Strength</span>
                            </div>
                            <h3><a href=\"#0\">Fat Burning Butt and Thigh </a></h3>
                            <div class=\"info_2 clearfix\"><span class=\"price\">39.90<sup>\$</sup></span><span class=\"users\">450</span>
                            </div>
                        </div>
                    </div>
                    <!-- End box course_container -->
                </div>
                <div class=\"col-md-4\" data-tag=\"Cardio\">
                    <div class=\"course_container\">
                        <div class=\"ribbon\"><span>Popular</span>
                        </div>
                        <figure>
                            <a href=\"fitness-course-1.html\">
                                <img src=\"";
        // line 194
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/img/course_6.jpg"), "html", null, true);
        echo "\" width=\"800\" height=\"533\" class=\"img-responsive\" alt=\"Image\">
                                <div class=\"short_info\"><i class=\"icon-clock-1\"></i>2 hr 56 min</div>
                            </a>
                        </figure>
                        <div class=\"course_title\">
                            <div class=\"type\"><span>Cardio</span>
                            </div>
                            <h3><a href=\"fitness-course-1.html\">1000 Calorie Workout Video</a></h3>
                            <div class=\"info_2 clearfix\"><span class=\"price\">39.90<sup>\$</sup></span><span class=\"users\">450</span>
                            </div>
                        </div>
                    </div>
                    <!-- End box course_container -->
                </div>
                <div class=\"col-md-4\" data-tag=\"Cardio\">
                    <div class=\"course_container\">
                        <figure>
                            <a href=\"fitness-course-1.html\">
                                <img src=\"";
        // line 212
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/img/course_7.jpg"), "html", null, true);
        echo "\" width=\"800\" height=\"533\" class=\"img-responsive\" alt=\"Image\">
                                <div class=\"short_info\"><i class=\"icon-clock-1\"></i>2 hr 56 min</div>
                            </a>
                        </figure>
                        <div class=\"course_title\">
                            <div class=\"type\"><span>Cardio</span>
                            </div>
                            <h3><a href=\"fitness-course-1.html\">Fat Burning Cardio</a></h3>
                            <div class=\"info_2 clearfix\"><span class=\"price\">39.90<sup>\$</sup></span><span class=\"users\">450</span>
                            </div>
                        </div>
                    </div>
                    <!-- End box course_container -->
                </div>
                <div class=\"col-md-4\" data-tag=\"Pilates\">
                    <div class=\"course_container\">
                        <figure>
                            <a href=\"fitness-course-1.html\">
                                <img src=\"";
        // line 230
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/img/course_8.jpg"), "html", null, true);
        echo "\" width=\"800\" height=\"533\" class=\"img-responsive\" alt=\"Image\">
                                <div class=\"short_info\"><i class=\"icon-clock-1\"></i>2 hr 56 min</div>
                            </a>
                        </figure>
                        <div class=\"course_title\">
                            <div class=\"type\"><span>Pilates</span>
                            </div>
                            <h3><a href=\"fitness-course-1.html\">Lower Body Pilates</a></h3>
                            <div class=\"info_2 clearfix\"><span class=\"price\">39.90<sup>\$</sup></span><span class=\"users\">450</span>
                            </div>
                        </div>
                    </div>
                    <!-- End box course_container -->
                </div>
                <div class=\"col-md-4\">
                    <a href=\"explore-1.html\" id=\"view_all\"><span><i class=\"arrow_carrot-right_alt2\"></i>View all courses</span></a>
                </div>
            </div>
            <!-- End row -->
        </div>
        <!-- End container -->
    </div>
    <!-- End container_styled_1 -->

    <section class=\"margin_60_35\" id=\"testimonials\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-6\">
                    <h3>Available on all Devices</h3>
                    <p class=\"lead\">Lorem ipsum dolor sit amet, dolore deleniti appareat per no. In ius aliquam suavitate repudiare, pro an quidam inimicus, duo liber labitur repudiandae in.</p>
                    <p>
                    <p>Lorem ipsum dolor sit amet, dolore deleniti appareat per no. In ius aliquam suavitate repudiare, pro an quidam inimicus, duo liber labitur repudiandae in. Nec no tamquam delenit, sit equidem ornatus accommodare at, pro graeco debitis deterruisset no. Eam at veri oratio principes, sit ad vero ipsum affert.</p>
                    <div id=\"compatib\">
                        Compatible with Android/IOS
                    </div>
                </div>
                <div class=\"col-md-6\">
                    <img src=\"";
        // line 267
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/img/devices.png"), "html", null, true);
        echo "\" width=\"600\" height=\"355\" alt=\"\" class=\"img-responsive\">
                </div>
            </div>
            <!--  End row -->
        </div>
        <!--  End container-->
    </section>
    <!--  End section-->

    <section class=\"promo_full\">
        <div class=\"promo_full_wp\">
            <div>
                <h3>What Clients say<span>Id tale utinam ius, an mei omnium recusabo iracundia.</span></h3>
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-md-8 col-md-offset-2\">
                            <div class=\"carousel_testimonials\">
                                <div>
                                    <div class=\"box_overlay\">
                                        <div class=\"pic\">
                                            <figure><img src=\"";
        // line 287
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/img/testimonial_1.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"img-circle\">
                                            </figure>
                                            <h4>Roberta<small>12 October 2015</small></h4>
                                        </div>
                                        <div class=\"comment\">
                                            \"Mea ad postea meliore fuisset. Timeam repudiare id eum, ex paulo dictas elaboraret sed, mel cu unum nostrud.\"
                                        </div>
                                    </div>
                                    <!-- End box_overlay -->
                                </div>

                                <div>
                                    <div class=\"box_overlay\">
                                        <div class=\"pic\">
                                            <figure><img src=\"";
        // line 301
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/img/testimonial_1.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"img-circle\">
                                            </figure>
                                            <h4>Roberta<small>12 October 2015</small></h4>
                                        </div>
                                        <div class=\"comment\">
                                            \"No nam indoctum accommodare, vix ei discere civibus philosophia. Vis ea dicant diceret ocurreret.\"
                                        </div>
                                    </div>
                                    <!-- End box_overlay -->
                                </div>

                                <div>
                                    <div class=\"box_overlay\">
                                        <div class=\"pic\">
                                            <figure><img src=\"";
        // line 315
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/img/testimonial_1.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"img-circle\">
                                            </figure>
                                            <h4>Roberta<small>12 October 2015</small></h4>
                                        </div>
                                        <div class=\"comment\">
                                            \"No nam indoctum accommodare, vix ei discere civibus philosophia. Vis ea dicant diceret ocurreret.\"
                                        </div>
                                    </div>
                                    <!-- End box_overlay -->
                                </div>

                            </div>
                            <!-- End carousel_testimonials -->
                        </div>
                        <!-- End col-md-8 -->
                    </div>
                    <!-- End row -->
                </div>
                <!-- End container -->
            </div>
            <!-- End promo_full_wp -->
        </div>
        <!-- End promo_full -->
    </section>
    <!-- End section -->

    <div id=\"newsletter_container\">
        <div class=\"container margin_60\">
            <div class=\"row\">
                <div class=\"col-md-10 col-md-offset-1 text-center\">
                    <h3>Subscribe to our Newsletter for latest news.</h3>
                    <div id=\"message-newsletter\"></div>
                    <form method=\"post\" action=\"assets/newsletter.php\" name=\"newsletter\" id=\"newsletter\" class=\"form-inline\">
                        <input name=\"email_newsletter\" id=\"email_newsletter\" type=\"email\" value=\"\" placeholder=\"Your Email\" class=\"form-control\">
                        <button id=\"submit-newsletter\" class=\"btn_1\"> Subscribe</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- End newsletter_container -->
    <script>
        HeaderVideo.init({
            container: \$('.header-video'),
            header: \$('.header-video--media'),
            videoTrigger: \$(\"#video-trigger\"),
            autoPlayVideo: true
        });
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "home/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  435 => 315,  418 => 301,  401 => 287,  378 => 267,  338 => 230,  317 => 212,  296 => 194,  273 => 174,  249 => 153,  226 => 133,  203 => 113,  180 => 93,  103 => 19,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Home{% endblock %}

{% block body %}
    <!-- SubHeader =============================================== -->
    <section class=\"header-video\">
        <div id=\"hero_video\">
            <div id=\"sub_content\">
                <div class=\"mobile_fix\">
                    <h1>Fitness <strong>Videos</strong> Workout</h1>
                    <p>
                        Fall in love with Fitness
                    </p>
                </div>
            </div>
            <!-- End sub_content -->
        </div>
        <img src=\"{{ asset('front/img/video_fix.png') }}\" alt=\"\" class=\"header-video--media\" data-video-src=\"front/video/intro\" data-teaser-source=\"front/video/intro\" data-provider=\"\" data-video-width=\"1920\" data-video-height=\"960\">
        <div id=\"count\" class=\"hidden-xs\">
            <ul>
                <li><span class=\"number\">653</span> Workout</li>
                <li><span class=\"number\">1246</span> People Served</li>
                <li><span class=\"number\">2343</span> Registered Users</li>
            </ul>
        </div>
    </section>
    <!-- End Header video -->
    <!-- End SubHeader ============================================ -->
    <div id=\"newsletter_container\">
        <div class=\"container margin_60\">
            <div class=\"row\">
                <div class=\"col-md-10 col-md-offset-1 text-center\">
                    <h3>Subscribe to our Newsletter for latest news.</h3>
                    <div id=\"message-newsletter\"></div>
                    <form method=\"post\" action=\"assets/newsletter.php\" name=\"newsletter\" id=\"newsletter\" class=\"form-inline\">
                        <input name=\"email_newsletter\" id=\"email_newsletter\" type=\"email\" value=\"\" placeholder=\"Your Email\" class=\"form-control\">
                        <button id=\"submit-newsletter\" class=\"btn_1\"> Subscribe</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <section id=\"feat\">
        <div class=\"container\">
            <h2 class=\"main_title\"><em></em>How Lovefit works<span>Fall in love with Fitness</span></h2>
            <p class=\"lead styled\">
                Usu habeo equidem sanctus no. Suas summo id sed, erat erant oporteat cu pri. In eum omnes molestie. Sed ad debet scaevola, ne mel lorem legendos.
            </p>
            <div class=\"row\">
                <div class=\"col-sm-4 wow fadeIn animated\" data-wow-delay=\"0.2s\">
                    <div class=\"box_feat\" id=\"icon_2\">
                        <h3>Videos Workout</h3>
                        <p>Usu habeo equidem sanctus no. Suas summo id sed, erat erant oporteat cu pri. In eum omnes molestie. Sed ad debet scaevola, ne mel lorem legendos. </p>
                    </div>
                </div>
                <div class=\"col-sm-4 wow fadeIn animated\" data-wow-delay=\"0.5s\">
                    <div class=\"box_feat\" id=\"icon_1\">
                        <h3>Expert Trainers</h3>
                        <p>Usu habeo equidem sanctus no. Suas summo id sed, erat erant oporteat cu pri. In eum omnes molestie. Sed ad debet scaevola, ne mel lorem legendos. </p>
                    </div>
                </div>
                <div class=\"col-sm-4 wow fadeIn animated\" data-wow-delay=\"1s\">
                    <div class=\"box_feat\" id=\"icon_3\">
                        <h3>Play Everywhere</h3>
                        <p>Usu habeo equidem sanctus no. Suas summo id sed, erat erant oporteat cu pri. In eum omnes molestie. Sed ad debet scaevola, ne mel lorem legendos. </p>
                    </div>
                </div>
            </div>
            <!-- End row -->
        </div>
        <!-- End container -->
    </section>
    <!-- End section -->

    <div class=\"container_styled_1\">
        <div class=\"container margin_60_35\">
            <h2 class=\"main_title\"><em></em>Latest Workout Videos<span>Fall in love with Fitness</span></h2>
            <div id=\"filter_buttons\">
                <button data-toggle=\"portfilter\" class=\"active\" data-target=\"all\">All</button>
                <button data-toggle=\"portfilter\" data-target=\"Yoga\">Yoga</button>
                <button data-toggle=\"portfilter\" data-target=\"Strength\">Strength</button>
                <button data-toggle=\"portfilter\" data-target=\"Cardio\">Cardio</button>
                <button data-toggle=\"portfilter\" data-target=\"Pilates\">Pilates</button>
            </div>
            <div class=\"row\">
                <div class=\"col-md-4\" data-tag=\"Yoga\">
                    <div class=\"course_container\">
                        <div class=\"ribbon top\"><span>Top Sell</span>
                        </div>
                        <figure>
                            <a href=\"fitness-course-1.html\">
                                <img src=\"{{ asset('front/img/course_1.jpg') }}\" width=\"800\" height=\"533\" class=\"img-responsive\" alt=\"Image\">
                                <div class=\"short_info\"><i class=\"icon-clock-1\"></i>2 hr 56 min</div>
                            </a>
                        </figure>
                        <div class=\"course_title\">
                            <div class=\"type\"><span>Yoga</span>
                            </div>
                            <h3><a href=\"fitness-course-1.html\">Yoga Fundamentals</a></h3>
                            <div class=\"info_2 clearfix\"><span class=\"price\">39.90<sup>\$</sup></span><span class=\"users\">450</span>
                            </div>
                        </div>
                    </div>
                    <!-- End box course_container -->
                </div>
                <div class=\"col-md-4\" data-tag=\"Yoga\">
                    <div class=\"course_container\">
                        <div class=\"ribbon top\"><span>Top sell</span>
                        </div>
                        <figure>
                            <a href=\"fitness-course-1.html\">
                                <img src=\"{{ asset('front/img/course_2.jpg') }}\" width=\"800\" height=\"533\" class=\"img-responsive\" alt=\"Image\">
                                <div class=\"short_info\"><i class=\"icon-clock-1\"></i>2 hr 56 min</div>
                            </a>
                        </figure>
                        <div class=\"course_title\">
                            <div class=\"type\"><span>Yoga</span>
                            </div>
                            <h3><a href=\"fitness-course-1.html\">Total Body Stretching </a></h3>
                            <div class=\"info_2 clearfix\"><span class=\"price\">39.90<sup>\$</sup></span><span class=\"users\">450</span>
                            </div>
                        </div>
                    </div>
                    <!-- End box course_container -->
                </div>
                <div class=\"col-md-4\" data-tag=\"Yoga\">
                    <div class=\"course_container\">
                        <div class=\"ribbon\"><span>Popular</span>
                        </div>
                        <figure>
                            <a href=\"fitness-course-1.html\">
                                <img src=\"{{ asset('front/img/course_3.jpg') }}\" width=\"800\" height=\"533\" class=\"img-responsive\" alt=\"Image\">
                                <div class=\"short_info\"><i class=\"icon-clock-1\"></i>2 hr 56 min</div>
                            </a>
                        </figure>
                        <div class=\"course_title\">
                            <div class=\"type\"><span>Yoga</span>
                            </div>
                            <h3><a href=\"fitness-course-1.html\">Flexibility and Toning</a></h3>
                            <div class=\"info_2 clearfix\"><span class=\"price\">39.90<sup>\$</sup></span><span class=\"users\">450</span>
                            </div>
                        </div>
                    </div>
                    <!-- End box course_container -->
                </div>
                <div class=\"col-md-4\" data-tag=\"Strength\">
                    <div class=\"course_container\">
                        <div class=\"ribbon\"><span>Popular</span>
                        </div>
                        <figure>
                            <a href=\"fitness-course-1.html\">
                                <img src=\"{{ asset('front/img/course_4.jpg') }}\" width=\"800\" height=\"533\" class=\"img-responsive\" alt=\"Image\">
                                <div class=\"short_info\"><i class=\"icon-clock-1\"></i>2 hr 56 min</div>
                            </a>
                        </figure>
                        <div class=\"course_title\">
                            <div class=\"type\"><span>Strength</span>
                            </div>
                            <h3><a href=\"fitness-course-1.html\">Strength Upper Body</a></h3>
                            <div class=\"info_2 clearfix\"><span class=\"price\">39.90<sup>\$</sup></span><span class=\"users\">450</span>
                            </div>
                        </div>
                    </div>
                    <!-- End box course_container -->
                </div>

                <div class=\"col-md-4\" data-tag=\"Strength\">
                    <div class=\"course_container\">
                        <div class=\"ribbon\"><span>Popular</span>
                        </div>
                        <figure>
                            <a href=\"#0\">
                                <img src=\"{{ asset('front/img/course_5.jpg') }}\" width=\"800\" height=\"533\" class=\"img-responsive\" alt=\"Image\">
                                <div class=\"short_info\"><i class=\"icon-clock-1\"></i>2 hr 56 min</div>
                            </a>
                        </figure>
                        <div class=\"course_title\">
                            <div class=\"type\"><span>Strength</span>
                            </div>
                            <h3><a href=\"#0\">Fat Burning Butt and Thigh </a></h3>
                            <div class=\"info_2 clearfix\"><span class=\"price\">39.90<sup>\$</sup></span><span class=\"users\">450</span>
                            </div>
                        </div>
                    </div>
                    <!-- End box course_container -->
                </div>
                <div class=\"col-md-4\" data-tag=\"Cardio\">
                    <div class=\"course_container\">
                        <div class=\"ribbon\"><span>Popular</span>
                        </div>
                        <figure>
                            <a href=\"fitness-course-1.html\">
                                <img src=\"{{ asset('front/img/course_6.jpg') }}\" width=\"800\" height=\"533\" class=\"img-responsive\" alt=\"Image\">
                                <div class=\"short_info\"><i class=\"icon-clock-1\"></i>2 hr 56 min</div>
                            </a>
                        </figure>
                        <div class=\"course_title\">
                            <div class=\"type\"><span>Cardio</span>
                            </div>
                            <h3><a href=\"fitness-course-1.html\">1000 Calorie Workout Video</a></h3>
                            <div class=\"info_2 clearfix\"><span class=\"price\">39.90<sup>\$</sup></span><span class=\"users\">450</span>
                            </div>
                        </div>
                    </div>
                    <!-- End box course_container -->
                </div>
                <div class=\"col-md-4\" data-tag=\"Cardio\">
                    <div class=\"course_container\">
                        <figure>
                            <a href=\"fitness-course-1.html\">
                                <img src=\"{{ asset('front/img/course_7.jpg') }}\" width=\"800\" height=\"533\" class=\"img-responsive\" alt=\"Image\">
                                <div class=\"short_info\"><i class=\"icon-clock-1\"></i>2 hr 56 min</div>
                            </a>
                        </figure>
                        <div class=\"course_title\">
                            <div class=\"type\"><span>Cardio</span>
                            </div>
                            <h3><a href=\"fitness-course-1.html\">Fat Burning Cardio</a></h3>
                            <div class=\"info_2 clearfix\"><span class=\"price\">39.90<sup>\$</sup></span><span class=\"users\">450</span>
                            </div>
                        </div>
                    </div>
                    <!-- End box course_container -->
                </div>
                <div class=\"col-md-4\" data-tag=\"Pilates\">
                    <div class=\"course_container\">
                        <figure>
                            <a href=\"fitness-course-1.html\">
                                <img src=\"{{ asset('front/img/course_8.jpg') }}\" width=\"800\" height=\"533\" class=\"img-responsive\" alt=\"Image\">
                                <div class=\"short_info\"><i class=\"icon-clock-1\"></i>2 hr 56 min</div>
                            </a>
                        </figure>
                        <div class=\"course_title\">
                            <div class=\"type\"><span>Pilates</span>
                            </div>
                            <h3><a href=\"fitness-course-1.html\">Lower Body Pilates</a></h3>
                            <div class=\"info_2 clearfix\"><span class=\"price\">39.90<sup>\$</sup></span><span class=\"users\">450</span>
                            </div>
                        </div>
                    </div>
                    <!-- End box course_container -->
                </div>
                <div class=\"col-md-4\">
                    <a href=\"explore-1.html\" id=\"view_all\"><span><i class=\"arrow_carrot-right_alt2\"></i>View all courses</span></a>
                </div>
            </div>
            <!-- End row -->
        </div>
        <!-- End container -->
    </div>
    <!-- End container_styled_1 -->

    <section class=\"margin_60_35\" id=\"testimonials\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-6\">
                    <h3>Available on all Devices</h3>
                    <p class=\"lead\">Lorem ipsum dolor sit amet, dolore deleniti appareat per no. In ius aliquam suavitate repudiare, pro an quidam inimicus, duo liber labitur repudiandae in.</p>
                    <p>
                    <p>Lorem ipsum dolor sit amet, dolore deleniti appareat per no. In ius aliquam suavitate repudiare, pro an quidam inimicus, duo liber labitur repudiandae in. Nec no tamquam delenit, sit equidem ornatus accommodare at, pro graeco debitis deterruisset no. Eam at veri oratio principes, sit ad vero ipsum affert.</p>
                    <div id=\"compatib\">
                        Compatible with Android/IOS
                    </div>
                </div>
                <div class=\"col-md-6\">
                    <img src=\"{{ asset('front/img/devices.png') }}\" width=\"600\" height=\"355\" alt=\"\" class=\"img-responsive\">
                </div>
            </div>
            <!--  End row -->
        </div>
        <!--  End container-->
    </section>
    <!--  End section-->

    <section class=\"promo_full\">
        <div class=\"promo_full_wp\">
            <div>
                <h3>What Clients say<span>Id tale utinam ius, an mei omnium recusabo iracundia.</span></h3>
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-md-8 col-md-offset-2\">
                            <div class=\"carousel_testimonials\">
                                <div>
                                    <div class=\"box_overlay\">
                                        <div class=\"pic\">
                                            <figure><img src=\"{{ asset('front/img/testimonial_1.jpg') }}\" alt=\"\" class=\"img-circle\">
                                            </figure>
                                            <h4>Roberta<small>12 October 2015</small></h4>
                                        </div>
                                        <div class=\"comment\">
                                            \"Mea ad postea meliore fuisset. Timeam repudiare id eum, ex paulo dictas elaboraret sed, mel cu unum nostrud.\"
                                        </div>
                                    </div>
                                    <!-- End box_overlay -->
                                </div>

                                <div>
                                    <div class=\"box_overlay\">
                                        <div class=\"pic\">
                                            <figure><img src=\"{{ asset('front/img/testimonial_1.jpg') }}\" alt=\"\" class=\"img-circle\">
                                            </figure>
                                            <h4>Roberta<small>12 October 2015</small></h4>
                                        </div>
                                        <div class=\"comment\">
                                            \"No nam indoctum accommodare, vix ei discere civibus philosophia. Vis ea dicant diceret ocurreret.\"
                                        </div>
                                    </div>
                                    <!-- End box_overlay -->
                                </div>

                                <div>
                                    <div class=\"box_overlay\">
                                        <div class=\"pic\">
                                            <figure><img src=\"{{ asset('front/img/testimonial_1.jpg') }}\" alt=\"\" class=\"img-circle\">
                                            </figure>
                                            <h4>Roberta<small>12 October 2015</small></h4>
                                        </div>
                                        <div class=\"comment\">
                                            \"No nam indoctum accommodare, vix ei discere civibus philosophia. Vis ea dicant diceret ocurreret.\"
                                        </div>
                                    </div>
                                    <!-- End box_overlay -->
                                </div>

                            </div>
                            <!-- End carousel_testimonials -->
                        </div>
                        <!-- End col-md-8 -->
                    </div>
                    <!-- End row -->
                </div>
                <!-- End container -->
            </div>
            <!-- End promo_full_wp -->
        </div>
        <!-- End promo_full -->
    </section>
    <!-- End section -->

    <div id=\"newsletter_container\">
        <div class=\"container margin_60\">
            <div class=\"row\">
                <div class=\"col-md-10 col-md-offset-1 text-center\">
                    <h3>Subscribe to our Newsletter for latest news.</h3>
                    <div id=\"message-newsletter\"></div>
                    <form method=\"post\" action=\"assets/newsletter.php\" name=\"newsletter\" id=\"newsletter\" class=\"form-inline\">
                        <input name=\"email_newsletter\" id=\"email_newsletter\" type=\"email\" value=\"\" placeholder=\"Your Email\" class=\"form-control\">
                        <button id=\"submit-newsletter\" class=\"btn_1\"> Subscribe</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- End newsletter_container -->
    <script>
        HeaderVideo.init({
            container: \$('.header-video'),
            header: \$('.header-video--media'),
            videoTrigger: \$(\"#video-trigger\"),
            autoPlayVideo: true
        });
    </script>
{% endblock %}
", "home/index.html.twig", "/Users/gosu/Sites/BODYUP1/templates/home/index.html.twig");
    }
}
