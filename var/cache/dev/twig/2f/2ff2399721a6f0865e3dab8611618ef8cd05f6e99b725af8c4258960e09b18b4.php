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

/* modern-business/js/contact_me.js */
class __TwigTemplate_247d8ef76443a7d3e4559071eba4f633d12592c2ddb035e048a9f8f1e437fbfa extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "modern-business/js/contact_me.js"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "modern-business/js/contact_me.js"));

        // line 1
        echo "\$(function() {

  \$(\"#contactForm input,#contactForm textarea\").jqBootstrapValidation({
    preventSubmit: true,
    submitError: function(\$form, event, errors) {
      // additional error messages or events
    },
    submitSuccess: function(\$form, event) {
      event.preventDefault(); // prevent default submit behaviour
      // get values from FORM
      var name = \$(\"input#name\").val();
      var email = \$(\"input#email\").val();
      var phone = \$(\"input#phone\").val();
      var message = \$(\"textarea#message\").val();
      var firstName = name; // For Success/Failure Message
      // Check for white space in name for Success/Fail message
      if (firstName.indexOf(' ') >= 0) {
        firstName = name.split(' ').slice(0, -1).join(' ');
      }
      \$this = \$(\"#sendMessageButton\");
      \$this.prop(\"disabled\", true); // Disable submit button until AJAX call is complete to prevent duplicate messages
      \$.ajax({
        url: \"././mail/contact_me.php\",
        type: \"POST\",
        data: {
          name: name,
          phone: phone,
          email: email,
          message: message
        },
        cache: false,
        success: function() {
          // Success message
          \$('#success').html(\"<div class='alert alert-success'>\");
          \$('#success > .alert-success').html(\"<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;\")
            .append(\"</button>\");
          \$('#success > .alert-success')
            .append(\"<strong>Your message has been sent. </strong>\");
          \$('#success > .alert-success')
            .append('</div>');
          //clear all fields
          \$('#contactForm').trigger(\"reset\");
        },
        error: function() {
          // Fail message
          \$('#success').html(\"<div class='alert alert-danger'>\");
          \$('#success > .alert-danger').html(\"<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;\")
            .append(\"</button>\");
          \$('#success > .alert-danger').append(\$(\"<strong>\").text(\"Sorry \" + firstName + \", it seems that my mail server is not responding. Please try again later!\"));
          \$('#success > .alert-danger').append('</div>');
          //clear all fields
          \$('#contactForm').trigger(\"reset\");
        },
        complete: function() {
          setTimeout(function() {
            \$this.prop(\"disabled\", false); // Re-enable submit button when AJAX call is complete
          }, 1000);
        }
      });
    },
    filter: function() {
      return \$(this).is(\":visible\");
    },
  });

  \$(\"a[data-toggle=\\\"tab\\\"]\").click(function(e) {
    e.preventDefault();
    \$(this).tab(\"show\");
  });
});

/*When clicking on Full hide fail/success boxes */
\$('#name').focus(function() {
  \$('#success').html('');
});
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "modern-business/js/contact_me.js";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("\$(function() {

  \$(\"#contactForm input,#contactForm textarea\").jqBootstrapValidation({
    preventSubmit: true,
    submitError: function(\$form, event, errors) {
      // additional error messages or events
    },
    submitSuccess: function(\$form, event) {
      event.preventDefault(); // prevent default submit behaviour
      // get values from FORM
      var name = \$(\"input#name\").val();
      var email = \$(\"input#email\").val();
      var phone = \$(\"input#phone\").val();
      var message = \$(\"textarea#message\").val();
      var firstName = name; // For Success/Failure Message
      // Check for white space in name for Success/Fail message
      if (firstName.indexOf(' ') >= 0) {
        firstName = name.split(' ').slice(0, -1).join(' ');
      }
      \$this = \$(\"#sendMessageButton\");
      \$this.prop(\"disabled\", true); // Disable submit button until AJAX call is complete to prevent duplicate messages
      \$.ajax({
        url: \"././mail/contact_me.php\",
        type: \"POST\",
        data: {
          name: name,
          phone: phone,
          email: email,
          message: message
        },
        cache: false,
        success: function() {
          // Success message
          \$('#success').html(\"<div class='alert alert-success'>\");
          \$('#success > .alert-success').html(\"<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;\")
            .append(\"</button>\");
          \$('#success > .alert-success')
            .append(\"<strong>Your message has been sent. </strong>\");
          \$('#success > .alert-success')
            .append('</div>');
          //clear all fields
          \$('#contactForm').trigger(\"reset\");
        },
        error: function() {
          // Fail message
          \$('#success').html(\"<div class='alert alert-danger'>\");
          \$('#success > .alert-danger').html(\"<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;\")
            .append(\"</button>\");
          \$('#success > .alert-danger').append(\$(\"<strong>\").text(\"Sorry \" + firstName + \", it seems that my mail server is not responding. Please try again later!\"));
          \$('#success > .alert-danger').append('</div>');
          //clear all fields
          \$('#contactForm').trigger(\"reset\");
        },
        complete: function() {
          setTimeout(function() {
            \$this.prop(\"disabled\", false); // Re-enable submit button when AJAX call is complete
          }, 1000);
        }
      });
    },
    filter: function() {
      return \$(this).is(\":visible\");
    },
  });

  \$(\"a[data-toggle=\\\"tab\\\"]\").click(function(e) {
    e.preventDefault();
    \$(this).tab(\"show\");
  });
});

/*When clicking on Full hide fail/success boxes */
\$('#name').focus(function() {
  \$('#success').html('');
});
", "modern-business/js/contact_me.js", "C:\\wamp64\\www\\OCR-P6\\templates\\modern-business\\js\\contact_me.js");
    }
}
