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

/* modern-business/services.html */
class __TwigTemplate_bc21c15c39f8be97552d0b8ee67c4c6bdae11dd790726a499301159665ddb0bc extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "modern-business/services.html"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "modern-business/services.html"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>

  <meta charset=\"utf-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
  <meta name=\"description\" content=\"\">
  <meta name=\"author\" content=\"\">

  <title>Modern Business - Start Bootstrap Template</title>

  <!-- Bootstrap core CSS -->
  <link href=\"vendor/bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\">

  <!-- Custom styles for this template -->
  <link href=\"css/modern-business.css\" rel=\"stylesheet\">

</head>

<body>

  <!-- Navigation -->
  <nav class=\"navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top\">
    <div class=\"container\">
      <a class=\"navbar-brand\" href=\"index.html\">Start Bootstrap</a>
      <button class=\"navbar-toggler navbar-toggler-right\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarResponsive\" aria-controls=\"navbarResponsive\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon\"></span>
      </button>
      <div class=\"collapse navbar-collapse\" id=\"navbarResponsive\">
        <ul class=\"navbar-nav ml-auto\">
          <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"about.html\">About</a>
          </li>
          <li class=\"nav-item active\">
            <a class=\"nav-link\" href=\"services.html\">Services</a>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"contact.html\">Contact</a>
          </li>
          <li class=\"nav-item dropdown\">
            <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdownPortfolio\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
              Portfolio
            </a>
            <div class=\"dropdown-menu dropdown-menu-right\" aria-labelledby=\"navbarDropdownPortfolio\">
              <a class=\"dropdown-item\" href=\"portfolio-1-col.html\">1 Column Portfolio</a>
              <a class=\"dropdown-item\" href=\"portfolio-2-col.html\">2 Column Portfolio</a>
              <a class=\"dropdown-item\" href=\"portfolio-3-col.html\">3 Column Portfolio</a>
              <a class=\"dropdown-item\" href=\"portfolio-4-col.html\">4 Column Portfolio</a>
              <a class=\"dropdown-item\" href=\"portfolio-item.html\">Single Portfolio Item</a>
            </div>
          </li>
          <li class=\"nav-item dropdown\">
            <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdownBlog\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
              Blog
            </a>
            <div class=\"dropdown-menu dropdown-menu-right\" aria-labelledby=\"navbarDropdownBlog\">
              <a class=\"dropdown-item\" href=\"blog-home-1.html\">Blog Home 1</a>
              <a class=\"dropdown-item\" href=\"blog-home-2.html\">Blog Home 2</a>
              <a class=\"dropdown-item\" href=\"blog-post.html\">Blog Post</a>
            </div>
          </li>
          <li class=\"nav-item dropdown\">
            <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdownBlog\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
              Other Pages
            </a>
            <div class=\"dropdown-menu dropdown-menu-right\" aria-labelledby=\"navbarDropdownBlog\">
              <a class=\"dropdown-item\" href=\"full-width.html\">Full Width Page</a>
              <a class=\"dropdown-item\" href=\"sidebar.html\">Sidebar Page</a>
              <a class=\"dropdown-item\" href=\"faq.html\">FAQ</a>
              <a class=\"dropdown-item\" href=\"404.html\">404</a>
              <a class=\"dropdown-item\" href=\"pricing.html\">Pricing Table</a>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Page Content -->
  <div class=\"container\">

    <!-- Page Heading/Breadcrumbs -->
    <h1 class=\"mt-4 mb-3\">Services
      <small>Subheading</small>
    </h1>

    <ol class=\"breadcrumb\">
      <li class=\"breadcrumb-item\">
        <a href=\"index.html\">Home</a>
      </li>
      <li class=\"breadcrumb-item active\">Services</li>
    </ol>

    <!-- Image Header -->
    <img class=\"img-fluid rounded mb-4\" src=\"http://placehold.it/1200x300\" alt=\"\">

    <!-- Marketing Icons Section -->
    <div class=\"row\">
      <div class=\"col-lg-4 mb-4\">
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
      <div class=\"col-lg-4 mb-4\">
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
      <div class=\"col-lg-4 mb-4\">
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
    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

  <!-- Footer -->
  <footer class=\"py-5 bg-dark\">
    <div class=\"container\">
      <p class=\"m-0 text-center text-white\">Copyright &copy; Your Website 2019</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src=\"vendor/jquery/jquery.min.js\"></script>
  <script src=\"vendor/bootstrap/js/bootstrap.bundle.min.js\"></script>

</body>

</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "modern-business/services.html";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">

<head>

  <meta charset=\"utf-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
  <meta name=\"description\" content=\"\">
  <meta name=\"author\" content=\"\">

  <title>Modern Business - Start Bootstrap Template</title>

  <!-- Bootstrap core CSS -->
  <link href=\"vendor/bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\">

  <!-- Custom styles for this template -->
  <link href=\"css/modern-business.css\" rel=\"stylesheet\">

</head>

<body>

  <!-- Navigation -->
  <nav class=\"navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top\">
    <div class=\"container\">
      <a class=\"navbar-brand\" href=\"index.html\">Start Bootstrap</a>
      <button class=\"navbar-toggler navbar-toggler-right\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarResponsive\" aria-controls=\"navbarResponsive\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon\"></span>
      </button>
      <div class=\"collapse navbar-collapse\" id=\"navbarResponsive\">
        <ul class=\"navbar-nav ml-auto\">
          <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"about.html\">About</a>
          </li>
          <li class=\"nav-item active\">
            <a class=\"nav-link\" href=\"services.html\">Services</a>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"contact.html\">Contact</a>
          </li>
          <li class=\"nav-item dropdown\">
            <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdownPortfolio\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
              Portfolio
            </a>
            <div class=\"dropdown-menu dropdown-menu-right\" aria-labelledby=\"navbarDropdownPortfolio\">
              <a class=\"dropdown-item\" href=\"portfolio-1-col.html\">1 Column Portfolio</a>
              <a class=\"dropdown-item\" href=\"portfolio-2-col.html\">2 Column Portfolio</a>
              <a class=\"dropdown-item\" href=\"portfolio-3-col.html\">3 Column Portfolio</a>
              <a class=\"dropdown-item\" href=\"portfolio-4-col.html\">4 Column Portfolio</a>
              <a class=\"dropdown-item\" href=\"portfolio-item.html\">Single Portfolio Item</a>
            </div>
          </li>
          <li class=\"nav-item dropdown\">
            <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdownBlog\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
              Blog
            </a>
            <div class=\"dropdown-menu dropdown-menu-right\" aria-labelledby=\"navbarDropdownBlog\">
              <a class=\"dropdown-item\" href=\"blog-home-1.html\">Blog Home 1</a>
              <a class=\"dropdown-item\" href=\"blog-home-2.html\">Blog Home 2</a>
              <a class=\"dropdown-item\" href=\"blog-post.html\">Blog Post</a>
            </div>
          </li>
          <li class=\"nav-item dropdown\">
            <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdownBlog\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
              Other Pages
            </a>
            <div class=\"dropdown-menu dropdown-menu-right\" aria-labelledby=\"navbarDropdownBlog\">
              <a class=\"dropdown-item\" href=\"full-width.html\">Full Width Page</a>
              <a class=\"dropdown-item\" href=\"sidebar.html\">Sidebar Page</a>
              <a class=\"dropdown-item\" href=\"faq.html\">FAQ</a>
              <a class=\"dropdown-item\" href=\"404.html\">404</a>
              <a class=\"dropdown-item\" href=\"pricing.html\">Pricing Table</a>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Page Content -->
  <div class=\"container\">

    <!-- Page Heading/Breadcrumbs -->
    <h1 class=\"mt-4 mb-3\">Services
      <small>Subheading</small>
    </h1>

    <ol class=\"breadcrumb\">
      <li class=\"breadcrumb-item\">
        <a href=\"index.html\">Home</a>
      </li>
      <li class=\"breadcrumb-item active\">Services</li>
    </ol>

    <!-- Image Header -->
    <img class=\"img-fluid rounded mb-4\" src=\"http://placehold.it/1200x300\" alt=\"\">

    <!-- Marketing Icons Section -->
    <div class=\"row\">
      <div class=\"col-lg-4 mb-4\">
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
      <div class=\"col-lg-4 mb-4\">
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
      <div class=\"col-lg-4 mb-4\">
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
    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

  <!-- Footer -->
  <footer class=\"py-5 bg-dark\">
    <div class=\"container\">
      <p class=\"m-0 text-center text-white\">Copyright &copy; Your Website 2019</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src=\"vendor/jquery/jquery.min.js\"></script>
  <script src=\"vendor/bootstrap/js/bootstrap.bundle.min.js\"></script>

</body>

</html>
", "modern-business/services.html", "C:\\wamp64\\www\\OCR-P6\\templates\\modern-business\\services.html");
    }
}