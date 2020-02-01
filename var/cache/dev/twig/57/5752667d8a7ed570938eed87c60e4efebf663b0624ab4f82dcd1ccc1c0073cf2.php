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

/* modern-business/package.json */
class __TwigTemplate_08351280335d005ff3d6563f31bef04c9e8fc7ee3ead366f65bc8a782df1ca04 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "modern-business/package.json"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "modern-business/package.json"));

        // line 1
        echo "{
    \"title\": \"Modern Business\",
    \"name\": \"startbootstrap-modern-business\",
    \"version\": \"4.2.1\",
    \"scripts\": {
        \"start\": \"node_modules/.bin/gulp watch\"
    },
    \"description\": \"A multipurpose HTML website template built with Bootstrap\",
    \"keywords\": [
        \"css\",
        \"sass\",
        \"html\",
        \"responsive\",
        \"theme\",
        \"template\"
    ],
    \"homepage\": \"https://startbootstrap.com/template-overviews/modern-business\",
    \"bugs\": {
        \"url\": \"https://github.com/BlackrockDigital/startbootstrap-modern-business/issues\",
        \"email\": \"feedback@startbootstrap.com\"
    },
    \"license\": \"MIT\",
    \"author\": \"Start Bootstrap\",
    \"contributors\": [
        \"David Miller (http://davidmiller.io/)\"
    ],
    \"repository\": {
        \"type\": \"git\",
        \"url\": \"https://github.com/BlackrockDigital/startbootstrap-modern-business.git\"
    },
    \"dependencies\": {
        \"bootstrap\": \"4.3.1\",
        \"jquery\": \"3.4.1\"
    },
    \"devDependencies\": {
        \"browser-sync\": \"2.26.7\",
        \"del\": \"^4.1.1\",
        \"gulp\": \"4.0.2\",
        \"merge-stream\": \"2.0.0\"
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "modern-business/package.json";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{
    \"title\": \"Modern Business\",
    \"name\": \"startbootstrap-modern-business\",
    \"version\": \"4.2.1\",
    \"scripts\": {
        \"start\": \"node_modules/.bin/gulp watch\"
    },
    \"description\": \"A multipurpose HTML website template built with Bootstrap\",
    \"keywords\": [
        \"css\",
        \"sass\",
        \"html\",
        \"responsive\",
        \"theme\",
        \"template\"
    ],
    \"homepage\": \"https://startbootstrap.com/template-overviews/modern-business\",
    \"bugs\": {
        \"url\": \"https://github.com/BlackrockDigital/startbootstrap-modern-business/issues\",
        \"email\": \"feedback@startbootstrap.com\"
    },
    \"license\": \"MIT\",
    \"author\": \"Start Bootstrap\",
    \"contributors\": [
        \"David Miller (http://davidmiller.io/)\"
    ],
    \"repository\": {
        \"type\": \"git\",
        \"url\": \"https://github.com/BlackrockDigital/startbootstrap-modern-business.git\"
    },
    \"dependencies\": {
        \"bootstrap\": \"4.3.1\",
        \"jquery\": \"3.4.1\"
    },
    \"devDependencies\": {
        \"browser-sync\": \"2.26.7\",
        \"del\": \"^4.1.1\",
        \"gulp\": \"4.0.2\",
        \"merge-stream\": \"2.0.0\"
    }
}
", "modern-business/package.json", "C:\\wamp64\\www\\OCR-P6\\templates\\modern-business\\package.json");
    }
}
