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

/* modern-business/index.html */
class __TwigTemplate_7cceda98f27d97a06eac6929376884a4395743363061cb47a770969eebf29133 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "modern-business/index.html"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "modern-business/index.html"));

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

  <header>
    <div id=\"carouselExampleIndicators\" class=\"carousel slide\" data-ride=\"carousel\">
      <ol class=\"carousel-indicators\">
        <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"0\" class=\"active\"></li>
        <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"1\"></li>
        <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"2\"></li>
      </ol>
      <div class=\"carousel-inner\" role=\"listbox\">
        <!-- Slide One - Set the background image for this slide in the line below -->
        <div class=\"carousel-item active\" style=\"background-image: url('http://placehold.it/1900x1080')\">
          <div class=\"carousel-caption d-none d-md-block\">
            <h3>First Slide</h3>
            <p>This is a description for the first slide.</p>
          </div>
        </div>
        <!-- Slide Two - Set the background image for this slide in the line below -->
        <div class=\"carousel-item\" style=\"background-image: url('http://placehold.it/1900x1080')\">
          <div class=\"carousel-caption d-none d-md-block\">
            <h3>Second Slide</h3>
            <p>This is a description for the second slide.</p>
          </div>
        </div>
        <!-- Slide Three - Set the background image for this slide in the line below -->
        <div class=\"carousel-item\" style=\"background-image: url('http://placehold.it/1900x1080')\">
          <div class=\"carousel-caption d-none d-md-block\">
            <h3>Third Slide</h3>
            <p>This is a description for the third slide.</p>
          </div>
        </div>
      </div>
      <a class=\"carousel-control-prev\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"prev\">
        <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
        <span class=\"sr-only\">Previous</span>
      </a>
      <a class=\"carousel-control-next\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"next\">
        <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
        <span class=\"sr-only\">Next</span>
      </a>
    </div>
  </header>

  <!-- Page Content -->
  <div class=\"container\">

    <h1 class=\"my-4\">Welcome to Modern Business</h1>

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

    <!-- Portfolio Section -->
    <h2>Portfolio Heading</h2>

    <div class=\"row\">
      <div class=\"col-lg-4 col-sm-6 portfolio-item\">
        <div class=\"card h-100\">
          <a href=\"#\"><img class=\"card-img-top\" src=\"http://placehold.it/700x400\" alt=\"\"></a>
          <div class=\"card-body\">
            <h4 class=\"card-title\">
              <a href=\"#\">Project One</a>
            </h4>
            <p class=\"card-text\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur eum quasi sapiente nesciunt? Voluptatibus sit, repellat sequi itaque deserunt, dolores in, nesciunt, illum tempora ex quae? Nihil, dolorem!</p>
          </div>
        </div>
      </div>
      <div class=\"col-lg-4 col-sm-6 portfolio-item\">
        <div class=\"card h-100\">
          <a href=\"#\"><img class=\"card-img-top\" src=\"http://placehold.it/700x400\" alt=\"\"></a>
          <div class=\"card-body\">
            <h4 class=\"card-title\">
              <a href=\"#\">Project Two</a>
            </h4>
            <p class=\"card-text\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
          </div>
        </div>
      </div>
      <div class=\"col-lg-4 col-sm-6 portfolio-item\">
        <div class=\"card h-100\">
          <a href=\"#\"><img class=\"card-img-top\" src=\"http://placehold.it/700x400\" alt=\"\"></a>
          <div class=\"card-body\">
            <h4 class=\"card-title\">
              <a href=\"#\">Project Three</a>
            </h4>
            <p class=\"card-text\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos quisquam, error quod sed cumque, odio distinctio velit nostrum temporibus necessitatibus et facere atque iure perspiciatis mollitia recusandae vero vel quam!</p>
          </div>
        </div>
      </div>
      <div class=\"col-lg-4 col-sm-6 portfolio-item\">
        <div class=\"card h-100\">
          <a href=\"#\"><img class=\"card-img-top\" src=\"http://placehold.it/700x400\" alt=\"\"></a>
          <div class=\"card-body\">
            <h4 class=\"card-title\">
              <a href=\"#\">Project Four</a>
            </h4>
            <p class=\"card-text\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
          </div>
        </div>
      </div>
      <div class=\"col-lg-4 col-sm-6 portfolio-item\">
        <div class=\"card h-100\">
          <a href=\"#\"><img class=\"card-img-top\" src=\"http://placehold.it/700x400\" alt=\"\"></a>
          <div class=\"card-body\">
            <h4 class=\"card-title\">
              <a href=\"#\">Project Five</a>
            </h4>
            <p class=\"card-text\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
          </div>
        </div>
      </div>
      <div class=\"col-lg-4 col-sm-6 portfolio-item\">
        <div class=\"card h-100\">
          <a href=\"#\"><img class=\"card-img-top\" src=\"http://placehold.it/700x400\" alt=\"\"></a>
          <div class=\"card-body\">
            <h4 class=\"card-title\">
              <a href=\"#\">Project Six</a>
            </h4>
            <p class=\"card-text\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque earum nostrum suscipit ducimus nihil provident, perferendis rem illo, voluptate atque, sit eius in voluptates, nemo repellat fugiat excepturi! Nemo, esse.</p>
          </div>
        </div>
      </div>
    </div>
    <!-- /.row -->

    <!-- Features Section -->
    <div class=\"row\">
      <div class=\"col-lg-6\">
        <h2>Modern Business Features</h2>
        <p>The Modern Business template by Start Bootstrap includes:</p>
        <ul>
          <li>
            <strong>Bootstrap v4</strong>
          </li>
          <li>jQuery</li>
          <li>Font Awesome</li>
          <li>Working contact form with validation</li>
          <li>Unstyled page elements for easy customization</li>
        </ul>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis, omnis doloremque non cum id reprehenderit, quisquam totam aspernatur tempora minima unde aliquid ea culpa sunt. Reiciendis quia dolorum ducimus unde.</p>
      </div>
      <div class=\"col-lg-6\">
        <img class=\"img-fluid rounded\" src=\"http://placehold.it/700x450\" alt=\"\">
      </div>
    </div>
    <!-- /.row -->

    <hr>

    <!-- Call to Action Section -->
    <div class=\"row mb-4\">
      <div class=\"col-md-8\">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias, expedita, saepe, vero rerum deleniti beatae veniam harum neque nemo praesentium cum alias asperiores commodi.</p>
      </div>
      <div class=\"col-md-4\">
        <a class=\"btn btn-lg btn-secondary btn-block\" href=\"#\">Call to Action</a>
      </div>
    </div>

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
        return "modern-business/index.html";
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

  <header>
    <div id=\"carouselExampleIndicators\" class=\"carousel slide\" data-ride=\"carousel\">
      <ol class=\"carousel-indicators\">
        <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"0\" class=\"active\"></li>
        <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"1\"></li>
        <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"2\"></li>
      </ol>
      <div class=\"carousel-inner\" role=\"listbox\">
        <!-- Slide One - Set the background image for this slide in the line below -->
        <div class=\"carousel-item active\" style=\"background-image: url('http://placehold.it/1900x1080')\">
          <div class=\"carousel-caption d-none d-md-block\">
            <h3>First Slide</h3>
            <p>This is a description for the first slide.</p>
          </div>
        </div>
        <!-- Slide Two - Set the background image for this slide in the line below -->
        <div class=\"carousel-item\" style=\"background-image: url('http://placehold.it/1900x1080')\">
          <div class=\"carousel-caption d-none d-md-block\">
            <h3>Second Slide</h3>
            <p>This is a description for the second slide.</p>
          </div>
        </div>
        <!-- Slide Three - Set the background image for this slide in the line below -->
        <div class=\"carousel-item\" style=\"background-image: url('http://placehold.it/1900x1080')\">
          <div class=\"carousel-caption d-none d-md-block\">
            <h3>Third Slide</h3>
            <p>This is a description for the third slide.</p>
          </div>
        </div>
      </div>
      <a class=\"carousel-control-prev\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"prev\">
        <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
        <span class=\"sr-only\">Previous</span>
      </a>
      <a class=\"carousel-control-next\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"next\">
        <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
        <span class=\"sr-only\">Next</span>
      </a>
    </div>
  </header>

  <!-- Page Content -->
  <div class=\"container\">

    <h1 class=\"my-4\">Welcome to Modern Business</h1>

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

    <!-- Portfolio Section -->
    <h2>Portfolio Heading</h2>

    <div class=\"row\">
      <div class=\"col-lg-4 col-sm-6 portfolio-item\">
        <div class=\"card h-100\">
          <a href=\"#\"><img class=\"card-img-top\" src=\"http://placehold.it/700x400\" alt=\"\"></a>
          <div class=\"card-body\">
            <h4 class=\"card-title\">
              <a href=\"#\">Project One</a>
            </h4>
            <p class=\"card-text\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur eum quasi sapiente nesciunt? Voluptatibus sit, repellat sequi itaque deserunt, dolores in, nesciunt, illum tempora ex quae? Nihil, dolorem!</p>
          </div>
        </div>
      </div>
      <div class=\"col-lg-4 col-sm-6 portfolio-item\">
        <div class=\"card h-100\">
          <a href=\"#\"><img class=\"card-img-top\" src=\"http://placehold.it/700x400\" alt=\"\"></a>
          <div class=\"card-body\">
            <h4 class=\"card-title\">
              <a href=\"#\">Project Two</a>
            </h4>
            <p class=\"card-text\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
          </div>
        </div>
      </div>
      <div class=\"col-lg-4 col-sm-6 portfolio-item\">
        <div class=\"card h-100\">
          <a href=\"#\"><img class=\"card-img-top\" src=\"http://placehold.it/700x400\" alt=\"\"></a>
          <div class=\"card-body\">
            <h4 class=\"card-title\">
              <a href=\"#\">Project Three</a>
            </h4>
            <p class=\"card-text\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos quisquam, error quod sed cumque, odio distinctio velit nostrum temporibus necessitatibus et facere atque iure perspiciatis mollitia recusandae vero vel quam!</p>
          </div>
        </div>
      </div>
      <div class=\"col-lg-4 col-sm-6 portfolio-item\">
        <div class=\"card h-100\">
          <a href=\"#\"><img class=\"card-img-top\" src=\"http://placehold.it/700x400\" alt=\"\"></a>
          <div class=\"card-body\">
            <h4 class=\"card-title\">
              <a href=\"#\">Project Four</a>
            </h4>
            <p class=\"card-text\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
          </div>
        </div>
      </div>
      <div class=\"col-lg-4 col-sm-6 portfolio-item\">
        <div class=\"card h-100\">
          <a href=\"#\"><img class=\"card-img-top\" src=\"http://placehold.it/700x400\" alt=\"\"></a>
          <div class=\"card-body\">
            <h4 class=\"card-title\">
              <a href=\"#\">Project Five</a>
            </h4>
            <p class=\"card-text\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
          </div>
        </div>
      </div>
      <div class=\"col-lg-4 col-sm-6 portfolio-item\">
        <div class=\"card h-100\">
          <a href=\"#\"><img class=\"card-img-top\" src=\"http://placehold.it/700x400\" alt=\"\"></a>
          <div class=\"card-body\">
            <h4 class=\"card-title\">
              <a href=\"#\">Project Six</a>
            </h4>
            <p class=\"card-text\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque earum nostrum suscipit ducimus nihil provident, perferendis rem illo, voluptate atque, sit eius in voluptates, nemo repellat fugiat excepturi! Nemo, esse.</p>
          </div>
        </div>
      </div>
    </div>
    <!-- /.row -->

    <!-- Features Section -->
    <div class=\"row\">
      <div class=\"col-lg-6\">
        <h2>Modern Business Features</h2>
        <p>The Modern Business template by Start Bootstrap includes:</p>
        <ul>
          <li>
            <strong>Bootstrap v4</strong>
          </li>
          <li>jQuery</li>
          <li>Font Awesome</li>
          <li>Working contact form with validation</li>
          <li>Unstyled page elements for easy customization</li>
        </ul>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis, omnis doloremque non cum id reprehenderit, quisquam totam aspernatur tempora minima unde aliquid ea culpa sunt. Reiciendis quia dolorum ducimus unde.</p>
      </div>
      <div class=\"col-lg-6\">
        <img class=\"img-fluid rounded\" src=\"http://placehold.it/700x450\" alt=\"\">
      </div>
    </div>
    <!-- /.row -->

    <hr>

    <!-- Call to Action Section -->
    <div class=\"row mb-4\">
      <div class=\"col-md-8\">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias, expedita, saepe, vero rerum deleniti beatae veniam harum neque nemo praesentium cum alias asperiores commodi.</p>
      </div>
      <div class=\"col-md-4\">
        <a class=\"btn btn-lg btn-secondary btn-block\" href=\"#\">Call to Action</a>
      </div>
    </div>

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
", "modern-business/index.html", "C:\\wamp64\\www\\OCR-P6\\templates\\modern-business\\index.html");
    }
}
