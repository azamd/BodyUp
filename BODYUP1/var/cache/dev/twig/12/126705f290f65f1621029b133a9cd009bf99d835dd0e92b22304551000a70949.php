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

/* single_gym/index.html.twig */
class __TwigTemplate_1eca00316172dc6d6a91dc3dc292be14dac58ff5967a7756c1acb75e2f6fe6a5 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "single_gym/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "single_gym/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "single_gym/index.html.twig", 1);
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

        echo "Hello SingleExerciceController!";
        
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
    <section class=\"parallax_window_in\" data-parallax=\"scroll\" data-image-src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/img/sub_header_short.jpg"), "html", null, true);
        echo "\" data-natural-width=\"1400\" data-natural-height=\"470\">
        <div id=\"sub_content_in\">
            <h1>Yoga Fundamentals</h1>
            <p>\"Usu habeo equidem sanctus no ex melius labitur conceptam eos\"</p>
        </div>
    </section>
    <!-- End section -->
    <!-- End SubHeader ============================================ -->

    <div class=\"container margin_60\">
        <div class=\"row\">
            <div class=\"col-md-8 \">
                <iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/PknU1QEV4Zo\" allowfullscreen></iframe>
                <ul id=\"course_info\">
                    <li><i class=\"icon-clock\"></i> 2 hr 56 min </li>
                    <li><i class=\" icon-chart-bar-5\"></i> Mediul level</li>
                    <li><i class=\"icon-users-3\"></i> 144 Partecipants</li>
                </ul>
                <h2>Description</h2>
                <p> Lorem ipsum dolor sit amet, vel illud semper definitionem et, ad <strong>cum verear corpora</strong> detracto. Cu ornatus suavitate est. Eum iudico volumus et, eros modus mei in. Probatus nominati mel an. At vim laudem oporteat partiendo, enim hendrerit scriptorem duo eu.</p>

                <p>Choro lobortis euripidis cu qui, ex melius labitur conceptam eos, sumo possim sea in. Te platonem ullamcorper per. Te causae <strong>virtute sit</strong>, ex has tale aeterno reprimique. Vel ex velit nemore, his no phaedrum interesset, in malis bonorum dissentiunt quo.</p>
                <div class=\"row\">
                    <div class=\"col-sm-6\">
                        <div class=\"box_style_3\">
                            <img src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/img/top_body.png"), "html", null, true);
        echo "\" width=\"69\" height=\"200\" alt=\"Image\">
                            <h4>Body Focus</h4>
                        </div>
                    </div>
                    <div class=\"col-sm-6\">
                        <div class=\"box_style_3\">
                            <div id=\"count_calories\">140-280
                                <div class=\"calculate_link\"><a id=\"modal_calc\" href=\"#animatedModal\" class=\"btn_1\">Daily Calorie Calculator</a></div>
                            </div>
                            <h4>Calories Burned</h4>
                        </div>
                    </div>
                </div>
                <!-- End row -->
                <hr class=\"add_bottom_30\">

                <div class=\"workoutlist\">
                    <div class=\"row\">
                        <div class=\"col-sm-5\">
                            <figure><a href=\"https://www.youtube.com/watch?v=oX6I6vs1EFs\" class=\"video\"><i class=\"arrow_triangle-right_alt2\"></i><img src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/img/workout_1.jpg"), "html", null, true);
        echo "\" width=\"780\" height=\"420\"  alt=\"Image\" class=\"img-responsive\"></a><span>0:35</span><em></em>
                            </figure>
                        </div>
                        <div class=\"col-sm-7\">
                            <h4><a href=\"https://www.youtube.com/watch?v=oX6I6vs1EFs\" class=\"video\">Yoga Fundamentals (Youtube modal)</a></h4>
                            <p>Vel ex velit nemore, his no phaedrum interesset, in malis bonorum dissentiunt quo.</p>
                        </div>
                    </div>
                </div>
                <!-- End workoutlist -->

                <div class=\"workoutlist\">
                    <div class=\"row\">
                        <div class=\"col-sm-5\">
                            <figure><a href=\"https://player.vimeo.com/video/12434588\" class=\"video\"><i class=\"arrow_triangle-right_alt2\"></i><img src=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/img/workout_2.jpg"), "html", null, true);
        echo "\" width=\"780\" height=\"420\" alt=\"Image\" class=\"img-responsive\"></a><span>0:35</span><em></em>
                            </figure>
                        </div>
                        <div class=\"col-sm-7\">
                            <h4><a href=\"https://player.vimeo.com/video/12434588\" class=\"video\">Flexibility and Toning (Vimeo modal)</a></h4>
                            <p>Vel ex velit nemore, his no phaedrum interesset, in malis bonorum dissentiunt quo.</p>
                        </div>
                    </div>
                </div>
                <!-- End workoutlist -->

                <div class=\"workoutlist\">
                    <div class=\"row\">
                        <div class=\"col-sm-5\">
                            <figure><a href=\"https://www.youtube.com/watch?v=oX6I6vs1EFs\" class=\"video\"><i class=\"arrow_triangle-right_alt2\"></i><img src=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/img/workout_3.jpg"), "html", null, true);
        echo "\" width=\"780\" height=\"420\" alt=\"Image\" class=\"img-responsive\"></a><span>0:35</span>
                            </figure>
                        </div>
                        <div class=\"col-sm-7\">
                            <h4><a href=\"https://www.youtube.com/watch?v=oX6I6vs1EFs\" class=\"video\">Total Body Stretching</a></h4>
                            <p>Vel ex velit nemore, his no phaedrum interesset, in malis bonorum dissentiunt quo.</p>
                        </div>
                    </div>
                </div>
                <!-- End workoutlist -->

                <div class=\"workoutlist last\">
                    <div class=\"row\">
                        <div class=\"col-sm-5\">
                            <figure><a href=\"https://www.youtube.com/watch?v=oX6I6vs1EFs\" class=\"video\"><i class=\"arrow_triangle-right_alt2\"></i><img src=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/img/workout_3.jpg"), "html", null, true);
        echo "\" width=\"780\" height=\"420\" alt=\"Image\" class=\"img-responsive\"></a><span>0:35</span>
                            </figure>
                        </div>
                        <div class=\"col-sm-7\">
                            <h4><a href=\"https://www.youtube.com/watch?v=oX6I6vs1EFs\" class=\"video\">Fat Burning Thigh</a></h4>
                            <p>Vel ex velit nemore, his no phaedrum interesset, in malis bonorum dissentiunt quo.</p>
                        </div>
                    </div>
                </div>
                <!-- End workoutlist -->

            </div>
            <!-- End col -->
            <div class=\"col-md-4\" id=\"sidebar\">
                <div class=\"theiaStickySidebar\">
                    <div class=\"box_style_2\">
                        <div id=\"price_in\">
                            39.90<sup>\$</sup> <span class=\"orginal_price\">49.90\$</span>
                        </div>
                        <div id=\"features\">
                            <h4>What you get</h4>
                            <ul>
                                <li><a href=\"#0\" class=\"tooltip-1\" data-placement=\"right\" title=\"\" data-original-title=\"Default tooltip\"><i class=\"icon_film\"></i>12 Workout videos</a>
                                </li>
                                <li><a href=\"#0\" class=\"tooltip-1\" data-placement=\"right\" title=\"\" data-original-title=\"Default tooltip\">Tool<i class=\"icon_tablet\"></i>Tablets &amp; mobiles access</a>
                                </li>
                                <li><a href=\"#0\" class=\"tooltip-1\" data-placement=\"right\" title=\"\" data-original-title=\"Default tooltip\"><i class=\"icon_lock-open_alt\"></i>Lifetime access</a>
                                </li>
                                <li><a href=\"#0\" class=\"tooltip-1\" data-placement=\"right\" title=\"\" data-original-title=\"Default tooltip\"><i class=\"icon_chat_alt\"></i>Discuss with coach</a>
                                </li>
                            </ul>
                        </div>
                        <p><small style=\"line-height:10px\">Choro lobortis euripidis cu qui, ex melius labitur conceptam eos, sumo possim sea in. Te platonem ullamcorper per.</small>
                        </p>
                        <hr>
                        <a href=\"cart-page-1.html\" class=\"btn_full\">Purchase</a>
                        <a class=\"btn_outline\" href=\"#\"><i class=\" icon-heart\"></i> Add to whislist</a>
                    </div>
                    <!-- End box_style -->
                    <div id=\"trainer_col\">
                        <h4>About the trainer</h4>
                        <div class=\"media\">
                            <div class=\"pull-right\">
                                <a href=\"#\"><img src=\"";
        // line 137
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/img/avatar1.jpg"), "html", null, true);
        echo "\" class=\"img-circle\" alt=\"\">
                                </a>
                            </div>
                            <div class=\"media-body\">
                                <h5 class=\"media-heading\">Marc Twain</h5>
                                <p>
                                    Mea assum nemore erroribus ei, eu sed movet animal eleifend. Id usu recteque consequuntur, nam elitr veniam legere ex. Nec iriure scaevola intellegat ea, cu cum erroribus concludaturque. In quis solum legimus qui.
                                    <br><a href=\"trainer-profile.html\">View profile</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End theiaStickySidebar -->
            </div>
            <!-- End col -->
        </div>
        <!-- End row -->
    </div>
    <!-- End container -->
    <!-- SPECIFIC SCRIPTS -->
    <script src=\"";
        // line 158
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/js/jquery.fitvids.js"), "html", null, true);
        echo "\"></script>
    <script>\$(\".container\").fitVids();</script>
    <script>
        \$(\"#modal_calc\").animatedModal({
            animatedIn:'bounceIn',
            animatedOut:'bounceOut',
            color:'#4088DA'
        });
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "single_gym/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  263 => 158,  239 => 137,  193 => 94,  176 => 80,  159 => 66,  142 => 52,  120 => 33,  92 => 8,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello SingleExerciceController!{% endblock %}

{% block body %}

    <!-- SubHeader =============================================== -->
    <section class=\"parallax_window_in\" data-parallax=\"scroll\" data-image-src=\"{{ asset('front/img/sub_header_short.jpg') }}\" data-natural-width=\"1400\" data-natural-height=\"470\">
        <div id=\"sub_content_in\">
            <h1>Yoga Fundamentals</h1>
            <p>\"Usu habeo equidem sanctus no ex melius labitur conceptam eos\"</p>
        </div>
    </section>
    <!-- End section -->
    <!-- End SubHeader ============================================ -->

    <div class=\"container margin_60\">
        <div class=\"row\">
            <div class=\"col-md-8 \">
                <iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/PknU1QEV4Zo\" allowfullscreen></iframe>
                <ul id=\"course_info\">
                    <li><i class=\"icon-clock\"></i> 2 hr 56 min </li>
                    <li><i class=\" icon-chart-bar-5\"></i> Mediul level</li>
                    <li><i class=\"icon-users-3\"></i> 144 Partecipants</li>
                </ul>
                <h2>Description</h2>
                <p> Lorem ipsum dolor sit amet, vel illud semper definitionem et, ad <strong>cum verear corpora</strong> detracto. Cu ornatus suavitate est. Eum iudico volumus et, eros modus mei in. Probatus nominati mel an. At vim laudem oporteat partiendo, enim hendrerit scriptorem duo eu.</p>

                <p>Choro lobortis euripidis cu qui, ex melius labitur conceptam eos, sumo possim sea in. Te platonem ullamcorper per. Te causae <strong>virtute sit</strong>, ex has tale aeterno reprimique. Vel ex velit nemore, his no phaedrum interesset, in malis bonorum dissentiunt quo.</p>
                <div class=\"row\">
                    <div class=\"col-sm-6\">
                        <div class=\"box_style_3\">
                            <img src=\"{{ asset('front/img/top_body.png') }}\" width=\"69\" height=\"200\" alt=\"Image\">
                            <h4>Body Focus</h4>
                        </div>
                    </div>
                    <div class=\"col-sm-6\">
                        <div class=\"box_style_3\">
                            <div id=\"count_calories\">140-280
                                <div class=\"calculate_link\"><a id=\"modal_calc\" href=\"#animatedModal\" class=\"btn_1\">Daily Calorie Calculator</a></div>
                            </div>
                            <h4>Calories Burned</h4>
                        </div>
                    </div>
                </div>
                <!-- End row -->
                <hr class=\"add_bottom_30\">

                <div class=\"workoutlist\">
                    <div class=\"row\">
                        <div class=\"col-sm-5\">
                            <figure><a href=\"https://www.youtube.com/watch?v=oX6I6vs1EFs\" class=\"video\"><i class=\"arrow_triangle-right_alt2\"></i><img src=\"{{ asset('front/img/workout_1.jpg') }}\" width=\"780\" height=\"420\"  alt=\"Image\" class=\"img-responsive\"></a><span>0:35</span><em></em>
                            </figure>
                        </div>
                        <div class=\"col-sm-7\">
                            <h4><a href=\"https://www.youtube.com/watch?v=oX6I6vs1EFs\" class=\"video\">Yoga Fundamentals (Youtube modal)</a></h4>
                            <p>Vel ex velit nemore, his no phaedrum interesset, in malis bonorum dissentiunt quo.</p>
                        </div>
                    </div>
                </div>
                <!-- End workoutlist -->

                <div class=\"workoutlist\">
                    <div class=\"row\">
                        <div class=\"col-sm-5\">
                            <figure><a href=\"https://player.vimeo.com/video/12434588\" class=\"video\"><i class=\"arrow_triangle-right_alt2\"></i><img src=\"{{ asset('front/img/workout_2.jpg') }}\" width=\"780\" height=\"420\" alt=\"Image\" class=\"img-responsive\"></a><span>0:35</span><em></em>
                            </figure>
                        </div>
                        <div class=\"col-sm-7\">
                            <h4><a href=\"https://player.vimeo.com/video/12434588\" class=\"video\">Flexibility and Toning (Vimeo modal)</a></h4>
                            <p>Vel ex velit nemore, his no phaedrum interesset, in malis bonorum dissentiunt quo.</p>
                        </div>
                    </div>
                </div>
                <!-- End workoutlist -->

                <div class=\"workoutlist\">
                    <div class=\"row\">
                        <div class=\"col-sm-5\">
                            <figure><a href=\"https://www.youtube.com/watch?v=oX6I6vs1EFs\" class=\"video\"><i class=\"arrow_triangle-right_alt2\"></i><img src=\"{{ asset('front/img/workout_3.jpg') }}\" width=\"780\" height=\"420\" alt=\"Image\" class=\"img-responsive\"></a><span>0:35</span>
                            </figure>
                        </div>
                        <div class=\"col-sm-7\">
                            <h4><a href=\"https://www.youtube.com/watch?v=oX6I6vs1EFs\" class=\"video\">Total Body Stretching</a></h4>
                            <p>Vel ex velit nemore, his no phaedrum interesset, in malis bonorum dissentiunt quo.</p>
                        </div>
                    </div>
                </div>
                <!-- End workoutlist -->

                <div class=\"workoutlist last\">
                    <div class=\"row\">
                        <div class=\"col-sm-5\">
                            <figure><a href=\"https://www.youtube.com/watch?v=oX6I6vs1EFs\" class=\"video\"><i class=\"arrow_triangle-right_alt2\"></i><img src=\"{{ asset('front/img/workout_3.jpg') }}\" width=\"780\" height=\"420\" alt=\"Image\" class=\"img-responsive\"></a><span>0:35</span>
                            </figure>
                        </div>
                        <div class=\"col-sm-7\">
                            <h4><a href=\"https://www.youtube.com/watch?v=oX6I6vs1EFs\" class=\"video\">Fat Burning Thigh</a></h4>
                            <p>Vel ex velit nemore, his no phaedrum interesset, in malis bonorum dissentiunt quo.</p>
                        </div>
                    </div>
                </div>
                <!-- End workoutlist -->

            </div>
            <!-- End col -->
            <div class=\"col-md-4\" id=\"sidebar\">
                <div class=\"theiaStickySidebar\">
                    <div class=\"box_style_2\">
                        <div id=\"price_in\">
                            39.90<sup>\$</sup> <span class=\"orginal_price\">49.90\$</span>
                        </div>
                        <div id=\"features\">
                            <h4>What you get</h4>
                            <ul>
                                <li><a href=\"#0\" class=\"tooltip-1\" data-placement=\"right\" title=\"\" data-original-title=\"Default tooltip\"><i class=\"icon_film\"></i>12 Workout videos</a>
                                </li>
                                <li><a href=\"#0\" class=\"tooltip-1\" data-placement=\"right\" title=\"\" data-original-title=\"Default tooltip\">Tool<i class=\"icon_tablet\"></i>Tablets &amp; mobiles access</a>
                                </li>
                                <li><a href=\"#0\" class=\"tooltip-1\" data-placement=\"right\" title=\"\" data-original-title=\"Default tooltip\"><i class=\"icon_lock-open_alt\"></i>Lifetime access</a>
                                </li>
                                <li><a href=\"#0\" class=\"tooltip-1\" data-placement=\"right\" title=\"\" data-original-title=\"Default tooltip\"><i class=\"icon_chat_alt\"></i>Discuss with coach</a>
                                </li>
                            </ul>
                        </div>
                        <p><small style=\"line-height:10px\">Choro lobortis euripidis cu qui, ex melius labitur conceptam eos, sumo possim sea in. Te platonem ullamcorper per.</small>
                        </p>
                        <hr>
                        <a href=\"cart-page-1.html\" class=\"btn_full\">Purchase</a>
                        <a class=\"btn_outline\" href=\"#\"><i class=\" icon-heart\"></i> Add to whislist</a>
                    </div>
                    <!-- End box_style -->
                    <div id=\"trainer_col\">
                        <h4>About the trainer</h4>
                        <div class=\"media\">
                            <div class=\"pull-right\">
                                <a href=\"#\"><img src=\"{{ asset('front/img/avatar1.jpg') }}\" class=\"img-circle\" alt=\"\">
                                </a>
                            </div>
                            <div class=\"media-body\">
                                <h5 class=\"media-heading\">Marc Twain</h5>
                                <p>
                                    Mea assum nemore erroribus ei, eu sed movet animal eleifend. Id usu recteque consequuntur, nam elitr veniam legere ex. Nec iriure scaevola intellegat ea, cu cum erroribus concludaturque. In quis solum legimus qui.
                                    <br><a href=\"trainer-profile.html\">View profile</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End theiaStickySidebar -->
            </div>
            <!-- End col -->
        </div>
        <!-- End row -->
    </div>
    <!-- End container -->
    <!-- SPECIFIC SCRIPTS -->
    <script src=\"{{ asset('front/js/jquery.fitvids.js') }}\"></script>
    <script>\$(\".container\").fitVids();</script>
    <script>
        \$(\"#modal_calc\").animatedModal({
            animatedIn:'bounceIn',
            animatedOut:'bounceOut',
            color:'#4088DA'
        });
    </script>
{% endblock %}
", "single_gym/index.html.twig", "/Users/gosu/Sites/BODYUP1/templates/single_gym/index.html.twig");
    }
}
