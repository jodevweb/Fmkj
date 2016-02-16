<?php

/* layout.twig */
class __TwigTemplate_62ee5109e536d9f65b1afa077034f75abee12746039501499f7c1b458b433581 extends Twig_Template
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
        // line 17
        echo "
<body>
";
        // line 19
        $this->displayBlock('body', $context, $blocks);
        // line 21
        echo "
";
        // line 22
        $this->displayBlock('footer', $context, $blocks);
        // line 32
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

    <title>";
        // line 13
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

</head>
";
    }

    public function block_title($context, array $blocks = array())
    {
    }

    // line 19
    public function block_body($context, array $blocks = array())
    {
    }

    // line 22
    public function block_footer($context, array $blocks = array())
    {
        // line 23
        echo "    <footer>
        <p>&copy; 2015 Company, Inc.</p>
    </footer>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js\"></script>
";
    }

    public function getTemplateName()
    {
        return "layout.twig";
    }

    public function getDebugInfo()
    {
        return array (  80 => 23,  77 => 22,  72 => 19,  60 => 13,  55 => 11,  44 => 2,  41 => 1,  36 => 32,  34 => 22,  31 => 21,  29 => 19,  25 => 17,  23 => 1,);
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
/* <!-- Bootstrap core JavaScript*/
/* ================================================== -->*/
/* <!-- Placed at the end of the document so the pages load faster -->*/
/* <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>*/
/* {% endblock %}*/
/* </body>*/
/* </html>*/
