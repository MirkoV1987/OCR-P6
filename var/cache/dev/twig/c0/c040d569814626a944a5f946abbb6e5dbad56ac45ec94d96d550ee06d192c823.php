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

/* modern-business/sidebar.html */
class __TwigTemplate_78e56ba608091eb9948d3219bbec4d6e94b3fb61996bf0b480406d3ce25a870e extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "modern-business/sidebar.html"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "modern-business/sidebar.html"));

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
          <li class=\"nav-item\">
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
          <li class=\"nav-item active dropdown\">
            <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdownBlog\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
              Other Pages
            </a>
            <div class=\"dropdown-menu dropdown-menu-right\" aria-labelledby=\"navbarDropdownBlog\">
              <a class=\"dropdown-item\" href=\"full-width.html\">Full Width Page</a>
              <a class=\"dropdown-item active\" href=\"sidebar.html\">Sidebar Page</a>
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
    <h1 class=\"mt-4 mb-3\">Sidebar Page
      <small>Subheading</small>
    </h1>

    <ol class=\"breadcrumb\">
      <li class=\"breadcrumb-item\">
        <a href=\"index.html\">Home</a>
      </li>
      <li class=\"breadcrumb-item active\">About</li>
    </ol>

    <!-- Content Row -->
    <div class=\"row\">
      <!-- Sidebar Column -->
      <div class=\"col-lg-3 mb-4\">
        <div class=\"list-group\">
          <a href=\"index.html\" class=\"list-group-item\">Home</a>
          <a href=\"about.html\" class=\"list-group-item\">About</a>
          <a href=\"services.html\" class=\"list-group-item\">Services</a>
          <a href=\"contact.html\" class=\"list-group-item\">Contact</a>
          <a href=\"portfolio-1-col.html\" class=\"list-group-item\">1 Column Portfolio</a>
          <a href=\"portfolio-2-col.html\" class=\"list-group-item\">2 Column Portfolio</a>
          <a href=\"portfolio-3-col.html\" class=\"list-group-item\">3 Column Portfolio</a>
          <a href=\"portfolio-4-col.html\" class=\"list-group-item\">4 Column Portfolio</a>
          <a href=\"portfolio-item.html\" class=\"list-group-item\">Single Portfolio Item</a>
          <a href=\"blog-home-1.html\" class=\"list-group-item\">Blog Home 1</a>
          <a href=\"blog-home-2.html\" class=\"list-group-item\">Blog Home 2</a>
          <a href=\"blog-post.html\" class=\"list-group-item\">Blog Post</a>
          <a href=\"full-width.html\" class=\"list-group-item\">Full Width Page</a>
          <a href=\"sidebar.html\" class=\"list-group-item active\">Sidebar Page</a>
          <a href=\"faq.html\" class=\"list-group-item\">FAQ</a>
          <a href=\"404.html\" class=\"list-group-item\">404</a>
          <a href=\"pricing.html\" class=\"list-group-item\">Pricing Table</a>
        </div>
      </div>
      <!-- Content Column -->
      <div class=\"col-lg-9 mb-4\">
        <h2>Section Heading</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta, et temporibus, facere perferendis veniam beatae non debitis, numquam blanditiis necessitatibus vel mollitia dolorum laudantium, voluptate dolores iure maxime ducimus fugit.</p>
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
        return "modern-business/sidebar.html";
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
          <li class=\"nav-item\">
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
          <li class=\"nav-item active dropdown\">
            <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdownBlog\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
              Other Pages
            </a>
            <div class=\"dropdown-menu dropdown-menu-right\" aria-labelledby=\"navbarDropdownBlog\">
              <a class=\"dropdown-item\" href=\"full-width.html\">Full Width Page</a>
              <a class=\"dropdown-item active\" href=\"sidebar.html\">Sidebar Page</a>
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
    <h1 class=\"mt-4 mb-3\">Sidebar Page
      <small>Subheading</small>
    </h1>

    <ol class=\"breadcrumb\">
      <li class=\"breadcrumb-item\">
        <a href=\"index.html\">Home</a>
      </li>
      <li class=\"breadcrumb-item active\">About</li>
    </ol>

    <!-- Content Row -->
    <div class=\"row\">
      <!-- Sidebar Column -->
      <div class=\"col-lg-3 mb-4\">
        <div class=\"list-group\">
          <a href=\"index.html\" class=\"list-group-item\">Home</a>
          <a href=\"about.html\" class=\"list-group-item\">About</a>
          <a href=\"services.html\" class=\"list-group-item\">Services</a>
          <a href=\"contact.html\" class=\"list-group-item\">Contact</a>
          <a href=\"portfolio-1-col.html\" class=\"list-group-item\">1 Column Portfolio</a>
          <a href=\"portfolio-2-col.html\" class=\"list-group-item\">2 Column Portfolio</a>
          <a href=\"portfolio-3-col.html\" class=\"list-group-item\">3 Column Portfolio</a>
          <a href=\"portfolio-4-col.html\" class=\"list-group-item\">4 Column Portfolio</a>
          <a href=\"portfolio-item.html\" class=\"list-group-item\">Single Portfolio Item</a>
          <a href=\"blog-home-1.html\" class=\"list-group-item\">Blog Home 1</a>
          <a href=\"blog-home-2.html\" class=\"list-group-item\">Blog Home 2</a>
          <a href=\"blog-post.html\" class=\"list-group-item\">Blog Post</a>
          <a href=\"full-width.html\" class=\"list-group-item\">Full Width Page</a>
          <a href=\"sidebar.html\" class=\"list-group-item active\">Sidebar Page</a>
          <a href=\"faq.html\" class=\"list-group-item\">FAQ</a>
          <a href=\"404.html\" class=\"list-group-item\">404</a>
          <a href=\"pricing.html\" class=\"list-group-item\">Pricing Table</a>
        </div>
      </div>
      <!-- Content Column -->
      <div class=\"col-lg-9 mb-4\">
        <h2>Section Heading</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta, et temporibus, facere perferendis veniam beatae non debitis, numquam blanditiis necessitatibus vel mollitia dolorum laudantium, voluptate dolores iure maxime ducimus fugit.</p>
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
", "modern-business/sidebar.html", "C:\\wamp64\\www\\OCR-P6\\templates\\modern-business\\sidebar.html");
    }
}
