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

/* modern-business/mail/contact_me.php */
class __TwigTemplate_1587f133267f6b6478e0b0c2fdbe52e49dc5e5aa05169b0251c883333d74ec17 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "modern-business/mail/contact_me.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "modern-business/mail/contact_me.php"));

        // line 1
        echo "<?php
// Check for empty fields
if(empty(\$_POST['name'])      ||
   empty(\$_POST['email'])     ||
   empty(\$_POST['phone'])     ||
   empty(\$_POST['message'])   ||
   !filter_var(\$_POST['email'],FILTER_VALIDATE_EMAIL))
   {
   echo \"No arguments Provided!\";
   return false;
   }
   
\$name = strip_tags(htmlspecialchars(\$_POST['name']));
\$email_address = strip_tags(htmlspecialchars(\$_POST['email']));
\$phone = strip_tags(htmlspecialchars(\$_POST['phone']));
\$message = strip_tags(htmlspecialchars(\$_POST['message']));
   
// Create the email and send the message
\$to = 'yourname@yourdomain.com'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
\$email_subject = \"Website Contact Form:  \$name\";
\$email_body = \"You have received a new message from your website contact form.\\n\\n\".\"Here are the details:\\n\\nName: \$name\\n\\nEmail: \$email_address\\n\\nPhone: \$phone\\n\\nMessage:\\n\$message\";
\$headers = \"From: noreply@yourdomain.com\\n\"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
\$headers .= \"Reply-To: \$email_address\";   
mail(\$to,\$email_subject,\$email_body,\$headers);
return true;         
?>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "modern-business/mail/contact_me.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php
// Check for empty fields
if(empty(\$_POST['name'])      ||
   empty(\$_POST['email'])     ||
   empty(\$_POST['phone'])     ||
   empty(\$_POST['message'])   ||
   !filter_var(\$_POST['email'],FILTER_VALIDATE_EMAIL))
   {
   echo \"No arguments Provided!\";
   return false;
   }
   
\$name = strip_tags(htmlspecialchars(\$_POST['name']));
\$email_address = strip_tags(htmlspecialchars(\$_POST['email']));
\$phone = strip_tags(htmlspecialchars(\$_POST['phone']));
\$message = strip_tags(htmlspecialchars(\$_POST['message']));
   
// Create the email and send the message
\$to = 'yourname@yourdomain.com'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
\$email_subject = \"Website Contact Form:  \$name\";
\$email_body = \"You have received a new message from your website contact form.\\n\\n\".\"Here are the details:\\n\\nName: \$name\\n\\nEmail: \$email_address\\n\\nPhone: \$phone\\n\\nMessage:\\n\$message\";
\$headers = \"From: noreply@yourdomain.com\\n\"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
\$headers .= \"Reply-To: \$email_address\";   
mail(\$to,\$email_subject,\$email_body,\$headers);
return true;         
?>
", "modern-business/mail/contact_me.php", "C:\\wamp64\\www\\OCR-P6\\templates\\modern-business\\mail\\contact_me.php");
    }
}
