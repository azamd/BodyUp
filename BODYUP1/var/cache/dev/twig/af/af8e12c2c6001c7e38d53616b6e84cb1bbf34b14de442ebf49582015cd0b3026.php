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

/* single_event/index.html.twig */
class __TwigTemplate_69d3b31d94a44a4fdd235629e1d3e38597fa2c35591179fd3c111599e13754f7 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "single_event/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "single_event/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "single_event/index.html.twig", 1);
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

        echo "Hello SingleEventController!";
        
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
    <section class=\"parallax_window_in\" data-parallax=\"scroll\" data-image-src=\"img/sub_header_general.jpg\" data-natural-width=\"1400\" data-natural-height=\"470\">
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
                        <img src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/img/blog-3.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"img-responsive\">
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
                        <p>Lorem ipsum dolor sit amet, dicta equidem consequat his ut. Sint diceret vituperatoribus cu nec, nulla repudiandae eum ea. Nullam dolores expetenda in nam, civibus pericula id pro, ut sit malorum bonorum apeirian. Aliquip delectus percipitur mea no, nam sumo partem appareat in. Ei doming aeterno erroribus sit. Illud sapientem cotidieque no quo, est oblique dolorum te, his minim soluta at. At eam illum verear sensibus.
                        </p>
                    </div>
                    <!-- end post -->

                    <h4>3 comments</h4>

                    <div id=\"comments\">
                        <ol>
                            <li>
                                <div class=\"avatar\">
                                    <a href=\"#\"><img src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/img/avatar1.jpg"), "html", null, true);
        echo "\" alt=\"\">
                                    </a>
                                </div>
                                <div class=\"comment_right clearfix\">
                                    <div class=\"comment_info\">
                                        By <a href=\"#\">Anna Smith</a><span>|</span>25/10/2019<span>|</span><a href=\"#\">Reply</a>
                                    </div>
                                    <p>
                                        Nam cursus tellus quis magna porta adipiscing. Donec et eros leo, non pellentesque arcu. Curabitur vitae mi enim, at vestibulum magna. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Sed sit amet sem a urna rutrumeger fringilla. Nam vel enim ipsum, et congue ante.
                                    </p>
                                </div>
                                <ul>
                                    <li>
                                        <div class=\"avatar\">
                                            <a href=\"#\"><img src=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/img/avatar2.jpg"), "html", null, true);
        echo "\" alt=\"\">
                                            </a>
                                        </div>

                                        <div class=\"comment_right clearfix\">
                                            <div class=\"comment_info\">
                                                By <a href=\"#\">Anna Smith</a><span>|</span>25/10/2019<span>|</span><a href=\"#\">Reply</a>
                                            </div>
                                            <p>
                                                Nam cursus tellus quis magna porta adipiscing. Donec et eros leo, non pellentesque arcu. Curabitur vitae mi enim, at vestibulum magna. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Sed sit amet sem a urna rutrumeger fringilla. Nam vel enim ipsum, et congue ante.
                                            </p>
                                            <p>
                                                Aenean iaculis sodales dui, non hendrerit lorem rhoncus ut. Pellentesque ullamcorper venenatis elit idaipiscingi Duis tellus neque, tincidunt eget pulvinar sit amet, rutrum nec urna. Suspendisse pretium laoreet elit vel ultricies. Maecenas ullamcorper ultricies rhoncus. Aliquam erat volutpat.
                                            </p>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <div class=\"avatar\">
                                    <a href=\"#\"><img src=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/img/avatar3.jpg"), "html", null, true);
        echo "\" alt=\"\">
                                    </a>
                                </div>

                                <div class=\"comment_right clearfix\">
                                    <div class=\"comment_info\">
                                        By <a href=\"#\">Anna Smith</a><span>|</span>25/10/2019<span>|</span><a href=\"#\">Reply</a>
                                    </div>
                                    <p>
                                        Cursus tellus quis magna porta adipiscin
                                    </p>
                                </div>
                            </li>
                        </ol>
                    </div>
                    <!-- End Comments -->

                    <h4>Leave a comment</h4>
                    <form action=\"#\" method=\"post\">
                        <div class=\"form-group\">
                            <input class=\"form-control styled\" type=\"text\" name=\"name\" placeholder=\"Enter name\">
                        </div>
                        <div class=\"form-group\">
                            <input class=\"form-control styled\" type=\"text\" name=\"mail\" placeholder=\"Enter email\">
                        </div>
                        <div class=\"form-group\">
                            <textarea name=\"message\" class=\"form-control styled\" style=\"height:150px;\" placeholder=\"Message\"></textarea>
                        </div>
                        <div class=\"form-group\">
                            <input type=\"submit\" class=\"btn_1\" value=\"Post Comment\">
                        </div>
                    </form>
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
        return "single_event/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  182 => 89,  159 => 69,  142 => 55,  106 => 22,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello SingleEventController!{% endblock %}

{% block body %}
    <!-- SubHeader =============================================== -->
    <section class=\"parallax_window_in\" data-parallax=\"scroll\" data-image-src=\"img/sub_header_general.jpg\" data-natural-width=\"1400\" data-natural-height=\"470\">
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
                        <img src=\"{{ asset('front/img/blog-3.jpg') }}\" alt=\"\" class=\"img-responsive\">
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
                        <p>Lorem ipsum dolor sit amet, dicta equidem consequat his ut. Sint diceret vituperatoribus cu nec, nulla repudiandae eum ea. Nullam dolores expetenda in nam, civibus pericula id pro, ut sit malorum bonorum apeirian. Aliquip delectus percipitur mea no, nam sumo partem appareat in. Ei doming aeterno erroribus sit. Illud sapientem cotidieque no quo, est oblique dolorum te, his minim soluta at. At eam illum verear sensibus.
                        </p>
                    </div>
                    <!-- end post -->

                    <h4>3 comments</h4>

                    <div id=\"comments\">
                        <ol>
                            <li>
                                <div class=\"avatar\">
                                    <a href=\"#\"><img src=\"{{ asset('front/img/avatar1.jpg') }}\" alt=\"\">
                                    </a>
                                </div>
                                <div class=\"comment_right clearfix\">
                                    <div class=\"comment_info\">
                                        By <a href=\"#\">Anna Smith</a><span>|</span>25/10/2019<span>|</span><a href=\"#\">Reply</a>
                                    </div>
                                    <p>
                                        Nam cursus tellus quis magna porta adipiscing. Donec et eros leo, non pellentesque arcu. Curabitur vitae mi enim, at vestibulum magna. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Sed sit amet sem a urna rutrumeger fringilla. Nam vel enim ipsum, et congue ante.
                                    </p>
                                </div>
                                <ul>
                                    <li>
                                        <div class=\"avatar\">
                                            <a href=\"#\"><img src=\"{{ asset('front/img/avatar2.jpg') }}\" alt=\"\">
                                            </a>
                                        </div>

                                        <div class=\"comment_right clearfix\">
                                            <div class=\"comment_info\">
                                                By <a href=\"#\">Anna Smith</a><span>|</span>25/10/2019<span>|</span><a href=\"#\">Reply</a>
                                            </div>
                                            <p>
                                                Nam cursus tellus quis magna porta adipiscing. Donec et eros leo, non pellentesque arcu. Curabitur vitae mi enim, at vestibulum magna. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Sed sit amet sem a urna rutrumeger fringilla. Nam vel enim ipsum, et congue ante.
                                            </p>
                                            <p>
                                                Aenean iaculis sodales dui, non hendrerit lorem rhoncus ut. Pellentesque ullamcorper venenatis elit idaipiscingi Duis tellus neque, tincidunt eget pulvinar sit amet, rutrum nec urna. Suspendisse pretium laoreet elit vel ultricies. Maecenas ullamcorper ultricies rhoncus. Aliquam erat volutpat.
                                            </p>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <div class=\"avatar\">
                                    <a href=\"#\"><img src=\"{{ asset('front/img/avatar3.jpg') }}\" alt=\"\">
                                    </a>
                                </div>

                                <div class=\"comment_right clearfix\">
                                    <div class=\"comment_info\">
                                        By <a href=\"#\">Anna Smith</a><span>|</span>25/10/2019<span>|</span><a href=\"#\">Reply</a>
                                    </div>
                                    <p>
                                        Cursus tellus quis magna porta adipiscin
                                    </p>
                                </div>
                            </li>
                        </ol>
                    </div>
                    <!-- End Comments -->

                    <h4>Leave a comment</h4>
                    <form action=\"#\" method=\"post\">
                        <div class=\"form-group\">
                            <input class=\"form-control styled\" type=\"text\" name=\"name\" placeholder=\"Enter name\">
                        </div>
                        <div class=\"form-group\">
                            <input class=\"form-control styled\" type=\"text\" name=\"mail\" placeholder=\"Enter email\">
                        </div>
                        <div class=\"form-group\">
                            <textarea name=\"message\" class=\"form-control styled\" style=\"height:150px;\" placeholder=\"Message\"></textarea>
                        </div>
                        <div class=\"form-group\">
                            <input type=\"submit\" class=\"btn_1\" value=\"Post Comment\">
                        </div>
                    </form>
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
", "single_event/index.html.twig", "/Users/gosu/Sites/BODYUP1/templates/single_event/index.html.twig");
    }
}
