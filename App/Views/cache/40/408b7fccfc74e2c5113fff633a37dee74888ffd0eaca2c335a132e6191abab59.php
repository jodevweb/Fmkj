<?php

/* bootstrap/index.bootstrap.twig */
class __TwigTemplate_32cc18a8ba7aad492da6f9fe10dcd9a3fc33ec15f204a46b770e74d5bdcbbc84 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("bootstrap/layout.bootstrap.twig", "bootstrap/index.bootstrap.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "bootstrap/layout.bootstrap.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, (isset($context["app_name"]) ? $context["app_name"] : null), "html", null, true);
    }

    // line 5
    public function block_head($context, array $blocks = array())
    {
        // line 6
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        // line 10
        echo "<nav class=\"navbar navbar-inverse navbar-fixed-top\">
    <div class=\"container\">
        <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-expanded=\"false\" aria-controls=\"navbar\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
            <a class=\"navbar-brand\" href=\"#\">";
        // line 19
        echo twig_escape_filter($this->env, (isset($context["app_name"]) ? $context["app_name"] : null), "html", null, true);
        echo "</a>
        </div>
        <div id=\"navbar\" class=\"navbar-collapse collapse\">
            <form class=\"navbar-form navbar-right\">
                <div class=\"form-group\">
                    <input type=\"text\" placeholder=\"Email\" class=\"form-control\">
                </div>
                <div class=\"form-group\">
                    <input type=\"password\" placeholder=\"Password\" class=\"form-control\">
                </div>
                <button type=\"submit\" class=\"btn btn-success\">Sign in</button>
            </form>
        </div><!--/.navbar-collapse -->
    </div>
</nav>

<div class=\"container\">
    <!-- Example row of columns -->
    <div class=\"row\">
        <div class=\"col-md-12\">
            ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) ? $context["articles"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 40
            echo "                ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "login", array()), "html", null, true);
            echo " a ecrit :
                <br />
                ";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "titre", array()), "html", null, true);
            echo "
                <br />
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "            ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "test", array()), "html", null, true);
        echo "
        </div>

    </div>

    <hr>
";
    }

    // line 53
    public function block_footer($context, array $blocks = array())
    {
        // line 54
        echo "    ";
        $this->displayParentBlock("footer", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "bootstrap/index.bootstrap.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 54,  115 => 53,  103 => 45,  94 => 42,  88 => 40,  84 => 39,  61 => 19,  50 => 10,  47 => 9,  40 => 6,  37 => 5,  31 => 3,  11 => 1,);
    }
}
/* {% extends "bootstrap/layout.bootstrap.twig" %}*/
/* */
/* {% block title %}{{ app_name }}{% endblock %}*/
/* */
/* {% block head %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/* <nav class="navbar navbar-inverse navbar-fixed-top">*/
/*     <div class="container">*/
/*         <div class="navbar-header">*/
/*             <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">*/
/*                 <span class="sr-only">Toggle navigation</span>*/
/*                 <span class="icon-bar"></span>*/
/*                 <span class="icon-bar"></span>*/
/*                 <span class="icon-bar"></span>*/
/*             </button>*/
/*             <a class="navbar-brand" href="#">{{ app_name }}</a>*/
/*         </div>*/
/*         <div id="navbar" class="navbar-collapse collapse">*/
/*             <form class="navbar-form navbar-right">*/
/*                 <div class="form-group">*/
/*                     <input type="text" placeholder="Email" class="form-control">*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                     <input type="password" placeholder="Password" class="form-control">*/
/*                 </div>*/
/*                 <button type="submit" class="btn btn-success">Sign in</button>*/
/*             </form>*/
/*         </div><!--/.navbar-collapse -->*/
/*     </div>*/
/* </nav>*/
/* */
/* <div class="container">*/
/*     <!-- Example row of columns -->*/
/*     <div class="row">*/
/*         <div class="col-md-12">*/
/*             {% for article in articles %}*/
/*                 {{ article.login }} a ecrit :*/
/*                 <br />*/
/*                 {{ article.titre }}*/
/*                 <br />*/
/*             {% endfor %}*/
/*             {{ post.test }}*/
/*         </div>*/
/* */
/*     </div>*/
/* */
/*     <hr>*/
/* {% endblock %}*/
/* */
/* {% block footer %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
