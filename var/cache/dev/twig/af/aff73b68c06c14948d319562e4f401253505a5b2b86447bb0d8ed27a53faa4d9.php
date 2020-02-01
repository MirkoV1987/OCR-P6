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

/* Parts/_header.html.twig */
class __TwigTemplate_5f61ea0fce385d52db160450ca0304a4ddecdc72ef4a5321e785fcadcbaedc83 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Parts/_header.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Parts/_header.html.twig"));

        // line 2
        echo "
<!-- Navigation -->
<nav class=\"navbar fixed-top navbar-expand-lg navbar-dark bg-light fixed-top\" style=\"opacity: 0.9; box-shadow: 3px 3px 3px rgba(0, 0, 0, 0.1);\">
    <div class=\"container\">
      <a class=\"navbar-brand text-dark\" href=\"#\">SnowTrick</a>
      <button class=\"navbar-toggler navbar-toggler-right\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarResponsive\" aria-controls=\"navbarResponsive\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon text-dark\"></span>
      </button>
      <div class=\"collapse navbar-collapse\" id=\"navbarResponsive\">
        <ul class=\"navbar-nav ml-auto font-weight-bold\">
          <li class=\"nav-item text-dark font-weight-bold\">
            <a class=\"nav-link text-dark\" href=\"";
        // line 13
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_trick_home");
        echo "\">Accueil</a>
          </li>
          <li class=\"nav-item dropdown text-dark\">
            <a class=\"nav-link text-dark dropdown-toggle text-dark\" href=\"#\" id=\"navbarDropdownPortfolio\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
              Figures
            </a>
            <div class=\"dropdown-menu dropdown-menu-right\" aria-labelledby=\"navbarDropdownPortfolio\">
              <a class=\"dropdown-item\" href=\"";
        // line 20
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_trick_add");
        echo "\">Ajouter une figure</a>
              <a class=\"dropdown-item\" href=\"portfolio-2-col.html\">2 Column Portfolio</a>
              <a class=\"dropdown-item\" href=\"portfolio-3-col.html\">3 Column Portfolio</a>
              <a class=\"dropdown-item\" href=\"portfolio-4-col.html\">4 Column Portfolio</a>
              <a class=\"dropdown-item\" href=\"portfolio-item.html\">Single Portfolio Item</a>
            </div>
          </li>
          <li class=\"nav-item text-dark\">
            <a class=\"nav-link text-dark\" href=\"";
        // line 28
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_register");
        echo "\">Inscription</a>
          </li>
          <li class=\"nav-item text-dark\">
            <a class=\"nav-link text-dark\" href=\"";
        // line 31
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_login");
        echo "\">Connexion</a>
          </li>
        </ul>
      </div>
    </div>
</nav>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "Parts/_header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 31,  77 => 28,  66 => 20,  56 => 13,  43 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# templates/Parts/header.html.twig #}

<!-- Navigation -->
<nav class=\"navbar fixed-top navbar-expand-lg navbar-dark bg-light fixed-top\" style=\"opacity: 0.9; box-shadow: 3px 3px 3px rgba(0, 0, 0, 0.1);\">
    <div class=\"container\">
      <a class=\"navbar-brand text-dark\" href=\"#\">SnowTrick</a>
      <button class=\"navbar-toggler navbar-toggler-right\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarResponsive\" aria-controls=\"navbarResponsive\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon text-dark\"></span>
      </button>
      <div class=\"collapse navbar-collapse\" id=\"navbarResponsive\">
        <ul class=\"navbar-nav ml-auto font-weight-bold\">
          <li class=\"nav-item text-dark font-weight-bold\">
            <a class=\"nav-link text-dark\" href=\"{{ path('app_trick_home') }}\">Accueil</a>
          </li>
          <li class=\"nav-item dropdown text-dark\">
            <a class=\"nav-link text-dark dropdown-toggle text-dark\" href=\"#\" id=\"navbarDropdownPortfolio\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
              Figures
            </a>
            <div class=\"dropdown-menu dropdown-menu-right\" aria-labelledby=\"navbarDropdownPortfolio\">
              <a class=\"dropdown-item\" href=\"{{ path('app_trick_add') }}\">Ajouter une figure</a>
              <a class=\"dropdown-item\" href=\"portfolio-2-col.html\">2 Column Portfolio</a>
              <a class=\"dropdown-item\" href=\"portfolio-3-col.html\">3 Column Portfolio</a>
              <a class=\"dropdown-item\" href=\"portfolio-4-col.html\">4 Column Portfolio</a>
              <a class=\"dropdown-item\" href=\"portfolio-item.html\">Single Portfolio Item</a>
            </div>
          </li>
          <li class=\"nav-item text-dark\">
            <a class=\"nav-link text-dark\" href=\"{{ path('app_user_register') }}\">Inscription</a>
          </li>
          <li class=\"nav-item text-dark\">
            <a class=\"nav-link text-dark\" href=\"{{ path('app_user_login') }}\">Connexion</a>
          </li>
        </ul>
      </div>
    </div>
</nav>
", "Parts/_header.html.twig", "C:\\wamp64\\www\\OCR-P6\\templates\\Parts\\_header.html.twig");
    }
}
