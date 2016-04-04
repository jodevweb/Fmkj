<?php

/* layout.twig */
class __TwigTemplate_504d3bbd80ebb1bb10333fa1a8ab821bd21bd91fec1435784129642b610af11a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('head', $context, $blocks);
        // line 25
        echo "
<body>
";
        // line 27
        $this->displayBlock('body', $context, $blocks);
        // line 29
        echo "
";
        // line 30
        $this->displayBlock('footer', $context, $blocks);
        // line 42
        echo "</body>
</html>";
    }

    // line 1
    public function block_head($context, array $blocks = array())
    {
        // line 2
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">
    <link rel=\"icon\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["path"]) ? $context["path"] : null), "views", array()), "html", null, true);
        echo "/favicon.ico\">
    <!-- Bootstrap core CSS -->
    <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["path"]) ? $context["path"] : null), "url", array()), "html", null, true);
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["path"]) ? $context["path"] : null), "bootstrap", array()), "html", null, true);
        echo "/dist/css/bootstrap.min.css\" rel=\"stylesheet\">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["path"]) ? $context["path"] : null), "url", array()), "html", null, true);
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["path"]) ? $context["path"] : null), "bootstrap", array()), "html", null, true);
        echo "/assets/css/ie10-viewport-bug-workaround.css\" rel=\"stylesheet\">

    <!-- Custom styles for this template -->
    <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["path"]) ? $context["path"] : null), "url", array()), "html", null, true);
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["path"]) ? $context["path"] : null), "views", array()), "html", null, true);
        echo "/css/style.css\" rel=\"stylesheet\">

    <title>";
        // line 21
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

</head>
";
    }

    public function block_title($context, array $blocks = array())
    {
    }

    // line 27
    public function block_body($context, array $blocks = array())
    {
    }

    // line 30
    public function block_footer($context, array $blocks = array())
    {
        // line 31
        echo "    <footer>
        <p>&copy; 2015 Company, Inc.</p>
    </footer>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js\"></script>
    <script>window.jQuery || document.write('<script src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["path"]) ? $context["path"] : null), "url", array()), "html", null, true);
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["path"]) ? $context["path"] : null), "bootstrap", array()), "html", null, true);
        echo "/assets/js/vendor/jquery.min.js\"><\\/script>')</script>
    <script src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["path"]) ? $context["path"] : null), "url", array()), "html", null, true);
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["path"]) ? $context["path"] : null), "bootstrap", array()), "html", null, true);
        echo "/dist/js/bootstrap.min.js\"></script>
";
    }

    public function getTemplateName()
    {
        return "layout.twig";
    }

    public function getDebugInfo()
    {
        return array (  115 => 40,  110 => 39,  100 => 31,  97 => 30,  92 => 27,  80 => 21,  74 => 19,  67 => 16,  60 => 13,  55 => 11,  44 => 2,  41 => 1,  36 => 42,  34 => 30,  31 => 29,  29 => 27,  25 => 25,  23 => 1,);
    }
}
/* {% block head %}*/
/* <!DOCTYPE html>*/
/* <html lang="en">*/
/* <head>*/
/*     <meta charset="utf-8">*/
/*     <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1">*/
/*     <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->*/
/*     <meta name="description" content="">*/
/*     <meta name="author" content="">*/
/*     <link rel="icon" href="{{ path.views }}/favicon.ico">*/
/*     <!-- Bootstrap core CSS -->*/
/*     <link href="{{ path.url }}{{ path.bootstrap }}/dist/css/bootstrap.min.css" rel="stylesheet">*/
/* */
/*     <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->*/
/*     <link href="{{ path.url }}{{ path.bootstrap }}/assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">*/
/* */
/*     <!-- Custom styles for this template -->*/
/*     <link href="{{ path.url }}{{ path.views }}/css/style.css" rel="stylesheet">*/
/* */
/*     <title>{% block title %}{% endblock %}</title>*/
/* */
/* </head>*/
/* {% endblock %}*/
/* */
/* <body>*/
/* {% block body %}*/
/* {% endblock %}*/
/* */
/* {% block footer %}*/
/*     <footer>*/
/*         <p>&copy; 2015 Company, Inc.</p>*/
/*     </footer>*/
/* */
/*     <!-- Bootstrap core JavaScript*/
/*     ================================================== -->*/
/*     <!-- Placed at the end of the document so the pages load faster -->*/
/*     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>*/
/*     <script>window.jQuery || document.write('<script src="{{ path.url }}{{ path.bootstrap }}/assets/js/vendor/jquery.min.js"><\/script>')</script>*/
/*     <script src="{{ path.url }}{{ path.bootstrap }}/dist/js/bootstrap.min.js"></script>*/
/* {% endblock %}*/
/* </body>*/
/* </html>*/
