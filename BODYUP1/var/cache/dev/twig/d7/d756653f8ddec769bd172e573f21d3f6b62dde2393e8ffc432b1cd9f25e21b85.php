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

/* footer.html.twig */
class __TwigTemplate_60dbb62524f62afd4522c1323bb89ad0c5f663101643f9f7dfbf4ed66c908bf0 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "footer.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "footer.html.twig"));

        // line 1
        echo "<footer>
    <div class=\"container\">
        <div class=\"row \">
            <div class=\"col-md-3 col-sm-12\">
                <p>
                    <img src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/img/logo.png"), "html", null, true);
        echo "\" width=\"95\" height=\"27\" alt=\"Lovefit\" data-retina=\"true\">
                </p>
                <div id=\"social\">
                    <ul>
                        <li><a href=\"#\"><i class=\"icon-facebook\"></i></a>
                        </li>
                        <li><a href=\"#\"><i class=\"icon-twitter\"></i></a>
                        </li>
                        <li><a href=\"#\"><i class=\"icon-google\"></i></a>
                        </li>
                        <li><a href=\"#\"><i class=\"icon-linkedin\"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class=\"col-md-3 col-sm-6\">
                <h4>About</h4>
                <ul>
                    <li><a href=\"#\">About us</a>
                    </li>
                    <li><a href=\"#\">Blog</a>
                    </li>
                    <li><a href=\"#\">Login</a>
                    </li>
                    <li><a href=\"#\">Register</a>
                    </li>
                    <li><a href=\"#\">Contact us</a>
                    </li>
                </ul>
            </div>
            <div class=\"col-md-3 col-sm-6\">
                <h4>Discover</h4>
                <ul>
                    <li><a href=\"#\">Explore</a>
                    </li>
                    <li><a href=\"#\">Terms and condition</a>
                    </li>
                    <li><a href=\"#\">Privacy</a>
                    </li>
                    <li><a href=\"#\">Cookie Policy</a>
                    </li>
                    <li><a href=\"#\">Faq</a>
                    </li>
                </ul>
            </div>
            <div class=\"col-md-3 hidden-sm hidden-xs\">
                <img src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/img/footer_img.png"), "html", null, true);
        echo "\" width=\"257\" height=\"302\" alt=\"Image\" class=\"footer_pic\">
            </div>
        </div>
        <!-- End row -->
    </div>
    <!-- End container -->
</footer>
<!-- End footer -->
<div id=\"copy\">
    <div class=\"container\">
        © LoveFit 2016 - All rights reserved.
    </div>
</div>
<!-- End copy -->
<div id=\"toTop\"></div>
<!-- Back to top button -->";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 52,  50 => 6,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<footer>
    <div class=\"container\">
        <div class=\"row \">
            <div class=\"col-md-3 col-sm-12\">
                <p>
                    <img src=\"{{ asset('front/img/logo.png') }}\" width=\"95\" height=\"27\" alt=\"Lovefit\" data-retina=\"true\">
                </p>
                <div id=\"social\">
                    <ul>
                        <li><a href=\"#\"><i class=\"icon-facebook\"></i></a>
                        </li>
                        <li><a href=\"#\"><i class=\"icon-twitter\"></i></a>
                        </li>
                        <li><a href=\"#\"><i class=\"icon-google\"></i></a>
                        </li>
                        <li><a href=\"#\"><i class=\"icon-linkedin\"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class=\"col-md-3 col-sm-6\">
                <h4>About</h4>
                <ul>
                    <li><a href=\"#\">About us</a>
                    </li>
                    <li><a href=\"#\">Blog</a>
                    </li>
                    <li><a href=\"#\">Login</a>
                    </li>
                    <li><a href=\"#\">Register</a>
                    </li>
                    <li><a href=\"#\">Contact us</a>
                    </li>
                </ul>
            </div>
            <div class=\"col-md-3 col-sm-6\">
                <h4>Discover</h4>
                <ul>
                    <li><a href=\"#\">Explore</a>
                    </li>
                    <li><a href=\"#\">Terms and condition</a>
                    </li>
                    <li><a href=\"#\">Privacy</a>
                    </li>
                    <li><a href=\"#\">Cookie Policy</a>
                    </li>
                    <li><a href=\"#\">Faq</a>
                    </li>
                </ul>
            </div>
            <div class=\"col-md-3 hidden-sm hidden-xs\">
                <img src=\"{{ asset(\"front/img/footer_img.png\") }}\" width=\"257\" height=\"302\" alt=\"Image\" class=\"footer_pic\">
            </div>
        </div>
        <!-- End row -->
    </div>
    <!-- End container -->
</footer>
<!-- End footer -->
<div id=\"copy\">
    <div class=\"container\">
        © LoveFit 2016 - All rights reserved.
    </div>
</div>
<!-- End copy -->
<div id=\"toTop\"></div>
<!-- Back to top button -->", "footer.html.twig", "/Users/gosu/Sites/BODYUP1/templates/footer.html.twig");
    }
}
