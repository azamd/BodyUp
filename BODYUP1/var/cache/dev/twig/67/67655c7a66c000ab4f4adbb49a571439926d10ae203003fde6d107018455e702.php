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

/* gyms_front/index.html.twig */
class __TwigTemplate_f1dd2c4b18622af80ffd89f1f01dfd09639e215f5b430ce06bd726e4c8f0f0d9 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "gyms_front/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "gyms_front/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "gyms_front/index.html.twig", 1);
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

        echo "Hello GymFrontController!";
        
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
        echo "
    <!-- SubHeader =============================================== -->
    <section class=\"parallax_window_in\" data-parallax=\"scroll\" data-image-src=\"front/img/sub_header_general.jpg\" data-natural-width=\"1400\" data-natural-height=\"470\">
        <div id=\"sub_content_in\">
            <h1>LoveFit Workout Videos</h1>
            <p>\"Usu habeo equidem sanctus no ex melius labitur conceptam eos\"</p>
        </div>
    </section>
    <!-- End section -->
    <!-- End SubHeader ============================================ -->

    <div class=\"container_styled_1\">
        <div class=\"container margin_60_35\">
            <div class=\"row\">

                <aside class=\"col-md-3 col-md-push-9\" id=\"sidebar\">
                    <div class=\"theiaStickySidebar\">
                        <div id=\"filters_col\">
                            <a data-toggle=\"collapse\" href=\"#collapseFilters\" aria-expanded=\"false\" aria-controls=\"collapseFilters\" id=\"filters_col_bt\">Filters </a>
                            <div class=\"collapse\" id=\"collapseFilters\">
                                <div class=\"filter_type\">
                                    <h6>Price</h6>
                                    <input type=\"text\" id=\"range\" name=\"range\" value=\"\">
                                </div>
                                <div class=\"filter_type\">
                                    <h6>Type</h6>
                                    <ul>
                                        <li>
                                            <label>All (277)</label>
                                            <input type=\"checkbox\" class=\"js-switch\" checked>
                                        </li>
                                        <li>
                                            <label>Yoga (77)</label>
                                            <input type=\"checkbox\" class=\"js-switch\">
                                        </li>
                                        <li>
                                            <label>Cardio (552)</label>
                                            <input type=\"checkbox\" class=\"js-switch\">
                                        </li>
                                        <li>
                                            <label>Strenght (909)</label>
                                            <input type=\"checkbox\" class=\"js-switch\">
                                        </li>
                                        <li>
                                            <label>Pilates (1196)</label>
                                            <input type=\"checkbox\" class=\"js-switch\">
                                        </li>
                                    </ul>
                                </div>
                                <div class=\"filter_type\">
                                    <h6>Body Focus</h6>
                                    <ul>
                                        <li>
                                            <label>Total Body (77)</label>
                                            <input type=\"checkbox\" class=\"js-switch\" checked>
                                        </li>
                                        <li>
                                            <label>Upper Body (552)</label>
                                            <input type=\"checkbox\" class=\"js-switch\">
                                        </li>
                                        <li>
                                            <label>Lower Body (909)</label>
                                            <input type=\"checkbox\" class=\"js-switch\">
                                        </li>
                                    </ul>
                                </div>

                            </div>
                            <!--End collapse -->
                        </div>
                        <!--End filters col-->
                    </div>
                    <!--End Sticky -->
                </aside>
                <!--End aside -->

                <div class=\"col-md-9 col-md-pull-3\">
                    <div class=\"row\">
                        <div class=\"col-sm-6 wow fadeIn\" data-wow-delay=\"0.1s\">
                            <div class=\"course_container\">
                                <div class=\"ribbon top\"><span>Top Sell</span></div>
                                <figure>
                                    <a href=\"";
        // line 88
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("single_gym");
        echo "\">
                                        <img src=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/img/course_1.jpg"), "html", null, true);
        echo "\" width=\"800\" height=\"533\" class=\"img-responsive\" alt=\"Image\">
                                        <div class=\"short_info\"><i class=\"icon-clock-1\"></i>2 hr 56 min</div>
                                    </a>
                                </figure>
                                <div class=\"course_title\"><div class=\"type\"><span>Yoga</span></div>
                                    <h3><a href=\"";
        // line 94
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("single_gym");
        echo "\">Yoga Fundamentals</a></h3>
                                    <div class=\"info_2 clearfix\"><span class=\"price\">39.90<sup>\$</sup></span><span class=\"users\">450</span></div>
                                </div>
                            </div>
                            <!-- End box course_container -->
                        </div>
                        <!-- End col-md-6 -->

                        <div class=\"col-sm-6 wow fadeIn\" data-wow-delay=\"0.2s\">
                            <div class=\"course_container\">
                                <div class=\"ribbon top\"><span>Top sell</span></div>
                                <figure>
                                    <a href=\"";
        // line 106
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("single_gym");
        echo "\">
                                        <img src=\"";
        // line 107
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/img/course_2.jpg"), "html", null, true);
        echo "\" width=\"800\" height=\"533\" class=\"img-responsive\" alt=\"Image\">
                                        <div class=\"short_info\"><i class=\"icon-clock-1\"></i>2 hr 56 min</div>
                                    </a>
                                </figure>
                                <div class=\"course_title\">
                                    <div class=\"type\"><span>Yoga</span></div>
                                    <h3><a href=\"";
        // line 113
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("single_gym");
        echo "\">Total Body Stretching </a></h3>
                                    <div class=\"info_2 clearfix\"><span class=\"price\">39.90<sup>\$</sup></span><span class=\"users\">450</span></div>
                                </div>
                            </div>
                            <!-- End box course_container -->
                        </div>
                        <!-- End col-md-6 -->
                    </div>
                    <!-- End row -->
                    <div class=\"row\">
                        <div class=\"col-sm-6 wow fadeIn\" data-wow-delay=\"0.3s\">
                            <div class=\"course_container\">
                                <div class=\"ribbon\"><span>Popular</span>
                                </div>
                                <figure>
                                    <a href=\"";
        // line 128
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("single_gym");
        echo "\">
                                        <img src=\"";
        // line 129
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/img/course_3.jpg"), "html", null, true);
        echo "\" width=\"800\" height=\"533\" class=\"img-responsive\" alt=\"Image\">
                                        <div class=\"short_info\"><i class=\"icon-clock-1\"></i>2 hr 56 min</div>
                                    </a>
                                </figure>
                                <div class=\"course_title\">
                                    <div class=\"type\"><span>Yoga</span>
                                    </div>
                                    <h3><a href=\"";
        // line 136
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("single_gym");
        echo "\">Flexibility and Toning</a></h3>
                                    <div class=\"info_2 clearfix\"><span class=\"price\">39.90<sup>\$</sup></span><span class=\"users\">450</span>
                                    </div>
                                </div>
                            </div>
                            <!-- End box course_container -->
                        </div>
                        <!-- End col-md-6 -->
                        <div class=\"col-sm-6 wow fadeIn\" data-wow-delay=\"0.4s\">
                            <div class=\"course_container\">
                                <div class=\"ribbon\"><span>Popular</span>
                                </div>
                                <figure>
                                    <a href=\"";
        // line 149
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("single_gym");
        echo "\">
                                        <img src=\"";
        // line 150
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/img/course_4.jpg"), "html", null, true);
        echo "\" width=\"800\" height=\"533\" class=\"img-responsive\" alt=\"Image\">
                                        <div class=\"short_info\"><i class=\"icon-clock-1\"></i>2 hr 56 min</div>
                                    </a>
                                </figure>
                                <div class=\"course_title\">
                                    <div class=\"type\"><span>Strength</span>
                                    </div>
                                    <h3><a href=\"";
        // line 157
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("single_gym");
        echo "\">Strength Upper Body</a></h3>
                                    <div class=\"info_2 clearfix\"><span class=\"price\">39.90<sup>\$</sup></span><span class=\"users\">450</span>
                                    </div>
                                </div>
                            </div>
                            <!-- End box course_container -->
                        </div>
                        <!-- End col-md-6 -->
                    </div>
                    <!-- End row -->
                    <div class=\"row\">
                        <div class=\"col-sm-6 wow fadeIn\" data-wow-delay=\"0.5s\">
                            <div class=\"course_container\">
                                <div class=\"ribbon\"><span>Popular</span>
                                </div>
                                <figure>
                                    <a href=\"";
        // line 173
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("single_gym");
        echo "\">
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
                                    <h3><a href=\"";
        // line 181
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("single_gym");
        echo "\">Fat Burning Butt and Thigh </a></h3>
                                    <div class=\"info_2 clearfix\"><span class=\"price\">39.90<sup>\$</sup></span><span class=\"users\">450</span>
                                    </div>
                                </div>
                            </div>
                            <!-- End box course_container -->
                        </div>
                        <!-- End col-md-6 -->
                        <div class=\"col-sm-6 wow fadeIn\" data-wow-delay=\"0.6s\">
                            <div class=\"course_container\">
                                <div class=\"ribbon\"><span>Popular</span>
                                </div>
                                <figure>
                                    <a href=\"";
        // line 194
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("single_gym");
        echo "\">
                                        <img src=\"";
        // line 195
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/img/course_6.jpg"), "html", null, true);
        echo "\" width=\"800\" height=\"533\" class=\"img-responsive\" alt=\"Image\">
                                        <div class=\"short_info\"><i class=\"icon-clock-1\"></i>2 hr 56 min</div>
                                    </a>
                                </figure>
                                <div class=\"course_title\">
                                    <div class=\"type\"><span>Cardio</span>
                                    </div>
                                    <h3><a href=\"";
        // line 202
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("single_gym");
        echo "\">1000 Calorie Workout Video</a></h3>
                                    <div class=\"info_2 clearfix\"><span class=\"price\">39.90<sup>\$</sup></span><span class=\"users\">450</span>
                                    </div>
                                </div>
                            </div>
                            <!-- End box course_container -->
                        </div>
                        <!-- End col-md-6 -->
                    </div>
                    <!-- End row -->
                    <div class=\"row\">
                        <div class=\"col-sm-6 wow fadeIn\" data-wow-delay=\"0.7s\">
                            <div class=\"course_container\">
                                <figure>
                                    <a href=\"";
        // line 216
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("single_gym");
        echo "\">
                                        <img src=\"";
        // line 217
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/img/course_7.jpg"), "html", null, true);
        echo "\" width=\"800\" height=\"533\" class=\"img-responsive\" alt=\"Image\">
                                        <div class=\"short_info\"><i class=\"icon-clock-1\"></i>2 hr 56 min</div>
                                    </a>
                                </figure>
                                <div class=\"course_title\">
                                    <div class=\"type\"><span>Cardio</span>
                                    </div>
                                    <h3><a href=\"";
        // line 224
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("single_gym");
        echo "\">Fat Burning Cardio</a></h3>
                                    <div class=\"info_2 clearfix\"><span class=\"price\">39.90<sup>\$</sup></span><span class=\"users\">450</span>
                                    </div>
                                </div>
                            </div>
                            <!-- End box course_container -->
                        </div>
                        <!-- End col-md-6 -->
                        <div class=\"col-sm-6 wow fadeIn\" data-wow-delay=\"0.8s\">
                            <div class=\"course_container\">
                                <figure>
                                    <a href=\"";
        // line 235
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("single_gym");
        echo "\">
                                        <img src=\"";
        // line 236
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/img/course_8.jpg"), "html", null, true);
        echo "\" width=\"800\" height=\"533\" class=\"img-responsive\" alt=\"Image\">
                                        <div class=\"short_info\"><i class=\"icon-clock-1\"></i>2 hr 56 min</div>
                                    </a>
                                </figure>
                                <div class=\"course_title\">
                                    <div class=\"type\"><span>Pilates</span>
                                    </div>
                                    <h3><a href=\"";
        // line 243
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("single_gym");
        echo "\">Lower Body Pilates</a></h3>
                                    <div class=\"info_2 clearfix\"><span class=\"price\">39.90<sup>\$</sup></span><span class=\"users\">450</span>
                                    </div>
                                </div>
                            </div>
                            <!-- End box course_container -->
                        </div>
                        <!-- End col-md-6 -->
                    </div>
                    <!-- End row -->
                    <nav>
                        <ul class=\"pagination\">
                            <li class=\"disabled\"><a href=\"#\" aria-label=\"Previous\"><span aria-hidden=\"true\">&laquo;</span></a>
                            </li>
                            <li class=\"active\"><a href=\"#\">1 <span class=\"sr-only\">(current)</span></a>
                            </li>
                            <li><a href=\"#\">2</a>
                            </li>
                            <li><a href=\"#\">3</a>
                            </li>
                            <li><a href=\"#\">4</a>
                            </li>
                            <li><a href=\"#\">5</a>
                            </li>
                            <li>
                                <a href=\"#\" aria-label=\"Next\">
                                    <span aria-hidden=\"true\">&raquo;</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <!-- End col -->
            </div>
            <!-- End Row -->
        </div>
        <!-- End container -->
    </div>
    <!-- End container_styled_1 -->
    <script src=\"";
        // line 282
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/js/ion.rangeSlider.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 283
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/js/switchery.min.js"), "html", null, true);
        echo "\"></script>
    <script>
        \$(\"#range\").ionRangeSlider({
            hide_min_max: true,
            keyboard: true,
            min: 30,
            max: 180,
            from: 40,
            to: 90,
            type: 'double',
            step: 1,
            prefix: \"\$\",
            grid: false
        });
        var elems = Array.prototype.slice.call(document.querySelectorAll('.js-switch'));
        elems.forEach(function (html) {
            var switchery = new Switchery(html, {
                size: 'small'
            });
        });
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "gyms_front/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  442 => 283,  438 => 282,  396 => 243,  386 => 236,  382 => 235,  368 => 224,  358 => 217,  354 => 216,  337 => 202,  327 => 195,  323 => 194,  307 => 181,  297 => 174,  293 => 173,  274 => 157,  264 => 150,  260 => 149,  244 => 136,  234 => 129,  230 => 128,  212 => 113,  203 => 107,  199 => 106,  184 => 94,  176 => 89,  172 => 88,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello GymFrontController!{% endblock %}

{% block body %}

    <!-- SubHeader =============================================== -->
    <section class=\"parallax_window_in\" data-parallax=\"scroll\" data-image-src=\"front/img/sub_header_general.jpg\" data-natural-width=\"1400\" data-natural-height=\"470\">
        <div id=\"sub_content_in\">
            <h1>LoveFit Workout Videos</h1>
            <p>\"Usu habeo equidem sanctus no ex melius labitur conceptam eos\"</p>
        </div>
    </section>
    <!-- End section -->
    <!-- End SubHeader ============================================ -->

    <div class=\"container_styled_1\">
        <div class=\"container margin_60_35\">
            <div class=\"row\">

                <aside class=\"col-md-3 col-md-push-9\" id=\"sidebar\">
                    <div class=\"theiaStickySidebar\">
                        <div id=\"filters_col\">
                            <a data-toggle=\"collapse\" href=\"#collapseFilters\" aria-expanded=\"false\" aria-controls=\"collapseFilters\" id=\"filters_col_bt\">Filters </a>
                            <div class=\"collapse\" id=\"collapseFilters\">
                                <div class=\"filter_type\">
                                    <h6>Price</h6>
                                    <input type=\"text\" id=\"range\" name=\"range\" value=\"\">
                                </div>
                                <div class=\"filter_type\">
                                    <h6>Type</h6>
                                    <ul>
                                        <li>
                                            <label>All (277)</label>
                                            <input type=\"checkbox\" class=\"js-switch\" checked>
                                        </li>
                                        <li>
                                            <label>Yoga (77)</label>
                                            <input type=\"checkbox\" class=\"js-switch\">
                                        </li>
                                        <li>
                                            <label>Cardio (552)</label>
                                            <input type=\"checkbox\" class=\"js-switch\">
                                        </li>
                                        <li>
                                            <label>Strenght (909)</label>
                                            <input type=\"checkbox\" class=\"js-switch\">
                                        </li>
                                        <li>
                                            <label>Pilates (1196)</label>
                                            <input type=\"checkbox\" class=\"js-switch\">
                                        </li>
                                    </ul>
                                </div>
                                <div class=\"filter_type\">
                                    <h6>Body Focus</h6>
                                    <ul>
                                        <li>
                                            <label>Total Body (77)</label>
                                            <input type=\"checkbox\" class=\"js-switch\" checked>
                                        </li>
                                        <li>
                                            <label>Upper Body (552)</label>
                                            <input type=\"checkbox\" class=\"js-switch\">
                                        </li>
                                        <li>
                                            <label>Lower Body (909)</label>
                                            <input type=\"checkbox\" class=\"js-switch\">
                                        </li>
                                    </ul>
                                </div>

                            </div>
                            <!--End collapse -->
                        </div>
                        <!--End filters col-->
                    </div>
                    <!--End Sticky -->
                </aside>
                <!--End aside -->

                <div class=\"col-md-9 col-md-pull-3\">
                    <div class=\"row\">
                        <div class=\"col-sm-6 wow fadeIn\" data-wow-delay=\"0.1s\">
                            <div class=\"course_container\">
                                <div class=\"ribbon top\"><span>Top Sell</span></div>
                                <figure>
                                    <a href=\"{{ path('single_gym') }}\">
                                        <img src=\"{{ asset('front/img/course_1.jpg') }}\" width=\"800\" height=\"533\" class=\"img-responsive\" alt=\"Image\">
                                        <div class=\"short_info\"><i class=\"icon-clock-1\"></i>2 hr 56 min</div>
                                    </a>
                                </figure>
                                <div class=\"course_title\"><div class=\"type\"><span>Yoga</span></div>
                                    <h3><a href=\"{{ path('single_gym') }}\">Yoga Fundamentals</a></h3>
                                    <div class=\"info_2 clearfix\"><span class=\"price\">39.90<sup>\$</sup></span><span class=\"users\">450</span></div>
                                </div>
                            </div>
                            <!-- End box course_container -->
                        </div>
                        <!-- End col-md-6 -->

                        <div class=\"col-sm-6 wow fadeIn\" data-wow-delay=\"0.2s\">
                            <div class=\"course_container\">
                                <div class=\"ribbon top\"><span>Top sell</span></div>
                                <figure>
                                    <a href=\"{{ path('single_gym') }}\">
                                        <img src=\"{{ asset('front/img/course_2.jpg') }}\" width=\"800\" height=\"533\" class=\"img-responsive\" alt=\"Image\">
                                        <div class=\"short_info\"><i class=\"icon-clock-1\"></i>2 hr 56 min</div>
                                    </a>
                                </figure>
                                <div class=\"course_title\">
                                    <div class=\"type\"><span>Yoga</span></div>
                                    <h3><a href=\"{{ path('single_gym') }}\">Total Body Stretching </a></h3>
                                    <div class=\"info_2 clearfix\"><span class=\"price\">39.90<sup>\$</sup></span><span class=\"users\">450</span></div>
                                </div>
                            </div>
                            <!-- End box course_container -->
                        </div>
                        <!-- End col-md-6 -->
                    </div>
                    <!-- End row -->
                    <div class=\"row\">
                        <div class=\"col-sm-6 wow fadeIn\" data-wow-delay=\"0.3s\">
                            <div class=\"course_container\">
                                <div class=\"ribbon\"><span>Popular</span>
                                </div>
                                <figure>
                                    <a href=\"{{ path('single_gym') }}\">
                                        <img src=\"{{ asset('front/img/course_3.jpg') }}\" width=\"800\" height=\"533\" class=\"img-responsive\" alt=\"Image\">
                                        <div class=\"short_info\"><i class=\"icon-clock-1\"></i>2 hr 56 min</div>
                                    </a>
                                </figure>
                                <div class=\"course_title\">
                                    <div class=\"type\"><span>Yoga</span>
                                    </div>
                                    <h3><a href=\"{{ path('single_gym') }}\">Flexibility and Toning</a></h3>
                                    <div class=\"info_2 clearfix\"><span class=\"price\">39.90<sup>\$</sup></span><span class=\"users\">450</span>
                                    </div>
                                </div>
                            </div>
                            <!-- End box course_container -->
                        </div>
                        <!-- End col-md-6 -->
                        <div class=\"col-sm-6 wow fadeIn\" data-wow-delay=\"0.4s\">
                            <div class=\"course_container\">
                                <div class=\"ribbon\"><span>Popular</span>
                                </div>
                                <figure>
                                    <a href=\"{{ path('single_gym') }}\">
                                        <img src=\"{{ asset('front/img/course_4.jpg') }}\" width=\"800\" height=\"533\" class=\"img-responsive\" alt=\"Image\">
                                        <div class=\"short_info\"><i class=\"icon-clock-1\"></i>2 hr 56 min</div>
                                    </a>
                                </figure>
                                <div class=\"course_title\">
                                    <div class=\"type\"><span>Strength</span>
                                    </div>
                                    <h3><a href=\"{{ path('single_gym') }}\">Strength Upper Body</a></h3>
                                    <div class=\"info_2 clearfix\"><span class=\"price\">39.90<sup>\$</sup></span><span class=\"users\">450</span>
                                    </div>
                                </div>
                            </div>
                            <!-- End box course_container -->
                        </div>
                        <!-- End col-md-6 -->
                    </div>
                    <!-- End row -->
                    <div class=\"row\">
                        <div class=\"col-sm-6 wow fadeIn\" data-wow-delay=\"0.5s\">
                            <div class=\"course_container\">
                                <div class=\"ribbon\"><span>Popular</span>
                                </div>
                                <figure>
                                    <a href=\"{{ path('single_gym') }}\">
                                        <img src=\"{{ asset('front/img/course_5.jpg') }}\" width=\"800\" height=\"533\" class=\"img-responsive\" alt=\"Image\">
                                        <div class=\"short_info\"><i class=\"icon-clock-1\"></i>2 hr 56 min</div>
                                    </a>
                                </figure>
                                <div class=\"course_title\">
                                    <div class=\"type\"><span>Strength</span>
                                    </div>
                                    <h3><a href=\"{{ path('single_gym') }}\">Fat Burning Butt and Thigh </a></h3>
                                    <div class=\"info_2 clearfix\"><span class=\"price\">39.90<sup>\$</sup></span><span class=\"users\">450</span>
                                    </div>
                                </div>
                            </div>
                            <!-- End box course_container -->
                        </div>
                        <!-- End col-md-6 -->
                        <div class=\"col-sm-6 wow fadeIn\" data-wow-delay=\"0.6s\">
                            <div class=\"course_container\">
                                <div class=\"ribbon\"><span>Popular</span>
                                </div>
                                <figure>
                                    <a href=\"{{ path('single_gym') }}\">
                                        <img src=\"{{ asset('front/img/course_6.jpg') }}\" width=\"800\" height=\"533\" class=\"img-responsive\" alt=\"Image\">
                                        <div class=\"short_info\"><i class=\"icon-clock-1\"></i>2 hr 56 min</div>
                                    </a>
                                </figure>
                                <div class=\"course_title\">
                                    <div class=\"type\"><span>Cardio</span>
                                    </div>
                                    <h3><a href=\"{{ path('single_gym') }}\">1000 Calorie Workout Video</a></h3>
                                    <div class=\"info_2 clearfix\"><span class=\"price\">39.90<sup>\$</sup></span><span class=\"users\">450</span>
                                    </div>
                                </div>
                            </div>
                            <!-- End box course_container -->
                        </div>
                        <!-- End col-md-6 -->
                    </div>
                    <!-- End row -->
                    <div class=\"row\">
                        <div class=\"col-sm-6 wow fadeIn\" data-wow-delay=\"0.7s\">
                            <div class=\"course_container\">
                                <figure>
                                    <a href=\"{{ path('single_gym') }}\">
                                        <img src=\"{{ asset('front/img/course_7.jpg') }}\" width=\"800\" height=\"533\" class=\"img-responsive\" alt=\"Image\">
                                        <div class=\"short_info\"><i class=\"icon-clock-1\"></i>2 hr 56 min</div>
                                    </a>
                                </figure>
                                <div class=\"course_title\">
                                    <div class=\"type\"><span>Cardio</span>
                                    </div>
                                    <h3><a href=\"{{ path('single_gym') }}\">Fat Burning Cardio</a></h3>
                                    <div class=\"info_2 clearfix\"><span class=\"price\">39.90<sup>\$</sup></span><span class=\"users\">450</span>
                                    </div>
                                </div>
                            </div>
                            <!-- End box course_container -->
                        </div>
                        <!-- End col-md-6 -->
                        <div class=\"col-sm-6 wow fadeIn\" data-wow-delay=\"0.8s\">
                            <div class=\"course_container\">
                                <figure>
                                    <a href=\"{{ path('single_gym') }}\">
                                        <img src=\"{{ asset('front/img/course_8.jpg') }}\" width=\"800\" height=\"533\" class=\"img-responsive\" alt=\"Image\">
                                        <div class=\"short_info\"><i class=\"icon-clock-1\"></i>2 hr 56 min</div>
                                    </a>
                                </figure>
                                <div class=\"course_title\">
                                    <div class=\"type\"><span>Pilates</span>
                                    </div>
                                    <h3><a href=\"{{ path('single_gym') }}\">Lower Body Pilates</a></h3>
                                    <div class=\"info_2 clearfix\"><span class=\"price\">39.90<sup>\$</sup></span><span class=\"users\">450</span>
                                    </div>
                                </div>
                            </div>
                            <!-- End box course_container -->
                        </div>
                        <!-- End col-md-6 -->
                    </div>
                    <!-- End row -->
                    <nav>
                        <ul class=\"pagination\">
                            <li class=\"disabled\"><a href=\"#\" aria-label=\"Previous\"><span aria-hidden=\"true\">&laquo;</span></a>
                            </li>
                            <li class=\"active\"><a href=\"#\">1 <span class=\"sr-only\">(current)</span></a>
                            </li>
                            <li><a href=\"#\">2</a>
                            </li>
                            <li><a href=\"#\">3</a>
                            </li>
                            <li><a href=\"#\">4</a>
                            </li>
                            <li><a href=\"#\">5</a>
                            </li>
                            <li>
                                <a href=\"#\" aria-label=\"Next\">
                                    <span aria-hidden=\"true\">&raquo;</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <!-- End col -->
            </div>
            <!-- End Row -->
        </div>
        <!-- End container -->
    </div>
    <!-- End container_styled_1 -->
    <script src=\"{{ asset('front/js/ion.rangeSlider.min.js') }}\"></script>
    <script src=\"{{ asset('front/js/switchery.min.js') }}\"></script>
    <script>
        \$(\"#range\").ionRangeSlider({
            hide_min_max: true,
            keyboard: true,
            min: 30,
            max: 180,
            from: 40,
            to: 90,
            type: 'double',
            step: 1,
            prefix: \"\$\",
            grid: false
        });
        var elems = Array.prototype.slice.call(document.querySelectorAll('.js-switch'));
        elems.forEach(function (html) {
            var switchery = new Switchery(html, {
                size: 'small'
            });
        });
    </script>
{% endblock %}
", "gyms_front/index.html.twig", "/Users/gosu/Sites/BODYUP1/templates/gyms_front/index.html.twig");
    }
}
