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

/* header.html.twig */
class __TwigTemplate_8ecae69f737cfc9c97826ed34ac1396fc9be59094ee4fbe741fd83d519a98bf1 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "header.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "header.html.twig"));

        // line 1
        echo "
<!-- Header ================================================== -->
<header>
    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"col-xs-3\">
                <a href=\"/\" id=\"logo\">
                    <img src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/img/logo.png"), "html", null, true);
        echo "\" width=\"95\" height=\"27\" alt=\"\" data-retina=\"true\" class=\"logo_normal\">
                    <img src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/img/logo_sticky.png"), "html", null, true);
        echo "\" width=\"95\" height=\"27\" alt=\"\" data-retina=\"true\" class=\"logo_sticky\">
                </a>
            </div>
            <nav class=\"col-xs-9\">
                <ul id=\"access_top\">
                    <li><a href=\"#\" class=\"search-overlay-menu-btn\"><i class=\"icon-search-6\"></i></a>
                    </li>
                    <li><a href=\"#\" data-toggle=\"modal\" data-target=\"#login\" class=\"hidden-xs\">Login</a>
                    </li>
                    <li><a href=\"#\" data-toggle=\"modal\" data-target=\"#register\" class=\"hidden-xs\">Register</a>
                    </li>
                </ul>
                <a class=\"cmn-toggle-switch cmn-toggle-switch__htx open_close\" href=\"javascript:void(0);\"><span>Menu mobile</span></a>
                <div class=\"main-menu\">
                    <div id=\"header_menu\">
                        <img src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/img/logo.png"), "html", null, true);
        echo "\" width=\"95\" height=\"27\" alt=\"Lovefit\" data-retina=\"true\">
                    </div>
                    <a href=\"#\" class=\"open_close\" id=\"close_in\"><i class=\"icon_close\"></i></a>
                    <ul>
                        <li><a href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/exercices"), "html", null, true);
        echo "\">Exercices</a>
                        </li>
                        <li><a href=\"";
        // line 30
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("events_front");
        echo "\">Events</a>
                        </li>
                        <li><a href=\"";
        // line 32
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("gyms_front");
        echo "\">Find a club</a>
                        </li>
                        <li class=\"submenu\">
                            <a href=\"javascript:void(0);\" class=\"show-submenu\">Pages<i class=\"icon-down-open-mini\"></i></a>
                            <ul>
                                <li><a href=\"#0\">Home versions</a>
                                    <ul>
                                        <li><a href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/index.html"), "html", null, true);
        echo "\">Home Video Bg</a>
                                        </li>
                                        <li><a href=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/index_2.html"), "html", null, true);
        echo "\">Home Layer Slider</a>
                                        </li>
                                        <li><a href=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/index_3.html"), "html", null, true);
        echo "\">Home Cookie Bar</a>
                                        </li>
                                        <li><a href=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/index_4.html"), "html", null, true);
        echo "\">Home Pop Up</a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/fitness-course-1.html"), "html", null, true);
        echo "\">Workout page</a>
                                </li>
                                <li><a href=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/fitness-course-2.html"), "html", null, true);
        echo "\">Workout page 2</a>
                                </li>
                                <li><a href=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/about.html"), "html", null, true);
        echo "\">About Us</a>
                                </li>
                                <li><a href=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/subscribe-working.html"), "html", null, true);
        echo "\">Subscribe working</a>
                                </li>
                                <li><a href=\"#0\">Cart section</a>
                                    <ul>
                                        <li><a href=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/cart-page-1.html"), "html", null, true);
        echo "\">Cart section 1</a>
                                        </li>
                                        <li><a href=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/cart-page-2.html"), "html", null, true);
        echo "\">Cart section 2</a>
                                        </li>
                                        <li><a href=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/cart-page-3.html"), "html", null, true);
        echo "\">Cart section 3</a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/faq.html"), "html", null, true);
        echo "\">Faq</a>
                                </li>
                                <li><a href=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/blog.html"), "html", null, true);
        echo "\">Blog</a>
                                </li>
                                <li><a href=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/gallery.html"), "html", null, true);
        echo "\">Gallery</a>
                                </li>
                                <li><a href=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/trainer-profile.html"), "html", null, true);
        echo "\">Trainer profile</a>
                                </li>
                                <li><a href=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/contacts.html"), "html", null, true);
        echo "\">Contacts</a>
                                </li>
                            </ul>
                        </li>
                        <li><a href=\"#\">Other elements<i class=\"icon-down-open-mini\"></i></a>
                            <ul>
                                <li><a href=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/shortcodes.html"), "html", null, true);
        echo "\">Shortcodes</a>
                                </li>
                                <li><a href=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/pricing-tables.html"), "html", null, true);
        echo "\">Pricing tables</a>
                                </li>
                                <li><a href=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/coming_soon/index.html"), "html", null, true);
        echo "\">Site launch</a>
                                </li>
                                <li><a href=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/icon_pack_1.html"), "html", null, true);
        echo "\">Icon pack 1</a>
                                </li>
                                <li><a href=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/icon_pack_2.html"), "html", null, true);
        echo "\">Icon pack 2</a>
                                </li>
                            </ul>
                        </li>
                        <li><a href=\"#\">Purchase this template</a>
                        </li>
                        <li><a href=\"#\" data-toggle=\"modal\" data-target=\"#login\" class=\"visible-xs\">Login</a>
                        </li>
                        <li><a href=\"#\" data-toggle=\"modal\" data-target=\"#register\" class=\"visible-xs\">Register</a>
                        </li>
                    </ul>
                </div>
                <!-- End main-menu -->
            </nav>
        </div>
        <!-- End row -->
    </div>
    <!-- End container -->
</header>
<!-- End Header =============================================== -->
<!-- Login modal -->
<div class=\"modal fade\" id=\"login\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myLogin\" aria-hidden=\"true\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content modal-popup\">
            <a href=\"#\" class=\"close-link\"><i class=\"icon_close_alt2\"></i></a>
            <form action=\"#\" class=\"popup-form\" id=\"myLogin\">
                <input type=\"text\" class=\"form-control form-white\" placeholder=\"Username\">
                <input type=\"text\" class=\"form-control form-white\" placeholder=\"Password\">
                <div class=\"checkbox-holder text-left\">
                    <div class=\"checkbox\">
                        <input type=\"checkbox\" value=\"accept_1\" id=\"check_1\" name=\"check_1\" />
                        <label for=\"check_1\"><span>I Agree to the <strong>Terms &amp; Conditions</strong></span>
                        </label>
                    </div>
                </div>
                <button type=\"submit\" class=\"btn btn-submit\">Submit</button>
            </form>
        </div>
    </div>
</div>
<!-- Register modal -->
<div class=\"modal fade\" id=\"register\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myRegister\" aria-hidden=\"true\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content modal-popup\">
            <a href=\"#\" class=\"close-link\"><i class=\"icon_close_alt2\"></i></a>
            <form action=\"#\" class=\"popup-form\" id=\"myRegister\">
                <input type=\"text\" class=\"form-control form-white\" placeholder=\"Name\">
                <input type=\"text\" class=\"form-control form-white\" placeholder=\"Last Name\">
                <input type=\"email\" class=\"form-control form-white\" placeholder=\"Email\">
                <input type=\"text\" class=\"form-control form-white\" placeholder=\"Password\">
                <div class=\"checkbox-holder text-left\">
                    <div class=\"checkbox\">
                        <input type=\"checkbox\" value=\"accept_2\" id=\"check_2\" name=\"check_2\" />
                        <label for=\"check_2\"><span>I Agree to the <strong>Terms &amp; Conditions</strong></span>
                        </label>
                    </div>
                </div>
                <button type=\"submit\" class=\"btn btn-submit\">Register</button>
            </form>
        </div>
    </div>
</div>
<!-- Search Menu -->
<div class=\"search-overlay-menu\">
    <span class=\"search-overlay-close\"><i class=\"icon_close\"></i></span>
    <form role=\"search\" id=\"searchform\" method=\"get\">
        <input value=\"\" name=\"q\" type=\"search\" placeholder=\"Search...\" />
        <button type=\"submit\"><i class=\"icon-search-6\"></i>
        </button>
    </form>
</div>
<!-- End Search Menu -->";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  211 => 89,  206 => 87,  201 => 85,  196 => 83,  191 => 81,  182 => 75,  177 => 73,  172 => 71,  167 => 69,  162 => 67,  155 => 63,  150 => 61,  145 => 59,  138 => 55,  133 => 53,  128 => 51,  123 => 49,  116 => 45,  111 => 43,  106 => 41,  101 => 39,  91 => 32,  86 => 30,  81 => 28,  74 => 24,  56 => 9,  52 => 8,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
<!-- Header ================================================== -->
<header>
    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"col-xs-3\">
                <a href=\"/\" id=\"logo\">
                    <img src=\"{{ asset('front/img/logo.png') }}\" width=\"95\" height=\"27\" alt=\"\" data-retina=\"true\" class=\"logo_normal\">
                    <img src=\"{{ asset('front/img/logo_sticky.png') }}\" width=\"95\" height=\"27\" alt=\"\" data-retina=\"true\" class=\"logo_sticky\">
                </a>
            </div>
            <nav class=\"col-xs-9\">
                <ul id=\"access_top\">
                    <li><a href=\"#\" class=\"search-overlay-menu-btn\"><i class=\"icon-search-6\"></i></a>
                    </li>
                    <li><a href=\"#\" data-toggle=\"modal\" data-target=\"#login\" class=\"hidden-xs\">Login</a>
                    </li>
                    <li><a href=\"#\" data-toggle=\"modal\" data-target=\"#register\" class=\"hidden-xs\">Register</a>
                    </li>
                </ul>
                <a class=\"cmn-toggle-switch cmn-toggle-switch__htx open_close\" href=\"javascript:void(0);\"><span>Menu mobile</span></a>
                <div class=\"main-menu\">
                    <div id=\"header_menu\">
                        <img src=\"{{ asset('front/img/logo.png') }}\" width=\"95\" height=\"27\" alt=\"Lovefit\" data-retina=\"true\">
                    </div>
                    <a href=\"#\" class=\"open_close\" id=\"close_in\"><i class=\"icon_close\"></i></a>
                    <ul>
                        <li><a href=\"{{ asset('/exercices') }}\">Exercices</a>
                        </li>
                        <li><a href=\"{{ path('events_front') }}\">Events</a>
                        </li>
                        <li><a href=\"{{ path('gyms_front') }}\">Find a club</a>
                        </li>
                        <li class=\"submenu\">
                            <a href=\"javascript:void(0);\" class=\"show-submenu\">Pages<i class=\"icon-down-open-mini\"></i></a>
                            <ul>
                                <li><a href=\"#0\">Home versions</a>
                                    <ul>
                                        <li><a href=\"{{ asset('front/index.html') }}\">Home Video Bg</a>
                                        </li>
                                        <li><a href=\"{{ asset('front/index_2.html') }}\">Home Layer Slider</a>
                                        </li>
                                        <li><a href=\"{{ asset('front/index_3.html') }}\">Home Cookie Bar</a>
                                        </li>
                                        <li><a href=\"{{ asset('front/index_4.html') }}\">Home Pop Up</a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href=\"{{ asset('front/fitness-course-1.html') }}\">Workout page</a>
                                </li>
                                <li><a href=\"{{ asset('front/fitness-course-2.html') }}\">Workout page 2</a>
                                </li>
                                <li><a href=\"{{ asset('front/about.html') }}\">About Us</a>
                                </li>
                                <li><a href=\"{{ asset('front/subscribe-working.html') }}\">Subscribe working</a>
                                </li>
                                <li><a href=\"#0\">Cart section</a>
                                    <ul>
                                        <li><a href=\"{{ asset('front/cart-page-1.html') }}\">Cart section 1</a>
                                        </li>
                                        <li><a href=\"{{ asset('front/cart-page-2.html') }}\">Cart section 2</a>
                                        </li>
                                        <li><a href=\"{{ asset('front/cart-page-3.html') }}\">Cart section 3</a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href=\"{{ asset('front/faq.html') }}\">Faq</a>
                                </li>
                                <li><a href=\"{{ asset('front/blog.html') }}\">Blog</a>
                                </li>
                                <li><a href=\"{{ asset('front/gallery.html') }}\">Gallery</a>
                                </li>
                                <li><a href=\"{{ asset('front/trainer-profile.html') }}\">Trainer profile</a>
                                </li>
                                <li><a href=\"{{ asset('front/contacts.html') }}\">Contacts</a>
                                </li>
                            </ul>
                        </li>
                        <li><a href=\"#\">Other elements<i class=\"icon-down-open-mini\"></i></a>
                            <ul>
                                <li><a href=\"{{ asset('front/shortcodes.html') }}\">Shortcodes</a>
                                </li>
                                <li><a href=\"{{ asset('front/pricing-tables.html') }}\">Pricing tables</a>
                                </li>
                                <li><a href=\"{{ asset('front/coming_soon/index.html') }}\">Site launch</a>
                                </li>
                                <li><a href=\"{{ asset('front/icon_pack_1.html') }}\">Icon pack 1</a>
                                </li>
                                <li><a href=\"{{ asset('front/icon_pack_2.html') }}\">Icon pack 2</a>
                                </li>
                            </ul>
                        </li>
                        <li><a href=\"#\">Purchase this template</a>
                        </li>
                        <li><a href=\"#\" data-toggle=\"modal\" data-target=\"#login\" class=\"visible-xs\">Login</a>
                        </li>
                        <li><a href=\"#\" data-toggle=\"modal\" data-target=\"#register\" class=\"visible-xs\">Register</a>
                        </li>
                    </ul>
                </div>
                <!-- End main-menu -->
            </nav>
        </div>
        <!-- End row -->
    </div>
    <!-- End container -->
</header>
<!-- End Header =============================================== -->
<!-- Login modal -->
<div class=\"modal fade\" id=\"login\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myLogin\" aria-hidden=\"true\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content modal-popup\">
            <a href=\"#\" class=\"close-link\"><i class=\"icon_close_alt2\"></i></a>
            <form action=\"#\" class=\"popup-form\" id=\"myLogin\">
                <input type=\"text\" class=\"form-control form-white\" placeholder=\"Username\">
                <input type=\"text\" class=\"form-control form-white\" placeholder=\"Password\">
                <div class=\"checkbox-holder text-left\">
                    <div class=\"checkbox\">
                        <input type=\"checkbox\" value=\"accept_1\" id=\"check_1\" name=\"check_1\" />
                        <label for=\"check_1\"><span>I Agree to the <strong>Terms &amp; Conditions</strong></span>
                        </label>
                    </div>
                </div>
                <button type=\"submit\" class=\"btn btn-submit\">Submit</button>
            </form>
        </div>
    </div>
</div>
<!-- Register modal -->
<div class=\"modal fade\" id=\"register\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myRegister\" aria-hidden=\"true\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content modal-popup\">
            <a href=\"#\" class=\"close-link\"><i class=\"icon_close_alt2\"></i></a>
            <form action=\"#\" class=\"popup-form\" id=\"myRegister\">
                <input type=\"text\" class=\"form-control form-white\" placeholder=\"Name\">
                <input type=\"text\" class=\"form-control form-white\" placeholder=\"Last Name\">
                <input type=\"email\" class=\"form-control form-white\" placeholder=\"Email\">
                <input type=\"text\" class=\"form-control form-white\" placeholder=\"Password\">
                <div class=\"checkbox-holder text-left\">
                    <div class=\"checkbox\">
                        <input type=\"checkbox\" value=\"accept_2\" id=\"check_2\" name=\"check_2\" />
                        <label for=\"check_2\"><span>I Agree to the <strong>Terms &amp; Conditions</strong></span>
                        </label>
                    </div>
                </div>
                <button type=\"submit\" class=\"btn btn-submit\">Register</button>
            </form>
        </div>
    </div>
</div>
<!-- Search Menu -->
<div class=\"search-overlay-menu\">
    <span class=\"search-overlay-close\"><i class=\"icon_close\"></i></span>
    <form role=\"search\" id=\"searchform\" method=\"get\">
        <input value=\"\" name=\"q\" type=\"search\" placeholder=\"Search...\" />
        <button type=\"submit\"><i class=\"icon-search-6\"></i>
        </button>
    </form>
</div>
<!-- End Search Menu -->", "header.html.twig", "/Users/gosu/Sites/BODYUP1/templates/header.html.twig");
    }
}
