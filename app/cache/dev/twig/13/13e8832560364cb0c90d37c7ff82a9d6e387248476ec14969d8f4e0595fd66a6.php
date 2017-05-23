<?php

/* ::base.html.twig */
class __TwigTemplate_45346771fa076a92a6afb0857fb17c51d53a6d02104191997a63437a1b2422cf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_48c78c6f1370bd142ab83d12c1368489ee9fc682645e151328b30e01f602a3ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48c78c6f1370bd142ab83d12c1368489ee9fc682645e151328b30e01f602a3ef->enter($__internal_48c78c6f1370bd142ab83d12c1368489ee9fc682645e151328b30e01f602a3ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_48c78c6f1370bd142ab83d12c1368489ee9fc682645e151328b30e01f602a3ef->leave($__internal_48c78c6f1370bd142ab83d12c1368489ee9fc682645e151328b30e01f602a3ef_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_d50703df0e0e9f0dfd94912eb4048a69cc85d60e6eaddc0c6765bf774a084fed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d50703df0e0e9f0dfd94912eb4048a69cc85d60e6eaddc0c6765bf774a084fed->enter($__internal_d50703df0e0e9f0dfd94912eb4048a69cc85d60e6eaddc0c6765bf774a084fed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_d50703df0e0e9f0dfd94912eb4048a69cc85d60e6eaddc0c6765bf774a084fed->leave($__internal_d50703df0e0e9f0dfd94912eb4048a69cc85d60e6eaddc0c6765bf774a084fed_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_1683da5dd9121e5287d0c52a3cf005b257bb8375be36f433d7f793f5b129cc56 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1683da5dd9121e5287d0c52a3cf005b257bb8375be36f433d7f793f5b129cc56->enter($__internal_1683da5dd9121e5287d0c52a3cf005b257bb8375be36f433d7f793f5b129cc56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_1683da5dd9121e5287d0c52a3cf005b257bb8375be36f433d7f793f5b129cc56->leave($__internal_1683da5dd9121e5287d0c52a3cf005b257bb8375be36f433d7f793f5b129cc56_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_2c15cf7c6749a4dd4c55453d87afe29ca1edb6bdf2bff504e279383721af082f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c15cf7c6749a4dd4c55453d87afe29ca1edb6bdf2bff504e279383721af082f->enter($__internal_2c15cf7c6749a4dd4c55453d87afe29ca1edb6bdf2bff504e279383721af082f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_2c15cf7c6749a4dd4c55453d87afe29ca1edb6bdf2bff504e279383721af082f->leave($__internal_2c15cf7c6749a4dd4c55453d87afe29ca1edb6bdf2bff504e279383721af082f_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_4164448d65b7030805cc10f0cada2aa9da92b2dda054b098fd33618c03f95b7e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4164448d65b7030805cc10f0cada2aa9da92b2dda054b098fd33618c03f95b7e->enter($__internal_4164448d65b7030805cc10f0cada2aa9da92b2dda054b098fd33618c03f95b7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_4164448d65b7030805cc10f0cada2aa9da92b2dda054b098fd33618c03f95b7e->leave($__internal_4164448d65b7030805cc10f0cada2aa9da92b2dda054b098fd33618c03f95b7e_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "::base.html.twig", "/home/gaudyk/PhpstormProjects/carmex/carm/app/Resources/views/base.html.twig");
    }
}
