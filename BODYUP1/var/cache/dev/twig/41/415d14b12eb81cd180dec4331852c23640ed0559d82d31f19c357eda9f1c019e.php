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

/* events_front/index.html.twig */
class __TwigTemplate_d28dcee43f7b54278147065ec4e51534ef0a8a9f2c795f563cc55f4eed7d4246 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "events_front/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "events_front/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "events_front/index.html.twig", 1);
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

        echo "Hello EventsFrontController!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "

    <!-- SubHeader =============================================== -->
    <section class=\"parallax_window_in\" data-parallax=\"scroll\" data-image-src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/img/sub_header_general.jpg"), "html", null, true);
        echo "\" data-natural-width=\"1400\" data-natural-height=\"470\">
        <div id=\"sub_content_in\">
            <h1>LoveFit Blog</h1>
            <p>\"Usu habeo equidem sanctus no ex melius labitur conceptam eos\"</p>
        </div>
    </section>
    <!-- End section -->
    <!-- End SubHeader ============================================ -->

    <div class=\"container_styled_1\">
        <div class=\"container margin_60_35\">
            <div class=\"row\">

                <div class=\"col-md-9\">
                    <div class=\"post\">
                        <a href=\"/ev\"><img src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/img/blog-1.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"img-responsive\">
                        </a>
                        <div class=\"post_info clearfix\">
                            <div class=\"post-left\">
                                <ul>
                                    <li><i class=\"icon-calendar-empty\"></i>12/05/2015 <em>by Mark</em>
                                    </li>
                                    <li><i class=\"icon-inbox-alt\"></i><a href=\"#\">Category</a>
                                    </li>
                                    <li><i class=\"icon-tags\"></i><a href=\"#\">Works</a>, <a href=\"#\">Personal</a>
                                    </li>
                                </ul>
                            </div>
                            <div class=\"post-right\"><i class=\"icon-comment\"></i><a href=\"#\">25 </a>
                            </div>
                        </div>
                        <h2>Duis aute irure dolor in reprehenderit</h2>
                        <p>
                            Ludus albucius adversarium eam eu. Sit eu reque tation aliquip. Quo no dolorum albucius lucilius, hinc eligendi ut sed. Ex nam quot ferri suscipit, mea ne legere alterum repudiandae. Ei pri quaerendum intellegebat, ut vel consequuntur voluptatibus. Et volumus sententiae adversarium duo......
                        </p>
                        <p>
                            Ludus albucius adversarium eam eu. Sit eu reque tation aliquip. Quo no dolorum albucius lucilius, hinc eligendi ut sed. Ex nam quot ferri suscipit, mea ne legere alterum repudiandae. Ei pri quaerendum intellegebat, ut vel consequuntur voluptatibus. Et volumus sententiae adversarium duo......
                        </p>
                        <a href=\"/ev\" class=\"btn_1\">Read more</a>
                    </div>
                    <!-- end post -->

                    <div class=\"post\">
                        <a href=\"/ev\"><img src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/img/blog-2.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"img-responsive\">
                        </a>
                        <div class=\"post_info clearfix\">
                            <div class=\"post-left\">
                                <ul>
                                    <li><i class=\"icon-calendar-empty\"></i>12/05/2015 <em>by Mark</em>
                                    </li>
                                    <li><i class=\"icon-inbox-alt\"></i><a href=\"#\">Category</a>
                                    </li>
                                    <li><i class=\"icon-tags\"></i><a href=\"#\">Works</a>, <a href=\"#\">Personal</a>
                                    </li>
                                </ul>
                            </div>
                            <div class=\"post-right\"><i class=\"icon-comment\"></i><a href=\"#\">25 </a>
                            </div>
                        </div>
                        <h2>Duis aute irure dolor in reprehenderit</h2>
                        <p>
                            Ludus albucius adversarium eam eu. Sit eu reque tation aliquip. Quo no dolorum albucius lucilius, hinc eligendi ut sed. Ex nam quot ferri suscipit, mea ne legere alterum repudiandae. Ei pri quaerendum intellegebat, ut vel consequuntur voluptatibus. Et volumus sententiae adversarium duo......
                        </p>
                        <p>
                            Ludus albucius adversarium eam eu. Sit eu reque tation aliquip. Quo no dolorum albucius lucilius, hinc eligendi ut sed. Ex nam quot ferri suscipit, mea ne legere alterum repudiandae. Ei pri quaerendum intellegebat, ut vel consequuntur voluptatibus. Et volumus sententiae adversarium duo......
                        </p>
                        <a href=\"/ev\" class=\"btn_1\">Read more</a>
                    </div>
                    <!-- end post -->

                    <div class=\"post\">
                        <a href=\"/ev\"><img src=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/img/blog-3.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"img-responsive\">
                        </a>
                        <div class=\"post_info clearfix\">
                            <div class=\"post-left\">
                                <ul>
                                    <li><i class=\"icon-calendar-empty\"></i>12/05/2015 <em>by Mark</em>
                                    </li>
                                    <li><i class=\"icon-inbox-alt\"></i><a href=\"#\">Category</a>
                                    </li>
                                    <li><i class=\"icon-tags\"></i><a href=\"#\">Works</a>, <a href=\"#\">Personal</a>
                                    </li>
                                </ul>
                            </div>
                            <div class=\"post-right\"><i class=\"icon-comment\"></i><a href=\"#\">25 </a>
                            </div>
                        </div>
                        <h2>Duis aute irure dolor in reprehenderit</h2>
                        <p>
                            Ludus albucius adversarium eam eu. Sit eu reque tation aliquip. Quo no dolorum albucius lucilius, hinc eligendi ut sed. Ex nam quot ferri suscipit, mea ne legere alterum repudiandae. Ei pri quaerendum intellegebat, ut vel consequuntur voluptatibus. Et volumus sententiae adversarium duo......
                        </p>
                        <p>
                            Ludus albucius adversarium eam eu. Sit eu reque tation aliquip. Quo no dolorum albucius lucilius, hinc eligendi ut sed. Ex nam quot ferri suscipit, mea ne legere alterum repudiandae. Ei pri quaerendum intellegebat, ut vel consequuntur voluptatibus. Et volumus sententiae adversarium duo......
                        </p>
                        <a href=\"/ev\" class=\"btn_1\">Read more</a>
                    </div>
                    <!-- end post -->

                    <div class=\"text-center\">
                        <ul class=\"pager\">
                            <li class=\"previous\"><a href=\"#\"><span aria-hidden=\"true\">&larr;</span> Older</a>
                            </li>
                            <li class=\"next\"><a href=\"#\">Newer <span aria-hidden=\"true\">&rarr;</span></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- End col-md-9-->

                <aside class=\"col-md-3\" id=\"sidebar\">

                    <div class=\"widget\">
                        <div id=\"custom-search-input-blog\">
                            <div class=\"input-group col-md-12\">
                                <input type=\"text\" class=\"form-control input-lg\" placeholder=\"Search\">
                                <span class=\"input-group-btn\">
                            <button class=\"btn btn-info btn-lg\" type=\"button\">
                                <i class=\"icon-search-1\"></i>
                            </button>
                        </span>
                            </div>
                        </div>
                    </div>
                    <!-- End Search -->
                    <hr>
                    <div class=\"widget\">
                        <h4>Categories</h4>
                        <ul id=\"cat_nav_blog\">
                            <li><a href=\"#\">News</a>
                            </li>
                            <li><a href=\"#\">Events</a>
                            </li>
                            <li><a href=\"#\">Special dishes</a>
                            </li>
                            <li><a href=\"#\">New Restaurants</a>
                            </li>
                        </ul>
                    </div>
                    <!-- End widget -->

                    <hr>

                    <div class=\"widget\">
                        <h4>Recent post</h4>
                        <ul class=\"recent_post\">
                            <li>
                                <i class=\"icon-calendar-empty\"></i> 16th July, 2020
                                <div><a href=\"#\">It is a long established fact that a reader will be distracted </a>
                                </div>
                            </li>
                            <li>
                                <i class=\"icon-calendar-empty\"></i> 16th July, 2020
                                <div><a href=\"#\">It is a long established fact that a reader will be distracted </a>
                                </div>
                            </li>
                            <li>
                                <i class=\"icon-calendar-empty\"></i> 16th July, 2020
                                <div><a href=\"#\">It is a long established fact that a reader will be distracted </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <!-- End widget -->
                    <hr>
                    <div class=\"widget tags\">
                        <h4>Tags</h4>
                        <a href=\"#\">Lorem ipsum</a>
                        <a href=\"#\">Dolor</a>
                        <a href=\"#\">Long established</a>
                        <a href=\"#\">Sit amet</a>
                        <a href=\"#\">Latin words</a>
                        <a href=\"#\">Excepteur sint</a>
                    </div>
                    <!-- End widget -->

                </aside>
                <!-- End aside -->

            </div>
        </div>
        <!-- End container -->
    </div>
    <!-- End container_styled_1 -->

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "events_front/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  173 => 81,  142 => 53,  111 => 25,  93 => 10,  88 => 7,  78 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello EventsFrontController!{% endblock %}


{% block body %}


    <!-- SubHeader =============================================== -->
    <section class=\"parallax_window_in\" data-parallax=\"scroll\" data-image-src=\"{{ asset('front/img/sub_header_general.jpg') }}\" data-natural-width=\"1400\" data-natural-height=\"470\">
        <div id=\"sub_content_in\">
            <h1>LoveFit Blog</h1>
            <p>\"Usu habeo equidem sanctus no ex melius labitur conceptam eos\"</p>
        </div>
    </section>
    <!-- End section -->
    <!-- End SubHeader ============================================ -->

    <div class=\"container_styled_1\">
        <div class=\"container margin_60_35\">
            <div class=\"row\">

                <div class=\"col-md-9\">
                    <div class=\"post\">
                        <a href=\"/ev\"><img src=\"{{ asset('front/img/blog-1.jpg') }}\" alt=\"\" class=\"img-responsive\">
                        </a>
                        <div class=\"post_info clearfix\">
                            <div class=\"post-left\">
                                <ul>
                                    <li><i class=\"icon-calendar-empty\"></i>12/05/2015 <em>by Mark</em>
                                    </li>
                                    <li><i class=\"icon-inbox-alt\"></i><a href=\"#\">Category</a>
                                    </li>
                                    <li><i class=\"icon-tags\"></i><a href=\"#\">Works</a>, <a href=\"#\">Personal</a>
                                    </li>
                                </ul>
                            </div>
                            <div class=\"post-right\"><i class=\"icon-comment\"></i><a href=\"#\">25 </a>
                            </div>
                        </div>
                        <h2>Duis aute irure dolor in reprehenderit</h2>
                        <p>
                            Ludus albucius adversarium eam eu. Sit eu reque tation aliquip. Quo no dolorum albucius lucilius, hinc eligendi ut sed. Ex nam quot ferri suscipit, mea ne legere alterum repudiandae. Ei pri quaerendum intellegebat, ut vel consequuntur voluptatibus. Et volumus sententiae adversarium duo......
                        </p>
                        <p>
                            Ludus albucius adversarium eam eu. Sit eu reque tation aliquip. Quo no dolorum albucius lucilius, hinc eligendi ut sed. Ex nam quot ferri suscipit, mea ne legere alterum repudiandae. Ei pri quaerendum intellegebat, ut vel consequuntur voluptatibus. Et volumus sententiae adversarium duo......
                        </p>
                        <a href=\"/ev\" class=\"btn_1\">Read more</a>
                    </div>
                    <!-- end post -->

                    <div class=\"post\">
                        <a href=\"/ev\"><img src=\"{{ asset('front/img/blog-2.jpg') }}\" alt=\"\" class=\"img-responsive\">
                        </a>
                        <div class=\"post_info clearfix\">
                            <div class=\"post-left\">
                                <ul>
                                    <li><i class=\"icon-calendar-empty\"></i>12/05/2015 <em>by Mark</em>
                                    </li>
                                    <li><i class=\"icon-inbox-alt\"></i><a href=\"#\">Category</a>
                                    </li>
                                    <li><i class=\"icon-tags\"></i><a href=\"#\">Works</a>, <a href=\"#\">Personal</a>
                                    </li>
                                </ul>
                            </div>
                            <div class=\"post-right\"><i class=\"icon-comment\"></i><a href=\"#\">25 </a>
                            </div>
                        </div>
                        <h2>Duis aute irure dolor in reprehenderit</h2>
                        <p>
                            Ludus albucius adversarium eam eu. Sit eu reque tation aliquip. Quo no dolorum albucius lucilius, hinc eligendi ut sed. Ex nam quot ferri suscipit, mea ne legere alterum repudiandae. Ei pri quaerendum intellegebat, ut vel consequuntur voluptatibus. Et volumus sententiae adversarium duo......
                        </p>
                        <p>
                            Ludus albucius adversarium eam eu. Sit eu reque tation aliquip. Quo no dolorum albucius lucilius, hinc eligendi ut sed. Ex nam quot ferri suscipit, mea ne legere alterum repudiandae. Ei pri quaerendum intellegebat, ut vel consequuntur voluptatibus. Et volumus sententiae adversarium duo......
                        </p>
                        <a href=\"/ev\" class=\"btn_1\">Read more</a>
                    </div>
                    <!-- end post -->

                    <div class=\"post\">
                        <a href=\"/ev\"><img src=\"{{ asset('front/img/blog-3.jpg') }}\" alt=\"\" class=\"img-responsive\">
                        </a>
                        <div class=\"post_info clearfix\">
                            <div class=\"post-left\">
                                <ul>
                                    <li><i class=\"icon-calendar-empty\"></i>12/05/2015 <em>by Mark</em>
                                    </li>
                                    <li><i class=\"icon-inbox-alt\"></i><a href=\"#\">Category</a>
                                    </li>
                                    <li><i class=\"icon-tags\"></i><a href=\"#\">Works</a>, <a href=\"#\">Personal</a>
                                    </li>
                                </ul>
                            </div>
                            <div class=\"post-right\"><i class=\"icon-comment\"></i><a href=\"#\">25 </a>
                            </div>
                        </div>
                        <h2>Duis aute irure dolor in reprehenderit</h2>
                        <p>
                            Ludus albucius adversarium eam eu. Sit eu reque tation aliquip. Quo no dolorum albucius lucilius, hinc eligendi ut sed. Ex nam quot ferri suscipit, mea ne legere alterum repudiandae. Ei pri quaerendum intellegebat, ut vel consequuntur voluptatibus. Et volumus sententiae adversarium duo......
                        </p>
                        <p>
                            Ludus albucius adversarium eam eu. Sit eu reque tation aliquip. Quo no dolorum albucius lucilius, hinc eligendi ut sed. Ex nam quot ferri suscipit, mea ne legere alterum repudiandae. Ei pri quaerendum intellegebat, ut vel consequuntur voluptatibus. Et volumus sententiae adversarium duo......
                        </p>
                        <a href=\"/ev\" class=\"btn_1\">Read more</a>
                    </div>
                    <!-- end post -->

                    <div class=\"text-center\">
                        <ul class=\"pager\">
                            <li class=\"previous\"><a href=\"#\"><span aria-hidden=\"true\">&larr;</span> Older</a>
                            </li>
                            <li class=\"next\"><a href=\"#\">Newer <span aria-hidden=\"true\">&rarr;</span></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- End col-md-9-->

                <aside class=\"col-md-3\" id=\"sidebar\">

                    <div class=\"widget\">
                        <div id=\"custom-search-input-blog\">
                            <div class=\"input-group col-md-12\">
                                <input type=\"text\" class=\"form-control input-lg\" placeholder=\"Search\">
                                <span class=\"input-group-btn\">
                            <button class=\"btn btn-info btn-lg\" type=\"button\">
                                <i class=\"icon-search-1\"></i>
                            </button>
                        </span>
                            </div>
                        </div>
                    </div>
                    <!-- End Search -->
                    <hr>
                    <div class=\"widget\">
                        <h4>Categories</h4>
                        <ul id=\"cat_nav_blog\">
                            <li><a href=\"#\">News</a>
                            </li>
                            <li><a href=\"#\">Events</a>
                            </li>
                            <li><a href=\"#\">Special dishes</a>
                            </li>
                            <li><a href=\"#\">New Restaurants</a>
                            </li>
                        </ul>
                    </div>
                    <!-- End widget -->

                    <hr>

                    <div class=\"widget\">
                        <h4>Recent post</h4>
                        <ul class=\"recent_post\">
                            <li>
                                <i class=\"icon-calendar-empty\"></i> 16th July, 2020
                                <div><a href=\"#\">It is a long established fact that a reader will be distracted </a>
                                </div>
                            </li>
                            <li>
                                <i class=\"icon-calendar-empty\"></i> 16th July, 2020
                                <div><a href=\"#\">It is a long established fact that a reader will be distracted </a>
                                </div>
                            </li>
                            <li>
                                <i class=\"icon-calendar-empty\"></i> 16th July, 2020
                                <div><a href=\"#\">It is a long established fact that a reader will be distracted </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <!-- End widget -->
                    <hr>
                    <div class=\"widget tags\">
                        <h4>Tags</h4>
                        <a href=\"#\">Lorem ipsum</a>
                        <a href=\"#\">Dolor</a>
                        <a href=\"#\">Long established</a>
                        <a href=\"#\">Sit amet</a>
                        <a href=\"#\">Latin words</a>
                        <a href=\"#\">Excepteur sint</a>
                    </div>
                    <!-- End widget -->

                </aside>
                <!-- End aside -->

            </div>
        </div>
        <!-- End container -->
    </div>
    <!-- End container_styled_1 -->

{% endblock %}
", "events_front/index.html.twig", "/Users/gosu/Sites/BODYUP1/templates/events_front/index.html.twig");
    }
}
