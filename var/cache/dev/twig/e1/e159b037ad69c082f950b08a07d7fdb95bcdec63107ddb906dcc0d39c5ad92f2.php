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

/* Home/home.html.twig */
class __TwigTemplate_93bb121c6ca3575d8135a32f2ff2090a1fdf2e1bba5a087d67e62029c1d6444f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 3
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Home/home.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Home/home.html.twig"));

        $this->parent = $this->loadTemplate("layout.html.twig", "Home/home.html.twig", 3);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $this->displayParentBlock("stylesheets", $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Liste des figures ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 9
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "
<!-- Page Content -->
<div class=\"container-fluid\">
  ";
        // line 13
        $this->displayParentBlock("body", $context, $blocks);
        echo "

  <div class=\"row\">
    <img src=\"../public/img/snowtrick-background.jpg\" class=\"img-fluid\" alt=\"snowtrick\">
  </div>
  <!-- Tricks Section -->
  <div class=\"row my-4\">
    <div class=\"col-lg-1 mb-1\">
    </div>
    <div class=\"col-lg-2 mb-4\">
      <div class=\"card h-100\">
        <h4 class=\"card-header\">Card Title</h4>
        <div class=\"card-body\">
          <p class=\"card-text\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis ipsam eos, nam perspiciatis natus commodi similique totam consectetur praesentium molestiae atque exercitationem ut consequuntur, sed eveniet, magni nostrum sint fuga.</p>
        </div>
        <div class=\"card-footer\">
          <a href=\"#\" class=\"btn btn-primary\">Learn More</a>
        </div>
      </div>
    </div>
    <div class=\"col-lg-2 mb-4\">
      <div class=\"card h-100\">
        <h4 class=\"card-header\">Card Title</h4>
        <div class=\"card-body\">
          <p class=\"card-text\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis ipsam eos, nam perspiciatis natus commodi similique totam consectetur praesentium molestiae atque exercitationem ut consequuntur, sed eveniet, magni nostrum sint fuga.</p>
        </div>
        <div class=\"card-footer\">
          <a href=\"#\" class=\"btn btn-primary\">Learn More</a>
        </div>
      </div>
    </div>
    <div class=\"col-lg-2 mb-4\">
      <div class=\"card h-100\">
        <h4 class=\"card-header\">Card Title</h4>
        <div class=\"card-body\">
          <p class=\"card-text\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis ipsam eos, nam perspiciatis natus commodi similique totam consectetur praesentium molestiae atque exercitationem ut consequuntur, sed eveniet, magni nostrum sint fuga.</p>
        </div>
        <div class=\"card-footer\">
          <a href=\"#\" class=\"btn btn-primary\">Learn More</a>
        </div>
      </div>
    </div>
    <div class=\"col-lg-2 mb-4\">
      <div class=\"card h-100\">
        <h4 class=\"card-header\">Card Title</h4>
        <div class=\"card-body\">
          <p class=\"card-text\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque.</p>
        </div>
        <div class=\"card-footer\">
          <a href=\"#\" class=\"btn btn-primary\">Learn More</a>
        </div>
      </div>
    </div>
    <div class=\"col-lg-2 mb-4\">
      <div class=\"card h-100\">
        <h4 class=\"card-header\">Card Title</h4>
        <div class=\"card-body\">
          <p class=\"card-text\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque.</p>
        </div>
        <div class=\"card-footer\">
          <a href=\"#\" class=\"btn btn-primary\">Learn More</a>
        </div>
      </div>
    </div>
    <div class=\"col-lg-1 mb-4\">
    </div>
  </div>
  <!-- /.row -->

  <div class=\"row my-4\">
    <div class=\"col-lg-1 mb-1\">
    </div>
    <div class=\"col-lg-2 mb-4\">
      <div class=\"card h-100\">
        <h4 class=\"card-header\">Card Title</h4>
        <div class=\"card-body\">
          <p class=\"card-text\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis ipsam eos, nam perspiciatis natus commodi similique totam consectetur praesentium molestiae atque exercitationem ut consequuntur, sed eveniet, magni nostrum sint fuga.</p>
        </div>
        <div class=\"card-footer\">
          <a href=\"#\" class=\"btn btn-primary\">Learn More</a>
        </div>
      </div>
    </div>
    <div class=\"col-lg-2 mb-4\">
      <div class=\"card h-100\">
        <h4 class=\"card-header\">Card Title</h4>
        <div class=\"card-body\">
          <p class=\"card-text\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis ipsam eos, nam perspiciatis natus commodi similique totam consectetur praesentium molestiae atque exercitationem ut consequuntur, sed eveniet, magni nostrum sint fuga.</p>
        </div>
        <div class=\"card-footer\">
          <a href=\"#\" class=\"btn btn-primary\">Learn More</a>
        </div>
      </div>
    </div>
    <div class=\"col-lg-2 mb-4\">
      <div class=\"card h-100\">
        <h4 class=\"card-header\">Card Title</h4>
        <div class=\"card-body\">
          <p class=\"card-text\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis ipsam eos, nam perspiciatis natus commodi similique totam consectetur praesentium molestiae atque exercitationem ut consequuntur, sed eveniet, magni nostrum sint fuga.</p>
        </div>
        <div class=\"card-footer\">
          <a href=\"#\" class=\"btn btn-primary\">Learn More</a>
        </div>
      </div>
    </div>
    <div class=\"col-lg-2 mb-4\">
      <div class=\"card h-100\">
        <h4 class=\"card-header\">Card Title</h4>
        <div class=\"card-body\">
          <p class=\"card-text\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque.</p>
        </div>
        <div class=\"card-footer\">
          <a href=\"#\" class=\"btn btn-primary\">Learn More</a>
        </div>
      </div>
    </div>
    <div class=\"col-lg-2 mb-4\">
      <div class=\"card h-100\">
        <h4 class=\"card-header\">Card Title</h4>
        <div class=\"card-body\">
          <p class=\"card-text\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque.</p>
        </div>
        <div class=\"card-footer\">
          <a href=\"#\" class=\"btn btn-primary\">Learn More</a>
        </div>
      </div>
    </div>
    <div class=\"col-lg-1 mb-4\">
    </div>
  </div>
  <!-- /.row -->

  <div class=\"row my-4\">
    <div class=\"col-lg-1 mb-1\">
    </div>
    <div class=\"col-lg-2 mb-4\">
      <div class=\"card h-100\">
        <h4 class=\"card-header\">Card Title</h4>
        <div class=\"card-body\">
          <p class=\"card-text\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis ipsam eos, nam perspiciatis natus commodi similique totam consectetur praesentium molestiae atque exercitationem ut consequuntur, sed eveniet, magni nostrum sint fuga.</p>
        </div>
        <div class=\"card-footer\">
          <a href=\"#\" class=\"btn btn-primary\">Learn More</a>
        </div>
      </div>
    </div>
    <div class=\"col-lg-2 mb-4\">
      <div class=\"card h-100\">
        <h4 class=\"card-header\">Card Title</h4>
        <div class=\"card-body\">
          <p class=\"card-text\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis ipsam eos, nam perspiciatis natus commodi similique totam consectetur praesentium molestiae atque exercitationem ut consequuntur, sed eveniet, magni nostrum sint fuga.</p>
        </div>
        <div class=\"card-footer\">
          <a href=\"#\" class=\"btn btn-primary\">Learn More</a>
        </div>
      </div>
    </div>
    <div class=\"col-lg-2 mb-4\">
      <div class=\"card h-100\">
        <h4 class=\"card-header\">Card Title</h4>
        <div class=\"card-body\">
          <p class=\"card-text\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis ipsam eos, nam perspiciatis natus commodi similique totam consectetur praesentium molestiae atque exercitationem ut consequuntur, sed eveniet, magni nostrum sint fuga.</p>
        </div>
        <div class=\"card-footer\">
          <a href=\"#\" class=\"btn btn-primary\">Learn More</a>
        </div>
      </div>
    </div>
    <div class=\"col-lg-2 mb-4\">
      <div class=\"card h-100\">
        <h4 class=\"card-header\">Card Title</h4>
        <div class=\"card-body\">
          <p class=\"card-text\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque.</p>
        </div>
        <div class=\"card-footer\">
          <a href=\"#\" class=\"btn btn-primary\">Learn More</a>
        </div>
      </div>
    </div>
    <div class=\"col-lg-2 mb-4\">
      <div class=\"card h-100\">
        <h4 class=\"card-header\">Card Title</h4>
        <div class=\"card-body\">
          <p class=\"card-text\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque.</p>
        </div>
        <div class=\"card-footer\">
          <a href=\"#\" class=\"btn btn-primary\">Learn More</a>
        </div>
      </div>
    </div>
    <div class=\"col-lg-1 mb-4\">
    </div>
  </div>
  <!-- /.row -->

  <!-- Call to Action Section -->
  <div class=\"row mb-4 text-center\">
    <div class=\"align-self-center mx-auto\">
      <a class=\"btn btn-lg btn-primary btn-block text-uppercase\" href=\"#\">Load more tricks</a>
    </div>
  </div>

</div>
<!-- /.container -->
";
        // line 217
        $this->displayBlock('javascripts', $context, $blocks);
        echo " 
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        echo " ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo " ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "Home/home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  322 => 217,  115 => 13,  110 => 10,  100 => 9,  80 => 7,  61 => 5,  38 => 3,);
    }

    public function getSourceContext()
    {
        return new Source("{# templates/Home/home.html.twig #}

{% extends \"layout.html.twig\" %}

{% block stylesheets %}{{ parent() }}{% endblock %}

{% block title %}{{ parent() }} Liste des figures {% endblock %}

{% block body %}

<!-- Page Content -->
<div class=\"container-fluid\">
  {{ parent() }}

  <div class=\"row\">
    <img src=\"../public/img/snowtrick-background.jpg\" class=\"img-fluid\" alt=\"snowtrick\">
  </div>
  <!-- Tricks Section -->
  <div class=\"row my-4\">
    <div class=\"col-lg-1 mb-1\">
    </div>
    <div class=\"col-lg-2 mb-4\">
      <div class=\"card h-100\">
        <h4 class=\"card-header\">Card Title</h4>
        <div class=\"card-body\">
          <p class=\"card-text\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis ipsam eos, nam perspiciatis natus commodi similique totam consectetur praesentium molestiae atque exercitationem ut consequuntur, sed eveniet, magni nostrum sint fuga.</p>
        </div>
        <div class=\"card-footer\">
          <a href=\"#\" class=\"btn btn-primary\">Learn More</a>
        </div>
      </div>
    </div>
    <div class=\"col-lg-2 mb-4\">
      <div class=\"card h-100\">
        <h4 class=\"card-header\">Card Title</h4>
        <div class=\"card-body\">
          <p class=\"card-text\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis ipsam eos, nam perspiciatis natus commodi similique totam consectetur praesentium molestiae atque exercitationem ut consequuntur, sed eveniet, magni nostrum sint fuga.</p>
        </div>
        <div class=\"card-footer\">
          <a href=\"#\" class=\"btn btn-primary\">Learn More</a>
        </div>
      </div>
    </div>
    <div class=\"col-lg-2 mb-4\">
      <div class=\"card h-100\">
        <h4 class=\"card-header\">Card Title</h4>
        <div class=\"card-body\">
          <p class=\"card-text\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis ipsam eos, nam perspiciatis natus commodi similique totam consectetur praesentium molestiae atque exercitationem ut consequuntur, sed eveniet, magni nostrum sint fuga.</p>
        </div>
        <div class=\"card-footer\">
          <a href=\"#\" class=\"btn btn-primary\">Learn More</a>
        </div>
      </div>
    </div>
    <div class=\"col-lg-2 mb-4\">
      <div class=\"card h-100\">
        <h4 class=\"card-header\">Card Title</h4>
        <div class=\"card-body\">
          <p class=\"card-text\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque.</p>
        </div>
        <div class=\"card-footer\">
          <a href=\"#\" class=\"btn btn-primary\">Learn More</a>
        </div>
      </div>
    </div>
    <div class=\"col-lg-2 mb-4\">
      <div class=\"card h-100\">
        <h4 class=\"card-header\">Card Title</h4>
        <div class=\"card-body\">
          <p class=\"card-text\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque.</p>
        </div>
        <div class=\"card-footer\">
          <a href=\"#\" class=\"btn btn-primary\">Learn More</a>
        </div>
      </div>
    </div>
    <div class=\"col-lg-1 mb-4\">
    </div>
  </div>
  <!-- /.row -->

  <div class=\"row my-4\">
    <div class=\"col-lg-1 mb-1\">
    </div>
    <div class=\"col-lg-2 mb-4\">
      <div class=\"card h-100\">
        <h4 class=\"card-header\">Card Title</h4>
        <div class=\"card-body\">
          <p class=\"card-text\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis ipsam eos, nam perspiciatis natus commodi similique totam consectetur praesentium molestiae atque exercitationem ut consequuntur, sed eveniet, magni nostrum sint fuga.</p>
        </div>
        <div class=\"card-footer\">
          <a href=\"#\" class=\"btn btn-primary\">Learn More</a>
        </div>
      </div>
    </div>
    <div class=\"col-lg-2 mb-4\">
      <div class=\"card h-100\">
        <h4 class=\"card-header\">Card Title</h4>
        <div class=\"card-body\">
          <p class=\"card-text\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis ipsam eos, nam perspiciatis natus commodi similique totam consectetur praesentium molestiae atque exercitationem ut consequuntur, sed eveniet, magni nostrum sint fuga.</p>
        </div>
        <div class=\"card-footer\">
          <a href=\"#\" class=\"btn btn-primary\">Learn More</a>
        </div>
      </div>
    </div>
    <div class=\"col-lg-2 mb-4\">
      <div class=\"card h-100\">
        <h4 class=\"card-header\">Card Title</h4>
        <div class=\"card-body\">
          <p class=\"card-text\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis ipsam eos, nam perspiciatis natus commodi similique totam consectetur praesentium molestiae atque exercitationem ut consequuntur, sed eveniet, magni nostrum sint fuga.</p>
        </div>
        <div class=\"card-footer\">
          <a href=\"#\" class=\"btn btn-primary\">Learn More</a>
        </div>
      </div>
    </div>
    <div class=\"col-lg-2 mb-4\">
      <div class=\"card h-100\">
        <h4 class=\"card-header\">Card Title</h4>
        <div class=\"card-body\">
          <p class=\"card-text\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque.</p>
        </div>
        <div class=\"card-footer\">
          <a href=\"#\" class=\"btn btn-primary\">Learn More</a>
        </div>
      </div>
    </div>
    <div class=\"col-lg-2 mb-4\">
      <div class=\"card h-100\">
        <h4 class=\"card-header\">Card Title</h4>
        <div class=\"card-body\">
          <p class=\"card-text\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque.</p>
        </div>
        <div class=\"card-footer\">
          <a href=\"#\" class=\"btn btn-primary\">Learn More</a>
        </div>
      </div>
    </div>
    <div class=\"col-lg-1 mb-4\">
    </div>
  </div>
  <!-- /.row -->

  <div class=\"row my-4\">
    <div class=\"col-lg-1 mb-1\">
    </div>
    <div class=\"col-lg-2 mb-4\">
      <div class=\"card h-100\">
        <h4 class=\"card-header\">Card Title</h4>
        <div class=\"card-body\">
          <p class=\"card-text\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis ipsam eos, nam perspiciatis natus commodi similique totam consectetur praesentium molestiae atque exercitationem ut consequuntur, sed eveniet, magni nostrum sint fuga.</p>
        </div>
        <div class=\"card-footer\">
          <a href=\"#\" class=\"btn btn-primary\">Learn More</a>
        </div>
      </div>
    </div>
    <div class=\"col-lg-2 mb-4\">
      <div class=\"card h-100\">
        <h4 class=\"card-header\">Card Title</h4>
        <div class=\"card-body\">
          <p class=\"card-text\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis ipsam eos, nam perspiciatis natus commodi similique totam consectetur praesentium molestiae atque exercitationem ut consequuntur, sed eveniet, magni nostrum sint fuga.</p>
        </div>
        <div class=\"card-footer\">
          <a href=\"#\" class=\"btn btn-primary\">Learn More</a>
        </div>
      </div>
    </div>
    <div class=\"col-lg-2 mb-4\">
      <div class=\"card h-100\">
        <h4 class=\"card-header\">Card Title</h4>
        <div class=\"card-body\">
          <p class=\"card-text\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis ipsam eos, nam perspiciatis natus commodi similique totam consectetur praesentium molestiae atque exercitationem ut consequuntur, sed eveniet, magni nostrum sint fuga.</p>
        </div>
        <div class=\"card-footer\">
          <a href=\"#\" class=\"btn btn-primary\">Learn More</a>
        </div>
      </div>
    </div>
    <div class=\"col-lg-2 mb-4\">
      <div class=\"card h-100\">
        <h4 class=\"card-header\">Card Title</h4>
        <div class=\"card-body\">
          <p class=\"card-text\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque.</p>
        </div>
        <div class=\"card-footer\">
          <a href=\"#\" class=\"btn btn-primary\">Learn More</a>
        </div>
      </div>
    </div>
    <div class=\"col-lg-2 mb-4\">
      <div class=\"card h-100\">
        <h4 class=\"card-header\">Card Title</h4>
        <div class=\"card-body\">
          <p class=\"card-text\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque.</p>
        </div>
        <div class=\"card-footer\">
          <a href=\"#\" class=\"btn btn-primary\">Learn More</a>
        </div>
      </div>
    </div>
    <div class=\"col-lg-1 mb-4\">
    </div>
  </div>
  <!-- /.row -->

  <!-- Call to Action Section -->
  <div class=\"row mb-4 text-center\">
    <div class=\"align-self-center mx-auto\">
      <a class=\"btn btn-lg btn-primary btn-block text-uppercase\" href=\"#\">Load more tricks</a>
    </div>
  </div>

</div>
<!-- /.container -->
{% block javascripts %} {{ parent() }} {% endblock %} 
{% endblock %}", "Home/home.html.twig", "C:\\wamp64\\www\\OCR-P6\\templates\\Home\\home.html.twig");
    }
}
